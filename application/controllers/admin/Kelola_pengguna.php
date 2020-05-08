<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_pengguna extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        if($this->m_login->is_level() != "1"){
            redirect("login/");
        }
    }

    function index()
    {
        $this->load->model('m_kelola_pengguna');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");
        $id_pengguna    = $this->uri->segment(4);

        $data = array(
            'title'         => 'Kelola Pengguna | Si-RAPS',
            'session'       => $this->m_kelola_pengguna->tampil_session($id_session),
            'hak_akses'     => $this->m_kelola_pengguna->tampil_hak_akses($id_hak_akses),
            'data_pengguna' => $this->m_kelola_pengguna->tampil_pengguna()
        );

        $this->load->view('admin/kelola_pengguna', $data);
    }

    function tambah_pengguna()
    {
        $this->load->model('m_kelola_pengguna');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data = array(
            'title'         => 'Tambah Pengguna | Si-RAPS',
            'session'       => $this->m_kelola_pengguna->tampil_session($id_session),
            'hak_akses'     => $this->m_kelola_pengguna->tampil_hak_akses($id_hak_akses)
        );

        $this->load->view('admin/tambah_pengguna', $data);
    }

    function simpan_pengguna()
    {
        $this->load->model('m_kelola_pengguna');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data = array(
            'title'         => 'Tambah Pengguna | Si-RAPS',
            'session'       => $this->m_kelola_pengguna->tampil_session($id_session),
            'hak_akses'     => $this->m_kelola_pengguna->tampil_hak_akses($id_hak_akses),
        );

        $username           = $this->input->post('fusername');
        $query_cek_username = $this->db->query("SELECT username FROM auth WHERE username='$username'");
        $cek_username       = $query_cek_username->num_rows();

        $nidn               = $this->input->post('fnidn');
        $query_cek_nidn     = $this->db->query("SELECT nidn FROM pengguna WHERE nidn='$nidn'");
        $cek_nidn           = $query_cek_nidn->num_rows();

        if($cek_username > 0 && $cek_nidn > 0){
            $data['error']          = '
                                       <div class="alert alert-danger" style="text-align:center;"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Username dan NIDN sudah digunakan!</div>
                                      ';

            $data['data_pengguna']  = $this->m_kelola_pengguna->tampil_pengguna();

            $this->load->view('admin/kelola_pengguna', $data);

        }else if($cek_username > 0){
            $data['error']          = '
                                       <div class="alert alert-danger" style="text-align:center;"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Username sudah digunakan!</div>
                                      ';

            $data['data_pengguna']  = $this->m_kelola_pengguna->tampil_pengguna();

            $this->load->view('admin/kelola_pengguna', $data);

        }else if($cek_nidn > 0){
            $data['error']          = '
                                       <div class="alert alert-danger" style="text-align:center;"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> NIDN sudah terdaftar pada pengguna lainnya!</div>
                                      ';

            $data['data_pengguna']  = $this->m_kelola_pengguna->tampil_pengguna();

            $this->load->view('admin/kelola_pengguna', $data);

        }else{
            $nama           = $this->input->post('fnama');
            $nidn           = $this->input->post('fnidn');
            $jabatan        = $this->input->post('fjabatan');
            $kriteria       = $this->input->post('fid_kriteria');
            $homebase       = $this->input->post('fhomebase');
            $username       = $this->input->post('fusername');
            $password       = $this->input->post('fpassword');
            $id_hak_akses   = $this->input->post('fhak_akses');

            $data_pengguna  = array(
                'nama'          => $nama,
                'nidn'          => $nidn,
                'jabatan'       => $jabatan,
                'homebase'      => $homebase
            );

            // mengambil id insert pengguna
            $id_auth = $this->m_kelola_pengguna->simpan_pengguna('pengguna',$data_pengguna);

            $data_auth      = array(
                'id_auth'       => $id_auth,
                'kriteria'      => $kriteria,
                'username'      => $username,
                'password'      => $password,
                'id_hak_akses'  => $id_hak_akses    
            );

            $this->m_kelola_pengguna->simpan_pengguna('auth',$data_auth);

            redirect('admin/kelola_pengguna');
        }
    }

    function edit_pengguna($id_pengguna)
    {
        $this->load->model('m_kelola_pengguna');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");
        $id_pengguna    = $this->uri->segment(4);

        $data = array(
            'title'         => 'Edit Pengguna | Si-RAPS',
            'session'       => $this->m_kelola_pengguna->tampil_session($id_session),
            'hak_akses'     => $this->m_kelola_pengguna->tampil_hak_akses($id_hak_akses),
            'data_auth'     => $this->m_kelola_pengguna->edit_auth($id_pengguna),
            'data_pengguna' => $this->m_kelola_pengguna->edit_pengguna($id_pengguna)
        );

        $this->load->view('admin/edit_pengguna', $data);
    }

    function update_pengguna()
    {
        $this->load->model('m_kelola_pengguna');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data = array(
            'title'         => 'Tambah Pengguna | Si-RAPS',
            'session'       => $this->m_kelola_pengguna->tampil_session($id_session),
            'hak_akses'     => $this->m_kelola_pengguna->tampil_hak_akses($id_hak_akses),
        );

        $id                 = $this->input->post("id_pengguna");

        $username           = $this->input->post('fusername');
        $query_cek_username = $this->db->query("SELECT username FROM auth WHERE username='$username' AND id_auth!='$id'");
        $cek_username       = $query_cek_username->num_rows();

        $nidn               = $this->input->post('fnidn');
        $query_cek_nidn     = $this->db->query("SELECT nidn FROM pengguna WHERE nidn='$nidn' AND id_pengguna!='$id' AND nidn!='-' AND nidn!=''");
        $cek_nidn           = $query_cek_nidn->num_rows();

        if($cek_username > 0 && $cek_nidn > 0){
            $data['error']          = '
                                       <div class="alert alert-danger" style="text-align:center;"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Username dan NIDN sudah digunakan!</div>
                                      ';

            $data['data_pengguna']  = $this->m_kelola_pengguna->tampil_pengguna();

            $this->load->view('admin/kelola_pengguna', $data);

        }else if($cek_username > 0){
            $data['error']          = '
                                       <div class="alert alert-danger" style="text-align:center;"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Username sudah digunakan!</div>
                                      ';

            $data['data_pengguna']  = $this->m_kelola_pengguna->tampil_pengguna();

            $this->load->view('admin/kelola_pengguna', $data);

        }else if($cek_nidn > 0){
            $data['error']          = '
                                       <div class="alert alert-danger" style="text-align:center;"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> NIDN sudah terdaftar pada pengguna lainnya!</div>
                                      ';

            $data['data_pengguna']  = $this->m_kelola_pengguna->tampil_pengguna();

            $this->load->view('admin/kelola_pengguna', $data);

        }else{
            $id_auth['id_auth']         = $this->input->post("id_pengguna");
            $id_pengguna['id_pengguna'] = $this->input->post("id_pengguna");
            $nama                       = $this->input->post('fnama');
            $nidn                       = $this->input->post('fnidn');
            $jabatan                    = $this->input->post('fjabatan');
            $kriteria                   = $this->input->post('fid_kriteria');
            $homebase                   = $this->input->post('fhomebase');
            $username                   = $this->input->post('fusername');
            $password                   = $this->input->post('fpassword');
            $hak_akses                  = $this->input->post('fhak_akses');

            $data_pengguna = array(
                'nama'          => $nama,
                'nidn'          => $nidn,
                'jabatan'       => $jabatan,
                'homebase'      => $homebase
            );

            $data_auth = array(
                'kriteria'      => $kriteria,
                'username'      => $username,
                'password'      => $password,
                'id_hak_akses'  => $hak_akses    
            );

            $this->m_kelola_pengguna->update_pengguna($data_pengguna, $id_pengguna);
            $this->m_kelola_pengguna->update_auth($data_auth, $id_auth);

            redirect('admin/kelola_pengguna');
        }
    }

    function hapus_pengguna($id_pengguna)
    {
        $this->load->model('m_kelola_pengguna');

        $id_hapus['id_pengguna'] = $this->uri->segment(4);

        $this->m_kelola_pengguna->hapus_pengguna($id_hapus);

        redirect('admin/kelola_pengguna');
    }
}
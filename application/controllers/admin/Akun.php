<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
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
        $this->load->model('m_akun');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");
        $id_profil      = $this->session->userdata("sess_id_auth");

        $data = array(
            'title'         => 'Akun | Si-RAPS',
            'session'       => $this->m_akun->tampil_session($id_session),
            'hak_akses'     => $this->m_akun->tampil_hak_akses($id_hak_akses),
            'data_auth'     => $this->m_akun->tampil_auth($id_profil),
            'data_pengguna' => $this->m_akun->tampil_pengguna($id_profil)
        );

        $this->load->view("admin/akun", $data);      
    }

    function edit_profil()
    {
        $this->load->model('m_akun');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");
        $id_profil      = $this->session->userdata("sess_id_auth");

        $data = array(
            'title'         => 'Edit Profil | Si-RAPS',
            'session'       => $this->m_akun->tampil_session($id_session),
            'hak_akses'     => $this->m_akun->tampil_hak_akses($id_hak_akses),
            'data_auth'     => $this->m_akun->tampil_auth($id_profil),
            'data_pengguna' => $this->m_akun->tampil_pengguna($id_profil)
        );

        $this->load->view('admin/edit_profil', $data);
    }

    function update_profil()
    {
        $this->load->model('m_akun');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");
        $id_profil      = $this->session->userdata("sess_id_auth");

        $data = array(
            'title'         => 'Tambah Pengguna | Si-RAPS',
            'session'       => $this->m_akun->tampil_session($id_session),
            'hak_akses'     => $this->m_akun->tampil_hak_akses($id_hak_akses),
            'data_auth'     => $this->m_akun->tampil_auth($id_profil),
            'data_pengguna' => $this->m_akun->tampil_pengguna($id_profil)
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

            $this->load->view('admin/akun', $data);

        }else if($cek_username > 0){
            $data['error']          = '
                                       <div class="alert alert-danger" style="text-align:center;"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Username sudah digunakan!</div>
                                      ';

            $this->load->view('admin/akun', $data);

        }else if($cek_nidn > 0){
            $data['error']          = '
                                       <div class="alert alert-danger" style="text-align:center;"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> NIDN sudah terdaftar pada pengguna lainnya!</div>
                                      ';

            $this->load->view('admin/akun', $data);

        }else{
            $id_auth['id_auth']         = $this->input->post('id_pengguna');
            $id_pengguna['id_pengguna'] = $this->input->post('id_pengguna');
            $nama                       = $this->input->post('fnama');
            $nidn                       = $this->input->post('fnidn');
            $jabatan                    = $this->input->post('fjabatan');
            $homebase                   = $this->input->post('fhomebase');
            $username                   = $this->input->post('fusername');
            $password                   = $this->input->post('fpassword');

            $data_pengguna = array(
                'nama'          => $nama,
                'nidn'          => $nidn,
                'jabatan'       => $jabatan,
                'homebase'      => $homebase
            );

            $data_auth = array(
                'username'      => $username,
                'password'      => $password   
            );

            $this->m_akun->update_pengguna($data_pengguna, $id_pengguna);
            $this->m_akun->update_auth($data_auth, $id_auth);

            redirect('admin/akun');
        }
    }
}
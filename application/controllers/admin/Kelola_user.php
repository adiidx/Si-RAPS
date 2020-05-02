<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_user extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        if($this->m_login->is_level() != "Admin"){
            redirect("login/");
        }
    }

    public function index()
    {
        $this->load->model('m_kelola_user');

        $data['title']      = 'Kelola User | Si-RAPS';
        $data['data_user']  = $this->m_kelola_user->tampil_user();

        $this->load->view('admin/kelola_user', $data);       
    }

    public function tambah_user()
    {
        $data['title']  = 'Tambah User | Si-RAPS';

        $this->load->view('admin/tambah_user', $data);
    }

    public function simpan_user()
    {
        $username = $this->input->post('fusername');
        $query_cek_username = $this->db->query("SELECT username FROM user where username='$username'");
        $cek_username = $query_cek_username->num_rows();

        $nidn = $this->input->post('fnidn');
        $query_cek_nidn = $this->db->query("SELECT nidn FROM user where nidn='$nidn'");
        $cek_nidn = $query_cek_nidn->num_rows();

        if($cek_username > 0 && $cek_nidn > 0){
            $this->load->model('m_kelola_user');

            $data['error'] = '<div class="alert alert-danger" style="text-align:center;"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Username dan NIDN sudah digunakan!</div>';

            $data['data_user']  = $this->m_kelola_user->tampil_user();

            $this->load->view('admin/kelola_user', $data);
        }else if($cek_username > 0){
            $this->load->model('m_kelola_user');

            $data['error'] = '<div class="alert alert-danger" style="text-align:center;"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Username sudah digunakan!</div>';

            $data['data_user']  = $this->m_kelola_user->tampil_user();

            $this->load->view('admin/kelola_user', $data);
        }else if($cek_nidn > 0){
            $this->load->model('m_kelola_user');

            $data['error'] = '<div class="alert alert-danger" style="text-align:center;"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> NIDN sudah terdaftar pada user lainnya!</div>';

            $data['data_user']  = $this->m_kelola_user->tampil_user();

            $this->load->view('admin/kelola_user', $data);
        }else{
            $this->load->model('m_kelola_user');

            $nama                       = $this->input->post('fnama');
            $nidn                       = $this->input->post('fnidn');
            $jabatan                    = $this->input->post('fjabatan');
            $penanggungjawab_standar    = $this->input->post('fpenanggungjawab_standar');
            $homebase                   = $this->input->post('fhomebase');
            $username                   = $this->input->post('fusername');
            $password                   = $this->input->post('fpassword');
            $level                      = $this->input->post('flevel');

            $data = array(
                 'nama'                     => $nama,
                 'nidn'                     => $nidn,
                 'jabatan'                  => $jabatan,
                 'penanggungjawab_standar'  => $penanggungjawab_standar,
                 'homebase'                 => $homebase,
                 'username'                 => $username,
                 'password'                 => $password,
                 'level'                    => $level    
            );

            $this->m_kelola_user->simpan_user($data);

            redirect('admin/kelola_user');
        }
    }

    public function edit_user($id_user)
    {
        $this->load->model('m_kelola_user');

        $id_user = $this->uri->segment(4);

        $data = array(
            'title'     => 'Edit User | Si-RAPS',
            'data_user' => $this->m_kelola_user->edit_user($id_user)
        );

        $this->load->view('admin/edit_user', $data);
    }

    public function update_user()
    {
        $this->load->model('m_kelola_user');

        $id_user['id_user']         = $this->input->post("id_user");
        $nama                       = $this->input->post('fnama');
        $nidn                       = $this->input->post('fnidn');
        $jabatan                    = $this->input->post('fjabatan');
        $penanggungjawab_standar    = $this->input->post('fpenanggungjawab_standar');
        $homebase                   = $this->input->post('fhomebase');
        $username                   = $this->input->post('fusername');
        $password                   = $this->input->post('fpassword');
        $level                      = $this->input->post('flevel');

        $data = array(
            'nama'                     => $nama,
            'nidn'                     => $nidn,
            'jabatan'                  => $jabatan,
            'penanggungjawab_standar'  => $penanggungjawab_standar,
            'homebase'                 => $homebase,
            'username'                 => $username,
            'password'                 => $password,
            'level'                    => $level    
        );
  
        $this->m_kelola_user->update_user($data, $id_user);

        redirect('admin/kelola_user');
    }

    public function hapus_user($id_user)
    {
        $this->load->model('m_kelola_user');

        $id_hapus['id_user'] = $this->uri->segment(4);

        $this->m_kelola_user->hapus_user($id_hapus);

        redirect('admin/kelola_user');
    }
}
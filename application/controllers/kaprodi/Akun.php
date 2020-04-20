<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        if($this->m_login->is_level() != "Kaprodi"){
            redirect("login/");
        }
    }

    public function index()
    {
        $this->load->model('m_akun');

        $id_user = $this->session->userdata("user_id");

        $data['data_user']  = $this->m_akun->tampil_user($id_user);

        $this->load->view("kaprodi/akun", $data);       
    }

    public function edit_profil()
    {
        $this->load->model('m_akun');

        $id_user = $this->session->userdata("user_id");

        $data = array(
            'data_user' => $this->m_akun->edit_profil($id_user)
        );

        $this->load->view('kaprodi/edit_profil', $data);
    }

    public function update_profil()
    {
        $this->load->model('m_akun');

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
  
        $this->m_akun->update_profil($data, $id_user);

        redirect('kaprodi/akun');
    }
}
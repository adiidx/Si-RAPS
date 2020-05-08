<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_login');
    }

    public function index()
    {
        if($this->m_login->is_logged_in())
        {
            if($this->session->userdata("sess_id_hak_akses") == "1"){
                redirect('admin/dokumen_akreditasi/');
            }else if($this->session->userdata("sess_id_hak_akses") == "2"){
                redirect('tim_akreditasi/dokumen_akreditasi/');
            }else if($this->session->userdata("sess_id_hak_akses") == "3"){
                redirect('kaprodi/dokumen_akreditasi/');
            }
        }else{
            $this->form_validation->set_rules('fusername', 'Username', 'required');
            $this->form_validation->set_rules('fpassword', 'Password', 'required');

            if ($this->form_validation->run() == TRUE) {
                $username = $this->input->post("fusername", TRUE);
                $password = $this->input->post("fpassword", TRUE);

                $cek_auth = $this->m_login->cek_login('auth', array('username' => $username), array('password' => $password));

                if ($cek_auth != FALSE) {
                    foreach ($cek_auth as $auth) {
                        $session_data = array(
                            'sess_id_auth'      => $auth->id_auth,
                            'sess_id_kriteria'  => $auth->kriteria,
                            'sess_username'     => $auth->username,
                            'sess_password'     => $auth->password,
                            'sess_id_hak_akses' => $auth->id_hak_akses
                        );

                        $this->session->set_userdata($session_data);

                        if($this->session->userdata("sess_id_hak_akses") == "1"){
                            redirect('admin/dokumen_akreditasi/');
                        }else if($this->session->userdata("sess_id_hak_akses") == "2"){
                            redirect('tim_akreditasi/dokumen_akreditasi/');
                        }else if($this->session->userdata("sess_id_hak_akses") == "3"){
                            redirect('kaprodi/dokumen_akreditasi/');
                        }
                    }
                }else{
                    $data['error'] = '<div class="alert alert-danger"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div>';
                    $this->load->view('login', $data);
                }
            }else{
                $this->load->view('login');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
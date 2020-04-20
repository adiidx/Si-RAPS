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
            if($this->session->userdata("level") == "Admin"){
                redirect('admin/dokumen_akreditasi/');
            }else if($this->session->userdata("level") == "Tim Akreditasi"){
                redirect('tim_akreditasi/dokumen_akreditasi/');
            }else if($this->session->userdata("level") == "Kaprodi"){
                redirect('kaprodi/dokumen_akreditasi/');
            }
        }else{
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == TRUE) {
                $username = $this->input->post("username", TRUE);
                $password = $this->input->post("password", TRUE);

                $checking = $this->m_login->cek_login('user', array('username' => $username), array('password' => $password));

                if ($checking != FALSE) {
                    foreach ($checking as $apps) {
                        $session_data = array(
                            'user_id'   => $apps->id_user,
                            'user_name' => $apps->username,
                            'user_pass' => $apps->password,
                            'user_nama' => $apps->nama,
                            'level'     => $apps->level
                        );

                        $this->session->set_userdata($session_data);

                        if($this->session->userdata("level") == "Admin"){
                            redirect('admin/dokumen_akreditasi/');
                        }else if($this->session->userdata("level") == "Tim Akreditasi"){
                            redirect('tim_akreditasi/dokumen_akreditasi/');
                        }else if($this->session->userdata("level") == "Kaprodi"){
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
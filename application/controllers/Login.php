<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        //load model m_login
        $this->load->model('m_login');
    }

    public function index()
    {
        if($this->m_login->is_logged_in())
        {
            //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
            if($this->session->userdata("level") == "Admin"){
                redirect('admin/dashboard/');
            }else if($this->session->userdata("level") == "Tim Akreditasi"){
                redirect('tim_akreditasi/dashboard/');
            }else if($this->session->userdata("level") == "Kaprodi"){
                redirect('kaprodi/dashboard/');
            }
        }else{ //jika session belum terdaftar
            //set form validation
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            //cek validasi
            if ($this->form_validation->run() == TRUE) {
                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = MD5($this->input->post('password', TRUE));
                //checking data via model
                $checking = $this->m_login->check_login('user', array('username' => $username), array('password' => $password));
                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {
                        $session_data = array(
                            'user_id'   => $apps->id_user,
                            'user_name' => $apps->username,
                            'user_pass' => $apps->password,
                            'user_nama' => $apps->nama,
                            'level'     => $apps->level
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);
                        //redirect berdasarkan level user
                        if($this->session->userdata("level") == "Admin"){
                            redirect('admin/dashboard/');
                        }else if($this->session->userdata("level") == "Tim Akreditasi"){
                            redirect('tim_akreditasi/dashboard/');
                        }else if($this->session->userdata("level") == "Kaprodi"){
                            redirect('kaprodi/dashboard/');
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
}
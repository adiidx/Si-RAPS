<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen_akreditasi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        if($this->m_login->is_level() != "Tim Akreditasi"){
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title']      = 'Dokumen Akreditasi - Si-RAPS';
        $data['header']     = 'Dokumen Akreditasi';
        $data['sidebar']    = '
                                <li class="active">
                                    <a href="#"><i class="fas fa-folder-open"></i> <span>Dokumen Akreditasi</span></a>
                                </li>
                                <li>
                                    <a href="'.base_url().'tim_akreditasi/kelola_dokumen"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
                                </li>
                                <li>
                                    <a href="'.base_url().'tim_akreditasi/akun"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
                                </li>';

        $this->load->view("si-raps/index", $data);      
    }
}
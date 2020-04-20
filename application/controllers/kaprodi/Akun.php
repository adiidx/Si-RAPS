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
        $data['title']      = 'Akun - Si-RAPS';
        $data['header']     = 'Akun';
        $data['sidebar']    = '
                                <li>
                                    <a href="'.base_url().'kaprodi/dokumen_akreditasi"><i class="fas fa-folder-open"></i> <span>Dokumen Akreditasi</span></a>
                                </li>
                                <li>
                                    <a href="'.base_url().'kaprodi/validasi_dokumen"><i class="fas fa-file-signature"></i> <span>Validasi Dokumen</span></a>
                                </li>
                                <li class="active">
                                    <a href="#"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
                                </li>';

        $this->load->view("si-raps/index", $data);         
    }
}
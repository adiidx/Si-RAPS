<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen_akreditasi extends CI_Controller {
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
        $this->load->view("kaprodi/dokumen_akreditasi");         
    }
}
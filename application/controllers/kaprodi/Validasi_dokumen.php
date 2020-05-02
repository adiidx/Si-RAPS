<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi_dokumen extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        if($this->m_login->is_level() != "Kaprodi"){
            redirect("login/");
        }
    }

    public function setujui_dokumen()
    {
        $this->load->model('m_validasi_dokumen');

        $id_dokumen['id_dokumen'] = $this->uri->segment(4);

        $tanggal_validasi = date("Y-m-d H:i:s");

        $datas = array(
            'status_dokumen'    => "Telah Disetujui",
            'tanggal_validasi'  => $tanggal_validasi
        );
  
        $this->m_validasi_dokumen->update_status_dokumen($datas, $id_dokumen);

        redirect($_SERVER['HTTP_REFERER']);
    }

    public function revisi_dokumen()
    {
        $this->load->model('m_validasi_dokumen');

        $id_dokumen['id_dokumen'] = $this->uri->segment(4);

        $tanggal_validasi = date("Y-m-d H:i:s");

        $datas = array(
            'status_dokumen'    => "Perlu Revisi",
            'tanggal_validasi'  => $tanggal_validasi
        );
  
        $this->m_validasi_dokumen->update_status_dokumen($datas, $id_dokumen);

        redirect($_SERVER['HTTP_REFERER']);
    }
}
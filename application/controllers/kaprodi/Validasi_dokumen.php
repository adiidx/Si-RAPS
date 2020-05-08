<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi_dokumen extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        if($this->m_login->is_level() != "3"){
            redirect("login/");
        }
    }

    function index()
    {
        $this->load->model('m_validasi_dokumen');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data['title']          = 'Validasi Dokumen | Si-RAPS';
        $data['header']         = 'Validasi Dokumen';
        $data['session']        = $this->m_validasi_dokumen->tampil_session($id_session);
        $data['hak_akses']      = $this->m_validasi_dokumen->tampil_hak_akses($id_hak_akses);
        $data['data_dokumen']   = $this->m_validasi_dokumen->tampil_dokumen();

        $this->load->view("kaprodi/validasi_dokumen", $data);
    }

    function setujui_dokumen()
    {
        $this->load->model('m_validasi_dokumen');

        $id_dokumen['id_dokumen'] = $this->uri->segment(4);

        date_default_timezone_set('Asia/Jakarta');
        $tanggal_validasi = date("Y-m-d H:i:s");

        $data = array(
            'status_dokumen'    => "Telah Disetujui",
            'tanggal_validasi'  => $tanggal_validasi
        );
  
        $this->m_validasi_dokumen->update_status($data, $id_dokumen);

        redirect($_SERVER['HTTP_REFERER']);
    }

    function revisi_dokumen()
    {
        $this->load->model('m_validasi_dokumen');

        $id_dokumen['id_dokumen'] = $this->uri->segment(4);

        date_default_timezone_set('Asia/Jakarta');
        $tanggal_validasi = date("Y-m-d H:i:s");

        $data = array(
            'status_dokumen'    => "Perlu Revisi",
            'tanggal_validasi'  => $tanggal_validasi
        );
  
        $this->m_validasi_dokumen->update_status($data, $id_dokumen);

        redirect($_SERVER['HTTP_REFERER']);
    }
}
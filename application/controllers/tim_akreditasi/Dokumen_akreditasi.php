<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen_akreditasi extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        if($this->m_login->is_level() != "2"){
            redirect("login/");
        }
    }

    function index()
    {
        $this->load->model('m_dokumen_akreditasi');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data = array(
            'title'     => 'Dokumen Akreditasi | Si-RAPS',
            'session'   => $this->m_dokumen_akreditasi->tampil_session($id_session),
            'hak_akses' => $this->m_dokumen_akreditasi->tampil_hak_akses($id_hak_akses)
        );

        $this->load->view('tim_akreditasi/dokumen_akreditasi', $data);
    }

    function download_dokumen($nama_dokumen)
    {
        $data = $this->db->get_where('dokumen',['nama_dokumen'=>$nama_dokumen])->row();

        force_download('uploads/dokumen/'.$data->nama_dokumen, NULL);
    }

    function download_dokumen_pelengkap($nama_dokumen)
    {
        $data = $this->db->get_where('dokumen_pelengkap',['nama_dokumen'=>$nama_dokumen])->row();

        force_download('uploads/dokumen/'.$data->nama_dokumen, NULL);
    }
    




    function dokumen_pelengkap()
    {
        $this->load->model('m_dokumen_akreditasi');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data['title']          = 'Dokumen Pelengkap | Si-RAPS';
        $data['header']         = 'Dokumen Pelengkap';
        $data['session']        = $this->m_dokumen_akreditasi->tampil_session($id_session);
        $data['hak_akses']      = $this->m_dokumen_akreditasi->tampil_hak_akses($id_hak_akses);
        $data['data_dokumen']   = $this->m_dokumen_akreditasi->tampil_dokumen_pelengkap();

        $this->load->view("tim_akreditasi/tabel_dokumen_pelengkap", $data);      
    }

    function kriteria_1()
    {
        $this->load->model('m_dokumen_akreditasi');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data['title']          = 'Kriteria 1 | Si-RAPS';
        $data['header']         = 'Dokumen Kriteria 1';
        $data['session']        = $this->m_dokumen_akreditasi->tampil_session($id_session);
        $data['hak_akses']      = $this->m_dokumen_akreditasi->tampil_hak_akses($id_hak_akses);
        $data['data_dokumen']   = $this->m_dokumen_akreditasi->tampil_kriteria_1();

        $this->load->view("tim_akreditasi/tabel_kriteria1", $data);      
    }

    function kriteria_2()
    {
        $this->load->model('m_dokumen_akreditasi');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data['title']          = 'Kriteria 2 | Si-RAPS';
        $data['header']         = 'Dokumen Kriteria 2';
        $data['session']        = $this->m_dokumen_akreditasi->tampil_session($id_session);
        $data['hak_akses']      = $this->m_dokumen_akreditasi->tampil_hak_akses($id_hak_akses);
        $data['data_dokumen']   = $this->m_dokumen_akreditasi->tampil_kriteria_2();

        $this->load->view("tim_akreditasi/tabel_kriteria2", $data);      
    }

    function kriteria_3()
    {
        $this->load->model('m_dokumen_akreditasi');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data['title']          = 'Kriteria 3 | Si-RAPS';
        $data['header']         = 'Dokumen Kriteria 3';
        $data['session']        = $this->m_dokumen_akreditasi->tampil_session($id_session);
        $data['hak_akses']      = $this->m_dokumen_akreditasi->tampil_hak_akses($id_hak_akses);
        $data['data_dokumen']   = $this->m_dokumen_akreditasi->tampil_kriteria_3();

        $this->load->view("tim_akreditasi/tabel_kriteria3", $data);      
    }

    function kriteria_4()
    {
        $this->load->model('m_dokumen_akreditasi');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data['title']          = 'Kriteria 4 | Si-RAPS';
        $data['header']         = 'Dokumen Kriteria 4';
        $data['session']        = $this->m_dokumen_akreditasi->tampil_session($id_session);
        $data['hak_akses']      = $this->m_dokumen_akreditasi->tampil_hak_akses($id_hak_akses);
        $data['data_dokumen']   = $this->m_dokumen_akreditasi->tampil_kriteria_4();

        $this->load->view("tim_akreditasi/tabel_kriteria4", $data);      
    }

    function kriteria_5()
    {
        $this->load->model('m_dokumen_akreditasi');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data['title']          = 'Kriteria 5 | Si-RAPS';
        $data['header']         = 'Dokumen Kriteria 5';
        $data['session']        = $this->m_dokumen_akreditasi->tampil_session($id_session);
        $data['hak_akses']      = $this->m_dokumen_akreditasi->tampil_hak_akses($id_hak_akses);
        $data['data_dokumen']   = $this->m_dokumen_akreditasi->tampil_kriteria_5();

        $this->load->view("tim_akreditasi/tabel_kriteria5", $data);      
    }

    function kriteria_6()
    {
        $this->load->model('m_dokumen_akreditasi');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data['title']          = 'Kriteria 6 | Si-RAPS';
        $data['header']         = 'Dokumen Kriteria 6';
        $data['session']        = $this->m_dokumen_akreditasi->tampil_session($id_session);
        $data['hak_akses']      = $this->m_dokumen_akreditasi->tampil_hak_akses($id_hak_akses);
        $data['data_dokumen']   = $this->m_dokumen_akreditasi->tampil_kriteria_6();

        $this->load->view("tim_akreditasi/tabel_kriteria6", $data);      
    }

    function kriteria_7()
    {
        $this->load->model('m_dokumen_akreditasi');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data['title']          = 'Kriteria 7 | Si-RAPS';
        $data['header']         = 'Dokumen Kriteria 7';
        $data['session']        = $this->m_dokumen_akreditasi->tampil_session($id_session);
        $data['hak_akses']      = $this->m_dokumen_akreditasi->tampil_hak_akses($id_hak_akses);
        $data['data_dokumen']   = $this->m_dokumen_akreditasi->tampil_kriteria_7();

        $this->load->view("tim_akreditasi/tabel_kriteria7", $data);      
    }

    function kriteria_8()
    {
        $this->load->model('m_dokumen_akreditasi');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data['title']          = 'Kriteria 8 | Si-RAPS';
        $data['header']         = 'Dokumen Kriteria 8';
        $data['session']        = $this->m_dokumen_akreditasi->tampil_session($id_session);
        $data['hak_akses']      = $this->m_dokumen_akreditasi->tampil_hak_akses($id_hak_akses);
        $data['data_dokumen']   = $this->m_dokumen_akreditasi->tampil_kriteria_8();

        $this->load->view("tim_akreditasi/tabel_kriteria8", $data);      
    }

    function kriteria_9()
    {
        $this->load->model('m_dokumen_akreditasi');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data['title']          = 'Kriteria 9 | Si-RAPS';
        $data['header']         = 'Dokumen Kriteria 9';
        $data['session']        = $this->m_dokumen_akreditasi->tampil_session($id_session);
        $data['hak_akses']      = $this->m_dokumen_akreditasi->tampil_hak_akses($id_hak_akses);
        $data['data_dokumen']   = $this->m_dokumen_akreditasi->tampil_kriteria_9();

        $this->load->view("tim_akreditasi/tabel_kriteria9", $data);      
    }
}
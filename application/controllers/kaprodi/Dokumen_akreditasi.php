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
        $data['title']  = 'Dokumen Akreditasi | Si-RAPS';

        $this->load->view("kaprodi/dokumen_akreditasi", $data);         
    }

    public function download_dokumen($nama_dokumen)
    {
        $data = $this->db->get_where('dokumen',['nama_dokumen'=>$nama_dokumen])->row();

        force_download('uploads/dokumen/'.$data->nama_dokumen, NULL);
    }

    public function standar_1()
    {
        $this->load->model('m_dokumen_akreditasi');

        $data['title']      = 'Standar 1 | Si-RAPS';
        $data['header']     = 'Dokumen Standar 1';

        $data['data_dokumen'] = $this->m_dokumen_akreditasi->tampil_standar_1();

        $this->load->view("kaprodi/tabel_standar1", $data);      
    }

    public function standar_2()
    {
        $this->load->model('m_dokumen_akreditasi');

        $data['title']      = 'Standar 2 | Si-RAPS';
        $data['header']     = 'Dokumen Standar 2';

        $data['data_dokumen'] = $this->m_dokumen_akreditasi->tampil_standar_2();

        $this->load->view("kaprodi/tabel_standar2", $data);      
    }

    public function standar_3()
    {
        $this->load->model('m_dokumen_akreditasi');

        $data['title']      = 'Standar 3 | Si-RAPS';
        $data['header']     = 'Dokumen Standar 3';

        $data['data_dokumen'] = $this->m_dokumen_akreditasi->tampil_standar_3();

        $this->load->view("kaprodi/tabel_standar3", $data);      
    }

    public function standar_4()
    {
        $this->load->model('m_dokumen_akreditasi');

        $data['title']      = 'Standar 4 | Si-RAPS';
        $data['header']     = 'Dokumen Standar 4';

        $data['data_dokumen'] = $this->m_dokumen_akreditasi->tampil_standar_4();

        $this->load->view("kaprodi/tabel_standar4", $data);      
    }

    public function standar_5()
    {
        $this->load->model('m_dokumen_akreditasi');

        $data['title']      = 'Standar 5 | Si-RAPS';
        $data['header']     = 'Dokumen Standar 5';

        $data['data_dokumen'] = $this->m_dokumen_akreditasi->tampil_standar_5();

        $this->load->view("kaprodi/tabel_standar5", $data);      
    }

    public function standar_6()
    {
        $this->load->model('m_dokumen_akreditasi');

        $data['title']      = 'Standar 6 | Si-RAPS';
        $data['header']     = 'Dokumen Standar 6';

        $data['data_dokumen'] = $this->m_dokumen_akreditasi->tampil_standar_6();

        $this->load->view("kaprodi/tabel_standar6", $data);      
    }

    public function standar_7()
    {
        $this->load->model('m_dokumen_akreditasi');

        $data['title']      = 'Standar 7 | Si-RAPS';
        $data['header']     = 'Dokumen Standar 7';

        $data['data_dokumen'] = $this->m_dokumen_akreditasi->tampil_standar_7();

        $this->load->view("kaprodi/tabel_standar7", $data);      
    }

    public function standar_8()
    {
        $this->load->model('m_dokumen_akreditasi');

        $data['title']      = 'Standar 8 | Si-RAPS';
        $data['header']     = 'Dokumen Standar 8';

        $data['data_dokumen'] = $this->m_dokumen_akreditasi->tampil_standar_8();

        $this->load->view("kaprodi/tabel_standar8", $data);      
    }

    public function standar_9()
    {
        $this->load->model('m_dokumen_akreditasi');

        $data['title']      = 'Standar 9 | Si-RAPS';
        $data['header']     = 'Dokumen Standar 9';

        $data['data_dokumen'] = $this->m_dokumen_akreditasi->tampil_standar_9();

        $this->load->view("kaprodi/tabel_standar9", $data);      
    }
}
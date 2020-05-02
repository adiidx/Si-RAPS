<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_dokumen extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        if($this->m_login->is_level() != "Tim Akreditasi"){
            redirect("login/");
        }
    }

    public function upload_dokumen()
    {
        $data['title']      = 'Upload Dokumen | Si-RAPS';

        $this->load->view('public_part/header', $data);
        $this->load->view('tim_akreditasi/upload_dokumen', array('error' => ' ' ));
    }

    public function upload()
    {
        $data['title']      = 'Upload Dokumen | Si-RAPS';

        $config['upload_path']      = './uploads/dokumen/';
        $config['allowed_types']    = 'pdf|doc|docx';
        $config['max_size']         = 0;

        $this->load->library('upload', $config);

        if( ! $this->upload->do_upload('fnama_dokumen')){
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('public_part/header', $data);
            $this->load->view('tim_akreditasi/upload_dokumen', $error);
        }else{
            $this->load->model('m_kelola_dokumen');

            $standar            = $this->input->post('fstandar');
            $judul_dokumen      = $this->input->post('fjudul_dokumen');
            $id_user            = $this->input->post('fid_user');
            $tanggal_validasi   = $this->input->post('');

            $upload_data = $this->upload->data();

            $path = $config['upload_path'].$upload_data['file_name'];

            $data = array(
                'standar'           => $standar,
                'nama_dokumen'      => $upload_data['file_name'],
                'path'              => $path,
                'judul_dokumen'     => $judul_dokumen,
                'id_user'           => $id_user,
                'status_dokumen'    => "Belum Divalidasi",
                'tanggal_validasi'  => $tanggal_validasi
            );

            $this->m_kelola_dokumen->simpan_dokumen($data);
            redirect('tim_akreditasi/dokumen_akreditasi/standar_1');
        }
    }

    public function perbarui_dokumen($id_dokumen)
    {
        $this->load->model('m_kelola_dokumen');

        $id_dokumen = $this->uri->segment(4);

        $data = array(
            'title'     => 'Perbarui Dokumen | Si-RAPS',
            'data_dokumen' => $this->m_kelola_dokumen->perbarui_dokumen($id_dokumen)
        );

        $this->load->view('public_part/header', $data);
        $this->load->view('tim_akreditasi/perbarui_dokumen', array('error' => ' ' ));
    }

    public function perbarui(){
        $this->load->model('m_kelola_dokumen');

        $id_dokumen = $this->input->post('fid_dokumen');
        
        $data = array(
            'title'     => 'Perbarui Dokumen | Si-RAPS',
            'data_dokumen' => $this->m_kelola_dokumen->getDataByID($id_dokumen)->row()
        );

        $nama_dokumen = './uploads/dokumen/'.$data['data_dokumen']->nama_dokumen;

        $config['upload_path']          = './uploads/dokumen/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if( ! $this->upload->do_upload('fnama_dokumen')){
            $path = $config['upload_path'].$data['data_dokumen']->nama_dokumen;

            $data = array(
                'nama_dokumen'  => $data['data_dokumen']->nama_dokumen,
                'path'          => $path,
                'judul_dokumen' => $this->input->post('fjudul_dokumen')
            );

            $update = $this->m_kelola_dokumen->update_dokumen($id_dokumen, $data);

            if ($update){
                if($this->session->userdata("pj_standar") == "1"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_1');
                }else if($this->session->userdata("pj_standar") == "2"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_2');
                }else if($this->session->userdata("pj_standar") == "3"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_3');
                }else if($this->session->userdata("pj_standar") == "4"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_4');
                }else if($this->session->userdata("pj_standar") == "5"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_5');
                }else if($this->session->userdata("pj_standar") == "6"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_6');
                }else if($this->session->userdata("pj_standar") == "7"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_7');
                }else if($this->session->userdata("pj_standar") == "8"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_8');
                }else if($this->session->userdata("pj_standar") == "9"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_9');
                }
            }else{

            }
        }else if(is_readable($nama_dokumen) && unlink($nama_dokumen)){
            $upload_data = $this->upload->data();

            $path = $config['upload_path'].$upload_data['file_name'];

            $data = array(
                'nama_dokumen'  => $upload_data['file_name'],
                'path'          => $path,
                'judul_dokumen' => $this->input->post('fjudul_dokumen')
            );

            $update = $this->m_kelola_dokumen->update_dokumen($id_dokumen, $data);

            if ($update){
                if($this->session->userdata("pj_standar") == "1"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_1');
                }else if($this->session->userdata("pj_standar") == "2"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_2');
                }else if($this->session->userdata("pj_standar") == "3"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_3');
                }else if($this->session->userdata("pj_standar") == "4"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_4');
                }else if($this->session->userdata("pj_standar") == "5"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_5');
                }else if($this->session->userdata("pj_standar") == "6"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_6');
                }else if($this->session->userdata("pj_standar") == "7"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_7');
                }else if($this->session->userdata("pj_standar") == "8"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_8');
                }else if($this->session->userdata("pj_standar") == "9"){
                    redirect('tim_akreditasi/dokumen_akreditasi/standar_9');
                }
            }else{

            }
        }
    }

    public function hapus_dokumen($id_dokumen)
    {
        $this->load->model('m_kelola_dokumen');

        $data = $this->m_kelola_dokumen->getDataByID($id_dokumen)->row();
        $nama_dokumen = './uploads/dokumen/'.$data->nama_dokumen;

        if(is_readable($nama_dokumen) && unlink($nama_dokumen)){
            $id_hapus['id_dokumen'] = $this->uri->segment(4);

            $this->m_kelola_dokumen->hapus_dokumen($id_hapus);

            if($this->session->userdata("pj_standar") == "1"){
                redirect('tim_akreditasi/dokumen_akreditasi/standar_1');
            }else if($this->session->userdata("pj_standar") == "2"){
                redirect('tim_akreditasi/dokumen_akreditasi/standar_2');
            }else if($this->session->userdata("pj_standar") == "3"){
                redirect('tim_akreditasi/dokumen_akreditasi/standar_3');
            }else if($this->session->userdata("pj_standar") == "4"){
                redirect('tim_akreditasi/dokumen_akreditasi/standar_4');
            }else if($this->session->userdata("pj_standar") == "5"){
                redirect('tim_akreditasi/dokumen_akreditasi/standar_5');
            }else if($this->session->userdata("pj_standar") == "6"){
                redirect('tim_akreditasi/dokumen_akreditasi/standar_6');
            }else if($this->session->userdata("pj_standar") == "7"){
                redirect('tim_akreditasi/dokumen_akreditasi/standar_7');
            }else if($this->session->userdata("pj_standar") == "8"){
                redirect('tim_akreditasi/dokumen_akreditasi/standar_8');
            }else if($this->session->userdata("pj_standar") == "9"){
                redirect('tim_akreditasi/dokumen_akreditasi/standar_9');
            }
        }else{

        }
    }
}
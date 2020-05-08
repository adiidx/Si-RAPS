<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_dokumen extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        if($this->m_login->is_level() != "2"){
            redirect("login/");
        }
    }

    function upload_dokumen()
    {
        $this->load->model('m_kelola_dokumen');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data = array(
            'title'     => 'Upload Dokumen | Si-RAPS',
            'session'   => $this->m_kelola_dokumen->tampil_session($id_session),
            'hak_akses' => $this->m_kelola_dokumen->tampil_hak_akses($id_hak_akses)
        );

        $this->load->view('public_part/header', $data);
        $this->load->view('tim_akreditasi/upload_dokumen', array('error' => ' ' ));
    }

    function upload()
    {
        $data['title']              = 'Upload Dokumen | Si-RAPS';

        $config['upload_path']      = './uploads/dokumen/';
        $config['allowed_types']    = 'pdf|doc|docx';
        $config['max_size']         = 0;

        $this->load->library('upload', $config);

        if( ! $this->upload->do_upload('fnama_dokumen')){
            $this->load->model('m_kelola_dokumen');

            $id_session     = $this->session->userdata("sess_id_auth");
            $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

            $data = array(
                'title'     => 'Upload Dokumen | Si-RAPS',
                'session'   => $this->m_kelola_dokumen->tampil_session($id_session),
                'hak_akses' => $this->m_kelola_dokumen->tampil_hak_akses($id_hak_akses)
            );

            $error = array('error' => $this->upload->display_errors());

            $this->load->view('public_part/header', $data);
            $this->load->view('tim_akreditasi/upload_dokumen', $error);
        }else{
            $this->load->model('m_kelola_dokumen');

            $id_kriteria        = $this->input->post('fid_kriteria');
            $judul_dokumen      = $this->input->post('fjudul_dokumen');
            $penyusun           = $this->input->post('fpenyusun');
            $tanggal_validasi   = $this->input->post('');

            $upload_data = $this->upload->data();

            $path = $config['upload_path'].$upload_data['file_name'];

            $data = array(
                'kriteria'          => $id_kriteria,
                'judul_dokumen'     => $judul_dokumen,
                'nama_dokumen'      => $upload_data['file_name'],
                'path'              => $path,
                'penyusun'          => $penyusun,
                'status_dokumen'    => "Belum Divalidasi",
                'tanggal_validasi'  => $tanggal_validasi
            );

            $insert = $this->m_kelola_dokumen->simpan_dokumen($data);

            if ($insert){
                if($this->session->userdata("sess_id_kriteria") == "1"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_1');

                }else if($this->session->userdata("sess_id_kriteria") == "2"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_2');

                }else if($this->session->userdata("sess_id_kriteria") == "3"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_3');

                }else if($this->session->userdata("sess_id_kriteria") == "4"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_4');

                }else if($this->session->userdata("sess_id_kriteria") == "5"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_5');

                }else if($this->session->userdata("sess_id_kriteria") == "6"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_6');

                }else if($this->session->userdata("sess_id_kriteria") == "7"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_7');

                }else if($this->session->userdata("sess_id_kriteria") == "8"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_8');

                }else if($this->session->userdata("sess_id_kriteria") == "9"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_9');
                }
            }
        }
    }

    function perbarui_dokumen($id_dokumen)
    {
        $this->load->model('m_kelola_dokumen');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");
        $id_dokumen     = $this->uri->segment(4);

        $data = array(
            'title'         => 'Perbarui Dokumen | Si-RAPS',
            'session'       => $this->m_kelola_dokumen->tampil_session($id_session),
            'hak_akses'     => $this->m_kelola_dokumen->tampil_hak_akses($id_hak_akses),
            'data_dokumen'  => $this->m_kelola_dokumen->perbarui_dokumen($id_dokumen)
        );

        $this->load->view('public_part/header', $data);
        $this->load->view('tim_akreditasi/perbarui_dokumen', array('error' => ' ' ));
    }

    function perbarui()
    {
        $this->load->model('m_kelola_dokumen');

        $id_dokumen = $this->input->post('fid_dokumen');
        
        $data = array(
            'title'         => 'Perbarui Dokumen | Si-RAPS',
            'data_dokumen'  => $this->m_kelola_dokumen->tampil_dokumen($id_dokumen)->row()
        );

        $nama_dokumen = './uploads/dokumen/'.$data['data_dokumen']->nama_dokumen;

        $config['upload_path']          = './uploads/dokumen/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if( ! $this->upload->do_upload('fnama_dokumen')){
            $path = $config['upload_path'].$data['data_dokumen']->nama_dokumen;

            date_default_timezone_set('Asia/Jakarta');

            $data = array(
                'judul_dokumen'     => $this->input->post('fjudul_dokumen'),
                'nama_dokumen'      => $data['data_dokumen']->nama_dokumen,
                'path'              => $path,
                'tanggal_upload'    => date("Y-m-d H:i:s")
            );

            $update = $this->m_kelola_dokumen->update_dokumen($id_dokumen, $data);

            if ($update){
                if($this->session->userdata("sess_id_kriteria") == "1"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_1');

                }else if($this->session->userdata("sess_id_kriteria") == "2"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_2');

                }else if($this->session->userdata("sess_id_kriteria") == "3"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_3');

                }else if($this->session->userdata("sess_id_kriteria") == "4"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_4');

                }else if($this->session->userdata("sess_id_kriteria") == "5"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_5');

                }else if($this->session->userdata("sess_id_kriteria") == "6"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_6');

                }else if($this->session->userdata("sess_id_kriteria") == "7"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_7');

                }else if($this->session->userdata("sess_id_kriteria") == "8"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_8');

                }else if($this->session->userdata("sess_id_kriteria") == "9"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_9');
                }
            }
        }else if(is_readable($nama_dokumen) && unlink($nama_dokumen)){
            $upload_data = $this->upload->data();

            $path = $config['upload_path'].$upload_data['file_name'];

            date_default_timezone_set('Asia/Jakarta');
            
            $data = array(
                'judul_dokumen'     => $this->input->post('fjudul_dokumen'),
                'nama_dokumen'      => $upload_data['file_name'],
                'path'              => $path,
                'tanggal_upload'    => date("Y-m-d H:i:s")
            );

            $update = $this->m_kelola_dokumen->update_dokumen($id_dokumen, $data);

            if ($update){
                if($this->session->userdata("sess_id_kriteria") == "1"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_1');

                }else if($this->session->userdata("sess_id_kriteria") == "2"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_2');

                }else if($this->session->userdata("sess_id_kriteria") == "3"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_3');

                }else if($this->session->userdata("sess_id_kriteria") == "4"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_4');

                }else if($this->session->userdata("sess_id_kriteria") == "5"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_5');

                }else if($this->session->userdata("sess_id_kriteria") == "6"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_6');

                }else if($this->session->userdata("sess_id_kriteria") == "7"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_7');

                }else if($this->session->userdata("sess_id_kriteria") == "8"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_8');

                }else if($this->session->userdata("sess_id_kriteria") == "9"){
                    redirect('tim_akreditasi/dokumen_akreditasi/kriteria_9');
                }
            }
        }
    }
    
    function hapus_dokumen($id_dokumen)
    {
        $this->load->model('m_kelola_dokumen');

        $data = $this->m_kelola_dokumen->tampil_dokumen($id_dokumen)->row();
        $nama_dokumen = './uploads/dokumen/'.$data->nama_dokumen;

        if(is_readable($nama_dokumen) && unlink($nama_dokumen)){
            $id_hapus['id_dokumen'] = $this->uri->segment(4);

            $this->m_kelola_dokumen->hapus_dokumen($id_hapus);
            
            if($this->session->userdata("sess_id_kriteria") == "1"){
                redirect('tim_akreditasi/dokumen_akreditasi/kriteria_1');

            }else if($this->session->userdata("sess_id_kriteria") == "2"){
                redirect('tim_akreditasi/dokumen_akreditasi/kriteria_2');

            }else if($this->session->userdata("sess_id_kriteria") == "3"){
                redirect('tim_akreditasi/dokumen_akreditasi/kriteria_3');

            }else if($this->session->userdata("sess_id_kriteria") == "4"){
                redirect('tim_akreditasi/dokumen_akreditasi/kriteria_4');

            }else if($this->session->userdata("sess_id_kriteria") == "5"){
                redirect('tim_akreditasi/dokumen_akreditasi/kriteria_5');

            }else if($this->session->userdata("sess_id_kriteria") == "6"){
                redirect('tim_akreditasi/dokumen_akreditasi/kriteria_6');

            }else if($this->session->userdata("sess_id_kriteria") == "7"){
                redirect('tim_akreditasi/dokumen_akreditasi/kriteria_7');

            }else if($this->session->userdata("sess_id_kriteria") == "8"){
                redirect('tim_akreditasi/dokumen_akreditasi/kriteria_8');

            }else if($this->session->userdata("sess_id_kriteria") == "9"){
                redirect('tim_akreditasi/dokumen_akreditasi/kriteria_9');
            }
        }
    }





    function upload_dokumen_pelengkap()
    {
        $this->load->model('m_kelola_dokumen');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

        $data = array(
            'title'     => 'Upload Dokumen | Si-RAPS',
            'session'   => $this->m_kelola_dokumen->tampil_session($id_session),
            'hak_akses' => $this->m_kelola_dokumen->tampil_hak_akses($id_hak_akses)
        );

        $this->load->view('public_part/header', $data);
        $this->load->view('tim_akreditasi/upload_dokumen_pelengkap', array('error' => ' ' ));
    }

    function upload_pelengkap()
    {
        $data['title']              = 'Upload Dokumen | Si-RAPS';

        $config['upload_path']      = './uploads/dokumen/';
        $config['allowed_types']    = 'pdf|doc|docx';
        $config['max_size']         = 0;

        $this->load->library('upload', $config);

        if( ! $this->upload->do_upload('fnama_dokumen')){
            $this->load->model('m_kelola_dokumen');

            $id_session     = $this->session->userdata("sess_id_auth");
            $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");

            $data = array(
                'title'     => 'Upload Dokumen | Si-RAPS',
                'session'   => $this->m_kelola_dokumen->tampil_session($id_session),
                'hak_akses' => $this->m_kelola_dokumen->tampil_hak_akses($id_hak_akses)
            );
            
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('public_part/header', $data);
            $this->load->view('tim_akreditasi/upload_dokumen_pelengkap', $error);
        }else{
            $this->load->model('m_kelola_dokumen');

            $judul_dokumen      = $this->input->post('fjudul_dokumen');
            $penyusun           = $this->input->post('fpenyusun');

            $upload_data = $this->upload->data();

            $path = $config['upload_path'].$upload_data['file_name'];

            $data = array(
                'judul_dokumen'     => $judul_dokumen,
                'nama_dokumen'      => $upload_data['file_name'],
                'path'              => $path,
                'penyusun'          => $penyusun
            );

            $insert = $this->m_kelola_dokumen->simpan_dokumen_pelengkap($data);

            if ($insert){
                redirect('tim_akreditasi/dokumen_akreditasi/dokumen_pelengkap');
            }
        }
    }

    function perbarui_dokumen_pelengkap($id_dokumen)
    {
        $this->load->model('m_kelola_dokumen');

        $id_session     = $this->session->userdata("sess_id_auth");
        $id_hak_akses   = $this->session->userdata("sess_id_hak_akses");
        $id_dokumen_pl  = $this->uri->segment(4);

        $data = array(
            'title'         => 'Perbarui Dokumen | Si-RAPS',
            'session'       => $this->m_kelola_dokumen->tampil_session($id_session),
            'hak_akses'     => $this->m_kelola_dokumen->tampil_hak_akses($id_hak_akses),
            'data_dokumen'  => $this->m_kelola_dokumen->perbarui_dokumen_pelengkap($id_dokumen_pl)
        );

        $this->load->view('public_part/header', $data);
        $this->load->view('tim_akreditasi/perbarui_dokumen_pelengkap', array('error' => ' ' ));
    }

    function perbarui_pelengkap()
    {
        $this->load->model('m_kelola_dokumen');

        $id_dokumen_pl = $this->input->post('fid_dokumen');
        
        $data = array(
            'title'         => 'Perbarui Dokumen | Si-RAPS',
            'data_dokumen'  => $this->m_kelola_dokumen->tampil_dokumen_pelengkap($id_dokumen_pl)->row()
        );

        $nama_dokumen = './uploads/dokumen/'.$data['data_dokumen']->nama_dokumen;

        $config['upload_path']          = './uploads/dokumen/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if( ! $this->upload->do_upload('fnama_dokumen')){
            $path = $config['upload_path'].$data['data_dokumen']->nama_dokumen;

            date_default_timezone_set('Asia/Jakarta');

            $data = array(
                'judul_dokumen'     => $this->input->post('fjudul_dokumen'),
                'nama_dokumen'      => $data['data_dokumen']->nama_dokumen,
                'path'              => $path,
                'penyusun'          => $this->input->post('fpenyusun'),
                'tanggal_upload'    => date("Y-m-d H:i:s")
            );

            $update = $this->m_kelola_dokumen->update_dokumen_pelengkap($id_dokumen_pl, $data);

            if ($update){
                redirect('tim_akreditasi/dokumen_akreditasi/dokumen_pelengkap');
            }
        }else if(is_readable($nama_dokumen) && unlink($nama_dokumen)){
            $upload_data = $this->upload->data();

            $path = $config['upload_path'].$upload_data['file_name'];

            date_default_timezone_set('Asia/Jakarta');
            
            $data = array(
                'judul_dokumen'     => $this->input->post('fjudul_dokumen'),
                'nama_dokumen'      => $upload_data['file_name'],
                'path'              => $path,
                'penyusun'          => $this->input->post('fpenyusun'),
                'tanggal_upload'    => date("Y-m-d H:i:s")
            );

            $update = $this->m_kelola_dokumen->update_dokumen_pelengkap($id_dokumen_pl, $data);

            if ($update){
                redirect('tim_akreditasi/dokumen_akreditasi/dokumen_pelengkap');
            }
        }
    }
    
    function hapus_dokumen_pelengkap($id_dokumen_pl)
    {
        $this->load->model('m_kelola_dokumen');

        $data = $this->m_kelola_dokumen->tampil_dokumen_pelengkap($id_dokumen_pl)->row();
        $nama_dokumen = './uploads/dokumen/'.$data->nama_dokumen;

        if(is_readable($nama_dokumen) && unlink($nama_dokumen)){
            $id_hapus['id_dokumen_pl'] = $this->uri->segment(4);

            $this->m_kelola_dokumen->hapus_dokumen_pelengkap($id_hapus);
            
            redirect('tim_akreditasi/dokumen_akreditasi/dokumen_pelengkap');

        }
    }
}
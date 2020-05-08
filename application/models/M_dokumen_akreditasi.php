<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dokumen_akreditasi extends CI_Model
{
    function tampil_session($id_session)
    {
        $query = $this->db->where("id_pengguna", $id_session)->get("pengguna");
        return $query->row();
    }

    function tampil_hak_akses($id_hak_akses)
    {
        $query = $this->db->where("id_hak_akses", $id_hak_akses)->get("hak_akses");
        return $query->row();
    }





    function tampil_dokumen_pelengkap()
    {
        $this->db->order_by('id_dokumen_pl', 'ASC');
        return $this->db->from('dokumen_pelengkap')
            ->join('pengguna', 'pengguna.id_pengguna=dokumen_pelengkap.penyusun')
            ->get()
            ->result();
    }

    function tampil_kriteria_1()
    {
        $this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('kriteria', '1');
        return $this->db->from('dokumen')
            ->join('pengguna', 'pengguna.id_pengguna=dokumen.penyusun')
            ->get()
            ->result();
    }

    function tampil_kriteria_2()
    {
        $this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('kriteria', '2');
        return $this->db->from('dokumen')
            ->join('pengguna', 'pengguna.id_pengguna=dokumen.penyusun')
            ->get()
            ->result();
    }

    function tampil_kriteria_3()
    {
        $this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('kriteria', '3');
        return $this->db->from('dokumen')
            ->join('pengguna', 'pengguna.id_pengguna=dokumen.penyusun')
            ->get()
            ->result();
    }

    function tampil_kriteria_4()
    {
        $this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('kriteria', '4');
        return $this->db->from('dokumen')
            ->join('pengguna', 'pengguna.id_pengguna=dokumen.penyusun')
            ->get()
            ->result();
    }

    function tampil_kriteria_5()
    {
        $this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('kriteria', '5');
        return $this->db->from('dokumen')
            ->join('pengguna', 'pengguna.id_pengguna=dokumen.penyusun')
            ->get()
            ->result();
    }

    function tampil_kriteria_6()
    {
        $this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('kriteria', '6');
        return $this->db->from('dokumen')
            ->join('pengguna', 'pengguna.id_pengguna=dokumen.penyusun')
            ->get()
            ->result();
    }

    function tampil_kriteria_7()
    {
        $this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('kriteria', '7');
        return $this->db->from('dokumen')
            ->join('pengguna', 'pengguna.id_pengguna=dokumen.penyusun')
            ->get()
            ->result();
    }

    function tampil_kriteria_8()
    {
        $this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('kriteria', '8');
        return $this->db->from('dokumen')
            ->join('pengguna', 'pengguna.id_pengguna=dokumen.penyusun')
            ->get()
            ->result();
    }

    function tampil_kriteria_9()
    {
        $this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('kriteria', '9');
        return $this->db->from('dokumen')
            ->join('pengguna', 'pengguna.id_pengguna=dokumen.penyusun')
            ->get()
            ->result();
    }
}
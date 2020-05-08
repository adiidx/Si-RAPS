<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_validasi_dokumen extends CI_Model
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

    function tampil_dokumen()
    {
        $this->db->order_by('id_dokumen', 'ASC');
        return $this->db->from('dokumen')
            ->join('pengguna', 'pengguna.id_pengguna=dokumen.penyusun')
            ->get()
            ->result();
    }

    function update_status($data, $id_dokumen)
    {
        return $this->db->update("dokumen", $data, $id_dokumen);
    }
}
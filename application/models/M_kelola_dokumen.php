<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelola_dokumen extends CI_Model
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

    function tampil_dokumen($id_dokumen)
    {
        return $this->db->get_where("dokumen", array("id_dokumen"=>$id_dokumen));
    }

    function simpan_dokumen($data)
    {
        return $this->db->insert("dokumen", $data);
    }

    function perbarui_dokumen($id_dokumen)
    {
        $query = $this->db->where("id_dokumen", $id_dokumen)->get("dokumen");
        return $query->row();
    }

    function update_dokumen($id_dokumen, $data)
    {
        $this->db->where('id_dokumen', $id_dokumen);
        return $this->db->update('dokumen', $data);
    }

    function hapus_dokumen($id_hapus)
    {
        return $this->db->delete("dokumen", $id_hapus);
    }





    function tampil_dokumen_pelengkap($id_dokumen_pl)
    {
        return $this->db->get_where("dokumen_pelengkap", array("id_dokumen_pl"=>$id_dokumen_pl));
    }

    function simpan_dokumen_pelengkap($data)
    {
        return $this->db->insert("dokumen_pelengkap", $data);
    }

    function perbarui_dokumen_pelengkap($id_dokumen_pl)
    {
        $query = $this->db->where("id_dokumen_pl", $id_dokumen_pl)->get("dokumen_pelengkap");
        return $query->row();
    }

    function update_dokumen_pelengkap($id_dokumen_pl, $data)
    {
        $this->db->where('id_dokumen_pl', $id_dokumen_pl);
        return $this->db->update('dokumen_pelengkap', $data);
    }

    function hapus_dokumen_pelengkap($id_hapus_pl)
    {
        return $this->db->delete("dokumen_pelengkap", $id_hapus_pl);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelola_dokumen extends CI_Model
{
    public function getDataByID($id_dokumen){
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

    public function update_dokumen($id_dokumen, $data){
        $this->db->where('id_dokumen', $id_dokumen);
        return $this->db->update('dokumen', $data);
    }

    function hapus_dokumen($id_hapus)
    {
        return $this->db->delete("dokumen", $id_hapus);
    }
}
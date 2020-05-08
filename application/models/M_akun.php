<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akun extends CI_Model
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

    function tampil_auth($id_profil)
    {
    	$query = $this->db->where("id_auth", $id_profil)->get("auth");
    	return $query->row();
    }

    function tampil_pengguna($id_profil)
    {
        $query = $this->db->where("id_pengguna", $id_profil)->get("pengguna");
        return $query->row();
    }

    function tampil_kriteria($id_kriteria)
    {
        $query = $this->db->where("id_kriteria", $id_kriteria)->get("kriteria");
        return $query->row();
    }

    function update_pengguna($data_pengguna, $id_pengguna)
    {
        return $this->db->update("pengguna", $data_pengguna, $id_pengguna);
    }

    function update_auth($data_auth, $id_auth)
    {
    	return $this->db->update("auth", $data_auth, $id_auth);
    }
}
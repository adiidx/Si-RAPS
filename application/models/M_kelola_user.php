<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelola_user extends CI_Model
{
    function tampil_user()
    {
    	$data = $this->db->query("SELECT * FROM user");
		return $data->result();
    }

    function simpan_user($data)
    {
    	return $this->db->insert("user", $data);
    }

    function edit_user($id_user)
    {
    	$query = $this->db->where("id_user", $id_user)->get("user");
    	return $query->row();
    } 

    function update_user($data, $id_user)
    {
    	return $this->db->update("user", $data, $id_user);
    } 

    function hapus_user($id_hapus)
    {
   		return $this->db->delete("user", $id_hapus);
    }
}
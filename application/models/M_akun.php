<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akun extends CI_Model
{
	function tampil_user($id_user)
    {
    	$query = $this->db->where("id_user", $id_user)->get("user");
    	return $query->row();
    }

    function edit_profil($id_user)
    {
    	$query = $this->db->where("id_user", $id_user)->get("user");
    	return $query->row();
    }

    function update_profil($data, $id_user)
    {
    	return $this->db->update("user", $data, $id_user);
    }
}
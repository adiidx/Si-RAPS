<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelola_pengguna extends CI_Model
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

    function tampil_pengguna()
    {
        $this->db->order_by('id_auth', 'ASC');
        return $this->db->from('auth')
            ->join('pengguna', 'pengguna.id_pengguna=auth.id_auth')
            ->join('hak_akses', 'hak_akses.id_hak_akses=auth.id_hak_akses')
            ->get()
            ->result();
    }

    function simpan_pengguna($table,$data)
    {
        $query = $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    function edit_auth($id_profil)
    {
        $query = $this->db->where("id_auth", $id_profil)->get("auth");
        return $query->row();
    }

    function edit_pengguna($id_profil)
    {
        $query = $this->db->where("id_pengguna", $id_profil)->get("pengguna");
        return $query->row();
    }

    function update_auth($data_auth, $id_auth)
    {
        return $this->db->update("auth", $data_auth, $id_auth);
    } 

    function update_pengguna($data_pengguna, $id_pengguna)
    {
    	return $this->db->update("pengguna", $data_pengguna, $id_pengguna);
    } 

    function hapus_pengguna($id_hapus)
    {
   		return $this->db->delete("pengguna", $id_hapus);
    }
}
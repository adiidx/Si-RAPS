<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model 
{
    function is_logged_in()
    {
        return $this->session->userdata('sess_id_auth');
    }

    function is_level()
    {
        return $this->session->userdata('sess_id_hak_akses');
    }

    function cek_login($table, $field3, $field4)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field3);
        $this->db->where($field4);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}
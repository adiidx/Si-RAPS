<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    //fungsi cek session logged in
    function is_logged_in()
    {
        return $this->session->userdata('user_id');
    }

    //fungsi cek level
    function is_level()
    {
        return $this->session->userdata('level');
    }

    //fungsi check login
    function check_login($table, $field6, $field7)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field6);
        $this->db->where($field7);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}
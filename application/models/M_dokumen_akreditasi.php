<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dokumen_akreditasi extends CI_Model
{

    function tampil_standar_1()
    {
        $this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('standar', '1');
        return $this->db->from('dokumen')
            ->join('user', 'user.id_user=dokumen.id_user')
            ->get()
            ->result();
    }
    
    function tampil_standar_2()
    {
        $this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('standar', '2');
        return $this->db->from('dokumen')
          ->join('user', 'user.id_user=dokumen.id_user')
          ->get()
          ->result();
    }
    
    function tampil_standar_3()
    {
    	$this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('standar', '3');
        return $this->db->from('dokumen')
            ->join('user', 'user.id_user=dokumen.id_user')
            ->get()
            ->result();
    }
    
    function tampil_standar_4()
    {
    	$this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('standar', '4');
        return $this->db->from('dokumen')
            ->join('user', 'user.id_user=dokumen.id_user')
            ->get()
            ->result();
    }
    
    function tampil_standar_5()
    {
    	$this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('standar', '5');
        return $this->db->from('dokumen')
            ->join('user', 'user.id_user=dokumen.id_user')
            ->get()
            ->result();
    }
    
    function tampil_standar_6()
    {
    	$this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('standar', '6');
        return $this->db->from('dokumen')
            ->join('user', 'user.id_user=dokumen.id_user')
            ->get()
            ->result();
    }
    
    function tampil_standar_7()
    {
    	$this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('standar', '7');
        return $this->db->from('dokumen')
            ->join('user', 'user.id_user=dokumen.id_user')
            ->get()
            ->result();
    }
    
    function tampil_standar_8()
    {
    	$this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('standar', '8');
        return $this->db->from('dokumen')
            ->join('user', 'user.id_user=dokumen.id_user')
            ->get()
            ->result();
    }
    
    function tampil_standar_9()
    {
    	$this->db->order_by('id_dokumen', 'ASC');
        $this->db->where('standar', '9');
        return $this->db->from('dokumen')
            ->join('user', 'user.id_user=dokumen.id_user')
            ->get()
            ->result();
    }
}
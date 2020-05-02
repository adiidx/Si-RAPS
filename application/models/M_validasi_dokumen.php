<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_validasi_dokumen extends CI_Model
{
    public function update_status_dokumen($datas, $id_dokumen)
    {
        return $this->db->update("dokumen", $datas, $id_dokumen);
    }
}
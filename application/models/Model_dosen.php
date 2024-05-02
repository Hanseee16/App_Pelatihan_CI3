<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dosen extends CI_Model {

    public function getAllDosen()
    {
        return $this->db->get('tbl_dosen')->result_array();
    }

    public function getKodeDosen($kd_dosen)
    {
        return $this->db->get_where('tbl_dosen', ['kd_dosen' => $kd_dosen])->row_array();
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_dosen', $data);
    }

    public function edit($kd_dosen, $data)
    {
        $this->db->where('kd_dosen', $this->input->post('kd_dosen'));
        $this->db->update('tbl_dosen', $data);
    }

    public function hapus($kd_dosen)
    {
        $this->db->delete('tbl_dosen', ['kd_dosen' => $kd_dosen]);   
    }
}
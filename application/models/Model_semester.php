<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_semester extends CI_Model {

    public function getAllSemester()
    {
        return $this->db->get('tbl_semester')->result_array();
    }

    public function getKodeSemester($kd_semester)
    {
        return $this->db->get_where('tbl_semester', ['kd_semester' => $kd_semester])->row_array();
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_semester', $data);
    }

    public function edit($kd_semester, $data)
    {
        $this->db->where('kd_semester', $this->input->post('kd_semester'));
        $this->db->update('tbl_semester', $data);
    }

    public function hapus($kd_semester)
    {
        $this->db->delete('tbl_semester', ['kd_semester' => $kd_semester]);   
    }
}
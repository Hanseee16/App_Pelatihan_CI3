<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_matkul extends CI_Model {

    public function getAllMatkul()
    {
        return $this->db->get('tbl_matkul')->result_array();
    }

    public function getKodeMatkul($kd_matkul)
    {
        return $this->db->get_where('tbl_matkul', ['kd_matkul' => $kd_matkul])->row_array();
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_matkul', $data);
    }

    public function edit($kd_matkul, $data)
    {
        $this->db->where('kd_matkul', $this->input->post('kd_matkul'));
        $this->db->update('tbl_matkul', $data);
    }

    public function hapus($kd_matkul)
    {
        $this->db->delete('tbl_matkul', ['kd_matkul' => $kd_matkul]);   
    }
}
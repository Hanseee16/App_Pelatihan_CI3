<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mahasiswa extends CI_Model {

    public function getAllMahasiswa()
    {
        return $this->db->get('tbl_mahasiswa')->result_array();
    }

    public function getNim($nim)
    {
        return $this->db->get_where('tbl_mahasiswa', ['nim' => $nim])->row_array();
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_mahasiswa', $data);
    }

    public function edit($nim, $data)
    {
        $this->db->where('nim', $this->input->post('nim'));
        $this->db->update('tbl_mahasiswa', $data);
    }

    public function hapus($nim)
    {
        $this->db->delete('tbl_mahasiswa', ['nim' => $nim]);   
    }
}
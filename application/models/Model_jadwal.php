<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jadwal extends CI_Model {

    public function getAllJadwal()
    {
        $this->db->select('tbl_jadwal.*, tbl_dosen.nama AS nama_dosen, tbl_matkul.nama AS nama_matkul');
        $this->db->from('tbl_jadwal');
        $this->db->join('tbl_dosen', 'tbl_jadwal.kd_dosen = tbl_dosen.kd_dosen', 'left');
        $this->db->join('tbl_matkul', 'tbl_jadwal.kd_matkul = tbl_matkul.kd_matkul', 'left');
        
        return $this->db->get()->result_array();
    }

    public function getIdJadwal($id_jadwal)
    {
        $this->db->select('tbl_jadwal.*, tbl_dosen.nama AS nama_dosen, tbl_matkul.nama AS nama_matkul');
        $this->db->from('tbl_jadwal');
        $this->db->join('tbl_dosen', 'tbl_dosen.kd_dosen = tbl_jadwal.kd_dosen');
        $this->db->join('tbl_matkul', 'tbl_matkul.kd_matkul = tbl_jadwal.kd_matkul');
        $this->db->where('tbl_jadwal.id_jadwal', $id_jadwal);

        return $this->db->get()->row_array();
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_jadwal', $data);
    }

    public function edit($id_jadwal, $data)
    {
        $this->db->where('id_jadwal', $this->input->post('id_jadwal'));
        $this->db->update('tbl_jadwal', $data);
    }

    public function hapus($id_jadwal)
    {
        $this->db->delete('tbl_jadwal', ['id_jadwal' => $id_jadwal]);   
    }
}
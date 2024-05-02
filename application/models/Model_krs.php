<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_krs extends CI_Model {

    public function getAllKrs()
    {
        $this->db->select('tbl_krs.*, tbl_mahasiswa.nim, tbl_jadwal.id_jadwal, tbl_semester.semester');
        $this->db->from('tbl_krs');
        $this->db->join('tbl_mahasiswa', 'tbl_krs.nim = tbl_mahasiswa.nim', 'left');
        $this->db->join('tbl_jadwal', 'tbl_krs.id_jadwal = tbl_jadwal.id_jadwal', 'left');
        $this->db->join('tbl_semester', 'tbl_krs.kd_semester = tbl_semester.kd_semester', 'left');
        
        return $this->db->get()->result_array();
    }

    public function getIdKrs($id_krs)
    {
        $this->db->select('tbl_krs.*, tbl_mahasiswa.nim, tbl_jadwal.id_jadwal, tbl_semester.semester');
        $this->db->from('tbl_krs');
        $this->db->join('tbl_mahasiswa', 'tbl_krs.nim = tbl_mahasiswa.nim');
        $this->db->join('tbl_jadwal', 'tbl_krs.id_jadwal = tbl_jadwal.id_jadwal');
        $this->db->join('tbl_semester', 'tbl_krs.kd_semester = tbl_semester.kd_semester');
        $this->db->where('tbl_krs.id_krs', $id_krs);

        return $this->db->get()->row_array();
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_krs', $data);
    }

    public function edit($id_krs, $data)
    {
        $this->db->where('id_krs', $this->input->post('id_krs'));
        $this->db->update('tbl_krs', $data);
    }

    public function hapus($id_krs)
    {
        $this->db->delete('tbl_krs', ['id_krs' => $id_krs]);   
    }
}
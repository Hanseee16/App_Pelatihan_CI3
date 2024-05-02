<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

    public function getAllUser()
    {
        return $this->db->get('tbl_user')->result_array();
    }

    public function getIdUser($id_user)
    {
        return $this->db->get_where('tbl_user', ['id_user' => $id_user])->row_array();
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_user', $data);
    }

    public function edit($id_user, $data)
    {
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('tbl_user', $data);
    }

    public function hapus($id_user)
    {
        $this->db->delete('tbl_user', ['id_user' => $id_user]);   
    }
}
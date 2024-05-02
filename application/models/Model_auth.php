<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_auth extends CI_Model {

    public function tambah($data)
    {
        $this->db->insert('tbl_user', $data);
    }

    public function cekDataUser($username, $password)
    {
        return $this->db->get_where('tbl_user', ['username' => $username])->row_array();
    }
}
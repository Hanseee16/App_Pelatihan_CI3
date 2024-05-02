<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_mahasiswa');
    }

    public function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->Model_mahasiswa->getAllMahasiswa();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/topbar');
        $this->load->view('user/mahasiswa', $data);
        $this->load->view('templates/footer');        
    }
}

/* End of file Dosen.php */
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_krs');
        $this->load->model('Model_mahasiswa');
        $this->load->model('Model_jadwal');
        $this->load->model('Model_semester');
        
    }

    public function index()
    {
        $data['title']  = 'Data KRS';
        $data['krs'] = $this->Model_krs->getAllKrs();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/topbar');
        $this->load->view('user/krs', $data);
        $this->load->view('templates/footer');        
    }
}
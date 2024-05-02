<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dosen');
        
    }

    public function index()
    {
        $data['title'] = 'Data Dosen';
        $data['dosen'] = $this->Model_dosen->getAllDosen();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/topbar');
        $this->load->view('user/dosen', $data);
        $this->load->view('templates/footer');        
    }
}
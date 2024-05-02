<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_matkul');
        
    }

    public function index()
    {
        $data['title'] = 'Data Mata Kuliah';
        $data['matkul'] = $this->Model_matkul->getAllMatkul();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/topbar');
        $this->load->view('user/matkul', $data);
        $this->load->view('templates/footer');        
    }
}
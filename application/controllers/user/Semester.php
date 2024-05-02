<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Semester extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_semester');
        
    }

    public function index()
    {
        $data['title'] = 'Data Semester';
        $data['semester'] = $this->Model_semester->getAllSemester();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/topbar');
        $this->load->view('user/semester', $data);
        $this->load->view('templates/footer');        
    }
}
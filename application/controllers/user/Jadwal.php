<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_jadwal');
    }

    public function index()
    {
        $data['title']  = 'Data Jadwal';
        $data['jadwal'] = $this->Model_jadwal->getAllJadwal();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/topbar');
        $this->load->view('user/jadwal', $data);
        $this->load->view('templates/footer');        
    }
}
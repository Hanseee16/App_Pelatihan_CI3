<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Dashboard User';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/topbar');
        $this->load->view('user/dashboard');
        $this->load->view('templates/footer');
    }

}

/* End of file Dashboard.php */
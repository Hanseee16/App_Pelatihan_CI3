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
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/semester/semester', $data);
        $this->load->view('templates/footer');        
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Semester';

        $this->form_validation->set_rules('kd_semester', 'Kode Semester', 'trim|required|is_unique[tbl_semester.kd_semester]', ['required' => '%s belum diisi', 'is_unique' => '%s sudah sudah ada']);
        $this->form_validation->set_rules('semester', 'Semester', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/semester/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kd_semester'   => $this->input->post('kd_semester'),
                'semester'      => $this->input->post('semester'),
            ];

            $this->Model_semester->tambah($data);
            redirect('admin/semester');   
        }   
    }

    public function edit($kd_semester)
    {
        $data['title'] = 'Edit Data Semester';
        $data['semester'] = $this->Model_semester->getKodeSemester($kd_semester);

        $this->form_validation->set_rules('kd_semester', 'Kode Semester', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('semester', 'Semester', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/semester/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kd_semester'   => $this->input->post('kd_semester'),
                'semester'      => $this->input->post('semester'),
            ];

            $this->Model_semester->edit($kd_semester, $data);
            redirect('admin/semester');   
        }   
    }

    public function hapus($kd_semester){
        $this->Model_semester->hapus($kd_semester);
        redirect('admin/semester');
    }

}
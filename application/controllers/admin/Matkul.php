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
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/matkul/matkul', $data);
        $this->load->view('templates/footer');        
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Matkul';

        $this->form_validation->set_rules('kd_matkul', 'Kode Mata Kuliah', 'trim|required|is_unique[tbl_matkul.kd_matkul]', ['required' => '%s belum diisi', 'is_unique' => '%s sudah sudah ada']);
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('sks', 'SKS', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/matkul/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kd_matkul' => $this->input->post('kd_matkul'),
                'nama'      => $this->input->post('nama'),
                'sks'       => $this->input->post('sks'),
            ];

            $this->Model_matkul->tambah($data);
            redirect('admin/matkul');   
        }   
    }

    public function edit($kd_matkul)
    {
        $data['title'] = 'Edit Data Mata Kuliah';
        $data['matkul'] = $this->Model_matkul->getKodeMatkul($kd_matkul);

        $this->form_validation->set_rules('kd_matkul', 'Kode Mata Kuliah', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('sks', 'SKS', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/matkul/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kd_matkul' => $this->input->post('kd_matkul'),
                'nama'      => $this->input->post('nama'),
                'sks'       => $this->input->post('sks'),
            ];

            $this->Model_matkul->edit($kd_matkul, $data);
            redirect('admin/matkul');   
        }   
    }

    public function hapus($kd_matkul){
        $this->Model_matkul->hapus($kd_matkul);
        redirect('admin/matkul');
    }

}
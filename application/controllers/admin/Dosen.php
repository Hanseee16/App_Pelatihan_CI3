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
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/dosen/dosen', $data);
        $this->load->view('templates/footer');        
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Dosen';

        $this->form_validation->set_rules('kd_dosen', 'Kode Dosen', 'trim|required|is_unique[tbl_dosen.kd_dosen]', ['required' => '%s belum diisi', 'is_unique' => '%s sudah sudah ada']);
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/dosen/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kd_dosen'  => $this->input->post('kd_dosen'),
                'nama'      => $this->input->post('nama'),
                'alamat'    => $this->input->post('alamat'),
            ];

            $this->Model_dosen->tambah($data);
            redirect('admin/dosen');   
        }   
    }

    public function edit($kd_dosen)
    {
        $data['title'] = 'Edit Data Dosen';
        $data['dosen'] = $this->Model_dosen->getKodeDosen($kd_dosen);

        $this->form_validation->set_rules('kd_dosen', 'Kode Dosen', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/dosen/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kd_dosen'  => $this->input->post('kd_dosen'),
                'nama'      => $this->input->post('nama'),
                'alamat'    => $this->input->post('alamat'),
            ];

            $this->Model_dosen->edit($kd_dosen, $data);
            redirect('admin/dosen');   
        }   
    }

    public function hapus($kd_dosen){
        $this->Model_dosen->hapus($kd_dosen);
        redirect('admin/dosen');
    }

}
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_jadwal');
        $this->load->model('Model_dosen');
        $this->load->model('Model_matkul');
        
    }

    public function index()
    {
        $data['title']  = 'Data Jadwal';
        $data['jadwal'] = $this->Model_jadwal->getAllJadwal();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/jadwal/jadwal', $data);
        $this->load->view('templates/footer');        
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Jadwal';
        $data['dosen']  = $this->Model_dosen->getAllDosen();
        $data['matkul'] = $this->Model_matkul->getAllMatkul();

        $this->form_validation->set_rules('waktu', 'Waktu', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('ruang', 'Ruang', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/jadwal/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kd_dosen'  => $this->input->post('kd_dosen'),
                'kd_matkul' => $this->input->post('kd_matkul'),
                'waktu'     => $this->input->post('waktu'),
                'ruang'     => $this->input->post('ruang'),
            ];

            $this->Model_jadwal->tambah($data);
            redirect('admin/jadwal');   
        }   
    }

    public function edit($id_jadwal)
    {
        $data['title'] = 'Edit Data Jadwal';
        $data['jadwal'] = $this->Model_jadwal->getIdJadwal($id_jadwal);
        $data['dosen']  = $this->Model_dosen->getAllDosen();
        $data['matkul'] = $this->Model_matkul->getAllMatkul();

        $this->form_validation->set_rules('waktu', 'Waktu', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('ruang', 'Ruang', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/jadwal/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kd_dosen'  => $this->input->post('kd_dosen'),
                'kd_matkul' => $this->input->post('kd_matkul'),
                'waktu'     => $this->input->post('waktu'),
                'ruang'     => $this->input->post('ruang'),
            ];

            $this->Model_jadwal->edit($id_jadwal, $data);
            redirect('admin/jadwal');   
        }   
    }

    public function hapus($id_jadwal){
        $this->Model_jadwal->hapus($id_jadwal);
        redirect('admin/jadwal');
    }
}
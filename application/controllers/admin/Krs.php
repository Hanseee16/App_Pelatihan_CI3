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
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/krs/krs', $data);
        $this->load->view('templates/footer');        
    }

    public function tambah()
    {
        $data['title']      = 'Tambah Data Jadwal';
        $data['mahasiswa']  = $this->Model_mahasiswa->getAllMahasiswa();
        $data['jadwal']     = $this->Model_jadwal->getAllJadwal();
        $data['semester']   = $this->Model_semester->getAllSemester();

        $this->form_validation->set_rules('nim', 'NIM', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('id_jadwal', 'ID Jadwal', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('kd_semester', 'Kode Semester', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/krs/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nim'           => $this->input->post('nim'),
                'id_jadwal'     => $this->input->post('id_jadwal'),
                'kd_semester'   => $this->input->post('kd_semester'),
            ];

            $this->Model_krs->tambah($data);
            redirect('admin/krs');   
        }   
    }

    public function edit($id_krs)
    {
        $data['title']      = 'Edit Data Jadwal';
        $data['krs']        = $this->Model_krs->getIdKrs($id_krs);
        $data['mahasiswa']  = $this->Model_mahasiswa->getAllMahasiswa();
        $data['jadwal']     = $this->Model_jadwal->getAllJadwal();
        $data['semester']   = $this->Model_semester->getAllSemester();

        $this->form_validation->set_rules('nim', 'NIM', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('id_jadwal', 'ID Jadwal', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('kd_semester', 'Kode Semester', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/krs/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nim'           => $this->input->post('nim'),
                'id_jadwal'     => $this->input->post('id_jadwal'),
                'kd_semester'   => $this->input->post('kd_semester'),
            ];

            $this->Model_krs->edit($id_krs, $data);
            redirect('admin/krs');   
        }   
    }

    public function hapus($id_krs){
        $this->Model_krs->hapus($id_krs);
        redirect('admin/krs');
    }
}
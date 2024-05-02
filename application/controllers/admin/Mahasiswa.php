<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_mahasiswa');
    }

    public function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->Model_mahasiswa->getAllMahasiswa();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/mahasiswa/mahasiswa', $data);
        $this->load->view('templates/footer');        
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Mahasiswa';

        $this->form_validation->set_rules('nim', 'NIM', 'trim|required|is_unique[tbl_mahasiswa.nim]', ['required' => '%s belum diisi', 'is_unique' => '%s sudah sudah ada']);
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/mahasiswa/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nim'       => $this->input->post('nim'),
                'nama'      => $this->input->post('nama'),
                'alamat'    => $this->input->post('alamat'),
                'jurusan'   => $this->input->post('jurusan'),
            ];

            $this->Model_mahasiswa->tambah($data);
            redirect('admin/mahasiswa');   
        }   
    }

    public function edit($nim)
    {
        $data['title'] = 'Edit Data Mahasiswa';
        $data['mahasiswa'] = $this->Model_mahasiswa->getNim($nim);

        $this->form_validation->set_rules('nim', 'NIM', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/mahasiswa/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nim'       => $this->input->post('nim'),
                'nama'      => $this->input->post('nama'),
                'alamat'    => $this->input->post('alamat'),
                'jurusan'   => $this->input->post('jurusan'),
            ];

            $this->Model_mahasiswa->edit($nim, $data);
            redirect('admin/mahasiswa');   
        }   
    }

    public function hapus($nim){
        $this->Model_mahasiswa->hapus($nim);
        redirect('admin/mahasiswa');
    }

}

/* End of file Dosen.php */
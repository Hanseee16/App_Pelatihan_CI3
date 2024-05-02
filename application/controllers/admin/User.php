<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
        
    }

    public function index()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->Model_user->getAllUser();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/user/user', $data);
        $this->load->view('templates/footer');        
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data User';

        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[tbl_user.username]', ['required' => '%s belum diisi', 'is_unique' => '%s sudah sudah ada']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/user/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password'),
            ];

            $this->Model_user->tambah($data);
            redirect('admin/user');   
        }   
    }

    public function edit($id_user)
    {
        $data['title']  = 'Edit Data Dosen';
        $data['user']   = $this->Model_user->getIdUser($id_user);

        $this->form_validation->set_rules('username', 'Username', 'trim|required', ['required' => '%s belum diisi']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/topbar');
            $this->load->view('admin/user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password'),
            ];

            $this->Model_user->edit($id_user, $data);
            redirect('admin/user');   
        }   
    }

    public function hapus($id_user){
        $this->Model_user->hapus($id_user);
        redirect('admin/user');
    }

}
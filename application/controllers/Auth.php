<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_auth');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required',['required' => '%s belum diisi']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required',['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');   
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $user = $this->Model_auth->cekDataUser($username, $password);
        
        if ($user) {
            if ($user['password']) {
                $data = [
                    'username'  => $user['username'],
                ];

                $this->session->set_userdata($data);

                if ($user['username'] == 'admin') {
                    redirect('admin/dashboard');
                } else {
                    redirect('user/dashboard');
                }                

            } else {
                // jika password salah
                $this->session->set_flashdata('pesan',
                '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth');
            }
        } else {
            // jika username tidak terdaftar
            $this->session->set_flashdata('pesan',
            '<div class="alert alert-danger" role="alert">Username tidak terdaftar! Silakan Registrasi</div>');
            redirect('auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[tbl_user.username]', ['required' => '%s belum diisi', 'is_unique' => '%s sudah sudah ada']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => '%s belum diisi']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/register');
        } else {
            $data = [
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password'),
            ];

            $this->Model_auth->tambah($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Registrasi akun berhasil! Silakan login</div>');
            redirect('auth');   
        }   
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('auth');
    }
}
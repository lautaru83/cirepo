<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('dashboard');
        }
        $this->load->view('auth/header');
        $this->load->view('auth/login');
        $this->load->view('auth/footer');
    }
    private function _login()
    { }
    public function register()
    {
        // if ($this->session->userdata('email')) {
        //     redirect('dashboard');
        // }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harap diisi!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username harap diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'required' => 'Email harap diisi!',
            'valid_email' => 'Email tidak Valid!',
            'is_unique' => 'Alamat email telah Digunakan!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'Password harap diisi!',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('Auth/header');
            $this->load->view('Auth/register');
            $this->load->view('Auth/footer');
        } else {
            echo "Oke";
        }
    }
}

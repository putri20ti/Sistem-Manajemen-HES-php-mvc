<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
    }

    public function index() {
        $this->load->view("layout/auth_header");
        $this->load->view("auth/login");
        $this->load->view("layout/auth_footer");
    }

    public function process_login() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $user = $this->User_model->get_user($username, $password);
            
            if ($user) {
                $session_data = [
                    'username' => $user['username'],
                    'level' => $user['level']
                ];
                $this->session->set_userdata($session_data);
                
                if ($user['level'] == 'hes') {
                    redirect('profil');
                } elseif ($user['level'] == 'hescoordinator') {
                    redirect('auth');
                } 
                setMsg('success', 'Berhasil Login!');
            } else {
                setMsg('danger', 'Gagal Login!');
                redirect('auth');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        setMsg('success', 'Berhasil Logput!');
        redirect('Auth');
    }
}
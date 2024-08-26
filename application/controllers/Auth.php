<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('MainModel','main');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
    }

    private function _has_login()
    {
        if ($this->session->has_userdata('login_session')) {
            redirect('Profil');
        }
    }
    
    public function index()
    {
        $this->_has_login();
        $data['title'] = "Login";

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header");
            $this->load->view("auth/login");
            $this->load->view("layout/auth_footer");
        } else {
            $input = $this->input->post(null, true);
            $cek_username = $this->main->cek_username($input['username']);
            if ($cek_username > 0) {
                $password = $this->main->get_password_md5($input['username']); // Mengambil password dengan MD5 dari database
                if (md5($input['password']) === $password) { // Membandingkan password dengan MD5
                    $user_db = $this->main->userdata($input['username']);
                    $userdata = [
                        'user'  => $user_db['id'],
                        'level'  => $user_db['level'],
                    ];
                    $this->session->set_userdata('login_session', $userdata);
                    $this->session->set_flashdata('message', '<script type="text/javascript">Swal.fire({
                        title: "Success!",
                        text: "Anda berhasil login!",
                        icon: "success"
                      });</script>');
                    redirect('Profil');
                } else {
                    $this->session->set_flashdata('message', '<script type="text/javascript">Swal.fire({
                        title: "Error!",
                        text: "Password Salah!",
                        icon: "error"
                      });</script>');
                    redirect('Auth');
                } 
            }
            else {
                $this->session->set_flashdata('message', '<script type="text/javascript">Swal.fire({
                    title: "Error!",
                    text: "Username tidak ditemukan!",
                    icon: "error"
                  });</script>');
                redirect('Auth');
            }
        }
    }

    public function logout()
    {        
        $this->session->unset_userdata('login_session');
        $this->session->set_flashdata('message', '<script type="text/javascript">Swal.fire({
            title: "Success!",
            text: "Logout berhasil!",
            icon: "success"
          });</script>');
        redirect('Auth');
    }
}

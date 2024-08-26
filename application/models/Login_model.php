<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    public function cek_login($username, $password)
{
    $query = $this->db->get_where('user', array('username' => $username), 1);

    if ($query->num_rows() == 1) {
        $user = $query->row_array();
        if (password_verify($password, $user['password'])) {
            return $user; // Return user data if password matches
        }
    }
    return null; // Return null if user or password does not match
}


    public function getLoginData($username, $password)
    {
        $query = $this->db->get_where('user', array('username' => $username), 1);

        if ($query->num_rows() > 0) {
            $user = $query->row();
            if (password_verify($password, $user->password)) {
                $sess_data = array(
                    'logged_in' => TRUE,
                    'username' => $user->username,
                    'level' => $user->level
                );
                $this->session->set_userdata($sess_data);
                redirect('dashboard');
            }
        }

        // If login fails, set flashdata and redirect to login page
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username dan Password Anda Salah!</div>');
        redirect('auth');
    }
}
?>

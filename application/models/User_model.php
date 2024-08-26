<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function get_user($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        return $query->row_array(); // Assuming you fetch an associative array
    }
    public function insert($data) {
        return $this->db->insert('user', $data);
    }
    public function cek_login($username,$password)
    {
     $this->db->where("username", $username);
     $this->db->where("password", $password);
     return $this->db->get('user');
    }
    public function getLoginData($user, $pass)
    {
     $u = $user;
     $p = MD5($pass);
 
     $query_cekLogin = $this->db->get_where('user', array('username' => $u, 'password' => $p));
 
     if (count($query_cekLogin->result()) > 0){
       foreach ($query_cekLogin->result() as $qck){
         foreach ($query_cekLogin->result() as $ck){
           $sess_data ['logged_in'] = TRUE;
           $sess_data ['username'] = $ck->username;
           $sess_data ['password'] = $ck->password;
           $sess_data ['level'] = $ck->level;
           $this->session->set_userdata($sess_data);
         }
         redirect('dashboard');
       }
     } else{
       $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
       Username dan Password Anda Salah!</div>');
       redirect('auth');
     }
    }

    public function get_user_by_id($user_id) {
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('id', $user_id);
      $query = $this->db->get();

      if ($query->num_rows() == 1) {
          return $query->row_array(); // Mengembalikan satu baris data sebagai array
      } else {
          return false; // Mengembalikan false jika data tidak ditemukan
      }
  }

  public function get_user_by_username($username) {
    $this->db->where('username', $username);
    $query = $this->db->get('user');
    return $query->row_array();
}

// public function update_password($user_id, $new_password) {
//     $data = array(
//         'password' => $new_password
//     );

//     $this->db->where('id', $user_id);
//     $this->db->update('user', $data);

//     return $this->db->affected_rows() > 0;
// }

}    

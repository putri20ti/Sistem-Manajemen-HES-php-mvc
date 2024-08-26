<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainModel extends CI_Model
{

    public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }
    
    public function update($table, $pk, $id, $data)
    {
        $this->db->where($pk, $id);
        return $this->db->update($table, $data);
    }

    public function insert($table, $data, $batch = false)
    {
        return $batch ? $this->db->insert_batch($table, $data) : $this->db->insert($table, $data);
    }

    public function delete($table, $pk, $id)
    {
        return $this->db->delete($table, [$pk => $id]);
    }

    public function cek_username($username)
    {
        $query = $this->db->get_where('user', ['username' => $username]);
        return $query->num_rows();
    }

    public function get_password_md5($username) {
        $this->db->select('password');
        $this->db->where('username', $username);
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            $row = $query->row();
            return $row->password;
        } else {
            return false;
        }
    }
    
    public function get_password($username)
    {
        // $data = $this->db->get_where('user',array('username'=>$username,'password' => md5($password)));
        $data = $this->db->get_where('user', ['username' => $username])->row_array();
        return $data['password'];
    }

    public function userdata($username)
    {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }

    public function count($table)
    {
        return $this->db->count_all($table);
    }
}

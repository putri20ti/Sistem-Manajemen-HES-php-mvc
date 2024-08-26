<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_model extends CI_Model {
    public $table = 'karyawan';
    public $id = 'karyawan.id_karyawan';
    
    public function __construct()
    {
        parent::__construct();
    }
    public function getKaryawanById($id_karyawan) {
        $this->db->where('id_karyawan', $id_karyawan);
        $query = $this->db->get('karyawan');
        return $query->row_array();
    }
    
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_all()
    {
        return $this->db->get('karyawan')->result_array();
    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data) {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
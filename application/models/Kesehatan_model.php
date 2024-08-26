<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesehatan_model extends CI_Model {
    public $table = 'kesehatan';
    public $id = 'kesehatan.id_kesehatan';

    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_kesehatan_data() {
        $this->db->from('kesehatan');
        $this->db->join('karyawan', 'kesehatan.nama_karyawan = karyawan.id_karyawan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->from('kesehatan');
        $this->db->join('karyawan', 'kesehatan.nama_karyawan = karyawan.id_karyawan');
        $this->db->where('kesehatan.id_kesehatan', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getById2($id) {
        return $this->db->get_where('kesehatan', ['id_kesehatan' => $id])->row_array();
    }

    // Method to update data
    public function update($where, $data) {
        $this->db->update('kesehatan', $data, $where);
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
?>

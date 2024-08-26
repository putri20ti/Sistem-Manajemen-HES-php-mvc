<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_model extends CI_Model{
    public $table = 'pengajuan';
    public $id = 'pengajuan.id_pengajuan';

    public function get()
    {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function get_pengajuan_data()
    {
        $this->db->select('pengajuan.*, karyawan.nama_karyawan, apd.nama_apd');
        $this->db->from($this->table);
        $this->db->join('karyawan', 'pengajuan.nama_karyawan = karyawan.id_karyawan');
        $this->db->join('apd', 'pengajuan.nama_apd = apd.id_apd');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->select('pengajuan.*, karyawan.nama_karyawan, apd.nama_apd');
        $this->db->from($this->table);
        $this->db->join('karyawan', 'pengajuan.nama_karyawan = karyawan.id_karyawan');
        $this->db->join('apd', 'pengajuan.nama_apd = apd.id_apd');
        $this->db->where('pengajuan.id_pengajuan', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update($where, $data)
    {
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

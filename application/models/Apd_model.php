<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apd_model extends CI_Model{
    public $table = 'apd';
    public $id = 'apd.id_apd';
    public function __construct()
{
    parent::__construct();
}
public function get() {
    return $this->db->get('apd')->result_array();
}

public function getById($id) {
    return $this->db->get_where('apd', ['id_apd' => $id])->row_array();
}

public function updateStock($id_apd, $jumlah) {
    // Ambil stok APD sekarang
    $apd = $this->getById($id_apd);
    $stok_sekarang = $apd['stok'];

    // Kurangi stok dengan jumlah yang diinputkan
    $stok_baru = $stok_sekarang - $jumlah;

    // Update stok di database
    $this->db->where('id_apd', $id_apd);
    $this->db->update('apd', ['stok' => $stok_baru]);
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
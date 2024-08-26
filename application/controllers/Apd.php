<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apd extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Apd_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Hes Officer";
        $data['apd'] = $this->Apd_model->get();
        template_view('apd/vw_apd', $data);
    }
    // public function tambah()
    // {
    //     $data['judul'] = "Halaman Tambah APD";
    //     $this->load->view("layout/header", $data);
    //     $this->load->view("apd/vw_tambah_apd", $data);
    //     $this->load->view("layout/footer", $data);
    // }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Apd";
        $data['apd'] = $this->Apd_model->getById($id);
        template_view('apd/vw_edit_apd', $data);
    }

    public function update()
    {
        $data = [
            'nama_apd' => $this->input->post('nama_apd'),
            'stok' => $this->input->post('stok')
        ];
        $id = $this->input->post('id_apd');
        $this->Apd_model->update(['id_apd' => $id], $data);
        $this->session->set_flashdata('message', '<script type="text/javascript">Swal.fire({
            title: "Success!",
            text: "Data APD berhasil diubah!",
            icon: "success"
          });</script>');
        redirect('Apd');
    }    
    public function hapus($id)
    {
        if ($this->Apd_model->delete($id)) {
            $this->session->set_flashdata('message', 'deleted');
        } else {
            $this->session->set_flashdata('message', 'error');
        }
        redirect('Apd');
    }
}
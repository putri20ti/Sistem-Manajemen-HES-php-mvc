<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insiden extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Karyawan_model');
        $this->load->model('Insiden_model');
        $this->load->library('form_validation'); // Load library form validation
    }

    public function index()
    {
        $data['judul'] = "Halaman Hes Officer";
        $data['insiden'] = $this->Insiden_model->get();
        template_view('insiden/vw_insiden', $data);
    }   

    public function hapus($id)
    {
        $this->Insiden_model->delete($id);
        redirect('Insiden');
    }
}

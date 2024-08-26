<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Karyawan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Halaman Hes Officer";
        $data['karyawan'] = $this->Karyawan_model->get();
        template_view('karyawan/vw_karyawan', $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Karyawan";
        template_view('karyawan/vw_tambah_karyawan', $data);
    }

    public function upload()
    {
        $this->form_validation->set_rules('nobadge', 'Nomor Badge', 'required');
        $this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = [
                'nobadge' => $this->input->post('nobadge'),
                'nama_karyawan' => $this->input->post('nama_karyawan'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jabatan' => $this->input->post('jabatan'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat')
            ];
            $this->Karyawan_model->insert($data);
            $this->session->set_flashdata('message', '<script type="text/javascript">Swal.fire({
                title: "Success!",
                text: "Data Karyawan berhasil ditambahkan!",
                icon: "success"
              });</script>');
            redirect('Karyawan');
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Karyawan";
        $data['karyawan'] = $this->Karyawan_model->getById($id);
        template_view('karyawan/vw_edit_karyawan', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('nobadge', 'Nomor Badge', 'required');
        $this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_karyawan'));
        } else {
            $data = [
                'nobadge' => $this->input->post('nobadge'),
                'nama_karyawan' => $this->input->post('nama_karyawan'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jabatan' => $this->input->post('jabatan'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat')
            ];
            $id = $this->input->post('id_karyawan');
            $this->Karyawan_model->update(['id_karyawan' => $id], $data);
            $this->session->set_flashdata('message', '<script type="text/javascript">Swal.fire({
                title: "Success!",
                text: "Data Karyawan berhasil diubah!",
                icon: "success"
              });</script>');
            redirect('Karyawan');
        }
    }    
    public function hapus($id)
    {
        $this->Karyawan_model->delete($id);
        redirect('Karyawan');
    }
    public function toggle($id)
{
    $id = encode_php_tags($id);
    $status = $this->Karyawan_model->getKaryawanById($id)['is_active'];
    $toggle = $status ? 0 : 1; // Jika user aktif maka nonaktifkan, begitu pula sebaliknya
    $pesan = $toggle ? 'User diaktifkan.' : 'User dinonaktifkan.';
    
    $this->Karyawan_model->update(['id_karyawan' => $id], ['is_active' => $toggle]);
    $this->session->set_flashdata('message', '<script type="text/javascript">Swal.fire({
        title: "Success!",
        text: "' . $pesan . '",
        icon: "success"
    });</script>');
    redirect('Karyawan');
}

}


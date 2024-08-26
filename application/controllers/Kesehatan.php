<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesehatan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Kesehatan_model');
        $this->load->model('Karyawan_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Hes Officer";
        $data['kesehatan'] = $this->Kesehatan_model->get_kesehatan_data();
        template_view('kesehatan/vw_kesehatan', $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Kesehatan APD";
        $data['kesehatan'] = $this->Kesehatan_model->get();
        $data['karyawan'] = $this->Karyawan_model->get();
        template_view('kesehatan/vw_tambah_kesehatan', $data);
    }

    public function upload()
    {
        $this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('riwayat_penyakit', 'Riwayat Penyakit', 'required');
        $this->form_validation->set_rules('pernah_kecelakaan', 'Pernah Kecelakaan', 'required');
        $this->form_validation->set_rules('catatan', 'Catatan', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman tambah kesehatan dengan error
            $this->tambah();
        } else {
            // Jika validasi sukses, lakukan proses upload data
            $data = [
                'nama_karyawan' => $this->input->post('nama_karyawan'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'umur' => $this->input->post('umur'),
                'riwayat_penyakit' => $this->input->post('riwayat_penyakit'),
                'pernah_kecelakaan' => $this->input->post('pernah_kecelakaan'),
                'catatan' => $this->input->post('catatan')
            ];
            $this->Kesehatan_model->insert($data);
            $this->session->set_flashdata('message', '<script type="text/javascript">Swal.fire({
                title: "Success!",
                text: "Data Kesehatan berhasil ditambahkan!",
                icon: "success"
              });</script>');
            redirect('Kesehatan');
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Kesehatan";
        $data['kesehatan'] = $this->Kesehatan_model->getById($id);
        template_view('kesehatan/vw_edit_kesehatan', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('riwayat_penyakit', 'Riwayat Penyakit', 'required');
        $this->form_validation->set_rules('pernah_kecelakaan', 'Pernah Kecelakaan', 'required');
        $this->form_validation->set_rules('catatan', 'Catatan', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman edit kesehatan dengan error
            $this->edit($this->input->post('id_kesehatan'));
        } else {
            // Jika validasi sukses, lakukan proses update data
            $data = [
                'umur' => $this->input->post('umur'),
                'riwayat_penyakit' => $this->input->post('riwayat_penyakit'),
                'pernah_kecelakaan' => $this->input->post('pernah_kecelakaan'),
                'catatan' => $this->input->post('catatan')
            ];
            $id = $this->input->post('id_kesehatan');
            $this->Kesehatan_model->update(['id_kesehatan' => $id], $data);
            $this->session->set_flashdata('message', '<script type="text/javascript">Swal.fire({
                title: "Success!",
                text: "Data Kesehatan berhasil diubah!",
                icon: "success"
              });</script>');
            redirect('Kesehatan');
        }
    }
    public function hapus($id)
    {
        $this->Kesehatan_model->delete($id);
        redirect('Kesehatan');
    }
}
?>

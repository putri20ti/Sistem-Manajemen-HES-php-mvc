<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Pengajuan_model');
        $this->load->model('Karyawan_model');
        $this->load->model('Apd_model');
    }
    private function _config()
    {
        $config['upload_path']      = './assets/img';
        $config['allowed_types']    = 'jpg|jpeg|png|webp';
        $config['max_size']         = '2048';
        $config['encrypt_name']     = FALSE;

        $this->upload->initialize($config);
    }
    public function index()
    {
        $data['judul'] = "Halaman Hes Officer";
        $data['pengajuan'] = $this->Pengajuan_model->get_pengajuan_data();
        template_view('pengajuan/vw_pengajuan_apd', $data);
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Pengajuan APD";
        $data['pengajuan'] = $this->Pengajuan_model->get();
        $data['karyawan'] = $this->Karyawan_model->get();
        $data['apd'] = $this->Apd_model->get();
        template_view('pengajuan/vw_tambah_pengajuan', $data);
    }
    
    public function upload()
    {
        $gambar = $this->_do_upload();
    
        $data = [
            'nama_karyawan' => $this->input->post('nama_karyawan'),
            'nama_apd' => $this->input->post('nama_apd'),
            'jumlah' => $this->input->post('jumlah'),
            'tanggal' => $this->input->post('tanggal'),
            'keterangan' => $this->input->post('keterangan'),
            'gambar' => $gambar,
            'status' => $this->input->post('status')
        ];
    
        // Insert data pengajuan
        $this->Pengajuan_model->insert($data);
        $this->session->set_flashdata('message', '<script type="text/javascript">Swal.fire({
            title: "Berhasil ditambahkan!",
            
            icon: "success"
          });</script>');
    
        // Kurangi stok APD
        $id_apd = $this->input->post('nama_apd');
        $jumlah = $this->input->post('jumlah');
        $this->Apd_model->updateStock($id_apd, $jumlah);
    
        redirect('Pengajuan');
    }
    
    private function _do_upload() {
        $config['upload_path'] = './assets/img/gambar/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['file_name'] = time();
    
        $this->load->library('upload', $config);
    
        if (!$this->upload->do_upload('gambar')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
            redirect('Pengajuan');
        }
        return $this->upload->data('file_name');
    }
    

public function add()
    {
        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Pengajuan Sakit";
            $data['jabatan'] = $this->Jabatan_model->get();
            template_view('pengajuansurat/sakit/form_pengajuansakit', $data);
        } else {
            $login_session = $this->session->userdata('login_session');

            $config['upload_path'] = './assets/karyawan/img/'; // path where the files will be stored
            $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
            $config['max_size'] = 2048; // max file size 2MB
            $config['file_name'] = 'gambar_' . time(); // file name rule

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_upload')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', 'Upload gambar gagal: ' . $error);
                redirect('Form_Sakit/add');
            } else {
                $upload_data = $this->upload->data();
                $input = [
                    'id' => $login_session['user'],
                    'alasan' => $this->input->post('alasan'),
                    'perihal' => $this->input->post('perihal_sakit'),
                    'tgl_diajukan' => date('Y-m-d'),
                    'mulaisakit' => $this->input->post('mulaisakit'),
                    'kembali' => $this->input->post('kembali'),
                    'gambar' => 'assets/karyawan/img/' . $upload_data['file_name'], // corrected path for saving in database
                    'id_sakit' => 'sakit-' . substr(md5($login_session['user'] . $this->input->post('alasan') . $this->input->post('mulaisakit')), 0, 5),
                    'id_status' => 1, // Status default saat pertama kali diajukan
                ];

                $this->Sakit_model->insert($input);
                $this->session->set_flashdata('message', '<script type="text/javascript">Swal.fire({
                    title: "Success!",
                    text: "Data Pengajuan berhasil ditambahkan!",
                    icon: "success"
                  });</script>');
                redirect('Form_Sakit/index');
            }
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Pengajuan";
        $data['pengajuan'] = $this->Pengajuan_model->getById($id);
        $data['apd'] = $this->Apd_model->getById($id);
        $data['karyawan'] = $this->Karyawan_model->getById($id);
        template_view('pengajuan/vw_edit_pengajuan', $data);
    }
    public function update()
    {
        $data = [
            'status' => $this->input->post('status')
        ];
        $id = $this->input->post('id_pengajuan');
        $this->Pengajuan_model->update(['id_pengajuan' => $id], $data);
        $this->session->set_flashdata('message', '<script type="text/javascript">Swal.fire({
            title: "Success!",
            text: "Data Pengajuan berhasil diubah!",
            icon: "success"
          });</script>');
        redirect('Pengajuan');
    }    

    public function hapus($id)
    {
        $this->Pengajuan_model->delete($id);
        redirect('Pengajuan');
    }
}
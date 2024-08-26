// Controller: application/controllers/Kendaraan.php
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kendaraan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kendaraan_model');
        $this->load->library('form_validation'); // Load library form validation
        $this->load->library('upload'); // Load library upload
    }

    public function index()
    {
        $data['judul'] = "Halaman Hes Officer";
        $data['kendaraan'] = $this->Kendaraan_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("kendaraan/vw_kendaraan", $data);
        $this->load->view("layout/footer", $data);
    }

    private function _config()
    {
        $config['upload_path']      = './assets/img';
        $config['allowed_types']    = 'jpg|jpeg|png|webp';
        $config['max_size']         = '2048';
        $config['encrypt_name']     = FALSE;

        $this->upload->initialize($config);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Data Kendaraan";
        $data['status_enum'] = $this->Kendaraan_model->get_enum_values('kendaraan', 'status');
        $data['tipe_kendaraan_enum'] = $this->Kendaraan_model->get_enum_values('kendaraan', 'tipe_kendaraan');
        $this->load->view("layout/header", $data);
        $this->load->view("kendaraan/vw_tambah_kendaraan", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $this->_config();
        $this->_validasi('add');

        if ($this->form_validation->run() == false || $this->upload->do_upload('foto') == false) {
            $data['title'] = "Tambah Data";
            $data['error'] = $this->upload->display_errors();
            $this->load->view("layout/header", $data);
            $this->load->view("kendaraan/vw_tambah_kendaraan", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $input = $this->input->post(null, true);
            $foto = $this->upload->data('file_name');
            $input_data = [
                'no_plat'          => $input['no_plat'],
                'merk'      => $input['merk'],
                'warna'   => $input['warna'],
                'tipe_kendaraan'   => $input['tipe_kendaraan'],
                'status'   => $input['status'],
                'foto'          => $foto
            ];

            if ($this->Kendaraan_model->insert($input_data)) {
                set_pesan('data berhasil disimpan.');
                redirect('kendaraan');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('kendaraan/add');
            }
        }
    }

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('no_plat', 'Nomor Plat', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('warna', 'Warna', 'required');
        $this->form_validation->set_rules('tipe_kendaraan', 'Tipe Kendaraan', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
    }
    public function edit($id) {
        $data['kendaraan'] = $this->Kendaraan_model->getById($id);
        $this->load->view('layout/header');
        $this->load->view('kendaraan/vw_edit_kendaraan', $data);
        $this->load->view('layout/footer');
    }

    public function update() {
        $id = $this->input->post('id_kendaraan');
        $data = [
            'no_plat' => $this->input->post('no_plat'),
            'merk' => $this->input->post('merk'),
            'warna' => $this->input->post('warna'),
            'tipe_kendaraan' => $this->input->post('tipe_kendaraan'),
            'status' => $this->input->post('status')
        ];

        if (!empty($_FILES['foto']['name'])) {
            $upload = $this->_do_upload();
            $data['foto'] = $upload;
        }

        $this->Kendaraan_model->updateKendaraan($id, $data);
        redirect('Kendaraan');
    }
    
    private function _do_upload() {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['file_name'] = time();

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
            redirect('Kendaraan');
        }
        return $this->upload->data('file_name');
    }
    public function detail($id) {
        $data['kendaraan'] = $this->Kendaraan_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view('kendaraan/vw_kendaraan_detail', $data);
        $this->load->view("layout/footer", $data);
    }
    public function hapus($id)
    {
        $this->Kendaraan_model->delete($id);
        redirect('Kendaraan');
    }
}

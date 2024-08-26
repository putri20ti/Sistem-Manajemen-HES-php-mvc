<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bbs extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('username')) {
        //     redirect('auth'); // Redirect to login page if not logged in
        // }
        cek_login();
        $this->load->model('Karyawan_model');
        $this->load->model('Bbs_model');
        $this->load->library('form_validation'); // Load library form validation
    }
    public function index()
    {
        $data['judul'] = "Halaman Hes Officer";
        $data['observasi'] = $this->Bbs_model->get_observasi_data();
        template_view('bbs/vw_bbsobservasi', $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah APD";
        $this->load->view("layout/header", $data);
        $this->load->view("apd/vw_tambah_apd", $data);
        $this->load->view("layout/footer", $data);
    }
    public function edit()
    {
        $data['judul'] = "Halaman Edit APD";
        $this->load->view("layout/header", $data);
        $this->load->view("apd/vw_edit_apd", $data);
        $this->load->view("layout/footer", $data);
    }
    public function index3()
    {
        $data['judul'] = "Halaman Database Activity";
        $data['bbs'] = $this->Bbs_model->get_observasi_data3();        
        template_view('bbs/vw_database-activity', $data);
    }

    public function index4() {
        $data['judul'] = "Halaman OPS-Summary";
    
        // Ambil data tahun-tahun yang tersedia dari database
        $tahun_list = $this->Bbs_model->getYears();
        $data['tahun_list'] = $tahun_list;
        
        // Tentukan tahun default saat ini (jika tidak ada tahun yang dipilih)
        $currentYear = $this->input->get('tahun') ?? date('Y');
        $data['currentYear'] = $currentYear; // Fix assignment to pass to view
        
        $data['observasi'] = $this->Bbs_model->getOpsSummaryByYear($currentYear);
        
        template_view('bbs/vw_ops-summary', $data);
    }    
   
    public function filterByYear() {
        $tahun = $this->input->post('tahun');
        $observasi = $this->ObservasiModel->getObservasiByTahun($tahun);

        $data = [
            'observasi' => $observasi
        ];

        $this->load->view('bbs/vw_ops-summary', $data);
    }
    
    public function index5()
    {
        $data['judul'] = "Halaman Risk Summary";
         // Ambil data tahun-tahun yang tersedia dari database
         $tahun_list = $this->Bbs_model->getYears();
         $data['tahun_list'] = $tahun_list;
         
         // Tentukan tahun default saat ini (jika tidak ada tahun yang dipilih)
         $currentYear = $this->input->get('tahun') ?? date('Y');
         $data['currentYear'] = $currentYear;

        $observasi_data = $this->Bbs_model->getObservasiDataByYear($currentYear);
        $risk_columns = $observasi_data['risk_columns'];

        // Mengambil deskripsi risk columns dari model
        $column_descriptions = $this->Bbs_model->getColumnDescriptions();

        // Mengirimkan data ke view
        $data['observasi_data'] = $observasi_data['observasi_data'];
        
        $data['risk_columns'] = $risk_columns;
        $data['column_descriptions'] = $column_descriptions;
        template_view('bbs/vw_risk-summary', $data);
    }
    
    public function filtertanggal()
    {
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
    
         
        $data ['title'] = "Filter Observasi";
        $data ['observasi'] = $this->Bbs_model->filtertanggal($tgl_awal, $tgl_akhir);
        template_view('bbs/filtertanggal', $data);
    }


    public function filtertanggaldb()
{
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');

    $data['title'] = "Filter Observasi";
    $data['observasi'] = $this->Bbs_model->filtertanggal($tgl_awal, $tgl_akhir);
    
    // Store the filtered dates in the session for export use
    $this->session->set_userdata('tgl_awal', $tgl_awal);
    $this->session->set_userdata('tgl_akhir', $tgl_akhir);

    template_view('bbs/filtertanggaldb', $data);
}

    
    public function detail($id)
    {
        $data['title'] = "Detail Observasi";
        $data['observasi'] = $this->Bbs_model->detailobservasi($id);
        $data['karyawan'] = $this->Karyawan_model->get();
        template_view('bbs/vw_detail_bbs', $data);
        }
    public function hapus($id)
    {
        $this->Bbs_model->delete($id);
        redirect('Bbs');
    }
}
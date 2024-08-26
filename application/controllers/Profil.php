<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Bbs_model');
        $this->load->model('Login_model');
        $this->load->model('MainModel', 'main'); // Pastikan Anda memiliki model user_model
        $this->load->model('User_model'); // Pastikan Anda memiliki model user_model
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }
    public function index() {
        $data['judul'] = "Halaman Dashboard Hes Officer";
        
        // Ambil data tahun-tahun yang tersedia dari database
        $tahun_list = $this->Bbs_model->getYears();
        $data['tahun_list'] = $tahun_list;
        
        // Tentukan tahun default saat ini (jika tidak ada tahun yang dipilih)
        $currentYear = date('Y');
        $data['currentYear'] = $currentYear;
        
        // Ambil data observasi untuk tahun saat ini (default)
        $currentData = $this->Bbs_model->getOpsSummaryByYear($currentYear);
        if (!empty($currentData)) {
            $data['jmltotal_observasi'] = array_sum(array_column($currentData, 'total_observasi'));
            $data['jmlselamat'] = array_sum(array_column($currentData, 'selamat'));
            $data['jmlberesiko'] = array_sum(array_column($currentData, 'beresiko'));
        } else {
            $data['jmltotal_observasi'] = 0;
            $data['jmlselamat'] = 0;
            $data['jmlberesiko'] = 0;
        }
    
        // Buat data JSON untuk semua tahun dan bulan
        $all_data = [];
        foreach ($tahun_list as $tahun) {
            $yearData = $this->Bbs_model->getOpsSummaryByYear($tahun['tahun']);
            $all_data[$tahun['tahun']] = $yearData;
        }
        $data['all_data'] = $all_data;
        
        // Load view dengan data yang sudah diatur
        template_view('profil/dashboard', $data);
    }
    // Metode untuk mengambil data observasi berdasarkan tahun
    public function getDataByYear() {
        $selectedYear = $this->input->get('year'); // Ambil tahun yang dipilih dari parameter GET
    
        // Panggil model untuk mengambil data observasi berdasarkan tahun
        $observasi = $this->Bbs_model->getOpsSummaryByYear($selectedYear);
    
        // Buat array untuk menyimpan data yang akan dikirimkan kembali sebagai JSON
        $response = [
            'labels' => [],
            'selamat' => [],
            'beresiko' => [],
            'total_observasi' => []
        ];
    
        // Proses data observasi
        foreach ($observasi as $data) {
            $response['labels'][] = $data['bulan'];
            $response['selamat'][] = $data['selamat'];
            $response['beresiko'][] = $data['beresiko'];
            $response['total_observasi'][] = $data['total_observasi'];
        }
    
        // Mengembalikan data dalam format JSON
        echo json_encode($response);
    }
    
    // public function ubahpassword()
    // {
    //     $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
    //     $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|trim|min_length[5]|differs[password_lama]');
    //     $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'matches[password_baru]');
    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = "Ubah Password";
    //         template_view('profil/ubahpassword', $data);
    //     } else {
    //         $input = $this->input->post(null, true);
    //         if (password_verify($input['password_lama'], userdata('password'))) {
    //             $new_pass = ['password' => md5($input['password_baru'], PASSWORD_DEFAULT)];
    //             $query = $this->main->update('user', 'id', userdata('id'), $new_pass);
    //             if ($query) {
    //                 msgBox('edit', true);
    //                 redirect('auth/logout');
    //             } else {
    //                 msgBox('edit', false);
    //                 redirect('profil/ubahpassword');
    //             }
    //         } else {
    //             msgBox('edit', false);
    //             redirect('profil/ubahpassword');
    //         }
            
    //     }
    // }

    // Auth.php
    // public function update_password() {
    //     $old_password = $this->input->post('old_password');
    //     $new_password = $this->input->post('new_password');
    //     $confirm_password = $this->input->post('confirm_password');
    
    //     // Validasi
    //     $this->form_validation->set_rules('old_password', 'Password Lama', 'required');
    //     $this->form_validation->set_rules('new_password', 'Password Baru', 'required|min_length[5]');
    //     $this->form_validation->set_rules('confirm_password', 'Konfirmasi Password Baru', 'required|matches[new_password]');
    
    //     if ($this->form_validation->run() == FALSE) {
    //         // Jika validasi gagal, kembalikan ke halaman ubah_password dengan pesan error
    //         $data['title'] = "Ubah Password";
    //         template_view('profil/ubahpassword', $data);
    //     } else {
    //         // Ambil username dari session atau cara lain sesuai kebutuhan
    //         $username = $this->session->userdata('username');
    
    //         // Periksa password lama
    //         $user = $this->User_model->get_user_by_username($username);
    
    //         if (!$user || !password_verify($old_password, $user['password'])) {
    //             // Password lama tidak sesuai, set flashdata error
    //             $this->session->set_flashdata('error', 'Password lama salah.');
    //             redirect('profil/update_password');
    //         } else {
    //             // Update password baru
    //             $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    //             $update = $this->User_model->update_password($user['id'], $hashed_password);
    
    //             if ($update) {
    //                 // Password berhasil diubah, set flashdata success
    //                 $this->session->set_flashdata('success', 'Password berhasil diubah.');
    //             } else {
    //                 // Gagal mengubah password, set flashdata error
    //                 $this->session->set_flashdata('error', 'Gagal mengubah password.');
    //             }
    //             redirect('profil/update_password');
    //         }
    //     }
    // }
    

}
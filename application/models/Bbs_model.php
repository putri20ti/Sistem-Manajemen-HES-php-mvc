<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bbs_model extends CI_Model{
    public $table = 'observasi';
    public $id = 'observasi.id';
    private $column_descriptions3 = [
        '1.1' => '1.1: Menghindari "Line of Fire"',
        '1.2' => '1.2: Berjalan/bergerak dengan pandangan ke arah gerakan',
        '1.3' => '1.3: Menjaga mata pada pekerjaan',
        '1.4' => '1.4: Menjaga badan dan bagiannya diluar posisi terjepit',
        '1.5' => '1.5: Naik/turun',
        '2.1' => '2.1: Mengangkat/menurunkan/menekan/menarik',
        '2.2' => '2.2: Menghindar dari memuntir',
        '2.3' => '2.3: Menggapai dalam jangkauan',
        '2.4' => '2.4: Menanggapi resiko ergonomi industri',
        '3.1' => '3.1: Memilih dan menggunakan perkakas/peralatan',
        '3.2' => '3.2: Menggunakan pelindung/barikade/alat peringatan',
        '4.1' => '4.1: Persiapan kerja dan JHA (Job Hazard Analysis) - JSA',
        '4.2' => '4.2: Mengikuti prosedur',
        '4.3' => '4.3: Isolasi energi (Lock-Out/Tag-Out)',
        '4.4' => '4.4: Mengerjakan Hot-Work',
        '4.5' => '4.5: Memasuki area confined space',
        '4.7' => '4.7: Komunikasi ke rekan kerja',
        '5.1' => '5.1: Bekerja pada posisi seimbang',
        '5.2' => '5.2: Membersihkan/menyimpan peralatan/perkakas (h.keeping)',
        '5.3' => '5.3: Bekerja di lingkungan dengan cahaya yang cukup',
        '6.1' => '6.1: Melakukan istirahat berkala',
        '6.2' => '6.2: Postur leher dan punggung',
        '6.3' => '6.3: Postur saat menggunakan telepon',
        '6.4' => '6.4: Penyangga punggung',
        '6.5' => '6.5: Postur pundak',
        '6.6' => '6.6: Posisi pergelangan dan tangan',
        '6.7' => '6.7: Memegang/menggerakkan mouse',
        '6.8' => '6.8: Posisi Pinggang dan Kaki',
        '6.9' => '6.9: Posisi Telapak Kaki',
        '6.10' => '6.10: Mengenali dan Melaporkan ketidaknyamanan',
        '7.1' => '7.1: Pencegahan tumpahan',
        '7.2' => '7.2: Persiapan untuk pembersihan tumpahan',
        '7.3' => '7.3: Menangani sampah',
        '8.1' => '8.1: Pelindung kepala',
        '8.2' => '8.2: Pelindung mata dan wajah',
        '8.3' => '8.3: Pelindung pendengaran',
        '8.4' => '8.4: Pelindung pernafasan',
        '8.5' => '8.5: Pelindung tangan dan lengan',
        '8.6' => '8.6: Pelindung jatuh',
        '8.7' => '8.7: Pakaian pelindung',
        '8.8' => '8.8: Alat mengambang personal',
        '8.9' => '8.9: Pelindung kaki',
        '9.1' => '9.1: Perencanaan perjalanan',
        '9.2' => '9.2: Pre-Trip Inspection dan Seat Belt',
        '9.3' => '9.3: Berkendara pada kecepatan yang sesuai',
        '9.4' => '9.4: Jarak iring',
        '9.5' => '9.5: Mengerem',
        '9.6' => '9.6: Berpindah jalur',
        '9.7' => '9.7: Menjaga pandangan dan pengamatan',
        '9.8' => '9.8: Memundurkan kendaraan',
        '9.9' => '9.9: Perilaku lainnya yang tidak tersebut di defenisi driving',
        '10.1' => '10.1: Persiapan perjalanan kapal',
        '10.2' => '10.2: Menggerakkan/memundurkan kapal',
        '10.3' => '10.3: Memasuki persimpangan',
        '10.4' => '10.4: Docking',
        '11.0' => '11.0: Lain-lain',
    ];

    private $risk_columns = [
        '1.1', '1.2', '1.3', '1.4', '1.5',
        '2.1', '2.2', '2.3', '2.4',
        '3.1', '3.2',
        '4.1', '4.2', '4.3', '4.4', '4.5', '4.7',
        '5.1', '5.2', '5.3',
        '6.1', '6.2', '6.3', '6.4', '6.5', '6.6', '6.7', '6.8', '6.9', '6.10',
        '7.1', '7.2', '7.3',
        '8.1', '8.2', '8.3', '8.4', '8.5', '8.6', '8.7', '8.8', '8.9',
        '9.1', '9.2', '9.3', '9.4', '9.5', '9.6', '9.7', '9.8', '9.9',
        '10.1', '10.2', '10.3', '10.4',
        '11.0'
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_observasi_data()
    {
        $this->db->select('observasi.*, karyawan.nama_karyawan');
        $this->db->from($this->table);
        $this->db->join('karyawan', 'observasi.id_karyawan = karyawan.id_karyawan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_observasi_data3()
    {
        $this->db->select('observasi.*, karyawan.nama_karyawan');
        $this->db->from($this->table);
        $this->db->join('karyawan', 'observasi.id_karyawan = karyawan.id_karyawan');
        $query = $this->db->get();
        $observasi_data = $query->result_array();

        // Include risk columns
        foreach ($observasi_data as &$observasi) {
            $observasi['risk_columns'] = $this->getRiskColumnsForRow3($observasi);
        }

        return $observasi_data;
    }

    private function getRiskColumnsForRow3($row)
    {
        $columns = [
            '1.1', '1.2', '1.3', '1.4', '1.5',
            '2.1', '2.2', '2.3', '2.4',
            '3.1', '3.2',
            '4.1', '4.2', '4.3', '4.4', '4.5', '4.7',
            '5.1', '5.2', '5.3',
            '6.1', '6.2', '6.3', '6.4', '6.5', '6.6', '6.7', '6.8', '6.9', '6.10',
            '7.1', '7.2', '7.3',
            '8.1', '8.2', '8.3', '8.4', '8.5', '8.6', '8.7', '8.8', '8.9',
            '9.1', '9.2', '9.3', '9.4', '9.5', '9.6', '9.7', '9.8', '9.9',
            '10.1', '10.2', '10.3', '10.4',
            '11.0'
        ];

        $risk_columns = [];
        foreach ($columns as $column) {
            if (isset($row[$column]) && $row[$column] == 0) {
                $risk_columns[] = $this->column_descriptions3[$column];
            }
        }

        return $risk_columns;
    }

    public function getRiskColumns()
    {
        return [
            '1.1', '1.2', '1.3', '1.4', '1.5',
        '2.1', '2.2', '2.3', '2.4',
        '3.1', '3.2',
        '4.1', '4.2', '4.3', '4.4', '4.5', '4.7',
        '5.1', '5.2', '5.3',
        '6.1', '6.2', '6.3', '6.4', '6.5', '6.6', '6.7', '6.8', '6.9', '6.10',
        '7.1', '7.2', '7.3',
        '8.1', '8.2', '8.3', '8.4', '8.5', '8.6', '8.7', '8.8', '8.9',
        '9.1', '9.2', '9.3', '9.4', '9.5', '9.6', '9.7', '9.8', '9.9',
        '10.1', '10.2', '10.3', '10.4',
        '11.0'
        ];
    }

    public function getColumnDescriptions()
    {
        return [
            '1.1' => 'Menghindari "Line of Fire"',
            '1.2' => 'Berjalan/bergerak dengan pandangan ke arah gerakan',
            '1.3' => 'Menjaga mata pada pekerjaan',
            '1.4' => 'Menjaga badan dan bagiannya diluar posisi terjepit',
            '1.5' => 'Naik/turun',
            '2.1' => 'Mengangkat/menurunkan/menekan/menarik',
            '2.2' => 'Menghindar dari memuntir',
            '2.3' => 'Menggapai dalam jangkauan',
            '2.4' => 'Menanggapi resiko ergonomi industri',
            '3.1' => 'Memilih dan menggunakan perkakas/peralatan',
            '3.2' => 'Menggunakan pelindung/barikade/alat peringatan',
            '4.1' => 'Persiapan kerja dan JHA (Job Hazard Analysis) - JSA',
            '4.2' => 'Mengikuti prosedur',
            '4.3' => 'Isolasi energi (Lock-Out/Tag-Out)',
            '4.4' => 'Mengerjakan Hot-Work',
            '4.5' => 'Memasuki area confined space',
            '4.7' => 'Komunikasi ke rekan kerja',
            '5.1' => 'Bekerja pada posisi seimbang',
            '5.2' => 'Membersihkan/menyimpan peralatan/perkakas (h.keeping)',
            '5.3' => 'Bekerja di lingkungan dengan cahaya yang cukup',
            '6.1' => 'Melakukan istirahat berkala',
            '6.2' => 'Postur leher dan punggung',
            '6.3' => 'Postur saat menggunakan telepon',
            '6.4' => 'Penyangga punggung',
            '6.5' => 'Postur pundak',
            '6.6' => 'Posisi pergelangan dan tangan',
            '6.7' => 'Memegang/menggerakkan mouse',
            '6.8' => 'Posisi Pinggang dan Kaki',
            '6.9' => 'Posisi Telapak Kaki',
            '6.10' => 'Mengenali dan Melaporkan ketidaknyamanan',
            '7.1' => 'Pencegahan tumpahan',
            '7.2' => 'Persiapan untuk pembersihan tumpahan',
            '7.3' => 'Menangani sampah',
            '8.1' => 'Pelindung kepala',
            '8.2' => 'Pelindung mata dan wajah',
            '8.3' => 'Pelindung pendengaran',
            '8.4' => 'Pelindung pernafasan',
            '8.5' => 'Pelindung tangan dan lengan',
            '8.6' => 'Pelindung jatuh',
            '8.7' => 'Pakaian pelindung',
            '8.8' => 'Alat mengambang personal',
            '8.9' => 'Pelindung kaki',
            '9.1' => 'Perencanaan perjalanan',
            '9.2' => 'Pre-Trip Inspection dan Seat Belt',
            '9.3' => 'Berkendara pada kecepatan yang sesuai',
            '9.4' => 'Jarak iring',
            '9.5' => 'Mengerem',
            '9.6' => 'Berpindah jalur',
            '9.7' => 'Menjaga pandangan dan pengamatan',
            '9.8' => 'Memundurkan kendaraan',
            '9.9' => 'Perilaku lainnya yang tidak tersebut di defenisi driving',
            '10.1' => 'Persiapan perjalanan kapal',
            '10.2' => 'Menggerakkan/memundurkan kapal',
            '10.3' => 'Memasuki persimpangan',
            '10.4' => 'Docking',
            '11.0' => 'Lain-lain',
        ];
    }

    private function getRiskCode($row)
    {
        foreach ($this->risk_columns as $column) {
            if (isset($row[$column]) && $row[$column] == 1) {
                return $column;
            }
        }
        return '';
    }

    public function get_observasi_data5()
    {
        $this->db->select('observasi.*, karyawan.nama_karyawan');
        $this->db->from($this->table);
        $this->db->join('karyawan', 'observasi.id_karyawan = karyawan.id_karyawan');
        $query = $this->db->get();
        $observasi_data = $query->result_array();

        // Include risk columns, risk code, and risk description
        foreach ($observasi_data as &$observasi) {
            $observasi['risk_columns'] = $this->getRiskColumnsForRow($observasi);
            $observasi['risk_code'] = $this->getRiskCode($observasi);
        }

        // Ambil risk columns dari method getRiskColumns
        $risk_columns = $this->getRiskColumns(); // Pastikan method ini ada di model dan mengembalikan $risk_columns

        // Mengembalikan data observasi dan risk columns
        return [
            'observasi_data' => $observasi_data,
            'risk_columns' => $risk_columns,
        ];
    }

    public function getObservasiDataByYear($year)
{
    $this->db->select('observasi.*, karyawan.nama_karyawan');
    $this->db->from('observasi'); // Ensure this matches your table name
    $this->db->join('karyawan', 'observasi.id_karyawan = karyawan.id_karyawan');
    $this->db->where('YEAR(observasi.tanggal)', $year);
    $query = $this->db->get();
    $observasi_data = $query->result_array();

    // Include risk columns and descriptions
    foreach ($observasi_data as &$observasi) {
        $observasi['risk_columns'] = $this->getRiskColumnsForRow($observasi);
        $observasi['risk_code'] = $this->getRiskCode($observasi);
    }

    // Fetch risk columns
    $risk_columns = $this->getRiskColumns();

    return [
        'observasi_data' => $observasi_data,
        'risk_columns' => $risk_columns,
    ];
}
public function get_observasi_data_by_year($currentYear)
{
    $this->db->select('observasi.*, karyawan.nama_karyawan');
    $this->db->from('observasi');
    $this->db->join('karyawan', 'observasi.id_karyawan = karyawan.id_karyawan');
    $this->db->where('YEAR(observasi.tanggal)', $currentYear);
    $query = $this->db->get();
    $observasi_data = $query->result_array();

    // Include risk columns and risk code
    foreach ($observasi_data as &$observasi) {
        $observasi['risk_columns'] = $this->getRiskColumnsForRow($observasi);
        $observasi['risk_code'] = $this->getRiskCode($observasi);
    }

    $risk_columns = $this->getRiskColumns(); // Fetch risk columns from the model function

    return [
        'observasi_data' => $observasi_data,
        'risk_columns' => $risk_columns,
    ];
}


    private function getRiskColumnsForRow($row)
    {
        $risk_columns = [];
        foreach ($this->risk_columns as $column) {
            if (isset($row[$column])) {
                if ($row[$column] == 0) {
                    $risk_columns[] = $column;
                } elseif ($row[$column] == 0 && isset($row['tanggal'])) {
                    $bulan = date('n', strtotime($row['tanggal']));
                    $risk_columns[] = "$bulan:" . substr($column, strpos($column, '.') + 1);
                }
            }
        }
        return $risk_columns;
    }

    public function getTotalObservasi()
    {
        $this->db->select('tanggal, 
            COUNT(*) as total_observasi,
            SUM(`1.1` = "1" OR `1.2` = "1" OR `1.3` = "1" OR `1.4` = "1" OR `1.5` = "1" OR 
                `2.1` = "1" OR `2.2` = "1" OR `2.3` = "1" OR `2.4` = "1" OR 
                `3.1` = "1" OR `3.2` = "1" OR 
                `4.1` = "1" OR `4.2` = "1" OR `4.3` = "1" OR `4.4` = "1" OR `4.5` = "1" OR `4.7` = "1" OR 
                `5.1` = "1" OR `5.2` = "1" OR `5.3` = "1" OR 
                `6.1` = "1" OR `6.2` = "1" OR `6.3` = "1" OR `6.4` = "1" OR 
                `6.5` = "1" OR `6.6` = "1" OR `6.7` = "1" OR `6.8` = "1" OR `6.9` = "1" OR `6.10` = "1" OR 
                `7.1` = "1" OR `7.2` = "1" OR `7.3` = "1" OR 
                `8.1` = "1" OR `8.2` = "1" OR `8.3` = "1" OR `8.4` = "1" OR `8.5` = "1" OR `8.6` = "1" OR `8.7` = "1" OR `8.8` = "1" OR `8.9` = "1" OR 
                `9.1` = "1" OR `9.2` = "1" OR `9.3` = "1" OR `9.4` = "1" OR `9.5` = "1" OR `9.6` = "1" OR `9.7` = "1" OR `9.8` = "1" OR `9.9` = "1" OR 
                `10.1` = "1" OR `10.2` = "1" OR `10.3` = "1" OR `10.4` = "1" OR 
                `11.0` = "1") AS selamat,
            SUM(`1.1` = "0" OR `1.2` = "0" OR `1.3` = "0" OR `1.4` = "0" OR `1.5` = "0" OR 
                `2.1` = "0" OR `2.2` = "0" OR `2.3` = "0" OR `2.4` = "0" OR 
                `3.1` = "0" OR `3.2` = "0" OR 
                `4.1` = "0" OR `4.2` = "0" OR `4.3` = "0" OR `4.4` = "0" OR `4.5` = "0" OR `4.7` = "0" OR 
                `5.1` = "0" OR `5.2` = "0" OR `5.3` = "0" OR 
                `6.1` = "0" OR `6.2` = "0" OR `6.3` = "0" OR `6.4` = "0" OR 
                `6.5` = "0" OR `6.6` = "0" OR `6.7` = "0" OR `6.8` = "0" OR `6.9` = "0" OR `6.10` = "0" OR 
                `7.1` = "0" OR `7.2` = "0" OR `7.3` = "0" OR 
                `8.1` = "0" OR `8.2` = "0" OR `8.3` = "0" OR `8.4` = "0" OR `8.5` = "0" OR `8.6` = "0" OR `8.7` = "0" OR `8.8` = "0" OR `8.9` = "0" OR 
                `9.1` = "0" OR `9.2` = "0" OR `9.3` = "0" OR `9.4` = "0" OR `9.5` = "0" OR `9.6` = "0" OR `9.7` = "0" OR `9.8` = "0" OR `9.9` = "0" OR 
                `10.1` = "0" OR `10.2` = "0" OR `10.3` = "0" OR `10.4` = "0" OR 
                `11.0` = "0") AS beresiko');
        $this->db->from($this->table);
        $this->db->group_by('tanggal');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getOpsSummary()
    {
        $query = $this->db->query("
        SELECT 
            DATE_FORMAT(tanggal, '%M') AS bulan,
            COUNT(id) AS total_observasi,
            SUM(IF(
                (`1.1` = 1 AND `1.2` = 1 AND `1.3` = 1 AND `1.4` = 1 AND `1.5` = 1 AND 
                 `2.1` = 1 AND `2.2` = 1 AND `2.3` = 1 AND `2.4` = 1 AND 
                 `3.1` = 1 AND `3.2` = 1 AND 
                 `4.1` = 1 AND `4.2` = 1 AND `4.3` = 1 AND `4.4` = 1 AND `4.5` = 1 AND `4.7` = 1 AND 
                 `5.1` = 1 AND `5.2` = 1 AND `5.3` = 1 AND 
                 `6.1` = 1 AND `6.2` = 1 AND `6.3` = 1 AND `6.4` = 1 AND `6.5` = 1 AND 
                 `6.6` = 1 AND `6.7` = 1 AND `6.8` = 1 AND `6.9` = 1 AND `6.10` = 1 AND 
                 `7.1` = 1 AND `7.2` = 1 AND `7.3` = 1 AND 
                 `8.1` = 1 AND `8.2` = 1 AND `8.3` = 1 AND `8.4` = 1 AND `8.5` = 1 AND 
                 `8.6` = 1 AND `8.7` = 1 AND `8.8` = 1 AND `8.9` = 1 AND 
                 `9.1` = 1 AND `9.2` = 1 AND `9.3` = 1 AND `9.4` = 1 AND `9.5` = 1 AND 
                 `9.6` = 1 AND `9.7` = 1 AND `9.8` = 1 AND `9.9` = 1 AND 
                 `10.1` = 1 AND `10.2` = 1 AND `10.3` = 1 AND `10.4` = 1 AND 
                 `11.0` = 1
            ), 1, 0)) AS selamat,
            SUM(IF(
                (`1.1` != 1 OR `1.2` != 1 OR `1.3` != 1 OR `1.4` != 1 OR `1.5` != 1 OR 
                 `2.1` != 1 OR `2.2` != 1 OR `2.3` != 1 OR `2.4` != 1 OR 
                 `3.1` != 1 OR `3.2` != 1 OR 
                 `4.1` != 1 OR `4.2` != 1 OR `4.3` != 1 OR `4.4` != 1 OR `4.5` != 1 OR `4.7` != 1 OR 
                 `5.1` != 1 OR `5.2` != 1 OR `5.3` != 1 OR 
                 `6.1` != 1 OR `6.2` != 1 OR `6.3` != 1 OR `6.4` != 1 OR `6.5` != 1 OR 
                 `6.6` != 1 OR `6.7` != 1 OR `6.8` != 1 OR `6.9` != 1 OR `6.10` != 1 OR 
                 `7.1` != 1 OR `7.2` != 1 OR `7.3` != 1 OR 
                 `8.1` != 1 OR `8.2` != 1 OR `8.3` != 1 OR `8.4` != 1 OR `8.5` != 1 OR 
                 `8.6` != 1 OR `8.7` != 1 OR `8.8` != 1 OR `8.9` != 1 OR 
                 `9.1` != 1 OR `9.2` != 1 OR `9.3` != 1 OR `9.4` != 1 OR `9.5` != 1 OR 
                 `9.6` != 1 OR `9.7` != 1 OR `9.8` != 1 OR `9.9` != 1 OR 
                 `10.1` != 1 OR `10.2` != 1 OR `10.3` != 1 OR `10.4` != 1 OR 
                 `11.0` != 1
            ), 1, 0)) AS beresiko
        FROM 
            $this->table
        GROUP BY 
            MONTH(tanggal)
    ");
    return $query->result_array();
    }
    
    public function getDashboard()
    {
        $query = $this->db->query("
        SELECT 
            COUNT(id) AS total_observasi,
            SUM(IF(
                (`1.1` = 1 AND `1.2` = 1 AND `1.3` = 1 AND `1.4` = 1 AND `1.5` = 1 AND 
                 `2.1` = 1 AND `2.2` = 1 AND `2.3` = 1 AND `2.4` = 1 AND 
                 `3.1` = 1 AND `3.2` = 1 AND 
                 `4.1` = 1 AND `4.2` = 1 AND `4.3` = 1 AND `4.4` = 1 AND `4.5` = 1 AND `4.7` = 1 AND 
                 `5.1` = 1 AND `5.2` = 1 AND `5.3` = 1 AND 
                 `6.1` = 1 AND `6.2` = 1 AND `6.3` = 1 AND `6.4` = 1 AND `6.5` = 1 AND 
                 `6.6` = 1 AND `6.7` = 1 AND `6.8` = 1 AND `6.9` = 1 AND `6.10` = 1 AND 
                 `7.1` = 1 AND `7.2` = 1 AND `7.3` = 1 AND 
                 `8.1` = 1 AND `8.2` = 1 AND `8.3` = 1 AND `8.4` = 1 AND `8.5` = 1 AND 
                 `8.6` = 1 AND `8.7` = 1 AND `8.8` = 1 AND `8.9` = 1 AND 
                 `9.1` = 1 AND `9.2` = 1 AND `9.3` = 1 AND `9.4` = 1 AND `9.5` = 1 AND 
                 `9.6` = 1 AND `9.7` = 1 AND `9.8` = 1 AND `9.9` = 1 AND 
                 `10.1` = 1 AND `10.2` = 1 AND `10.3` = 1 AND `10.4` = 1 AND 
                 `11.0` = 1
            ), 1, 0)) AS selamat,
            SUM(IF(
                (`1.1` != 1 OR `1.2` != 1 OR `1.3` != 1 OR `1.4` != 1 OR `1.5` != 1 OR 
                 `2.1` != 1 OR `2.2` != 1 OR `2.3` != 1 OR `2.4` != 1 OR 
                 `3.1` != 1 OR `3.2` != 1 OR 
                 `4.1` != 1 OR `4.2` != 1 OR `4.3` != 1 OR `4.4` != 1 OR `4.5` != 1 OR `4.7` != 1 OR 
                 `5.1` != 1 OR `5.2` != 1 OR `5.3` != 1 OR 
                 `6.1` != 1 OR `6.2` != 1 OR `6.3` != 1 OR `6.4` != 1 OR `6.5` != 1 OR 
                 `6.6` != 1 OR `6.7` != 1 OR `6.8` != 1 OR `6.9` != 1 OR `6.10` != 1 OR 
                 `7.1` != 1 OR `7.2` != 1 OR `7.3` != 1 OR 
                 `8.1` != 1 OR `8.2` != 1 OR `8.3` != 1 OR `8.4` != 1 OR `8.5` != 1 OR 
                 `8.6` != 1 OR `8.7` != 1 OR `8.8` != 1 OR `8.9` != 1 OR 
                 `9.1` != 1 OR `9.2` != 1 OR `9.3` != 1 OR `9.4` != 1 OR `9.5` != 1 OR 
                 `9.6` != 1 OR `9.7` != 1 OR `9.8` != 1 OR `9.9` != 1 OR 
                 `10.1` != 1 OR `10.2` != 1 OR `10.3` != 1 OR `10.4` != 1 OR 
                 `11.0` != 1
            ), 1, 0)) AS beresiko
        FROM 
            $this->table
    ");
    return $query->result_array();
    }
    // Model Bbs_model.php

public function getOpsSummaryByYear($year) {
    $query = $this->db->query("
        SELECT 
            DATE_FORMAT(tanggal, '%M') AS bulan,
            COUNT(id) AS total_observasi,
            SUM(IF(
                (`1.1` = 1 AND `1.2` = 1 AND `1.3` = 1 AND `1.4` = 1 AND `1.5` = 1 AND 
                 `2.1` = 1 AND `2.2` = 1 AND `2.3` = 1 AND `2.4` = 1 AND 
                 `3.1` = 1 AND `3.2` = 1 AND 
                 `4.1` = 1 AND `4.2` = 1 AND `4.3` = 1 AND `4.4` = 1 AND `4.5` = 1 AND `4.7` = 1 AND 
                 `5.1` = 1 AND `5.2` = 1 AND `5.3` = 1 AND 
                 `6.1` = 1 AND `6.2` = 1 AND `6.3` = 1 AND `6.4` = 1 AND `6.5` = 1 AND 
                 `6.6` = 1 AND `6.7` = 1 AND `6.8` = 1 AND `6.9` = 1 AND `6.10` = 1 AND 
                 `7.1` = 1 AND `7.2` = 1 AND `7.3` = 1 AND 
                 `8.1` = 1 AND `8.2` = 1 AND `8.3` = 1 AND `8.4` = 1 AND `8.5` = 1 AND 
                 `8.6` = 1 AND `8.7` = 1 AND `8.8` = 1 AND `8.9` = 1 AND 
                 `9.1` = 1 AND `9.2` = 1 AND `9.3` = 1 AND `9.4` = 1 AND `9.5` = 1 AND 
                 `9.6` = 1 AND `9.7` = 1 AND `9.8` = 1 AND `9.9` = 1 AND 
                 `10.1` = 1 AND `10.2` = 1 AND `10.3` = 1 AND `10.4` = 1 AND 
                 `11.0` = 1
            ), 1, 0)) AS selamat,
            SUM(IF(
                (`1.1` != 1 OR `1.2` != 1 OR `1.3` != 1 OR `1.4` != 1 OR `1.5` != 1 OR 
                 `2.1` != 1 OR `2.2` != 1 OR `2.3` != 1 OR `2.4` != 1 OR 
                 `3.1` != 1 OR `3.2` != 1 OR 
                 `4.1` != 1 OR `4.2` != 1 OR `4.3` != 1 OR `4.4` != 1 OR `4.5` != 1 OR `4.7` != 1 OR 
                 `5.1` != 1 OR `5.2` != 1 OR `5.3` != 1 OR 
                 `6.1` != 1 OR `6.2` != 1 OR `6.3` != 1 OR `6.4` != 1 OR `6.5` != 1 OR 
                 `6.6` != 1 OR `6.7` != 1 OR `6.8` != 1 OR `6.9` != 1 OR `6.10` != 1 OR 
                 `7.1` != 1 OR `7.2` != 1 OR `7.3` != 1 OR 
                 `8.1` != 1 OR `8.2` != 1 OR `8.3` != 1 OR `8.4` != 1 OR `8.5` != 1 OR 
                 `8.6` != 1 OR `8.7` != 1 OR `8.8` != 1 OR `8.9` != 1 OR 
                 `9.1` != 1 OR `9.2` != 1 OR `9.3` != 1 OR `9.4` != 1 OR `9.5` != 1 OR 
                 `9.6` != 1 OR `9.7` != 1 OR `9.8` != 1 OR `9.9` != 1 OR 
                 `10.1` != 1 OR `10.2` != 1 OR `10.3` != 1 OR `10.4` != 1 OR 
                 `11.0` != 1
            ), 1, 0)) AS beresiko
        FROM 
            $this->table
        WHERE 
            YEAR(tanggal) = $year
        GROUP BY 
            MONTH(tanggal)
    ");
    return $query->result_array();
}

    public function getYears() {
        $query = $this->db->query("SELECT DISTINCT YEAR(tanggal) AS tahun FROM observasi ORDER BY tahun DESC");
        return $query->result_array();
    }

   // Mendapatkan data observasi berdasarkan tahun
   public function getObservasiByTahun($tahun) {
    $this->db->select('*');
    $this->db->from('observasi');
    $this->db->where('YEAR(tanggal)', $tahun);
    $query = $this->db->get();
    return $query->result_array();
}
    public function filtertanggal($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('karyawan', 'karyawan.id_karyawan = observasi.id_karyawan');
        $this->db->where('tanggal >=', $tgl_awal);
        $this->db->where('tanggal <=', $tgl_akhir);
        return $this->db->get()->result_array();
    }

    public function get_observasi_data_excel($tgl_awal = null, $tgl_akhir = null)
    {
        $this->db->select('observasi.*, karyawan.nama_karyawan');
        $this->db->from($this->table);
        $this->db->join('karyawan', 'observasi.id_karyawan = karyawan.id_karyawan');
        
        // Apply date filtering if the dates are provided
        if (!empty($tgl_awal) && !empty($tgl_akhir)) {
            $this->db->where('tanggal >=', $tgl_awal);
            $this->db->where('tanggal <=', $tgl_akhir);
        }

        $this->db->order_by('tanggal', 'ASC');
        
        $query = $this->db->get();
        $observasi_data = $query->result_array();

        // Include risk columns
        foreach ($observasi_data as &$observasi) {
            $observasi['risk_columns'] = $this->getRiskColumnsForRow3($observasi);
        }

        return $observasi_data;
    }
    
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
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
    public function detailobservasi($id)
    {
        $this->db->select('observasi.*, karyawan.nama_karyawan');
        $this->db->from($this->table);
        $this->db->join('karyawan', 'karyawan.id_karyawan = observasi.id_karyawan');
        $query = $this->db->get();
        return $query->row();

    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function getexcel()
    {
        $this->db->select('observasi.*, karyawan.nama_karyawan');
        $this->db->from($this->table);
        $this->db->join('karyawan', 'karyawan.id_karyawan = observasi.id_karyawan');
        $query = $this->db->get();
        return $query->result();
    }
    public function reportbbs($id)
    {
        $this->db->Select('observasi.*, karyawan.nama_karyawan as nama_karyawan');
        $this->db->from('observasi ');
        $this->db->join('karyawan ', 'karyawan.id_karyawan=observasi.id_karyawan');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getOpsSummaryByYearExcel($year) {
        $query = $this->db->query("
            SELECT 
                DATE_FORMAT(tanggal, '%M') AS bulan,
                COUNT(id) AS total_observasi,
                SUM(IF(
                    (`1.1` = 1 AND `1.2` = 1 AND `1.3` = 1 AND `1.4` = 1 AND `1.5` = 1 AND 
                     `2.1` = 1 AND `2.2` = 1 AND `2.3` = 1 AND `2.4` = 1 AND 
                     `3.1` = 1 AND `3.2` = 1 AND 
                     `4.1` = 1 AND `4.2` = 1 AND `4.3` = 1 AND `4.4` = 1 AND `4.5` = 1 AND `4.7` = 1 AND 
                     `5.1` = 1 AND `5.2` = 1 AND `5.3` = 1 AND 
                     `6.1` = 1 AND `6.2` = 1 AND `6.3` = 1 AND `6.4` = 1 AND `6.5` = 1 AND 
                     `6.6` = 1 AND `6.7` = 1 AND `6.8` = 1 AND `6.9` = 1 AND `6.10` = 1 AND 
                     `7.1` = 1 AND `7.2` = 1 AND `7.3` = 1 AND 
                     `8.1` = 1 AND `8.2` = 1 AND `8.3` = 1 AND `8.4` = 1 AND `8.5` = 1 AND 
                     `8.6` = 1 AND `8.7` = 1 AND `8.8` = 1 AND `8.9` = 1 AND 
                     `9.1` = 1 AND `9.2` = 1 AND `9.3` = 1 AND `9.4` = 1 AND `9.5` = 1 AND 
                     `9.6` = 1 AND `9.7` = 1 AND `9.8` = 1 AND `9.9` = 1 AND 
                     `10.1` = 1 AND `10.2` = 1 AND `10.3` = 1 AND `10.4` = 1 AND 
                     `11.0` = 1
                ), 1, 0)) AS selamat,
                SUM(IF(
                    (`1.1` != 1 OR `1.2` != 1 OR `1.3` != 1 OR `1.4` != 1 OR `1.5` != 1 OR 
                     `2.1` != 1 OR `2.2` != 1 OR `2.3` != 1 OR `2.4` != 1 OR 
                     `3.1` != 1 OR `3.2` != 1 OR 
                     `4.1` != 1 OR `4.2` != 1 OR `4.3` != 1 OR `4.4` != 1 OR `4.5` != 1 OR `4.7` != 1 OR 
                     `5.1` != 1 OR `5.2` != 1 OR `5.3` != 1 OR 
                     `6.1` != 1 OR `6.2` != 1 OR `6.3` != 1 OR `6.4` != 1 OR `6.5` != 1 OR 
                     `6.6` != 1 OR `6.7` != 1 OR `6.8` != 1 OR `6.9` != 1 OR `6.10` != 1 OR 
                     `7.1` != 1 OR `7.2` != 1 OR `7.3` != 1 OR 
                     `8.1` != 1 OR `8.2` != 1 OR `8.3` != 1 OR `8.4` != 1 OR `8.5` != 1 OR 
                     `8.6` != 1 OR `8.7` != 1 OR `8.8` != 1 OR `8.9` != 1 OR 
                     `9.1` != 1 OR `9.2` != 1 OR `9.3` != 1 OR `9.4` != 1 OR `9.5` != 1 OR 
                     `9.6` != 1 OR `9.7` != 1 OR `9.8` != 1 OR `9.9` != 1 OR 
                     `10.1` != 1 OR `10.2` != 1 OR `10.3` != 1 OR `10.4` != 1 OR 
                     `11.0` != 1
                ), 1, 0)) AS beresiko
            FROM 
                observation_bulanan
            WHERE 
                YEAR(tanggal) = ?
            GROUP BY 
                bulan
            ORDER BY 
                MONTH(tanggal) ASC
        ", [$year]);
    
        if (!$query) {
            $error = $this->db->error();
            log_message('error', 'Error in SQL query: ' . $error['message']);
            return []; // Return an empty array or handle the error as needed
        }
    
        return $query->result_array();
    }
    
}
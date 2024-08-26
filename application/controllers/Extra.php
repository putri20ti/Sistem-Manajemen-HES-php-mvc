<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Dompdf\Dompdf as Dompdf;

class Extra extends CI_Controller
{
    public function __construct()
    {

        parent::__construct(); 
        $this->load->model('Bbs_model');
        $this->load->model('Insiden_model');
        $this->load->helper(array('url','download'));	
    }

    public function export(){
      $spreadsheet = new Spreadsheet();
      $sheet = $spreadsheet->getActiveSheet();
  
      $style_col = [
        'font' => ['bold' => true], 
        'alignment' => [
          'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, 
          'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER 
        ],
        'borders' => [
          'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], 
          'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  
          'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], 
          'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] 
        ]
      ];
  
      $style_row = [
        'alignment' => [
          'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER 
        ],
        'borders' => [
          'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], 
          'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  
          'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], 
          'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] 
        ]
      ];

      $tgl_awal = $this->session->userdata('tgl_awal');
      $tgl_akhir = $this->session->userdata('tgl_akhir');
      $observasi = $this->Bbs_model->get_observasi_data_excel($tgl_awal, $tgl_akhir);
  
      $sheet->setCellValue('A1', "Database Activity (" . indo_date($tgl_awal) . " - " . indo_date($tgl_akhir) . ")");
      $sheet->mergeCells('A1:K1');
      $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(16);
      $sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
    
      $sheet->setCellValue('A3', "No");
      $sheet->setCellValue('B3', "Tanggal"); 
      $sheet->setCellValue('C3', "Nama Observasi"); 
      $sheet->setCellValue('D3', "Lokasi"); 
      $sheet->setCellValue('E3', "Jumlah Observasi");
      $sheet->setCellValue('F3', "Lingkup Pekerjaan"); 
      $sheet->setCellValue('G3', "Kode Perilaku Beresiko"); 
      $sheet->setCellValue('H3', "Komentar"); 
      $sheet->setCellValue('I3', "Setuju Perilaku Terjadi?"); 
      $sheet->setCellValue('J3', "Setuju Perilaku Beresiko?"); 
      $sheet->setCellValue('K3', "Perilaku Selamat"); 
      $sheet->setCellValue('L3', "Tindak Lanjut SC");

      $sheet->getStyle('A3')->applyFromArray($style_col);
      $sheet->getStyle('B3')->applyFromArray($style_col);
      $sheet->getStyle('C3')->applyFromArray($style_col);
      $sheet->getStyle('D3')->applyFromArray($style_col);
      $sheet->getStyle('E3')->applyFromArray($style_col);
      $sheet->getStyle('F3')->applyFromArray($style_col);
      $sheet->getStyle('G3')->applyFromArray($style_col);
      $sheet->getStyle('H3')->applyFromArray($style_col);
      $sheet->getStyle('I3')->applyFromArray($style_col);
      $sheet->getStyle('J3')->applyFromArray($style_col);
      $sheet->getStyle('K3')->applyFromArray($style_col);
      $sheet->getStyle('L3')->applyFromArray($style_col);
      
      $no = 1; // Initialize numbering counter
      $numrow = 4; // Start row for data

      foreach($observasi as $data) {
          $tanggal = is_array($data['tanggal']) ? implode(', ', $data['tanggal']) : $data['tanggal'];
          $nama_karyawan = is_array($data['nama_karyawan']) ? implode(', ', $data['nama_karyawan']) : $data['nama_karyawan'];
          $lokasi_observasi = is_array($data['lokasi_observasi']) ? implode(', ', $data['lokasi_observasi']) : $data['lokasi_observasi'];
          $jumlah_observasi = is_array($data['jumlah_observasi']) ? implode(', ', $data['jumlah_observasi']) : $data['jumlah_observasi'];
          $lingkup_pekerjaan = is_array($data['lingkup_pekerjaan']) ? implode(', ', $data['lingkup_pekerjaan']) : $data['lingkup_pekerjaan'];
          $risk_columns = is_array($data['risk_columns']) ? implode("\n", $data['risk_columns']) : $data['risk_columns'];
          $komentar = is_array($data['komentar']) ? implode(', ', $data['komentar']) : $data['komentar'];
          $setuju_perilaku_terjadi = $data['setuju_perilaku_terjadi'] ? 'Ya' : 'Tidak';
          $setuju_perilaku_beresiko = $data['setuju_perilaku_beresiko'] ? 'Ya' : 'Tidak';
          $bentuk_perilaku_selamat = is_array($data['bentuk_perilaku_selamat']) ? implode(', ', $data['bentuk_perilaku_selamat']) : $data['bentuk_perilaku_selamat'];
          $tindak_lanjut = $data['tindak_lanjut'] ? 'Ya' : 'Tidak';

          $sheet->setCellValue('A'.$numrow, $no); // Set numbering column value
          $sheet->setCellValue('B'.$numrow, indo_date($tanggal));
          $sheet->setCellValue('C'.$numrow, $nama_karyawan);
          $sheet->setCellValue('D'.$numrow, $lokasi_observasi);
          $sheet->setCellValue('E'.$numrow, $jumlah_observasi);
          $sheet->setCellValue('F'.$numrow, $lingkup_pekerjaan);
          $sheet->setCellValue('G'.$numrow, $risk_columns);
          $sheet->setCellValue('H'.$numrow, $komentar);
          $sheet->setCellValue('I'.$numrow, $setuju_perilaku_terjadi);
          $sheet->setCellValue('J'.$numrow, $setuju_perilaku_beresiko);
          $sheet->setCellValue('K'.$numrow, $bentuk_perilaku_selamat);
          $sheet->setCellValue('L'.$numrow, $tindak_lanjut);

          // Enable text wrapping for the risk_columns cell
          $sheet->getStyle('G'.$numrow)->getAlignment()->setWrapText(true);

          $sheet->getStyle('A'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('B'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('C'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('D'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('E'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('F'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('G'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('H'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('I'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('J'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('K'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('L'.$numrow)->applyFromArray($style_row);
          
          $no++; // Increment numbering counter
          $numrow++; // Move to next row
      }

      // Set column widths and other formatting
      $sheet->getColumnDimension('A')->setWidth(4); // Adjust width for numbering column
      $sheet->getColumnDimension('B')->setWidth(15); 
      $sheet->getColumnDimension('C')->setWidth(25); 
      $sheet->getColumnDimension('D')->setWidth(20); 
      $sheet->getColumnDimension('E')->setWidth(5); 
      $sheet->getColumnDimension('F')->setWidth(10); 
      $sheet->getColumnDimension('G')->setWidth(40); 
      $sheet->getColumnDimension('H')->setWidth(20); 
      $sheet->getColumnDimension('I')->setWidth(8); 
      $sheet->getColumnDimension('J')->setWidth(8); 
      $sheet->getColumnDimension('K')->setWidth(8); 
      $sheet->getColumnDimension('L')->setWidth(8); 
  
      $sheet->getDefaultRowDimension()->setRowHeight(-1);
  
      $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
      $sheet->setTitle("Database Activity");
  
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment; filename="Database Activity.xlsx"'); 
      header('Cache-Control: max-age=0');
      $writer = new Xlsx($spreadsheet);
      $writer->save('php://output');
    }  

    public function exportops() {
        // Get the selected year from the session or default to the current year    
        // Load the PhpSpreadsheet library
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Fetch observation data for the selected year
        $currentYear = $this->input->get('tahun') ?? date('Y');
        
        $observasi = $this->Bbs_model->getOpsSummaryByYear($currentYear);
    
        // Set up the spreadsheet headers and styles
        $style_col = [
            'font' => ['bold' => true],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
            ],
            'borders' => [
                'top' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                'right' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                'bottom' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                'left' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN]
            ]
        ];
    
        $style_row = [
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
            ],
            'borders' => [
                'top' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                'right' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                'bottom' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                'left' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN]
            ]
        ];
    
        // Title and header configuration
        $sheet->setCellValue('A1', "REKAPITULASI DATA OBSERVASI PERILAKU BERESIKO OPERATION MAINTENANCE INDOOR & OUTDOOR Tahun $currentYear");
        $sheet->mergeCells('A1:E1');
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(16);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
    
        // Column headers
        $sheet->setCellValue('A3', "No");
        $sheet->setCellValue('B3', "Bulan");
        $sheet->setCellValue('C3', "Total Observasi");
        $sheet->setCellValue('D3', "Perilaku Selamat");
        $sheet->setCellValue('E3', "Perilaku Beresiko");
    
        // Apply styles to column headers
        foreach (range('A', 'E') as $column) {
            $sheet->getStyle($column . '3')->applyFromArray($style_col);
        }
    
        // Fill data into the spreadsheet
        $no = 1;
        $numrow = 4;
        foreach ($observasi as $data) {
            $sheet->setCellValue('A' . $numrow, $no);
            $sheet->setCellValue('B' . $numrow, $data['bulan']);
            $sheet->setCellValue('C' . $numrow, $data['total_observasi']);
            $sheet->setCellValue('D' . $numrow, $data['selamat']);
            $sheet->setCellValue('E' . $numrow, $data['beresiko']);
    
            // Apply styles to data rows
            foreach (range('A', 'E') as $column) {
                $sheet->getStyle($column . $numrow)->applyFromArray($style_row);
            }
    
            $no++;
            $numrow++;
        }
    
        // Set column widths and row heights
        $sheet->getColumnDimension('A')->setWidth(5);
        $sheet->getColumnDimension('B')->setWidth(15);
        $sheet->getColumnDimension('C')->setWidth(15);
        $sheet->getColumnDimension('D')->setWidth(15);
        $sheet->getColumnDimension('E')->setWidth(15);
        $sheet->getDefaultRowDimension()->setRowHeight(-1);
    
        // Set page orientation and sheet title
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $sheet->setTitle("OPS-Summary");
    
        // Output the Excel file
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Rekapitulasi_Data_Observasi_' . $currentYear . '.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $writer->save('php://output');
    }
    
    public function exportrisk()
{
    $currentYear = $this->input->get('tahun'); // Get the selected year from the request
    if (!$currentYear) {
        $currentYear = date('Y'); // Default to the current year if no year is selected
    }

    $data = $this->Bbs_model->get_observasi_data_by_year($currentYear);
    $observasi_data = $data['observasi_data'];
    $risk_columns = $data['risk_columns'];
    $column_descriptions = $this->Bbs_model->getColumnDescriptions();

    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Define styles for columns and rows
    $style_col = [
        'font' => ['bold' => true],
        'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
        ],
        'borders' => [
            'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
            'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
            'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
            'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
        ]
    ];

    $style_row = [
        'alignment' => [
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
        ],
        'borders' => [
            'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
            'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
            'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
            'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
        ]
    ];

    // Set title and headers
    $sheet->setCellValue('A1', "REKAPITULASI DATA OBSERVASI PERILAKU BERESIKO OPERATION MAINTENANCE INDOOR & OUTDOOR Tahun $currentYear");
    $sheet->mergeCells('A1:P1'); // Merge cells A1 to P1 for title
    $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(16);
    $sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

    $sheet->setCellValue('A3', "No");
    $sheet->setCellValue('B3', "Kode");
    $sheet->setCellValue('C3', "Deskripsi Perilaku");
    
    // Set month names as headers
    setlocale(LC_TIME, 'id_ID.utf8', 'Indonesian_indonesia.utf8', 'Indonesian_indonesia');
    $colIndex = 'D';
    foreach (range(1, 12) as $bulan) {
        $nama_bulan = strftime('%B', mktime(0, 0, 0, $bulan, 1));
        $sheet->setCellValue($colIndex . '3', $nama_bulan);
        $sheet->getStyle($colIndex . '3')->applyFromArray($style_col);
        $colIndex++;
    }
    
    $sheet->setCellValue($colIndex . '3', "Jumlah");
    $sheet->getStyle($colIndex . '3')->applyFromArray($style_col);

    // Populate data rows
    $no = 1;
    $numrow = 4;
    foreach ($risk_columns as $risk_code) {
        $jumlah_per_bulan = array_fill(1, 12, 0);

        foreach ($observasi_data as $observasi) {
            if (isset($observasi['risk_columns']) && in_array($risk_code, $observasi['risk_columns'])) {
                $bulan = (int) date('n', strtotime($observasi['tanggal']));
                $jumlah_per_bulan[$bulan]++;
            }
        }

        $sheet->setCellValue('A' . $numrow, $no++);
        $sheet->setCellValue('B' . $numrow, $risk_code);
        $sheet->setCellValue('C' . $numrow, $column_descriptions[$risk_code]);

        $colIndex = 'D';
        foreach (range(1, 12) as $bulan) {
            $sheet->setCellValue($colIndex . $numrow, $jumlah_per_bulan[$bulan] > 0 ? $jumlah_per_bulan[$bulan] : '-');
            $sheet->getStyle($colIndex . $numrow)->applyFromArray($style_row);
            $colIndex++;
        }
        
        $sheet->setCellValue($colIndex . $numrow, array_sum($jumlah_per_bulan) > 0 ? array_sum($jumlah_per_bulan) : '-');
        $sheet->getStyle($colIndex . $numrow)->applyFromArray($style_row);

        $numrow++;
    }

    // Auto size columns
    foreach (range('A', $colIndex) as $col) {
        $sheet->getColumnDimension($col)->setAutoSize(true);
    }

    // Set border for the entire table from A3 to P(numrow-1)
    $endCol = $colIndex;
    $endRow = $numrow - 1;
    $range = "A3:{$endCol}{$endRow}";
    $sheet->getStyle($range)->applyFromArray([
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            ],
        ],
    ]);

    // Set page orientation and title
    $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
    $sheet->setTitle("OPS-Summary");

    // Set headers for Excel file download
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Database_Activity_' . $currentYear . '.xlsx"');
    header('Cache-Control: max-age=0');

    // Save spreadsheet to output
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $writer->save('php://output');
}

    
  public function report($id)
  {
      $dompdf = new Dompdf(array('enable_remote' => true));
      $this->data['observasi'] =  $this->Bbs_model->reportbbs($id);
      $dompdf->setPaper('A4', 'Potrait');
      $html = $this->load->view('bbs/reportpdf', $this->data, true);
      $dompdf->load_html($html);
      $dompdf->render();
      ob_end_clean();
      $dompdf->stream('Report', array("Attachment" => false));
  }
  
  public function reportInsiden()
  {
      $dompdf = new Dompdf(array('enable_remote' => true));

      $data['insiden_kerja'] = $this->Insiden_model->get(); 
      $dompdf->setPaper('A4', 'Portrait');
      $html = $this->load->view('insiden/pdfInsiden', $data, true);
      $dompdf->load_html($html);
      $dompdf->render();
      ob_end_clean();
      $dompdf->stream('Report', array("Attachment" => false));
  }

}
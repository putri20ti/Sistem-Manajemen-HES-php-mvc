<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="header-title">
                            <h4 class="card-title">Rekapitulasi Data Observasi Perilaku Beresiko</h4>
                        </div>
                        <div>
                            <select id="tahunContent" class="form-control form-control-sm">
                                <?php foreach ($tahun_list as $tahun): ?>
                                <option value="<?php echo $tahun['tahun']; ?>"
                                    <?php echo ($tahun['tahun'] == $currentYear) ? 'selected' : ''; ?>>
                                    <?php echo $tahun['tahun']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('extra/exportrisk?tahun=') . $currentYear ?>" class="btn btn-success"><i
                                class="fas fa-file-excel mr-1"></i>Excel</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="light">
                                        <th>No.</th>
                                        <th>Kode</th>
                                        <th>Deskripsi Perilaku</th>
                                        <?php 
                                       // Set locale untuk menggunakan bahasa Indonesia
                                       setlocale(LC_TIME, 'id_ID.utf8', 'Indonesian_indonesia.utf8', 'Indonesian_indonesia');

                                       foreach (range(1, 12) as $bulan) : 
                                          // Gunakan strftime untuk mengambil nama bulan dalam bahasa Indonesia
                                          $nama_bulan = strftime('%B', mktime(0, 0, 0, $bulan, 1));
                                       ?>
                                        <th><?= $nama_bulan; ?></th>
                                        <?php endforeach; ?>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($risk_columns as $risk_code) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $risk_code; ?></td>
                                        <td><?= $column_descriptions[$risk_code]; ?></td>
                                        <?php
                                            // Inisialisasi array jumlah per bulan dengan nilai 0
                                            $jumlah_per_bulan = array_fill(1, 12, 0);

                                            // Menghitung jumlah perilaku beresiko per bulan
                                            foreach ($observasi_data as $observasi) {
                                                $bulan = (int) date('n', strtotime($observasi['tanggal']));
                                                
                                                // Inisialisasi array jumlah per bulan untuk observasi ini dengan nilai 0
                                                $jumlah_per_bulan_observasi = array_fill(1, 12, 0);

                                                foreach ($observasi['risk_columns'] as $risk_column) {
                                                    // Ambil nomor bulan dari risk column
                                                    $risk_code_bulan = (int) substr($risk_column, 0, strpos($risk_column, '.'));
                                                    
                                                    if ($risk_code === $risk_column) {
                                                        $jumlah_per_bulan_observasi[$bulan]++;
                                                    }
                                                }

                                                // Menambahkan jumlah per bulan observasi ke total jumlah per bulan
                                                foreach (range(1, 12) as $bulan) {
                                                    $jumlah_per_bulan[$bulan] += $jumlah_per_bulan_observasi[$bulan];
                                                }
                                            }
                                            ?>
                                        <?php foreach (range(1, 12) as $bulan) : ?>
                                        <td><?= $jumlah_per_bulan[$bulan] > 0 ? $jumlah_per_bulan[$bulan] : '-'; ?>
                                        </td>
                                        <?php endforeach; ?>
                                        <td><?= array_sum($jumlah_per_bulan) > 0 ? array_sum($jumlah_per_bulan) : '-'; ?>
                                        </td> <!-- Total jumlah perilaku -->

                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('tahunContent').addEventListener('change', function() {
    const selectedYear = this.value;
    window.location.href = `<?= base_url('bbs/index5'); ?>?tahun=${selectedYear}`;
});
</script>
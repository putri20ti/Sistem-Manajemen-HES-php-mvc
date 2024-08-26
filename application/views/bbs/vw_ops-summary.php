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
                        <a href="<?= base_url('extra/exportops?tahun=') . $currentYear ?>" class="btn btn-success"><i
                                class="fas fa-file-excel mr-1"></i>Excel</a>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                        <th>No</th>
                                        <th>Bulan</th>
                                        <th>Total Observasi</th>
                                        <th>Perilaku Selamat</th>
                                        <th>Perilaku Beresiko</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($observasi as $us) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $us['bulan']; ?></td>
                                        <td><?= $us['total_observasi']; ?></td>
                                        <td><?= $us['selamat']; ?></td>
                                        <td><?= $us['beresiko']; ?></td>
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
    window.location.href = `<?= base_url('bbs/index4'); ?>?tahun=${selectedYear}`;
});
</script>
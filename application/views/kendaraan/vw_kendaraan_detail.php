<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="mb-3">Detail Kendaraan</h4>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor Plat</th>
                                    <td><?= $kendaraan['no_plat']; ?></td>
                                </tr>
                                <tr>
                                    <th>Merk</th>
                                    <td><?= $kendaraan['merk']; ?></td>
                                </tr>
                                <tr>
                                    <th>Warna</th>
                                    <td><?= $kendaraan['warna']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tipe Kendaraan</th>
                                    <td><?= $kendaraan['tipe_kendaraan']; ?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td><?= $kendaraan['status']; ?></td>
                                </tr>
                                <tr>
                                    <th>Foto</th>
                                    <td><img src="<?= base_url('assets/img/') . $kendaraan['foto']; ?>" style="max-width: 300px; max-height: 300px;"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="<?= base_url('Kendaraan'); ?>" class="btn btn-primary">Kembali</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

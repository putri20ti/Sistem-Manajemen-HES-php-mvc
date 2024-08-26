<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Database Activity</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
                            data-target="#exampleModal">
                            Filter Data
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Filter Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-box">
                                            <form action="<?= base_url();?>bbs/filtertanggaldb" method="POST"
                                                enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="tgl_awal">Tanggal Awal</label>
                                                    <input type="date" class="form-control" name="tgl_awal"
                                                        id="tgl_awal" aria-describedby="berakhir">
                                                    <?= form_error('tgl_awal', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_akhir">Tanggal Berakhir</label>
                                                    <input type="date" class="form-control" name="tgl_akhir"
                                                        id="tgl_akhir" aria-describedby="berakhir">
                                                    <?= form_error('tgl_akhir', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?= $this->session->flashdata('message'); ?>
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                    <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Observer</th>
                                        <th>Lokasi</th>
                                        <th>Jumlah Observasi</th>
                                        <th>Lingkup Pekerjaan</th>
                                        <th>Kode Perilaku Beresiko</th>
                                        <th>Komentar</th>
                                        <th>Setuju Perilaku Terjadi?</th>
                                        <th>Setuju Perilaku Beresiko</th>
                                        <th>Perilaku Selamat</th>
                                        <th>Tindak Lanjut SC</th>
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($bbs as $i => $us) : ?>
                                    <tr>
                                    <td><?= $no++; ?></td>
                                        <td><?= indo_date($us['tanggal']); ?></td>
                                        <td><?= $us['nama_karyawan']; ?></td>
                                        <td><?= $us['lokasi_observasi']; ?></td>
                                        <td><?= $us['jumlah_observasi']; ?></td>
                                        <td><?= $us['lingkup_pekerjaan']; ?></td>
                                        <td>
                                            <a type="button" class="mt-2 badge badge-success" data-toggle="modal"
                                                data-target="#riskColumnsModal<?= $i; ?>">
                                                Lihat
                                            </a>
                                        </td>
                                        <!-- Modal untuk Risk Columns -->
                                        <div class="modal fade" id="riskColumnsModal<?= $i; ?>" tabindex="-1"
                                            role="dialog" aria-labelledby="riskColumnsModalLabel<?= $i; ?>"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="riskColumnsModalLabel<?= $i; ?>">
                                                            Risk Columns Detail</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <ul>
                                                            <?php foreach ($us['risk_columns'] as $column) : ?>
                                                            <li><?= htmlspecialchars($column); ?></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <td><?= $us['komentar']; ?></td>
                                        <td><?= $us['setuju_perilaku_terjadi'] == 1 ? 'Ya' : 'Tidak'; ?></td>
                                        <td><?= $us['setuju_perilaku_beresiko'] == 1 ? 'Ya' : 'Tidak'; ?></td>
                                        <td><?= $us['bentuk_perilaku_selamat']; ?></td>
                                        <td><?= $us['tindak_lanjut'] == 1 ? 'Ya' : 'Tidak'; ?></td>

                                        <!-- <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="btn btn-sm btn-icon btn-danger mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"
                                                    href="<?= base_url('Bbs/hapus/') . $us['id']; ?>"> <i
                                                        class="ri-delete-bin-line mr-0"></i></a>
                                            </div> -->
                                        </td>
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
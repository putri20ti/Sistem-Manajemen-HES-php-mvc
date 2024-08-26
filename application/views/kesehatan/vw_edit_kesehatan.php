<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Ubah Data Kesehatan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Kesehatan/update'); ?>" method="post" data-toggle="validator">
                            <input type="hidden" name="id_kesehatan" value="<?= $kesehatan['id_kesehatan']; ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Karyawan *</label>
                                        <input type="text" name="nama_karyawan"
                                            value="<?= $kesehatan['nama_karyawan']; ?>" class="form-control" required
                                            readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin *</label>
                                        <input type="text" name="jenis_kelamin"
                                            value="<?= $kesehatan['jenis_kelamin']; ?>" class="form-control" required
                                            readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Umur *</label>
                                        <input type="text" name="umur" value="<?= $kesehatan['umur']; ?>"
                                            placeholder="Ubah Umur" class="form-control" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Riwayat Penyakit *</label>
                                        <input type="text" name="riwayat_penyakit"
                                            value="<?= $kesehatan['riwayat_penyakit']; ?>" class="form-control"
                                            required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pernah Mengalami Kecelakaan? *</label>
                                        <select name="pernah_kecelakaan" class="selectpicker form-control"
                                            data-style="py-0">
                                            <option value="Pernah"
                                                <?= $kesehatan['pernah_kecelakaan'] == 'Pernah' ? 'selected' : ''; ?>>
                                                Pernah</option>
                                            <option value="Tidak Pernah"
                                                <?= $kesehatan['pernah_kecelakaan'] == 'Tidak Pernah' ? 'selected' : ''; ?>>
                                                Tidak Pernah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Catatan *</label>
                                        <input type="text" name="catatan" value="<?= $kesehatan['catatan']; ?>"
                                            class="form-control" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="<?= base_url('Kesehatan') ?>" class="btn btn-danger">Batal</a>
                                        <button type="submit" class="btn btn-primary mr-2">Ubah Data</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Tambah Data Kesehatan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Kesehatan/upload'); ?>" data-toggle="validator" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Karyawan *</label>
                                        <select name="nama_karyawan" id="nama_karyawan"
                                            class="selectpicker form-control" data-style="py-0" data-live-search="true">
                                            <option value="" disabled selected>Pilih Nama Karyawan</option>
                                            <?php foreach ($karyawan as $k) : ?>
                                            <option value="<?= $k['id_karyawan']; ?>"><?= $k['nama_karyawan']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('nama_karyawan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin *</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin"
                                            class="selectpicker form-control" data-style="py-0" data-live-search="true"
                                            required>
                                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Umur *</label>
                                        <input type="text" name="umur" class="form-control" placeholder="Masukkan Umur"
                                            value="<?= set_value('umur'); ?>">
                                        <?= form_error('umur', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Riwayat Penyakit *</label>
                                        <input type="text" name="riwayat_penyakit" class="form-control"
                                            placeholder="Masukkan Riwayat Penyakit"
                                            value="<?= set_value('riwayat_penyakit'); ?>">
                                        <?= form_error('riwayat_penyakit', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pernah Mengalami Kecelakaan *</label>
                                        <select name="pernah_kecelakaan" class="selectpicker form-control"
                                            data-style="py-0">
                                            <option value="Pernah" <?= set_select('pernah_kecelakaan', 'Pernah'); ?>>
                                                Pernah</option>
                                            <option value="Tidak Pernah"
                                                <?= set_select('pernah_kecelakaan', 'Tidak Pernah'); ?>>Tidak Pernah
                                            </option>
                                        </select>
                                        <?= form_error('pernah_kecelakaan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Catatan*</label>
                                        <textarea name="catatan" class="form-control"
                                            placeholder="Masukkan Catatan"><?= set_value('catatan'); ?></textarea>
                                        <?= form_error('catatan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="<?= base_url('Kesehatan') ?>" class="btn btn-danger">Batal</a>
                                        <button type="submit" class="btn btn-primary mr-2">Tambah Data Karyawan</button>

                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
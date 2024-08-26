<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Tambah Data</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="<?= base_url('InspeksiHarian/upload'); ?>" method="POST">
                                <div class="form-group">
                                    <label>Nomor Plat / Unit Kendaraan*</label>
                                    <select name="no_plat" id="no_plat" class="form-control">
                                        <option value="">Pilih Nomor Plat</option>
                                        <?php foreach ($kendaraan as $k) : ?>
                                            <option value="<?= $k['id_kendaraan']; ?>"><?= $k['no_plat']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('nama_karyawan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama APD *</label>
                                <select name="nama_apd" id="nama_apd" class="form-control">
                                    <option value="">Pilih Nama APD</option>
                                    <?php foreach ($apd as $a) : ?>
                                        <option value="<?= $a['id_apd']; ?>"><?= $a['nama_apd']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('nama_apd', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jumlah *</label>
                                <input type="text" name="jumlah" class="form-control" placeholder="Masukkan Jumlah" value="<?= set_value('jumlah'); ?>">
                                <?= form_error('jumlah', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal *</label>
                                <input type="date" name="tanggal" class="form-control" value="<?= set_value('tanggal'); ?>">
                                <?= form_error('tanggal', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Keterangan *</label>
                                <input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan" value="<?= set_value('keterangan'); ?>">
                                <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status *</label>
                                <select name="status" class="selectpicker form-control" data-style="py-0">
                                    <option value="Diproses" <?= set_select('status', 'Diproses'); ?>>Diproses</option>
                                    <option value="Selesai" <?= set_select('status', 'Selesai'); ?>>Selesai</option>
                                </select>
                                <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mr-2">Tambah Data Pengajuan</button>
                                <a href="<?= base_url('Pengajuan') ?>" class="btn btn-danger">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

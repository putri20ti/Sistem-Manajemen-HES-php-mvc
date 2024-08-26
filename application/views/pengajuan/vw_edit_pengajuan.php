<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Edit Data Pengajuan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('Pengajuan/update'); ?>" enctype="multipart/form-data" method="POST">    
                    <input type="hidden" name="id_pengajuan" value="<?= $pengajuan['id_pengajuan']; ?>">                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Nama Karyawan </label>
                                        <input type="text" name="nama_karyawan" value="<?= $pengajuan['nama_karyawan']; ?>" class="form-control" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Nama Apd </label>
                                        <input type="text" name="nama_apd" value="<?= $pengajuan['nama_apd']; ?>" class="form-control" required readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Jumlah </label>
                                        <input type="text" name="jumlah" value="<?= $pengajuan['jumlah']; ?>" class="form-control" placeholder="Ubah jumlah" required readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Tanggal </label>
                                        <input type="date" name="tanggal" value="<?= $pengajuan['tanggal']; ?>"class="form-control" required readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Keterangan </label>
                                        <input type="text" name="keterangan" value="<?= $pengajuan['keterangan']; ?>"class="form-control" required readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Status *</label>
                                    <select name="status" class="selectpicker form-control" data-style="py-0">
                                        <option value="Diproses" <?= $pengajuan['status'] == 'Diproses' ? 'selected' : ''; ?>>Diproses</option>
                                        <option value="Selesai" <?= $pengajuan['status'] == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                                    </select>
                                    <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Bukti </label>
                                        <div class="profile-img-edit position-relative">
                                            <a href="<?= base_url('assets/img/gambar/'. $pengajuan['gambar']); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Lihat Gambar"><img class="profile-pic rounded avatar-100"
                                            src="<?= base_url('assets/img/gambar/'. $pengajuan['gambar']); ?>" alt="profile-pic"></a>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <a href="<?= base_url('Pengajuan') ?>" class="btn btn-danger">Batal</a>                     
                                    <button type="submit" class="btn btn-primary mr-2">Ubah Data</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Tambah Data Kendaraan</h4>
                        </div>
                    </div>
                    <div class="col-md-6"> 
                        <form action="<?= base_url('Kendaraan/add'); ?>" method="POST" enctype="multipart/form-data">
                            <!-- Nomor Plat -->
                            <div class="form-group">
                                <label>Nomor Plat *</label>
                                <input type="text" name="no_plat" class="form-control" placeholder="Masukkan Nomor Plat">
                                <?= form_error('no_plat'); ?>
                            </div>
                            <!-- Merk -->
                            <div class="form-group">
                                <label>Merk *</label>
                                <input type="text" name="merk" class="form-control" placeholder="Masukkan Merk">
                                <?= form_error('merk'); ?>
                            </div>
                            <!-- Warna -->
                            <div class="form-group">
                                <label>Warna *</label>
                                <input type="text" name="warna" class="form-control" placeholder="Masukkan Warna">
                                <?= form_error('warna'); ?>
                            </div>
                            <!-- Tipe Kendaraan -->
                            <div class="form-group">
                                <label>Tipe Kendaraan *</label>
                                <select name="tipe_kendaraan" class="form-control">
                                    <option value="">Pilih Tipe Kendaraan</option>
                                    <?php foreach($tipe_kendaraan_enum as $tipe_kendaraan): ?>
                                        <option value="<?= $tipe_kendaraan; ?>"><?= $tipe_kendaraan; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('tipe_kendaraan'); ?>
                            </div>
                            <!-- Status -->
                            <div class="form-group">
                                <label>Status *</label>
                                <select name="status" class="form-control">
                                    <option value="">Pilih Status</option>
                                    <?php foreach($status_enum as $status): ?>
                                        <option value="<?= $status; ?>"><?= $status; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('status'); ?>
                            </div>
                            <!-- Foto -->
                            <div class="form-group">
                                <label>Foto *</label>
                                <div class="profile-img-edit position-relative">
                                    <img class="profile-pic rounded avatar-100" src="<?= base_url('assets/images/user/11.png'); ?>" alt="profile-pic">
                                    <div class="crm-p-image bg-primary">
                                        <i class="las la-pen upload-button"></i>
                                        <input class="file-upload" name="foto" type="file" accept=".jpg,.png,.jpeg">
                                    </div>
                                </div>
                                <div class="img-extension mt-3">
                                    <div class="d-inline-block align-items-center">
                                        <span>Only</span>
                                        <a href="javascript:void();">.jpg</a>
                                        <a href="javascript:void();">.png</a>
                                        <a href="javascript:void();">.jpeg</a>
                                        <span>allowed</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Tombol Submit dan Reset -->
                            <button type="submit" class="btn btn-primary mr-2">Tambah Data</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>

<div class="wrapper">
    <section class="login-content">
        <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
                <div class="col-lg-8">
                    <div class="card auth-card">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center auth-content">
                                <div class="col-lg-7 align-self-center">
                                    <div class="p-3">
                                        <h2 class="mb-2">Silahkan Buat Akun Anda!</h2>
                                        <?= $this->session->flashdata('pesan'); ?>
                                        <?= form_open('auth/register'); ?>
                                        <div class="form-group">
                                            <select name="nama_karyawan" class="form-control form-control-user" id="nama_karyawan">
                                                <option value="">Pilih Nama Karyawan</option>
                                                <?php foreach ($karyawan as $k): ?>
                                                    <option value="<?= htmlspecialchars($k['nama_karyawan'], ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($k['nama_karyawan'], ENT_QUOTES, 'UTF-8'); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('nama_karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="username" value="<?= set_value('username'); ?>" class="form-control form-control-user" id="username" placeholder="Username">
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" value="<?= set_value('password'); ?>" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" value="<?= set_value('konfpass'); ?>" class="form-control form-control-user" id="konfpass" name="konfpass" placeholder="Ulangi Password">
                                                <?= form_error('konfpass', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <select name="level" class="form-control form-control-user">
                                                <option value="hes">HES</option>
                                                <option value="hescoordinator">HES Coordinator</option>
                                            </select>
                                            <?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Daftar Akun
                                        </button>
                                        <?= form_close(); ?>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url('auth'); ?>">Sudah Punya akun? Login!</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 content-right">
                                    <img src="<?= base_url('assets/html/assets/images/login/01.png'); ?>" class="img-fluid image-right" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

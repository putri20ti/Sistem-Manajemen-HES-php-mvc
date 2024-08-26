<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<style>
    body {
        background-color: #3A539B;
    }
</style>
<!-- loader END -->
<div class="wrapper">
    <section class="login-content">
        <div class="container">
            <?= $this->session->flashdata('message'); ?>
            <div class="row align-items-center justify-content-center height-self-center">
                <div class="col-lg-8">
                    <div class="card auth-card">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center auth-content">
                                <div class="col-lg-7 align-self-center">
                                    <div class="p-3">
                                        <h2 class="mb-2">Selamat Datang</h2>
                                        <p>Silahkan login untuk tetap terhubung.</p>
                                        <?php echo form_open('auth'); ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="floating-label form-group">
                                                    <input class="floating-input form-control" name="username" type="text" >
                                                    <?php echo form_error('username', '<div class="text-danger small ml-3">','</div>') ?>
                                                    <label>Username</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="floating-label form-group">
                                                    <input class="floating-input form-control" name="password" type="password" >
                                                    <?php echo form_error('password', '<div class="text-danger small ml-3">','</div>') ?>
                                                    <label>Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                                <div class="col-lg-5 content-right">
                                    <img src="<?= base_url('assets/html/'); ?>assets/images/login/02.png" class="img-fluid image-right" alt="Gambar Login">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Tambah Data Karyawan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Karyawan/upload'); ?>" data-toggle="validator" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor Badge *</label>
                                        <input type="text" name="nobadge" class="form-control"
                                            placeholder="Masukkan Nomor Badge" value="<?= set_value('nobadge'); ?>"
                                            required>
                                        <?= form_error('nobadge', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Karyawan *</label>
                                        <input type="text" name="nama_karyawan" class="form-control"
                                            placeholder="Masukkan Nama" value="<?= set_value('nama_karyawan'); ?>"
                                            required>
                                        <?= form_error('nama_karyawan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <!-- Tempat Lahir -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tempat Lahir *</label>
                                        <input type="text" name="tempat_lahir" class="form-control"
                                            placeholder="Masukkan Tempat Lahir"
                                            value="<?= set_value('tempat_lahir'); ?>" required>
                                        <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <!-- Tanggal Lahir -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir *</label>
                                        <input type="date" name="tanggal_lahir" class="form-control"
                                            placeholder="Masukkan Tanggal Lahir"
                                            value="<?= set_value('tanggal_lahir'); ?>" required>
                                        <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <!-- Jabatan -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jabatan *</label>
                                        <select name="jabatan" id="jabatan" class="selectpicker form-control"
                                            data-style="py-0" data-live-search="true">
                                            <option value="" disabled selected>Pilih Jabatan</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Driver">Driver</option>
                                            <option value="Foreman">Foreman</option>
                                            <option value="Helper">Helper</option>
                                            <option value="Hes Coordinator">Hes Coordinator</option>
                                            <option value="Hes Officer">Hes Officer</option>
                                            <option value="Law Professional">Law Professional - Gis Forestry</option>
                                            <option value="Mechanic">Mechanic</option>
                                            <option value="Operator">Operator</option>
                                            <option value="Planner">Planner</option>
                                            <option value="Park Ranger">Park Ranger</option>
                                            <option value="Receptionist">Receptionist</option>
                                            <option value="Project Manager">Project Manager</option>
                                            <option value="Supervisor">Supervisor</option>
                                        </select>
                                        <?= form_error('jabatan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <!-- Jenis Kelamin -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin *</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control select2"
                                            required>
                                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <!-- Alamat -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat *</label>
                                        <input type="text" name="alamat" class="form-control"
                                            placeholder="Masukkan Alamat" value="<?= set_value('alamat'); ?>" required>
                                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="<?= base_url('Karyawan') ?>" class="btn btn-danger">Batal</a>
                                        <button type="submit" class="btn btn-primary mr-2">Tambah Data</button>
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
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    Swal.fire({
  title: "Good job!",
  text: "You clicked the button!",
  icon:"success"
});
</script> -->
<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Ubah Data Karyawan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Karyawan/update'); ?>" method="post" data-toggle="validator">
                            <input type="hidden" name="id_karyawan" value="<?= $karyawan['id_karyawan']; ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor Badge *</label>
                                        <input type="text" name="nobadge" value="<?= $karyawan['nobadge']; ?>"
                                            class="form-control" placeholder="Masukkan Nomor Badge"
                                            data-errors="Silahkan Isi Nomor Badge" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Karyawan *</label>
                                        <input type="text" name="nama_karyawan"
                                            value="<?= $karyawan['nama_karyawan']; ?>" class="form-control"
                                            placeholder="Masukkan Nama" data-errors="Silahkan Isi Nama" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tempat Lahir *</label>
                                        <input type="text" name="tempat_lahir" value="<?= $karyawan['tempat_lahir']; ?>"
                                            class="form-control" placeholder="Masukkan Tempat Lahir"
                                            data-errors="Silahkan Masukkan Tempat Lahir" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir *</label>
                                        <input type="date" name="tanggal_lahir"
                                            value="<?= $karyawan['tanggal_lahir']; ?>" class="form-control"
                                            placeholder="Masukkan Tanggal Lahir"
                                            data-errors="Silahkan Masukkan Tanggal Lahir" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jabatan *</label>
                                        <select name="jabatan" class="form-control selectpicker" data-style="py-0"
                                            data-live-search="true">
                                            <option value="Admin"
                                                <?= ($karyawan['jabatan'] == 'Admin') ? 'selected' : ''; ?>>Admin
                                            </option>
                                            <option value="Driver"
                                                <?= ($karyawan['jabatan'] == 'Driver') ? 'selected' : ''; ?>>Driver
                                            </option>
                                            <option value="Foreman"
                                                <?= ($karyawan['jabatan'] == 'Foreman') ? 'selected' : ''; ?>>Foreman
                                            </option>
                                            <option value="Helper"
                                                <?= ($karyawan['jabatan'] == 'Helper') ? 'selected' : ''; ?>>Helper
                                            </option>
                                            <option value="Hes Coordinator"
                                                <?= ($karyawan['jabatan'] == 'Hes Coordinator') ? 'selected' : ''; ?>>
                                                Hes Coordinator</option>
                                            <option value="Hes Officer"
                                                <?= ($karyawan['jabatan'] == 'Hes Officer') ? 'selected' : ''; ?>>Hes
                                                Officer</option>
                                            <option value="Law Professional - Gis Forestry"
                                                <?= ($karyawan['jabatan'] == 'Law Professional - Gis Forestry') ? 'selected' : ''; ?>>
                                                Law Professional - Gis Forestry</option>
                                            <option value="Mechanic"
                                                <?= ($karyawan['jabatan'] == 'Mechanic') ? 'selected' : ''; ?>>Mechanic
                                            </option>
                                            <option value="Operator"
                                                <?= ($karyawan['jabatan'] == 'Operator') ? 'selected' : ''; ?>>Operator
                                            </option>
                                            <option value="Planner"
                                                <?= ($karyawan['jabatan'] == 'Planner') ? 'selected' : ''; ?>>
                                                Planner</option>
                                            <option value="Park Ranger"
                                                <?= ($karyawan['jabatan'] == 'Park Ranger') ? 'selected' : ''; ?>>
                                                Park Ranger</option>
                                            <option value="Receptionist"
                                                <?= ($karyawan['jabatan'] == 'Receptionist') ? 'selected' : ''; ?>>
                                                Receptionist</option>
                                            <option value="Project Manager"
                                                <?= ($karyawan['jabatan'] == 'Project Manager') ? 'selected' : ''; ?>>
                                                Project Manager</option>
                                            <option value="Supervisor"
                                                <?= ($karyawan['jabatan'] == 'Supervisor') ? 'selected' : ''; ?>>
                                                Supervisor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin *</label>
                                        <select name="jenis_kelamin" class="selectpicker form-control"
                                            data-style="py-0">
                                            <option value="Laki-Laki"
                                                <?= ($karyawan['jenis_kelamin'] == 'Laki-Laki') ? 'selected' : ''; ?>>
                                                Laki-Laki</option>
                                            <option value="Perempuan"
                                                <?= ($karyawan['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>
                                                Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat *</label>
                                        <input type="text" name="alamat" value="<?= $karyawan['alamat']; ?>"
                                            class="form-control" placeholder="Masukkan Alamat"
                                            data-errors="Silahkan Masukkan Alamat" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?= base_url('Karyawan') ?>" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-primary mr-2">Ubah Data</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
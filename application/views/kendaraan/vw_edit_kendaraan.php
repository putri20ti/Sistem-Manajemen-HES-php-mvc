<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Edit Kendaraan</h4>
                    </div>
                    <a href="<?= base_url('Kendaraan'); ?>" class="btn btn-primary add-list">Kembali</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('Kendaraan/update'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_kendaraan" value="<?= $kendaraan['id_kendaraan']; ?>">
                            <div class="form-group">
                                <label for="no_plat">Nomor Plat</label>
                                <input type="text" class="form-control" id="no_plat" name="no_plat" value="<?= $kendaraan['no_plat']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" class="form-control" id="merk" name="merk" value="<?= $kendaraan['merk']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="warna">Warna</label>
                                <input type="text" class="form-control" id="warna" name="warna" value="<?= $kendaraan['warna']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="tipe_kendaraan">Tipe Kendaraan</label>
                                <input type="text" class="form-control" id="tipe_kendaraan" name="tipe_kendaraan" value="<?= $kendaraan['tipe_kendaraan']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" id="status" name="status" value="<?= $kendaraan['status']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                                <img src="<?= base_url('assets/img/') . $kendaraan['foto']; ?>" style="max-width: 100px; max-height: 100px;" class="mt-3">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Edit Data APD</h4>
                        </div>
                    </div>
                    <form action="<?= base_url('Apd/update'); ?>" method="POST">
                    <div class="col-md-6">
                            <input type="hidden" name="id_apd" value="<?= $apd['id_apd']; ?>">
                            <div class="form-group">
                                <label>Nama Apd *</label>
                                <input type="text" name="nama_apd" value="<?= $apd['nama_apd']; ?>" class="form-control"
                                    required readonly>
                                <div class="help-block with-errors"></div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Stok *</label>
                            <input type="text" name="stok" value="<?= $apd['stok']; ?>" class="form-control"
                                placeholder="Ubah stok" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                                    <div class="form-group">
                        <a href="<?= base_url('Apd') ?>" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-primary mr-2">Ubah Data</button>
</div>
</div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Page end  -->
</div>
</div>
</div>
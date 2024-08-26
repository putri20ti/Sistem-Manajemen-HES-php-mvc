<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Data Alat Pelindung Diri</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message');?>
                        <?php echo form_open('apd'); ?>
                        <div class="table-responsive">
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                        <th>No</th>
                                        <th>Nama APD</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($apd as $us) : ?>
                                    <tr>
                                    <td><?= $no++; ?></td>
                                        <td><?= $us['nama_apd']; ?></td>
                                        <td><?= $us['stok']; ?></td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="btn btn-sm btn-icon btn-primary mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="Edit"
                                                    href="<?= base_url('Apd/edit/') . $us['id_apd']; ?>">
                                                    <i class="ri-pencil-line mr-0"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
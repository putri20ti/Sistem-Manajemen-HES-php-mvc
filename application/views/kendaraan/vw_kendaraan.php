// View: application/views/kendaraan/vw_kendaraan.php
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Data Kendaraan</h4>
                    </div>
                    <a href="<?= base_url('Kendaraan/tambah'); ?>" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Tambah Data</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                        <th>Nomor Plat</th>
                                        <th>Merk</th>
                                        <th>Warna</th>
                                        <th>Tipe Kendaraan</th>
                                        <th>Status</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kendaraan as $us) : ?>
                                        <tr>
                                            <td><?= $us['no_plat']; ?></td>
                                            <td><?= $us['merk']; ?></td>
                                            <td><?= $us['warna']; ?></td>
                                            <td><?= $us['tipe_kendaraan']; ?></td>
                                            <td><?= $us['status']; ?></td>
                                            <td><img src="<?= base_url('assets/img/') . $us['foto']; ?>" style="max-width: 100px; max-height: 100px;"></td>
                                            <td>
                                                <div class="d-flex align-items-center list-action">
                                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="Detail" href="<?= base_url('Kendaraan/detail/') . $us['id_kendaraan']; ?>"><i class="ri-eye-line mr-0"></i></a>
                                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="Edit" href="<?= base_url('Kendaraan/edit/') . $us['id_kendaraan']; ?>"> <i class="ri-pencil-line mr-0"></i></a>
                                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="Delete" href="<?= base_url('Kendaraan/hapus/') . $us['id_kendaraan']; ?>"> <i class="ri-delete-bin-line mr-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
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

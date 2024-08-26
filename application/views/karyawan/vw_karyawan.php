<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Data Karyawan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?= $this->session->flashdata('message'); ?>
                            <?php echo form_open('karyawan'); ?>
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                        <th>No</th>
                                        <th>Nomor Badge</th>
                                        <th>Nama Karyawan</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jabatan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($karyawan as $us) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $us['nobadge']; ?></td>
                                        <td><?= $us['nama_karyawan']; ?></td>
                                        <td><?= $us['tempat_lahir']; ?></td>
                                        <td><?= $us['tanggal_lahir']; ?></td>
                                        <td><?= $us['jabatan']; ?></td>
                                        <td><?= $us['jenis_kelamin']; ?></td>
                                        <td><?= $us['alamat']; ?></td>
                                        <td>
                                            <?php if ($us['is_active'] == 1) { ?>
                                            <span class="badge bg-primary">Active</span>
                                            <?php } else { ?>
                                            <span class="badge bg-danger">Inactive</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="btn btn-sm btn-icon mr-2 <?= $us['is_active'] ? 'btn-success' : 'btn-secondary' ?>"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="<?= $us['is_active'] ? 'Nonaktifkan User' : 'Aktifkan User' ?>"
                                                    href="<?= base_url('Karyawan/toggle/') . $us['id_karyawan'] ?>">
                                                    <i
                                                        class="<?= $us['is_active'] ? 'ri-user-unfollow-line' : 'ri-user-follow-line' ?>"></i>
                                                </a>
                                                <a class="btn btn-sm btn-icon btn-primary mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="Edit"
                                                    href="<?= base_url('Karyawan/edit/') . $us['id_karyawan']; ?>">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                                <button
                                                    onclick="confirmDelete(event, '<?= base_url('Karyawan/hapus/') . $us['id_karyawan']; ?>')"
                                                    class="btn btn-danger btn-sm mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="Delete">
                                                    <i class="ri-delete-bin-line mr-0"></i>
                                                </button>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
function confirmDelete(event, deleteUrl) {
    event.preventDefault(); // Prevent the default action

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger"
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "Apa kamu yakin Menghapus Ini?",
        text: "Anda tidak akan dapat mengembalikannya!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, hapus saja!",
        cancelButtonText: "Tidak, batalkan!",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = deleteUrl; // Redirect to the delete URL
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
                title: "Dibatalkan",
                text: "File imajiner Anda aman :)",
                icon: "error"
            });
        }
    });
}

<?php if ($this->session->flashdata('message') == 'deleted'): ?>
Swal.fire({
    title: "Hapus!",
    text: "Data Anda telah dihapus.",
    icon: "success"
});
<?php endif; ?>
</script>
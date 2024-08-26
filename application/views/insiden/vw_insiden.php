<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Data Insiden Kerja</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-danger" href="<?= base_url('extra/reportInsiden'); ?>">
                            <i class="fas fa-file-pdf mr-2"></i>PDF
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?= $this->session->flashdata('message');?>
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Karyawan</th>
                                        <th>No Badge</th>
                                        <th>Jabatan</th>
                                        <th>Uraian</th>
                                        <th>Penyebab</th>
                                        <th>Tingkat Insiden</th>
                                        <th>NLTI</th>
                                        <th>TLI</th>
                                        <th>Day Lost</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($insiden as $us) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td> <?= $us['tanggal']; ?></td>
                                        <td> <?= $us['nama_karyawan']; ?></td>
                                        <td> <?= $us['nobadge']; ?></td>
                                        <td> <?= $us['jabatan']; ?></td>
                                        <td> <?= $us['uraian']; ?></td>
                                        <td> <?= $us['penyebab']; ?></td>
                                        <td> <?= $us['tingkat_insiden']; ?></td>
                                        <td> <?= $us['nlti']; ?></td>
                                        <td> <?= $us['tli']; ?></td>
                                        <td> <?= $us['day_lost']; ?></td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <button
                                                    onclick="confirmDelete(event, '<?= base_url('Insiden/hapus/') . $us['id']; ?>')"
                                                    class="btn btn-danger btn-sm mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="Delete">
                                                    <i class="ri-delete-bin-line mr-0"></i>
                                                </button>
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
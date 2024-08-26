<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Data Kesehatan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?= $this->session->flashdata('message');?>
                            <?php echo form_open('kesehatan'); ?>
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                        <th>No</th>
                                        <th>Nama Karyawan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                        <th>Riwayat Penyakit</th>
                                        <th>Pernah Mengalami Kecelakaan?</th>
                                        <th>Catatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($kesehatan as $us) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td> <?= $us['nama_karyawan']; ?></td>
                                        <td> <?= $us['jenis_kelamin']; ?></td>
                                        <td> <?= $us['umur']; ?></td>
                                        <td> <?= $us['riwayat_penyakit']; ?></td>
                                        <td> <?= $us['pernah_kecelakaan']; ?></td>
                                        <td> <?= $us['catatan']; ?></td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="btn btn-sm btn-icon btn-primary mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit"
                                                    href="<?= base_url('Kesehatan/edit/') . $us['id_kesehatan']; ?>"> <i
                                                        class="ri-pencil-line mr-0"></i></a>
                                                <button
                                                    onclick="confirmDelete(event, '<?= base_url('Kesehatan/hapus/') . $us['id_kesehatan']; ?>')"
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
</script>
<?php if ($this->session->flashdata('message') == 'deleted'): ?>
<script type="text/javascript">
Swal.fire({
    title: "Hapus!",
    text: "Data Anda telah dihapus.",
    icon: "success"
});
</script>
<?php endif; ?>
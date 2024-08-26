<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Data Data Pengajuan</h4>
                    </div>
                    <a href="<?= base_url() ?>Pengajuan/tambah" class="btn btn-primary add-list"><i
                            class="las la-plus mr-3"></i>Tambah Pengajuan</a>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('message');?>
                    <?php echo form_open('pengajuan'); ?>
                    <div class="table-responsive">
                        <table id="datatable" class="table data-tables table-striped">
                            <thead>
                                <tr class="ligth">
                                    <th>No</th>
                                    <th>Nama APD</th>
                                    <th>Nama Karyawan</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Bukti</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($pengajuan as $us) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td> <?= $us['nama_apd']; ?></td>
                                    <td> <?= $us['nama_karyawan']; ?></td>
                                    <td> <?= $us['jumlah']; ?></td>
                                    <td> <?= $us['tanggal']; ?></td>
                                    <td> <?= $us['keterangan']; ?></td>
                                    <td><a href="<?= base_url('assets/img/gambar/') . $us['gambar']; ?>" type="button"
                                            target="_blank"><img
                                                src="<?= base_url('assets/img/gambar/') . $us['gambar']; ?>"
                                                style="max-width: 100px; max-height: 100px;"></a></td>
                                    <td> <?= $us['status']; ?></td>
                                    <td>
                                        <div class="d-flex align-items-center list-action">
                                            <a class="btn btn-sm btn-icon btn-primary mr-2" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Edit"
                                                href="<?= base_url('Pengajuan/edit/') . $us['id_pengajuan']; ?>"> <i
                                                    class="ri-pencil-line mr-0"></i></a>
                                            <button
                                                onclick="confirmDelete(event, '<?= base_url('Pengajuan/hapus/') . $us['id_pengajuan']; ?>')"
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
                // text: "File imajiner Anda aman :)",
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
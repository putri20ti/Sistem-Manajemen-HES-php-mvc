 
    <!-- Backend Bundle JavaScript -->
    <script src="<?= base_url('assets/html/'); ?>assets/js/backend-bundle.min.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="<?= base_url('assets/html/'); ?>assets/js/table-treeview.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="<?= base_url('assets/html/'); ?>assets/js/customizer.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="<?= base_url('assets/html/'); ?>assets/js/chart-custom.js"></script>
    
    <!-- app JavaScript -->
    <script src="<?= base_url('assets/html/'); ?>assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
    <script src="<?= base_url('assets/html/'); ?>assets/js/javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
  </body>
</html>
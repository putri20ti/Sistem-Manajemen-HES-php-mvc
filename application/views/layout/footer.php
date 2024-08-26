</div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="<?= base_url('assets/html/'); ?>backend/privacy-policy.html">Privacy Policy</a></li>
                                <li class="list-inline-item"><a href="<?= base_url('assets/html/'); ?>backend/terms-of-service.html">Terms of Use</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-right">
                            <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">POS Dash</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("myChart5").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            <?php
                            if (count($total_observasi1) > 0) {
                                $dataPoints = [];
                                foreach ($total_observasi1 as $data) {
                                    $dataPoints[] = $data['total_observasi'];
                                }
                                echo implode(", ", $dataPoints);
                            }
                            ?>
                        ],
                        backgroundColor: [
                            '#191d21',
                            '#63ed7a',
                            '#ffa426',
                            '#fc544b',
                            '#6777ef',
                        ],
                        label: 'Total Observasi'
                    }],
                    labels: [
                        <?php
                        if (count($total_observasi1) > 0) {
                            $labels = [];
                            foreach ($total_observasi1 as $data) {
                                $labels[] = "'" . $data['bulan'] . "'";
                            }
                            echo implode(", ", $labels);
                        }
                        ?>
                    ],
                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'bottom',
                    },
                }
            });
        });
    </script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById("myChart").getContext('2d');

        // Data observasi yang dimuat dari PHP
        var allData = <?php echo json_encode($all_data); ?>;

        function getChartData(year) {
            var data = allData[year] || [];
            var labels = [];
            var selamat = [];
            var beresiko = [];
            var total_observasi = [];

            data.forEach(function(item) {
                labels.push(item.bulan);
                selamat.push(item.selamat);
                beresiko.push(item.beresiko);
                total_observasi.push(item.total_observasi);
            });

            return {
                labels: labels,
                selamat: selamat,
                beresiko: beresiko,
                total_observasi: total_observasi
            };
        }

        var currentYear = "<?php echo $currentYear; ?>";
        var chartData = getChartData(currentYear);

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.labels,
                datasets: [{
                    label: 'Jumlah Selamat',
                    data: chartData.selamat,
                    backgroundColor: '#6777ef',
                    borderColor: '#6777ef',
                    borderWidth: 2.5,
                    pointBackgroundColor: '#ffffff',
                    pointRadius: 4
                }, {
                    label: 'Jumlah Beresiko',
                    data: chartData.beresiko,
                    backgroundColor: '#fc544b',
                    borderColor: '#fc544b',
                    borderWidth: 2.5,
                    pointBackgroundColor: '#ffffff',
                    pointRadius: 4
                }, {
                    label: 'Jumlah Observasi',
                    data: chartData.total_observasi,
                    backgroundColor: '#63ed7a',
                    borderColor: '#63ed7a',
                    borderWidth: 2.5,
                    pointBackgroundColor: '#ffffff',
                    pointRadius: 4
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Fungsi untuk mengupdate data chart dan jumlah ketika tahun berubah
        document.getElementById('tahunContent').addEventListener('change', function() {
            var selectedYear = this.value;
            var newData = getChartData(selectedYear);
            
            myChart.data.labels = newData.labels;
            myChart.data.datasets[0].data = newData.selamat;
            myChart.data.datasets[1].data = newData.beresiko;
            myChart.data.datasets[2].data = newData.total_observasi;
            myChart.update();

            // Update jumlah total observasi, selamat, dan beresiko di halaman
            document.getElementById('total_observasi').innerText = newData.total_observasi.reduce((a, b) => a + b, 0);
            document.getElementById('selamat').innerText = newData.selamat.reduce((a, b) => a + b, 0);
            document.getElementById('beresiko').innerText = newData.beresiko.reduce((a, b) => a + b, 0);
        });

        // Fungsi untuk resize chart
        window.resizeChart = function(action) {
            var chartContainer = document.querySelector('.chart-container');
            var currentHeight = chartContainer.offsetHeight;
            var newHeight = currentHeight;

            if (action === 'increase') {
                newHeight = currentHeight + 100;
            } else if (action === 'decrease') {
                newHeight = currentHeight - 100;
            }

            if (newHeight > 200 && newHeight < 800) { // batasan minimum dan maksimum tinggi
                chartContainer.style.height = newHeight + 'px';
                myChart.resize();
            }
        };
    });
</script>


</body>
</html>
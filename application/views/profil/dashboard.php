<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <?= $this->session->flashdata('message');?>
            <div class="col-md-12 mb-2 mt-1">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <h4 class="font-weight-bold">Dashboard</h4>
                    <form class="d-flex">
                        <div class="form-group mb-0 mr-2">
                            <select id="tahunContent" class="form-control">
                                <?php foreach ($tahun_list as $tahun): ?>
                                <option value="<?php echo $tahun['tahun']; ?>"
                                    <?php echo ($tahun['tahun'] == $currentYear) ? 'selected' : ''; ?>>
                                    <?php echo $tahun['tahun']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-info-light">
                                        <img src="<?= base_url('assets/html/'); ?>/assets/images/product/1.png"
                                            class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">Jumlah Keseluruhan Total Observasi</p>
                                        <h4 id="total_observasi"><?php echo $jmltotal_observasi; ?></h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-info iq-progress progress-1" data-percent="85"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-danger-light">
                                        <img src="<?= base_url('assets/html/'); ?>/assets/images/product/2.png"
                                            class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">Jumlah Keseluruhan Perilaku Selamat</p>
                                        <h4 id="selamat"><?php echo $jmlselamat; ?></h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-danger iq-progress progress-1" data-percent="70"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-success-light">
                                        <img src="<?= base_url('assets/html/'); ?>/assets/images/product/3.png"
                                            class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">Jumlah Keseluruhan Perilaku Beresiko</p>
                                        <h4 id="beresiko"><?php echo $jmlberesiko; ?></h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-success iq-progress progress-1" data-percent="75"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-lg-12">
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Data Statistik BBS</h4>
                    </div>
                    <div class="resize-controls">
                    <i class="fas fa-search-plus" onclick="resizeChart('increase')"></i>
                    <i class="fas fa-search-minus" onclick="resizeChart('decrease')"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .chart-container {
        position: relative;
        width: 100%;
        height: 400px; /* Anda bisa mengatur tinggi awal sesuai kebutuhan */
    }
    .resize-controls {
        text-align: right; /* Mengatur tombol ke sebelah kanan */
        margin-top: 10px;
    }
    .resize-controls i {
        cursor: pointer;
        margin: 0 5px;
        font-size: 1.5em;
        transition: color 0.3s; /* Animasi perubahan warna */
    }
    .resize-controls i.fa-search-plus {
        color: #28a745; /* Warna hijau untuk ikon perbesar */
    }
    .resize-controls i.fa-search-minus {
        color: #dc3545; /* Warna merah untuk ikon perkecil */
    }
    .resize-controls i:hover {
        color: #ffc107; /* Warna kuning saat hover */
    }
</style>


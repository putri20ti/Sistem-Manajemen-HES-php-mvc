<!DOCTYPE html>
<html>

<head>
    <title>Data Observasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@200;400&display=swap"
        rel="stylesheet">
    <style>
    * {
        font-family: 'Montserrat', sans-serif;
    }

    html {
        font-family: 'Montserrat', sans-serif;
        margin: 0;
        padding: 0;
    }

    body {
        padding: 100px;
        column-count: 2;
        column-gap: 20px;
    }

    h1 {
        font-family: 'Montserrat', sans-serif;
        text-align: center;
    }

    .section {
        font-family: 'Montserrat', sans-serif;
        margin-bottom: 20px;
    }

    .section-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: bold;
        color: blue;
        margin-bottom: 10px;
    }

    .section-content {
        font-family: 'Montserrat', sans-serif;
        font-size: 12px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 16px;
    }

    th,
    td {
        border: 1px solid black;
        text-align: left;
        padding: 6px;
    }

    th {
        background-color: #f2f2f2;
    }

    .table-title {
        font-weight: bold;
        background-color: #004080;
        color: white;
        text-align: center;
    }

    .center-text {
        text-align: center;
    }

    .full-width {
        background-color: #004080;
        color: white;
        text-align: center;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <h3>FORMULIR OBSERVASI PERILAKU BERBASIS KESELAMATAN </h3>
    <div class="section">
        <div class="section-title">Informasi Observer</div>
        <div class="section-content">Tanggal : <?= $observasi['tanggal']; ?></div>
        <div class="section-content">Nama : <?= $observasi['nama_karyawan']; ?></div>
        <div class="section-content">Observasi diri sendiri?
            <?= $observasi['observasi_diri_sendiri'] == 1 ? 'Ya' : 'Tidak'; ?></div>
        <div class="section-content">Coach? <?= $observasi['coach'] == 1 ? 'Ya' : 'Tidak'; ?></div>
    </div>
    <div class="section">
        <div class="section-title">Informasi Observasi</div>
        <div class="section-content">Lokasi observasi : <?= $observasi['lokasi_observasi']; ?></div>
        <div class="section-content">Jumlah yang diobservasi : <?= $observasi['jumlah_observasi']; ?></div>
        <div class="section-content">Organisasi yang diobservasi: <?= $observasi['organisasi_observasi']; ?></div>
        <div class="section-content">Perusahaan Kontraktor : <?= $observasi['perusahaan_kontraktor']; ?></div>


        <div class="section">
            <table>
                <thead>
                    <tr>
                        <th>Item#</th>
                        <th>Behavior Description</th>
                        <th>Safe</th>
                        <th>At Risk</th>
                    </tr>
                </thead>
                <tbody>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Posisi Badan 13.3%</td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">1.1</td>
                        <td>Menghindari "Line of Fire"</td>
                        <td class="center-text"><?= $observasi['1.1'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['1.1'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">1.2</td>
                        <td>Berjalan/bergerak dengan pandangan ke arah gerakan</td>
                        <td class="center-text"><?= $observasi['1.2'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['1.2'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">1.3</td>
                        <td>Menjaga mata pada pekerjaan</td>
                        <td class="center-text"><?= $observasi['1.3'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['1.3'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">1.4</td>
                        <td>Menjaga badan dan bagiannya diluar posisi terjepit</td>
                        <td class="center-text"><?= $observasi['1.4'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['1.4'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">1.5</td>
                        <td>Naik/turun</td>
                        <td class="center-text"><?= $observasi['1.5'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['1.5'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Menggunakan badan 2.4</td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">2.1</td>
                        <td>Mengangkat/menurunkan/menekan/menarik</td>
                        <td class="center-text"><?= $observasi['2.1'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['2.1'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">2.2</td>
                        <td>Menghindar dari memuntir</td>
                        <td class="center-text"><?= $observasi['2.2'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['2.2'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">2.3</td>
                        <td>Menggapai dalam jangkauan</td>
                        <td class="center-text"><?= $observasi['2.3'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['2.3'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">2.4</td>
                        <td>Menanggapi resiko ergonomi industri</td>
                        <td class="center-text"><?= $observasi['2.4'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['2.4'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Perkakas dan Peralatan</td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">3.1</td>
                        <td>Memilih dan menggunakan perkakas/peralatan</td>
                        <td class="center-text"><?= $observasi['3.1'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['3.1'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>Item#</th>
                        <th>Behavior Description</th>
                        <th>Safe</th>
                        <th>At Risk</th>
                    </tr>
                </thead>
                <tbody>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Perkakas dan Peralatan</td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">3.2</td>
                        <td>Menggunakan pelindung/barikade/alat peringatan</td>
                        <td class="center-text"><?= $observasi['3.2'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['3.2'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Prosedur </td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">4.1</td>
                        <td>Persiapan kerja dan JHA (Job Hazard Analysis) - JSA</td>
                        <td class="center-text"><?= $observasi['4.1'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['4.1'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">4.2</td>
                        <td>Mengikuti prosedur</td>
                        <td class="center-text"><?= $observasi['4.2'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['4.2'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">4.3</td>
                        <td>Isolasi energi (Lock-Out/Tag-Out) </td>
                        <td class="center-text"><?= $observasi['4.3'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['4.3'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">4.4</td>
                        <td>Mengerjakan Hot-Work</td>
                        <td class="center-text"><?= $observasi['4.4'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['4.4'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">4.5</td>
                        <td>Memasuki area confined space</td>
                        <td class="center-text"><?= $observasi['4.5'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['4.5'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">4.7</td>
                        <td>Komunikasi ke rekan kerja</td>
                        <td class="center-text"><?= $observasi['4.7'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['4.7'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Area kerja</td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">5.1</td>
                        <td>Bekerja pada posisi seimbang</td>
                        <td class="center-text"><?= $observasi['5.1'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['5.1'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">5.2</td>
                        <td>Membersihkan/menyimpan peralatan/perkakas (h.keeping)</td>
                        <td class="center-text"><?= $observasi['5.2'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['5.2'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">5.3</td>
                        <td>Bekerja di lingkungan dengan cahaya yang cukup</td>
                        <td class="center-text"><?= $observasi['5.3'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['5.3'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Ergonomi Kantor</td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">6.1</td>
                        <td>Melakukan istirahat berkala</td>
                        <td class="center-text"><?= $observasi['6.1'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['6.1'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">6.2</td>
                        <td>Postur leher dan punggung </td>
                        <td class="center-text"><?= $observasi['6.2'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['6.2'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">6.3</td>
                        <td>Postur saat menggunakan telepon </td>
                        <td class="center-text"><?= $observasi['6.3'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['6.3'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">6.4</td>
                        <td>Penyangga punggung</td>
                        <td class="center-text"><?= $observasi['6.4'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['6.4'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">6.5</td>
                        <td>Postur pundak</td>
                        <td class="center-text"><?= $observasi['6.5'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['6.5'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">6.6</td>
                        <td>Posisi pergelangan dan tangan</td>
                        <td class="center-text"><?= $observasi['6.6'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['6.6'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">6.7</td>
                        <td>Memegang/menggerakkan mouse</td>
                        <td class="center-text"><?= $observasi['6.7'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['6.7'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>Item#</th>
                        <th>Behavior Description</th>
                        <th>Safe</th>
                        <th>At Risk</th>
                    </tr>
                </thead>
                <tbody>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Ergonomi Kantor</td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">6.8</td>
                        <td>Posisi Pinggang dan Kaki</td>
                        <td class="center-text"><?= $observasi['6.8'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['6.8'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">6.9</td>
                        <td>Posisi Telapak Kaki</td>
                        <td class="center-text"><?= $observasi['6.9'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['6.9'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">6.10</td>
                        <td>Mengenali dan Melaporkan ketidaknyamanan</td>
                        <td class="center-text"><?= $observasi['6.10'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['6.10'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Pemeliharaan Lingkungan</td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">7.1</td>
                        <td>Pencegahan tumpahan</td>
                        <td class="center-text"><?= $observasi['7.1'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['7.1'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">7.2</td>
                        <td>Persiapan untuk pembersihan tumpahan</td>
                        <td class="center-text"><?= $observasi['7.2'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['7.2'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">7.3</td>
                        <td>Menangani sampah</td>
                        <td class="center-text"><?= $observasi['7.3'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['7.3'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Alat Pelindung Diri (APD)</td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">8.1</td>
                        <td>Pelindung kepala</td>
                        <td class="center-text"><?= $observasi['8.1'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['8.1'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">8.2</td>
                        <td>Pelindung mata dan wajah</td>
                        <td class="center-text"><?= $observasi['8.2'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['8.2'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">8.3</td>
                        <td>Pelindung pendengaran</td>
                        <td class="center-text"><?= $observasi['8.3'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['8.3'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">8.4</td>
                        <td>Pelindung pernafasan</td>
                        <td class="center-text"><?= $observasi['8.4'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['8.4'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">8.5</td>
                        <td>Pelindung tangan dan lengan</td>
                        <td class="center-text"><?= $observasi['8.5'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['8.5'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">8.6</td>
                        <td>Pelindung jatuh</td>
                        <td class="center-text"><?= $observasi['8.6'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['8.6'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">8.7</td>
                        <td>Pakaian pelindung</td>
                        <td class="center-text"><?= $observasi['8.7'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['8.7'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">8.8</td>
                        <td>Alat mengambang personal</td>
                        <td class="center-text"><?= $observasi['8.8'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['8.8'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">8.9</td>
                        <td>Pelindung kaki</td>
                        <td class="center-text"><?= $observasi['8.9'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['8.9'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Mengemudi</td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">9.1</td>
                        <td>Perencanaan perjalanan</td>
                        <td class="center-text"><?= $observasi['9.1'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['9.1'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">9.2</td>
                        <td>Pre-Trip Inspection dan Seat Belt</td>
                        <td class="center-text"><?= $observasi['9.2'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['9.2'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">9.3</td>
                        <td>Berkendara pada kecepatan yang sesuai</td>
                        <td class="center-text"><?= $observasi['9.3'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['9.3'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>Item#</th>
                        <th>Behavior Description</th>
                        <th>Safe</th>
                        <th>At Risk</th>
                    </tr>
                </thead>
                <tbody>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Ergonomi Kantor</td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">9.4</td>
                        <td>Jarak iring</td>
                        <td class="center-text"><?= $observasi['9.4'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['9.4'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">9.5</td>
                        <td>Mengerem</td>
                        <td class="center-text"><?= $observasi['9.5'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['9.5'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">9.6</td>
                        <td>Berpindah jalur</td>
                        <td class="center-text"><?= $observasi['9.6'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['9.6'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">9.7</td>
                        <td>Menjaga pandangan dan pengamatan</td>
                        <td class="center-text"><?= $observasi['9.7'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['9.7'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">9.8</td>
                        <td>Memundurkan kendaraan</td>
                        <td class="center-text"><?= $observasi['9.8'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['9.8'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">9.9</td>
                        <td>Perilaku lainnya yang tidak tersebut di defenisi driving</td>
                        <td class="center-text"><?= $observasi['9.9'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['9.9'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Operasi Kelautan</td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">10.1</td>
                        <td>Persiapan perjalanan kapal</td>
                        <td class="center-text"><?= $observasi['10.1'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['10.1'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">10.2</td>
                        <td>Menggerakkan/memundurkan kapal</td>
                        <td class="center-text"><?= $observasi['10.2'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['10.2'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">10.3</td>
                        <td>Memasuki persimpangan</td>
                        <td class="center-text"><?= $observasi['10.3'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['10.4'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <tr>
                        <td class="center-text">10.4</td>
                        <td>Docking </td>
                        <td class="center-text"><?= $observasi['10.4'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['10.4'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                    <thead>
                        <tr>
                            <td colspan="4" class="full-width">Observasi perilaku yang lain</td>
                        </tr>
                    </thead>
                    <tr>
                        <td class="center-text">11.0</td>
                        <td>Lain-lain</td>
                        <td class="center-text"><?= $observasi['11.0'] == 1 ? '1' : '0'; ?></td>
                        <td class="center-text"><?= $observasi['11.0'] == 0 ? '1' : '0'; ?></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    <div class="section-title">Komentar-Komentar Observer</div>
    <div class="section" style="background-color: #98FB98;">
        <div class="section-content" style="font-weight: bold;">Safe Behavior/Perilaku Selamat</div>
        <div class="section-content" style="font-weight: bold;">Behavior Item# <?= $observasi['perilaku_selamat']; ?></div>
    </div>
    <div class="section" style="background-color: #FFFFE0;">
        <div class="section-content" style="font-weight: bold;">At-Risk Behavior / Perilaku Beresiko</div>
        <div class="section-content" style="font-weight: bold;">Behavior Item# <?= $observasi['perilaku_beresiko']; ?></div>
        <div class="section-content" style="font-weight: bold;">Ketika: (Melakukan tugas atau pekerjaan) </div>
        <div class="section-content" ><?= $observasi['ketika']; ?></div>
        <div class="section-content" style="font-weight: bold;">Ditemukan: (Penjelasan perilaku beresiko) </div>
        <div class="section-content" ><?= $observasi['ditemukan']; ?></div>
        <div class="section-content" style="font-weight: bold;">Sebab: (Alasan yang diberikan pada perilaku beresiko) </div>
        <div class="section-content" ><?= $observasi['sebab']; ?></div>
        <div class="section-content" style="font-weight: bold;">Saran-saran/Mencoba: (Diskusi solusi dan kesanggupan mencoba) </div>
        <div class="section-content" ><?= $observasi['saran']; ?></div>
        <div class="section-content" style="font-weight: bold;">Setuju perilaku terjadi? </div>
        <div class="section-content" ><?= $observasi['setuju_perilaku_terjadi'] == 1 ? 'Ya' : 'Tidak'; ?></div>
        <div class="section-content" style="font-weight: bold;">Setuju perilaku beresiko? </div>
        <div class="section-content" ><?= $observasi['setuju_perilaku_beresiko'] == 1 ? 'Ya' : 'Tidak'; ?></div>
        <div class="section-content" style="font-weight: bold;">Perilaku selamat </div>
        <div class="section-content" ><?= $observasi['bentuk_perilaku_selamat']; ?></div>
        <div class="section-content" style="font-weight: bold;">Tindak lanjut Steering Committee? </div>
        <div class="section-content" ><?= $observasi['tindak_lanjut'] == 1 ? 'Ya' : 'Tidak'; ?></div>
        
      </div>
</body>

</html>
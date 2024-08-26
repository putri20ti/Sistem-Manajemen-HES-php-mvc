<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Insiden Kerja</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #fff; /* Adjusted to match the background color of the header */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header img {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        h3 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 12px;
        }

        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .center-text {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="<?= base_url('/assets/img/gambar/kopsurat2.jpg'); ?>" alt="PT. REZEKI SURYA INTIMAKMUR">
        </div>
        <div class="content">
            <h3>Data Insiden Kerja</h3>
            <table>
                <thead>
                    <tr>
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
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($insiden_kerja as $insiden): ?>
                    <tr>
                        <td class="center-text"><?= $no++; ?></td>
                        <td class="center-text"><?= $insiden['tanggal']; ?></td>
                        <td><?= $insiden['nama_karyawan']; ?></td>
                        <td><?= $insiden['nobadge']; ?></td>
                        <td><?= $insiden['jabatan']; ?></td>
                        <td><?= $insiden['uraian']; ?></td>
                        <td><?= $insiden['penyebab']; ?></td>
                        <td><?= $insiden['tingkat_insiden']; ?></td>
                        <td><?= $insiden['nlti']; ?></td>
                        <td><?= $insiden['tli']; ?></td>
                        <td class="center-text"><?= $insiden['day_lost']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<table id="datatable" class="table data-tables table-striped">
    <thead>
        <tr class="ligth">
            <th>Bulan</th>
            <th>Total Observasi</th>
            <th>Perilaku Selamat</th>
            <th>Perilaku Beresiko</th>
        </tr>
    </thead>
    <tbody>
    <?php $no = 1; ?>
        <?php foreach ($observasi as $us): ?>
            <tr data-tahun="<?= date('Y', strtotime($us['tanggal'])); ?>">
            <td><?= $no++; ?></td>
                <td><?= date('F', strtotime($us['tanggal'])); ?></td>
                <td><?= $us['total_observasi']; ?></td>
                <td><?= $us['selamat']; ?></td>
                <td><?= $us['beresiko']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

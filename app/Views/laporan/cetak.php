<?= $this->extend('temp/cetak/index'); ?>
<?= $this->section("table"); ?>

<table class="table table-bordered" id="table" width="100%" colspacing="0">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Tahun</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Nilai</th>
            <th class="text-center">Rangking</th>
            <th class="text-center">Status</th>
            <th class="text-center">Periode</th>
            <th class="text-center">Waktu Terima</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0;
        // dd($dataPeserta);
        foreach ($peserta as $dt) : ?>
            <tr>
                <td class="text-center"><?= ++$no; ?></td>
                <td><?= $dt['tahun']; ?></td>
                <td><?= $dt['nisn']; ?></td>
                <td><?= $dt['nama_lengkap']; ?></td>
                <td><?= $dt['kriteria_nilai']; ?></td>
                <td><?= $dt['rangking']; ?></td>
                <td><?= $dt['status']; ?></td>
                <td><?= 'Periode ' . $dt['periode']; ?></td>
                <td><?= $dt['tanggalTerima']; ?></td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection(); ?>
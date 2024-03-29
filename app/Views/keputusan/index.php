<?= $this->extend('/temp/index'); ?>
<?= $this->section("content"); ?>

<div class="row">
    <div class="col">
        <div class="card  shadow">
            <div class="card-header">
                <h3><?= $meta['title']; ?></h3>
            </div>
            <div id="data" class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered" width="100%" colspacing="0">
                        <thead>
                            <tr class="align-middle">
                                <th class="text-center">Rangking</th>
                                <th>NISN</td>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</td>
                                <th>Alamat</td>
                                <th>Nilai Akhir</td>
                                <th>Keputusan</td>
                                <th>Periode</th>
                                <th>Tanggal Terima Bantuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rank = 1;
                            foreach ($peserta as $ps) :
                            ?>
                                <tr>
                                    <td class="text-center "><span class="badge bg-success rounded-circle p-2"><?= $rank++; ?></span></td>
                                    <td><?= $ps['nisn'] ?></td>
                                    <td><?= $ps['nama_lengkap'] ?></td>
                                    <td><?= $ps['jenis_kelamin'] ?></td>
                                    <td><?= $ps['alamat'] ?></td>
                                    <td><?= $ps['kriteria_nilai']; ?></td>
                                    <td><span class="badge <?= $ps['status'] == 'Mendapatkan Bantuan' ? 'bg-success' : 'bg-danger'; ?>"><?= $ps['status']; ?></span></td>
                                    <td><?= $ps['periode']; ?></td>
                                    <td><?= $ps['tanggalTerima']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
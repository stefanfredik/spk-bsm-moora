<div class="table-responsive">
    <table class="table table-bordered" id="<?= $meta['url']; ?>" width="100%" colspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kriteria</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Cost/Benefit</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;

            foreach ($kriteria as $dt) :  ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $dt['kriteria']; ?></td>
                    <td><?= $dt['nilai']; ?></td>
                    <td><?= $dt["keterangan"]; ?></td>
                    <td><?= $dt["type"]; ?></td>
                    <td style="text-align: center" width="120px">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a onclick="hapus(event,this)" class="btn btn-danger" href="/<?= $meta['url']; ?>/delete/<?= $dt['id']; ?>"><i class="bi bi-trash mr-2"></i></a>
                            <a onclick="edit(event,this)" class="btn  btn-primary" href="/<?= $meta['url']; ?>/get/<?= $dt['id']; ?>"><i class="bi bi-pencil-square mr-2"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
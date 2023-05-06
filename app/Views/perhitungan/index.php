<?= $this->extend('/temp/index'); ?>
<?= $this->section("content"); ?>
<div class="row">
    <div class="col">
        <div class="card">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Data Peserta</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Perhitungan</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active p-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <?= $this->include("perhitungan/data"); ?>
                </div>
                <div class="tab-pane fade p-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <?= $this->include("perhitungan/perhitungan"); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
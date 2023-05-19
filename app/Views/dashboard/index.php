<?= $this->extend("temp/index"); ?>
<?= $this->section("content"); ?>

<div class="row text-center mb-5">
    <div class="bg-white text-black m-3 p-3 rounded">
        <h2 class="">Halo <?= user()->nama_user ?></h2>
        <h4 class="fw-bold">Selamat datang di <?= APP_DESC; ?></h4>
        <img width="100" class="img-fluid" src="/assets/img/logo.png" alt="">
    </div>
</div>

<?php
if (in_groups('admin')) echo view("/dashboard/dashboard/admin");
if (in_groups('kepala-sekolah')) echo view("/dashboard/dashboard/kepalasekolah");
?>

<?= $this->endSection(); ?>
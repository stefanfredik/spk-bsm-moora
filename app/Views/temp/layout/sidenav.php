<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="text-center my-2">
            <img width="80" class="img-fluid my-2" src="/assets/img/logo.png" alt="">
            <p class="fw-bold">SDI GOLO BOMBONG</p>
        </div>
        <hr class="mx-3">

        <?php
        if (in_groups('admin')) echo view("/temp/layout/sidenav/admin");
        if (in_groups('kepala-sekolah'))  echo view("/temp/layout/sidenav/kepalasekolah");
        ?>

    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title"><?= user()->nama_user ?></div>
        </div>
    </div>

</nav>
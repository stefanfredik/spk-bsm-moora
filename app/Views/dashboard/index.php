<?= $this->extend("temp/index"); ?>
<?= $this->section("content"); ?>
<div class="row">
    <div class="col-xl-3 mb-4">
        <!-- Dashboard example card 1-->
        <a class="card lift h-100" href="/siswa">
            <div class="card-body d-flex justify-content-center flex-column">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <i class="feather-xl text-primary mb-3" data-feather="package"></i>
                        <h5>Data Kriteria</h5>
                        <div class="text-muted small">Data siswa yang akan jadi peserta penerima bantuan.</div>
                    </div>
                    <img src="/sbadmin/assets/img/illustrations/browser-stats.svg" alt="..." style="width: 8rem" />
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 mb-4">
        <!-- Dashboard example card 1-->
        <a class="card lift h-100" href="/kriteria">
            <div class="card-body d-flex justify-content-center flex-column">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <i class="feather-xl text-primary mb-3" data-feather="package"></i>
                        <h5>Data Kriteria</h5>
                        <div class="text-muted small">Data Kriteria Penerima Bantuan</div>
                    </div>
                    <img src="/sbadmin/assets/img/illustrations/browser-stats.svg" alt="..." style="width: 8rem" />
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 mb-4">
        <!-- Dashboard example card 2-->
        <a class="card lift h-100" href="/subkriteria">
            <div class="card-body d-flex justify-content-center flex-column">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <i class="feather-xl text-secondary mb-3" data-feather="book"></i>
                        <h5>Data Sub Kriteria</h5>
                        <div class="text-muted small">Data Subkriteria Dari Kriteria Penerima Bantuan</div>
                    </div>
                    <img src="/sbadmin/assets/img/illustrations/processing.svg" alt="..." style="width: 8rem" />
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 mb-4">
        <!-- Dashboard example card 3-->
        <a class="card lift h-100" href="/peserta">
            <div class="card-body d-flex justify-content-center flex-column">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <i class="feather-xl text-green mb-3" data-feather="layout"></i>
                        <h5>Data Peserta</h5>
                        <div class="text-muted small">Data peserta penerima bantuan.</div>
                    </div>
                    <img src="/sbadmin/assets/img/illustrations/windows.svg" alt="..." style="width: 8rem" />
                </div>
            </div>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-xl-4 mb-4">
        <!-- Dashboard example card 1-->
        <a class="card lift h-100" href="/perhitungan">
            <div class="card-body d-flex justify-content-center flex-column">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <i class="feather-xl text-primary mb-3" data-feather="package"></i>
                        <h5>Data Perhitungan</h5>
                        <div class="text-muted small">Data perhitungan kriteria dari peserta penerima</div>
                    </div>
                    <img src="/sbadmin/assets/img/illustrations/browser-stats.svg" alt="..." style="width: 8rem" />
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-4 mb-4">
        <!-- Dashboard example card 2-->
        <a class="card lift h-100" href="/keputusan">
            <div class="card-body d-flex justify-content-center flex-column">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <i class="feather-xl text-secondary mb-3" data-feather="book"></i>
                        <h5>Data Keputusan</h5>
                        <div class="text-muted small">Data keputusan peserta penerima bantuan.</div>
                    </div>
                    <img src="/sbadmin/assets/img/illustrations/processing.svg" alt="..." style="width: 8rem" />
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-4 mb-4">
        <!-- Dashboard example card 3-->
        <a class="card lift h-100" href="/laporan">
            <div class="card-body d-flex justify-content-center flex-column">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <i class="feather-xl text-green mb-3" data-feather="layout"></i>
                        <h5>Laporan</h5>
                        <div class="text-muted small">Laporan Penerima Bantuan</div>
                    </div>
                    <img src="/sbadmin/assets/img/illustrations/windows.svg" alt="..." style="width: 8rem" />
                </div>
            </div>
        </a>
    </div>
</div>
<?= $this->endSection(); ?>
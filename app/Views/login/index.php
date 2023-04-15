<!DOCTYPE html>
<html lang="en">
<?= $this->include("temp/layout/head"); ?>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                            <!-- Social login form-->
                            <div class="card my-5">
                                <div class="card-body p-5 text-center">
                                    <div class="h3 fw-light mb-3">Halaman Login</div>
                                    <div>Silahkan login menggunakan akun yang sudah terdaftar.</div>
                                    <div class="text-start">
                                        <?= view('Myth\Auth\Views\_message_block') ?>
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body p-5">
                                    <!-- Login form-->
                                    <form action="<?= url_to('login') ?>" method="POST" role="form">
                                        <!-- Form Group (email address)-->
                                        <?= csrf_field() ?>
                                        <div class="mb-3">
                                            <label class="text-gray-600 small" for="emailExample">Username</label>
                                            <input value="<?= old('login'); ?>" class="form-control form-control-solid <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="username" name="login" type="text" placeholder="Masukan Username" />
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="text-gray-600 small" for="passwordExample">Password</label>
                                            <input class="form-control form-control-solid <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="password" name="password" placeholder="Masukan Password" />
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>


                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <input class="btn btn-primary" type="submit" value="Login">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <?= $this->include("temp/layout/footer"); ?>
        </div>
    </div>
    <?= $this->include("/temp/layout/sbscript"); ?>
</body>

</html>
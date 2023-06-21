<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/home/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="/home/css/style.css">

    <title>Halaman Login | <?= APP_SLUG; ?></title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/home/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center ">
                        <div class="col-md-8  p-3 rounded shadow">
                            <div class="mb-4 text-center">
                                <img width="100" class="img-fluid mb-2" src="/assets/img/logo.png" alt="">
                                <hr>
                                <h3>Halaman Login</h3>
                                <p class="mb-4">Silahkan login menggunakan username dan password yang telah didaftarkan.</p>
                                <div class="text-start">
                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                </div>
                            </div>
                            <form action="<?= url_to('login') ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input required name="login" type="text" class="form-control  <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="username">
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                </div>

                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input required name="password" type="password" class="form-control" id="password">
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                </div>

                                <!-- <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div> -->

                                <input type="submit" value="Log In" class="btn btn-block btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="/home/js/jquery-3.3.1.min.js"></script>
    <script src="/home/js/popper.min.js"></script>
    <script src="/home/js/bootstrap.min.js"></script>
    <script src="/home/js/main.js"></script>
</body>

</html>
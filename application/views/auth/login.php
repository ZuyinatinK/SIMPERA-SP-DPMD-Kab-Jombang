<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="<?= base_url() ?>assets/assets/assets/assets_dash/css/style.css" rel="stylesheet">

</head>

<body class="vh-100" style="background-color: green;">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-2">
                                        <img style="width:42%" src="<?= base_url() ?>assets/assets/assets/assets_dash/images/logologin.png" class="image" alt="">
                                    </div>
                                    <!-- <h2 class="text-center mb-4">SIPERA-SP</h2> -->
                                    <img class="mb-4" style="width:40%; margin-left: 130px;" src="<?= base_url() ?>assets/assets/assets/assets_dash/images/login_logo.png" class="image" alt="">
                                    <h4 class="text-center mb-2">Welcome, Log in your account !</h4>
                                    <form method="POST" action="<?= base_url( 'auth')?>">
                                        <div class="mb-3">
                                            <label class="mb-1" style="font-size: 15px;"><strong>Email</strong></label>
                                            <input type="email" class="form-control" style="border:2px solid green;" id="email" name='email'
                                                value="<?= set_value('email');?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1" style="font-size: 15px;"><strong>Password</strong></label>
                                            <input type="password" style="border:2px solid green;" id="password" name="password" class="form-control">
                                        </div>
                                        <hr>
                                        <br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success btn-block" style="font-size: 15px;">Log in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/global/global.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/dlabnav-init.js"></script>
</body>

</html>
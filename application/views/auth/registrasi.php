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
    <title><?= $title; ?></title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="<?= base_url() ?>assets/assets/assets/assets_dash/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="images/logo-full.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <?php if(validation_errors()):?>
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            class="me-2">
                                            <polygon
                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                            </polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line>
                                            <line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                        <strong>Error!</strong> Teliti Data Anda
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="btn-close">
                                        </button>
                                    </div>
                                    <?php endif;?>
                                    <?php if($this->session->flashdata('message')):?>
                                    <div class="alert alert-success alert-dismissible fade show">
                                        <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            class="me-2">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                        <strong>Success!</strong> Tunggu Persetujuan
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="btn-close">
                                        </button>
                                    </div>
                                    <?php endif;?>

                                    <form method="POST" action="<?= base_url( 'auth/registrasi')?>">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Nama</strong></label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Nama" value="<?= set_value('nama');?>">
                                            <?= form_error('nama', '<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" id="email" name='email'
                                                placeholder="hello@example.com" value="<?= set_value('email');?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password1" id="password1" name="password1"
                                                class="form-control">
                                            <?= form_error('password1', '<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password2" id="password2" name="password2"
                                                class="form-control">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary"
                                                href="<?= site_url('Auth') ?>">Sign in</a></p>
                                    </div>
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
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/custom.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/dlabnav-init.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/styleSwitcher.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

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
    <title>Admin Dashboard Sipera-SP - Pemerintah Kabupaten Jombang</title>

    <!-- Datatable -->
    <link href="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ?>assets/assets/img/logo.png">
    <link rel="stylesheet" href="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/chartist/css/chartist.min.css">

    <!-- Daterange picker -->
    <link href="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/bootstrap-daterangepicker/daterangepicker.css"
        rel="stylesheet">
    <!-- Clockpicker -->
    <link href="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/clockpicker/css/bootstrap-clockpicker.min.css"
        rel="stylesheet">
    <!-- asColorpicker -->
    <link href="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/jquery-asColorPicker/css/asColorPicker.min.css"
        rel="stylesheet">
    <!-- Material color picker -->
    <link
        href="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet">

    <!-- Pick date -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/pickadate/themes/default.date.css">
    <link href="../icon.css?family=Material+Icons" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets/assets/assets_dash/css/style.css" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a class="brand-logo">
                <div class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <img src="<?= base_url() ?>assets/assets/img/logo.png" width="50" alt="">              
                </div>
                <div class="brand-title">
                <img class="mb-4" style="width: 135px;" src="<?= base_url() ?>assets/assets/assets/assets_dash/images/login_logo.png" class="image" alt="">
                    <!-- <h2 class="">Sipera-SP</h2>
                    <span class="brand-sub-title">Dinas Peternakan</span> -->
                </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <!-- <div class="dashboard_bar">
                                Sistem Pengendalian Pemeliharaan Sarana Prasarana
                            </div> -->
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown  header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="<?= base_url('assets/assets/assets/assets_dash/images/profile/'). $user['foto'];?>" width="56" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="<?= site_url('home/profil') ?>" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="<?= base_url('auth/logout');?>" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="<?= site_url('dashboard')?>" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('TabelUser')?>" class="" aria-expanded="false">
                            <i class="fas fa-user-check"></i>
                            <span class="nav-text">User</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-chart-line"></i>
                            <span class="nav-text">Dataset</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= site_url('tabelAC')?>">AC</a></li>
                            <li><a href="<?= site_url('tabelKendaraan')?>">Kendaraan</a></li>
                            <li><a href="<?= site_url('tabelPengolahData')?>">Pengolah Data</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= site_url('about')?>" aria-expanded="false">
                            <i class="fas fa-info-circle"></i>
                            <span class="nav-text">About</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
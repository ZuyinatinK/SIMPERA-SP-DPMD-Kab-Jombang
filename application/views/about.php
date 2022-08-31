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
                                    <img src="<?= base_url('assets/assets/assets/assets_dash/images/profile/profile.jpg')?>" width="56" alt="">
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
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">About</a></li>
            </ol>
        </div>
                <!-- row -->
                <!-- Row starts -->
                <div class="row">
                    <!-- Column starts -->
                    <div class="col-xl-6">
                        <div class="card" style="height: 20rem;">
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <div class="default-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#profile"><i class="la la-user me-2"></i> Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#contact"><i class="la la-phone me-2"></i> Contact</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="profile" role="tabpanel">
                                            <div class="pt-4">
                                            <h4 style="font-size: 20px;">Sistem Pengendalian Pemeliharaan Sarana Prasarana</h4>
                                                <p>Sistem Informasi ini digunakan untuk monitoring pemeliharaan asset dan service asset Dinas Pemberdayaan 
                                                    Masyarakat dan Desa Kabupaten Jombang, guna menunjang kegiatan operasionalnya.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact">
                                            <div class="pt-4">
                                                <h3>Contact Us</h3>
                                                <p>
                                                Jl. Pattimura No.1 A, Sengon, <br>
                                                Jombatan, Kec. Jombang,<br> 
                                                Kabupaten Jombang, Jawa Timur 61419 <br><br>
                                                <strong>Phone:</strong> (0321) 861177<br>
                                                <strong>Website:</strong> <a href="https://www.jombangkab.go.id/">jombangkab.go.id</a><br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Data AC</h4>
                                <p class="m-0 subtitle">Data AC menyimpan data-data AC serta history service AC yang
                                    terdapat pada kantor Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Jombang.
                                </p>
                            </div>
                            <div class="card-body">
                                <!-- Default accordion -->
								<div class="accordion accordion-primary" id="accordion-one">
                                <h5>Keterangan untuk menginputkan data sebagai berikut.</h5>
                                    <div class="accordion-item">
                                        <div class="accordion-header  rounded-lg" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne" aria-expanded="true" role="button">
                                            <span class="accordion-header-icon"></span>
                                            <span class="accordion-header-text">No Registrasi</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
                                            <div class="accordion-body-text">
                                                Pastikan anda mengunputkan nomor Registrasi dengan benar. Inputkan sebagai contoh: 000026
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo" role="button" aria-expanded="true">
                                            <span class="accordion-header-text">Kode Barang</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion-one">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan kode barang dengan benar. Kode Barang ini akan digunakan untuk menyimpan kode AC. Inputkan sebagai contoh: 02.05.02.04.004
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree" role="button" aria-expanded="true">
                                            <span class="accordion-header-text">User</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion-one">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan nama user dengan benar. User disini merupakan nama penanggung jawab dari setiap AC yang dipakai oleh karyawan kantor. Inputkan sebagai contoh: Drs. Bambang Winanto.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="headingFour" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-controls="collapseFour" role="button" aria-expanded="true">
                                            <span class="accordion-header-text">Nama Barang</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion-one">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan nama barang dengan benar. Nama barang berisikan nama merk AC yang berada pada kantor DPMD. Inputkan sebagai contoh: AC Split.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="headingFive" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-controls="collapseFive" role="button" aria-expanded="true">
                                            <span class="accordion-header-text">Tanggal Masuk</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accosrdion-one">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan tanggal masuk barang dengan benar. Pilihlah tanggal-bulan-tahun yang sesuai dari penginputan kalender yang telah disediakan.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="headingSix" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-controls="collapseSix" role="button" aria-expanded="true">
                                            <span class="accordion-header-text">Tanggal Service</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#accordion-one">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan tanggal service barang dengan benar. Pilihlah tanggal-bulan-tahun yang sesuai dengan hari service yang telah ditentukan dengan menginputkan di kalender yang telah disediakan.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="headingSeven" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-controls="collapseSeven" role="button" aria-expanded="true">
                                            <span class="accordion-header-text">Keterangan</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-bs-parent="#accordion-one">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan keterangan dengan benar. Keterangan menjelaskan tentang nama service AC yang akan dilakukan. Inputkan sebagai contoh: Isi freon.
                                            </div>
                                        </div>
                                    </div>
								</div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card" style="height: 50rem;">
                            <div class="card-header d-block">
                                <h4 class="card-title">Data Kendaraan</h4>
                                <p class="m-0 subtitle">Data Kendaraan menyimpan data-data kendaraan roda dua dan roda empat yang
                                    dimiliki oleh kantor Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Jombang.
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordion-danger-solid" id="accordion-two">
                                    <h5>Keterangan untuk menginputkan data sebagai berikut.</h5>
                                    <div class="accordion-item">
                                        <div class="accordion-header  rounded-lg" id="accord-2One" data-bs-toggle="collapse" data-bs-target="#collapse2One" aria-controls="collapse2One" aria-expanded="true" role="button">
                                            <span class="accordion-header-text">Kode Barang</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapse2One" class="collapse accordion__body show" aria-labelledby="accord-2One" data-bs-parent="#accordion-two">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan kode barang dengan benar. Kode Barang ini akan digunakan untuk menyimpan kode kendaraan. Inputkan sebagai contoh: 02.02.01.01.003
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="accord-2Two" data-bs-toggle="collapse" data-bs-target="#collapse2Two" aria-controls="collapse2Two" aria-expanded="true" role="button">
                                            <span class="accordion-header-text">No Registrasi</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapse2Two" class="collapse accordion__body" aria-labelledby="accord-2Two" data-bs-parent="#accordion-two">
                                            <div class="accordion-body-text">
                                            Pastikan anda mengunputkan nomor Registrasi dengan benar. Inputkan sebagai contoh: 000001.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="accord-2Three" data-bs-toggle="collapse" data-bs-target="#collapse2Three" aria-controls="collapse2Three" aria-expanded="true" role="button">
                                            <span class="accordion-header-text">No Polisi</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapse2Three" class="collapse accordion__body" aria-labelledby="accord-2Three" data-bs-parent="#accordion-two">
                                            <div class="accordion-body-text">
                                            Pastikan anda menginputkan nomor polisi dengan benar. Nomor polisi merupakan plat nomor kendaraan baik roda dua dan roda empat. Inputkan sebagai contoh: S 1499 OP
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="accord-2Four" data-bs-toggle="collapse" data-bs-target="#collapse2Four" aria-controls="collapse2Four" aria-expanded="true" role="button">
                                            <span class="accordion-header-text">User</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapse2Four" class="collapse accordion__body" aria-labelledby="accord-2Four" data-bs-parent="#accordion-two">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan nama user dengan benar. User disini merupakan nama penanggung jawab dari setiap kendaraan yang dipakai oleh karyawan kantor. Inputkan sebagai contoh: Drs. Bambang Winanto.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="accord-2Five" data-bs-toggle="collapse" data-bs-target="#collapse2Five" aria-controls="collapse2Five" aria-expanded="true" role="button">
                                            <span class="accordion-header-text">Jenis Kendaraan</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapse2Five" class="collapse accordion__body" aria-labelledby="accord-2Five" data-bs-parent="#accordion-two">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan jenis kendaraan dengan benar. Jenis kendaraan terdiri dari roda dua dan roda empat. Inputkan salah satu dari select option yang telah disediakan.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="accord-2Six" data-bs-toggle="collapse" data-bs-target="#collapse2Six" aria-controls="collapse2Six" aria-expanded="true" role="button">
                                            <span class="accordion-header-text">Tanggal Masuk</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapse2Six" class="collapse accordion__body" aria-labelledby="accord-2Six" data-bs-parent="#accordion-two">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan tanggal masuk barang dengan benar. Pilihlah tanggal-bulan-tahun yang sesuai dari penginputan kalender yang telah disediakan.
                                            </div>
                                        </div>
                                    </div>
								</div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Pengolah Data</h4>
                                <p class="m-0 subtitle">Pengolah Data menyimpan data-data elektronik serta history service elektronik yang 
                                    terdapat pada kantor Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Jombang.</p>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordion-danger-solid" id="accordion-three">
                                <h5>Keterangan untuk menginputkan data sebagai berikut.</h5>
                                    <div class="accordion-item">
                                        <div class="accordion-header  rounded-lg" id="accord-2Eight" data-bs-toggle="collapse" data-bs-target="#collapse2Eight" aria-controls="collapse2Eight" aria-expanded="true" role="button">
                                            <span class="accordion-header-text">Kode Barang</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapse2Eight" class="collapse accordion__body show" aria-labelledby="accord-2Eight" data-bs-parent="#accordion-three">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan kode barang dengan benar. Kode Barang ini akan digunakan untuk menyimpan kode barang elektronik. Inputkan sebagai contoh: 02.10.01.02.001
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="accord-2Nine" data-bs-toggle="collapse" data-bs-target="#collapse2Nine" aria-controls="collapse2Nine" aria-expanded="true" role="button">
                                            <span class="accordion-header-text">No Registrasi</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapse2Nine" class="collapse accordion__body" aria-labelledby="accord-2Nine" data-bs-parent="#accordion-two">
                                            <div class="accordion-body-text">
                                            Pastikan anda mengunputkan nomor Registrasi dengan benar. Inputkan sebagai contoh: 000008.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="accord-2Ten" data-bs-toggle="collapse" data-bs-target="#collapse2Ten" aria-controls="collapse2Ten" aria-expanded="true" role="button">
                                            <span class="accordion-header-text">User</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapse2Ten" class="collapse accordion__body" aria-labelledby="accord-2Ten" data-bs-parent="#accordion-two">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan nama user dengan benar. User disini merupakan nama penanggung jawab dari setiap barang elektronik yang dipakai oleh karyawan kantor. Inputkan sebagai contoh: Drs. Bambang Winanto.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="accord-2Eleven" data-bs-toggle="collapse" data-bs-target="#collapse2Eleven" aria-controls="collapse2Eleven" aria-expanded="true" role="button">
                                            <span class="accordion-header-text">Nama Barang</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapse2Eleven" class="collapse accordion__body" aria-labelledby="accord-2Eleven" data-bs-parent="#accordion-two">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan nama barang dengan benar. Nama barang berisikan nama elektronik yang berada pada kantor DPMD. Inputkan sebagai contoh: Laptop atau PC.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="accord-2	Twelve" data-bs-toggle="collapse" data-bs-target="#collapse2Twelve" aria-controls="collapse2Twelve" aria-expanded="true" role="button">
                                            <span class="accordion-header-text">Tanggal Masuk</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapse2Twelve" class="collapse accordion__body" aria-labelledby="accord-2Twelve" data-bs-parent="#accordion-two">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan tanggal masuk barang dengan benar. Pilihlah tanggal-bulan-tahun yang sesuai dari penginputan kalender yang telah disediakan.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="accord-2Thirteen" data-bs-toggle="collapse" data-bs-target="#collapse2Thirteen" aria-controls="collapse2Thirteen" aria-expanded="true" role="button">
                                            <span class="accordion-header-text">Tanggal Service</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapse2Thirteen" class="collapse accordion__body" aria-labelledby="accord-2Thirteen" data-bs-parent="#accordion-two">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan tanggal service barang dengan benar. Pilihlah tanggal-bulan-tahun yang sesuai dengan hari service yang telah ditentukan dengan menginputkan di kalender yang telah disediakan.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed rounded-lg" id="accord-2Fourteen" data-bs-toggle="collapse" data-bs-target="#collapse2Fourteen" aria-controls="collapse2Fourteen" aria-expanded="true" role="button">
                                            <span class="accordion-header-text">Keterangan</span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapse2Fourteen" class="collapse accordion__body" aria-labelledby="accord-2Fourteen" data-bs-parent="#accordion-two">
                                            <div class="accordion-body-text">
                                                Pastikan anda menginputkan keterangan dengan benar. Keterangan menjelaskan tentang nama service PC atau Laptop yang akan dilakukan. Inputkan sebagai contoh: Install ulang windows, Service Virus, Ganti Hardisk, dsb.
                                            </div>
                                        </div>
                                    </div>
								</div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <!-- Column ends -->
                    <!-- Column starts -->
                </div>
                <!-- Row ends -->
            </div>
            <!-- container ends -->
</div>
        <!--**********************************
            Content body end
        ***********************************-->
<?php include 'footer.php'; ?>
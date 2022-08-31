<?php
    function format_indo($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $tahun = substr($date, 0, 4);               
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1]. " ". $tahun;
    return($result);
}; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sipera-SP - Pemerintah Kabupaten Jombang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/assets/img/logo.png" rel="icon">
    <link href="<?= base_url() ?>assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/assets/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/assets/stylejam.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body onload="initClock()">
    <div class="popup-screen">
        <div class="popup-box">
            <i class="fas fa-times close-btn"></i>
            <h2>Penting !!!</h2>
            <p align="center">Periksa selalu tanggal service asset, agar jadwal service tidak terlewatkan </p>
            <!-- <a href="#" class="btn">Subscribe</a> -->
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
        <!-- <title>Bootstrap</title> -->
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
    <symbol id="facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
    </symbol>
    <symbol id="instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
    </symbol>
    <symbol id="twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
    </symbol>
    </svg>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <img src="<?= base_url() ?>assets/assets/img/si2.png"></img>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#services">Service</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#monitoring">Monitoring</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="<?=site_url('auth')?>" target="_blank">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown"> <span>Sistem Pengendalian Pemeliharaan Sarana Prasarana</span></h2>
                    <p class="animate__animated animate__fadeInUp">Sistem Informasi ini digunakan untuk monitoring pemeliharaan asset dan service asset Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Jombang, guna menunjang kegiatan operasionalnya.</p>
                    <!-- <a href="<?=site_url('auth')?>" target="_blank" class="btn-get-started animate__animated animate__fadeInUp">Login</a> -->
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">
        
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- <div class="col-md-4 d-flex align-items-center" data-aos="fade-up">
                    </div> -->

                    <div class="col-sm-1 d-flex align-items-center justify-content-center" data-aos="fade-up">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <!--digital clock start-->
                        <div class="datetime">
                            <div class="date">
                                <span id="dayname">Day</span>,
                                <span id="month">Month</span>
                                <span id="daynum">00</span>,
                                <span id="year">Year</span>
                            </div>
                            <div class="time">
                                <span id="hour">00</span>:
                                <span id="minutes">00</span>:
                                <span id="seconds">00</span>
                                <span id="period">AM</span>
                            </div>
                        </div>
                        <!--digital clock end-->
                    </div>
                    <!-- <div class="col-4 d-flex align-items-center" data-aos="fade-up"> -->
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Services Section ======= -->
        <section class="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-1"></div>
                    <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class="bx bxs-car"></i></div>
                            <h4 class="title"><a href="">Kendaraan</a></h4>
                            <h4 class="title"><a href=""><?php echo $jmlhkendaraan ;?></a></h4>
                            <p class="description">Jumlah Asset Tersedia</p>
                        </div>
                    </div>
                    
                    <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class="bx bxs-thermometer"></i></div>
                            <h4 class="title"><a href="">AC</a></h4>
                            <h4 class="title"><a href=""><?php echo $jmlhac ;?></a></h4>
                            <p class="description">Jumlah Asset Tersedia</p>
                        </div>
                    </div>

                    <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class="bx bx-laptop"></i></div>
                            <h4 class="title"><a href="">Pengolah Data</a></h4>
                            <h4 class="title"><a href=""><?php echo $jmlhelektronik ;?></a></h4>
                            <p class="description">Jumlah Asset Tersedia</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="about" class="why-us section-bg">
            <div data-aos="fade-up" date-aos-delay="200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 video-box">
                            <img src="<?= base_url() ?>assets/assets/img/dmpd2.jpg" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=OKbxZQ3OBiY" class="venobox play-btn mb-4"
                                data-vbtype="video" data-autoplay="true"></a>
                        </div>

                        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                            <div class="icon-box">
                                <div class="icon"><i class="bx bxs-group"></i></div>
                                <h4 class="title"><a href="">About</a></h4>
                                <p class="description">Sistem Informasi ini digunakan untuk monitoring pemeliharaan asset dan service asset Dinas Pemberdayaan Masyarakat Kabupaten Jombang, guna menunjang kegiatan operasionalnya.</p>
                            </div>

                            <!-- <div class="icon-box">
                                <div class="icon"><i class="bx bx-gift"></i></div>
                                <h4 class="title"><a href="">Nemo Enim</a></h4>
                                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque</p>
                            </div> -->

                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Features Section ======= -->
        <section id="monitoring" class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Monitoring</h2>
                    <p>Asset Yang Mendekati Waktu Service.</p>
                </div>
                
                <!-- =========Data Kendaraan========= -->
                
                <div class="row" data-aos="fade-up">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Kendaraan</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="border-color: rgba(30, 67, 86, 0.8);" id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr class="text-white" style="background-color: rgba(30, 67, 86, 0.8); font-size: 14px; text-align: center;">
                                                <th>No</th>
                                                <th>Kode Barang</th>
                                                <th>No Registrasi</th>
                                                <th>No Polisi</th>
                                                <th>User</th>
                                                <th>Jenis Kendaraan</th>
                                                <th>Tanggal Masuk Barang</th>
                                                <th>Service Selanjutnya</th>
                                                <th>Keterangan</th>
                                                <th>Tanggal Sekarang</th>
                                                <th>Waktu Menuju Service</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 0;
                                        foreach ($row3->result_array() as $key => $kdn) { 
                                        $i++; ?>
                                            <tr style="font-size: 14px; text-align: center;">
                                                <td>
                                                    <?php echo $i; ?>
                                                </td>
                                                <td>
                                                    <?php echo $kdn['kode_barang']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $kdn['no_registrasi']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $kdn['no_polisi']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $kdn['user']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $kdn['jenis_kendaraan']; ?>
                                                </td>
                                                <td>
                                                    <?php echo format_indo($kdn['tgl_masuk']); ?>
                                                </td>
                                                <td>
                                                    <?php echo format_indo($kdn['tgl_service']); ?>
                                                </td>
                                                <td>
                                                    <?php echo $kdn['keterangan']; ?>
                                                </td>
                                                <td>
                                                    <?php echo format_indo($kdn['tgl_sekarang']); ?>
                                                </td>
                                                <?php if ( $kdn['selisih'] > 30) {?>
                                                <td>
                                                    <p style="background-color:green"><b><?php echo $kdn['selisih']; ?> Hari</b></p>
                                                </td>
                                                    <?php } else if ( $kdn['selisih'] <= 30 && $kdn['selisih'] > 7) {?>
                                                        <td>
                                                            <p style="background-color:yellow"><b><?php echo $kdn['selisih']; ?> Hari</b></p>
                                                        </td>
                                                    <?php } else {?>
                                                <td>
                                                    <p style="background-color:red"><b><?php echo $kdn['selisih']; ?> Hari</b></p>
                                                </td>
                                                <?php }?>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =========Akhir Data Kendaraan========= -->

                <!-- =========Data AC========= -->
                
                <div class="row" data-aos="fade-up">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data AC</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="border-color: rgba(30, 67, 86, 0.8);" id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr class="text-white" style="background-color: rgba(30, 67, 86, 0.8); font-size: 14px; text-align: center;">
                                                <th>No</th>
                                                <th>Kode Barang</th>
                                                <th>No Registrasi</th>
                                                <th>User</th>
                                                <th>Jenis Kendaraan</th>
                                                <th>Tanggal Masuk Barang</th>
                                                <th>Service Selanjutnya</th>
                                                <th>Keterangan</th>
                                                <th>Tanggal Sekarang</th>
                                                <th>Waktu Menuju Service</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 0;
                                        foreach ($row2->result_array() as $key => $ac) { 
                                        $i++; ?>
                                            <tr style="font-size: 14px; text-align: center;">
                                                <td>
                                                    <?php echo $i; ?>
                                                </td>
                                                <td>
                                                    <?php echo $ac['kode_barang']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $ac['no_registrasi']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $ac['user']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $ac['jenis_barang']; ?>
                                                </td>
                                                <td>
                                                    <?php echo format_indo($ac['tgl_masuk']); ?>
                                                </td>
                                                <td>
                                                    <?php echo format_indo($ac['tgl_service']); ?>
                                                </td>
                                                <td>
                                                    <?php echo $ac['keterangan']; ?>
                                                </td>
                                                <td>
                                                    <?php echo format_indo($ac['tgl_sekarang']); ?>
                                                </td>
                                                <?php if ( $ac['selisih'] > 30) {?>
                                                <td>
                                                    <p style="background-color:green"><b><?php echo $ac['selisih']; ?> Hari</b></p>
                                                </td>
                                                    <?php } else if ( $ac['selisih'] <= 30 && $ac['selisih'] > 7) {?>
                                                        <td>
                                                            <p style="background-color:yellow"><b><?php echo $ac['selisih']; ?> Hari</b></p>
                                                        </td>
                                                    <?php } else {?>
                                                <td>
                                                    <p style="background-color:red"><b><?php echo $ac['selisih']; ?> Hari</b></p>
                                                </td>
                                                <?php }?>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =========Akhir Data AC========= -->
                
                <!-- =========Data Pengolah Data========= -->
                
                    <div class="row" data-aos="fade-up">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Barang Pengolah Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="border-color: rgba(30, 67, 86, 0.8);" id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr class="text-white" style="background-color: rgba(30, 67, 86, 0.8); font-size: 14px; text-align: center;">
                                                <th>No</th>
                                                <th>Kode Barang</th>
                                                <th>Nomor Registrasi</th>
                                                <th>User</th>
                                                <th>Jenis Barang</th>
                                                <th>Tanggal Masuk Barang</th>
                                                <th>Service Selanjutnya</th>
                                                <th>Keterangan</th>
                                                <th>Tanggal Sekarang</th>
                                                <th>Waktu Menuju Service</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 0;
                                        foreach ($row->result_array() as $key => $pengolah) { 
                                        $i++; ?>
                                            <tr style="font-size: 14px; text-align: center;">
                                                <td>
                                                    <?php echo $i; ?>
                                                </td>
                                                <td>
                                                    <?php echo $pengolah['kode_barang']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $pengolah['no_registrasi']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $pengolah['user']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $pengolah['jenis_barang']; ?>
                                                </td>
                                                <td>
                                                    <?php echo format_indo($pengolah['tgl_masuk']); ?>
                                                </td>
                                                <td>
                                                    <?php echo format_indo($pengolah['tgl_service']); ?>
                                                </td>
                                                <td>
                                                    <?php echo $pengolah['keterangan']; ?>
                                                </td>
                                                <td>
                                                    <?php echo format_indo($pengolah['tgl_sekarang']); ?>
                                                </td>
                                                <?php if ( $pengolah['selisih'] > 30) {?>
                                                <td>
                                                    <p style="background-color:green"><b><?php echo $pengolah['selisih']; ?> Hari</b></p>
                                                </td>
                                                    <?php } else if ( $pengolah['selisih'] <= 30 && $pengolah['selisih'] > 7) {?>
                                                        <td>
                                                            <p style="background-color:yellow"><b><?php echo $pengolah['selisih']; ?> Hari</b></p>
                                                        </td>
                                                    <?php } else {?>
                                                <td>
                                                    <p style="background-color:red"><b><?php echo $pengolah['selisih']; ?> Hari</b></p>
                                                </td>
                                                <?php }?>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =========Akhir Data Pengolah Data========= -->

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
        <div class="section-title">
                    <h2>Contact Us</h2>
                </div>
            <div class="row">

            <div class="col-lg-6">

                <div class="row">
                <div class="col-md-12">
                    <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>Jl. Pattimura No.1 A, Sengon, Jombatan, Kec. Jombang, 
                        <br> Kabupaten Jombang, Jawa Timur 61419</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                    <i class="bx bx-globe"></i>
                    <h3>Website</h3>
                    <a href="https://www.jombangkab.go.id/">jombangkab.go.id</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>(0321) 861177<br></p>
                    </div>
                </div>
                </div>

            </div>

            <div class="col-lg-6">
                <div class="container-fluid p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2024963.092651445!2d111.16343701357022!3d-7.5743189478201485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785d182677630b%3A0x3739152081f0da9c!2sDINAS%20PEMBERDAYAAN%20MASYARAKAT%20DAN%20DESA%20KABUPATEN%20JOMBANG!5e0!3m2!1sid!2sid!4v1648791077376!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="footer-top">
            <div class="container">
            
                <div class="row">

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4 class = "text-left">Useful Links</h4>
                    <ul>
                    <li><i class="bx bx-chevron-right"></i> <a class="active" href="#hero">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#services">Service</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#monitoring">Monitoring</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="Login">Login</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                    Jl. Pattimura No.1 A, Sengon, <br>
                    Jombatan, Kec. Jombang,<br> 
                    Kabupaten Jombang, Jawa Timur 61419 <br><br>
                    <strong>Phone:</strong> (0321) 861177<br>
                    <strong>Website:</strong> <a href="https://www.jombangkab.go.id/">jombangkab.go.id</a><br>
                    </p>

                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>About Sipera-SP</h3>
                    <p>Sistem Informasi ini digunakan untuk monitoring pemeliharaan asset dan status asset Dinas Pemberdayaan Masyarakat dan Desa (DPMD) guna menunjang kegiatan operasionalnya.</p>
                    <div class="social-links mt-3">
                    <a href="https://www.jombangkab.go.id/" class="website"><i class="bx bx-globe"></i></a>
                    <a href="https://www.youtube.com/watch?v=-9mJFvpBFRs" class="youtube"><i class="bx bxl-youtube"></i></a>
                    <a href="https://instagram.com/dpmd.jombang?utm_medium=copy_link" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
                    </div>
                </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>2022 Pemerintah Kabupaten Jombang - Dinas Pemberdayaan Masyarakat dan Desa</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>2022 Pemerintah Kabupaten Jombang - Dinas Pemberdayaan Masyarakat dan Desa</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer> -->
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/assets/js/main.js"></script>
    <script type="text/javascript">
    const popupScreen = document.querySelector(".popup-screen");
    const popupBox = document.querySelector(".popup-box");
    const closeBtn = document.querySelector(".close-btn");

    window.addEventListener("load", () => {
        setTimeout(() => {
            popupScreen.classList.add("active");
        }, 2000); //Popup the screen in 02 seconds after the page is loaded.
    });

    closeBtn.addEventListener("click", () => {
      popupScreen.classList.remove("active"); //Close the popup screen on click the close button.
      //Create a cookie for a day (to expire within a day) on click the close button.
      document.cookie = "WebsiteName=testWebsite; max-age=" + 24 * 60 * 60; //1 day = 24 hours = 24*60*60
    });

    //Use the created cookie to hide or show the popup screen.
    //const WebsiteCookie = document.cookie.indexOf("WebsiteName=");

    if(WebsiteCookie != -1){
      popupScreen.style.display = "none"; //Hide the popup screen if the cookie is not expired.
    }
    else{
      popupScreen.style.display = "flex"; //Show the popup screen if the cookie is expired.
    }
    </script>
    
    <script type="text/javascript">
    function updateClock(){
        var now = new Date();
        var dname = now.getDay(),
            mo = now.getMonth(),
            dnum = now.getDate(),
            yr = now.getFullYear(),
            hou = now.getHours(),
            min = now.getMinutes(),
            sec = now.getSeconds(),
            pe = "AM";

            if(hou >= 12){
                pe = "PM";
            }
            if(hou == 0){
                hou = 12;
            }
            if(hou > 12){
                hou = hou - 12;
            }

            Number.prototype.pad = function(digits){
                for(var n = this.toString(); n.length < digits; n = 0 + n);
                return n;
            }

            var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juni", "Agustus", "September", "Oktober", "Nopember", "Desember"];
            var week = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
            var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
            var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
            for(var i = 0; i < ids.length; i++)
            document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
        updateClock();
        window.setInterval("updateClock()", 1);
    }
    </script>

</body>

</html>
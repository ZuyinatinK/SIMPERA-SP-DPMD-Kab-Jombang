<?php include 'header.php'; ?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
            </ol>
        </div>
        <div class="col-xl-12">
			<div class="row">

                <!-- row -->
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card tryal-gradient" style="height: 34rem;">
                                <div class="card-body tryal row">
                                    <div class="col-xl-7 col-sm-6">
                                        <h2 style="font-size: 27px; color:black;">Sistem Pengendalian Pemeliharaan Sarana Prasarana</h2>
                                        <br>
                                        <span style="color:black; font-size: 15px;">Sistem Informasi ini digunakan untuk monitoring pemeliharaan asset dan service asset Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Jombang, guna menunjang kegiatan operasionalnya.</span>
                                        <!-- <a href="javascript:void(0);" class="btn btn-rounded  fs-18 font-w500">Try Free Now</a> -->
                                    </div>
                                    <div class="col-xl-5 col-sm-6">
                                        <img src="<?= base_url() ?>assets/assets/assets/assets_dash/images/chart.png" alt="" class="sd-shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>			
                </div>

                <!-- row -->
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-6 col-sm-6">
                                    <div class="card" style="background-color: #D8BFD8;">
                                        <div class="card-header">
                                            <h5 class="card-title">Kendaraan</h5>
                                        </div>
                                        <div class="card-body">
                                            <h2 class="fs-32 font-w700 mb-0"><?php echo $jmlhkendaraan ;?></h2>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                            <div class="card-footer-link mb-4 mb-sm-0">
                                                <p class="card-text text-dark d-inline">Last updated</p>
                                            </div>
                                            <a href="<?= base_url()?>tabelKendaraan" class="btn btn-primary">Go Ahead</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="card" style="background-color: #D8BFD8;">
                                        <div class="card-header">
                                            <h5 class="card-title">AC</h5>
                                        </div>
                                        <div class="card-body">
                                            <h2 class="fs-32 font-w700 mb-0"><?php echo $jmlhac ;?></h2>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                            <div class="card-footer-link mb-4 mb-sm-0">
                                                <p class="card-text text-dark d-inline">Last updated</p>
                                            </div>

                                            <a href="<?= base_url()?>tabelAC" class="btn btn-primary">Go Ahead</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-sm-6">
                                    <div class="card" style="background-color: #D8BFD8;">
                                        <div class="card-header">
                                            <h5 class="card-title">Pengolah Data</h5>
                                        </div>
                                        <div class="card-body">
                                            <h2 class="fs-32 font-w700 mb-0"><?php echo $jmlhelektronik ;?></h2>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                            <div class="card-footer-link mb-4 mb-sm-0">
                                                <p class="card-text text-dark d-inline">Last updated</p>
                                            </div>

                                            <a href="<?= base_url()?>tabelPengolahData" class="btn btn-primary">Go Ahead</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</div>

<?php include 'footer.php'; ?>
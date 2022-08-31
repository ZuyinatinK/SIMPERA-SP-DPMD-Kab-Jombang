<?php include 'header.php'; ?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Detail</a></li>
            </ol>
        </div>
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="<?= base_url('assets/assets/assets/assets_dash/images/profile/'). $user['foto'];?>"
                                        alt=" Admin" class="rounded-circle" width="200">
                                    <div class="mt-3">
                                        <h4><?= $user['nama'];?></h4>
                                        <p class="text-secondary mb-1"><?= $user['email'];?></p>
                                        <p class="text-muted font-size-sm"><?= $user['alamat'];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="header-left">
                                    <div class="dashboard_bar">
                                        Profil
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9">
                                    <?= $user['nama'];?>
                                </div>
                            </div>
                            <hr>
                            <div class=" row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9">
                                    <?= $user['email'];?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-sm-9">
                                    <?= $user['no_telp'];?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9">
                                    <?= $user['alamat'];?>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tabel</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <?php foreach ($user3 as $usr) : ?>
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
                        <div class="card contact-bx item-content">
                            <div class="card-header border-0">
                                <div class="action-dropdown">
                                    <div class="dropdown ">
                                        <div class="btn-link" data-bs-toggle="dropdown">
                                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                                                <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                                                <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body user-profile">
                                <div class="image-bx">
                                    <img src="<?= base_url('assets/assets/assets/assets_dash/images/profile/'). $usr['foto'];?>"
                                        data-src="images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
                                    <span class="active"></span>
                                </div>
                                <div class="media-body user-meta-info">
                                    <h6 class="fs-18 font-w600 my-1"><a href="app-profile.html"
                                            class="text-black user-name"
                                            data-name="Alan Green"><?php echo $usr['nama']; ?></a></h6>
                                    <p class="fs-14 mb-3 user-work" data-occupation="UI Designer">
                                        <?php echo $usr['email']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tabel</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">User Non Aktif</a></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <?php foreach ($user2 as $usr2) : ?>
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
                        <div class="card contact-bx item-content">
                            <div class="card-header border-0">
                                <div class="action-dropdown">
                                    <div class="dropdown ">
                                        <div class="btn-link" data-bs-toggle="dropdown">
                                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                                                <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                                                <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body user-profile">
                                <div class="image-bx">
                                    <img src="<?= base_url('assets/assets/assets/assets_dash/images/profile/'). $usr['foto'];?>"
                                        data-src="images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
                                    <span class="active"></span>
                                </div>
                                <div class="media-body user-meta-info">
                                    <h6 class="fs-18 font-w600 my-1"><a href="app-profile.html"
                                            class="text-black user-name"
                                            data-name="Alan Green"><?php echo $usr2['nama']; ?></a></h6>
                                    <p class="fs-14 mb-3 user-work" data-occupation="UI Designer">
                                        <?php echo $usr2['email']; ?></p>
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fas fa-video"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tabel</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pengolah Data</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h4 class="card-title">Tabel Pengolah Data</h4>
                    </div>

                    <div>
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-lg">Input Data</button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <?php echo form_open_multipart('tabelPengolahData/tambah')?>
                                        <div class="modal-header">
                                            <h5 class="modal-title">Data Pengolah Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="basic-form">
                                                <div class="mb-3 row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="no_registrasi"
                                                            name="no_registrasi" placeholder="No Registrasi">
                                                        <?= form_error('no_registrasi', '<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="kode_barang"
                                                            name="kode_barang" placeholder="Kode Barang">
                                                        <?= form_error('kode_barang', '<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <div class="col-sm-4 mt-2 mt-sm-0">
                                                        <input type="text" class="form-control" id="user"
                                                            name="user" placeholder="User">
                                                    </div>
                                                    <div class="col-sm-4 mt-2 mt-sm-0">
                                                        <input type="text" class="form-control" id="jenis_barang"
                                                            name="jenis_barang" placeholder="Nama Barang">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <div class="col-sm-4 mt-2 mt-sm-0">
                                                        <input id="mdate" name="tgl_masuk" class="form-control" type="text"
                                                            placeholder="Tanggal Masuk">
                                                    </div>
                                                    <div class="col-sm-4 mt-2 mt-sm-0">
                                                        <input id="mdate2" name="tgl_service" class="form-control" type="text"
                                                            placeholder="Tanggal Service">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" rows="4" id="keterangan"
                                                        name="keterangan" placeholder="Keterangan"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger light"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    
                                    <?php echo form_close()?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(validation_errors()):?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" class="me-2">
                        <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                        </polygon>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                    <strong>Error!</strong> Teliti Data Anda
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                </div>
                <?php endif;?>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Barang</th>
                                    <th>No Registrasi</th>
                                    <th>User</th>
                                    <th>Nama Barang</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Tanggal Service</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; foreach ($elektronik as $ac) :  $i++; ?>
                                <tr>
                                    <td><strong><?php echo $i ?></strong></td>
                                    <td><?php echo $ac['kode_barang']; ?></td>
                                    <td><?php echo $ac['no_registrasi']; ?></td>
                                    <td><?php echo $ac['user']; ?></td>
                                    <td><?php echo $ac['jenis_barang']; ?></td>
                                    <td><?php echo $ac['tgl_masuk']; ?></td>
                                    <td><?php echo $ac['tgl_service']; ?></td>
                                    <td><?php echo $ac['keterangan']; ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="<?= base_url();?>tabelPengolahData/edit/<?= $ac['id'];?>"
                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                            <a href="<?= base_url();?>tabelPengolahData/hapus/<?= $ac['id'];?>"
                                                class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- HISTORY -->

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h4 class="card-title">History</h4>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-lg1">Input History</button>
                        <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form method="POST" action="<?= base_url('tabelPengolahData/tambahHistory')?>">
                                        <div class="modal-header">
                                            <h5 class="modal-title">History AC</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="basic-form">
                                                <div class="mb-3 row">
                                                    <div class="col-sm-6">
                                                        <select class="default-select form-control wide mb-3" id="id_AC"
                                                            name="id_elektronik">
                                                            <?php foreach ($elektronik as $kua2) : ?>
                                                            <option value="<?php echo $kua2['kode_barang']; ?>">
                                                                <?php echo $kua2['kode_barang']; ?>
                                                            </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('kode_barang', '<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                                    <div class="col-sm-6 mt-2 mt-sm-0">
                                                        <input name="service" class="default-select form-control wide mb-3"
                                                            placeholder="Service">
                                                    </div>
                                                    <div class="col-sm-6 mt-2 mt-sm-0">
                                                        <input name="date" class="default-select form-control wide mb-3"
                                                            id="mdate3" placeholder="Tanggal Service">
                                                        <?= form_error('date', '<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger light"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Service</th>
                                    <th>History</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($history as $hstac) : ?>
                                <tr>
                                    <td><?php echo $hstac['id_elektronik']; ?></td>
                                    <td><?php echo $hstac['service']; ?></td>
                                    <td><?php echo $hstac['history']; ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="<?= base_url();?>tabelPengolahData/editHistory/<?= $hstac['id'];?>"
                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                            <a href="<?= base_url();?>tabelPengolahData/hapusHistory/<?= $hstac['id'];?>"
                                                class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
<?php include 'footer.php'; ?>
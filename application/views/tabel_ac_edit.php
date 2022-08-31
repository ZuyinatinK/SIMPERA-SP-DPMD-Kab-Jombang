<?php include 'header.php'; ?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tabel AC</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Edit</a></li>
            </ol>
        </div>
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="" method="post">
                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <input type="hidden" name="id" value="<?=$row->id?>">
                                                <label class="form-label">No Registrasi</label>
                                                <input type="text" name="no_registrasi" value="<?=$this->input->post('no_registrasi') ?? $row->no_registrasi?>" class="form-control">
                                                <?= form_error('no_registrasi', '<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label">Kode Barang</label>
                                                <input type="text" name="kode_barang" value="<?=$this->input->post('kode_barang') ?? $row->kode_barang?>" class="form-control">
                                                <?= form_error('kode_barang', '<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <label class="form-label">Rencana Service Selanjutnya</label>
                                                <input type="text" id="mdate" name="tgl_service" value="<?=$this->input->post('tgl_service') ?? $row->tgl_service?>" class="form-control">
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label">Keterangan</label>
                                                <input type="text" name="keterangan" value="<?=$this->input->post('keterangan') ?? $row->keterangan?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
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
</div>
<?php include 'footer.php'; ?>
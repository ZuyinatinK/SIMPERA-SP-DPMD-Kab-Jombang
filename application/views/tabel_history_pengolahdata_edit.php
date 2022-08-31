<?php include 'header.php'; ?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tabel History Pengolah Data</a></li>
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
                                                <input type="text" name="id_elektronik" value="<?=$this->input->post('id_elektronik') ?? $row->id_elektronik?>" class="form-control" readonly>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label">Service</label>
                                                <input type="text" name="service" value="<?=$this->input->post('service') ?? $row->service?>" class="form-control">
                                                <?= form_error('service', '<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <label class="form-label">History</label>
                                                <input id="mdate3" name="history" class="default-select form-control wide mb-3" value="<?=$this->input->post('history') ?? $row->history?>" class="form-control">
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
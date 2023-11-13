
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-2">
                                        <img style="width:42%" src="<?= base_url() ?>assets/assets/assets/assets_dash/images/logologin.png" class="image" alt="">
                                    </div>
                                    <!-- <h2 class="text-center mb-4">VISROVE</h2> -->
                                    <img class="mb-4" style="width:40%; margin-left: 130px;" src="<?= base_url() ?>assets/assets/img/logo_vis.png" class="image" alt="">
                                    <?= $this->session->flashdata('message'); ?>
                                    <h4 class="text-center mb-2">Welcome, Log in your account !</h4>
                                    <form method="POST" action="<?= base_url('auth')?>">
                                        <div class="mb-3">
                                            <label class="mb-1" style="font-size: 15px;"><strong>Email</strong></label>
                                            <input type="email" class="form-control" style="border:2px solid purple;" id="email" name='email'
                                                value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1" style="font-size: 15px;"><strong>Password</strong></label>
                                            <input type="password" style="border:2px solid purple;" id="password" name="password" class="form-control">
                                        </div>
                                        <hr>
                                        <br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" style="font-size: 15px;">Log in</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3 text-center">
                                        <p>Create an Account! <a class="text-primary"
                                            href="<?= site_url('Auth/registrasi') ?>">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

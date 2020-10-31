<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="<?php echo base_url('assets/img/').setting()->logo; ?>" style="max-height:100px" class="img-responsive" alt="Responsive image">	
            <h3 class="m-4">
                <?php echo setting()->nama_sekolah; ?>
            </h3>
        </div>        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><?php echo setting()->aplikasi; ?></p>
                <?= $this->session->flashdata('pesan') ?>
                <form action="<?= base_url('Login') ?>" method="post">
                    <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                    <div class="input-group mb-3">
                        <input type="text" name="username" value='<?= set_value('username') ?>' class="form-control" placeholder="Username">
                        <div class="input-group-append input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                    <div class="input-group mb-3">
                        <input type="password" name="password" value='<?= set_value('password') ?>' class="form-control" placeholder="Password">
                        <div class="input-group-append input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Show Password
                                </label>
                            </div>
                        </div>-->
                        <!-- /.col -->
                        <!-- <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>-->
                        <!-- /.col -->
                    </div>

                    <div class="social-auth-links text-center mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="<?=base_url(); ?>" class="btn btn-block btn-default">Home</a>
                                
                            </div>
                            <div class="col-md-8">
                                <button class="btn btn-block btn-primary">
                                    Login Masuk
                                </button>
                            </div>
                        </div>    
                    

                        

                        

                    </div>
                    <!-- /.social-auth-links -->
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Head Logo -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo.svg">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="<?php echo base_url(); ?>index2.html"><b>Local</b>Distro <br>
                <h6>Localize Your Style</h6>
            </a>
        </div>
        <?php echo $this->session->flashdata('message'); ?>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Daftar Akun Baru</p>

                <form action="<?php echo base_url(); ?>Login/register" method="post">
                    <div class="form-group mb-4">
                        <input type="text" name="name" class="form-control" placeholder="Full name" value="<?php echo set_value('name'); ?>">
                        <?php echo form_error('name','<small class="text-danger pl-3">','</small>'); ?>

                    </div>
                    <div class="form-group mb-4">
                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('name'); ?>" >
                        <?php echo form_error('email','<small class="text-danger pl-3">','</small>'); ?>

                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <input type="password" name="password1" class="form-control" placeholder="Password">
                            <?php echo form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                        <div class="col">
                            <input type="password" name="password2" class="form-control" placeholder="Retype password">

                        </div>
                    </div> <br>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <hr>
                    Saya Sudah Mendaftar. <a href="<?php echo base_url(); ?>Login/index" class="text-center">Klink Disini</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>
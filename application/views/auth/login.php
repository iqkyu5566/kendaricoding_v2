<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Kendari Coding</title> -->
<!-- Tell the browser to be responsive to screen width -->
<!-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->
<!-- Bootstrap 3.3.7 -->
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
<!-- Font Awesome -->
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css"> -->
<!-- Ionicons -->
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/Ionicons/css/ionicons.min.css"> -->
<!-- Theme style -->
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/AdminLTE.min.css"> -->
<!-- iCheck -->
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/iCheck/square/blue.css"> -->
<!--stylecss-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/style1.css">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<!--html login-->

<section>
    <div class="color"></div>
    <div class="color"></div>
    <div class="color"></div>
    <div class="box">
        <div class="square" style="--i:0;"></div>
        <div class="square" style="--i:1;"></div>
        <div class="square" style="--i:2;"></div>
        <div class="square" style="--i:3;"></div>
        <div class="square" style="--i:4;"></div>
        <dic class="container">
            <div class="form">
                <h2>Login Admin</h2>
                <form>
                    <div class="inputBox">
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="inputBox">
                        <input type="password" placeholder="password">
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="login">
                    </div>
                    <p class="forget">Lupa password?<a href="#">Click Here</a></p>
                    <p class="forget">Tidak Punya akun?</p><a href="#">Sign up</a></p>
                </form>
            </div>
        </dic>
    </div>
</section>

<<<<<<< HEAD <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="<?php echo base_url(); ?>/adminlte/index2.html">Login Admin</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <?php
                $status_login = $this->session->userdata('status_login');
                if (empty($status_login)) {
                    $message = "Silahkan login untuk masuk ke aplikasi";
                } else {
                    $message = $status_login;
                }
                ?>
                <p class="login-box-msg"><?php echo $message; ?></p>

                <!--<form action="<?php echo base_url(); ?>/adminlte/index2.html" method="post">-->
                <?php echo form_open('auth/cheklogin'); ?>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-danger btn-block btn-flat"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
                    </div>
                    <div class="col-xs-6">
                        <?php echo anchor('#', '<i class="fa fa-eye-slash" aria-hidden="true"></i> Lupa Password', array('class' => 'btn btn-primary btn-block btn-flat')); ?>
                    </div>
                </div>
                <!-- /.col -->
                =======
                <!-- Google Font -->
                <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head> -->
                <!-- <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="<?php echo base_url(); ?>/adminlte/index2.html">Login Admin</a>
            </div> -->
                <!-- /.login-logo -->
                <!-- <div class="login-box-body"> -->
                <?php
                // $status_login = $this->session->userdata('status_login');
                if (empty($status_login)) {
                    $message = "Silahkan login untuk masuk ke aplikasi";
                } else {
                    $message = $status_login;
                }
                // 
                ?>
                // <p class="login-box-msg"><?php echo $message; ?></p>

                <!--<form action="<?php echo base_url(); ?>/adminlte/index2.html" method="post">-->
                <!-- <?php echo form_open('auth/cheklogin'); ?>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-danger btn-block btn-flat"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
                    </div>
                    <div class="col-xs-6">
                        <?php echo anchor('#', '<i class="fa fa-eye-slash" aria-hidden="true"></i> Lupa Password', array('class' => 'btn btn-primary btn-block btn-flat')); ?>
                    </div>
                </div> -->
                <!-- /.col -->
                >>>>>>> origin/main


                <!-- /.col -->
                <!-- <div class="row" style="margin-top: 20px;">
                    <div class="col-xs-12">
                        <div class="callout callout-info">
                            <h4>Level Super Admin</h4>

                            <p><b>Email</b> : nuris.akbar@gmail.com</p>
                            <p><b>Password</b> : password</p>
                            <hr>
                            <h4>Level Admin</h4>

                            <p><b>Email</b> : hafid@gmail.com</p>
                            <p><b>Password</b> : password</p>
                        </div>
                    </div>

                </div> -->
                </form>




            </div>
            <!-- /.login-box -->

            <!-- jQuery 3 -->
            <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- iCheck -->
            <script src="<?php echo base_url(); ?>assets/adminlte/plugins/iCheck/icheck.min.js"></script>
            <script>
                $(function() {
                    $('input').iCheck({
                        checkboxClass: 'icheckbox_square-blue',
                        radioClass: 'iradio_square-blue',
                        increaseArea: '20%' // optional
                    });
                });
            </script>
    </body>

    </html>
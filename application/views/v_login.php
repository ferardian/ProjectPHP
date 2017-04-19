<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
   
    <!-- Tell the browser to be responsive to screen width -->
       <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/square/blue.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
          <b>Sistem Informasi Surveilans Harian Infeksi dan Indikator Mutu</b><b></b><br>RS. Siti Khodijah Pekalongan</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">
                  <?php echo $this->session->flashdata('pesan')?>
        </p>
        <?php echo form_open('login_controller/pros_login', array('name' => 'form_login'))?>
          <div class="form-group">
            <?php echo form_error('username');?>
            <div class="input-group">
                <input name="username" type="text" class="form-control" placeholder="Nama Akun" value="<?php set_value('usernmae')?>">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            </div>
          </div>
        <?php echo form_error('password');?>
          <div class="form-group">
            <div class="input-group">
                <input name="password" type="password" class="form-control" placeholder="Kata Sandi" value="<?php set_value('password')?>">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <!-- <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Buat saya tetap masuk
                </label>
              </div> -->
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat"><b class="fa fa-sign-in"></b> Masuk</button>
            </div><!-- /.col -->
          </div>
        <?php echo form_close()?>
        
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

   <!-- REQUIRED JS SCRIPTS -->

    


 <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url() ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  

  </body>
</html>

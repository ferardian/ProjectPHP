<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Surveilans Harian Infeksi dan Indikator Mutu RS. Siti Khodijah Pekalongan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/font-awesome.min.css">
  <!-- Ionicons -->

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/all.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/select2-bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/select2-bootstrap.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url() ?>assets/bootstrap/css/datepicker3.css" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.css">


      </head>
      <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

          <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini">Menu</span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg">RSSK</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <img src="<?php echo base_url() ?>assets/dist/img/rus.png" class="user-image" alt="User Image">
                      <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="<?php echo base_url() ?>assets/dist/img/rus.png" class="img-circle" alt="User Image">
                        <p>
                          <?php echo $this->session->userdata('nama'); ?>
                          <small>Administrator</small>
                        </p>
                      </li>
                      <!-- Menu Body -->

                      <!-- Menu Footer-->
                      <li class="user-footer">

                        <div class="pull-right">
                          <a onclick="keluar()" href="#" class="btn btn-default btn-flat">Keluar</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <!-- Control Sidebar Toggle Button -->

                </ul>
              </div>
            </nav>
          </header>
          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar user panel -->
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="<?php echo base_url() ?>assets/dist/img/rus.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                 <?php echo $this->session->userdata('nama'); ?>

               </div>
             </div>
             <!-- search form -->
           
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">

              <li class="treeview" id="dashboard">
                <a href="<?php echo site_url() ?>dashboard_akreditasi/">
                  <i class="fa fa-dashboard" ></i> <span>Dashboard</span> 
                </a>
              </li>
              <li class="treeview <?php if (!empty($index)): echo $index; elseif (empty($index)): echo 'noactive'; endif ?>" id="pelamar">
              <a href="<?php echo site_url() ?>akreditasi/">
                <i class="fa fa-male"></i>
                <span>Dokumen Akreditasi</span>
              </a>          
            </li>

             
            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->


          <!-- Main content -->
          <section class="content">


            <?php echo $contents ?>

          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->


        <!-- Control Sidebar -->

      </div><!-- ./wrapper -->

      <!-- jQuery 2.1.4 -->
      <script src="<?php echo base_url() ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>


      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->


      <!-- Bootstrap 3.3.5 -->
      <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>

      <!-- Bootstrap 3.3.5 -->

      <!-- DataTables -->
      <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
      <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.scroller.min.js"></script>
      <!-- page script -->
      <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
         
          
        });
      });
      </script>  
      <!-- jQuery UI 1.11.4 -->

      <script src="<?php echo base_url() ?>assets/bootstrap/js/jquery-ui.min.js"></script> 
      <!-- Morris.js charts -->

      <script src="<?php echo base_url() ?>assets/plugins/morris/morris.min.js"></script>
      <!-- Sparkline -->
      <script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
      <!-- jvectormap -->
      <script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="<?php echo base_url() ?>assets/plugins/knob/jquery.knob.js"></script>
      <!-- daterangepicker -->
      <script src="<?php echo base_url() ?>assets/bootstrap/js/moment.min.js"></script>
      <script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
      <!-- InputMask -->
      <script src="<?php echo base_url() ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
      <script src="<?php echo base_url() ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
      <script src="<?php echo base_url() ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
      <!-- datepicker -->
      <script src="<?php echo base_url() ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
      <!-- Bootstrap WYSIHTML5 -->
      <script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
      <!-- Slimscroll -->
      <script src="<?php echo base_url() ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
      <!-- FastClick -->
      <script src="<?php echo base_url() ?>assets/plugins/fastclick/fastclick.min.js"></script>
      <!-- Select2 -->
      <script src="<?php echo base_url() ?>assets/plugins/select2/select2.full.min.js"></script>
      <!-- iCheck 1.0.1 -->
      <script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url() ?>assets/dist/js/app.min.js"></script>
      

      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->


      <!-- AdminLTE for demo purposes -->
  
      <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

      <script type="text/javascript">
   //Initialize Select2 Elements
   $(".select2").select2();


    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });


//Active CLass 

var url = window.location;
// Will only work if string in href matches with location
$('ul.sidebar-menu a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.sidebar-menu a').filter(function() {
  return this.href == url;
}).parent().addClass('active');


function keluar (){
  var jawab = confirm('Yakin Ingin Keluar?');
  if (jawab) {
    window.location='<?php echo base_url() ?>login_controller/logout';
  }

}

</script>




</body>
</html>

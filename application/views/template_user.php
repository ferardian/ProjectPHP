<!doctype html>
<html lang="en">

  <head>    
    <meta charset="utf-8">
    <meta name="description" content="Responsive Bootstrap Landing Page Template">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Sistem Informasi Manajemen Dokumen Akreditasi RS Siti Khodijah</title>

    <link href="<?php echo base_url() ?>assets/material/css/bootstrap.min.css" rel="stylesheet">
     
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/material/fonts/font-awesome.min.css" type="text/css" media="screen">
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="<?php echo base_url() ?>assets/material/css/material.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/material/css/ripples.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/material/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/material/css/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/material/css/animate.min.css" rel="stylesheet">
    
  </head>

  <body>

    <div class="navbar navbar-invers menu-wrap">
      <div class="navbar-header text-center">
       
        <a class="navbar-brand logo-right" href="javascript:void(0)"><?php echo $this->session->userdata('nama'); ?></a>
      </div>
        <ul class="nav navbar-nav main-navigation">
          <li ><a  href="<?php echo site_url() ?>user/beranda/">Beranda</a></li>
          <li ><a  href="<?php echo site_url('user/Akun/') ?>">Ubah Password</a></li>
          <li ><a  href="<?php echo site_url('user/penilaian/') ?>">Penilaian Kinerja</a></li>
          <li ><a  href="<?php echo site_url('user/laporan_user/'); ?>">Laporan Personal</a></li>
          <li ><a onclick="keluar()" href="#">Keluar</a></li>
         
        </ul>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>
    
    <div class="content-wrap">
     <header id="home">
      
      <div class="container">
          <div class="col-md-12">

            <div class="navbar navbar-inverse sticky-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
              <div class="container">
                <div class="navbar-header">
                  <a class="logo-left " href="<?php echo site_url() ?>user/beranda/">
                    <img src="<?php echo base_url() ?>assets/material/img/portfolio/img10.png">&nbsp;</i>
                    Sistem Penilaian Kinerja Karyawan RS. Siti Khodijah Pekalongan
                  </a>
                </div>
                <div class="navbar-right">
                  <button class="menu-icon"  id="open-button">
                    <i class="mdi-navigation-menu"></i>
                  </button>             
                </div>
              </div>
            </div>
        </div>        
        
    </header>

  
  
    

      </div>
    </section>

    
    </section>

  

    <?php echo $contents ?>



   <!--  <section id="footer">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>Products</h3>
              <ul>
                <li><a href="http://wingthemes.com/">WingThemes</a>
                </li>
                <li><a href="http://graygrids.com/">Graygrids</a>
                </li>
                <li><a href="http://wpbean.com/">WPBean</a>
                </li>
                <li><a href="http://landingbow.com/">Landingbow</a>
                </li>
                <li><a href="http://freebiescircle.com/">FreebiesCicle</a>
                </li>               
              </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>FAQs</h3>
              <ul>
                <li><a href="#">Why choose us?</a>
                </li>
                <li><a href="#">Where we are?</a>
                </li>
                <li><a href="#">Fees</a>
                </li>
                <li><a href="#">Guarantee</a>
                </li>
                <li><a href="#">Discount</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>About</h3>
              <ul>
                <li><a href="#">Career</a>
                </li>
                <li><a href="#">Partners</a>
                </li>
                <li><a href="#">Team</a>
                </li>
                <li><a href="#">Clients</a>
                </li>
                <li><a href="#">Contact</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>Find us on</h3>
              <a class="social" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
              <a class="social" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
              <a class="social" href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
        </div>  
      </div>      
      <Go to Top Link -->
     
    </section> 
 
    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="copyright-text">
             © RSSK <?php echo date('Y') ?> 
              </a>
            </p>
          </div>
        </div>
      </div>
    </section>     
    </div>  
    

    <script src="<?php echo base_url() ?>assets/material/js/jquery-2.1.4.min.js"></script>

       
    <script src="<?php echo base_url() ?>assets/material/js/bootstrap.min.js"></script>
     
  
  
    <script src="<?php echo base_url() ?>assets/material/js/ripples.min.js"></script>
    <script src="<?php echo base_url() ?>assets/material/js/material.min.js"></script>
    <script src="<?php echo base_url() ?>assets/material/js/wow.js"></script>
    <script src="<?php echo base_url() ?>assets/material/js/jquery.mmenu.min.all.js"></script> 
    <script src="<?php echo base_url() ?>assets/material/js/count-to.js"></script>   
    <script src="<?php echo base_url() ?>assets/material/js/jquery.inview.min.js"></script>     
    <script src="<?php echo base_url() ?>assets/material/js/main.js"></script>
    <script src="<?php echo base_url() ?>assets/material/js/classie.js"></script>
    <script src="<?php echo base_url() ?>assets/material/js/jquery.nav.js"></script>      
    <script src="<?php echo base_url() ?>assets/material/js/smooth-on-scroll.js"></script>
    <script src="<?php echo base_url() ?>assets/material/js/smooth-scroll.js"></script>

    

    <script>
        $(document).ready(function() {
            // This command is used to initialize some elements and make them work properly
            $.material.init();
        });


      function keluar (){
      var jawab = confirm('Yakin Ingin Keluar?');
      if (jawab) {
      window.location='<?php echo base_url() ?>login_controller/logout';
  }

}
    </script>

  </body>

</html>

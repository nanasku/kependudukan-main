<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>AdminDesa</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url();?>/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>

<!-- ***********************************   LAYOUT ADMINN    **********************************-->




  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="<?php echo site_url('Perangkat');?>" role="button">

          <img alt="Image placeholder" src="<?php echo base_url();?>/assets/img/brand/ngendrosari_admin.png" >
         
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Perangkat/Penduduk');?>">
                <i class="ni ni-single-02 text-red"></i>
                <span class="nav-link-text">Olah Data Penduduk</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Perangkat/Kelahiran');?>">
                <i class="ni ni-single-02 text-blue"></i>
                <span class="nav-link-text">Olah Data Kelahiran</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Perangkat/Kematian');?>">
                <i class="ni ni-single-02 text-red"></i>
                <span class="nav-link-text">Olah Data Kematian</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Perangkat/Kedatangan');?>">
                <i class="ni ni-single-02 text-green"></i>
                <span class="nav-link-text">Olah Data Kedatangan</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Perangkat/Pindahan');?>">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Olah Data Pindahan</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Perangkat/Informasi_desa');?>">
              <i class="ni ni-ruler-pencil text-blue"></i>
                <span class="nav-link-text">Olah Berita Desa</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Perangkat/Ronda');?>">
              <i class="ni ni-ruler-pencil text-grey"></i>
                <span class="nav-link-text">Olah Data Ronda Rutin
                </span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Perangkat/Event');?>">
              <i class="ni ni-user-run text-red"></i>
                <span class="nav-link-text">Olah Data Event
                </span>
              </a>
            </li>
           
          
          </ul>
          <!-- Divider -->
          <hr class="my-3">

          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default  border-bottom opacity-10">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
           
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">

                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm font-weight-bold"><b>Hallo, </b></span>
                    <span class="mb-0 text-sm font-weight-bold">
                    <?php if($this->session->userdata('nama')) : ?>
                    <?php echo $this->session->userdata('nama') ?>
                    <?php endif; ?>
                    </span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                
                <div class="dropdown-divider"></div>
                <a href="<?php echo site_url('Login/Logout');?>" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>

            
        
            
          </ul>
        </div>
      </div>
    </nav>
  

          
    <?= $contents ?>


      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?php echo base_url(); ?>/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url(); ?>/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>

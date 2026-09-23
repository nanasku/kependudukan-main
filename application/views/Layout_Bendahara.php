<!--
=========================================================
* Layout Bendahara
=========================================================
-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BendaharaDesa</title>
  <link rel="icon" href="<?php echo base_url();?>/assets/img/brand/favicon.png" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>

  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">

      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center px-3 py-3">
          <a class="navbar-brand m-0 d-flex align-items-center w-100" href="<?php echo site_url('Bendahara');?>" role="button">
              <?php $desa = get_desa(); ?>
              
              <div class="logo-wrapper mr-2">
                  <img alt="Logo Desa" 
                      src="<?php echo base_url('assets/img/brand/'.($desa && $desa->logo ? $desa->logo : 'favicon.png')); ?>" 
                      style="width: 45px; height: 45px; object-fit: contain;">
              </div>

              <div class="info-wrapper text-left" style="line-height: 1.2;">
                  <div class="font-weight-bold text-dark" style="font-size: 13px;">
                      <?php echo $desa ? $desa->nama_desa : 'Desa'; ?>
                  </div>
                  <div class="text-muted" style="font-size: 10px;">
                      Kec. <?php echo $desa ? $desa->kecamatan : '-'; ?><br>
                      <?php echo $desa ? $desa->kabupaten : '-'; ?>, 
                      <?php echo $desa ? $desa->provinsi : '-'; ?><br>
                      Kode Pos: <?php echo $desa ? $desa->kode_pos : '-'; ?>
                  </div>
              </div>
          </a>
      </div>

      <div class="navbar-inner">
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <ul class="navbar-nav">

            <!-- Menu Keuangan Bendahara -->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Keuangan');?>">
                <i class="ni ni-money-coins text-primary"></i>
                <span class="nav-link-text">Dashboard Keuangan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Keuangan/transaksi/Pendapatan');?>">
                <i class="ni ni-money-coins text-green"></i>
                <span class="nav-link-text">Pendapatan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Keuangan/transaksi/Pengeluaran');?>">
                <i class="ni ni-cart text-red"></i>
                <span class="nav-link-text">Pengeluaran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Keuangan/kategori');?>">
                <i class="ni ni-tag text-blue"></i>
                <span class="nav-link-text">Kelola Kategori</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Keuangan/laporan');?>">
                <i class="ni ni-chart-bar-32 text-yellow"></i>
                <span class="nav-link-text">Laporan Bulanan</span>
              </a>
            </li>

          </ul>
          <hr class="my-3">
        </div>
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom opacity-10">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm font-weight-bold"><b>Hallo, </b></span>
                    <span class="mb-0 text-sm font-weight-bold">
                      <?php if($this->session->userdata('nama')) : ?>
                        <?php echo $this->session->userdata('nama') ?>
                      <?php endif; ?>
                    </span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
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
          <div class="copyright text-center text-lg-left text-muted">
            &copy; 2024 <a href="#" class="font-weight-bold ml-1">Admin Desa</a>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item"><a href="#" class="nav-link">Bendahara</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
  </div>

  <!-- Argon Scripts -->
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/argon.js?v=1.2.0"></script>
</body>
</html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
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
  <!-- Main content -->
  <div class="main-content">


    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 1000px; background-image: url(<?php echo base_url(); ?>/assets/img/theme/background_desa.jpg); background-size: cover; background-position: center top;">
      <div class="container">
        <div class="header-body text-center mb-100">
          <div class="row justify-content-center">



<!--ini sebelumnya nya-->
            <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0 opacity-10">
            <div class="card-header bg-transparent pb-5 opacity-10">
              <div class="text-muted text-center  mt-2 mb-3 "><h1><b>MASUK<b></h1></div>
              <div class="text-muted text-center mt-2 mb-0"><small>DesaDesa, Kajoran, Magelang, Jawa Tengah, 56163</small></div>
              
            </div>
            <div class="card-body px-lg-5 py-lg-5 ">

              <form role="form" method="POST" action="<?php echo site_url('Login/Proses_Login'); ?>">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control"  placeholder="NIK" type="text" name="NIK" required>
                  </div>
                </div>



                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Kata Sandi" type="password" name="password" required>
                  </div>
                </div>
                

                

                <div class="text-center">
                  <button type="submit" class="btn btn-success my-4">Login</button>
                </div>

                <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Lupa Kata Sadi ?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="<?php echo site_url('Daftar'); ?>" class="text-light"><small>Daftar Akun</small></a>
            </div>
          </div>


              </form>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
    








<!--ini setelah nya-->
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

    

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
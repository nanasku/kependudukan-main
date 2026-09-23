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

<!--PANGGIL DATA DARI DB UNTUK GRAFIK SENSUS PENDUDUK-->
<?php
$this->db->select('rt,nama');
$dataProdukChart = $this->db->get('penduduk')->result();
foreach ($dataProdukChart as $k => $v){
    $arrPendidikan[] = ['y'=>$v->rt,'label' => $v->nama];
   
}

//print_r(json_encode($arrPendidikan, JSON_NUMERIC_CHECK));die();

//print_r($dataProdukChart);die();

?>


<!DOCTYPE html>
<html>

<head>
              <script>
              window.onload = function () {

              var chart = new CanvasJS.Chart("chartContainer", {
                theme: "light1",
                animationEnabled: true,
                title: {
                  text: "Grafik Sensus Data Penduduk"
                },
                subtitles: [{
                  text: "DesaDesa",
                  fontSize: 16
                }],
                data: [{
                  type: "pie",
                  indexLabelFontSize: 18,
                  radius: 90,
                  indexLabel: "{label} - {y}",
                  yValueFormatString: "###0.0\"%\"",
                  click: explodePie,
                 dataPoints: [
                    { y: 20, label: "Wanita" },
                    { y: 80, label: "Pria"}
                  ]

                  /*dataPoints: [
                    <?=json_encode($arrPendidikan, JSON_NUMERIC_CHECK);?>
                  ]*/


                }]
              });
              chart.render();

              function explodePie(e) {
                for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
                  if(i !== e.dataPointIndex)
                    e.dataSeries.dataPoints[i].exploded = false;
                }
              }
              
              }
    </script>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Halaman Utama</title>
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
  <!-- Sidenav -->
 
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>


            
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            
          </ul>


          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">



            <li>
            <a class="nav-link pr-0 mr-4" href="#woroworo" role="button">Berita</a>
            </li>

            <li>
            <a class="nav-link pr-0 mr-4" href="#visimisi" role="button">Visi Misi</a>
            </li>

            <li>
            <a class="nav-link pr-0 mr-4" href="#event" role="button">Event Desa</a>
            </li>

            <li>
            <a class="nav-link pr-0 mr-4" href="<?php echo site_url('Login'); ?>" role="button">Jadwal Ronda</a>
            </li>


            <li>
            <a class="nav-link pr-0 mr-4" href="<?php echo site_url('Login'); ?>" role="button">Login</a>
            </li>



          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?php echo base_url();?>/assets/img/theme/desa.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-primary opacity-1"></span>
      <!-- Header container -->
      
            <div class="container-fluid d-flex align-items-center">
        <div class="">

          <div class="col-lg-7 col-md-10">
            <h1 class="display-1 text-white"><b>Selamat Datang di Website</b></h1>
            <h1 class="display-2 text-white"><b>DesaDesa</b></h1>
            <h2 class="display-5 text-white ">Kecamatan Kajoran, Kabupaten Magelang, Provinsi Jawa Tengah, 56163</h2>
            <p class="text-white mt-0 mb-5">DesaDesa merupakan desa yang memiliki kekayaan alam yang melimpah, baik dari segi Sumber Daya Alam maupupun Sumber Daya Manusia.
                                            DesaDesa memiliki pemandangan yang sangat indah, dengan background Gunung Sumbing yang berdiri kokoh tepat di arah Utara DesaDesa.
            </p>
            
          </div>
        </div>
      </div>
    </div>
   
   
    
    <!--KONTEN UTAMA YA BOSKYUUU-->
                
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 mt-5 px-5">
              <span id="visimisi"><h1 class="text-blue"><b>MENUJU DESA MODERN<b></h1></span>
              <p class="text-lead text-blue">Melayani masyarakat secara cepat, aman, dan nyaman dengan mengikuti perkembangan teknologi adalah komitmen kami dalam memajukan DesaDesa. Maka website publikasi dan sistem informasi desa ini kami hadirkan untuk mewujudkan Desa Modern</p>
            </div>
          </div>
        </div>

        <!--Halaman Tampil Diagram-->
        <div id="chartContainer" style="height: 370px; width: 100%;">
            <script src="<?php echo base_url();?>/assets/canvasjs/js/canvasjs.min.js"></script>
        </div>

        <!--Halaman Tampil Berita-->
        <div class="header-body text-center mb-7">
        <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 mt-5 px-5">
              <span id="woroworo"><h1 class="text-blue"><b>BERITA DALAM DESA<b></h1></span>
              <p class="text-lead text-danger"><b>Hindari Berita Desa HOAXS, mulai dapatkan berita dari website kami !</b></p>
        </div>
        </div>
        </div>
              <p class="section-lead"></p>
              <div class="row">
                <?php foreach($berita as $news) { ?>
                  <a href="#woroworo">
                <div class="col-12 col-md-4 col-lg-4">
                  <article class="article article-style-c">
                    <div class="card" style="width: 20rem;">
                      <img class="card-img-top" src="<?php echo base_url().'/gambarberita/'.$news->gambar ?>" width="100" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text" style="color:black;">
                          <b><?php echo $news->judul_berita ?></b><br><br>
                          <?php echo $news->headnews ?><br><br></p>
                        </div>
                    </div>
                  </article>  
                </div>
                  </a>
                <?php } ?>
              </div>
        </div>

      <!--Halaman Tampil Event-->

      <div class="header-body text-center mb-7">
        <div class="section-body">
        <div class="row justify-content-center">
            <div class=" col-lg-6 col-md-8 mt-5 px-5">
              <span id="event"><h1 class="text-blue"><b>EVENT DESA<b></h1></span>
              <p class="text-lead text-warning"><b>Mari Ramaikan Event Desa ini dengan Menghadirinya dan Berikut Serta Menyelenggarakannya !</b></p>
        </div>
        </div>
        </div>
              <p class="section-lead"></p>
              <div class="row">
                <?php foreach($event as $kegiatan) { ?>
                  <a href="#event">
                <div class="col-12 col-md-4 col-lg-4">
                  <article class="article article-style-c">
                    <div class="card" style="width: 20rem;">
                      <img class="card-img-top" src="<?php echo base_url().'/gambarevent/'.$kegiatan->gambar ?>" width="100" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text" style="color:black;">
                          <b><?php echo $kegiatan->judul_event ?></b><br><br>
                          <?php echo $kegiatan->isi_event ?><br><br></p>
                        </div>
                    </div>
                  </article>  
                </div>
                  </a>
                <?php } ?>
              </div>
        </div>

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
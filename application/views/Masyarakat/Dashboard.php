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

<!-- Header -->
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?php echo base_url();?>/assets/img/theme/desa.jpg); background-size: cover; background-position: center top;">

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

      <!-- Mask -->


      
      <div class="ml-18 container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10 ml-100">


          </div>
        </div>
    </div>
    </div>

           <!-- deskripsi -->

        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 mt-5 px-5">
              <h1 class="text-blue"><b>MENUJU DESA MODERN<b></h1>
              <p class="text-lead text-blue">Melayani masyarakat secara cepat, aman, dan nyaman dengan mengikuti perkembangan teknologi adalah komitmen kami dalam memajukan DesaDesa. Maka website publikasi dan sistem informasi desa ini kami hadirkan untuk mewujudkan Desa Modern</p>
            </div>
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


 
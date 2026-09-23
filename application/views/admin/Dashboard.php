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
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?php echo base_url(); ?>/assets/img/theme/background_admin.png); background-size: cover; background-position: center top;">
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
              <h1 class="text-bue"><b>MENUJU DESA MODERN<b></h1>
              <p class="text-lead text-blue">Melayani masyarakat secara cepat, aman, dan nyaman dengan mengikuti perkembangan teknologi adalah komitmen kami dalam memajukan DesaDesa. Maka website publikasi dan sistem informasi desa ini kami hadirkan untuk mewujudkan Desa Modern</p>
            </div>
          </div>
        </div>
      </div>

       <!--Halaman Tampil Diagram-->
       <div id="chartContainer" style="height: 370px; width: 100%;">
            <script src="<?php echo base_url();?>/assets/canvasjs/js/canvasjs.min.js"></script>
        </div>
 
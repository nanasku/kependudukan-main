
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-light py-7 py-lg-10 pt-lg-9">


    
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-light border-0">

            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4 text-primary">
                <h2 style="text-shadow: 3px 2px 5px grey;"><b>JADWAL RONDA DESADesa</b></h2>
              </div>


              
              <?php foreach($ronda as $siskamling) { ?>
                  
                <div class="col-12 col-md-4 col-lg-4">
                  <article class="article article-style-c">
                    <div class="card" style="width: 26rem;">

                      <img class="card-img-top" src="<?php echo base_url().'/gambarronda/'.$siskamling->gambar ?>" width="100" alt="Card image cap">
                        
                    </div>
                  </article>  
                </div>
                  </a>
                <?php } ?>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
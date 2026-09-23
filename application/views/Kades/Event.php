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

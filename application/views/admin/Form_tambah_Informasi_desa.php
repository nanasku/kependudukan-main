
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
                <h2 style="text-shadow: 3px 2px 5px grey;"><b>FORM TAMBAH BERITA DESA</b></h2>
              </div>


              
              <!--Form--> 
              <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo site_url('Perangkat/Proses_Tambah_Berita'); ?>">

                <div class="form-group">
                
                    <input class="form-control" placeholder="Id Berita" name="no_berita" type="hidden">

                  
                <div class="form-group">


                <div class="text-muted text-left mt-2 mb-2"><small><b>Judul Berita</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Judul Berita" name="judul_berita" type="text" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Head News</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Head News" name="headnews" type="text" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Isi Berita</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Isi Berita" name="isi_berita" type="text" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Tanggal Kirim Berita</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Tanggal Kirim Berita" name="tanggal_kirim" type="date" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Pengirim</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Pengirim" name="pengirim" type="text" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Gambar Berita</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Gambar Berita" name="gambar" type="file" size="20" required>
                  </div>
                </div>
                
                <div class="text-muted font-italic"><small>Pastikan form sudah terisi dengan benar !</small></div>
 
                <div class="text-center">
                  <button type="submit" class="btn btn-default mt-4">Tambah Berita</button>
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
                <h2 style="text-shadow: 3px 2px 5px grey;"><b>FORM EDIT DATA EVENT</b></h2>
              </div>



              <div class="content-wrapper">
                    <section class="content">
                      <?php foreach($event as $kegiatan) { ?>
              
              <!--Form--> 
              <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo site_url('Perangkat/Edit_Data_Event'); ?>">

                <div class="form-group">
                
                <input class="form-control"  name='no_event' type="hidden" value="<?php echo $kegiatan->no_event ?>">




                <div class="text-muted text-left mt-2 mb-2"><small><b>Judul Event</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Judul Event" name='judul_event' type="text" value="<?php echo $kegiatan->judul_event ?>" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Isi Event</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Isi Event" name='isi_event' type="text" value="<?php echo $kegiatan->isi_event ?>" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Sampul Gambar Event</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Sampul Gambar Event" name="gambar" type="file" size="20"  required>
                  </div>
                </div>



                
                <div class="text-muted font-italic"><small>Pastikan form sudah terisi dengan benar !</small></div>
 
                <div class="text-center">
                  <button type="submit" class="btn btn-default mt-4">Simpan Data</button>
               
                  <button type="reset" class="btn btn-danger mt-4">Reset</button>
                </div>
              </form>
            
                        <?php } ?>
                    </section>
                </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
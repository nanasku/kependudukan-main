
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
                <h2 style="text-shadow: 3px 2px 5px grey;"><b>FORM TAMBAH DATA KEMATIAN</b></h2>
              </div>
              
              <!--Form--> 
              <form role="form" method="POST" action="<?php echo site_url('Perangkat/Proses_Tambah_Data_Kematian'); ?>">



                <div class="form-group">

                <div class="text-muted text-left mt-2 mb-2"><small><b>NIK</b></small></div>
                      <select class="form-control"  name="NIK" id="">
                        <option selected="selected">NIK</option>

                        <?php foreach ($penduduk as $wafat) { ?>
                          <option value="<?php echo $wafat->NIK; ?>"> <?php echo $wafat->NIK; ?> </option>
                        <?php } ?>
                        
                      </select>
                 
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Tempat Wafat</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Tempat Wafat" name='tempat_meninggal' type="text" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Tanggal Wafat</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Tanggal Wafat" name='tanggal_meninggal' type="date" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Usia</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Usia" name='usia' type="number" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Sebab</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Sebab" name='sebab' type="text" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Makam</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Makam" name='makam' type="text" required>
                  </div>
                </div>

                
                <div class="text-muted font-italic"><small>Pastikan form sudah terisi dengan benar !</small></div>
 
                <div class="text-center">
                  <button type="submit" class="btn btn-default mt-4">Tambah Data</button>
                </div>
                <div class="text-center">
                  <button type="reset" class="btn btn-danger mt-4">Reset</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
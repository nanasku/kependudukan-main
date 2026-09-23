
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
                <h2 style="text-shadow: 3px 2px 5px grey;"><b>FORM EDIT DATA PINDAHAN</b></h2>
              </div>



              <div class="content-wrapper">
                    <section class="content">
                      <?php foreach($pindahan as $pindah) { ?>
              
              <!--Form--> 
              <form role="form" method="POST" action="<?php echo site_url('Perangkat/Edit_Data_pindahan'); ?>">

                <div class="form-group">
                
                <input class="form-control"  name='no_kepergian' type="hidden" value="<?php echo $pindah->no_kepergian ?>">


                <div class="text-muted text-left mt-2 mb-2"><small><b>NIK</b></small></div>
                <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend"><span class="input-group-text"></span></div>
                        <select class="form-control"  name="NIK"  required>
                            <option selected="selected" value="<?php echo $pindah->NIK ?>"><?php echo $pindah->NIK ?></option>

                            <?php foreach ($penduduk as $pindahs) { ?>
                            <option value="<?php echo $pindahs->NIK; ?>"> <?php echo $pindahs->NIK; ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Tanggal Pindah</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Tanggal Pindah" name='tgl_kepergian' type="date" value="<?php echo $pindah->tgl_kepergian; ?>" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Alamat Asal</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Alamat Asal" name='alamat_asal' type="text" value="<?php echo $pindah->alamat_asal; ?>" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Alamat Tujuan</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Alamat Tujuan" name='alamat_tujuan' required type="text" value="<?php echo $pindah->alamat_tujuan; ?>" >
                  </div>
                </div>


                
                <div class="text-muted font-italic"><small>Pastikan form sudah terisi dengan benar !</small></div>
 
                <div class="text-center">
                  <button type="submit" class="btn btn-default mt-4">Simpan Data</button>
                </div>
                <div class="text-center">
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
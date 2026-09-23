
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
                <h2 style="text-shadow: 3px 2px 5px grey;"><b>FORM EDIT DATA KELAHIRAN</b></h2>
              </div>
              
                <div class="content-wrapper">
                    <section class="content">
                      <?php foreach($kelahiran as $lahir) { ?>

              <!--Form--> 
              <form role="form" method="POST" action="<?php echo site_url('Perangkat/Edit'); ?>">

              
                <div class="form-group">
                
                    <input class="form-control" placeholder="Id Lahir" type="hidden" name="no_lahir" value="<?php echo $lahir->no_lahir ?>">


                <div class="text-muted text-left mt-2 mb-2"><small><b>Nama</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Nama" type="text"  name="nama_bayi" value="<?php echo $lahir->nama_bayi ?>">
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Tempat Lahir</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Tempat Lahir" type="text" name="tempat_lahir" value="<?php echo $lahir->tempat_lahir ?>">
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Tanggal Lahir</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Tanggal Lahir" type="date" name="tanggal_lahir" value="<?php echo $lahir->tanggal_lahir ?>">
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Jenis Kelamin</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <select name="gender" id=""  class="form-control"  required >
                          <option value="<?php echo $lahir->gender ?>"><?php echo $lahir->gender ?></option>
                          <option value="Pria">Pria</option>
                          <option value="Wanita">Wanita</option>

                    </select>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Nama Ayah</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Nama Ayah" type="text" name="nama_ayah" value="<?php echo $lahir->nama_ayah ?>">
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Nama Ibu</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Nama Ibu" type="text" name="nama_ibu" value="<?php echo $lahir->nama_ibu ?>">
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Alamat</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Alamat" type="text" name="alamat" value="<?php echo $lahir->alamat ?>">
                  </div>
                </div>





                <div class="text-muted font-italic"><small>Pastikan form sudah terisi dengan benar !</small></div>
 
                <div class="text-center">
                  <button type="submit" class="btn btn-default mt-4">Simpan Data</button>
                </div>
                <div class="text-center">
                  <button type="reset" class="btn btn-danger mt-4">Reset Data</button>
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
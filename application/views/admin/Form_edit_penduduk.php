
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
                <h2 style="text-shadow: 3px 2px 5px grey;"><b>FORM EDIT DATA PENDUDUK</b></h2>
              </div>
              
                <div class="content-wrapper">
                    <section class="content">
                      <?php foreach($penduduk as $warga) { ?>

              <!--Form--> 
              <form role="form" method="POST" action="<?php echo site_url('Perangkat/Edit_penduduk'); ?>">

              
              <div class="text-muted text-left mt-2 mb-2"><small><b>Nomor Induk Kependudukan</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control"  placeholder="NIK" type="text" name="NIK" value="<?php echo $warga->NIK ?>" required>
                  </div>
                </div>
                
              <div class="text-muted text-left mt-2 mb-2"><small><b>Nama</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-copy-04"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Nama" type="text" name="nama" value="<?php echo $warga->nama ?>" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Tempat Lahir</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Tempat Lahir" type="text" name="tempat_lahir" value="<?php echo $warga->tempat_lahir ?>" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Tanggal Lahir</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Tanggal Lahir" type="date" name="tanggal_lahir" value="<?php echo $warga->tanggal_lahir ?>" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Jenis Kelamin</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    
                    <select name="gender" id=""  class="form-control"  required >
                          <option value="<?php echo $warga->gender ?>"><?php echo $warga->gender ?></option>
                          <option value="Pria">Pria</option>
                          <option value="Wanita">Wanita</option>

                    </select>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Agama</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-istanbul"></i></span>
                    </div>
                    <select name="agama" id=""  class="form-control" required>
                          <option value="<?php echo $warga->agama ?>"><?php echo $warga->agama ?></option>
                          <option value="Islam">Islam</option>
                          <option value="Protestan">Protestan</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                          <option value="Konghucu">Konghucu</option>
                          <option value="Lain-Lain">Lain-Lain</option>

                    </select>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Pendidikan Terakhir</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Pendidikan Terakhir" type="text" value="<?php echo $warga->pendidikan ?>" name="pendidikan" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Pekerjaan</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-bag-17"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Pekerjaan" type="text" value="<?php echo $warga->pekerjaan ?>" name="pekerjaan" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Status</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <select name="status" id=""  class="form-control" required>
                          <option value="<?php echo $warga->status ?>"><?php echo $warga->status ?></option>
                          <option value="Belum Kawin">Belum Kawin</option>
                          <option value="Kawin">Kawin</option>

                    </select>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Nama Ayah</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Nama Ayah" type="text" name="nama_ayah" value="<?php echo $warga->nama_ayah ?>" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Nama Ibu</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Nama Ibu" type="text" name="nama_ibu" value="<?php echo $warga->nama_ibu ?>" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Kewarganegaraan</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-world"></i></span>
                    </div>
                    <select name="kewarganegaraan" id=""  class="form-control" required>
                          <option value="<?php echo $warga->kewarganegaraan ?>"><?php echo $warga->kewarganegaraan ?></option>
                          <option value="WNI">Warga Negara Indonesia</option>
                          <option value="WNA">Warga Negara Asing</option>

                    </select>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Golongan Darah</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Golongan Darah" type="text" value="<?php echo $warga->golongan_darah ?>" name="golongan_darah" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Nomor Telephone</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Nomor Telephone" type="text" name="no_tlp" value="<?php echo $warga->no_tlp ?>" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>RT</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-world"></i></span>
                    </div>
                    <select class="form-control"  name="rt"  required>
                    <option value="<?php echo $warga->rt ?>"><?php echo $warga->rt ?></option>
                            <?php foreach ($rt as $erte) { ?>
                            <option value="<?php echo $erte->rt; ?>"> <?php echo $erte->rt; ?> </option>
                            <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>RW</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-world"></i></span>
                    </div>
                    <select class="form-control"  name="rw"  required>
                    <option value="<?php echo $warga->rw ?>"><?php echo $warga->rw ?></option>
                            <?php foreach ($rw as $erwe) { ?>
                            <option value="<?php echo $erwe->rw; ?>"> <?php echo $erwe->rw; ?> </option>
                            <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Dusun</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-world"></i></span>
                    </div>
                    <select class="form-control"  name="dusun"  required>
                    <option value="<?php echo $warga->dusun ?>"><?php echo $warga->dusun ?></option>
                            <?php foreach ($dusun as $dusune) { ?>
                            <option value="<?php echo $dusune->dusun; ?>"> <?php echo $dusune->dusun; ?> </option>
                            <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Kata Sandi Akun</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Isi Kata Sandi yang Kuat !" type="password"  value="<?php echo $warga->password ?>" name="password" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Level Akun</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                    </div>
                    <select name="level" id=""  class="form-control" required>
                    <option value="<?php echo $warga->level ?>"><?php echo $warga->level ?></option>
                          <option value="Masyarakat">Masyarakat</option>
                          <option value="Perangkat">Perangkat</option>
                          <option value="Kades">Kades</option>
                    </select>
                  </div>
                </div>


                <div class="text-muted text-left mt-2 mb-2"><small><b>Status Akun</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                    </div>
                    <select name="status_akun" id=""  class="form-control" required>
                    <option value="<?php echo $warga->status_akun ?>"><?php echo $warga->status_akun ?></option>
                          <option value="AKTIF">AKTIF</option>
                          <option value="NONAKTIF">NONAKTIF</option>
                    </select>
                  </div>
                </div>
                

                

                <div class="text-center">
                  <button type="submit" class="btn btn-default my-4">UPDATE DATA</button>
                  <button type="reset" class="btn btn-danger my-4">RESET DATA</button>
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
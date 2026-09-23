<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url();?>/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/argon.css?v=1.2.0" type="text/css">
  <!-- Main content -->
  <div class="main-content">


    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 1200px; background-image: url(<?php echo base_url(); ?>/assets/img/theme/background_desa.jpg); background-size: cover; background-position: center top;">
      <div class="container">
        <div class="header-body text-center mb-100">
          <div class="row justify-content-center">



<!--ini sebelumnya nya-->
            <!-- Page content -->
    <div class="container mt-- pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0 opacity-10">
            <div class="card-header mb-0 bg-transparent pb-5 opacity-10">
              <div class="text-muted text-center  mt-2 mb-3 "><h1><b>DAFTAR AKUN<b></h1></div>
              <div class="text-muted text-center mt-2 mb-0"><small>Desa, Kajoran, Magelang, Jawa Tengah, 56163</small></div>
              
            </div>
            <div class="card-body px-lg-5 py-lg-5 ">

              <form  role="form" method="POST" action="<?php echo site_url('Daftar/Proses_Daftar'); ?>">

              <div class="text-muted text-left mt-2 mb-2"><small><b>Nomor Induk Kependudukan</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control"  placeholder="NIK" type="text" name="NIK" required>
                  </div>
                </div>
                
              <div class="text-muted text-left mt-2 mb-2"><small><b>Nama</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-copy-04"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Nama" type="text" name="nama" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Tempat Lahir</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Tempat Lahir" type="text" name="tempat_lahir" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Tanggal Lahir</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Tanggal Lahir" type="date" name="tanggal_lahir" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Jenis Kelamin</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    
                    <select name="gender" id=""  class="form-control" required >
                          <option value="">Jenis Kelamin</option>
                          <option value="Pria">Pria</option>
                          <option value="Wanita">Wanita</option>

                    </select>
                    <!--<input class="form-control"  placeholder="Jenis Kelamin (L/P)" type="text" name="gender" required>-->
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Agama</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-istanbul"></i></span>
                    </div>
                    <select name="agama" id=""  class="form-control" required>
                          <option value="">Agama</option>
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
                    <input class="form-control"  placeholder="Pendidikan Terakhir" type="text" name="pendidikan" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Pekerjaan</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-bag-17"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Pekerjaan" type="text" name="pekerjaan" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Status</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <select name="status" id=""  class="form-control" required>
                          <option value="">Status</option>
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
                    <input class="form-control"  placeholder="Nama Ayah" type="text" name="nama_ayah" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Nama Ibu</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Nama Ibu" type="text" name="nama_ibu" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Kewarganegaraan</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-world"></i></span>
                    </div>
                    <select name="kewarganegaraan" id=""  class="form-control" required>
                          <option value="">Kewarganegaraan</option>
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
                    <input class="form-control"  placeholder="Golongan Darah" type="text" name="golongan_darah" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Nomor Telephone</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Nomor Telephone" type="text" name="no_tlp" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>RT</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-world"></i></span>
                    </div>
                    <input class="form-control"  placeholder="RT" type="text" name="rt" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>RW</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-world"></i></span>
                    </div>
                    <input class="form-control"  placeholder="RW" type="text" name="rw" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Dusun</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-world"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Dusun" type="text" name="dusun" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Kata Sandi Akun</b></small></div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control"  placeholder="Isi Kata Sandi yang Kuat !" type="password" name="password" required>
                  </div>
                </div>

                <div class="text-muted text-left mt-2 mb-2"><small><b>Level Akun</b></small></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                    </div>
                    <select name="level" id=""  class="form-control" required>
                          <option value="Masyarakat">Masyarakat</option>
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
                          <option value="AKTIF">AKTIF</option>
                    </select>
                  </div>
                </div>
                

                

                <div class="text-center">
                  <button type="submit" class="btn btn-success my-4">DAFTAR SEKARANG</button>
                </div>


                
                


              </form>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
    








<!--ini setelah nya-->
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

    

    <!-- Core -->
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?php echo base_url(); ?>/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url(); ?>/assets/js/argon.js?v=1.2.0"></script>
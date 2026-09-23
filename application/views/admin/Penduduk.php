
<!-- Light table -->

            <!-- Card header -->
            <div class="card-header border-3">
              <center> <h1 class="mb-0 text-blue" style = "text-shadow: 3px 2px 5px grey;" ><b>TABEL DATA PENDUDUK</b></h1></center>
              <center><a href="<?php echo site_url('Perangkat/Form_tambah_penduduk');?>" class="btn btn-neutral btn-icon" >
                  <span class="btn-inner--icon"><img src="<?php echo base_url();?>/assets/img/icons/common/tambah.svg"></span>
                  <span class="btn-inner--text">Tambah Data Penduduk</span></a>
                  <?php echo $this->session->flashdata('pesan') ?>  
              </center>      
            </div>


   <!-- tabel --> 
<div class="table-responsive">
  <table class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th>No</th>
        <th scope="col" class="sort">NIK</th>        
        <th scope="col" class="sort">Nama Penduduk</th>
        <th scope="col" class="sort" >Tempat Lahir</th>
        <th scope="col" class="sort" >Tanggal Lahir</th>
        <th scope="col" class="sort">Jenis Kelamin</th>
        <th scope="col" class="sort">Agama</th>
        <th scope="col" class="sort">Pendidikan</th>
        <th scope="col" class="sort">Pekerjaan</th>
        <th scope="col" class="sort">Status</th>
        <th scope="col" class="sort">Nama Ayah</th>
        <th scope="col" class="sort">Nama Ibu</th>
        <th scope="col" class="sort">Kewarganegaraan</th>
        <th scope="col" class="sort">Golongan Darah</th>
        <th scope="col" class="sort">Nomor Telephone</th>
        <th scope="col" class="sort">RT</th>
        <th scope="col" class="sort">RW</th>
        <th scope="col" class="sort">Dusun</th>
        <th scope="col" class="sort">Level Akun</th>
        <th scope="col" class="sort">Status Akun</th>
        <th scope="col">Aksi Edit</th>
        <th scope="col">Aksi Hapus</th>
      </tr>
    </thead>

    <?php  $no =1; foreach($penduduk as $warga) : ?>
        
        <tbody> 
        <tr>
          <th><?php echo $no++; ?></th>

          <th><?php echo $warga->NIK ?></th>
          <th><?php echo $warga->nama ?></th>
          <th><?php echo $warga->tempat_lahir ?></th>
          <th><?php echo $warga->tanggal_lahir ?></th>
          <th><?php echo $warga->gender ?></th>
          <th><?php echo $warga->agama ?></th>
          <th><?php echo $warga->pendidikan ?></th>
          <th><?php echo $warga->pekerjaan ?></th>
          <th><?php echo $warga->status ?></th>
          <th><?php echo $warga->nama_ayah ?></th>
          <th><?php echo $warga->nama_ibu ?></th>
          <th><?php echo $warga->kewarganegaraan ?></th>
          <th><?php echo $warga->golongan_darah ?></th>
          <th><?php echo $warga->no_tlp ?></th>
          <th><?php echo $warga->rt ?></th>
          <th><?php echo $warga->rw ?></th>
          <th><?php echo $warga->dusun ?></th>
          <th><?php echo $warga->level ?></th>
          <th><?php echo $warga->status_akun ?></th>

         
  
          <th class="text-center mr-3"><a href="<?php echo site_url('Perangkat/Getid_penduduk/'.$warga->NIK); ?>" class="btn btn-warning">Edit</a></th>
          <th class="text-center"><a href="<?php echo site_url('Perangkat/Hapus_penduduk/'.$warga->NIK); ?>" class="btn btn-danger">Hapus</a></th>
        </tr>
        </tbody>
  
        
        <?php endforeach; ?>
        


  </table>
</div>


<!-- Card footer -->
<div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

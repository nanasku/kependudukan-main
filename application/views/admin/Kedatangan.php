
<!-- Light table -->

            <!-- Card header -->
            <div class="card-header border-3">
              <center> <h1 class="mb-0 text-blue" style = "text-shadow: 3px 2px 5px grey;" ><b>TABEL DATA KEDATANGAN</b></h1></center>
              <center><a href="<?php echo site_url('Perangkat/Form_tambah_Pindahan');?>" class="btn btn-neutral btn-icon" >
                  <span class="btn-inner--icon"><img src="<?php echo base_url();?>/assets/img/icons/common/tambah.svg"></span>
                  <span class="btn-inner--text">Tambah Data Kedatangan</span></a>
              </center>
              <?php echo $this->session->flashdata('pesan') ?>        
            </div>


   <!-- tabel --> 
<div class="table-responsive">
  <table class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th>No</th>
        <th scope="col" class="sort" data-sort="no_lahir">ID Datang</th>
        <th scope="col" class="sort" data-sort="nama">NIK</th>
        <th scope="col" class="sort" data-sort="tempat_lahir">Tanggal Datang</th>
        <th scope="col" class="sort" data-sort="tanggal_lahir">Alamat Asal</th>
        <th scope="col" class="sort" data-sort="tanggal_lahir">Alamat Tujuan</th>
        <th scope="col">Aksi Edit</th>
        <th scope="col">Aksi Hapus</th>
      </tr>
    </thead>

    <?php  $no =1; foreach($kedatangan as $datang) : ?>
        
        <tbody> 
        <tr>
          <th><?php echo $no++; ?></th>

          <th><?php echo $datang->no_datang ?></th>
          <th><?php echo $datang->NIK ?></th>
          <th><?php echo $datang->tgl_datang ?></th>
          <th><?php echo $datang->alamat_asal ?></th>
          <th><?php echo $datang->alamat_tujuan ?></th>
  
          <th class="text-center mr-3"><a href="<?php echo site_url('Perangkat/Getid_kedatangan/'.$datang->no_datang); ?>" class="btn btn-warning">Edit</a></th>
          <th class="text-center"><a href="<?php echo site_url('Perangkat/Hapus_kedatangan/'.$datang->no_datang); ?>" class="btn btn-danger">Hapus</a></th>
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

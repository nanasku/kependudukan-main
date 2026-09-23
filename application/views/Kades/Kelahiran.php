

  <!-- Card header -->
  <div class="card-header border-3">
      <center>
         <h1 class="mb-0 text-blue" style = "text-shadow: 3px 2px 5px grey;" ><b>LAPORAN DATA KELAHIRAN</b></h1>
      </center>
      <center>
         <a href="<?php echo site_url('Kades/Cetak_Kelahiran');?>" class="btn btn-neutral btn-icon" >
           <span class="btn-inner--icon"><img src="<?php echo base_url();?>/assets/img/icons/common/kritik.svg"></span>
           <span class="btn-inner--text">Cetak Laporan Data Kelahiran</span></a>
      </center>   
    </div>


   <!-- tabel --> 
<div class="table-responsive">
  <table class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th>NO</th>
        <th scope="col" class="sort" data-sort="no_lahir">ID Lahir</th>
        <th scope="col" class="sort" data-sort="nama">Nama Bayi</th>
        <th scope="col" class="sort" data-sort="tempat_lahir">Tempat Lahir</th>
        <th scope="col" class="sort" data-sort="tanggal_lahir">Tanggal Lahir</th>
        <th scope="col" class="sort" data-sort="gender">Jenis Kelamin</th>
        <th scope="col" class="sort" data-sort="nama_ayah">Nama Ayah</th>
        <th scope="col" class="sort" data-sort="nama_ibu">Nama Ibu</th>
        <th scope="col" class="sort" data-sort="alamat">Alamat</th>

      </tr>
      </thead>
      
     
      <?php  $no =1; foreach($kelahiran as $lahir) : ?>
        
      <tbody> 
      <tr>
        <th><?php echo $no++; ?></th>
        <th><?php echo $lahir->no_lahir ?></th>
        <th><?php echo $lahir->nama_bayi ?></th>
        <th><?php echo $lahir->tempat_lahir ?></th>
        <th><?php echo $lahir->tanggal_lahir ?></th>
        <th><?php echo $lahir->gender ?></th>
        <th><?php echo $lahir->nama_ayah ?></th>
        <th><?php echo $lahir->nama_ibu ?></th>
        <th><?php echo $lahir->alamat ?></th>

        
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

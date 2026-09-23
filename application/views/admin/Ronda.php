

  <!-- Card header -->
  <div class="card-header border-3">
      <center>
         <h1 class="mb-0 text-blue" style = "text-shadow: 3px 2px 5px grey;" ><b>TABEL DATA RONDA</b></h1>
      </center>
      <center>
         <a href="<?php echo site_url('Perangkat/Form_tambah_ronda');?>" class="btn btn-neutral btn-icon" >
           <span class="btn-inner--icon"><img src="<?php echo base_url();?>/assets/img/icons/common/tambah.svg"></span>
           <span class="btn-inner--text">Tambah Data Ronda</span></a>
           <?php echo $this->session->flashdata('pesan') ?>  
      </center>   
    </div>


   <!-- tabel --> 
<div class="table-responsive">
  <table class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th>NO</th>
        <th scope="col" class="sort">ID Jadwal Ronda</th>
        <th scope="col" class="sort">Jadwal Ronda</th>
        <th scope="col">Aksi</th>
      </tr>
      </thead>
      
     
      <?php  $no =1; foreach($ronda as $siskampling) : ?>
        
      <tbody> 
      <tr>
        <th><?php echo $no++; ?></th>
        <th><?php echo $siskampling->id_ronda ?></th>
        <td><img src="<?php echo base_url().'/gambarronda/'.$siskampling->gambar ?>" width="100"></img></td>

        
        <td class="text-center"><a href="<?php echo site_url('Perangkat/Hapus_ronda/'.$siskampling->id_ronda); ?>" class="btn btn-danger">Hapus</a></td>
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

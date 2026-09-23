

  <!-- Card header -->
  <div class="card-header border-3">
      <center>
         <h1 class="mb-0 text-blue" style = "text-shadow: 3px 2px 5px grey;" ><b>TABEL DATA EVENT DESA</b></h1>
      </center>
      <center>
         <a href="<?php echo site_url('Perangkat/Form_tambah_event');?>" class="btn btn-neutral btn-icon" >
           <span class="btn-inner--icon"><img src="<?php echo base_url();?>/assets/img/icons/common/tambah.svg"></span>
           <span class="btn-inner--text">Tambah Data Event Desa</span></a>
           <?php echo $this->session->flashdata('pesan') ?>  
      </center>   
    </div>


   <!-- tabel --> 
<div class="table-responsive">
  <table class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th>NO</th>
        <th scope="col" class="sort">ID Event</th>
        <th scope="col" class="sort">Judul Event</th>
        <th scope="col" class="sort">Deskripsi Event</th>
        <th scope="col" class="sort">Sampul Event</th>
        <th scope="col">Aksi</th>
      </tr>
      </thead>
      
     
      <?php  $no =1; foreach($event as $kegiatan) : ?>
        
      <tbody> 
      <tr>
        <th><?php echo $no++; ?></th>
        <th><?php echo $kegiatan->no_event ?></th>
        <th><?php echo $kegiatan->judul_event ?></th>
        <th><?php echo $kegiatan->isi_event ?></th>
        <td><img src="<?php echo base_url().'/gambarevent/'.$kegiatan->gambar ?>" width="100"></img></td>

        <td class="text-center"><a href="<?php echo site_url('Perangkat/Getid_event/'.$kegiatan->no_event); ?>" class="btn btn-warning">Edit</a></td>
        <td class="text-center"><a href="<?php echo site_url('Perangkat/Hapus_event/'.$kegiatan->no_event); ?>" class="btn btn-danger">Hapus</a></td>
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


<!-- Light table -->

            <!-- Card header -->
            <div class="card-header border-3">
                <center> <h1 class="mb-0 text-blue" style = "text-shadow: 3px 2px 5px grey;" ><b>TABEL BERITA DESA</b></h1></center>
                <center><a href="<?php echo site_url('Perangkat/Form_tambah_berita_desa');?>" class="btn btn-neutral btn-icon" >
                  <span class="btn-inner--icon"><img src="<?php echo base_url();?>/assets/img/icons/common/tambah.svg"></span>
                  <span class="btn-inner--text">Tambah Berita Desa</span>
                </a></center> <?php echo $this->session->flashdata('pesan') ?>       
            </div>


   <!-- tabel --> 
<div class="table-responsive">
  <table class="table align-items-center table-flush" width="10 px">
    <thead class="thead-light">
      <tr>
        <th>No</th>
        <th scope="col" class="sort" data-sort="no_berita">ID Berita</th>
        <th scope="col" class="sort" data-sort="nama">Judul Berita</th>
        <th scope="col" class="sort" data-sort="tempat_lahir">Head News</th>
        <th scope="col" class="sort" class="width-600" data-sort="tanggal_lahir">Isi Berita</th>
        <th scope="col" class="sort" data-sort="gender">Tanggal Kirim</th>
        <th scope="col" class="sort" data-sort="nama_ayah">Pengirim</th>
        <th scope="col" class="sort" data-sort="nama_ayah">Gambar Berita</th>
        <th scope="col">Aksi Edit</th>
        <th scope="col">Aksi Hapus</th>
      </tr>
    </thead>

    <?php  $no =1; foreach($berita as $news) : ?>
        
        <tbody> 
        <tr>
          <td><?php echo $no++; ?></td>

          <td><?php echo $news->no_berita ?></td>
          <td><?php echo $news->judul_berita ?></td>
          <td><?php echo $news->headnews ?></td>
          <td class="width-600"><?php echo $news->isi_berita ?></td>
          <td><?php echo $news->tanggal_kirim ?></td>
          <td><?php echo $news->pengirim ?></td>
          <td><img src="<?php echo base_url().'/gambarberita/'.$news->gambar ?>" width="100"></img></td>
  
          <td class="text-center mr-3"><a href="<?php echo site_url('Perangkat/Getid_berita/'.$news->no_berita); ?>" class="btn btn-warning">Edit</a></td>
          <td class="text-center"><a href="<?php echo site_url('Perangkat/Hapus_berita/'.$news->no_berita); ?>" class="btn btn-danger">Hapus</a></td>
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

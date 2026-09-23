
<!-- Light table -->

            <!-- Card header -->
            <div class="card-header border-3">
              <center> <h1 class="mb-0 text-blue" style = "text-shadow: 3px 2px 5px grey;" ><b>HALAMAN UNDUH DOKUMEN</b></h1></center>       
            </div>


   <!-- tabel --> 
<div class="table-responsive">
  <table class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th>No</th>
        <th scope="col" class="sort" data-sort="no_lahir">ID Dokumen</th>
        <th scope="col" class="sort" data-sort="nama">Nama Dokumen</th>
        <th scope="col" class="sort" data-sort="tempat_lahir">Dokumen</th>
        <th scope="col">Aksi Download</th>
        
      </tr>
    </thead>

    <?php  $no =1; foreach($dokumen as $unduh) : ?>
        
        <tbody> 
        <tr>
          <td><?php echo $no++; ?></td>

          <td><?php echo $unduh->id_dokumen ?></td>
          <td><?php echo $unduh->nama_dokumen ?></td>
          <td><?php echo $unduh->dokumen ?></td>
          <td class="text-center mr-3"><a href="<?php echo site_url('Masyarakat/Masyarakat_Proses_Unduh_Dokumen/'.$unduh->dokumen); ?>" class="btn btn-warning">Unduh Dokumen</a></td>
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

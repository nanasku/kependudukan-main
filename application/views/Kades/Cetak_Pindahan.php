
<!-- Light table -->

            <!-- Card header -->
            <div class="card-header border-3">
              <center> <h1 class="mb-0 text-blue" style = "text-shadow: 3px 2px 5px grey;" ><b>LAPORAN DATA PINDAHAN</b></h1></center>
                
            </div>

<center>
   <!-- tabel --> 
<div class="table-responsive">
  <table border="1" class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th>No</th>
        <th scope="col" class="sort" data-sort="no_lahir">ID Pindah</th>
        <th scope="col" class="sort" data-sort="nama">NIK</th>
        <th scope="col" class="sort" data-sort="tempat_lahir">Tanggal Pindah</th>
        <th scope="col" class="sort" data-sort="tanggal_lahir">Alamat Asal</th>
        <th scope="col" class="sort" data-sort="tanggal_lahir">Alamat Tujuan</th>

      </tr>
    </thead>

    <?php  $no =1; foreach($pindahan as $pindah) : ?>
        
        <tbody> 
        <tr>
          <th><?php echo $no++; ?></th>

          <th><?php echo $pindah->no_kepergian ?></th>
          <th><?php echo $pindah->NIK ?></th>
          <th><?php echo $pindah->tgl_kepergian ?></th>
          <th><?php echo $pindah->alamat_asal ?></th>
          <th><?php echo $pindah->alamat_tujuan ?></th>
  
         
        </tr>
        </tbody>
  
        
        <?php endforeach; ?>
        
        <script type="text/javascript">
                        window.print();
                    </script>


  </table>
</div>
    </center>

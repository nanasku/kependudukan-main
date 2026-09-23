
<!-- Light table -->

            <!-- Card header -->
            <div class="card-header border-3">
              <center> <h1 class="mb-0 text-blue" style = "text-shadow: 3px 2px 5px grey;" ><b>LAPORAN DATA KEDATANGAN</b></h1></center>
             
            </div>

<center>
   <!-- tabel --> 
<div class="table-responsive">
  <table border="1" class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th>No</th>
        <th scope="col" class="sort" data-sort="no_lahir">ID Datang</th>
        <th scope="col" class="sort" data-sort="nama">NIK</th>
        <th scope="col" class="sort" data-sort="tempat_lahir">Tanggal Datang</th>
        <th scope="col" class="sort" data-sort="tanggal_lahir">Alamat Asal</th>
        <th scope="col" class="sort" data-sort="tanggal_lahir">Alamat Tujuan</th>
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
  
         
        </tr>
        </tbody>
  
        
        <?php endforeach; ?>
        
        <script type="text/javascript">
                        window.print();
                    </script>


  </table>
</div>
    </center>


<!-- Card footer -->

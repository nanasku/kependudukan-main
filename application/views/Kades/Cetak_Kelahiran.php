

  <!-- Card header -->
  <div class="card-header border-3">
      <center>
         <h1 class="mb-0 text-blue" style = "text-shadow: 3px 2px 5px grey;" ><b>LAPORAN DATA KELAHIRAN</b></h1>
      </center>
     
    </div>

<center>
   <!-- tabel --> 
<div class="table-responsive">
  <table border="1" class="table align-items-center table-flush">
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
      
      <script type="text/javascript">
                        window.print();
                    </script>


    
  </table>
</div>
      </center>

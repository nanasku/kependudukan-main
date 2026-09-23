
<!-- Light table -->

            <!-- Card header -->
            <div class="card-header border-3">
              <center>
                <h1 class="mb-0 text-blue" style = "text-shadow: 3px 2px 5px grey;" ><b>LAPORAN DATA KEMATIAN</b></h1>
              </center>
            
            </div>

<center>
   <!-- tabel --> 
<div class="table-responsive">
  <table border="1" class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th scope="col" class="sort" data-sort="">No</th>
        
        <th scope="col" class="sort" data-sort="nama">NIK</th>
        <th scope="col" class="sort" data-sort="tempat_lahir">Tempat Wafat</th>
        <th scope="col" class="sort" data-sort="tanggal_lahir">Tanggal Wafat</th>
        <th scope="col" class="sort" data-sort="gender">Usia</th>
        <th scope="col" class="sort" data-sort="nama_ayah">Sebab</th>
        <th scope="col" class="sort" data-sort="nama_ibu">Makam</th>

      </tr>
    </thead>

    <?php  $no =1; foreach($kematian as $wafat) : ?>
        
        <tbody> 
        <tr>
          <th><?php echo $no++; ?></th>

          <th><?php echo $wafat->NIK ?></th>
          <th><?php echo $wafat->tempat_meninggal ?></th>
          <th><?php echo $wafat->tanggal_meninggal ?></th>
          <th><?php echo $wafat->usia ?></th>
          <th><?php echo $wafat->sebab ?></th>
          <th><?php echo $wafat->makam ?></th>

  
         </tr>
        </tbody>
  
        
        <?php endforeach; ?>
        <script type="text/javascript">
                        window.print();
                    </script>



  </table>
</div>

    </center>



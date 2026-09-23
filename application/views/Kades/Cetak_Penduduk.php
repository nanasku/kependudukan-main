
<!-- Light table -->

            <!-- Card header -->
            <div class="card-header border-3">
              <center> <h1 class="mb-0 text-blue" style = "text-shadow: 3px 2px 5px grey;" ><b>LAPORAN DATA PENDUDUK</b></h1></center>
     
            </div>


<center>
   <!-- tabel --> 
<div class="table-responsive">
  <table border="1" +class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th>No</th>
        <th scope="col" class="sort">NIK</th>        
        <th scope="col" class="sort">Nama Penduduk</th>
        <th scope="col" class="sort" >Tempat Lahir</th>
        <th scope="col" class="sort" >Tanggal Lahir</th>
        <th scope="col" class="sort">Jenis Kelamin</th>
        <th scope="col" class="sort">Agama</th>
        <th scope="col" class="sort">Pendidikan</th>
        <th scope="col" class="sort">Pekerjaan</th>
        <th scope="col" class="sort">Status</th>
        <th scope="col" class="sort">Nama Ayah</th>
        <th scope="col" class="sort">Nama Ibu</th>
        <th scope="col" class="sort">Kewarganegaraan</th>
        <th scope="col" class="sort">Golongan Darah</th>
        <th scope="col" class="sort">Nomor Telephone</th>
        <th scope="col" class="sort">RT</th>
        <th scope="col" class="sort">RW</th>
        <th scope="col" class="sort">Dusun</th>
        <th scope="col" class="sort">Level Akun</th>
        <th scope="col" class="sort">Status Akun</th>
      </tr>
    </thead>

    <?php  $no =1; foreach($penduduk as $warga) : ?>
        
        <tbody> 
        <tr>
          <th><?php echo $no++; ?></th>

          <th><?php echo $warga->NIK ?></th>
          <th><?php echo $warga->nama ?></th>
          <th><?php echo $warga->tempat_lahir ?></th>
          <th><?php echo $warga->tanggal_lahir ?></th>
          <th><?php echo $warga->gender ?></th>
          <th><?php echo $warga->agama ?></th>
          <th><?php echo $warga->pendidikan ?></th>
          <th><?php echo $warga->pekerjaan ?></th>
          <th><?php echo $warga->status ?></th>
          <th><?php echo $warga->nama_ayah ?></th>
          <th><?php echo $warga->nama_ibu ?></th>
          <th><?php echo $warga->kewarganegaraan ?></th>
          <th><?php echo $warga->golongan_darah ?></th>
          <th><?php echo $warga->no_tlp ?></th>
          <th><?php echo $warga->rt ?></th>
          <th><?php echo $warga->rw ?></th>
          <th><?php echo $warga->dusun ?></th>
          <th><?php echo $warga->level ?></th>
          <th><?php echo $warga->status_akun ?></th>

        </tr>
        </tbody>
  
        
        <?php endforeach; ?>

        <script type="text/javascript">
                        window.print();
                    </script>


  </table>
</div>
    </center>

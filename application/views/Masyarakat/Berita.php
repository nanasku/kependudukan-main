<!--Halaman Tampil Berita-->
<div class="header-body text-center mb-7">
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 mt-5 px-5">
                <span id="woroworo"><h1 class="text-blue"><b>BERITA DALAM DESA</b></h1></span>
                <p class="text-lead text-danger"><b>Hindari Berita Desa HOAXS, mulai dapatkan berita dari website kami !</b></p>
            </div>
        </div>
    </div>
    <p class="section-lead"></p>
    <div class="row">
        <?php foreach($berita as $news) { ?>
            <div class="col-12 col-md-4 col-lg-4">
                <a href="<?= site_url('Masyarakat/Detail_Berita/'.$news->no_berita) ?>" class="text-decoration-none">
                    <article class="article article-style-c">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="<?php echo base_url().'/gambarberita/'.$news->gambar ?>" alt="Card image cap" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <p class="card-text" style="color:black;">
                                    <b><?php echo $news->judul_berita ?></b><br><br>
                                    <?php echo $news->headnews ?><br><br>
                                </p>
                                <small class="text-muted">
                                    <i class="ni ni-calendar-grid-58"></i>
                                    <?= date('d M Y', strtotime($news->tanggal_kirim)) ?>
                                </small>
                            </div>
                        </div>
                    </article>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
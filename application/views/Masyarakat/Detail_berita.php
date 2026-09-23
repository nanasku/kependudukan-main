<!-- Header Berita -->
<div class="header pb-6 d-flex align-items-center" 
     style="min-height: 400px; background-image: url('<?= base_url('gambarberita/'.$berita->gambar) ?>'); background-size: cover; background-position: center;">
    <span class="mask bg-gradient-primary opacity-6"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="col-lg-8 col-md-10">
            <h1 class="display-2 text-white"><b><?= $berita->judul_berita ?></b></h1>
            <p class="text-white mt-3 mb-0">
                <i class="ni ni-single-02"></i> <?= $berita->pengirim ?> &nbsp;|&nbsp;
                <i class="ni ni-calendar-grid-58"></i> <?= date('d F Y', strtotime($berita->tanggal_kirim)) ?>
            </p>
        </div>
    </div>
</div>

<!-- Konten Berita -->
<div class="container-fluid mt--6">
    <div class="row">
        <!-- Artikel Utama -->
        <div class="col-lg-8">
            <div class="card">
                <img class="card-img-top" src="<?= base_url('gambarberita/'.$berita->gambar) ?>" alt="Gambar Berita">
                <div class="card-body">
                    <h3 class="mb-3"><?= $berita->judul_berita ?></h3>
                    
                    <div class="mb-4">
                        <span class="badge badge-primary"><i class="ni ni-single-02"></i> <?= $berita->pengirim ?></span>
                        <span class="badge badge-info"><i class="ni ni-calendar-grid-58"></i> <?= date('d F Y', strtotime($berita->tanggal_kirim)) ?></span>
                    </div>

                    <div class="text-justify" style="font-size: 16px; line-height: 1.8;">
                        <?= nl2br($berita->isi_berita) ?>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= site_url('Masyarakat/Berita') ?>" class="btn btn-secondary btn-sm">
                        <i class="ni ni-bold-left"></i> Kembali ke Daftar Berita
                    </a>
                </div>
            </div>
        </div>

        <!-- Sidebar: Berita Lain -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Berita Lainnya</h5>
                </div>
                <div class="card-body p-0">
                    <?php foreach($berita_lain as $lain): ?>
                    <a href="<?= site_url('Masyarakat/Detail_Berita/'.$lain->no_berita) ?>" class="d-block p-3 border-bottom text-decoration-none">
                        <div class="media align-items-center">
                            <img src="<?= base_url('gambarberita/'.$lain->gambar) ?>" 
                                 class="rounded mr-3" 
                                 style="width: 70px; height: 70px; object-fit: cover;">
                            <div class="media-body">
                                <span class="text-dark font-weight-bold d-block" style="font-size: 13px;">
                                    <?= substr($lain->judul_berita, 0, 50) ?>...
                                </span>
                                <small class="text-muted">
                                    <?= date('d M Y', strtotime($lain->tanggal_kirim)) ?>
                                </small>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
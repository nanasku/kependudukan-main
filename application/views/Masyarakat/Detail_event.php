<!-- Header Event -->
<div class="header pb-6 d-flex align-items-center" 
     style="min-height: 400px; background-image: url('<?= base_url('gambarevent/'.$event->gambar) ?>'); background-size: cover; background-position: center;">
    <span class="mask bg-gradient-warning opacity-6"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="col-lg-8 col-md-10">
            <h1 class="display-2 text-white"><b><?= $event->judul_event ?></b></h1>
        </div>
    </div>
</div>

<!-- Konten Event -->
<div class="container-fluid mt--6">
    <div class="row">
        <!-- Event Utama -->
        <div class="col-lg-8">
            <div class="card">
                <img class="card-img-top" src="<?= base_url('gambarevent/'.$event->gambar) ?>" alt="Gambar Event">
                <div class="card-body">
                    <h3 class="mb-3"><?= $event->judul_event ?></h3>

                    <div class="text-justify" style="font-size: 16px; line-height: 1.8;">
                        <?= nl2br($event->isi_event) ?>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= site_url('Masyarakat/Event') ?>" class="btn btn-secondary btn-sm">
                        <i class="ni ni-bold-left"></i> Kembali ke Daftar Event
                    </a>
                </div>
            </div>
        </div>

        <!-- Sidebar: Event Lain -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Event Lainnya</h5>
                </div>
                <div class="card-body p-0">
                    <?php foreach($event_lain as $lain): ?>
                    <a href="<?= site_url('Masyarakat/Detail_Event/'.$lain->no_event) ?>" class="d-block p-3 border-bottom text-decoration-none">
                        <div class="media align-items-center">
                            <img src="<?= base_url('gambarevent/'.$lain->gambar) ?>" 
                                 class="rounded mr-3" 
                                 style="width: 70px; height: 70px; object-fit: cover;">
                            <div class="media-body">
                                <span class="text-dark font-weight-bold d-block" style="font-size: 13px;">
                                    <?= substr($lain->judul_event, 0, 50) ?>...
                                </span>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
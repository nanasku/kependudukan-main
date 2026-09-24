<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Jadwal Ronda Rutin</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <?php foreach($ronda as $r): ?>
            <div class="card mb-3">
                <div class="card-header bg-gradient-default">
                    <h4 class="text-white mb-0"><?= $r->hari ?></h4>
                    <?php if($r->keterangan): ?>
                    <small class="text-white-50"><?= $r->keterangan ?></small>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <?php if(empty($r->anggota)): ?>
                    <p class="text-muted mb-0">Belum ada warga yang terdaftar.</p>
                    <?php else: ?>
                    <div class="row">
                        <?php foreach($r->anggota as $a): ?>
                        <div class="col-md-4 mb-2">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle bg-primary mr-2">
                                    <i class="ni ni-single-02 text-white"></i>
                                </span>
                                <div class="media-body">
                                    <span class="font-weight-bold"><?= $a->nama_warga ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>

            <?php if(empty($ronda)): ?>
            <div class="alert alert-info text-center">Belum ada jadwal ronda.</div>
            <?php endif; ?>
        </div>
    </div>
</div>
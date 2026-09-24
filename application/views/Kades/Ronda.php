<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Jadwal Ronda Rutin</h6>
                </div>
                <div class="col-auto text-right">
                  <a href="<?= site_url('Kades/Export_Excel_Ronda') ?>" class="btn btn-success btn-sm">
                      <i class="ni ni-collection"></i> Export Excel
                  </a>
                  <a href="<?= site_url('Kades/Print_Ronda') ?>" target="_blank" class="btn btn-warning btn-sm">
                      <i class="ni ni-print-60"></i> Cetak PDF
                  </a>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Jadwal Ronda Mingguan</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th width="60">No</th>
                                <th width="150">Hari</th>
                                <th>Keterangan</th>
                                <th>Daftar Warga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(empty($ronda)): ?>
                            <tr><td colspan="4" class="text-center text-muted">Belum ada jadwal ronda</td></tr>
                            <?php else: ?>
                            <?php $no = 1; foreach($ronda as $r): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><span class="badge badge-primary"><?= $r->hari ?></span></td>
                                <td><?= $r->keterangan ?: '-' ?></td>
                                <td>
                                    <?php if(empty($r->anggota)): ?>
                                    <span class="text-muted">Belum ada</span>
                                    <?php else: ?>
                                    <ul class="mb-0 pl-3">
                                        <?php foreach($r->anggota as $a): ?>
                                        <li><?= $a->nama_warga ?> <?= $a->NIK ? '('.$a->NIK.')' : '' ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
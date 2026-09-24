<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Kelola Jadwal Ronda</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?= site_url('Perangkat') ?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Ronda</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-auto text-right">
                    <a href="<?= site_url('Perangkat/Export_Excel_Ronda') ?>" class="btn btn-success btn-sm">
                        <i class="ni ni-collection"></i> Export Excel
                    </a>
                    <a href="<?= site_url('Perangkat/Print_Ronda') ?>" target="_blank" class="btn btn-warning btn-sm">
                        <i class="ni ni-print-60"></i> Cetak PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">

    <!-- Flash Message -->
    <?php if($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text"><?= $this->session->flashdata('success') ?></span>
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
    <?php endif; ?>
    <?php if($this->session->flashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="ni ni-sound-wave"></i></span>
        <span class="alert-text"><?= $this->session->flashdata('error') ?></span>
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
    <?php endif; ?>

    <div class="row">
        <!-- Form Tambah Hari -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Tambah Hari Ronda</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= site_url('Perangkat/Proses_Tambah_Hari_Ronda') ?>">
                        <div class="form-group">
                            <label>Hari</label>
                            <select name="hari" class="form-control" required>
                                <option value="">-- Pilih Hari --</option>
                                <option>Senin</option>
                                <option>Selasa</option>
                                <option>Rabu</option>
                                <option>Kamis</option>
                                <option>Jumat</option>
                                <option>Sabtu</option>
                                <option>Minggu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Keterangan (opsional)</label>
                            <input type="text" name="keterangan" class="form-control" placeholder="cth: Pos Kamling RT 01">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Tambah Hari</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tabel Jadwal Ronda -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Jadwal Ronda Mingguan</h3>
                </div>
                <div class="card-body">
                    <?php foreach($ronda as $r): ?>
                    <div class="card mb-3 border">
                        <div class="card-header bg-gradient-default">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="text-white mb-0"><?= $r->hari ?></h4>
                                    <?php if($r->keterangan): ?>
                                    <small class="text-white-50"><?= $r->keterangan ?></small>
                                    <?php endif; ?>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalTambah<?= $r->id_jadwal ?>">
                                        <i class="ni ni-fat-add"></i> Tambah Warga
                                    </button>
                                    <a href="<?= site_url('Perangkat/Halaman_Reminder_WA/'.$r->id_jadwal) ?>" 
                                    class="btn btn-sm btn-success" 
                                    title="Kirim Reminder WhatsApp">
                                        <i class="fab fa-whatsapp"></i> Reminder
                                    </a>
                                    <a href="<?= site_url('Perangkat/Hapus_Hari_Ronda/'.$r->id_jadwal) ?>" 
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Hapus jadwal hari <?= $r->hari ?> beserta semua anggotanya?')">
                                        <i class="ni ni-fat-remove"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th width="60">No</th>
                                        <th>Nama Warga</th>
                                        <th>NIK</th>
                                        <th width="80">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(empty($r->anggota)): ?>
                                    <tr><td colspan="4" class="text-center text-muted">Belum ada anggota</td></tr>
                                    <?php else: ?>
                                    <?php $no = 1; foreach($r->anggota as $a): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $a->nama_warga ?></td>
                                        <td><?= $a->NIK ?: '-' ?></td>
                                        <td>
                                            <a href="<?= site_url('Perangkat/Hapus_Anggota_Ronda/'.$a->id_anggota) ?>" 
                                               class="btn btn-sm btn-danger"
                                               onclick="return confirm('Hapus anggota ini?')">
                                                <i class="ni ni-fat-remove"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Modal Tambah Anggota -->
                    <div class="modal fade" id="modalTambah<?= $r->id_jadwal ?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <form method="POST" action="<?= site_url('Perangkat/Proses_Tambah_Anggota_Ronda') ?>">
                                    <input type="hidden" name="id_jadwal" value="<?= $r->id_jadwal ?>">
                                    
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            <i class="ni ni-fat-add"></i> Tambah Warga - <strong><?= $r->hari ?></strong>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>

                                    <div class="modal-body">
                                        <!-- Filter RT -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><i class="ni ni-shop"></i> Filter RT</label>
                                                    <select id="filterRT<?= $r->id_jadwal ?>" class="form-control form-control-sm" onchange="filterPenduduk(<?= $r->id_jadwal ?>)">
                                                        <option value="">-- Semua RT --</option>
                                                        <?php foreach($list_rt as $rt): ?>
                                                        <option value="<?= $rt->rt ?>">RT <?= $rt->rt ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><i class="ni ni-zoom-split-in"></i> Cari Nama</label>
                                                    <input type="text" id="searchNama<?= $r->id_jadwal ?>" 
                                                        class="form-control form-control-sm" 
                                                        placeholder="Ketik nama warga..."
                                                        oninput="filterPenduduk(<?= $r->id_jadwal ?>)">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Dropdown Warga -->
                                        <div class="form-group">
                                            <label>Pilih Warga <span class="text-danger">*</span></label>
                                                <select name="NIK" id="selectWarga<?= $r->id_jadwal ?>" class="form-control" required size="8">
                                                    <option value="">-- Pilih Warga --</option>
                                                    <?php foreach($penduduk as $p): ?>
                                                    <option value="<?= $p->NIK ?>" 
                                                            data-rt="<?= $p->rt ?>" 
                                                            data-nama="<?= strtolower($p->nama) ?>">
                                                        <?= $p->nama ?> 
                                                        — RT <?= $p->rt ?>/RW <?= $p->rw ?> 
                                                        — <?= $p->dusun ?>
                                                        — [<?= $p->level ?>]
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            <small class="text-muted" id="infoCount<?= $r->id_jadwal ?>"></small>
                                        </div>

                                        <!-- Preview Warga Terpilih -->
                                        <div class="alert alert-info py-2 mb-0" id="previewWarga<?= $r->id_jadwal ?>" style="display:none;">
                                            <i class="ni ni-check-bold"></i> 
                                            Terpilih: <strong id="previewNama<?= $r->id_jadwal ?>"></strong>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="ni ni-fat-add"></i> Tambah ke Jadwal
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <?php if(empty($ronda)): ?>
                    <div class="alert alert-info">Belum ada hari ronda. Silakan tambahkan hari terlebih dahulu.</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function filterPenduduk(idJadwal) {
    var rt = document.getElementById('filterRT' + idJadwal).value.toLowerCase();
    var keyword = document.getElementById('searchNama' + idJadwal).value.toLowerCase();
    var select = document.getElementById('selectWarga' + idJadwal);
    var options = select.options;
    var count = 0;

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        if (opt.value === '') continue; // Skip placeholder

        var optRT = (opt.getAttribute('data-rt') || '').toLowerCase();
        var optNama = (opt.getAttribute('data-nama') || '').toLowerCase();

        var matchRT = !rt || optRT === rt;
        var matchNama = !keyword || optNama.indexOf(keyword) !== -1;

        if (matchRT && matchNama) {
            opt.style.display = '';
            count++;
        } else {
            opt.style.display = 'none';
        }
    }

    document.getElementById('infoCount' + idJadwal).textContent = count + ' warga ditemukan';
}

// Preview saat pilih warga
document.addEventListener('DOMContentLoaded', function() {
    var selects = document.querySelectorAll('select[id^="selectWarga"]');
    selects.forEach(function(sel) {
        sel.addEventListener('change', function() {
            var idJadwal = this.id.replace('selectWarga', '');
            var preview = document.getElementById('previewWarga' + idJadwal);
            var previewNama = document.getElementById('previewNama' + idJadwal);
            
            if (this.value) {
                var text = this.options[this.selectedIndex].text;
                previewNama.textContent = text;
                preview.style.display = 'block';
            } else {
                preview.style.display = 'none';
            }
        });
    });
});
</script>
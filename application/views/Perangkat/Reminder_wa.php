<div class="header bg-success pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Reminder WhatsApp - <?= $jadwal->hari ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="alert alert-info">
                <i class="ni ni-send"></i>
                Centang warga yang ingin dikirimi pesan, lalu klik <b>Kirim ke Semua Terpilih</b>.
                Browser akan membuka tab WhatsApp satu per satu.
                <br><small class="text-danger">
                    ⚠️ Izinkan <b>popup</b> untuk situs ini agar semua tab bisa terbuka.
                </small>
            </div>

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Daftar Warga Ronda - <?= $jadwal->hari ?></h3>
                    <div>
                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="ceklisSemua()">
                            <i class="ni ni-check-bold"></i> Ceklis Semua
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="uncheckSemua()">
                            <i class="ni ni-fat-remove"></i> Hapus Ceklis
                        </button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center">
                        <thead class="thead-light">
                            <tr>
                                <th width="50">
                                    <input type="checkbox" id="checkAll" onchange="toggleAll(this)">
                                </th>
                                <th width="60">No</th>
                                <th>Nama</th>
                                <th>No. HP</th>
                                <th width="150">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(empty($anggota)): ?>
                            <tr><td colspan="5" class="text-center text-muted">Belum ada anggota</td></tr>
                            <?php else: ?>
                            <?php $no = 1; foreach($anggota as $a): ?>
                            <tr>
                                <td>
                                    <?php if($a->no_tlp): ?>
                                    <input type="checkbox" class="check-warga" 
                                           value="<?= $a->id_anggota ?>" 
                                           data-link="<?= generate_wa_link($a, $jadwal, $desa) ?>">
                                    <?php else: ?>
                                    <input type="checkbox" disabled title="Tidak ada No. HP">
                                    <?php endif; ?>
                                </td>
                                <td><?= $no++ ?></td>
                                <td><?= $a->nama_warga ?></td>
                                <td><?= $a->no_tlp ?: '<span class="text-danger">Tidak ada</span>' ?></td>
                                <td>
                                    <?php if($a->no_tlp): ?>
                                    <a href="<?= generate_wa_link($a, $jadwal, $desa) ?>" 
                                       target="_blank" class="btn btn-sm btn-success">
                                        <i class="fab fa-whatsapp"></i> Kirim WA
                                    </a>
                                    <?php else: ?>
                                    <span class="text-muted">-</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center">
                    <a href="<?= site_url('Perangkat/Ronda') ?>" class="btn btn-secondary">Kembali</a>
                    <div>
                        <span class="text-muted mr-3">
                            <b id="jumlahTerpilih">0</b> warga terpilih
                        </span>
                        <button type="button" class="btn btn-success" onclick="kirimTerpilih()" id="btnKirim">
                            <i class="fab fa-whatsapp"></i> Kirim ke Semua Terpilih
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
// Update counter saat checkbox berubah
document.addEventListener('change', function(e) {
    if (e.target.classList.contains('check-warga')) {
        updateCounter();
    }
});

function updateCounter() {
    var checked = document.querySelectorAll('.check-warga:checked').length;
    document.getElementById('jumlahTerpilih').textContent = checked;
}

function toggleAll(el) {
    var checkboxes = document.querySelectorAll('.check-warga');
    checkboxes.forEach(function(cb) {
        if (!cb.disabled) cb.checked = el.checked;
    });
    updateCounter();
}

function ceklisSemua() {
    document.querySelectorAll('.check-warga').forEach(function(cb) {
        if (!cb.disabled) cb.checked = true;
    });
    document.getElementById('checkAll').checked = true;
    updateCounter();
}

function uncheckSemua() {
    document.querySelectorAll('.check-warga').forEach(function(cb) {
        cb.checked = false;
    });
    document.getElementById('checkAll').checked = false;
    updateCounter();
}

// ==================== KIRIM MASSAL ====================
function kirimTerpilih() {
    var checked = document.querySelectorAll('.check-warga:checked');
    
    if (checked.length === 0) {
        alert('Pilih minimal satu warga terlebih dahulu.');
        return;
    }

    if (checked.length > 5) {
        if (!confirm('Anda akan membuka ' + checked.length + ' tab WhatsApp sekaligus.\n' +
                     'Pastikan popup diizinkan di browser.\n\nLanjutkan?')) {
            return;
        }
    }

    var btn = document.getElementById('btnKirim');
    btn.disabled = true;
    btn.innerHTML = '<i class="ni ni-send"></i> Mengirim...';

    var links = [];
    checked.forEach(function(cb) {
        links.push(cb.getAttribute('data-link'));
    });

    // Buka satu per satu dengan jeda 800ms
    var i = 0;
    function bukaSatu() {
        if (i >= links.length) {
            btn.disabled = false;
            btn.innerHTML = '<i class="fab fa-whatsapp"></i> Kirim ke Semua Terpilih';
            alert('✅ Selesai! ' + links.length + ' tab WhatsApp telah dibuka.\n' +
                  'Silakan tekan tombol "Kirim" di setiap tab.');
            return;
        }

        window.open(links[i], '_blank');
        i++;
        setTimeout(bukaSatu, 800);
    }

    bukaSatu();
}

// Update counter saat load pertama
updateCounter();
</script>
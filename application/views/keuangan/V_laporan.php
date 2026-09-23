<div class="main-content" id="panel">
    <div class="header bg-warning pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Laporan Keuangan Bulanan</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <!-- Filter -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="GET" action="<?= site_url('Keuangan/laporan') ?>">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Bulan</label>
                                    <select name="bulan" class="form-control">
                                        <?php for($i=1; $i<=12; $i++): ?>
                                        <option value="<?= sprintf('%02d',$i) ?>" <?= $bulan == sprintf('%02d',$i) ? 'selected' : '' ?>>
                                            <?= date('F', mktime(0,0,0,$i,1,2000)) ?>
                                        </option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Tahun</label>
                                    <select name="tahun" class="form-control">
                                        <?php for($i=date('Y'); $i>=2020; $i--): ?>
                                        <option value="<?= $i ?>" <?= $tahun == $i ? 'selected' : '' ?>><?= $i ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>&nbsp;</label><br>
                                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hasil Laporan -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Laporan Bulan <?= date('F', mktime(0,0,0,$bulan,1,2000)) ?> <?= $tahun ?></h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Jenis</th>
                                    <th>Kategori</th>
                                    <th>Keterangan</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $total_masuk = 0; 
                                $total_keluar = 0;
                                foreach($laporan as $l): 
                                    if($l->jenis == 'Pendapatan') $total_masuk += $l->jumlah;
                                    else $total_keluar += $l->jumlah;
                                ?>
                                <tr>
                                    <td><?= date('d/m/Y', strtotime($l->tanggal)) ?></td>
                                    <td>
                                        <span class="badge badge-<?= $l->jenis == 'Pendapatan' ? 'success' : 'danger' ?>">
                                            <?= $l->jenis ?>
                                        </span>
                                    </td>
                                    <td><?= $l->nama_kategori ?></td>
                                    <td><?= $l->keterangan ?></td>
                                    <td>Rp <?= number_format($l->jumlah, 0, ',', '.') ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php if(empty($laporan)): ?>
                                <tr><td colspan="5" class="text-center">Tidak ada data pada bulan ini</td></tr>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                                <tr class="bg-light">
                                    <th colspan="4" class="text-right">Total Pendapatan:</th>
                                    <th class="text-success">Rp <?= number_format($total_masuk, 0, ',', '.') ?></th>
                                </tr>
                                <tr class="bg-light">
                                    <th colspan="4" class="text-right">Total Pengeluaran:</th>
                                    <th class="text-danger">Rp <?= number_format($total_keluar, 0, ',', '.') ?></th>
                                </tr>
                                <tr class="bg-light">
                                    <th colspan="4" class="text-right">Saldo Akhir:</th>
                                    <th class="text-primary">Rp <?= number_format($total_masuk - $total_keluar, 0, ',', '.') ?></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
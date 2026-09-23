<div class="main-content" id="panel">
    <div class="header bg-<?= $jenis == 'Pendapatan' ? 'success' : 'danger' ?> pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data <?= $jenis ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <!-- Form Tambah -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Tambah <?= $jenis ?></h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?= site_url('Keuangan/simpan_transaksi') ?>">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" value="<?= date('Y-m-d') ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="id_kategori" class="form-control" required>
                                            <option value="">-- Pilih Kategori --</option>
                                            <?php foreach($kategori as $k): ?>
                                            <option value="<?= $k->id_kategori ?>"><?= $k->nama_kategori ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Jumlah (Rp)</label>
                                        <input type="number" name="jumlah" class="form-control" min="0" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?= site_url('Keuangan') ?>" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Data -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Riwayat <?= $jenis ?></h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th>Keterangan</th>
                                    <th>Jumlah</th>
                                    <th>Petugas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach($transaksi as $t): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= date('d/m/Y', strtotime($t->tanggal)) ?></td>
                                    <td><?= $t->nama_kategori ?></td>
                                    <td><?= $t->keterangan ?></td>
                                    <td>Rp <?= number_format($t->jumlah, 0, ',', '.') ?></td>
                                    <td><?= $t->petugas ?></td>
                                    <td>
                                        <a href="<?= site_url('Keuangan/hapus_transaksi/'.$t->id_transaksi.'/'.$jenis) ?>" 
                                           class="btn btn-sm btn-danger"
                                           onclick="return confirm('Yakin hapus data ini?')">
                                            <i class="ni ni-fat-remove"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php if(empty($transaksi)): ?>
                                <tr><td colspan="7" class="text-center">Belum ada data</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
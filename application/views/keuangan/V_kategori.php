<div class="main-content" id="panel">
    <div class="header bg-info pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Kelola Kategori Keuangan</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <!-- Form Tambah Kategori -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Tambah Kategori</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?= site_url('Keuangan/simpan_kategori') ?>">
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input type="text" name="nama_kategori" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis</label>
                                <select name="jenis" class="form-control" required>
                                    <option value="Pendapatan">Pendapatan</option>
                                    <option value="Pengeluaran">Pengeluaran</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- List Kategori -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Daftar Kategori</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Jenis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach($kategori as $k): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $k->nama_kategori ?></td>
                                    <td>
                                        <span class="badge badge-<?= $k->jenis == 'Pendapatan' ? 'success' : 'danger' ?>">
                                            <?= $k->jenis ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a href="<?= site_url('Keuangan/hapus_kategori/'.$k->id_kategori) ?>" 
                                           class="btn btn-sm btn-danger"
                                           onclick="return confirm('Yakin hapus kategori ini? Semua transaksi terkait akan terhapus!')">
                                            <i class="ni ni-fat-remove"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
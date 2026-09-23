<div class="main-content" id="panel">
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Keuangan</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Keuangan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
        <!-- Ringkasan -->
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Total Pendapatan</h5>
                                <span class="h2 font-weight-bold mb-0 text-success">
                                    Rp <?= number_format($total_pendapatan, 0, ',', '.') ?>
                                </span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                    <i class="ni ni-money-coins"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Total Pengeluaran</h5>
                                <span class="h2 font-weight-bold mb-0 text-danger">
                                    Rp <?= number_format($total_pengeluaran, 0, ',', '.') ?>
                                </span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                    <i class="ni ni-cart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Saldo Kas</h5>
                                <span class="h2 font-weight-bold mb-0 text-primary">
                                    Rp <?= number_format($saldo, 0, ',', '.') ?>
                                </span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                                    <i class="ni ni-wallet-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu Navigasi -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Menu Keuangan</h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= site_url('Keuangan/transaksi/Pendapatan') ?>" class="btn btn-success">
                            <i class="ni ni-money-coins"></i> Data Pendapatan
                        </a>
                        <a href="<?= site_url('Keuangan/transaksi/Pengeluaran') ?>" class="btn btn-danger">
                            <i class="ni ni-cart"></i> Data Pengeluaran
                        </a>
                        <a href="<?= site_url('Keuangan/kategori') ?>" class="btn btn-info">
                            <i class="ni ni-tag"></i> Kelola Kategori
                        </a>
                        <a href="<?= site_url('Keuangan/laporan') ?>" class="btn btn-warning">
                            <i class="ni ni-chart-bar-32"></i> Laporan Bulanan
                        </a>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Transaksi Terbaru -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Transaksi Terbaru</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th>Jenis</th>
                                    <th>Keterangan</th>
                                    <th>Jumlah</th>
                                    <th>Petugas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($transaksi_terbaru as $t): ?>
                                <tr>
                                    <td><?= date('d/m/Y', strtotime($t->tanggal)) ?></td>
                                    <td><?= $t->nama_kategori ?></td>
                                    <td>
                                        <span class="badge badge-<?= $t->jenis == 'Pendapatan' ? 'success' : 'danger' ?>">
                                            <?= $t->jenis ?>
                                        </span>
                                    </td>
                                    <td><?= $t->keterangan ?></td>
                                    <td>Rp <?= number_format($t->jumlah, 0, ',', '.') ?></td>
                                    <td><?= $t->petugas ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php if(empty($transaksi_terbaru)): ?>
                                <tr><td colspan="6" class="text-center">Belum ada transaksi</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Pengaturan Data Desa</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?= site_url('Perangkat'); ?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Pengaturan</li>
                        </ol>
                    </nav>
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
                    <h3 class="mb-0">Form Data Desa</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= site_url('Pengaturan/simpan_data_desa') ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Desa</label>
                                    <input type="text" name="nama_desa" class="form-control" 
                                           value="<?= $desa ? $desa->nama_desa : '' ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control" 
                                           value="<?= $desa ? $desa->kecamatan : '' ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kabupaten</label>
                                    <input type="text" name="kabupaten" class="form-control" 
                                           value="<?= $desa ? $desa->kabupaten : '' ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <input type="text" name="provinsi" class="form-control" 
                                           value="<?= $desa ? $desa->provinsi : '' ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode Pos</label>
                                    <input type="text" name="kode_pos" class="form-control" 
                                           value="<?= $desa ? $desa->kode_pos : '' ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Logo Desa</label>
                                    <input type="file" name="logo" class="form-control" accept="image/*">
                                    <?php if($desa && $desa->logo): ?>
                                    <small class="text-muted d-block mt-2">
                                        Logo saat ini: <img src="<?= base_url('assets/img/brand/'.$desa->logo) ?>" height="40">
                                    </small>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
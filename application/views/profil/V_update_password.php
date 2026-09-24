<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Update Password</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <!-- Flash Message -->
            <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Berhasil!</strong> <?= $this->session->flashdata('success') ?></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>

            <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-sound-wave"></i></span>
                <span class="alert-text"><strong>Gagal!</strong> <?= $this->session->flashdata('error') ?></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>

            <!-- Card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Ganti Password</h3>
                    <p class="text-muted mb-0"><small>Pastikan password baru Anda mudah diingat namun sulit ditebak.</small></p>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= site_url('Profil/simpan_password') ?>">

                        <!-- Password Lama -->
                        <div class="form-group">
                            <label class="form-control-label">Password Lama</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input type="password" name="password_lama" class="form-control" placeholder="Masukkan password lama" required>
                            </div>
                        </div>

                        <!-- Password Baru -->
                        <div class="form-group">
                            <label class="form-control-label">Password Baru</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                </div>
                                <input type="password" name="password_baru" id="password_baru" class="form-control" placeholder="Masukkan password baru" required>
                            </div>
                        </div>

                        <!-- Konfirmasi -->
                        <div class="form-group">
                            <label class="form-control-label">Konfirmasi Password Baru</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                </div>
                                <input type="password" name="konfirmasi" id="konfirmasi" class="form-control" placeholder="Ulangi password baru" required>
                            </div>
                            <small id="msg-match" class="form-text"></small>
                        </div>

                        <div class="text-right">
                            <a href="<?= site_url($this->session->userdata('level')) ?>" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Validasi realtime konfirmasi password -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var p1 = document.getElementById('password_baru');
    var p2 = document.getElementById('konfirmasi');
    var msg = document.getElementById('msg-match');

    function cek() {
        if (p2.value.length === 0) {
            msg.textContent = '';
            return;
        }
        if (p1.value === p2.value) {
            msg.textContent = '✓ Password cocok';
            msg.style.color = 'green';
        } else {
            msg.textContent = '✗ Password tidak cocok';
            msg.style.color = 'red';
        }
    }

    p1.addEventListener('input', cek);
    p2.addEventListener('input', cek);
});
</script>
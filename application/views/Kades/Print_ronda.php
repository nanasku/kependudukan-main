<!DOCTYPE html>
<html>
<head>
    <title>Cetak Jadwal Ronda</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; margin: 20px; }
        .header { text-align: center; margin-bottom: 20px; border-bottom: 2px solid #000; padding-bottom: 10px; }
        .header h2 { margin: 0; }
        .header p { margin: 2px 0; font-size: 11px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        table, th, td { border: 1px solid #000; }
        th, td { padding: 6px 8px; text-align: left; vertical-align: top; }
        th { background: #f0f0f0; }
        ul { margin: 0; padding-left: 15px; }
        .footer { margin-top: 30px; text-align: right; }
        @media print {
            .no-print { display: none; }
            @page { margin: 1cm; }
        }
    </style>
</head>
<body>

    <div class="no-print" style="text-align:right; margin-bottom:20px;">
        <button onclick="window.print()" style="padding:8px 20px; cursor:pointer; background:#5e72e4; color:#fff; border:none; border-radius:5px;">
            🖨️ Cetak / Save PDF
        </button>
        <a href="<?= site_url('Kades/Ronda') ?>" style="padding:8px 20px; background:#ccc; color:#000; text-decoration:none; border-radius:5px;">
            ⬅ Kembali
        </a>
    </div>

    <div class="header">
        <h2>JADWAL RONDA</h2>
        <h3><?= strtoupper($desa ? $desa->nama_desa : 'DESA') ?></h3>
        <p><?= $desa ? $desa->kecamatan . ', ' . $desa->kabupaten . ', ' . $desa->provinsi . ' ' . $desa->kode_pos : '' ?></p>
    </div>

    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="12%">Hari</th>
                <th width="23%">Keterangan</th>
                <th>Daftar Warga</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($ronda as $r): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><strong><?= $r->hari ?></strong></td>
                <td><?= $r->keterangan ?: '-' ?></td>
                <td>
                    <?php if(empty($r->anggota)): ?>
                    <em>-</em>
                    <?php else: ?>
<ol style="margin:0; padding-left:18px;">
    <?php foreach($r->anggota as $a): ?>
    <li><?= $a->nama_warga ?></li>
    <?php endforeach; ?>
</ol>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="footer">
        <p>Dicetak pada: <?= date('d F Y, H:i') ?> WIB</p>
        <br><br><br>
        <p>_______________________<br>Kepala Desa</p>
    </div>

</body>
</html>
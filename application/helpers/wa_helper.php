<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('generate_wa_link')) {
    /**
     * Generate link WhatsApp ke warga
     * 
     * @param object $warga  Object warga (dengan field: nama_warga, no_tlp)
     * @param object $jadwal Object jadwal (dengan field: hari, keterangan)
     * @param object $desa   Object desa (dengan field: nama_desa)
     * @return string        URL wa.me
     */
    function generate_wa_link($warga, $jadwal, $desa)
    {
        if (empty($warga->no_tlp)) return '#';

        // Format nomor: 08xx → 628xx
        $nomor = preg_replace('/[^0-9]/', '', $warga->no_tlp);
        if (substr($nomor, 0, 1) === '0') {
            $nomor = '62' . substr($nomor, 1);
        }

        // Susun pesan
        $pesan  = "Assalamualaikum *{$warga->nama_warga}*,\n\n";
        $pesan .= "Mengingatkan bahwa Anda mendapat jadwal *RONDA* pada:\n\n";
        $pesan .= "📅 Hari: *{$jadwal->hari}*\n";
        if (!empty($jadwal->keterangan)) {
            $pesan .= "📍 Lokasi: {$jadwal->keterangan}\n";
        }
        $pesan .= "🏠 Desa: " . ($desa ? $desa->nama_desa : '') . "\n\n";
        $pesan .= "Mohon hadir tepat waktu. Terima kasih. 🙏\n\n";
        $pesan .= "_Pesan otomatis dari Sistem Informasi Desa_";

        return "https://wa.me/{$nomor}?text=" . urlencode($pesan);
    }
}
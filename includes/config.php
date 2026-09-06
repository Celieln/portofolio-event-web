<?php
/* ============================================================
 * KONFIGURASI SITUS EVENT — Eventora
 * ============================================================ */

$namaEvent   = 'Eventora';
$tagline     = 'Rasakan Event Terbaik';
$promoStrip  = 'Early bird diskon 20% • Gratis merchandise untuk 100 pemesan pertama • Setiap akhir pekan';

$acaraDefault = [
    ['id' => 1, 'nama' => 'Music Fest Day 1', 'kategori' => 'Konser', 'harga' => 250000, 'hargaAsli' => 300000, 'label' => 'Terlaris', 'singkat' => 'MF', 'lokasi' => 'Stadion Gelora', 'tanggal' => '2026-08-15', 'jam' => '19.00', 'warna' => ['#7c3aed', '#6d28d9'], 'deskripsi' => 'Festival musik dengan 15 penampil nasional.'],
    ['id' => 2, 'nama' => 'Startup Summit', 'kategori' => 'Seminar', 'harga' => 150000, 'hargaAsli' => 0, 'label' => 'Baru', 'singkat' => 'SS', 'lokasi' => 'Convention Hall', 'tanggal' => '2026-09-02', 'jam' => '09.00', 'warna' => ['#0ea5e9', '#0284c7'], 'deskripsi' => 'Talkshow founder & pitch deck untuk pebisnis muda.'],
    ['id' => 3, 'nama' => 'Titik Nol Marathon', 'kategori' => 'Olahraga', 'harga' => 120000, 'hargaAsli' => 0, 'label' => '', 'singkat' => 'TM', 'lokasi' => 'Titik Nol', 'tanggal' => '2026-09-20', 'jam' => '06.00', 'warna' => ['#22c55e', '#16a34a'], 'deskripsi' => 'Lari 10K keliling kami, finisher medal & goodie bag.'],
    ['id' => 4, 'nama' => 'Food Festival 2026', 'kategori' => 'Kuliner', 'harga' => 75000, 'hargaAsli' => 100000, 'label' => 'Diskon', 'singkat' => 'FF', 'lokasi' => 'Lapangan Merdeka', 'tanggal' => '2026-10-05', 'jam' => '12.00', 'warna' => ['#f97316', '#ea580c'], 'deskripsi' => 'Lebih dari 80 tenant kuliner nusantara.'],
    ['id' => 5, 'nama' => 'Coding Bootcamp', 'kategori' => 'Workshop', 'harga' => 400000, 'hargaAsli' => 0, 'label' => 'Terlaris', 'singkat' => 'CB', 'lokasi' => 'Co-working Space', 'tanggal' => '2026-10-18', 'jam' => '08.30', 'warna' => ['#8b5cf6', '#7c3aed'], 'deskripsi' => 'Workshop intensif pemrograman web selama 2 hari.'],
    ['id' => 6, 'nama' => 'Jazz Night', 'kategori' => 'Konser', 'harga' => 200000, 'hargaAsli' => 250000, 'label' => 'Diskon', 'singkat' => 'JN', 'lokasi' => 'Sky Lounge', 'tanggal' => '2026-11-07', 'jam' => '20.00', 'warna' => ['#6366f1', '#4f46e5'], 'deskripsi' => 'Malam jazz akustik dengan dinner pilihan.'],
];

$kategoriAcara = ['Semua', 'Konser', 'Seminar', 'Workshop', 'Olahraga', 'Kuliner'];
$statusPesan   = ['Baru', 'Dikonfirmasi', 'Selesai', 'Dibatalkan'];

$kontak = ['alamat' => 'Jl. Hiburan No. 88, Jakarta', 'telepon' => '(021) 555 8811', 'wa' => '6281299008811', 'email' => 'halo@eventora.id', 'jam' => '09.00 - 21.00 WIB'];

$menuNav = [
    ['label' => 'Beranda', 'url' => 'index.php'],
    ['label' => 'Acara', 'url' => 'acara.php'],
    ['label' => 'Pesan Tiket', 'url' => 'pesan.php'],
];

$dataDir = __DIR__ . '/../data';
$acaraFile = $dataDir . '/acara.json';
$pesanFile = $dataDir . '/pesanan.json';

function e($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); }
function rupiah($n) { return 'Rp ' . number_format((int) $n, 0, ',', '.'); }
function baca_json($file, $default = []) { if (!is_file($file)) return is_array($default) ? $default : []; $d = json_decode(file_get_contents($file), true); return is_array($d) ? $d : $default; }
function tulis_json($file, $data) { $dir = dirname($file); if (!is_dir($dir)) mkdir($dir, 0777, true); file_put_contents($file, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)); }

$daftarAcara = baca_json($acaraFile, $acaraDefault);

function kartu_acara($m) {
    $badge = '';
    if (!empty($m['label'])) { $cls = $m['label'] === 'Terlaris' ? 'badge-terlaris' : ($m['label'] === 'Baru' ? 'badge-baru' : 'badge-diskon'); $badge = '<span class="badge ' . $cls . '">' . e($m['label']) . '</span>'; }
    $diskon = '';
    if ((int) $m['hargaAsli'] > 0) { $diskon = '<span class="harga-asli">' . rupiah($m['hargaAsli']) . '</span>'; if (($m['label'] ?? '') !== 'Diskon') { $badge .= '<span class="badge badge-diskon">-' . (int) round((1 - $m['harga'] / $m['hargaAsli']) * 100) . '%</span>'; } }
    $w0 = e($m['warna'][0] ?? '#7c3aed'); $w1 = e($m['warna'][1] ?? '#6d28d9');
    $tg = date('d M Y', strtotime($m['tanggal']));
    return '<article class="card" data-id="' . (int) $m['id'] . '">'
        . '<div class="card-gambar" style="background:linear-gradient(135deg,' . $w0 . ',' . $w1 . ')"><div class="img-lapis"><i class="fa-solid fa-ticket"></i></div>' . $badge . '<span class="tgl-acara"><i class="fa-regular fa-calendar"></i> ' . e($tg) . '</span></div>'
        . '<div class="card-body"><span class="card-kat">' . e($m['kategori']) . '</span>'
        . '<h3 class="card-nama">' . e($m['nama']) . '</h3>'
        . '<p class="card-desk">' . e($m['deskripsi']) . '</p>'
        . '<div class="meta-acara"><span><i class="fa-solid fa-location-dot"></i> ' . e($m['lokasi']) . '</span><span><i class="fa-regular fa-clock"></i> ' . e($m['jam']) . '</span></div>'
        . '<div class="harga">' . rupiah($m['harga']) . $diskon . '</div>'
        . '<a class="btn-tambah" href="pesan.php?acara=' . (int) $m['id'] . '">Pesan Tiket</a>'
        . '</article>';
}
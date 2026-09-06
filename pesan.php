<?php
$activePage = 'pesan.php';
$pageTitle  = 'Pesan Tiket';
require_once __DIR__ . '/includes/config.php';
$pageDesc = 'Pesan tiket acara Eventora secara online dengan mudah.';
$pilihId = isset($_GET['acara']) ? (int) $_GET['acara'] : 0;
$pilihNama = '';
foreach ($daftarAcara as $m) { if ((int)$m['id'] === $pilihId) { $pilihNama = $m['nama']; break; } }
include __DIR__ . '/includes/header.php';
?>
    <section class="page-head"><div class="container">
      <h1>Pesan Tiket</h1>
      <p>Isi data pemesan untuk mendapatkan tiket acara.</p>
    </div></section>

    <section class="section"><div class="container daftar-layout">
      <div class="panel-form" data-aos="fade-up">
        <h2 class="form-title">Formulir Pemesanan</h2>
        <form id="form-pesan" class="form">
          <label class="field"><span>Nama Lengkap *</span><input type="text" id="nama" placeholder="Nama Anda" required></label>
          <label class="field"><span>No. HP / WhatsApp *</span><input type="text" id="telepon" placeholder="08xxxxxxxxxx" required></label>
          <div class="grid-2-form">
            <label class="field"><span>Email</span><input type="email" id="email" placeholder="email@contoh.com"></label>
            <label class="field"><span>Jumlah Tiket *</span><input type="number" id="jumlah" value="1" min="1" max="10" required></label>
          </div>
          <label class="field"><span>Pilih Acara *</span>
            <select id="pilih-acara" required>
              <option value="">-- Pilih acara --</option>
              <?php foreach ($daftarAcara as $m): ?><option value="<?= (int)$m['id'] ?>" <?= (int)$m['id'] === $pilihId ? 'selected' : '' ?>><?= e($m['nama']) ?> — <?= rupiah($m['harga']) ?></option><?php endforeach; ?>
            </select>
          </label>
          <label class="field"><span>Catatan</span><textarea id="catatan" rows="3" placeholder="Catatan tambahan (opsional)..."></textarea></label>
          <button type="submit" class="btn"><i class="fa-solid fa-ticket"></i> Pesan Sekarang</button>
        </form>
      </div>
      <aside class="panel-info" data-aos="fade-left">
        <h3>Kenapa Memilih Eventora</h3>
        <ul>
          <li><i class="fa-solid fa-check"></i> Tiket digital terverifikasi</li>
          <li><i class="fa-solid fa-check"></i> Pembayaran mudah &amp; aneka metode</li>
          <li><i class="fa-solid fa-check"></i> Konfirmasi instan</li>
          <li><i class="fa-solid fa-check"></i> Garansi refund acara batal</li>
        </ul>
        <div class="cta-lingkup"><i class="fa-solid fa-circle-info"></i> Tiket dikirim via email/WhatsApp setelah pembayaran.</div>
      </aside>
    </div></section>

    <div class="modal" id="modal-sukses">
      <div class="modal-kotak">
        <div class="modal-ikon"><i class="fa-solid fa-check"></i></div>
        <h2>Pemesanan Berhasil</h2>
        <p>Terima kasih <b id="nama-pemesan">-</b>!</p>
        <div class="modal-kode">No. Pemesanan<b id="kode-pesan">-</b></div>
        <p><b id="jumlah-pesan">-</b> tiket · Total <b id="total-pesan">-</b></p>
        <button class="btn lebar" id="tutup-modal">Kembali ke Beranda</button>
      </div>
    </div>
<?php include __DIR__ . '/includes/footer.php'; ?>
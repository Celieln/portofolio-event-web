<?php
$activePage = 'index.php';
$pageTitle  = 'Beranda';
require_once __DIR__ . '/includes/config.php';
$pageDesc = $namaEvent . ' - ' . strtolower($tagline) . '. Konser, seminar, workshop, olahraga, dan festival di kota kamu.';
include __DIR__ . '/includes/header.php';
?>

    <div class="brand-strip"><div class="container marquee">
      <span>Live Music</span><i class="fa-solid fa-star"></i><span>Seminar Inspiratif</span><i class="fa-solid fa-star"></i><span>Workshop Interaktif</span><i class="fa-solid fa-star"></i><span>Food Festival</span><i class="fa-solid fa-star"></i><span>Live Music</span><i class="fa-solid fa-star"></i><span>Seminar Inspiratif</span><i class="fa-solid fa-star"></i><span>Workshop Interaktif</span><i class="fa-solid fa-star"></i><span>Food Festival</span><i class="fa-solid fa-star"></i>
    </div></div>

    <section class="hero">
      <div class="blob blob-1"></div>
      <div class="blob blob-2"></div>
      <div class="container hero-dalam">
        <div class="hero-teks">
          <span class="hero-badge" data-aos="fade-up">Selamat Datang</span>
          <h1 data-aos="fade-up" data-aos-delay="80">Rasakan <span class="grad">Momen Terbaik</span></h1>
          <p data-aos="fade-up" data-aos-delay="160">Temukan dan pesan tiket konser, seminar, workshop, dan festival favoritmu hanya dalam beberapa klik.</p>
          <div class="hero-aksi" data-aos="fade-up" data-aos-delay="240">
            <a href="acara.php" class="btn hvr-sweep-to-right"><i class="fa-solid fa-calendar-days"></i> Lihat Acara</a>
            <a href="pesan.php" class="btn btn-ghost hvr-sweep-to-right"><i class="fa-solid fa-ticket"></i> Pesan Tiket</a>
          </div>
          <div class="hero-stat" data-aos="fade-up" data-aos-delay="320">
            <div><b>50+</b><span>Acara</span></div>
            <div><b>100k+</b><span>Tiket Terjual</span></div>
            <div><b>4.9<i class="fa-solid fa-star"></i></b><span>Rating</span></div>
          </div>
        </div>
        <div class="hero-visual" data-aos="fade-left" data-aos-delay="200">
          <div class="hero-card utama">
            <span class="promo-label">Early Bird</span>
            <h3>Music Fest Day 1</h3>
            <p>Mulai dari</p>
            <div class="harga-hero">Rp <em>250.000</em></div>
            <a href="pesan.php?acara=1" class="btn btn-kecil btn-putih hvr-sweep-to-right">Pesan Tiket</a>
          </div>
          <div class="hero-badge-card"><i class="fa-solid fa-people-group"></i><div><b>100k+ Pengunjung</b><span>Kepercayaan tinggi</span></div></div>
          <div class="hero-mini-card"><i class="fa-solid fa-shield-heart"></i><div><b>Tiket Resmi</b><span>Terjamin &amp; aman</span></div></div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="judul-section" data-aos="fade-up">
          <div><span class="eyebrow">Unggulan</span><h2>Acara Terpopuler</h2></div>
          <a href="acara.php" class="link-semua">Lihat Semua <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="menu-grid" id="menu-grid">
          <?php foreach (array_slice($daftarAcara, 0, 3) as $i => $m): ?>
          <div data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 60 ?>"><?= kartu_acara($m) ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="promo-band">
      <div class="container promo-band-dalam" data-aos="fade-up">
        <div><span class="eyebrow light">Promo</span><h2>Early bird <em>diskon 20%</em> untuk semua tiket</h2><p>Syarat &amp; ketentuan berlaku.</p></div>
        <a href="acara.php" class="btn btn-putih hvr-sweep-to-right">Beli Sekarang</a>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="judul-section" data-aos="fade-up"><div><span class="eyebrow">Kategori</span><h2>Jenis Acara</h2></div></div>
        <div class="kategori-grid">
          <?php $ik = ['fa-music','fa-chalkboard-user','fa-laptop-code','fa-person-running','fa-utensils']; $gk = ['gk-1','gk-2','gk-3','gk-4','gk-5']; $no=0; foreach (['Konser','Seminar','Workshop','Olahraga','Kuliner'] as $k): ?>
          <a href="acara.php" class="kategori-card <?= $gk[$no] ?>" data-aos="fade-up" data-aos-delay="<?= $no*60 ?>"><i class="fa-solid <?= $ik[$no] ?>"></i><h3><?= $k ?></h3><span>Lihat →</span></a>
          <?php $no++; endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section tentang-ringkas">
      <div class="container tentang-grid" data-aos="fade-up">
        <div class="ttg-visual"><div class="ttg-gambar"><i class="fa-solid fa-calendar-check"></i></div><div class="ttg-badge">12 Thn</div></div>
        <div class="ttg-teks">
          <span class="eyebrow">Tentang Kami</span>
          <h2>Kami menghadirkan momen berharga</h2>
          <p>Eventora berdiri sejak 2021 membantu ribuan orang menemukan acara favorit dengan tiket digital yang mudah, cepat, dan aman.</p>
          <ul>
            <li><i class="fa-solid fa-check"></i> Tiket digital terverifikasi</li>
            <li><i class="fa-solid fa-check"></i> Pembayaran cepat &amp; aneka metode</li>
            <li><i class="fa-solid fa-check"></i> Garansi refund acara batal</li>
          </ul>
          <a href="acara.php" class="btn hvr-sweep-to-right">Cari Acara</a>
        </div>
      </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
<?php
$activePage = 'acara.php';
$pageTitle  = 'Acara';
require_once __DIR__ . '/includes/config.php';
$pageDesc = 'Jelajahi semua acara Eventora: konser, seminar, workshop, olahraga, dan kuliner.';
include __DIR__ . '/includes/header.php';
?>
    <section class="page-head"><div class="container">
      <h1>Jelajahi Acara</h1>
      <p>Pilih acara favoritmu dan amankan tiketnya sekarang.</p>
    </div></section>

    <section class="section"><div class="container">
      <div class="toolbar">
        <div class="filter-kategori" id="filter-kategori" data-aktif="Semua">
          <?php foreach ($kategoriAcara as $k): ?><button class="btn-filter<?= $k === 'Semua' ? ' aktif' : '' ?>" data-kategori="<?= e($k) ?>"><?= e($k) ?></button><?php endforeach; ?>
        </div>
        <input type="text" class="cari" id="cari-acara" placeholder="Cari nama acara...">
      </div>
      <p class="jumlah-produk" id="jumlah-produk"></p>
      <div class="menu-grid" id="menu-grid"></div>
    </div></section>
<?php include __DIR__ . '/includes/footer.php'; ?>
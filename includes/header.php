<?php
require_once __DIR__ . '/config.php';
$judul = isset($pageTitle) ? $pageTitle . ' | ' . $namaEvent : $namaEvent . ' - ' . $tagline;
$aktif = isset($activePage) ? $activePage : '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= e(isset($pageDesc) ? $pageDesc : $tagline . ' - ' . $promoStrip) ?>">
  <title><?= e($judul) ?></title>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='22' fill='%237c3aed'/><text x='50' y='72' font-size='48' text-anchor='middle' fill='%23ffffff' font-family='Arial, sans-serif' font-weight='bold'>E</text></svg>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Caveat:wght@700&family=Playfair+Display:wght@700;800&display=swap">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="promo-strip"><i class="fa-solid fa-bullhorn"></i> <?= e($promoStrip) ?></div>

  <header class="header">
    <div class="container header-dalam">
      <a href="index.php" class="logo"><i class="fa-solid fa-ticket"></i> Event<span>ora</span></a>
      <nav class="nav" id="nav-menu">
        <?php foreach ($menuNav as $m): ?>
        <a href="<?= e($m['url']) ?>" class="nav-link<?= $aktif === $m['url'] ? ' aktif' : '' ?>"><?= e($m['label']) ?></a>
        <?php endforeach; ?>
        <a href="pesan.php" class="nav-cta<?= $aktif === 'pesan.php' ? ' aktif' : '' ?>"><i class="fa-solid fa-ticket"></i> Pesan Tiket</a>
      </nav>
      <button class="menu-toggle" id="menu-toggle" aria-label="Buka menu"><span></span><span></span><span></span></button>
    </div>
  </header>

  <main>

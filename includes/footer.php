<?php require_once __DIR__ . '/config.php'; ?>
  </main>

  <footer class="footer">
    <div class="container footer-grid">
      <div class="footer-kol">
        <a href="index.php" class="logo"><i class="fa-solid fa-ticket"></i> Event<span>ora</span></a>
        <p>Platform tiket &amp; penyelenggaraan acara terpercaya. Dapatkan akses ke konser, seminar, workshop, dan festival terbaik.</p>
      </div>
      <div class="footer-kol">
        <h4>Navigasi</h4>
        <?php foreach ($menuNav as $m): ?><a href="<?= e($m['url']) ?>"><?= e($m['label']) ?></a><?php endforeach; ?>
      </div>
      <div class="footer-kol">
        <h4>Jam Layanan</h4>
        <p>Melayani setiap hari<br><b><?= e($kontak['jam']) ?></b></p>
        <p>Pesan online 24/7</p>
      </div>
      <div class="footer-kol">
        <h4>Kontak</h4>
        <p><i class="fa-solid fa-location-dot"></i> <?= e($kontak['alamat']) ?></p>
        <p><i class="fa-solid fa-phone"></i> <?= e($kontak['telepon']) ?></p>
        <p><i class="fa-solid fa-envelope"></i> <?= e($kontak['email']) ?></p>
      </div>
    </div>
    <div class="footer-bawah">Copyright <?= date('Y') ?> <?= e($namaEvent) ?>. Seluruh hak cipta dilindungi.</div>
  </footer>

  <script>window.ACARA_DATA = <?= json_encode($daftarAcara, JSON_UNESCAPED_UNICODE) ?>;</script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="assets/script.js"></script>
  <div class="cursor-konfeti" id="kursorKonfeti" aria-hidden="true"><span class="inti"><i class="fa-solid fa-ticket"></i></span></div>
  <script>
  (function () {
    if (window.matchMedia('(max-width:768px)').matches) return;
    var k = document.getElementById('kursorKonfeti');
    var warna = ['#7c3aed', '#f59e0b', '#10b981', '#ef4444', '#3b82f6', '#ec4899'];
    document.addEventListener('mousemove', function (e) {
      k.style.left = e.clientX + 'px'; k.style.top = e.clientY + 'px';
      var s = document.createElement('span');
      s.className = 'conf';
      s.style.background = warna[Math.floor(Math.random() * warna.length)];
      s.style.setProperty('--dx', (Math.random()*30-15) + 'px');
      s.style.setProperty('--dy', (Math.random()*-90-20) + 'px');
      s.style.setProperty('--dr', (Math.random()*360-180) + 'deg');
      k.appendChild(s); setTimeout(function(){ s.remove(); }, 1400);
    });
  })();
  </script>
</body>
</html>
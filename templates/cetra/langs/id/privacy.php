<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Kebijakan Privasi');
$page_description = 'Cara ' . SITE_NAME . ' mengumpul, menggunakan dan melindungi data pribadi anda.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Utama">
      <a href="<?= page_url() ?>#platform">Platform</a>
      <a href="<?= page_url() ?>#how">Cara kerjanya</a>
      <a href="<?= page_url() ?>#markets">Pasar</a>
      <a href="<?= page_url() ?>#faq">Soalan Lazim</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Mulakan</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Maklumat undang-undang</span>
      <h1>Kebijakan Privasi</h1>
      <p class="lede">Cara <?= e(SITE_NAME) ?> mengumpul, menggunakan dan melindungi data pribadi anda.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Terakhir diperbarui: Januari 2025</p>

      <h2>1. Pengenalan</h2>
      <p><?= e(SITE_NAME) ?> ("kami", "kita", "milik kami") komited untuk melindungi privasi pelawat dan pelanggan. Kebijakan Privasi ini menjelaskan data pribadi yang kami kumpul, mengapa kami mengumpulkannya dan cara kami memprosesnya ketika anda menggunakan tapak web dan layanan kami.</p>

      <h2>2. Maklumat yang kami kumpul</h2>
      <ul>
        <li>Data identiti — nama, tarikh lahir, dokumen ID dikeluarkan kerajaan untuk pendaftaran dan pematuhan KYC/AML.</li>
        <li>Data hubungan — alamat email, nomor telepon, alamat pos.</li>
        <li>Data kewangan — detail pembayaran, sejarah transaksi, informasi tentang sumber dana.</li>
        <li>Data teknikal — alamat IP, jenis pelayar, pengecam peranti, cookie dan analitik penggunaan.</li>
      </ul>

      <h2>3. Cara kami menggunakan data anda</h2>
      <ul>
        <li>Untuk mengesahkan identiti dan memenuhi kewajipan kawal selia.</li>
        <li>Untuk menyediakan, mengekalkan dan meningkatkan platform serta layanan kami.</li>
        <li>Untuk memproses pembayaran dan mengesan aktiviti penipuan.</li>
        <li>Untuk berkomunikasi dengan anda mengenai akun, pembaruan dan permintaan dukungan anda.</li>
        <li>Untuk mengkirim komunikasi pemasaran ketika anda telah bersetuju (anda bisa nyahlanggan pada kapan saja).</li>
      </ul>

      <h2>4. Asas undang-undang</h2>
      <p>Kami memproses data pribadi berdasarkan satu atau lebih dari dasar sah yang berikut: pelaksanaan kontrak, pematuhan kewajipan undang-undang, kepentingan sah kami, atau persetujuan anda.</p>

      <h2>5. Perkongsian dan pendedahan</h2>
      <p>Kami mungkin berkongsi data pribadi dengan pembekal pembayaran yang dikawal selia, rakan verifikasi KYC/AML, pembekal infrastruktur awan, penasihat profesional dan pihak berkuasa berwibawa ketika dikehendaki oleh undang-undang. Kami tidak menjual data pribadi.</p>

      <h2>6. Pemindahan antarabangsa</h2>
      <p>Apabila data pribadi dipindahkan ke luar bidang kuasa anda, kami memastikan perlindungan yang sesuai tersedia, termasuk klausa kontrak standard.</p>

      <h2>7. Pengekalan data</h2>
      <p>Kami mengekalkan data pribadi selama yang diperlukan untuk menyediakan layanan dan memenuhi keperluan undang-undang, kawal selia dan perakunan — biasanya sekurang-kurangnya lima tahun selepas penutupan akun.</p>

      <h2>8. Hak anda</h2>
      <p>Tertakluk kepada undang-undang terpakai, anda bisa meminta akses, pembetulan, pemadaman, sekatan atau portabiliti data pribadi anda, dan bisa membantah pemprosesan tertentu. Untuk melaksanakan hak ini, hubungi kami di alamat di bawah.</p>

      <h2>9. Kuki</h2>
      <p>Kami menggunakan cookie penting dan analitik untuk mengendalikan tapak dan memahami penggunaan. Anda bisa mengurus cookie melalui tetapan pelayar anda.</p>

      <h2>10. Keamanan</h2>
      <p>Kami menggunakan perlindungan pentadbiran, teknikal dan fizikal yang direka untuk melindungi data pribadi dari akses tanpa kebenaran, pendedahan, pengubahan atau pemusnahan. Tiada sistem yang benar-benar selamat, dan kami tidak dapat menjamin keamanan mutlak.</p>

      <h2>11. Perubahan</h2>
      <p>Kami mungkin mengemas kini Dasar ini dari saat ke saat. Versi terkini akan sentiasa tersedia di halaman ini dengan tarikh yang dipembaruan.</p>

      <h2>12. Hubungi</h2>
      <p>Untuk soalan privasi atau untuk melaksanakan hak anda, hubungi pasukan Perlindungan Data <?= e(SITE_NAME) ?> melalui <a href="<?= page_url('contacts.php') ?>">halaman hubungan kami</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Kembali ke beranda</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Hak cipta dilindungi ·
      <a href="<?= page_url('privacy.php') ?>">Privasi</a> ·
      <a href="<?= page_url('conditions.php') ?>">Terma</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>

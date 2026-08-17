<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Dasar Privasi');
$page_description = 'Cara ' . SITE_NAME . ' mengumpul, menggunakan dan melindungi data peribadi anda.';
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
      <a href="<?= page_url() ?>#how">Cara ia berfungsi</a>
      <a href="<?= page_url() ?>#markets">Pasaran</a>
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
      <h1>Dasar Privasi</h1>
      <p class="lede">Cara <?= e(SITE_NAME) ?> mengumpul, menggunakan dan melindungi data peribadi anda.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Kemas kini terakhir: Januari 2025</p>

      <h2>1. Pengenalan</h2>
      <p><?= e(SITE_NAME) ?> ("kami", "kita", "milik kami") komited untuk melindungi privasi pelawat dan pelanggan. Dasar Privasi ini menjelaskan data peribadi yang kami kumpul, mengapa kami mengumpulkannya dan cara kami memprosesnya apabila anda menggunakan tapak web dan perkhidmatan kami.</p>

      <h2>2. Maklumat yang kami kumpul</h2>
      <ul>
        <li>Data identiti — nama, tarikh lahir, dokumen ID dikeluarkan kerajaan untuk pendaftaran dan pematuhan KYC/AML.</li>
        <li>Data hubungan — alamat e-mel, nombor telefon, alamat pos.</li>
        <li>Data kewangan — butiran pembayaran, sejarah transaksi, maklumat tentang sumber dana.</li>
        <li>Data teknikal — alamat IP, jenis pelayar, pengecam peranti, kuki dan analitik penggunaan.</li>
      </ul>

      <h2>3. Cara kami menggunakan data anda</h2>
      <ul>
        <li>Untuk mengesahkan identiti dan memenuhi kewajipan kawal selia.</li>
        <li>Untuk menyediakan, mengekalkan dan menambah baik platform serta perkhidmatan kami.</li>
        <li>Untuk memproses pembayaran dan mengesan aktiviti penipuan.</li>
        <li>Untuk berkomunikasi dengan anda mengenai akaun, kemas kini dan permintaan sokongan anda.</li>
        <li>Untuk menghantar komunikasi pemasaran apabila anda telah bersetuju (anda boleh nyahlanggan pada bila-bila masa).</li>
      </ul>

      <h2>4. Asas undang-undang</h2>
      <p>Kami memproses data peribadi berdasarkan satu atau lebih daripada asas sah yang berikut: pelaksanaan kontrak, pematuhan kewajipan undang-undang, kepentingan sah kami, atau persetujuan anda.</p>

      <h2>5. Perkongsian dan pendedahan</h2>
      <p>Kami mungkin berkongsi data peribadi dengan pembekal pembayaran yang dikawal selia, rakan pengesahan KYC/AML, pembekal infrastruktur awan, penasihat profesional dan pihak berkuasa berwibawa apabila dikehendaki oleh undang-undang. Kami tidak menjual data peribadi.</p>

      <h2>6. Pemindahan antarabangsa</h2>
      <p>Apabila data peribadi dipindahkan ke luar bidang kuasa anda, kami memastikan perlindungan yang sesuai tersedia, termasuk klausa kontrak standard.</p>

      <h2>7. Pengekalan data</h2>
      <p>Kami mengekalkan data peribadi selama yang diperlukan untuk menyediakan perkhidmatan dan memenuhi keperluan undang-undang, kawal selia dan perakaunan — biasanya sekurang-kurangnya lima tahun selepas penutupan akaun.</p>

      <h2>8. Hak anda</h2>
      <p>Tertakluk kepada undang-undang terpakai, anda boleh meminta akses, pembetulan, pemadaman, sekatan atau portabiliti data peribadi anda, dan boleh membantah pemprosesan tertentu. Untuk melaksanakan hak ini, hubungi kami di alamat di bawah.</p>

      <h2>9. Kuki</h2>
      <p>Kami menggunakan kuki penting dan analitik untuk mengendalikan tapak dan memahami penggunaan. Anda boleh mengurus kuki melalui tetapan pelayar anda.</p>

      <h2>10. Keselamatan</h2>
      <p>Kami menggunakan perlindungan pentadbiran, teknikal dan fizikal yang direka untuk melindungi data peribadi daripada akses tanpa kebenaran, pendedahan, pengubahan atau pemusnahan. Tiada sistem yang benar-benar selamat, dan kami tidak dapat menjamin keselamatan mutlak.</p>

      <h2>11. Perubahan</h2>
      <p>Kami mungkin mengemas kini Dasar ini dari semasa ke semasa. Versi terkini akan sentiasa tersedia di halaman ini dengan tarikh yang dikemas kini.</p>

      <h2>12. Hubungi</h2>
      <p>Untuk soalan privasi atau untuk melaksanakan hak anda, hubungi pasukan Perlindungan Data <?= e(SITE_NAME) ?> melalui <a href="<?= page_url('contacts.php') ?>">halaman hubungan kami</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Kembali ke laman utama</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Hak cipta terpelihara ·
      <a href="<?= page_url('privacy.php') ?>">Privasi</a> ·
      <a href="<?= page_url('conditions.php') ?>">Terma</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>

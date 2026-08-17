<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Terma Penggunaan');
$page_description = 'Peraturan yang terpakai apabila anda mengakses atau menggunakan ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
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
      <span class="eyebrow">Legal</span>
      <h1>Terma Penggunaan</h1>
      <p class="lede">Peraturan yang terpakai apabila anda mengakses atau menggunakan <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Kemas kini terakhir: Januari 2025</p>

      <h2>1. Penerimaan Terma</h2>
      <p>Dengan mengakses atau menggunakan tapak web dan perkhidmatan <?= e(SITE_NAME) ?>, anda bersetuju untuk terikat dengan Terma Penggunaan ini. Jika anda tidak bersetuju, jangan gunakan perkhidmatan.</p>

      <h2>2. Kelayakan</h2>
      <p>Anda mestilah sekurang-kurangnya 18 tahun (atau umur dewasa di bidang kuasa anda) dan mempunyai keupayaan undang-undang untuk memasuki kontrak yang mengikat. Perkhidmatan tidak ditawarkan kepada penduduk di bidang kuasa terhad di mana tawaran sedemikian adalah haram.</p>

      <h2>3. Pendaftaran akaun</h2>
      <p>Anda bersetuju untuk memberikan maklumat yang tepat, semasa dan lengkap semasa pendaftaran dan untuk memastikan maklumat ini dikemas kini. Anda bertanggungjawab mengekalkan kerahsiaan kelayakan anda dan untuk semua aktiviti pada akaun anda.</p>

      <h2>4. Perkhidmatan</h2>
      <p><?= e(SITE_NAME) ?> menyediakan alatan teknologi dan maklumat pendidikan berkaitan pelaburan dalam talian. Kami bukan penasihat kewangan anda. Tiada apa-apa di tapak ini merupakan nasihat pelaburan diperibadikan, nasihat cukai atau permintaan untuk membeli atau menjual mana-mana instrumen kewangan.</p>

      <h2>5. Yuran</h2>
      <p>Yuran, spread dan komisen yang terpakai didedahkan pada platform atau dalam jadual yuran yang berkenaan. Anda bertanggungjawab ke atas sebarang cukai yang timbul daripada aktiviti anda.</p>

      <h2>6. Kelakuan dilarang</h2>
      <ul>
        <li>Menggunakan perkhidmatan untuk pengubahan wang haram, pembiayaan keganasan, manipulasi pasaran atau sebarang tujuan haram.</li>
        <li>Menyamar sebagai orang lain atau memberikan maklumat identiti palsu.</li>
        <li>Mencuba mengganggu, menjejaskan atau melakukan kejuruteraan terbalik mana-mana bahagian platform.</li>
        <li>Menggunakan alatan automatik untuk mengakses perkhidmatan selain daripada yang dibenarkan secara nyata.</li>
      </ul>

      <h2>7. Harta intelek</h2>
      <p>Semua kandungan, tanda dagangan, perisian dan bahan di tapak adalah milik <?= e(SITE_NAME) ?> atau pemberi lesennya dan dilindungi oleh undang-undang harta intelek yang terpakai. Anda diberikan lesen terhad, tidak eksklusif dan boleh dibatalkan untuk menggunakan perkhidmatan bagi tujuan yang dimaksudkan.</p>

      <h2>8. Perkhidmatan pihak ketiga</h2>
      <p>Platform mungkin mengandungi pautan kepada atau mengintegrasikan perkhidmatan pihak ketiga. Kami tidak bertanggungjawab ke atas perkhidmatan tersebut, ketersediaan, ketepatan atau kandungannya.</p>

      <h2>9. Penafian</h2>
      <p>Perkhidmatan disediakan “seperti sedia ada” dan “seperti tersedia” tanpa jaminan apa-apa jenis. Dagangan melibatkan risiko kerugian yang ketara. Lihat <a href="<?= page_url('conditions.php') ?>">Pendedahan risiko</a> kami untuk butiran.</p>

      <h2>10. Had liabiliti</h2>
      <p>Setakat maksimum yang dibenarkan oleh undang-undang, <?= e(SITE_NAME) ?> tidak akan bertanggungjawab ke atas sebarang kerosakan tidak langsung, sampingan, khas, berbangkit atau punitif, atau sebarang kehilangan keuntungan atau hasil, yang timbul daripada penggunaan perkhidmatan oleh anda.</p>

      <h2>11. Indemniti</h2>
      <p>Anda bersetuju untuk memberi indemniti dan membebaskan <?= e(SITE_NAME) ?>, ahli gabungan dan kakitangannya daripada sebarang tuntutan atau permintaan yang timbul daripada pelanggaran Terma ini atau penyalahgunaan perkhidmatan oleh anda.</p>

      <h2>12. Penggantungan dan penamatan</h2>
      <p>Kami boleh menggantung atau menamatkan akses kepada perkhidmatan pada bila-bila masa, dengan atau tanpa notis, jika kami percaya anda telah melanggar Terma ini atau undang-undang terpakai.</p>

      <h2>13. Undang-undang yang mentadbir</h2>
      <p>Terma ini ditadbir oleh undang-undang yang terpakai di kedudukan <?= e(SITE_NAME) ?>, tanpa mengira prinsip konflik undang-undang.</p>

      <h2>14. Perubahan</h2>
      <p>Kami mungkin mengubah Terma ini dari semasa ke semasa. Penggunaan berterusan perkhidmatan selepas perubahan merupakan penerimaan Terma yang disemak.</p>

      <h2>15. Hubungi</h2>
      <p>Soalan tentang Terma ini boleh dihantar melalui <a href="<?= page_url('contacts.php') ?>">halaman hubungan kami</a>.</p>

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

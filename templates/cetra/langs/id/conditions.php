<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Ketentuan Penggunaan');
$page_description = 'Peraturan yang terpakai ketika anda mengakses atau menggunakan ' . SITE_NAME . '.';
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
      <span class="eyebrow">Hukum</span>
      <h1>Ketentuan Penggunaan</h1>
      <p class="lede">Peraturan yang terpakai ketika anda mengakses atau menggunakan <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Terakhir diperbarui: Januari 2025</p>

      <h2>1. Penerimaan Terma</h2>
      <p>Dengan mengakses atau menggunakan tapak web dan layanan <?= e(SITE_NAME) ?>, anda bersetuju untuk terikat dengan Ketentuan Penggunaan ini. Jika anda tidak bersetuju, jangan gunakan layanan.</p>

      <h2>2. Kelayakan</h2>
      <p>Anda mestilah sekurang-kurangnya 18 tahun (atau umur dewasa di bidang kuasa anda) dan mempunyai keupayaan undang-undang untuk memasuki kontrak yang mengikat. Perkhidmatan tidak ditawarkan kepada penduduk di bidang kuasa terhad di mana penawaran sedemikian adalah haram.</p>

      <h2>3. Pendaftaran akun</h2>
      <p>Anda bersetuju untuk memberikan informasi yang tepat, saat dan lengkap saat pendaftaran dan untuk memastikan informasi ini dipembaruan. Anda bertanggungjawab mengekalkan kerahsiaan kelayakan anda dan untuk semua aktiviti pada akun Anda.</p>

      <h2>4. Perkhidmatan</h2>
      <p><?= e(SITE_NAME) ?> menyediakan alatan teknologi dan informasi pendidikan berkaitan pelaburan dalam talian. Kami bukan penasihat kewangan anda. Tiada apa-apa di tapak ini merupakan nasihat pelaburan dipribadikan, nasihat cukai atau permintaan untuk membeli atau menjual mana-mana instrumen kewangan.</p>

      <h2>5. Yuran</h2>
      <p>Yuran, spread dan komisen yang terpakai didedahkan pada platform atau dalam jadual yuran yang berkenaan. Anda bertanggungjawab ke atas sebarang cukai yang timbul dari aktiviti anda.</p>

      <h2>6. Kelakuan dilarang</h2>
      <ul>
        <li>Menggunakan layanan untuk pengubahan wang haram, pembiayaan keganasan, manipulasi pasar atau sebarang tujuan haram.</li>
        <li>Menyamar sebagai orang lain atau memberikan informasi identiti palsu.</li>
        <li>Mencoba mengganggu, menjejaskan atau melakukan kejuruteraan terbalik mana-mana bahagian platform.</li>
        <li>Menggunakan alatan otomatis untuk mengakses layanan selain dari yang dibenarkan secara nyata.</li>
      </ul>

      <h2>7. Harta intelek</h2>
      <p>Semua kandungan, tanda dagangan, perisian dan bahan di tapak adalah milik <?= e(SITE_NAME) ?> atau pemberi lesennya dan dilindungi oleh undang-undang harta intelek yang terpakai. Anda diberikan lesen terhad, tidak eksklusif dan bisa dibatalkan untuk menggunakan layanan bagi tujuan yang dimaksudkan.</p>

      <h2>8. Perkhidmatan pihak ketiga</h2>
      <p>Platform mungkin mengandungi pautan kepada atau mengintegrasikan layanan pihak ketiga. Kami tidak bertanggungjawab ke atas layanan tersebut, ketersediaan, ketepatan atau kandungannya.</p>

      <h2>9. Penafian</h2>
      <p>Perkhidmatan disediakan “seperti sedia ada” dan “seperti tersedia” tanpa jaminan apa-apa jenis. Dagangan melibatkan risiko kerugian yang ketara. Lihat <a href="<?= page_url('conditions.php') ?>">Pengungkapan risiko</a> kami untuk detail.</p>

      <h2>10. Had liabiliti</h2>
      <p>Setakat maksimum yang dibenarkan oleh undang-undang, <?= e(SITE_NAME) ?> tidak akan bertanggungjawab ke atas sebarang kerosakan tidak langsung, sampingan, khas, berbangkit atau punitif, atau sebarang kehilangan keuntungan atau hasil, yang timbul dari penggunaan layanan oleh anda.</p>

      <h2>11. Indemniti</h2>
      <p>Anda bersetuju untuk memberi indemniti dan membebaskan <?= e(SITE_NAME) ?>, ahli gabungan dan kakitangannya dari sebarang tuntutan atau permintaan yang timbul dari pelanggaran Terma ini atau penyalahgunaan layanan oleh anda.</p>

      <h2>12. Penggantungan dan penamatan</h2>
      <p>Kami bisa menggantung atau menamatkan akses kepada layanan pada kapan saja, dengan atau tanpa notis, jika kami percaya anda telah melanggar Terma ini atau undang-undang terpakai.</p>

      <h2>13. Hukum yang mentadbir</h2>
      <p>Terma ini ditadbir oleh undang-undang yang terpakai di kedudukan <?= e(SITE_NAME) ?>, tanpa mengira prinsip konflik undang-undang.</p>

      <h2>14. Perubahan</h2>
      <p>Kami mungkin mengubah Terma ini dari saat ke saat. Penggunaan berterusan layanan selepas perubahan merupakan penerimaan Terma yang disemak.</p>

      <h2>15. Hubungi</h2>
      <p>Soalan tentang Terma ini bisa dikirim melalui <a href="<?= page_url('contacts.php') ?>">halaman hubungan kami</a>.</p>

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

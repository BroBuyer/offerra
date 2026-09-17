<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kebijakan Privasi');
$page_description = 'Ketahui bagaimana ' . SITE_NAME . ' mengumpul, menggunakan dan melindungi data pribadi anda.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Kebijakan Privasi</h1>
      <p class="lead">Terakhir diperbarui: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Kebijakan Privasi ini menjelaskan bagaimana <?= e(SITE_NAME) ?> ("kami") mengumpul dan memproses informasi pribadi ketika anda menggunakan situs web dan layanan kami.</p>

      <h2>Maklumat yang kami kumpul</h2>
      <p>Kami mungkin mengumpul: nama, alamat email, nomor telepon, negara tempat tinggal, alamat IP, dan informasi yang anda berikan melalui formulir atau permintaan dukungan.</p>

      <h2>Bagaimana kami menggunakan informasi anda</h2>
      <ul>
        <li>Untuk mencipta dan mengurus akun Anda</li>
        <li>Untuk menyediakan akses platform perdagangan dan dukungan pelanggan</li>
        <li>Untuk mematuhi kewajipan undang-undang dan kawal selia</li>
        <li>Untuk meningkatkan layanan kami dan mencegah penipuan</li>
      </ul>

      <h2>Keamanan data</h2>
      <p>Kami melaksanakan langkah teknikal dan organisasi termasuk penyulitan SSL dan kontrol akses untuk melindungi data anda.</p>

      <h2>Hak anda</h2>
      <p>Bergantung pada bidang kuasa anda, anda mungkin mempunyai hak untuk mengakses, membetulkan atau memadam data pribadi anda. Hubungi <?= e(SUPPORT_EMAIL) ?> untuk melaksanakan hak ini.</p>

      <h2>Hubungi</h2>
      <p>Soalan tentang dasar ini? Email <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

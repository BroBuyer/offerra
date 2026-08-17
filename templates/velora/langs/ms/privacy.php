<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Dasar Privasi');
$page_description = 'Ketahui bagaimana ' . SITE_NAME . ' mengumpul, menggunakan dan melindungi data peribadi anda.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Dasar Privasi</h1>
      <p class="lead">Kemas kini terakhir: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Dasar Privasi ini menerangkan bagaimana <?= e(SITE_NAME) ?> ("kami") mengumpul dan memproses maklumat peribadi apabila anda menggunakan laman web dan perkhidmatan kami.</p>

      <h2>Maklumat yang kami kumpul</h2>
      <p>Kami mungkin mengumpul: nama, alamat e-mel, nombor telefon, negara kediaman, alamat IP, dan maklumat yang anda berikan melalui borang atau permintaan sokongan.</p>

      <h2>Bagaimana kami menggunakan maklumat anda</h2>
      <ul>
        <li>Untuk mencipta dan mengurus akaun anda</li>
        <li>Untuk menyediakan akses platform perdagangan dan sokongan pelanggan</li>
        <li>Untuk mematuhi kewajipan undang-undang dan kawal selia</li>
        <li>Untuk menambah baik perkhidmatan kami dan mencegah penipuan</li>
      </ul>

      <h2>Keselamatan data</h2>
      <p>Kami melaksanakan langkah teknikal dan organisasi termasuk penyulitan SSL dan kawalan akses untuk melindungi data anda.</p>

      <h2>Hak anda</h2>
      <p>Bergantung pada bidang kuasa anda, anda mungkin mempunyai hak untuk mengakses, membetulkan atau memadam data peribadi anda. Hubungi <?= e(SUPPORT_EMAIL) ?> untuk melaksanakan hak ini.</p>

      <h2>Hubungi</h2>
      <p>Soalan tentang dasar ini? E-mel <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

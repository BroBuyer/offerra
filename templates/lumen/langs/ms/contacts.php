<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Hubungi');
$page_description = 'Hubungi sokongan ' . SITE_NAME . ' — kami membantu pembiayaan, pengesahan dan permulaan.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Hubungi</p>
      <h1>Kami sedia membantu</h1>
      <p class="lead">Soalan tentang akaun, deposit atau alat AI — hubungi bila-bila masa.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Sokongan</h2>
        <p class="prose">E-mel kami di <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Masa balasan biasa dalam beberapa jam.</p>
        <a href="sign.php" class="btn btn-primary">Buka akaun</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

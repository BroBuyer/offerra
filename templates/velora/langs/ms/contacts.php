<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Hubungi');
$page_description = 'Hubungi sokongan ' . SITE_NAME . ' — kami membantu dengan pembiayaan, pengesahan dan cara bermula.';
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
      <p class="lead">Soalan tentang akaun, deposit atau alat AI anda — hubungi kami bila-bila masa.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Sokongan</h2>
        <p class="prose">E-mel kami di <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Masa balasan biasa ialah dalam beberapa jam.</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'Atau tinggalkan butiran anda';
          $form_submit = 'Hantar permintaan';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

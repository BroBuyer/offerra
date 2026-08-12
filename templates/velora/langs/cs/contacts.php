<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontaktujte podporu ' . SITE_NAME . ' — pomůžeme s financováním, verifikací a začátkem.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Jsme tu pro vás</h1>
      <p class="lead">Otázky k vašemu účtu, vkladům nebo AI nástrojům — ozvěte se kdykoli.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Podpora</h2>
        <p class="prose">Napište nám na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Typická doba odpovědi je méně než pár hodin.</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'Nebo zanechte své údaje';
          $form_submit = 'Odeslat žádost';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

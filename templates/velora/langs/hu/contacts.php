<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kapcsolat');
$page_description = 'Lépjen kapcsolatba a ' . SITE_NAME . ' támogatásával — segítünk a finanszírozásban, ellenőrzésben és a kezdésben.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kapcsolat</p>
      <h1>Itt vagyunk, hogy segítsünk</h1>
      <p class="lead">Kérdése van a fiókjával, befizetésekkel vagy AI eszközökkel kapcsolatban — keressen minket bármikor.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Támogatás</h2>
        <p class="prose">Írjon nekünk: <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. A tipikus válaszidő néhány órán belül.</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'Vagy hagyja meg adatait';
          $form_submit = 'Kérelem küldése';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

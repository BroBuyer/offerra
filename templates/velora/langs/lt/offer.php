<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kainodara');
$page_description = 'Pradėkite nuo' . SITE_NAME . 'iš' . MIN_DEPOSIT . ' ' . CURRENCY . '— skaidrus finansavimas ir visapusiška prieiga prie platformos.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kainodara</p>
      <h1>Pradėkite nuo<?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Vienas paprastas įėjimo taškas. Visa platforma po finansavimo, įskaitant AI įžvalgas ir tiesiogines rinkas.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Prieiga prie paskyros</h2>
        <p class="prose" style="margin-bottom:18px">
          Minimalus depozitas<strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Diagramos, įrankiai ir AI nurodymai atrakinami, kai jūsų sąskaita bus apmokėta.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Susikurkite paskyrą';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Árak');
$page_description = 'Kezdjen a ' . SITE_NAME . ' oldalon ' . MIN_DEPOSIT . ' ' . CURRENCY . ' összegtől — átlátható feltöltés és teljes platformhozzáférés.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Árak</p>
      <h1>Kezdés <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Egy egyszerű belépő. Feltöltés után teljes hozzáférés — MI-elemzésekkel és élő piacokkal.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Számla-hozzáférés</h2>
        <p class="prose">
          Minimális befizetés <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          A chartok, eszközök és MI-útmutatás a számla feltöltése után oldódnak fel.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Számla létrehozása';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

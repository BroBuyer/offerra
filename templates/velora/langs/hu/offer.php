<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Árazás');
$page_description = 'Kezdjen a ' . SITE_NAME . ' platformon ' . MIN_DEPOSIT . ' ' . CURRENCY . '-tól — átlátható finanszírozás és teljes platformhozzáférés.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Árazás</p>
      <h1>Kezdés <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Egy egyszerű belépési pont. Teljes platformhozzáférés finanszírozás után — AI betekintésekkel és élő piacokkal.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Fiókhozzáférés</h2>
        <p class="prose" style="margin-bottom:18px">
          Minimális befizetés <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          A chartok, eszközök és AI útmutatás a fiók finanszírozása után oldódnak fel.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Fiók létrehozása';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Cijene');
$page_description = 'Započnite na ' . SITE_NAME . ' od ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — transparentno financiranje i potpuni pristup platformi.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Cijene</p>
      <h1>Započnite od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Jedan jednostavan ulaz. Potpuni pristup nakon financiranja — uključujući AI uvide i tržišta uživo.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Pristup računu</h2>
        <p class="prose">
          Minimalni depozit <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Grafikoni, alati i AI vodstvo otključavaju se nakon financiranja računa.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Izradite račun';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

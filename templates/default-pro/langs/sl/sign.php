<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Prijava');
$page_description = 'Ustvarite račun ' . SITE_NAME . ' in začnite trgovati z orodji UI. Za ' . market_audience() . '. Najmanj ' . MIN_DEPOSIT . ' ' . CURRENCY . '.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Domov', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Prijava', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Pridružite se <?= e(SITE_NAME) ?></p>
      <h1>Odprite trgovalni račun <?= e(SITE_NAME) ?></h1>
      <p class="lead">Za <?= e(market_audience()) ?>. Najmanjši polog <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Vnesite podatke za ' . SITE_NAME;
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

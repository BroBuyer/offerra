<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrácia');
$page_description = 'Vytvorte si účet na ' . SITE_NAME . ' a začnite obchodovať s kryptomenami, forexom a globálnymi trhmi pomocou AI nástrojov.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Domov', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registrácia', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Začať teraz</p>
      <h1>Otvorte si obchodný účet</h1>
      <p class="lead">Pridajte sa k tisíckam traderov. Minimálny vklad <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Zadajte svoje údaje nižšie';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

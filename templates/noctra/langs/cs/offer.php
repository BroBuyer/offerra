<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Nabídka');
$page_description = 'Otevřete ' . SITE_NAME . ' s minimem ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — plný přístup k platformě, AI přehledy a podpora 24/7.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Domů', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Nabídka', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Nabídka</p>
      <h1>Přístup k platformě od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Plné funkce od prvního dne — grafy, signály i podpora v ceně.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Startovní plán</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> min. · Plná platforma · AI přehledy · Podpora 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Zahrnuto</div>
          <div class="specs-value">Živé trhy, multi-asset obchodování, přehled portfolia, průvodce</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Vklady</div>
          <div class="specs-value">Karta, bankovní převod, PayPal, e-peněženky</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Výběry</div>
          <div class="specs-value">Kdykoli · 1–3 pracovní dny · Poplatky zobrazeny předem</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Zařízení</div>
          <div class="specs-value">Web, tablet, mobil — bez instalace</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Začít</span>
          <span class="live-pill">Otevřeno</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Registrujte se a odemkněte nabídku';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

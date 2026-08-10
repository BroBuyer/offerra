<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ponuka');
$page_description = 'Otvorte ' . SITE_NAME . ' s minimom ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — plný přístup k platformě, AI prehľady a podpora 24/7.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Domov', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Ponuka', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Ponuka</p>
      <h1>Prístup k platforme od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Plné funkcie od prvého dňa — grafy, signály aj podpora v cene.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Štartovací plán</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> min. · Plná platforma · AI prehľady · Podpora 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Zahrnuté</div>
          <div class="specs-value">Živé trhy, multi-asset obchodovanie, prehľad portfólia, sprievodca</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Vklady</div>
          <div class="specs-value">Karta, bankový prevod, PayPal, e-peňaženky</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Výbery</div>
          <div class="specs-value">Kedykoľvek · 1–3 pracovné dni · Poplatky zobrazené vopred</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Zariadenia</div>
          <div class="specs-value">Web, tablet, mobil — bez inštalácie</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Začať</span>
          <span class="live-pill">Otvorené</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Zaregistrujte sa a odomknite ponuku';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

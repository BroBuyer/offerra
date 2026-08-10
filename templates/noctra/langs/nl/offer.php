<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Aanbod');
$page_description = 'Open ' . SITE_NAME . ' vanaf ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — volledige platformtoegang, AI-inzichten en 24/7 support.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Aanbod', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Aanbod</p>
      <h1>Platformtoegang vanaf <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Alle functies vanaf dag één — grafieken, signalen en support inbegrepen.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Starterplan</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum · Volledig platform · AI-inzichten · 24/7 support</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Inbegrepen</div>
          <div class="specs-value">Live markten, multi-asset trading, portfolioview, begeleid onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Storten</div>
          <div class="specs-value">Kaart, bankoverschrijving, PayPal, e-wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Opnames</div>
          <div class="specs-value">Altijd · 1–3 werkdagen · Kosten vooraf zichtbaar</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Apparaten</div>
          <div class="specs-value">Web, tablet, mobiel — geen installatie nodig</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Starten</span>
          <span class="live-pill">Open</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Registreer om het aanbod te ontgrendelen';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

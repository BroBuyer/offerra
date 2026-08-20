<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Piedāvājums');
$page_description = 'Open ' . SITE_NAME . ' with a ' . MIN_DEPOSIT . ' ' . CURRENCY . ' minimum — full platform access, AI insights, and Atbalsts 24/7.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Piedāvājums', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Piedāvājums</p>
      <h1>Platforma access from <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Full features from day one — charts, signals, and support included.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Starter plan</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum · Full platform · AI insights · Atbalsts 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Included</div>
          <div class="specs-value">Live markets, multi-asset trading, portfolio view, guided onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Funding</div>
          <div class="specs-value">Card, bank transfer, PayPal, e-wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Withdrawals</div>
          <div class="specs-value">Anytime · 1–3 business days · Fees shown upfront</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Devices</div>
          <div class="specs-value">Web, tablet, mobile — no install required</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Get started</span>
          <span class="live-pill">Open</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Register to unlock the offer';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

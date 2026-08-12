<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ponuda');
$page_description = 'Otvorite ' . SITE_NAME . ' s minimumom ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — puni pristup platformi, AI uvidi i podrška 24/7.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Početna', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Ponuda', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Ponuda</p>
      <h1>Pristup platformi od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Pune značajke od prvog dana — grafikoni, signali i podrška uključeni.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Početni plan</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> min. · Puna platforma · AI uvidi · Podrška 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Uključeno</div>
          <div class="specs-value">Živa tržišta, multi-asset trgovanje, pregled portfelja, vođeni onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Uplate</div>
          <div class="specs-value">Kartica, bankovni transfer, PayPal, e-novčanici</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Isplate</div>
          <div class="specs-value">Bilo kada · 1–3 radna dana · Naknade unaprijed</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Uređaji</div>
          <div class="specs-value">Web, tablet, mobitel — bez instalacije</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Započnite</span>
          <span class="live-pill">Otvoreno</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Registrirajte se za otključavanje ponude';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

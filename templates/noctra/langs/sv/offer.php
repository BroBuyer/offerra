<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Offer');
$page_description = 'Öppna ' . SITE_NAME . ' med en minsta insättning på ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — full plattformsåtkomst, AI-insikter och support dygnet runt.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Hem', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Erbjudande', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Erbjudande</p>
      <h1>Plattformsåtkomst från <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Alla funktioner från dag ett — diagram, signaler och support ingår.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Startplan</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum · Full plattform · AI-insikter · Support 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Ingår</div>
          <div class="specs-value">Live marknader, handel med flera tillgångar, portföljöversikt, guidad onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Insättning</div>
          <div class="specs-value">Kort, banköverföring, PayPal, e-plånböcker</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Uttag</div>
          <div class="specs-value">När som helst · 1–3 vardagar · Avgifter visas i förväg</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Enheter</div>
          <div class="specs-value">Webb, surfplatta, mobil — ingen installation krävs</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Kom igång</span>
          <span class="live-pill">Öppen</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Registrera dig för att låsa upp erbjudandet';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

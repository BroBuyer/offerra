<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Angebot');
$page_description = 'Open ' . SITE_NAME . ' from ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — full desk, AI signals, and 24/7 support for ' . market_audience() . '.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Startseite', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Angebot', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow"><?= e(SITE_NAME) ?> offer</p>
      <h1>Start <?= e(SITE_NAME) ?> from <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Full <?= e(SITE_NAME) ?> platform for <?= e(market_audience()) ?>. Scale when you are ready.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Einstiegszugang</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum · Full <?= e(SITE_NAME) ?> desk · AI signals · 24/7 support</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Enthaltene Leistungen</div>
          <div class="specs-value">Echtzeit-Charts, Multi-Markt-Trading, Portfolioverwaltung, geführtes Onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Einzahlungen</div>
          <div class="specs-value">Karte, Banküberweisung, PayPal, E-Wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Auszahlungen</div>
          <div class="specs-value">Jederzeit · 1-3 Werktage · Gebühren transparent vorab angezeigt</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Geräte</div>
          <div class="specs-value">Web, Tablet, Mobil — ohne Installation nutzbar</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Claim your ' . SITE_NAME . ' offer';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

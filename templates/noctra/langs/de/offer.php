<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Angebot');
$page_description = 'Starten Sie ' . SITE_NAME . ' ab ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — voller Plattformzugang, KI-Analysen und Support rund um die Uhr.';
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
      <p class="eyebrow">Angebot</p>
      <h1>Plattformzugang ab <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Alle Funktionen ab dem ersten Tag — Charts, Signale und Support inklusive.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Starter-Plan</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> Minimum · Volle Plattform · KI-Analysen · Support 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Enthalten</div>
          <div class="specs-value">Live-Märkte, Multi-Asset-Trading, Portfolio-Übersicht, geführte Einrichtung</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Einzahlung</div>
          <div class="specs-value">Karte, Banküberweisung, PayPal, E-Wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Auszahlungen</div>
          <div class="specs-value">Jederzeit · 1–3 Werktage · Gebühren im Voraus sichtbar</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Geräte</div>
          <div class="specs-value">Web, Tablet, Mobil — keine Installation nötig</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Jetzt starten</span>
          <span class="live-pill">Offen</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Registrieren, um das Angebot freizuschalten';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

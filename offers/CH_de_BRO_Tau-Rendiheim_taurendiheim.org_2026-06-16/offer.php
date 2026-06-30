<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Angebot');
$page_description = 'Wählen Sie das Angebot von ' . SITE_NAME . ' — starten Sie mit einer Mindesteinzahlung von ' . MIN_DEPOSIT . ' ' . CURRENCY . ' und erhalten Sie vollen Plattformzugang.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Angebot', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Angebot</p>
      <h1>Portfolio-Tracker gratis bei der Registrierung</h1>
      <p class="lead">Beginnen Sie mit <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Erhöhen Sie, wenn Sie bereit sind.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Basiszugang</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> Mindesteinzahlung · Volle Plattform · KI-Signale · Support rund um die Uhr</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Enthalten</div>
          <div class="specs-value">Live-Charts, Multi-Markt-Trading, Portfolio-Tracker, geführtes Onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Einzahlungen</div>
          <div class="specs-value">Karte, Überweisung, PayPal, E-Wallet</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Auszahlungen</div>
          <div class="specs-value">Jederzeit · 1–3 Werktage · Gebühren im Voraus sichtbar</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Geräte</div>
          <div class="specs-value">Web, Tablet, Mobil — ohne Download</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Angebot jetzt anfordern';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tilbud');
$page_description = 'Vælg en plan hos ' . SITE_NAME . ' — start med en minimumsindbetaling på ' . MIN_DEPOSIT . ' ' . CURRENCY . ' og få fuld adgang til platformen.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Tilbud', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Tilbud</p>
      <h1>Få porteføljeoverblik — gratis ved registrering</h1>
      <p class="lead">Start med <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Øg, når du er klar.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Basisadgang</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimumsindbetaling · Fuld platform · AI-signaler · Support 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Inkluderer</div>
          <div class="specs-value">Live grafer, handel på flere markeder, porteføljeoverblik, guidet onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Indbetaling</div>
          <div class="specs-value">Kort, bankoverførsel, PayPal, e-wallet</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Udbetaling</div>
          <div class="specs-value">Når som helst · 1–3 hverdage · Gebyrer vises på forhånd</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Enheder</div>
          <div class="specs-value">Web, tablet, mobil — uden download</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Få tilbuddet nu';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

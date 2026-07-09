<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tilbud');
$page_description = 'Velg tilbudet fra ' . SITE_NAME . ' – start med et minsteinnskudd på ' . MIN_DEPOSIT . ' ' . CURRENCY . ' og lås opp full tilgang til plattformen.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Hjem', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Tilbud', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Tilbud</p>
      <h1>Få gratis porteføljeforvaltning ved registrering</h1>
      <p class="lead">Start med <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Skaler opp når du er klar.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Starttilgang</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minsteinnskudd · Full plattform · AI-signaler · 24/7-support</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Hva er inkludert</div>
          <div class="specs-value">Sanntidsdiagrammer, handel på flere markeder, porteføljeforvaltning, veiledet onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Indbetaling</div>
          <div class="specs-value">Kort, bankoverføring, PayPal, e-lommebøker</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Uttak</div>
          <div class="specs-value">Alltid mulig · 1–3 virkedager · Gebyrer vises på forhånd</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Enheter</div>
          <div class="specs-value">Web, nettbrett, mobil – uten installasjon</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Dra nytte av dette tilbudet med og gang';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

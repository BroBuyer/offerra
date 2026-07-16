<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Erbjudande');
$page_description = 'Välj erbjudandet från ' . SITE_NAME . ' – börja med en minsta insättning på ' . MIN_DEPOSIT . ' ' . CURRENCY . ' og lås opp full tillgång til plattformen.';
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
      <h1>Få gratis portföljförvaltning vid registrering</h1>
      <p class="lead">Start med <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Skaler opp når du er klar.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Starttillgång</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minsteinnskudd · Full plattform · AI-signaler · 24/7-support</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Hva er inkludert</div>
          <div class="specs-value">Realtidsdiagrammer, handel på flere markeder, portföljforvaltning, vägledd onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Insättning</div>
          <div class="specs-value">Kort, bankoverføring, PayPal, e-lommebøker</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Uttak</div>
          <div class="specs-value">Alltid mulig · 1–3 arbetsdagar · Gebyrer vises på forhånd</div>
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

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Offer');
$page_description = 'Åpne ' . SITE_NAME . ' med et minimumsinnskudd på ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — full plattformtilgang, AI-innsikt og support døgnåpent.';
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
      <h1>Plattformtilgang fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Alle funksjoner fra dag én — diagrammer, signaler og support inkludert.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Startplan</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum · Full plattform · AI-innsikt · Support 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Inkludert</div>
          <div class="specs-value">Live markeder, multiaktiva-handel, porteføljeoversikt, guidet onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Innskudd</div>
          <div class="specs-value">Kort, bankoverføring, PayPal, e-lommebøker</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Uttak</div>
          <div class="specs-value">Når som helst · 1–3 virkedager · Gebyrer vises på forhånd</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Enheter</div>
          <div class="specs-value">Nett, nettbrett, mobil — ingen installasjon nødvendig</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Kom i gang</span>
          <span class="live-pill">Åpen</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Registrer deg for å låse opp tilbudet';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

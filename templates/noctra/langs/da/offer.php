<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Offer');
$page_description = 'Åbn ' . SITE_NAME . ' med et minimumsindskud på ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — fuld platformadgang, AI-indsigt og support døgnet rundt.';
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
      <h1>Platformadgang fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Alle funktioner fra dag ét — diagrammer, signaler og support inkluderet.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Startplan</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum · Fuld platform · AI-indsigt · Support 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Inkluderet</div>
          <div class="specs-value">Live markeder, multiaktivhandel, porteføljeoversigt, guidet onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Indbetaling</div>
          <div class="specs-value">Kort, bankoverførsel, PayPal, e-wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Udbetalinger</div>
          <div class="specs-value">Når som helst · 1–3 hverdage · Gebyrer vises på forhånd</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Enheder</div>
          <div class="specs-value">Web, tablet, mobil — ingen installation nødvendig</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Kom i gang</span>
          <span class="live-pill">Åben</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Registrér dig for at låse tilbuddet op';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

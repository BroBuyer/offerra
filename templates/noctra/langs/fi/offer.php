<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tarjous');
$page_description = 'Avaa ' . SITE_NAME . ' vähintään ' . MIN_DEPOSIT . ' ' . CURRENCY . ' talletuksella — täysi alustapääsy, tekoälynäkemykset ja 24/7-tuki.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Etusivu', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Tarjous', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Tarjous</p>
      <h1>Alustapääsy alkaen <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Kaikki ominaisuudet heti ensimmäisestä päivästä — kaaviot, signaalit ja tuki mukana.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Aloituspaketti</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> vähimmäistalletus · Täysi alusta · Tekoälynäkemykset · 24/7-tuki</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Sisältyy</div>
          <div class="specs-value">Live-markkinat, monivarakaupankäynti, salkkunäkymä, ohjattu aloitus</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Rahoitus</div>
          <div class="specs-value">Kortti, tilisiirto, PayPal, e-lompakot</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Nostot</div>
          <div class="specs-value">Milloin tahansa · 1–3 arkipäivää · Kulut näytetään etukäteen</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Laitteet</div>
          <div class="specs-value">Selain, tabletti, mobiili — ei asennusta</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Aloita</span>
          <span class="live-pill">Avoin</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Rekisteröidy avataksesi tarjouksen';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

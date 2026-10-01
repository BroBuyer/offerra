<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ponudba');
$page_description = 'Izberite paket na ' . SITE_NAME . ' — začnite z najmanjšim pologom ' . MIN_DEPOSIT . ' ' . CURRENCY . ' in odklenite celotno trgovalno platformo.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Domov', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Ponudba', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Ponudba</p>
      <h1>Sledilnik portfelja — brezplačno ob registraciji</h1>
      <p class="lead">Začnite z <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Razširite, ko boste pripravljeni.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Začetni dostop</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> najmanjši polog · Celotna platforma · Signali UI · Podpora 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Kaj je vključeno</div>
          <div class="specs-value">Grafikoni v živo, trgovanje na več trgih, sledilnik portfelja, vodeno uvajanje</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Financiranje</div>
          <div class="specs-value">Kartica, bančno nakazilo, PayPal, elektronske denarnice</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dvigi</div>
          <div class="specs-value">Kadarkoli · 1–3 delovne dni · Provizije prikazane vnaprej</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Naprave</div>
          <div class="specs-value">Splet, tablica, telefon — prenos ni potreben</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Izkoristite ponudbo zdaj';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

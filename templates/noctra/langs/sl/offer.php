<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ponudba');
$page_description = 'Odprite ' . SITE_NAME . ' z najmanj ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — poln dostop do platforme, vpogledi UI in podpora 24/7.';
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
      <h1>Dostop do platforme od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Vse funkcije od prvega dne — grafikoni, signali in podpora vključeni.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Začetni načrt</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum · Full platform · AI insights · Podpora 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Included</div>
          <div class="specs-value">Trgi v živo, multi-asset trading, portfolio view, guided onboarding</div>
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
          <div class="specs-value">Web, tablet, mobile — no install required</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Začnite</span>
          <span class="live-pill">Open</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Registrirajte se in odklenite ponudbo';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

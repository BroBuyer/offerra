<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ofertă');
$page_description = 'Deschide ' . SITE_NAME . ' cu minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — acces complet la platformă, insight-uri AI și suport 24/7.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Acasă', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Ofertă', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Ofertă</p>
      <h1>Acces la platformă de la <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Funcții complete din prima zi — grafice, semnale și suport incluse.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Plan de start</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> min. · Platformă completă · Insight-uri AI · Suport 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Inclus</div>
          <div class="specs-value">Piețe live, trading multi-asset, vizualizare portofoliu, onboarding ghidat</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Depuneri</div>
          <div class="specs-value">Card, transfer bancar, PayPal, e-wallet-uri</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Retrageri</div>
          <div class="specs-value">Oricând · 1–3 zile lucrătoare · Taxe afișate dinainte</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispozitive</div>
          <div class="specs-value">Web, tabletă, mobil — fără instalare</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Începe</span>
          <span class="live-pill">Deschis</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Înregistrează-te pentru a debloca oferta';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

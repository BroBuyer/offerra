<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Offerta');
$page_description = 'Scegli il piano di ' . SITE_NAME . ' — inizia con un deposito minimo di ' . MIN_DEPOSIT . ' ' . CURRENCY . ' e sblocca l’accesso completo alla piattaforma.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Offerta', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Offerta</p>
      <h1>Ottieni il tracker del portafoglio — gratis con la registrazione</h1>
      <p class="lead">Inizia con <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Aumenta quando sei pronto.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Accesso base</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> deposito minimo · Piattaforma completa · Segnali AI · Assistenza 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Cosa include</div>
          <div class="specs-value">Grafici live, trading multi‑mercato, tracker portafoglio, onboarding guidato</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Depositi</div>
          <div class="specs-value">Carta, bonifico, PayPal, e‑wallet</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Prelievi</div>
          <div class="specs-value">In qualsiasi momento · 1–3 giorni lavorativi · Commissioni visibili in anticipo</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispositivi</div>
          <div class="specs-value">Web, tablet, mobile — senza download</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Richiedi l’offerta ora';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

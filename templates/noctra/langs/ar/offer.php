<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Offerta');
$page_description = 'Apri ' . SITE_NAME . ' con un minimo di ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — accesso completo alla piattaforma, insight IA e supporto 24/7.';
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
      <h1>Accesso alla piattaforma da <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Tutte le funzioni dal primo giorno — grafici, segnali e supporto inclusi.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Piano iniziale</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimo · Piattaforma completa · Insight IA · Supporto 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Incluso</div>
          <div class="specs-value">Mercati live, trading multi-asset, vista portafoglio, onboarding guidato</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Finanziamento</div>
          <div class="specs-value">Carta, bonifico bancario, PayPal, e-wallet</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Prelievi</div>
          <div class="specs-value">In qualsiasi momento · 1–3 giorni lavorativi · Commissioni mostrate in anticipo</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispositivi</div>
          <div class="specs-value">Web, tablet, mobile — nessuna installazione richiesta</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Inizia</span>
          <span class="live-pill">Aperta</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Registrati per sbloccare l\'offerta';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

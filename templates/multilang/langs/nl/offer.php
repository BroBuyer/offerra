<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Aanbod');
$page_description = 'Kies het aanbod van ' . SITE_NAME . ' - start met een minimale storting van ' . MIN_DEPOSIT . ' ' . CURRENCY . ' en ontgrendel volledige toegang tot het platform.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Aanbod', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Aanbod</p>
      <h1>Krijg gratis portefeuillebeheer bij registratie</h1>
      <p class="lead">Start met <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Schaal op wanneer u er klaar voor bent.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Starttoegang</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimale storting · Volledig platform · AI-signalen · 24/7 support</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Wat is inbegrepen</div>
          <div class="specs-value">Realtime grafieken, trading op meerdere markten, portefeuillebeheer, begeleide onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Stortingen</div>
          <div class="specs-value">Kaart, bankoverschrijving, PayPal, e-wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Opnames</div>
          <div class="specs-value">Altijd mogelijk · 1-3 werkdagen · Kosten vooraf getoond</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Apparaten</div>
          <div class="specs-value">Web, tablet, mobiel - zonder installatie</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Profiteer direct van dit aanbod';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

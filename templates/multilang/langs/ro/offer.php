<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ofertă');
$page_description = 'Scegli l\'offerta di ' . SITE_NAME . ' — începe cu un depozit minim de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' e sblocca l\'accesso completo alla piattaforma.';
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
      <h1>Obține gestionarea gratuită a portofoliului la înregistrare</h1>
      <p class="lead">Începe de la <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Când ești pregătit, poți crește ulterior.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Accesso iniziale</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> depozit minim · Platformă completă · Semnale AI · Suport 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Cosa include</div>
          <div class="specs-value">Grafici in tempo reale, trading multi-mercato, gestione portafoglio, onboarding assistito</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Depuneri</div>
          <div class="specs-value">Carta, bonifico bancario, PayPal, portafogli elettronici</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Prelievi</div>
          <div class="specs-value">In qualsiasi momento · 1-3 giorni lavorativi · Costi mostrati in anticipo</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispositivi</div>
          <div class="specs-value">Web, tablet, mobile - senza installazione</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Approfitta subito dell\'offerta';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

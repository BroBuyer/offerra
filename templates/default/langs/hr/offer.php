<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ponuda');
$page_description = 'Odaberite plan na ' . SITE_NAME . ' — počnite s minimalnim depozitom od ' . MIN_DEPOSIT . ' ' . CURRENCY . ' i otključajte puni pristup platformi.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Početna', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Ponuda', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Ponuda</p>
      <h1>Praćenje portfelja — besplatno uz registraciju</h1>
      <p class="lead">Počnite s <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Proširite se kad budete spremni.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Početni pristup</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimalni depozit · Puna platforma · AI signali · Podrška 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Što je uključeno</div>
          <div class="specs-value">Grafikoni uživo, trgovanje na više tržišta, praćenje portfelja, vođena registracija</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Financiranje</div>
          <div class="specs-value">Kartica, bankovni transfer, PayPal, e-novčanici</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Isplate</div>
          <div class="specs-value">Bilo kada · 1–3 radna dana · Naknade prikazane unaprijed</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Uređaji</div>
          <div class="specs-value">Web, tablet, mobitel — bez potrebe za instalacijom</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Iskoristite ponudu odmah';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

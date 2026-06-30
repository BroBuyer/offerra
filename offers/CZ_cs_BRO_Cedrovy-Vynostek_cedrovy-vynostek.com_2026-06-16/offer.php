<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Nabídka');
$page_description = 'Vyberte si plán ' . SITE_NAME . ' — začněte s minimálním vkladem ' . MIN_DEPOSIT . ' ' . CURRENCY . ' a získejte plný přístup k platformě.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Domů', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Nabídka', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Nabídka</p>
      <h1>Získejte sledování portfolia — zdarma při registraci</h1>
      <p class="lead">Začněte s <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Navýšte, až budete připraveni.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Základní přístup</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimální vklad · Plná platforma · AI signály · Podpora 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Co je zahrnuto</div>
          <div class="specs-value">Živé grafy, obchodování na více trzích, sledování portfolia, průvodce nastavením</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Vklady</div>
          <div class="specs-value">Karta, bankovní převod, PayPal, e-peněženky</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Výběry</div>
          <div class="specs-value">Kdykoli · 1–3 pracovní dny · Poplatky viditelné předem</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Zařízení</div>
          <div class="specs-value">Web, tablet, mobil — bez stahování</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Požádejte o nabídku nyní';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

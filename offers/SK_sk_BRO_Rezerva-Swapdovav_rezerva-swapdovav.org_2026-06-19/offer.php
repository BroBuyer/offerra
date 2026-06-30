<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ponuka');
$page_description = 'Vyberte si plán ' . SITE_NAME . ' — začnite s minimálnym vkladom ' . MIN_DEPOSIT . ' ' . CURRENCY . ' a odomknite plný prístup na platformu.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Domov', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Ponuka', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Ponuka</p>
      <h1>Získajte sledovač portfólia — zadarmo s registráciou</h1>
      <p class="lead">Začnite s <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Zvýšte, keď budete pripravení.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Základný prístup</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimálny vklad · Plná platforma · AI signály · Podpora 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Čo je zahrnuté</div>
          <div class="specs-value">Live grafy, multi-trhové obchodovanie, sledovač portfólia, sprievodné nastavenie</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Vklady</div>
          <div class="specs-value">Karta, prevod, PayPal, e-peňaženky</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Výbery</div>
          <div class="specs-value">Kedykoľvek · 1–3 pracovné dni · Poplatky viditeľné vopred</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Zariadenia</div>
          <div class="specs-value">Web, tablet, mobil — bez sťahovania</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Požiadajte o ponuku teraz';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

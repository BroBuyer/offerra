<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tarjous');
$page_description = 'Valitse ' . SITE_NAME . '-suunnitelmasi — aloita ' . MIN_DEPOSIT . ' ' . CURRENCY . ' vähimmäistalletuksella ja avaa koko kaupankäyntialusta.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Etusivu', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Tarjous', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Tarjous</p>
      <h1>Hanki salkun seuranta — ilmaiseksi rekisteröityessä</h1>
      <p class="lead">Aloita <?= MIN_DEPOSIT ?> <?= CURRENCY ?>:lla. Skaalaa kun olet valmis.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Aloituspääsy</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> vähimmäistalletus · Koko alusta · Tekoälysignaalit · 24/7-tuki</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Mitä sisältyy</div>
          <div class="specs-value">Live-kaaviot, monimarkkinakaupankäynti, salkun seuranta, ohjattu aloitus</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Rahoitus</div>
          <div class="specs-value">Kortti, tilisiirto, PayPal, e-lompakot</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Nostot</div>
          <div class="specs-value">Milloin tahansa · 1–3 arkipäivää · Kulut näkyvät etukäteen</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Laitteet</div>
          <div class="specs-value">Selain, tabletti, mobiili — ei latausta tarvita</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Lunasta tarjouksesi nyt';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

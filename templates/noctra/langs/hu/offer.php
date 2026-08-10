<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ajánlat');
$page_description = 'Nyissa meg a(z) ' . SITE_NAME . ' platformot ' . MIN_DEPOSIT . ' ' . CURRENCY . ' minimummal — teljes platformhozzáférés, AI betekintések és 24/7 támogatás.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Kezdőlap', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Ajánlat', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Ajánlat</p>
      <h1>Platformhozzáférés <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Teljes funkciók az első naptól — chartok, jelek és támogatás benne van.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Kezdő csomag</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> min. · Teljes platform · AI betekintések · 24/7 támogatás</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Tartalmazza</div>
          <div class="specs-value">Élő piacok, többeszközös kereskedés, portfóliónézet, irányított onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Befizetés</div>
          <div class="specs-value">Kártya, banki átutalás, PayPal, e-pénztárcák</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Kifizetések</div>
          <div class="specs-value">Bármikor · 1–3 munkanap · Díjak előre láthatók</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Eszközök</div>
          <div class="specs-value">Web, tablet, mobil — telepítés nélkül</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Kezdés</span>
          <span class="live-pill">Nyitott</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Regisztráljon az ajánlat feloldásához';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Oferta');
$page_description = 'Otwórz ' . SITE_NAME . ' od ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — pełny dostęp do platformy, analizy AI i wsparcie 24/7.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Strona główna', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Oferta', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Oferta</p>
      <h1>Dostęp do platformy od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Pełne funkcje od pierwszego dnia — wykresy, sygnały i wsparcie w cenie.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Plan startowy</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum · Pełna platforma · Analizy AI · Wsparcie 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">W zestawie</div>
          <div class="specs-value">Rynki na żywo, handel wieloaktywowy, widok portfela, prowadzony onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Wpłaty</div>
          <div class="specs-value">Karta, przelew bankowy, PayPal, e-portfele</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Wypłaty</div>
          <div class="specs-value">W każdej chwili · 1–3 dni robocze · Opłaty widoczne z góry</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Urządzenia</div>
          <div class="specs-value">Web, tablet, telefon — bez instalacji</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Zacznij</span>
          <span class="live-pill">Otwarte</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Zarejestruj się, aby odblokować ofertę';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

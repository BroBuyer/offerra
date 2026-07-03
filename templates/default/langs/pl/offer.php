<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Oferta');
$page_description = 'Wybierz ofertę ' . SITE_NAME . ' — zacznij od minimalnej wpłaty ' . MIN_DEPOSIT . ' ' . CURRENCY . ' i odblokuj pełny dostęp do platformy.';
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
      <h1>Otrzymaj zarządzanie portfelem za darmo przy rejestracji</h1>
      <p class="lead">Zacznij od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Gdy będziesz gotowy, możesz rozwijać się dalej.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Dostęp startowy</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimalna wpłata · Pełna platforma · Sygnały AI · Wsparcie 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Co jest wliczone</div>
          <div class="specs-value">Wykresy w czasie rzeczywistym, handel wielorynkowy, zarządzanie portfelem, wspierany onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Wpłaty</div>
          <div class="specs-value">Karta, przelew bankowy, PayPal, portfele elektroniczne</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Wypłaty</div>
          <div class="specs-value">W dowolnym momencie · 1–3 dni robocze · Opłaty widoczne z góry</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Urządzenia</div>
          <div class="specs-value">Web, tablet, mobile — bez konieczności instalacji</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Skorzystaj z oferty już teraz';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

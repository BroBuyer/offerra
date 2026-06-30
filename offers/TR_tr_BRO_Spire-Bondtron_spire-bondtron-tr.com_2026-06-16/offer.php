<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Teklif');
$page_description = SITE_NAME . ' planını seçin — minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' yatırımla başlayın ve platforma tam erişim kazanın.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Ana Sayfa', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Teklif', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Teklif</p>
      <h1>Portföy takipçisini alın — kayıtla birlikte ücretsiz</h1>
      <p class="lead"><?= MIN_DEPOSIT ?> <?= CURRENCY ?> ile başlayın. Hazır olduğunuzda artırın.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Temel erişim</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum yatırım · Tam platform · Yapay zeka sinyalleri · 7/24 destek</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dahil olanlar</div>
          <div class="specs-value">Canlı grafikler, çoklu piyasa işlemi, portföy takipçisi, rehberli başlangıç</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Yatırımlar</div>
          <div class="specs-value">Kart, havale, PayPal, e-cüzdan</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Çekimler</div>
          <div class="specs-value">İstediğiniz zaman · 1–3 iş günü · Ücretler önceden görünür</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Cihazlar</div>
          <div class="specs-value">Web, tablet, mobil — indirme gerekmez</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Teklifi şimdi talep edin';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

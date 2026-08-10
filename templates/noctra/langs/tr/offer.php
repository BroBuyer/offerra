<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Teklif');
$page_description = SITE_NAME . ' platformunu ' . MIN_DEPOSIT . ' ' . CURRENCY . ' minimumla açın — tam erişim, yapay zekâ analizleri ve 7/24 destek.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Ana sayfa', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Teklif', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Teklif</p>
      <h1><?= MIN_DEPOSIT ?> <?= CURRENCY ?> ile platform erişimi</h1>
      <p class="lead">İlk günden tüm özellikler — grafikler, sinyaller ve destek dahil.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Başlangıç planı</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum · Tam platform · Yapay zekâ analizleri · 7/24 destek</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dahil</div>
          <div class="specs-value">Canlı piyasalar, çoklu varlık işlemleri, portföy görünümü, rehberli başlangıç</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Yatırma</div>
          <div class="specs-value">Kart, banka havalesi, PayPal, e-cüzdanlar</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Çekim</div>
          <div class="specs-value">İstediğiniz zaman · 1–3 iş günü · Ücretler önceden gösterilir</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Cihazlar</div>
          <div class="specs-value">Web, tablet, mobil — kurulum gerekmez</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Başlayın</span>
          <span class="live-pill">Açık</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Teklifi açmak için kaydolun';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

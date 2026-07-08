<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Teklif');
$page_description = SITE_NAME . ' teklifini secin — ' . MIN_DEPOSIT . ' ' . CURRENCY . ' minimum yatirimla baslayin ve platforma tam erisim kazanin.';
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
      <h1>Kayit olurken portfoy yonetimini ucretsiz alin</h1>
      <p class="lead"><?= MIN_DEPOSIT ?> <?= CURRENCY ?> ile baslayin. Hazir oldugunuzda olcegi buyutebilirsiniz.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Giris seviyesi erisim</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum yatirim · Tam platform · Yapay zeka sinyalleri · 7/24 destek</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Neler dahil</div>
          <div class="specs-value">Gercek zamanli grafikler, coklu piyasa islemleri, portfoy yonetimi, destekli baslangic sureci</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Yatirim yontemleri</div>
          <div class="specs-value">Kart, banka havalesi, PayPal, e-cuzdanlar</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Cekimler</div>
          <div class="specs-value">Istendigi zaman · 1-3 is gunu · Ucretler islem oncesinde gosterilir</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Cihazlar</div>
          <div class="specs-value">Web, tablet, mobil — kurulum gerektirmez</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Tekliften hemen yararlanin';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

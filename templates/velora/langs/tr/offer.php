<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Fiyatlandırma');
$page_description = ' ' . SITE_NAME . ' 'den itibaren ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — şeffaf fonlama ve tam platform erişimi.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Fiyatlandırma</p>
      <h1> 'den itibaren başlayın <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Tek basit giriş noktası. Fonlama sonrası tam platform erişimi — AI içgörüleri ve canlı piyasalar dahil.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Hesap erişimi</h2>
        <p class="prose" style="margin-bottom:18px">
          Minimum yatırım <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Hesabınız fonlandığında grafikler, araçlar ve AI rehberliği açılır.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Hesabınızı oluşturun';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

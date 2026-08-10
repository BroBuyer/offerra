<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Fiyatlandırma');
$page_description = SITE_NAME . ' üzerinde ' . MIN_DEPOSIT . ' ' . CURRENCY . ' tutarından başlayın — şeffaf fonlama ve tam platform erişimi.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Fiyatlandırma</p>
      <h1>Başlangıç <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Tek, basit bir giriş noktası. Fonlamadan sonra tam erişim — yapay zekâ içgörüleri ve canlı piyasalar dahil.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Hesap erişimi</h2>
        <p class="prose">
          Minimum yatırım <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Grafikler, araçlar ve yapay zekâ rehberliği hesabınız fonlandıktan sonra açılır.
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

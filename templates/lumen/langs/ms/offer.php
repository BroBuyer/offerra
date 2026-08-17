<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Harga');
$page_description = 'Mula di ' . SITE_NAME . ' dari ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — pembiayaan telus dan akses platform penuh.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Harga</p>
      <h1>Mula dari <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Satu pintu masuk yang mudah. Akses platform penuh selepas pembiayaan — termasuk insight AI dan pasaran langsung.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Akses akaun</h2>
        <p class="prose">
          Deposit minimum <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Carta, alat dan panduan AI dibuka selepas akaun anda dibiayai.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Cipta akaun anda';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

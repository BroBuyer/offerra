<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ceník');
$page_description = 'Začněte na ' . SITE_NAME . ' od ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — transparentní financování a plný přístup k platformě.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Ceník</p>
      <h1>Začít od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Jeden jednoduchý vstup. Po financování plný přístup — včetně AI poznatků a živých trhů.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Přístup k účtu</h2>
        <p class="prose">
          Minimální vklad <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Grafy, nástroje a vedení AI se odemknou po financování účtu.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Vytvořit účet';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

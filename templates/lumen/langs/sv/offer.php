<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Priser');
$page_description = 'Börja på ' . SITE_NAME . ' från ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — transparent finansiering och full plattformsåtkomst.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Priser</p>
      <h1>Börja från <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">En enkel ingång. Full åtkomst efter finansiering — inklusive AI-insikter och livemarknader.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Kontoåtkomst</h2>
        <p class="prose">
          Minsta insättning <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Diagram, verktyg och AI-vägledning låses upp när kontot är finansierat.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Skapa ditt konto';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Priser');
$page_description = 'Start på ' . SITE_NAME . ' fra ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — transparent finansiering og fuld platformadgang.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Priser</p>
      <h1>Start fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Én enkel indgang. Fuld adgang efter finansiering — inklusive AI-indsigter og live-markeder.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Kontoadgang</h2>
        <p class="prose">
          Mindste indbetaling <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Diagrammer, værktøjer og AI-vejledning låses op, når kontoen er finansieret.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Opret din konto';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

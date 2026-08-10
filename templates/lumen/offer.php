<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Pricing');
$page_description = 'Start on ' . SITE_NAME . ' from ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — transparent funding and full platform access.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Pricing</p>
      <h1>Start from <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">One simple entry point. Full platform access after funding — including AI insights and live markets.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Account access</h2>
        <p class="prose">
          Minimum deposit <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Charts, tools, and AI guidance unlock once your account is funded.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Create your account';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

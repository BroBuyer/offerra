<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrazione');
$page_description = 'Creează-ți contul pe ' . SITE_NAME . ' account and start trading with AI-powered tools. For ' . market_audience() . '. Minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . '.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Acasă', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registrazione', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Join <?= e(SITE_NAME) ?></p>
      <h1>Open your <?= e(SITE_NAME) ?> trading account</h1>
      <p class="lead">For <?= e(market_audience()) ?>. Minimum deposit <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Enter your details for ' . SITE_NAME;
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

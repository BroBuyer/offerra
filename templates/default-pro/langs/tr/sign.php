<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Sign Up');
$page_description = 'Create your ' . SITE_NAME . ' account and start trading with AI-powered tools. For ' . market_audience() . '. Minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . '.'faq.php'sign.php'faq'sign';
$schema_extra = ['breadcrumb' => $site . [
  ['@type' => $site . 'ListItem', 'position' => $site . 1, 'name' => $site . 'Home', 'item' => $site . page_url()],
  ['@type' => $site . 'ListItem', 'position' => $site . 2, 'name' => $site . 'Sign Up', 'item' => $site . page_url('sign.php')],
]]/includes/head.php'/includes/head.php'/includes/header.php'/includes/header.php';
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

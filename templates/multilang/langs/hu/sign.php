<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Sign Up');
$page_description = 'Create your ' . SITE_NAME . ' account és a start trading crypto, forex, és a global markets with AI-powered tools.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Kezdőlap', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Sign Up', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Get started</p>
      <h1>Open your trading account</h1>
      <p class="lead">Join thousés as of traders. Minimum deposit <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Enter your details below';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

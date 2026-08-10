<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Sign Up');
$page_description = 'Create your ' . SITE_NAME . ' account and start trading with clear AI guidance.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Get started</p>
      <h1>Create your account</h1>
      <p class="lead">Minimum deposit <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Takes less than 3 minutes.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Enter your details';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

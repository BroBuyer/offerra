<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrácia');
$page_description = 'Vytvorte účet ' . SITE_NAME . ' a začnite investovať s jasným vedením AI.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Začať</p>
      <h1>Otvorte investičný účet</h1>
      <p class="lead">Minimálny vklad <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Živé trhy po krátkom overení.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Zadajte svoje údaje';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

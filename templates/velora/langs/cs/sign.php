<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrace');
$page_description = 'Vytvořte si ' . SITE_NAME . ' účet a začněte obchodovat s jasným AI vedením.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Začít</p>
      <h1>Vytvořit účet</h1>
      <p class="lead">Minimální vklad <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Trvá méně než 3 minuty.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Zadejte své údaje';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrácia');
$page_description = 'Vytvorte si ' . SITE_NAME . ' účet a začnite obchodovať s jasným AI vedením.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Začať</p>
      <h1>Vytvoriť účet</h1>
      <p class="lead">Minimálny vklad <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Trvá menej ako 3 minúty.</p>
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

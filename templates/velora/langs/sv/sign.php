<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrera dig');
$page_description = 'Skapa ditt ' . SITE_NAME . '-konto och börja handla med tydlig AI-vägledning.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kom igång</p>
      <h1>Skapa ditt konto</h1>
      <p class="lead">Minsta insättning <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Tar mindre än 3 minuter.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Ange dina uppgifter';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

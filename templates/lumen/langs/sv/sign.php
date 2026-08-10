<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrering');
$page_description = 'Skapa ditt ' . SITE_NAME . '-konto och börja investera med tydlig AI-vägledning.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kom igång</p>
      <h1>Öppna ditt investeringskonto</h1>
      <p class="lead">Minsta insättning <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Livemarknader efter kort verifiering.</p>
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

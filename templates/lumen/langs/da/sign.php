<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tilmelding');
$page_description = 'Opret din ' . SITE_NAME . '-konto, og begynd at investere med klar AI-vejledning.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kom i gang</p>
      <h1>Åbn din investeringskonto</h1>
      <p class="lead">Mindste indbetaling <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Live-markeder efter kort verifikation.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Indtast dine oplysninger';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

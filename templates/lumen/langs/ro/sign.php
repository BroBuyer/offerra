<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Înregistrare');
$page_description = 'Creați-vă contul ' . SITE_NAME . ' și începeți să investiți cu ghidare AI clară.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Începeți</p>
      <h1>Deschideți contul de investiții</h1>
      <p class="lead">Depozit minim <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Piețe live după o verificare scurtă.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Introduceți datele';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

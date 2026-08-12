<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Înregistrare');
$page_description = 'Creați contul ' . SITE_NAME . ' și începeți tranzacționarea cu ghidare AI clară.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Începe</p>
      <h1>Creează-ți contul</h1>
      <p class="lead">Depozit minim <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Durează mai puțin de 3 minute.</p>
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

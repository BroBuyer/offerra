<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Prijavite se');
$page_description = 'Ustvarite svoj račun ' . SITE_NAME . ' in začnite vlagati z jasnimi navodili AI.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Začnite</p>
      <h1>Odprite svoj naložbeni račun</h1>
      <p class="lead">Minimalni depozit <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Živi trgi po kratkem preverjanju.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Vnesite svoje podatke';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

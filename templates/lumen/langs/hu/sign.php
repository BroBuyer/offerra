<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Regisztráció');
$page_description = 'Hozza létre ' . SITE_NAME . ' számláját, és kezdjen befektetni világos MI-útmutatással.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kezdés</p>
      <h1>Nyissa meg befektetési számláját</h1>
      <p class="lead">Minimális befizetés <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Élő piacok rövid ellenőrzés után.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Adja meg adatait';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

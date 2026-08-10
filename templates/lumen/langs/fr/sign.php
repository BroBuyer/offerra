<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Inscription');
$page_description = 'Créez votre compte ' . SITE_NAME . ' et commencez à investir avec une guidance IA claire.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Commencer</p>
      <h1>Ouvrez votre compte d’investissement</h1>
      <p class="lead">Dépôt minimum <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Marchés en direct après une courte vérification.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Saisissez vos informations';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

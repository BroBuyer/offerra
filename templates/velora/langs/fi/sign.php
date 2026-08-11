<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Rekisteröidy');
$page_description = 'Luo ' . SITE_NAME . ' -tilisi ja aloita kaupankäynti selkeällä tekoälyohjauksella.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Aloita</p>
      <h1>Luo tilisi</h1>
      <p class="lead">Vähimmäistalletus <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Kestää alle 3 minuuttia.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Syötä tietosi';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

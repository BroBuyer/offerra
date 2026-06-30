<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrierung');
$page_description = 'Eröffnen Sie Ihr Konto bei ' . SITE_NAME . ' und handeln Sie Krypto, Forex und globale Märkte mit KI-gestützten Tools.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registrierung', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Jetzt starten</p>
      <h1>Eröffnen Sie Ihr Trading-Konto</h1>
      <p class="lead">Schliessen Sie sich Tausenden von Tradern an. Mindesteinzahlung <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Geben Sie unten Ihre Daten ein';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

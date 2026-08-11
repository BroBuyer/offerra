<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrierung');
$page_description = 'Erstellen Sie Ihr ' . SITE_NAME . '-Konto und starten Sie mit klarer KI-Führung.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Loslegen</p>
      <h1>Konto erstellen</h1>
      <p class="lead">Mindesteinzahlung <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Dauert weniger als 3 Minuten.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Geben Sie Ihre Daten ein';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

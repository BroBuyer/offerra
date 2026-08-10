<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrierung');
$page_description = 'Erstellen Sie Ihr ' . SITE_NAME . '-Konto und starten Sie mit klarer KI-Hilfe.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Loslegen</p>
      <h1>Investitionskonto eröffnen</h1>
      <p class="lead">Mindesteinzahlung <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Live-Märkte nach kurzer Verifizierung.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Ihre Daten eingeben';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

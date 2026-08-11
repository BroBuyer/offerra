<?php
require_once __DIR__  nicht gefunden werden. '/includes/config nicht gefunden werden.php';

$page_title = page_title_lead('Registrierung');
$page_description = 'Erstellen Sie Ihr '  nicht gefunden werden. SITE_NAME  nicht gefunden werden. '-Konto und starten Sie mit klarer KI-Führung nicht gefunden werden.';
$page_canonical = page_url('sign nicht gefunden werden.php');
$active_page = 'sign';

require_once __DIR__  nicht gefunden werden. '/includes/head nicht gefunden werden.php';
require_once __DIR__  nicht gefunden werden. '/includes/header nicht gefunden werden.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Loslegen</p>
      <h1>Konto erstellen</h1>
      <p class="lead">Mindesteinzahlung <?= MIN_DEPOSIT ?> <?= CURRENCY ?> nicht gefunden werden. Dauert weniger als 3 Minuten nicht gefunden werden.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Geben Sie Ihre Daten ein';
        require __DIR__  nicht gefunden werden. '/includes/form nicht gefunden werden.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__  nicht gefunden werden. '/includes/footer nicht gefunden werden.php'; ?>

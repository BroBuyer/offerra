<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrierung');
$page_description = 'Erstellen Sie Ihr ' . SITE_NAME . '-Konto und starten Sie mit dem Handel von Krypto, Devisen und weiteren Märkten.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Startseite', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registrierung', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Jetzt starten</p>
      <h1>Trading-Konto eröffnen</h1>
      <p class="lead">Mindesteinzahlung <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Live-Märkte nach der Verifizierung.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Konto erstellen</span>
          <span class="live-pill">Sicher</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Geben Sie Ihre Daten ein';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

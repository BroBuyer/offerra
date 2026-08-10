<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontakt ' . SITE_NAME . '-support — vi hjælper med finansiering, verifikation og opstart.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Vi er her for at hjælpe</h1>
      <p class="lead">Spørgsmål om din konto, indbetalinger eller AI-værktøjer — kontakt os når som helst.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Support</h2>
        <p class="prose">Skriv til os på <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Typisk svartid er et par timer.</p>
        <a href="sign.php" class="btn btn-primary">Åbn en konto</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

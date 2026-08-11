<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontaktieren Sie den ' . SITE_NAME . '-Support — wir helfen bei Finanzierung, Verifizierung und dem Einstieg.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Wir sind für Sie da</h1>
      <p class="lead">Fragen zu Ihrem Konto, Einzahlungen oder KI-Tools — melden Sie sich jederzeit.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Hilfe</h2>
        <p class="prose">Schreiben Sie uns an <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Typische Antwortzeit: wenige Stunden.</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'Oder hinterlassen Sie Ihre Daten';
          $form_submit = 'Anfrage senden';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

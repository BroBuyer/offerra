<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontakta ' . SITE_NAME . '-support — vi hjälper till med finansiering, verifiering och att komma igång.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Vi finns här för att hjälpa</h1>
      <p class="lead">Frågor om ditt konto, insättningar eller AI-verktyg — hör av dig när som helst.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Hjälp</h2>
        <p class="prose">Mejla oss på <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Typisk svarstid är under några timmar.</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'Eller lämna dina uppgifter';
          $form_submit = 'Skicka förfrågan';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

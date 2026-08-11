<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Contactez l’assistance ' . SITE_NAME . ' — nous vous aidons pour le financement, la vérification et la prise en main.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contact</p>
      <h1>Nous sommes là pour vous aider</h1>
      <p class="lead">Des questions sur votre compte, vos dépôts ou vos outils IA — contactez-nous à tout moment.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Assistance</h2>
        <p class="prose">Écrivez-nous à <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Réponse généralement en quelques heures.</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'Ou laissez vos coordonnées';
          $form_submit = 'Envoyer la demande';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

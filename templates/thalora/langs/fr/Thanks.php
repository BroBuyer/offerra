<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Merci');
$page_description = 'Votre demande de compte ' . SITE_NAME . ' a été reçue.';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="thanks-page">
    <div class="container-base" style="max-width: 560px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>C’est bon.</h1>
      <p>Merci de vous être inscrit chez <?= e(SITE_NAME) ?>. Notre équipe vous contactera bientôt pour finaliser l’ouverture de votre compte — gardez votre téléphone à proximité.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Merci');
$page_description = "Nous avons bien reçu votre demande de compte " . SITE_NAME . ".";
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>Vous y êtes.</h1>
      <p class="lead thanks-lead">
        Merci d’avoir rejoint <?= e(SITE_NAME) ?>.
        Notre équipe vous contactera rapidement pour finaliser la configuration de votre compte — gardez votre téléphone à proximité.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

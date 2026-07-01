<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Merci');
$page_description = 'Votre demande de compte sur ' . SITE_NAME . ' a été reçue.';
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
      <h1>Tout est prêt !</h1>
      <p class="lead thanks-lead">
        Merci de vous être inscrit sur <?= e(SITE_NAME) ?>.
        Notre équipe vous contactera prochainement pour finaliser la configuration de votre compte. Gardez votre téléphone à portée de main.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

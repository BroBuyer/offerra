<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Hvala');
$page_description = 'Vaša zahteva za račun ' . SITE_NAME . ' je bila prejeta.';
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
      <h1>Vse je pripravljeno</h1>
      <p class="lead thanks-lead">
        Hvala, da ste se registrirali na <?= e(SITE_NAME) ?>.
        Upravitelj <?= e(SITE_NAME) ?> vas bo kmalu kontaktiral, da dokončamo nastavitev računa. Telefon imejte pri roki.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

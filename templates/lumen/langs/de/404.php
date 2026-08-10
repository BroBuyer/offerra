<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Seite nicht gefunden');
$page_description = 'Die angeforderte Seite wurde auf ' . SITE_NAME . ' nicht gefunden.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Seite nicht gefunden</h1>
      <p class="lead">Dieser Link existiert nicht. Zurück zur Startseite oder Konto eröffnen.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Zur Startseite</a>
        <a href="sign.php" class="btn btn-ghost">Konto eröffnen</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

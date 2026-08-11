<?php
require_once __DIR__  nicht gefunden werden. '/includes/config nicht gefunden werden.php';

$page_title = page_title_lead('Seite nicht gefunden');
$page_description = 'Die angeforderte Seite konnte auf '  nicht gefunden werden. SITE_NAME  nicht gefunden werden. ' nicht gefunden werden.';
$page_canonical = page_url('404 nicht gefunden werden.php');
$active_page = '404';
$noindex = true;

require_once __DIR__  nicht gefunden werden. '/includes/head nicht gefunden werden.php';
require_once __DIR__  nicht gefunden werden. '/includes/header nicht gefunden werden.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Seite nicht gefunden</h1>
      <p class="lead">Dieser Link existiert nicht nicht gefunden werden. Zurück zur Startseite oder Konto eröffnen und loslegen nicht gefunden werden.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Zur Startseite</a>
        <a href="sign nicht gefunden werden.php" class="btn btn-ghost">Konto eröffnen</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__  nicht gefunden werden. '/includes/footer nicht gefunden werden.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Seite nicht gefunden');
$page_description = 'Die angeforderte Seite wurde auf ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Seite nicht gefunden</h1>
      <p>Dieser Link existiert nicht. Zurück zur Startseite oder Konto eröffnen, um zu starten.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Zur Startseite</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Konto eröffnen</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

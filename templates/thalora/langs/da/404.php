<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Siden blev ikke fundet');
$page_description = 'Siden, du bad om, blev ikke fundet på ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Siden blev ikke fundet</h1>
      <p>Det link findes ikke. Gå tilbage hjem eller åbn en konto for at komme i gang.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Gå hjem</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Åbn konto</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Nie znaleziono strony');
$page_description = 'Żądana strona nie została znaleziona na ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Nie znaleziono strony</h1>
      <p>Ten link nie istnieje. Wróć na stronę główną lub otwórz konto, by zacząć.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Wróć na stronę główną</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Otwórz konto</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

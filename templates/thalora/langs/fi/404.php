<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Sivua ei löytynyt');
$page_description = 'Pyytämääsi sivua ei löytynyt osoitteesta ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Sivua ei löytynyt</h1>
      <p>Tätä linkkiä ei ole. Palaa etusivulle tai avaa tili aloittaaksesi.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Etusivulle</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Avaa tili</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

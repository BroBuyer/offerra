<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Az oldal nem található');
$page_description = 'A kért oldal nem található a(z) ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Az oldal nem található</h1>
      <p>Ez a link nem létezik. Térjen vissza a kezdőlapra, vagy nyisson fiókot a kezdéshez.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Vissza a kezdőlapra</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Fiók nyitása</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

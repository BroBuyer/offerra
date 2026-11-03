<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = page_title(t('404_title'));
$page_description = t('404_text');
$page_canonical = page_url('404.php');
$active_page = '404';
require __DIR__ . '/includes/head.php';
?>
<header class="ra-header">
  <div class="ra-shell ra-header__inner">
    <a class="ra-brand" href="<?= page_url() ?>"><?= e(SITE_NAME) ?></a>
  </div>
</header>
<main class="ra-thanks">
  <div class="ra-shell">
    <h1>404</h1>
    <p><?= te('404_text') ?></p>
    <a class="btn btn-cta" href="<?= page_url() ?>"><?= te('back_home') ?></a>
  </div>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>

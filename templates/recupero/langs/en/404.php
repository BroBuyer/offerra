<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = page_title('Page not found');
$page_description = 'The page you requested was not found.';
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
    <p>The page you requested was not found.</p>
    <a class="btn btn-cta" href="<?= page_url() ?>">Back to home</a>
  </div>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>

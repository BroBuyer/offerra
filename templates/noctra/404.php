<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Page not found');
$page_description = 'The page you requested is unavailable. Return to ' . SITE_NAME . ' to continue trading.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="not-found">
    <div class="container">
      <div class="not-found-code" aria-hidden="true">404</div>
      <p class="eyebrow" style="justify-content: center;">Missing route</p>
      <h1>This desk path does not exist</h1>
      <p class="lead">
        The URL may be outdated or mistyped. Head back to the terminal home — markets and account access are still live.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Back to home</a>
        <a href="contacts.php" class="btn btn-outline">Contact support</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

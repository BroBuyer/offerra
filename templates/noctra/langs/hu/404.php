<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Az oldal nem található');
$page_description = 'A kért oldal nem elérhető. Térjen vissza a(z) ' . SITE_NAME . ' oldalra a kereskedés folytatásához.';
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
      <p class="eyebrow" style="justify-content: center;">Az oldal nem található</p>
      <h1>Ez az oldal nem létezik</h1>
      <p class="lead">
        A hivatkozás elavult vagy hibásan beírt lehet. Térjen vissza a kezdőlapra a folytatáshoz.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Vissza a kezdőlapra</a>
        <a href="contacts.php" class="btn btn-outline">Kapcsolat a támogatással</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

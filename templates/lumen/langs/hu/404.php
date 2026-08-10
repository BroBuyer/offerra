<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Az oldal nem található');
$page_description = 'A kért oldal nem található a ' . SITE_NAME . ' oldalon.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Az oldal nem található</h1>
      <p class="lead">Ez a hivatkozás nem létezik. Menjen vissza a kezdőlapra, vagy nyisson számlát az induláshoz.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Kezdőlap</a>
        <a href="sign.php" class="btn btn-ghost">Számla nyitása</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

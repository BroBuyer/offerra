<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Stranica nije pronađena');
$page_description = 'Tražena stranica nije pronađena na ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Stranica nije pronađena</h1>
      <p class="lead">Ta veza ne postoji. Vratite se na početnu ili otvorite nalog za početak.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Na početnu</a>
        <a href="sign.php" class="btn btn-ghost">Otvori nalog</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

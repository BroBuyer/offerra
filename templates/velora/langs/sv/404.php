<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Sidan hittades inte');
$page_description = 'Sidan du begärde kunde inte hittas på ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Sidan hittades inte</h1>
      <p class="lead">Den länken finns inte. Gå tillbaka hem eller öppna ett konto för att komma igång.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Gå hem</a>
        <a href="sign.php" class="btn btn-ghost">Öppna konto</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

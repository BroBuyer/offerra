<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Sivua ei löytynyt');
$page_description = 'Pyytämääsi sivua ei löytynyt palvelusta ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Sivua ei löytynyt</h1>
      <p class="lead">Tuo linkki ei ole olemassa. Palaa etusivulle tai avaa tili aloittaaksesi.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Etusivulle</a>
        <a href="sign.php" class="btn btn-ghost">Avaa tili</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Stran ni najdena');
$page_description = 'Strani, ki ste jo zahtevali, ni bilo mogoče najti' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Stran ni najdena</h1>
      <p class="lead">Ta povezava ne obstaja. Vrnite se domov ali odprite račun, da začnete.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Pojdi domov</a>
        <a href="sign.php" class="btn btn-ghost">Odpri račun</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Siden ble ikke funnet');
$page_description = 'Siden du ba om ble ikke funnet på ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Siden ble ikke funnet</h1>
      <p class="lead">Den lenken finnes ikke. Gå tilbake hjem eller åpne en konto for å komme i gang.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Gå hjem</a>
        <a href="sign.php" class="btn btn-ghost">Åpne konto</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

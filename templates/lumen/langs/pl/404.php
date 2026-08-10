<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Nie znaleziono strony');
$page_description = 'Żądana strona nie została znaleziona na ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Nie znaleziono strony</h1>
      <p class="lead">Ten link nie istnieje. Wróć na stronę główną lub otwórz konto, by zacząć.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Strona główna</a>
        <a href="sign.php" class="btn btn-ghost">Otwórz konto</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

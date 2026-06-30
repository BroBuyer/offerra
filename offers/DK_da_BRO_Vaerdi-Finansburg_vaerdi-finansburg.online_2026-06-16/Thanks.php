<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tak');
$page_description = 'Din forespørgsel hos ' . SITE_NAME . ' er modtaget.';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>Alt er klar!</h1>
      <p class="lead thanks-lead">
        Tak fordi du har registreret dig hos <?= e(SITE_NAME) ?>.
        Vores team kontakter dig snart for at færdiggøre opsætningen af din konto. Hav gerne din telefon i nærheden.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

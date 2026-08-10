<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Hvala');
$page_description = 'Vaš zahtjev za ' . SITE_NAME . ' račun je zaprimljen.';
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
      <h1>Unutra ste.</h1>
      <p class="lead thanks-lead">
        Hvala na registraciji na <?= e(SITE_NAME) ?>. Naš tim će vas uskoro kontaktirati kako bi dovršio postavljanje — držite telefon u blizini.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Hvala');
$page_description = 'Vaša zahteva za račun ' . SITE_NAME . ' je bila prejeta.';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="thanks-page">
    <div class="container-base" style="max-width: 560px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>Ste noter.</h1>
      <p>Hvala za prijavo pri <?= e(SITE_NAME) ?>. Naša ekipa vas bo kmalu kontaktirala, da dokončamo nastavitev vašega računa – imejte telefon pri roki.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Hvala');
$page_description = 'Zaprimili smo zahtjev za račun ' . SITE_NAME . '.';
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
      <h1>Uspješno ste unutra.</h1>
      <p>Hvala na registraciji u <?= e(SITE_NAME) ?>. Naš tim će se uskoro javiti kako bi dovršio otvaranje računa — držite telefon u blizini.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

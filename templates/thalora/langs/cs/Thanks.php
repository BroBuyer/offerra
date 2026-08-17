<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Děkujeme');
$page_description = 'Přijali jsme žádost o účet ' . SITE_NAME . '.';
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
      <h1>Jste uvnitř.</h1>
      <p>Děkujeme za registraci v <?= e(SITE_NAME) ?>. Náš tým se brzy ozve, aby dokončil otevření účtu — mějte telefon nablízku.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

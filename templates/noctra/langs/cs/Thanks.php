<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Děkujeme');
$page_description = 'Vaše žádost o účet u ' . SITE_NAME . ' byla přijata.';
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
      <h1>Jste uvnitř.</h1>
      <p class="lead thanks-lead">
        Děkujeme za registraci u <?= e(SITE_NAME) ?>.
        Náš tým se brzy ozve a dokončí nastavení účtu — mějte telefon po ruce.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

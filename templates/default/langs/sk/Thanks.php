<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ďakujeme');
$page_description = 'Vaši žádost o účet na ' . SITE_NAME . ' jsme přijali.';
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
      <h1>Hotovo!</h1>
      <p class="lead thanks-lead">
        Ďakujeme za registraci na <?= e(SITE_NAME) ?>.
        Náš tým vás brzy kontaktuje, aby dokončil nastavení vašeho účtu. Mějte prosím telefon po ruce.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

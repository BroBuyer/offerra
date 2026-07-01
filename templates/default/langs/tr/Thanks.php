<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tesekkurler');
$page_description = SITE_NAME . ' hesap basvurunuz alindi.';
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
      <h1>Tamamlandi!</h1>
      <p class="lead thanks-lead">
        <?= e(SITE_NAME) ?> platformasina kayit oldugunuz icin tesekkur ederiz.
        Hesap kurulumunuzu tamamlamak icin ekibimiz kisa sure icinde sizinle iletisime gececektir. Lutfen telefonunuzu yakin tutun.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

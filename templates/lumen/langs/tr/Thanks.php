<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Teşekkürler');
$page_description = SITE_NAME . ' hesap talebiniz alındı.';
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
      <h1>İçeridesiniz.</h1>
      <p class="lead thanks-lead">
        <?= e(SITE_NAME) ?>’e kaydolduğunuz için teşekkürler. Ekibimiz hesabınızı tamamlamak için kısa sürede sizinle iletişime geçecek — telefonunuzu yakın tutun.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

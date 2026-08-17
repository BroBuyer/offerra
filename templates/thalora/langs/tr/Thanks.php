<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Teşekkürler');
$page_description = '' . SITE_NAME . ' hesap talebiniz alındı.';
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
      <h1>İçeridesiniz.</h1>
      <p><?= e(SITE_NAME) ?> kaydınız için teşekkürler. Ekibimiz hesabı tamamlamak için kısa süre içinde ulaşacak — telefonunuzu yakın tutun.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

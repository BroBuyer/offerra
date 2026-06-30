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
      <h1>Her şey hazır!</h1>
      <p class="lead thanks-lead">
        <?= e(SITE_NAME) ?>'a kayıt olduğunuz için teşekkür ederiz.
        Ekibimiz hesap kurulumunuzu tamamlamak için kısa süre içinde sizinle iletişime geçecek. Telefonunuzu yanınızda bulundurun.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Terima Kasih');
$page_description = 'Permintaan akun ' . SITE_NAME . ' anda telah diterima.';
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
      <h1>Anda sudah masuk.</h1>
      <p class="lead thanks-lead">
        Terima kasih karena mendaftar dengan <?= e(SITE_NAME) ?>.
        Pasukan kami akan menghubungi tidak lama lagi untuk menyelesaikan persediaan akun Anda — pastikan telepon anda berhampiran.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

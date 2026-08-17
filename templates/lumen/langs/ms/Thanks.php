<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Terima kasih');
$page_description = 'Permintaan akaun ' . SITE_NAME . ' anda telah diterima.';
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
        Terima kasih kerana mendaftar dengan <?= e(SITE_NAME) ?>. Pasukan kami akan menghubungi sebentar lagi untuk menyelesaikan akaun — pastikan telefon anda berhampiran.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

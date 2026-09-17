<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Daftar');
$page_description = 'Buat akun ' . SITE_NAME . ' anda dan mula melabur dengan panduan AI yang jelas.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Mulakan</p>
      <h1>Buka akun pelaburan anda</h1>
      <p class="lead">Deposit minimum <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Pasar langsung selepas verifikasi singkat.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Masukkan detail Anda';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

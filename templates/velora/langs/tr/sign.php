<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kayıt Ol');
$page_description = ' ' . SITE_NAME . ' hesabınızı oluşturun ve net AI rehberliğiyle işlem yapmaya başlayın.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Başlayın</p>
      <h1>Hesabınızı oluşturun</h1>
      <p class="lead">Minimum yatırım <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. 3 dakikadan kısa sürer.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Bilgilerinizi girin';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kayıt');
$page_description = SITE_NAME . ' hesabınızı oluşturun; kripto, döviz ve diğer piyasalarda işleme başlayın.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Ana sayfa', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Kayıt', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Başlayın</p>
      <h1>İşlem hesabınızı açın</h1>
      <p class="lead">Minimum yatırım <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Doğrulama sonrası canlı piyasalar.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Hesap oluştur</span>
          <span class="live-pill">Güvenli</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Bilgilerinizi girin';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

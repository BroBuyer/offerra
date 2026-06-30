<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kayıt');
$page_description = SITE_NAME . ' üzerinde hesap oluşturun ve yapay zeka destekli araçlarla kripto, forex ve küresel piyasalarda işlem yapmaya başlayın.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Ana Sayfa', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Kayıt', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Hemen başlayın</p>
      <h1>İşlem hesabınızı açın</h1>
      <p class="lead">Binlerce yatırımcıya katılın. Minimum yatırım <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Bilgilerinizi aşağıya girin';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

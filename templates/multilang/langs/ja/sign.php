<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('新規登録');
$page_description = SITE_NAME . ' の口座を開設し、AIツールで暗号資産、外国為替、世界市場の取引を始めましょう。';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'ホーム', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => '新規登録', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">今すぐ始める</p>
      <h1>取引口座を開設</h1>
      <p class="lead">多くのトレーダーに加わりましょう。最低入金額 <?= MIN_DEPOSIT ?> <?= CURRENCY ?>。</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = '以下にご記入ください';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

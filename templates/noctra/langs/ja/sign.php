<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('新規登録');
$page_description = SITE_NAME . ' の口座を開設し、暗号資産、外国為替、その他市場の取引を始めましょう。';
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
      <p class="lead">最低入金額 <?= MIN_DEPOSIT ?> <?= CURRENCY ?>。確認後にライブ市場へ。</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>口座を作成</span>
          <span class="live-pill">安全</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = '情報をご入力ください';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

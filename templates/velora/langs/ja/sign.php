<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('新規登録');
$page_description = '新規登録 — ' . SITE_NAME . ' のアカウントを作成し、明快なAIガイダンスで取引を始めましょう。';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">今すぐ始める</p>
      <h1>アカウントを作成</h1>
      <p class="lead">最低入金額 <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. 所要時間は3分未満です。</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = '詳細を入力してください';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

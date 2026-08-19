<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('ページが見つかりません');
$page_description = 'ご依頼のページは ' . SITE_NAME . ' に見つかりませんでした。';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>ページが見つかりません</h1>
      <p class="lead">そのリンクは存在しません。ホームに戻るか、口座を開設して始めましょう。</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">ホームへ戻る</a>
        <a href="sign.php" class="btn btn-ghost">口座を開設</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

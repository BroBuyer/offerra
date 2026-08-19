<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('ページが見つかりません');
$page_description = 'ご指定のページは次のサイトに見つかりませんでした： ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>ページが見つかりません</h1>
      <p>そのリンクは存在しません。ホームへ戻るか、口座を開設して始めましょう。</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">ホームへ戻る</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">口座を開設</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

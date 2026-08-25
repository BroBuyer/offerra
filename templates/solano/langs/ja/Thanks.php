<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'ありがとうございます ᐉ ' . SITE_NAME;
$page_description = 'ご依頼は ' . SITE_NAME . ' チームが受け付けました。';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">メッセージを受け付けました</span>
      <h1>ありがとうございます。ご連絡します</h1>
      <p>ご依頼は <?= e(SITE_NAME) ?> チームが受け付けました。担当者がまもなくご連絡し、開始をお手伝いします。その間、プラットフォームをご覧ください。</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">ホームへ戻る</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">プラットフォームを見る</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

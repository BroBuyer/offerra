<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('プラットフォームについて');
$page_description = '次をご覧ください。 ' . SITE_NAME . ' は、AIインサイト、低遅延フィード、落ち着いたワークスペースで取引を明快に保ちます。';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">概要</p>
      <h1>機関投資家水準のAIアーキテクチャを、親しみやすく</h1>
      <p class="lead">暗号資産およびマルチ資産取引に特化したワークスペース — AIが案内し、明快さのために設計されています。</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>役立ち続けるAI</h2>
        <p class="lead">
          インサイトは役立つときに表示されます — 短く、読みやすく、すぐに行動できます。
          すべての取引は、必ずご自身で確認します。
        </p>
        <ul class="feature-bullets">
          <li>わかりやすい言葉での市場サマリー</li>
          <li>初心者向けの推奨ウォッチリスト</li>
          <li>ポジションサイズを決める前のリマインダー</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">口座を開設</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

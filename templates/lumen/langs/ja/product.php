<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('プラットフォーム');
$page_description = SITE_NAME . 'がAIインサイト、明確な料金、落ち着いた取引ワークスペースで投資をシンプルに保つ方法をご覧ください。';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">プラットフォーム</p>
      <h1>必要なものすべて。不要なものは何も。</h1>
      <p class="lead">暗号資産とマルチアセット投資向けの集中ワークスペース — AIに導かれ、明瞭さのために設計。</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>背景で働くAI</h2>
        <p class="lead">
          インサイトは役立つときに表示されます — 短く、読みやすく、実行しやすい。すべての取引はご自身で確定します。
        </p>
        <ul class="feature-list">
          <li>平易な言葉の市場サマリー</li>
          <li>初心者向けの推奨ウォッチリスト</li>
          <li>ポジションサイズを決める前のリマインダー</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">口座を開設</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

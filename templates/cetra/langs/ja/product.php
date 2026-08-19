<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("製品");
$page_description = "製品" . ' — ' . SITE_NAME;
$page_canonical = page_url("product.php");
$active_page = "product";
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="" width="30" height="30" />
      <?= e(SITE_NAME) ?>
    </a>
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">口座を開設</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1><?= e(SITE_NAME) ?> — プラットフォーム</h1>
      <div class="lede" style="margin-top:18px">
        <p>リアルタイムの人間による分析を備えたAIエンジン。暗号資産、外国為替、株式を同じダッシュボードで、高速執行と分別管理された資本で取引できます。</p>
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">口座を開設</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. 無断転載を禁じます。</p>
    <p><a href="<?= page_url('privacy.php') ?>">プライバシーポリシー</a> · <a href="<?= page_url('conditions.php') ?>">利用規約</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>

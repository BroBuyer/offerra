<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('製品');
$page_description = SITE_NAME . ' の取引ツール — リアルタイム分析、AIシグナル、マルチマーケット対応、自動戦略。';
$page_canonical = page_url('product.php');
$active_page = 'product';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'ホーム', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => '製品', 'item' => page_url('product.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">製品</p>
      <h1>トレーダー向けのデジタル分析</h1>
      <p class="lead">ひとつのプラットフォーム。すべての市場。ペースに合わせるツール。</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>リアルタイムチャート</h3>
          <p>対応資産すべてのライブ価格、高度なインジケーター、板情報。</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AIシグナルエンジン</h3>
          <p>機械学習モデルが、エントリーと決済の文脈が明確な高確率のセットアップを示します。</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>自動化スイート</h3>
          <p>リスクパラメータを設定したボットを構成 — 監視するも、手動と併用するも自由です。</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>リスク管理</h3>
          <p>損切り、利確、ポジションサイズのツールがすべてのワークフローに組み込まれています。</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3>ポートフォリオ追跡</h3>
          <p>暗号資産と従来市場にわたる保有、損益、配分をひと目で。</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h3>学習ハブ</h3>
          <p>初心者から中級者まで使える案内付きチュートリアルと市場解説。</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="sign.php" class="btn btn-primary"><?= e(SITE_NAME) ?> を無料で試す</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

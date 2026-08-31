<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('オファー');
$page_description = SITE_NAME . ' を最低 ' . MIN_DEPOSIT . ' ' . CURRENCY . ' で開設 — フルアクセス、AIインサイト、24時間サポート。';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'ホーム', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'オファー', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">オファー</p>
      <h1><?= MIN_DEPOSIT ?> <?= CURRENCY ?> からのプラットフォームアクセス</h1>
      <p class="lead">初日から全機能 — チャート、シグナル、サポート込み。</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">スタータープラン</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> 最低 · フルプラットフォーム · AIインサイト · 24時間サポート</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">含まれるもの</div>
          <div class="specs-value">ライブ市場、マルチアセット取引、ポートフォリオ表示、案内付きオンボーディング</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">入金</div>
          <div class="specs-value">カード、銀行振込、PayPal、電子ウォレット</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">出金</div>
          <div class="specs-value">いつでも · 1〜3営業日 · 手数料は事前表示</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">デバイス</div>
          <div class="specs-value">Web、タブレット、モバイル — インストール不要</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>今すぐ始める</span>
          <span class="live-pill">開設</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = '登録して特典を受け取る';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

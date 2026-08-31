<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('オファー');
$page_description = SITE_NAME . ' のプラン — 最低 ' . MIN_DEPOSIT . ' ' . CURRENCY . ' の入金で取引プラットフォームのすべてが利用できます。';
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
      <h1>ポートフォリオ追跡を登録特典として無料で</h1>
      <p class="lead"><?= MIN_DEPOSIT ?> <?= CURRENCY ?> から。準備ができたら規模を広げられます。</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">スターターアクセス</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> 最低入金 · フルプラットフォーム · AIシグナル · 24時間サポート</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">含まれるもの</div>
          <div class="specs-value">ライブチャート、マルチマーケット取引、ポートフォリオ追跡、案内付きオンボーディング</div>
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
          <div class="specs-value">Web、タブレット、モバイル — ダウンロード不要</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = '今すぐ特典を受け取る';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

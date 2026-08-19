<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('料金');
$page_description = SITE_NAME . 'を ' . MIN_DEPOSIT . ' ' . CURRENCY . ' から開始 — 透明な入金とプラットフォームへのフルアクセス。';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">料金</p>
      <h1>開始金額 <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">シンプルな入口が一つ。入金後はフルアクセス — AIインサイトとライブ市場を含みます。</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">口座アクセス</h2>
        <p class="prose">
          最低入金額 <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          チャート、ツール、AIガイドは口座への入金後に解放されます。
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = '口座を作成';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

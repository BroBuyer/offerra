<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('料金');
$page_description = '開始 — ' . SITE_NAME . ' は ' . MIN_DEPOSIT . ' ' . CURRENCY . ' からご利用いただけます — 透明性のある資金拠出とフルプラットフォームアクセス。';
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
      <p class="lead">シンプルな一つの入口です。入金後はフルプラットフォームにアクセスできます — AIインサイトとライブ市場を含みます。</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">アカウントアクセス</h2>
        <p class="prose" style="margin-bottom:18px">
          最低入金額 <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          アカウントに入金されると、チャート、ツール、AIガイダンスが利用可能になります。
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'アカウントを作成';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

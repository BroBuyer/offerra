<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('お問い合わせ');
$page_description = SITE_NAME . 'サポートにお問い合わせ — 入金、本人確認、始め方をお手伝いします。';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">お問い合わせ</p>
      <h1>サポートいたします</h1>
      <p class="lead">口座、入金、AIツールについてのご質問 — いつでもご連絡ください。</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">サポート</h2>
        <p class="prose"><a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a> までメールしてください。通常の返信は数時間以内です。</p>
        <a href="sign.php" class="btn btn-primary">口座を開設</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

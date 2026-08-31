<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('お問い合わせ');
$page_description = SITE_NAME . ' のサポートまたは法人チームへ。24時間対応しています。';
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
      <p class="lead">口座、取引、技術に関するご質問に、昼夜を問わず専門サポートが対応します。</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>メールサポート</h3>
          <p style="margin-bottom: 1rem;">一般のお問い合わせと口座サポート：</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>返信時間</h3>
          <p>ほとんどのご依頼は数時間以内に回答します。緊急の取引案件を優先します。</p>
        </article>
        <article class="feature-card">
          <h3>始める準備はできましたか？</h3>
          <p style="margin-bottom: 1rem;">通話不要。数分で口座を開設できます。</p>
          <a href="sign.php" class="btn btn-primary">口座を作成</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

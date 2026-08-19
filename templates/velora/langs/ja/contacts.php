<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('お問い合わせ');
$page_description = 'お問い合わせ： ' . SITE_NAME . ' サポート — 資金拠出、本人確認、始め方をサポートします。';
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
      <p class="lead">アカウント、入金、AIツールに関するご質問 — いつでもご連絡ください。</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">サポート</h2>
        <p class="prose">メールでのお問い合わせは <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. 通常の返信時間は数時間以内です。</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'または、詳細をご記入ください';
          $form_submit = 'リクエストを送信';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

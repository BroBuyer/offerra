<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'ありがとうございます | ' . SITE_NAME;
$page_description = SITE_NAME . 'チームがお申し込みを受け付けました。';
$page_canonical = page_url('Thanks.php');
$active_page = 'Thanks';
$page_css = ['legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
$page_noindex = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>ありがとうございます。担当よりご連絡します</h1>
            <p>
              <?= e(SITE_NAME) ?>チームがお申し込みを受け付けました。担当者が
              まもなくご連絡し、開始をお手伝いします。
            </p>
            <p>
              その間に、
              <a href="<?= page_url('product.php') ?>">プラットフォームの仕組み</a>をご覧いただくか、
              <a href="<?= page_url('faq.php') ?>">よくある質問</a>.
            </p>
            <p><a href="<?= page_url() ?>">ホームへ戻る</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

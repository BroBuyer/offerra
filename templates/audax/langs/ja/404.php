<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'ページが見つかりません | ' . SITE_NAME;
$page_description = 'ページが見つかりません — ' . SITE_NAME;
$page_canonical = page_url('404.php');
$active_page = '404';
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
            <h1>ページが見つかりません</h1>
            <p>このリンクは存在しません。<a href="<?= page_url() ?>">ホームへ戻る</a>.</p>
            <p>
              <a href="<?= page_url('sign.php') ?>">口座を開設</a>するか、
              <a href="<?= page_url('contacts.php') ?>">お問い合わせください</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

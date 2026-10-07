<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . 'の口座を開設';
$page_description = geo_in() . SITE_NAME . 'の口座を開設し、' . money_min() . 'から始められます。登録は1分以内です。';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$page_css = [];
$page_js = [];
$page_has_form = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h1><?= e(SITE_NAME) ?>の口座を開設</h1>
              <p>
                フォームにご記入いただければ、担当者が口座開設のためご連絡します。
                開始に必要な最低金額は<?= e(money_min()) ?>です。
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = '今すぐ登録';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                お客様情報をご入力のうえ「今すぐ登録」をクリックすると、
                <a href="<?= page_url('conditions.php') ?>">利用規約</a>および
                <a href="<?= page_url('privacy.php') ?>">プライバシーポリシー</a>に同意したものとみなされます。
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('ありがとうございます');
$page_description = SITE_NAME . 'の口座申請を受け付けました。';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>受付完了です。</h1>
      <p class="lead thanks-lead">
        <?= e(SITE_NAME) ?>にご登録いただきありがとうございます。口座設定の完了のため、まもなくチームからご連絡します — 電話を近くに置いてください。
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

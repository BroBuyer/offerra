<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Thank you ᐉ ' . SITE_NAME;
$page_description = 'Your request has been received by the ' . SITE_NAME . ' team.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Message received</span>
      <h1>Thank you — we will be in touch</h1>
      <p>Your request has been received by the <?= e(SITE_NAME) ?> team. A specialist will be in touch shortly to help you get started. In the meantime, feel free to explore the platform.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Back to home</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Explore the platform</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

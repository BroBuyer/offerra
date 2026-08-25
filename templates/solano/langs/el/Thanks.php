<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ευχαριστούμε ᐉ ' . SITE_NAME;
$page_description = 'Το αίτημά σας το έχει λάβει η ομάδα του ' . SITE_NAME . '.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Το μήνυμα ελήφθη</span>
      <h1>Ευχαριστούμε — θα επικοινωνήσουμε</h1>
      <p>Το αίτημά σας το έχει λάβει η ομάδα του <?= e(SITE_NAME) ?>. Ένας ειδικός θα επικοινωνήσει σύντομα για να σας βοηθήσει να ξεκινήσετε. Στο μεταξύ, μπορείτε να εξερευνήσετε την πλατφόρμα.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Επιστροφή στην αρχική</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Εξερευνήστε την πλατφόρμα</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

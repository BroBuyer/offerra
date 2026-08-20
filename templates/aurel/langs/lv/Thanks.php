<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Paldies ᐉ ' . SITE_NAME;
$page_description = 'Jūsu pieprasījumu saņēma ' . SITE_NAME . ' komanda.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Ziņojums saņemts</span>
      <h1>Paldies — mēs sazināsimies</h1>
      <p>Jūsu pieprasījumu saņēma <?= e(SITE_NAME) ?> komanda. Speciālists drīz sazināsies, lai palīdzētu sākt. Pa to laiku droši izpētiet platformu.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Atpakaļ uz sākumu</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Izpētīt platformu</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

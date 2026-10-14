<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Hvala ᐉ ' . SITE_NAME;
$page_description = 'Vaš je zahtjev primljen od tima ' . SITE_NAME . '.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Poruka primljena</span>
      <h1>Hvala — javit ćemo vam se</h1>
      <p>Vaš je zahtjev primljen od tima <?= e(SITE_NAME) ?>. Stručnjak će vam se uskoro javiti kako bi vam pomogao započeti. U međuvremenu slobodno istražite platformu.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Natrag na početnu stranicu</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Istražite platformu</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

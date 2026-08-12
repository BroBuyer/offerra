<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("Ευχαριστούμε");
$page_description = "Ευχαριστούμε" . ' — ' . SITE_NAME;
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="" width="30" height="30" />
      <?= e(SITE_NAME) ?>
    </a>
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Ανοίξτε τον λογαριασμό σας</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1>Είστε μέσα.</h1>
      <div class="lede" style="margin-top:18px">
        <p>Ευχαριστούμε για την εγγραφή σας στο <?= e(SITE_NAME) ?>. Η ομάδα μας θα επικοινωνήσει σύντομα — κρατήστε το τηλέφωνο κοντά.</p>
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Ανοίξτε τον λογαριασμό σας</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. Με την επιφύλαξη παντός δικαιώματος.</p>
    <p><a href="<?= page_url('privacy.php') ?>">Απόρρητο</a> · <a href="<?= page_url('conditions.php') ?>">Όροι</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>

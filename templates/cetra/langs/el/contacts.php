<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("Επικοινωνία");
$page_description = "Επικοινωνία" . ' — ' . SITE_NAME;
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
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
      <h1>Επικοινωνήστε μαζί μας</h1>
      <div class="lede" style="margin-top:18px">
        <p>Email: <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></p><?php $form_id="contact-form"; $form_heading="Αφήστε τα στοιχεία σας"; $form_submit="Αποστολή"; require __DIR__."/includes/form.php"; ?>
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

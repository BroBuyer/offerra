<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Η σελίδα δεν βρέθηκε ᐉ ' . SITE_NAME;
$page_description = 'Η σελίδα δεν βρέθηκε — ' . SITE_NAME;
$page_canonical = page_url("404.php");
$active_page = "404";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">
<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Σφάλμα 404</span>
    <h1>Η σελίδα δεν βρέθηκε</h1>
    <p class="kpnq92g">Αυτός ο σύνδεσμος δεν υπάρχει. <a href="<?= page_url() ?>">Επιστροφή στην αρχική</a>.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Αρχική</a>
      <a class="qou73xg ec2hno" href="<?= page_url('sign.php') ?>">Ανοίξτε λογαριασμό</a>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Η σελίδα δεν βρέθηκε | ' . SITE_NAME;
$page_description = 'Η σελίδα δεν βρέθηκε — ' . SITE_NAME;
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
            <h1>Η σελίδα δεν βρέθηκε</h1>
            <p>Αυτός ο σύνδεσμος δεν υπάρχει. <a href="<?= page_url() ?>">Επιστροφή στην αρχική</a>.</p>
            <p>
              Μπορείς επίσης <a href="<?= page_url('sign.php') ?>">να ανοίξεις λογαριασμό</a> ή
              <a href="<?= page_url('contacts.php') ?>">να επικοινωνήσεις μαζί μας</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

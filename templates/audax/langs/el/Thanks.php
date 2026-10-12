<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ευχαριστούμε | ' . SITE_NAME;
$page_description = 'Το αίτημά σου παραλήφθηκε από την ομάδα ' . SITE_NAME . '.';
$page_canonical = page_url('Thanks.php');
$active_page = 'Thanks';
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
            <h1>Ευχαριστούμε — θα επικοινωνήσουμε μαζί σου</h1>
            <p>
              Το αίτημά σου παραλήφθηκε από την ομάδα <?= e(SITE_NAME) ?>. Ένας ειδικός
              θα επικοινωνήσει σύντομα μαζί σου για να ξεκινήσεις.
            </p>
            <p>
              Εν τω μεταξύ μπορείς να διαβάσεις περισσότερα για
              <a href="<?= page_url('product.php') ?>">το πώς λειτουργεί η πλατφόρμα</a> ή να δεις τις
              <a href="<?= page_url('faq.php') ?>">συχνές ερωτήσεις</a>.
            </p>
            <p><a href="<?= page_url() ?>">Επιστροφή στην αρχική</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

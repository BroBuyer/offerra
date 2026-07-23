<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Απαντήσεις για trading, λειτουργίες, ασφάλεια, κόστη και πώς να ξεκινήσετε με την ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Συχνές ερωτήσεις</h1>
      <p class="lead">Όλα όσα χρειάζεται να γνωρίζετε πριν ξεκινήσετε.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Πώς μπορώ να ξεκινήσω;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Δημιουργήστε λογαριασμό, επαληθεύστε το email και καταθέστε τουλάχιστον <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Θα έχετε άμεσα πρόσβαση σε γραφήματα, εργαλεία και οδηγό onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Η <?= e(SITE_NAME) ?> είναι ασφαλής και αξιόπιστη;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Χρησιμοποιούμε κρυπτογράφηση SSL, έλεγχο ταυτότητας δύο παραγόντων και επαληθευμένους επεξεργαστές πληρωμών. Η ασφάλεια είναι ενσωματωμένη σε κάθε επίπεδο της πλατφόρμας.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ποια είναι τα κόστη;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Τα κόστη είναι διαφανή και εμφανίζονται πριν από την επιβεβαίωση κάθε συναλλαγής. Κανένα κρυφό κόστος σε καταθέσεις ή αναλήψεις.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Μπορώ να χρησιμοποιήσω αυτοματοποιημένο trading;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ναι. Ρυθμίστε bots με υποστήριξη AI σύμφωνα με το προφίλ κινδύνου σας ή λειτουργήστε χειροκίνητα: μπορείτε να εναλλάσσεστε μεταξύ των λειτουργιών οποιαδήποτε στιγμή.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Πώς λειτουργούν οι αναλήψεις;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Μπορείτε να ζητήσετε ανάληψη από τον πίνακα ελέγχου σας. Η επεξεργασία διαρκεί συνήθως από 1 έως 3 εργάσιμες ημέρες, ανάλογα με τη μέθοδο που επιλέξατε.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Έχετε ακόμη ερωτήσεις;</p>
        <a href="contacts.php" class="btn btn-outline">Επικοινωνήστε με την υποστήριξη</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

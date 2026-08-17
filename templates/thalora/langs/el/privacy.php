<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Επισκόπηση απορρήτου | Προστασία δεδομένων στο ' . SITE_NAME;
$page_description = 'Δείτε πώς το ' . SITE_NAME . ' προστατεύει τα δεδομένα σας στην Πολιτική απορρήτου.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Πολιτική απορρήτου', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="μονοπάτι πλοήγησης"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Αρχική</a>
  <span class="breadcrumb-item">Πολιτική απορρήτου</span>
</nav>
<h1>Η δέσμευσή μας για την προστασία του απορρήτου σας</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Τελευταία ενημέρωση: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («εμείς», «μας»), η προστασία των προσωπικών σας δεδομένων είναι προτεραιότητα. Η δήλωση αυτή εξηγεί πώς συλλέγουμε, χρησιμοποιούμε και προστατεύουμε τα στοιχεία σας.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Διαφάνεια στη διαχείριση δεδομένων</p>
    <p>
      Επιδιώκουμε διαφάνεια στη διαχείριση δεδομένων. Επικοινωνήστε μαζί μας στο      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Σκοπός χρήσης δεδομένων</p>
    <p>Χρησιμοποιούμε τα στοιχεία σας για την παροχή υπηρεσιών, τη βελτίωση της πλατφόρμας και τη συμμόρφωση με νομικές υποχρεώσεις.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Πρόσβαση στα δεδομένα σας</p>
    <p>Μπορείτε ανά πάσα στιγμή να ζητήσετε πρόσβαση, διόρθωση ή διαγραφή των προσωπικών σας δεδομένων.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Πρακτικές ασφάλειας</p>
    <p>Εφαρμόζουμε ισχυρά μέτρα ασφάλειας, χωρίς να μπορούμε να υποσχεθούμε απόλυτη προστασία των προσωπικών σας δεδομένων.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Πληροφορίες που συλλέγουμε</h2>
    <p>Συλλέγουμε πληροφορίες όπως διευθύνσεις IP, στοιχεία συσκευής, τύπους προγράμματος περιήγησης και δεδομένα που παρέχετε απευθείας.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Βάσεις επεξεργασίας</h2>
    <p>Η επεξεργασία βασίζεται στη συγκατάθεσή σας, σε έννομα συμφέροντα και στη συμμόρφωση με την ισχύουσα νομοθεσία.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Κοινοποίηση δεδομένων</h2>
    <p>Τα στοιχεία σας ενδέχεται να κοινοποιηθούν σε αξιόπιστους συνεργάτες, παρόχους υπηρεσιών και αρχές όταν απαιτείται από τον νόμο.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Χρήση cookies</h2>
    <p>Τα cookies υποστηρίζουν τη λειτουργία του ιστότοπου και την ανάλυση χρήσης· μπορείτε να τα απενεργοποιήσετε αν το επιθυμείτε.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Περίοδος διατήρησης</h2>
    <p>Διατηρούμε τα στοιχεία σας μόνο όσο χρειάζεται για τους δηλωμένους σκοπούς.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Διεθνείς διαβιβάσεις</h2>
    <p>Τα δεδομένα ενδέχεται να διαβιβάζονται διασυνοριακά με κατάλληλες εγγυήσεις.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Σύνδεσμοι προς άλλους ιστότοπους</h2>
    <p>Δεν αναλαμβάνουμε ευθύνη για εξωτερικούς ιστότοπους που συνδέονται μέσω της πλατφόρμας ούτε για τις πρακτικές τους.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Ενημερώσεις αυτής της πολιτικής</h2>
    <p>Αυτή η πολιτική απορρήτου ενδέχεται να ενημερώνεται κατά καιρούς.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Τα νόμιμα δικαιώματά σας</h2>
    <p>Έχετε δικαίωμα πρόσβασης, διόρθωσης, διαγραφής, περιορισμού της επεξεργασίας, φορητότητας, ανάκλησης συγκατάθεσης και υποβολής καταγγελίας εφόσον χρειάζεται.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

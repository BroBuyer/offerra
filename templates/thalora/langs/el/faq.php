<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Συχνές ερωτήσεις συναλλαγών | Κατάθεση και ασφάλεια | ' . SITE_NAME;
$page_description = 'Σαφείς απαντήσεις για εγγραφή, ελάχιστες καταθέσεις, ασφάλεια κεφαλαίων, αναλήψεις και πρόσβαση στις αγορές στο ' . SITE_NAME . '.';
$page_canonical = page_url("faq.php");
$active_page = "faq";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Συχνές ερωτήσεις', 'faq.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="μονοπάτι πλοήγησης"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
<a href="<?= page_url() ?>" class="breadcrumb-item">Αρχική</a>
<span class="breadcrumb-item">Συχνές ερωτήσεις</span>
          </nav>
        </div>
      </div>
      <!-- contact -->
<section class="py-8" id="faq">
  <div class="container-base grid gap-6 md:gap-10">
    <h1>Συχνές ερωτήσεις</h1>
    <div class="grid gap-3 md:gap-6" data-accordion>
        <div id="accordion-1" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(1)"
          >
            <span class="h3 text-left transition-colors">Ποια είναι τα βήματα για να ξεκινήσετε συναλλαγές;</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-1" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Η έναρξη είναι εύκολη. Εγγραφείτε με τα βασικά σας στοιχεία, επιβεβαιώστε το email σας και χρηματοδοτήστε τον λογαριασμό με τουλάχιστον <?= e(money_min()) ?>. Ξεκλειδώνετε όλες τις δυνατότητες της πλατφόρμας: ζωντανά γραφήματα, εργαλεία συναλλαγών, ανάλυση αγοράς και εξειδικευμένη υποστήριξη. Δεν απαιτείται εμπειρία — αναλυτικοί οδηγοί σας καθοδηγούν σε κάθε βήμα.</p>
            </div>
          </div>
        </div>
        <div id="accordion-2" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(2)"
          >
            <span class="h3 text-left transition-colors">Είναι το <?= e(SITE_NAME) ?> αξιόπιστο για τη διαχείριση των χρημάτων και των στοιχείων μου;</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-2" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Στο <?= e(SITE_NAME) ?>, η προστασία των προσωπικών σας δεδομένων και κεφαλαίων είναι προτεραιότητα. Οι συνεδρίες προστατεύονται με κρυπτογράφηση SSL, είναι διαθέσιμος ο έλεγχος ταυτότητας δύο παραγόντων και οι πρακτικές απορρήτου περιγράφονται με σαφήνεια. Οι χρηματοοικονομικές συναλλαγές διεκπεραιώνονται μέσω αξιόπιστων συνεργατών και εσωτερικών πρωτοκόλλων. Επιδιώκουμε την αξιοπιστία, ωστόσο οι αποδόσεις των επενδύσεων δεν μπορούν να διασφαλιστούν.</p>
            </div>
          </div>
        </div>
        <div id="accordion-3" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(3)"
          >
            <span class="h3 text-left transition-colors">Πόσο γρήγορα μπορώ να αναλάβω τα κεφάλαιά μου;</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-3" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Οι αναλήψεις μπορούν να ζητηθούν ανά πάσα στιγμή από την πύλη του λογαριασμού σας. Η επεξεργασία διαρκεί συνήθως 1 έως 3 εργάσιμες ημέρες, ανάλογα με τη μέθοδο. Τέλη και εκτιμώμενοι χρόνοι εμφανίζονται με διαφάνεια πριν επιβεβαιώσετε. Αν χρειάζεστε βοήθεια με την παρακολούθηση ανάληψης, η ομάδα υποστήριξης είναι έτοιμη να βοηθήσει.</p>
            </div>
          </div>
        </div>
        <div id="accordion-4" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(4)"
          >
            <span class="h3 text-left transition-colors">Πώς γνωρίζω αν αυτή η πλατφόρμα καλύπτει τις ανάγκες συναλλαγών μου;</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-4" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Συνιστούμε να ξεκινήσετε με την ελάχιστη κατάθεση για να γνωρίσετε τις δυνατότητες της πλατφόρμας. <?= e(SITE_NAME) ?> ταιριάζει σε αρχάριους και έμπειρους επενδυτές: φιλική διεπαφή, προαιρετικά εργαλεία τεχνητής νοημοσύνης και υποστήριξη πελατών 24/7. Διατηρείτε πλήρη έλεγχο εντολών, ορίων και ρυθμίσεων κινδύνου.</p>
            </div>
          </div>
        </div>
        <div id="accordion-5" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(5)"
          >
            <span class="h3 text-left transition-colors">Απαιτείται εμπειρία συναλλαγών πριν ξεκινήσετε;</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-5" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Δεν απαιτείται προηγούμενη εμπειρία. Η πλατφόρμα είναι φιλική από την αρχή, με υποστήριξη onboarding, οδηγούς και εργαλεία ενισχυμένα με τεχνητή νοημοσύνη. Μαθαίνετε με τον δικό σας ρυθμό — από τις βασικές αγορές έως την προηγμένη ανάλυση και την αυτοματοποίηση.</p>
            </div>
          </div>
        </div>
        <div id="accordion-7" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(7)"
          >
            <span class="h3 text-left transition-colors">Σε ποιες αγορές μπορώ να έχω πρόσβαση στο <?= e(SITE_NAME) ?>?</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-7" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Σε μία διεπαφή παρακολουθείτε κορυφαία κρυπτονομίσματα, forex με τιμές πραγματικού χρόνου, παγκόσμιες μετοχές και εμπορεύματα. Χωρίς εναλλαγή εφαρμογών, εστιάζετε στην ανάλυση και στις αποφάσεις συναλλαγών.</p>
            </div>
          </div>
        </div>
        <div id="accordion-8" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(8)"
          >
            <span class="h3 text-left transition-colors">Πώς λειτουργούν τα αναλυτικά στοιχεία τεχνητής νοημοσύνης;</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-8" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p><?= e(SITE_NAME) ?> προσφέρει εργαλεία τεχνητής νοημοσύνης που οργανώνουν σήματα συναλλαγών, επισημαίνουν αξιοσημείωτες μεταβολές τιμών και βοηθούν στην παρακολούθηση της αγοράς. Υποστηρίζουν τις επιλογές σας χωρίς να αντικαθιστούν τη στρατηγική ή να εγγυώνται συγκεκριμένα αποτελέσματα. Εσείς αποφασίζετε πότε θα ενεργήσετε και πόσο θα διαθέσετε.</p>
            </div>
          </div>
        </div>
        <div id="accordion-9" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(9)"
          >
            <span class="h3 text-left transition-colors">Πόσος χρόνος χρειάζεται συνήθως από την εγγραφή έως την πρώτη συναλλαγή;</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-9" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Η δημιουργία και η επαλήθευση λογαριασμού διαρκούν συνήθως λίγα λεπτά. Ο χρόνος έως την πρώτη συναλλαγή εξαρτάται από την επεξεργασία κατάθεσης και τη μέθοδο πληρωμής. Στην αρχική υπάρχει σαφής οδηγός βήμα προς βήμα, χωρίς κρυφές διαδικασίες.</p>
            </div>
          </div>
        </div>
        <div id="accordion-10" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(10)"
          >
            <span class="h3 text-left transition-colors">Υπάρχει υποστήριξη για ερωτήματα σχετικά με τον λογαριασμό;</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-10" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Η ομάδα υποστήριξης είναι διαθέσιμη μέσω της σελίδας Επικοινωνία ή των Συχνών ερωτήσεων για πρόσβαση σε λογαριασμούς, καταθέσεις, αναλήψεις ή δυνατότητες της πλατφόρμας. Η βοήθεια είναι λειτουργική, όχι επενδυτική συμβουλή.</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
      <!-- support -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8"
          >
            <div
              class="text-primary teal:text-secondary absolute top-36 right-8 -z-10 max-lg:hidden"
            >
              <svg
                width="729"
                height="419"
                viewBox="0 0 729 419"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M22.873 408.674C151.969 116.052 291.571 115.647 383.641 203.172C435.153 252.141 536.754 245.195 591.295 177.036C607.403 156.905 640.07 124.561 696.873 42.2554"
                  stroke="url(#paint0_linear_4024_13698)"
                  stroke-width="50"
                />
                <path
                  d="M584.873 61.9606C631.345 47.5267 703.873 25.0002 703.873 25.0002V158.981"
                  stroke="url(#paint1_linear_4024_13698)"
                  stroke-width="50"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_4024_13698"
                    x1="539.758"
                    y1="-116.611"
                    x2="539.758"
                    y2="492.611"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="currentColor" />
                    <stop offset="1" stop-color="currentColor" />
                  </linearGradient>
                  <linearGradient
                    id="paint1_linear_4024_13698"
                    x1="644.373"
                    y1="25.0002"
                    x2="644.373"
                    y2="160.521"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="currentColor" />
                    <stop offset="1" stop-color="currentColor" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <h2>Πώς μπορούμε να σας βοηθήσουμε σήμερα;</h2>
          </div>
        






<?php
  $form_id = "lead-form-faq";
  $form_heading = null;
  $form_submit = 'Δημιουργία λογαριασμού';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

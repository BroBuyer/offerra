<?php
require_once __DIR__ . '/includes/config.php';

$page_title = SITE_NAME . ' | Κορυφαία πλατφόρμα συναλλαγών με τεχνητή νοημοσύνη';
$page_description = 'Συναλλαγές σε κρυπτονομίσματα, forex και παγκόσμιες αγορές μέσω του ' . SITE_NAME . ': αναλυτικά στοιχεία με τεχνητή νοημοσύνη και διαισθητική πλατφόρμα για πελάτες στην ' . geo_country_name() . '.';
$page_canonical = page_url();
$active_page = "home";


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- hero -->
    <div class="py-8 md:py-10">
      <div class="container-base grid gap-6 lg:grid-cols-2">
        <div
          class="border-primary rounded-custom relative flex flex-col justify-between gap-6 lg:overflow-hidden lg:border lg:p-8">
          <div class="text-primary teal:text-secondary absolute top-36 right-8 -z-10 max-lg:hidden">
            <svg width="729" height="419" viewBox="0 0 729 419" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M22.873 408.674C151.969 116.052 291.571 115.647 383.641 203.172C435.153 252.141 536.754 245.195 591.295 177.036C607.403 156.905 640.07 124.561 696.873 42.2554"
                stroke="url(#paint0_linear_4024_13698)" stroke-width="50" />
              <path d="M584.873 61.9606C631.345 47.5267 703.873 25.0002 703.873 25.0002V158.981"
                stroke="url(#paint1_linear_4024_13698)" stroke-width="50" stroke-linecap="round"
                stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_4024_13698" x1="539.758" y1="-116.611" x2="539.758" y2="492.611"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="currentColor" />
                  <stop offset="1" stop-color="currentColor" />
                </linearGradient>
                <linearGradient id="paint1_linear_4024_13698" x1="644.373" y1="25.0002" x2="644.373" y2="160.521"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="currentColor" />
                  <stop offset="1" stop-color="currentColor" />
                </linearGradient>
              </defs>
            </svg>
          </div>
          <h1 id="heading-style-h1">Συναλλαγείτε με διαφάνεια. Διατηρήστε τον έλεγχο σε κάθε απόφαση.</h1>
            <p>Αποκτήστε πρόσβαση σε κρυπτονομίσματα, forex και παγκόσμια περιουσιακά στοιχεία από μία πλατφόρμα. <?= e(SITE_NAME) ?> συνδυάζει ζωντανά αναλυτικά στοιχεία, υποστηριζόμενη αυτοματοποίηση και εξειδικευμένη υποστήριξη, ώστε να περιηγείστε στις αγορές με σαφή εργαλεία και σταθερές διαδικασίες.</p>
        </div>
        






<?php
  $form_id = "lead-form-hero";
  $form_heading = null;
  $form_submit = 'Δημιουργία λογαριασμού';
  require __DIR__ . '/includes/form.php';
?>

          </div>
    </div>
<div class="py-8 md:py-10">
  <div class="stats-cards container-base grid gap-3 md:grid-cols-2 md:gap-6 xl:grid-cols-4">
    <div class="rounded-custom grid content-start gap-5 border p-4 md:p-6">
      <p class="h2 lowercase">70+</p>
      <p class="h3">Υποστηριζόμενα νομίσματα</p>
    </div>
    <div class="rounded-custom grid content-start gap-5 border p-4 md:p-6">
      <p class="h2 lowercase">42m</p>
      <p class="h3">Επαληθευμένοι χρήστες</p>
    </div>
    <div class="rounded-custom grid content-start gap-5 border p-4 md:p-6">
      <p class="h2 lowercase"><?= e(currency_symbol()) ?>440m</p>
      <p class="h3">Κύκλος συναλλαγών</p>
    </div>
    <div class="rounded-custom grid content-start gap-5 border p-4 md:p-6">
      <p class="h2 lowercase">100+</p>
      <p class="h3">Χώρες εξυπηρέτησης</p>
    </div>
  </div>
</div>
    <!-- features -->
<div class="py-8 md:py-10">
  <div class="container-base grid items-center gap-3 md:gap-6 lg:grid-cols-2">
    <div class="grid gap-6 max-lg:order-2 md:gap-10">
      <h2>Γιατί να επιλέξετε το <?= e(SITE_NAME) ?></h2>
      <p class="md:text-lg">
        Προτιμώμενη από σύγχρονους επενδυτές κρυπτονομισμάτων, αυτή η πλατφόρμα θέτει ένα νέο πρότυπο. Συνδυάζουμε ισχυρή ασφάλεια, πλήρη διαφάνεια, προηγμένη τεχνητή νοημοσύνη και διαισθητική διεπαφή για συναλλαγές με αυτοπεποίθηση.      </p>
      <div class="rounded-custom border bg-white p-4 md:p-6 overflow-x-auto">
        <div class="grid grid-cols-2 gap-x-8 gap-y-6 max-sm:flex">
          <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
            <div class="w-20 sm:w-[104px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 116" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M84.1948 0H19.8052C8.86709 0 0 8.82387 0 19.7087V66.5623C0 79.0055 6.21657 90.6344 16.5858 97.5883L37.4393 111.573C46.2404 117.476 57.7596 117.476 66.5607 111.573L87.4142 97.5883C97.7834 90.6344 104 79.0055 104 66.5623V19.7087C104 8.82386 95.1329 0 84.1948 0ZM14.4176 15.6155C15.6562 14.0036 17.6087 12.9638 19.8052 12.9638H84.1948C86.3915 12.9638 88.3441 14.0038 89.5827 15.6159C88.342 14.0245 86.4001 13 84.2174 13H19.7826C17.6001 13 15.6583 14.0243 14.4176 15.6155ZM20.5685 84.188C21.58 85.1557 22.6816 86.0435 23.8662 86.8379L44.7196 100.823C49.1202 103.774 54.8798 103.774 59.2804 100.823L80.1338 86.8379C81.3187 86.0432 82.4207 85.1552 83.4324 84.1872C82.426 85.1462 81.3307 86.0265 80.1535 86.8147L59.2855 100.788C54.8818 103.737 49.1182 103.737 44.7145 100.788L23.8465 86.8147C22.6697 86.0267 21.5747 85.1468 20.5685 84.188Z"
                  fill="var(--color-primary)" />
                <path d="M32 52.7692L47.3821 68L76 41" stroke="white" stroke-width="13" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="grid gap-2 md:gap-3">
              <p class="h3">Αξιόπιστη ασφάλεια</p>
              <p>Ισχυρά μέτρα προστασίας διασφαλίζουν διαρκώς τα προσωπικά σας στοιχεία και τις επενδύσεις σας.</p>
            </div>
          </div>
          <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
            <div class="w-20 sm:w-[104px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 116" fill="none">
                <rect y="67" width="104" height="49" rx="19" fill="var(--color-primary)" />
                <circle cx="52" cy="28" r="28" fill="var(--color-primary)" />
              </svg>
            </div>
            <div class="grid gap-2 md:gap-3">
              <p class="h3">Εξατομικευμένες συναλλαγές</p>
              <p>Προσαρμόστε τις μεθόδους συναλλαγών στους δικούς σας στόχους και προτιμήσεις.</p>
            </div>
          </div>
          <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
            <div class="w-20 sm:w-[104px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 120" fill="none">
                <rect y="8" width="104" height="104" rx="10" fill="var(--color-primary)" />
                <path
                  d="M71.1659 38C71.1659 36.8954 72.0613 36 73.1659 36H77.2539C78.3584 36 79.2539 36.8954 79.2539 38V82.5995C79.2539 83.704 78.3584 84.5995 77.2539 84.5995H73.1659C72.0613 84.5995 71.1659 83.704 71.1659 82.5995V38Z"
                  fill="white" />
                <path
                  d="M38.6817 37.4427C38.9297 36.588 39.7126 36 40.6025 36H49.8143C50.6982 36 51.4773 36.5802 51.7305 37.4271L65.0644 82.0266C65.4479 83.3094 64.4871 84.5995 63.1482 84.5995H59.1996C58.3156 84.5995 57.5364 84.0191 57.2833 83.1721L53.6987 71.1751C53.4456 70.328 52.6664 69.7477 51.7824 69.7477H39.072C38.1781 69.7477 37.3928 70.3408 37.1483 71.2007L33.7516 83.1465C33.5072 84.0063 32.7218 84.5995 31.8279 84.5995H27.6627C26.3306 84.5995 25.3708 83.3216 25.742 82.0422L38.6817 37.4427ZM48.9665 63.5206C50.2868 63.5206 51.2448 62.2638 50.895 60.9907L47.0696 47.069C46.5239 45.083 43.6951 45.1188 43.1998 47.1179L39.7507 61.0397C39.4383 62.3009 40.3926 63.5206 41.692 63.5206H48.9665Z"
                  fill="white" />
              </svg>
            </div>
            <div class="grid gap-2 md:gap-3">
              <p class="h3">Έξυπνες λύσεις τεχνητής νοημοσύνης</p>
              <p>Ακριβείς πληροφορίες συναλλαγών για τεκμηριωμένες αποφάσεις.</p>
            </div>
          </div>
          <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
            <div class="w-20 sm:w-[104px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 120" fill="none">
                <rect x="104" y="7" width="105" height="104" rx="52" transform="rotate(90 104 7)"
                  fill="var(--color-primary)" />
                <rect x="47" y="32" width="10" height="57" rx="5" fill="white" />
                <rect x="80" y="55" width="10" height="57" rx="5" transform="rotate(90 80 55)" fill="white" />
                <rect x="28.1655" y="43.5295" width="10" height="57" rx="5" transform="rotate(-45 28.1655 43.5295)"
                  fill="white" />
                <rect x="67.7634" y="36.4583" width="10" height="57" rx="5" transform="rotate(45 67.7634 36.4583)"
                  fill="white" />
              </svg>
            </div>
            <div class="grid gap-2 md:gap-3">
              <p class="h3">Αυτοματοποιημένες λύσεις συναλλαγών</p>
              <p>Τα bots τεχνητής νοημοσύνης λειτουργούν συνεχώς και επιτρέπουν πιο δομημένες, βασισμένες σε σήματα προσεγγίσεις συναλλαγών.</p>
            </div>
          </div>
          <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
            <div class="w-20 sm:w-[104px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105 120" fill="none">
                <path
                  d="M49.0009 2.61563C50.0285 -0.871874 54.9715 -0.871877 55.9991 2.61563L65.0336 33.2782C65.5829 35.1427 67.4995 36.2486 69.39 35.7918L100.479 28.2795C104.015 27.425 106.487 31.7031 103.978 34.3362L81.9235 57.4865C80.5825 58.8942 80.5825 61.1058 81.9235 62.5135L103.978 85.6638C106.487 88.2969 104.015 92.575 100.479 91.7205L69.39 84.2083C67.4995 83.7514 65.5829 84.8573 65.0336 86.7218L55.9991 117.384C54.9715 120.872 50.0285 120.872 49.0009 117.384L39.9664 86.7218C39.4171 84.8573 37.5005 83.7514 35.61 84.2083L4.52099 91.7205C0.984987 92.575 -1.48655 88.2969 1.02189 85.6638L23.0765 62.5135C24.4175 61.1058 24.4175 58.8942 23.0765 57.4865L1.02189 34.3362C-1.48655 31.7031 0.984985 27.425 4.52099 28.2795L35.61 35.7918C37.5005 36.2486 39.4171 35.1427 39.9664 33.2782L49.0009 2.61563Z"
                  fill="var(--color-primary)" />
              </svg>
            </div>
            <div class="grid gap-2 md:gap-3">
              <p class="h3">Διαισθητική διεπαφή</p>
              <p>Μια εύχρηστη διεπαφή, σχεδιασμένη για σαφείς συναλλαγές από την πρώτη στιγμή.</p>
            </div>
          </div>
        </div>
      </div>
      <p class="h3">
        Ενισχύστε το οικονομικό σας ταξίδι με το <?= e(SITE_NAME) ?>.
      </p>
      <a class="btn btn-black" href="<?= page_url('sign.php') ?>">Εγγραφή τώρα</a>
    </div>
      <div class="flex items-center justify-center max-lg:order-1">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
  </div>
</div>
    <!-- trading -->
<div class="py-8 md:py-10">
  <div class="container-base grid items-center gap-6 lg:grid-cols-2">
    <div class="grid gap-6 md:gap-10">
      <h2>Συναλλαγές χωρίς κόπο!</h2>
      <p class="text-lg">
        Συναλλαγείτε κορυφαία κρυπτονομίσματα όπως Bitcoin, Ethereum και Dogecoin, με ευκολία και αυτοπεποίθηση.      </p>
      <a class="btn btn-black max-md:hidden" href="<?= page_url('sign.php') ?>">Ξεκινήστε τώρα</a>
    </div>
    <div class="grid gap-3 md:gap-6" data-trading></div>
    <a class="btn btn-black md:hidden" href="<?= page_url('sign.php') ?>">Ξεκινήστε τώρα</a>
  </div>
</div>
<section class="feature-section">
  <div class="container">
    <div class="feature-header">
      <h2>
        Μια παγκόσμια πλατφόρμα συναλλαγών <span>σχεδιασμένη για ανάπτυξη</span>      </h2>
      <p>
        Αποκτήστε πρόσβαση σε πολλές χρηματοπιστωτικές αγορές μέσω ενός συστήματος σχεδιασμένου για ταχύτητα, ακρίβεια και αξιόπιστη παγκόσμια απόδοση.      </p>
    </div>
    <div class="feature-grid">
      <div class="feature-card">
        <div class="accent"></div>
        <h3>Πρόσβαση σε πολλές αγορές</h3>
        <p>
          Συναλλαγείτε κρυπτονομίσματα, forex, μετοχές και εμπορεύματα σε μία πλατφόρμα, χωρίς εναλλαγή εφαρμογών.        </p>
      </div>
      <div class="feature-card featured">
        <div class="accent"></div>
        <h3>Γρήγορη εκτέλεση εντολών</h3>
        <p>
          Η βελτιστοποιημένη πλατφόρμα εξασφαλίζει ταχεία και αξιόπιστη εκτέλεση εντολών στις παγκόσμιες αγορές.        </p>
      </div>
      <div class="feature-card">
        <div class="accent"></div>
        <h3>Αναλυτικά στοιχεία σε πραγματικό χρόνο</h3>
        <p>
          Ζωντανά δεδομένα αγοράς, προηγμένοι δείκτες και πληροφορίες για γρήγορες, τεκμηριωμένες αποφάσεις.        </p>
      </div>
    </div>
  </div>
</section>
    <!-- partners -->
    <div class="py-8 md:py-10">
      <div class="container-base grid gap-6 md:gap-10">
        <h2>Οι συνεργάτες μας</h2>
        <div class="grid grid-cols-2 gap-3 md:grid-cols-4 md:gap-6">
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-1.svg') ?>" alt="partner 1" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-2.svg') ?>" alt="partner 2" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-3.svg') ?>" alt="partner 3" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-4.svg') ?>" alt="partner 4" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-5.svg') ?>" alt="partner 5" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-6.svg') ?>" alt="partner 6" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-7.svg') ?>" alt="partner 7" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-8.svg') ?>" alt="partner 8" width="294"
            height="113" data-lazy />
        </div>
      </div>
    </div>
    <!-- steps -->
<div class="py-8 md:py-10" id="how-it-works">
  <div class="container-base grid gap-6 md:gap-10">
    <div class="grid items-center gap-6 lg:grid-cols-2">
      <h2>Πώς λειτουργεί το <?= e(SITE_NAME) ?>: από την εγγραφή στις συναλλαγές</h2>
      <p class="rounded-custom sm:border sm:p-8">
        Μια σαφής διαδικασία έξι βημάτων: εγγραφή, επαλήθευση, χρηματοδότηση, ρύθμιση στρατηγικής και χρήση εργαλείων αγοράς. Ο πίνακας ελέγχου εμφανίζει με σαφήνεια χρόνους, επιλογές και στοιχεία ελέγχου.      </p>
    </div>
    <div class="grid gap-6 lg:grid-cols-2">
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          1
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Δημιουργήστε τον λογαριασμό σας</p>
          <p>Εγγραφείτε με τα βασικά σας στοιχεία για ασφαλή πρόσβαση στην επίσημη πλατφόρμα <?= e(SITE_NAME) ?>. Αυτό το γρήγορο βήμα ανοίγει τον κύριο πίνακα ελέγχου σας.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          2
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Επιβεβαιώστε την ταυτότητά σας</p>
          <p>Επιβεβαιώστε το email σας για να ξεκλειδώσετε όλες τις δυνατότητες: ζωντανά γραφήματα, εργαλεία ανάλυσης και πόρους για ένα δομημένο ξεκίνημα.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          3
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Αποκτήστε πρόσβαση στην πλατφόρμα συναλλαγών σας</p>
          <p>Χρηματοδοτήστε τον λογαριασμό σας με τουλάχιστον <?= e(money_min()) ?>. Μπορείτε να επιλέξετε μεγαλύτερα ποσά ανάλογα με τους στόχους σας· όλες οι μέθοδοι πληρωμής και οι χρεώσεις εμφανίζονται με σαφήνεια πριν από την επιβεβαίωση.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          4
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Προσθήκη κεφαλαίων</p>
          <p>Επιλέξτε τραπεζική μεταφορά, ηλεκτρονικό πορτοφόλι ή κάρτα. Οι χρόνοι επεξεργασίας και τα τέλη είναι διαφανή, ώστε να έχετε πλήρη έλεγχο της χρηματοδότησης.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          5
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Ορίστε τη στρατηγική σας</p>
          <p>Προσαρμόστε τις ρυθμίσεις κινδύνου, τις αγορές που προτιμάτε και την προσέγγιση συναλλαγών. <?= e(SITE_NAME) ?>: η υποστήριξη τεχνητής νοημοσύνης επιλέγει σήματα και παρακολούθηση αγοράς χωρίς να υποκαθιστά τις επιλογές σας.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          6
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Εξερευνήστε τις διαθέσιμες αγορές</p>
          <p>Μόλις ο λογαριασμός σας είναι ενεργός και ρυθμισμένος, παρακολουθήστε ζωντανές τιμές, σχεδιάστε συναλλαγές και χρησιμοποιήστε την ενιαία πλατφόρμα για κρυπτονομίσματα και άλλα περιουσιακά στοιχεία.</p>
        </div>
      </div>
    </div>
    <div class="grid gap-6 md:grid-cols-2">
      <a class="btn btn-black" href="<?= page_url('sign.php') ?>">Ξεκινήστε τις συναλλαγές</a>
    </div>
  </div>
</div>
    <!-- payments -->
    <div class="py-8 md:py-10">
      <div class="container-base grid items-center gap-6 lg:grid-cols-2">
        <p class="text-lg">
          <?= e(SITE_NAME) ?> υποστηρίζει ποικιλία μεθόδων πληρωμής για πελάτες σε όλο τον κόσμο.        </p>
        <div class="flex flex-wrap justify-center gap-3 md:gap-6">
          <div class="max-sm:w-[74px]">
            <img class="aspect-135/94" src="<?= asset('static/img/svg/payment-1.svg') ?>" alt="payment 1" width="135" height="94"
              data-lazy />
          </div>
          <div class="max-sm:w-[74px]">
            <img class="aspect-135/94" src="<?= asset('static/img/svg/payment-2.svg') ?>" alt="payment 2" width="135" height="94"
              data-lazy />
          </div>
          <div class="max-sm:w-[74px]">
            <img class="aspect-135/94" src="<?= asset('static/img/svg/payment-3.svg') ?>" alt="payment 3" width="135" height="94"
              data-lazy />
          </div>
          <div class="max-sm:w-[74px]">
            <img class="aspect-135/94" src="<?= asset('static/img/svg/payment-4.svg') ?>" alt="payment 4" width="135" height="94"
              data-lazy />
          </div>
        </div>
      </div>
    </div>
    <!-- reviews -->
    <!-- <div class="py-8 md:py-10">
      <div class="container-base grid gap-6 md:gap-10">
        <div class="grid items-end gap-6 md:grid-cols-2">
          <h2><?= e(SITE_NAME) ?>™ reviews</h2>
          <div class="inline-flex justify-end gap-8 max-md:hidden">
            <button class="text-primary hover:text-primary-dark -scale-x-100 cursor-pointer transition-colors"
              data-prev="reviews" aria-label="προηγούμενη διαφάνεια">
              <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="61.6562" y="29.209" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(45 61.6562 29.209)" fill="currentColor" />
                <rect x="64.9287" y="32.4824" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(135 64.9287 32.4824)" fill="currentColor" />
                <rect x="62.4502" y="30.168" width="4.62857" height="60.1714" rx="1"
                  transform="rotate(90 62.4502 30.168)" fill="currentColor" />
              </svg>
            </button>
            <button class="text-primary hover:text-primary-dark cursor-pointer transition-colors" data-next="reviews"
              aria-label="επόμενη διαφάνεια">
              <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="61.6562" y="29.209" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(45 61.6562 29.209)" fill="currentColor" />
                <rect x="64.9287" y="32.4824" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(135 64.9287 32.4824)" fill="currentColor" />
                <rect x="62.4502" y="30.168" width="4.62857" height="60.1714" rx="1"
                  transform="rotate(90 62.4502 30.168)" fill="currentColor" />
              </svg>
            </button>
          </div>
        </div>
        <div class="grid gap-1.5 overflow-hidden" data-slider="reviews">
          <div class="-ml-6">
            <div class="basis-full pl-6 md:basis-1/2">
              <div
                class="border-primary rounded-custom flex h-full flex-col justify-between gap-4 border px-4 py-6 md:gap-6 md:px-8 md:py-10">
                <p>
                  A fantastic συναλλαγών is <?= e(SITE_NAME) ?>! The
                  registration process is straightforward, fees are
                  transparent, and the support team is highly professional,
                  making the trading experience smooth and efficient. I am
                  very satisfied with the service and would recommend it to
                  anyone interested in trading.
                </p>
                <div class="flex items-center gap-3.5 md:gap-7">
                  <p class="initials" data-initials="1"></p>
                  <p class="h3" data-reviewer="1">
                    James Mitchell, Manchester
                  </p>
                </div>
              </div>
            </div>
            <div class="basis-full pl-6 md:basis-1/2">
              <div
                class="border-primary rounded-custom flex h-full flex-col justify-between gap-4 border px-4 py-6 md:gap-6 md:px-8 md:py-10">
                <p>
                  Finally decided to try cryptocurrency and chose <?= e(SITE_NAME) ?>                  — very pleased with the choice. Registration was
                  straightforward and completed in minutes, with transparent
                  pricing from the outset. It feels like a dependable
                  platform, particularly for those new to the space.
                </p>
                <div class="flex items-center gap-3.5 md:gap-7">
                  <p class="initials" data-initials="2"></p>
                  <p class="h3" data-reviewer="2">James Mikel, Bristol</p>
                </div>
              </div>
            </div>
            <div class="basis-full pl-6 md:basis-1/2">
              <div
                class="border-primary rounded-custom flex h-full flex-col justify-between gap-4 border px-4 py-6 md:gap-6 md:px-8 md:py-10">
                <p>
                  A dependable partner in the cryptocurrency trading sector.
                  Straightforward account setup, transparent conditions and
                  knowledgeable assistance. Trading on this platform is
                  genuinely enjoyable.
                </p>
                <div class="flex items-center gap-3.5 md:gap-7">
                  <p class="initials" data-initials="3"></p>
                  <p class="h3" data-reviewer="3">
                    Elizabeth Thornton, Manchester
                  </p>
                </div>
              </div>
            </div>
            <div class="basis-full pl-6 md:basis-1/2">
              <div
                class="border-primary rounded-custom flex h-full flex-col justify-between gap-4 border px-4 py-6 md:gap-6 md:px-8 md:py-10">
                <p>
                  Thanks to <?= e(SITE_NAME) ?>, I've found crypto trading
                  straightforward and accessible. The registration process was
                  smooth, and I appreciate the clarity around fees. As someone
                  new to trading, I feel well-supported and confident using
                  this platform.
                </p>
                <div class="flex items-center gap-3.5 md:gap-7">
                  <p class="initials" data-initials="4"></p>
                  <p class="h3" data-reviewer="4">
                    Eleanor Blackwell, Manchester
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="paggination md:hidden" data-paggination="reviews"></div>
        </div>
      </div>
    </div> -->
<div class="py-8 md:py-10">
  <div class="container-base grid gap-6 md:gap-10" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
    <div class="flex items-center justify-between gap-6 mb-6 reviews-flex-block">
      <h2 class="text-2xl font-bold">Κριτικές χρηστών</h2>
      <div class="inline-flex gap-4 max-md:hidden">
            <button class="text-primary hover:text-primary-dark -scale-x-100 cursor-pointer transition-colors"
              data-prev="reviews" aria-label="προηγούμενη διαφάνεια">
              <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="61.6562" y="29.209" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(45 61.6562 29.209)" fill="currentColor" />
                <rect x="64.9287" y="32.4824" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(135 64.9287 32.4824)" fill="currentColor" />
                <rect x="62.4502" y="30.168" width="4.62857" height="60.1714" rx="1"
                  transform="rotate(90 62.4502 30.168)" fill="currentColor" />
              </svg>
            </button>
            <button class="text-primary hover:text-primary-dark cursor-pointer transition-colors" data-next="reviews"
              aria-label="επόμενη διαφάνεια">
              <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="61.6562" y="29.209" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(45 61.6562 29.209)" fill="currentColor" />
                <rect x="64.9287" y="32.4824" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(135 64.9287 32.4824)" fill="currentColor" />
                <rect x="62.4502" y="30.168" width="4.62857" height="60.1714" rx="1"
                  transform="rotate(90 62.4502 30.168)" fill="currentColor" />
              </svg>
            </button>
      </div>
    </div>
      <div class="swiper" data-slider="reviews">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="border flex flex-col justify-between gap-6 p-6 md:p-10 w-full swiper-border" style="border: 1px solid #ddd; border-radius: 20px;">
            <p>
              <?= e(SITE_NAME) ?> ξεπέρασε τις προσδοκίες μου. Η εγγραφή ήταν απλή, τα τέλη σαφή και η υποστήριξη άμεση. Συνολικά, μια αξιόπιστη και ομαλή πλατφόρμα που χρησιμοποιώ με ευχαρίστηση.            </p>
            <div class="flex items-center gap-4">
              <div class="initials">FE</div>
              <p class="font-bold">Ειδικός συναλλάγματος</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="border flex flex-col justify-between gap-6 p-6 md:p-10 w-full swiper-border" style="border: 1px solid #ddd; border-radius: 20px;">
                <p>
                  Επέλεξα το <?= e(SITE_NAME) ?> για συναλλαγές κρυπτονομισμάτων και είμαι ικανοποιημένος. Η διαδικασία έναρξης ήταν σαφής και διαφανής. Αξιόπιστη επιλογή, ιδίως για αρχάριους.                </p>
            <div class="flex items-center gap-4">
              <div class="initials">IM</div>
              <p class="font-bold">Αναλυτής επενδυτικών αγορών</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="border flex flex-col justify-between gap-6 p-6 md:p-10 w-full swiper-border" style="border: 1px solid #ddd; border-radius: 20px;">
                <p>
                  Θεωρώ το <?= e(SITE_NAME) ?> αξιόπιστη και σταθερή πλατφόρμα. Το άνοιγμα λογαριασμού ήταν εύκολο, οι όροι διαφανείς και η υποστήριξη καταρτισμένη. Οι συναλλαγές εδώ είναι άνετες.                </p>
            <div class="flex items-center gap-4">
              <div class="initials">OT</div>
              <p class="font-bold">Διαδικτυακός trader</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="border flex flex-col justify-between gap-6 p-6 md:p-10 w-full swiper-border" style="border: 1px solid #ddd; border-radius: 20px;">
                <p>
                  Συναλλαγές κρυπτονομισμάτων στο <?= e(SITE_NAME) ?> προσιτό. Η εγγραφή ήταν εύκολη, τα τέλη κατανοητά και η βοήθεια διαθέσιμη όταν χρειάζεται. Ως νέος trader, αυτό έκανε πραγματική διαφορά.                </p>
            <div class="flex items-center gap-4">
              <div class="initials">FA</div>
              <p class="font-bold">Χρηματοοικονομικός αναλυτής</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  (function () {
    var started = false;
    function loadCss(href) {
      if (document.querySelector('link[href="' + href + '"]')) return;
      var l = document.createElement('link');
      l.rel = 'stylesheet';
      l.href = href;
      document.head.appendChild(l);
    }
    function loadScript(src) {
      return new Promise(function (resolve) {
        if (window.Swiper) { resolve(); return; }
        var s = document.createElement('script');
        s.src = src;
        s.async = true;
        s.onload = function () { resolve(); };
        s.onerror = function () { resolve(); };
        document.head.appendChild(s);
      });
    }
    function initSwiper() {
      if (started || !window.Swiper) return;
      var sliderEl = document.querySelector('[data-slider="reviews"]');
      if (!sliderEl) return;
      started = true;
      new Swiper(sliderEl, {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
          nextEl: '[data-next="reviews"]',
          prevEl: '[data-prev="reviews"]',
        },
        pagination: {
          el: '[data-pagination="reviews"], .swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          768: { slidesPerView: 2, spaceBetween: 30 },
          1024: { slidesPerView: 3, spaceBetween: 30 }
        }
      });
    }
    function boot() {
      if (started) return;
      loadCss(<?= json_encode(asset('static/vendor/carousel/r-carousel.min.css')) ?>);
      loadScript(<?= json_encode(asset('static/vendor/carousel/r-carousel.min.js')) ?>).then(initSwiper);
    }
    var target = document.querySelector('[data-slider="reviews"]');
    if (!target) return;
    if ('IntersectionObserver' in window) {
      var io = new IntersectionObserver(function (entries) {
        if (entries.some(function (e) { return e.isIntersecting; })) {
          io.disconnect();
          boot();
        }
      }, { rootMargin: '200px 0px' });
      io.observe(target);
    } else {
      if (document.readyState === 'complete') boot();
      else window.addEventListener('load', boot);
    }
  })();
</script>
    <!-- faq -->
<section class="py-8" id="faq">
  <div class="container-base grid gap-6 md:gap-10">
    <h2>Συχνές ερωτήσεις</h2>
    <div class="grid gap-3 md:gap-6" data-accordion>
      <div id="accordion-1" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(1)">
          <span class="h3 text-left transition-colors">Ποια είναι τα βήματα για να ξεκινήσετε συναλλαγές;</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(2)">
          <span class="h3 text-left transition-colors">Είναι το <?= e(SITE_NAME) ?> αξιόπιστο για τη διαχείριση των χρημάτων και των στοιχείων μου;</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(3)">
          <span class="h3 text-left transition-colors">Πόσο γρήγορα μπορώ να αναλάβω τα κεφάλαιά μου;</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(4)">
          <span class="h3 text-left transition-colors">Πώς γνωρίζω αν αυτή η πλατφόρμα καλύπτει τις ανάγκες συναλλαγών μου;</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(5)">
          <span class="h3 text-left transition-colors">Απαιτείται εμπειρία συναλλαγών πριν ξεκινήσετε;</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(7)">
          <span class="h3 text-left transition-colors">Σε ποιες αγορές μπορώ να έχω πρόσβαση στο <?= e(SITE_NAME) ?>?</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(8)">
          <span class="h3 text-left transition-colors">Πώς λειτουργούν τα αναλυτικά στοιχεία τεχνητής νοημοσύνης;</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(9)">
          <span class="h3 text-left transition-colors">Πόσος χρόνος χρειάζεται συνήθως από την εγγραφή έως την πρώτη συναλλαγή;</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(10)">
          <span class="h3 text-left transition-colors">Υπάρχει υποστήριξη για ερωτήματα σχετικά με τον λογαριασμό;</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
      <div id="accordion-6" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(6)">
          <span class="h3 text-left transition-colors">Σχετικά με την πλατφόρμα</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
              <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
            </svg>
          </span>
        </button>
        <div id="content-6" class="max-h-0 overflow-hidden transition-all">
          <div class="px-4 pb-5 md:px-8 md:pb-8">
            <p style="margin-bottom:16px;"><?= e(SITE_NAME) ?> είναι μια διεθνής πλατφόρμα συναλλαγών για χρήστες που αναζητούν σταθερή απόδοση, ταχεία εκτέλεση και πλήρη έλεγχο του περιβάλλοντος συναλλαγών. Αντί για ξεχωριστές υπηρεσίες ή τοπικές πλατφόρμες, προσφέρει ενιαίο σύστημα που ενσωματώνει όλες τις βασικές δυνατότητες σε μία ροή εργασίας.</p>
            <p style="margin-bottom:16px;">Από την πρόσβαση στις αγορές έως την εκτέλεση εντολών και την ανάλυση, κάθε στοιχείο λειτουργεί ομαλά, με ελάχιστες διακοπές. Έτσι εστιάζετε στις αποφάσεις συναλλαγών, όχι στην εναλλαγή εργαλείων.</p>
            <p style="margin-bottom:10px; font-weight:500;">Συναλλαγείτε σε ποικιλία χρηματοπιστωτικών αγορών από μία πλατφόρμα:</p>
            <ul class="pl-5" style="margin-bottom:22px;">
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Κορυφαία και αναδυόμενα κρυπτονομίσματα</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Αγορές forex με ζωντανές τιμές</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Παγκόσμιες μετοχές και δικαιώματα μετοχών</li>
              <li><span style="color:var(--color-primary);">•</span> Εμπορεύματα για διεύρυνση των επενδυτικών ευκαιριών</li>
            </ul>
            <p style="margin-bottom:16px;">Η απόδοση είναι προτεραιότητα. Το σύστημα είναι βελτιστοποιημένο για εκτέλεση εντολών χαμηλής καθυστέρησης και αξιόπιστη λειτουργία σε έντονη δραστηριότητα αγοράς, ώστε να αντιδράτε εγκαίρως στις τιμές χωρίς τεχνικές καθυστερήσεις.</p>
            <ul class="pl-5" style="margin-bottom:22px;">
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Γρήγορη, αξιόπιστη επεξεργασία εντολών στις αγορές</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Συνεχής ροή δεδομένων αγοράς</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Προεγκατεστημένα αναλυτικά στοιχεία και δείκτες αγοράς</li>
              <li><span style="color:var(--color-primary);">•</span> Υποστήριξη χειροκίνητων και αυτοματοποιημένων συναλλαγών</li>
            </ul>
            <p style="margin-bottom:16px;">Η ασφάλεια και η λειτουργική αξιοπιστία είναι προτεραιότητες σε όλα τα επίπεδα. Η πλατφόρμα τηρεί πρότυπα του κλάδου και εφαρμόζει εσωτερική προστασία για τα στοιχεία χρηστών και τις χρηματοοικονομικές δραστηριότητες ανά πάσα στιγμή.</p>
            <ul class="pl-5" style="margin-bottom:22px;">
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Πλήρως κρυπτογραφημένη επικοινωνία δεδομένων</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Ολοκληρωμένη επαλήθευση ταυτότητας και πρωτόκολλα ασφάλειας πολλαπλών επιπέδων</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Ελεγχόμενες και επικυρωμένες διαδικασίες συναλλαγών</li>
              <li><span style="color:var(--color-primary);">•</span> Υποδομή σχεδιασμένη για αξιόπιστη παγκόσμια συνδεσιμότητα</li>
            </ul>
            <p style="margin-bottom:16px;">Δίνουμε ίση σημασία στην εμπειρία χρήστη. Ο σχεδιασμός είναι σκόπιμα απλός και διαισθητικός, ώστε να εστιάζετε πλήρως στη στρατηγική σας.</p>
            <p style="margin-bottom:16px;">Αυτός ο συνδυασμός ισχυρών λειτουργιών και απλότητας καθιστά το <?= e(SITE_NAME) ?> ιδανικό για αρχάριους και έμπειρους επενδυτές. Οι αρχάριοι προχωρούν γρήγορα χωρίς απότομη καμπύλη εκμάθησης· οι προχωρημένοι χρήστες διατηρούν την ευελιξία για σύνθετες τακτικές.</p>
            <p><?= e(SITE_NAME) ?> προσφέρει επεκτασιμότητα, αξιοπιστία και υψηλή απόδοση σε μία πλατφόρμα — για ασφαλή, οργανωμένη πρόσβαση στις διεθνείς χρηματοπιστωτικές αγορές με αυτοπεποίθηση.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- registration-1 -->
    <div class="py-8 md:py-10">
      <div class="container-base grid gap-6 lg:grid-cols-2">
        <div
          class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8">
          <div class="text-primary teal:text-secondary absolute top-36 right-8 -z-10 max-lg:hidden">
            <svg width="729" height="419" viewBox="0 0 729 419" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M22.873 408.674C151.969 116.052 291.571 115.647 383.641 203.172C435.153 252.141 536.754 245.195 591.295 177.036C607.403 156.905 640.07 124.561 696.873 42.2554"
                stroke="url(#paint0_linear_4024_13698)" stroke-width="50" />
              <path d="M584.873 61.9606C631.345 47.5267 703.873 25.0002 703.873 25.0002V158.981"
                stroke="url(#paint1_linear_4024_13698)" stroke-width="50" stroke-linecap="round"
                stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_4024_13698" x1="539.758" y1="-116.611" x2="539.758" y2="492.611"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="currentColor" />
                  <stop offset="1" stop-color="currentColor" />
                </linearGradient>
                <linearGradient id="paint1_linear_4024_13698" x1="644.373" y1="25.0002" x2="644.373" y2="160.521"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="currentColor" />
                  <stop offset="1" stop-color="currentColor" />
                </linearGradient>
              </defs>
            </svg>
          </div>
          <h2>Λειτουργήστε σε ρυθμιζόμενη πλατφόρμα™</h2>
          <p>
            Εμπιστοσύνη ιδιωτών επενδυτών και επιχειρήσεων για ασφαλή αγορά, πώληση και διαχείριση κρυπτονομισμάτων.          </p>
        </div>
        
<?php
  $form_id = "lead-form-hero-2";
  $form_heading = null;
  $form_submit = 'Δημιουργία λογαριασμού';
  require __DIR__ . '/includes/form.php';
?>

      </div>
    </div>
<!-- specifications -->
<section class="py-8 md:py-20">
  <section style="padding:60px 0;" class="md:!py-[100px]">
    <div style="
      max-width:90%;
      margin:0 auto;
      padding:0 16px;
      box-sizing:border-box;
    ">
      <div style="
        max-width:700px;
        margin-bottom:50px;
      ">
        <h2 style="
          font-size:clamp(24px, 6vw, 44px);
          font-weight:700;
          line-height:1.2;
          letter-spacing:-0.02em;
          word-break:break-word;
          overflow-wrap:break-word;
        ">
          Βασικές δυνατότητες της πλατφόρμας <span style='color:var(--color-primary);'><?= e(SITE_NAME) ?> συναλλαγών</span>        </h2>
      <p style="margin-top:14px;color:#6b7280;font-size:17px;">
        Βασικές λειτουργίες που βελτιώνουν την ταχύτητα, την ακρίβεια και την αυτοπεποίθηση στις συναλλαγές σας.      </p>
    </div>
    <div style="
      border-radius:16px;
      overflow:hidden;
      border:1px solid #eee;
    ">
      <div style="
        display:grid;
        grid-template-columns: 1fr 2fr;
        padding:22px 24px;
        border-bottom:1px solid #eee;
        align-items:center;
        transition:.2s;
      " onmouseover="this.style.background='#f9f9fb'" class="row-block" onmouseout="this.style.background='transparent'">
        <div style="display:flex;align-items:center;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">🤖</span>
          Τεχνικό πλαίσιο        </div>
        <div class="row-text" style="color:#6b7280;">
          Προηγμένη τεχνολογία συναλλαγών με τεχνητή νοημοσύνη        </div>
      </div>
      <div class="row-block" style="
        display:grid;
        grid-template-columns: 1fr 2fr;
        padding:22px 24px;
        border-bottom:1px solid #eee;
        align-items:center;
      ">
        <div style="display:flex;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">💳</span>
          Μέθοδοι χρηματοδότησης        </div>
        <div class="row-text" style="color:#6b7280;">
          Χρεωστικές κάρτες, τραπεζικές μεταφορές, επιλογές PayPal        </div>
      </div>
      <div class="row-block" style="
        display:grid;
        grid-template-columns: 1fr 2fr;
        padding:22px 24px;
        border-bottom:1px solid #eee;
        align-items:center;
      ">
        <div style="display:flex;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">📱</span>
          Προσβασιμότητα πλατφόρμας        </div>
        <div class="row-text" style="color:#6b7280;">
          Λειτουργεί σε πολλές συσκευές        </div>
      </div>
      <div class="row-block" style="
        display:grid;
        grid-template-columns: 1fr 2fr;
        padding:22px 24px;
        border-bottom:1px solid #eee;
        align-items:center;
      ">
        <div style="display:flex;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">🚀</span>
          Αποδοτικότητα        </div>
        <div class="row-text" style="color:#6b7280;">
          Ακρίβεια έως 85%        </div>
      </div>
      <div class="row-block" style="
        display:grid;
        grid-template-columns: 1fr 2fr;
        padding:22px 24px;
        border-bottom:1px solid #eee;
        align-items:center;
      ">
        <div style="display:flex;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">📊</span>
          Διαθέσιμα μέσα        </div>
        <div class="row-text" style="color:#6b7280;">
          Forex, μετοχές, κρυπτονομίσματα, εμπορεύματα και άλλα        </div>
      </div>
      <div class="row-block" style="
        display:grid;
        grid-template-columns: 1fr 2fr;
        padding:22px 24px;
        border-bottom:1px solid #eee;
        align-items:center;
      ">
        <div style="display:flex;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">✍️</span>
          Οδηγός δημιουργίας λογαριασμού        </div>
        <div class="row-text" style="color:#6b7280;">
          Γρήγορο και ομαλό onboarding        </div>
      </div>
      <div class="row-block" style="
        display:grid;
        grid-template-columns: 1fr auto;
        padding:26px 24px;
        align-items:center;
        background:var(--color-primary-lightest);
      ">
        <div class="customer-block" style="display:flex;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">📞</span>
          Υποστήριξη πελατών          <span style="font-weight:400;color:#6b7280;margin-left:10px;">
            Επαγγελματική υποστήριξη 24/7          </span>
        </div>
        <a href="<?= page_url('contacts.php') ?>" class="row-contact-btn" style="
          background:var(--color-primary);
          color:#fff;
          padding:10px 20px;
          border-radius:8px;
          text-decoration:none;
          transition:.2s;
        "
        onmouseover="this.style.background='var(--color-primary-dark)'"
        onmouseout="this.style.background='var(--color-primary)'">
          Επικοινωνία με την υποστήριξη        </a>
      </div>
    </div>
  </div>
</section>
<div class="md:border-primary-light md:rounded-[20px] md:border md:px-20 md:py-8">
  <div class="border-primary-light grid justify-items-center gap-6 rounded-[20px] border px-4 py-5 md:gap-4 md:px-8 md:py-6 text-center md:text-left">
    <h2 class="h3 flex flex-wrap items-center justify-center md:justify-start gap-x-4 gap-y-3">
      Τι λένε οι χρήστες του <?= e(SITE_NAME) ?>      <span class="inline-flex items-center justify-center rounded-full bg-emerald-600 px-2 py-1 text-sm leading-none text-white uppercase">
        Αξιόπιστο      </span>
    </h2>
    <div class="flex flex-wrap items-center justify-center md:justify-start gap-2.5 text-center md:text-left">
      <strong class="leading-none text-emerald-600">
        4.7      </strong>
      <span class="leading-none text-amber-500" role="img"
        aria-label="4.7 Βαθμολογία (στα 5)">
        ★★★★★      </span>
      <span class="flex flex-wrap justify-center md:justify-start gap-1 text-sm text-gray-400">
        <span>
          <strong>124</strong> κριτικές πελατών ·
        </span>
        <span>
          Βάσει <strong>337</strong> αξιολογήσεων ·
        </span>
        <span>
          Βαθμολογία (στα 5)        </span>
      </span>
    </div>
    <p class="text-center md:text-left">
      Μια διαισθητική πλατφόρμα συναλλαγών με προηγμένα εργαλεία αυτοματοποίησης και εκτενές εκπαιδευτικό υλικό.    </p>
  </div>
</div>
      </div>
    </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

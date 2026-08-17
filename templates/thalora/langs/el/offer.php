<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Λύσεις συναλλαγών | Υπηρεσίες με τεχνητή νοημοσύνη — ' . SITE_NAME;
$page_description = 'Επωφεληθείτε από εξατομικευμένο onboarding, εποπτεία χαρτοφυλακίου, κρυπτογραφημένη ασφάλεια και εξειδικευμένη υποστήριξη αγοράς στο ' . SITE_NAME . '.';
$page_canonical = page_url("offer.php");
$active_page = "offer";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Προσφορές', 'offer.php')];


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
<span class="breadcrumb-item">Λεπτομέρειες προσφοράς</span>
          </nav>
        </div>
      </div>
      <!-- tracker -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom flex flex-col justify-between gap-6 lg:min-h-[540px] lg:overflow-hidden lg:border lg:p-8"
          >
 <h1 class="relative z-20">Ξεκινήστε το ταξίδι σας στο <?= e(SITE_NAME) ?>: παρακολούθηση αγοράς, ανάλυση και υποστήριξη</h1>
<p class="relative z-20">
  Εγγραφείτε, επαληθεύστε την ταυτότητά σας και προσθέστε κεφάλαια γρήγορα. Παρακολούθηση χαρτοφυλακίου, βοήθεια συναλλαγών με τεχνητή νοημοσύνη και καθοδηγούμενη εμπειρία από την πρώτη σύνδεση έως τον πίνακα ελέγχου.</p>
          </div>
          <div class="relative grid min-h-[355px] content-end">
            <div
              class="text-primary teal:text-secondary absolute top-0 right-0 z-10 w-[1000px] max-md:translate-y-[50px] lg:w-[1486px]"
            >
              <svg
                viewBox="0 0 1486 736"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M25.0068 710.675C118.007 414.175 206.507 299.5 535.507 343.5C864.507 387.5 820.077 177.675 990.007 177.675C1092.51 177.675 1124.51 362 1449.51 33.5"
                  stroke="url(#paint0_linear_41_6213)"
                  stroke-width="50"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M1333.01 25.1989L1460.36 24.9999L1460.56 149.829"
                  stroke="url(#paint1_linear_41_6213)"
                  stroke-width="50"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_41_6213"
                    x1="1117.44"
                    y1="-260.101"
                    x2="1117.44"
                    y2="865.799"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="currentColor" />
                    <stop offset="1" stop-color="currentColor" />
                  </linearGradient>
                  <linearGradient
                    id="paint1_linear_41_6213"
                    x1="1277.84"
                    y1="54.3839"
                    x2="1489.58"
                    y2="54.0531"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="currentColor" />
                    <stop offset="1" stop-color="currentColor" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div
              class="absolute left-[5%] z-20 max-lg:max-w-[230px] md:left-[10%] lg:top-5"
            >
              <div class="offer-visual">
                                <picture>
                  <source type="image/avif" srcset="<?= asset('static/img/responsive/orange/phone-3-1033.avif') ?>" />
                  <source type="image/webp" srcset="<?= asset('static/img/responsive/orange/phone-3-1033.webp') ?>" />
                  <img
                    src="<?= asset('static/img/responsive/orange/phone-3-1033.webp') ?>"
                    alt="<?= e(SITE_NAME) ?> trading app"
                    class="offer-phone"
                    width="400"
                    height="660"
                    loading="lazy"
                    decoding="async"
                  />
                </picture>
              </div>
            </div>
            <div
              class="bg-before-custom relative z-30 grid grid-cols-2 gap-3 md:gap-6"
            >
              <a class="btn btn-black col-span-full" href="<?= page_url('sign.php') ?>">Εγγραφή</a>
              <a class="btn btn-black btn-square" href="<?= page_url('sign.php') ?>">
                <img src="<?= asset('static/img/svg/google-play.svg') ?>" alt="Αποκτήστε το στο Google Play" />
              </a>
              <a class="btn btn-black btn-square" href="<?= page_url('sign.php') ?>">
                <img src="<?= asset('static/img/svg/app-store.svg') ?>" alt="Λήψη από το App Store" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- offer seo depth -->
<div class="py-8 md:py-10">
  <div class="container-base grid gap-6 md:gap-8">
    <p class="text-lg max-w-4xl">Προσφέρουμε καθοδηγούμενο onboarding, πλήρη πρόσβαση σε εργαλεία αγοράς και συνεχή βοήθεια. Μια σαφής, διαφανής διαδρομή από την εγγραφή στις καθημερινές συναλλαγές, χωρίς συντομεύσεις.</p>    <p class="max-w-4xl">Η ελάχιστη κατάθεση ξεκλειδώνει όλες τις δυνατότητες. Εξερευνήστε στρατηγικές τεχνητής νοημοσύνης, διαχειριστείτε τον κίνδυνο και παρακολουθήστε την πορεία του χαρτοφυλακίου σας.</p>    <p class="max-w-4xl">Ελέγχετε πάντα τέλη, χρόνους ανάληψης και βήματα επαλήθευσης όπως εμφανίζονται στην πλατφόρμα. Στόχος μας είναι να έχετε λειτουργικό έλεγχο: όρια, μέγεθος θέσης και χειροκίνητες επιλογές παραμένουν διαθέσιμα ακόμη και όταν είναι ενεργές οι αυτοματοποιημένες ειδοποιήσεις.</p>    <p class="max-w-4xl">Η υποστήριξη εξηγεί πώς λειτουργεί το <?= e(SITE_NAME) ?> και την κατάσταση των συναλλαγών· δεν παρέχει εξατομικευμένες συμβουλές. Οι αγορές ενέχουν κίνδυνο: αξιολογήστε την έκθεσή σας και συναλλαγείτε μόνο με κεφάλαια που μπορείτε να αντέξετε να χάσετε.</p>    <div class="grid gap-4 md:grid-cols-3">
            <div class="border-primary rounded-custom border p-4 md:p-6">
        <h2 class="h3 mb-2">Onboarding χωρίς κόπο</h2>
        <p>Εύκολη δημιουργία λογαριασμού, επιβεβαίωση ταυτότητας και σαφής πρόσβαση στον πίνακα ελέγχου.</p>
      </div>
            <div class="border-primary rounded-custom border p-4 md:p-6">
        <h2 class="h3 mb-2">Τεχνητή νοημοσύνη και αγορές</h2>
        <p>Ενσωματωμένα αναλυτικά στοιχεία, αυτοματοποιημένα σήματα και πρόσβαση σε πολλές αγορές σε μία πλατφόρμα.</p>
      </div>
            <div class="border-primary rounded-custom border p-4 md:p-6">
        <h2 class="h3 mb-2">Σαφής υποστήριξη πελατών</h2>
        <p>Σαφείς δομές τελών και πολιτικές ανάληψης· εξειδικευμένη βοήθεια για λογαριασμούς και συναλλαγές.</p>
      </div>
          </div>
  </div>
</div>
      <!-- workflow -->
<div class="relative z-40 py-8 md:py-10">
  <div class="container-base grid gap-6 md:gap-10">
    <h2>Αρχές λειτουργίας</h2>
    <div class="relative grid gap-x-4 gap-y-6 lg:grid-cols-3">
      <div class="backline"></div>
    <div class="border-primary h3 rounded-custom relative z-10 flex items-center justify-center border bg-white p-4 text-center md:p-6">
      Δημιουργήστε το προφίλ σας    </div>
    <div class="border-primary h3 rounded-custom relative z-10 flex items-center justify-center border bg-white p-4 text-center md:p-6">
      Προσθέστε κεφάλαια στον λογαριασμό σας    </div>
    <div class="border-primary h3 rounded-custom relative z-10 flex items-center justify-center border bg-white p-4 text-center md:p-6">
      Ξεκινήστε συναλλαγές με αυτοπεποίθηση    </div>
        </div>
      </div>
    </div>
      <!-- registration-1 -->
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
<h2>Η επίσημη πλατφόρμα <?= e(SITE_NAME) ?> για μεθοδικές συναλλαγές</h2>
<p>
  <?= e(SITE_NAME) ?> είναι σχεδιασμένο για ιδιώτες και ομάδες που διαχειρίζονται ψηφιακά νομίσματα και περιουσιακά στοιχεία: σαφή εργαλεία, κρυπτογράφηση SSL και άμεση βοήθεια. Μία πλατφόρμα για ανάλυση, συναλλαγές και διαχείριση χαρτοφυλακίου.</p>
          </div>
        






<?php
  $form_id = "lead-form-offer";
  $form_heading = null;
  $form_submit = 'Δημιουργία λογαριασμού';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

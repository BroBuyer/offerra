<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Premium AI μηχανή συναλλαγών για παγκόσμιες αγορές';
$page_description = $page_description ?? 'Ένας πιο έξυπνος, πιο καθαρός τρόπος πρόσβασης στις παγκόσμιες αγορές με ' . SITE_NAME . ' — δομημένα AI εργαλεία για crypto, forex και μετοχές.';
$page_canonical = isset($page_canonical) ? canonical_url($page_canonical) : page_url();
$active_page = $active_page ?? 'home';
$og_image = page_url($og_image_path ?? og_image_path());
?>
<!DOCTYPE html>
<html lang="<?= e(site_locale()) ?>" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($page_title) ?></title>
  <meta name="description" content="<?= e($page_description) ?>">
  <link rel="canonical" href="<?= e($page_canonical) ?>">
<?php if (!empty($noindex)): ?>
  <meta name="robots" content="noindex, nofollow">
<?php else: ?>
  <meta name="robots" content="index, follow, max-image-preview:large">
<?php endif; ?>

  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= e($page_title) ?>">
  <meta property="og:description" content="<?= e($page_description) ?>">
  <meta property="og:url" content="<?= e($page_canonical) ?>">
  <meta property="og:image" content="<?= e($og_image) ?>">
  <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= e($page_title) ?>">
  <meta name="twitter:description" content="<?= e($page_description) ?>">
  <meta name="twitter:image" content="<?= e($og_image) ?>">

  <link rel="icon" type="image/svg+xml" href="<?= asset('static/img/logo.svg') ?>">
  <?php if (($active_page ?? '') === 'home' || ($active_page ?? '') === 'product'): ?>
  <link rel="preload" as="image" href="<?= asset(platform_image_path()) ?>" type="image/png">
  <?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset_version('static/css/main.css') ?>">
  <link rel="stylesheet" href="<?= asset_version('integration/default-integration.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css">

  <script>
    window.APP_LANG = {
      themeToggleDarkText: '🌙 Σκοτεινό',
      themeToggleLightText: '☀️ Φωτεινό',
      themeToggleDarkAria: 'Μετάβαση στο σκοτεινό θέμα',
      themeToggleLightAria: 'Μετάβαση στο φωτεινό θέμα',
      mockupToday: 'Σήμερα',
      orderPendingAllocation: 'εκκρεμής εντολή κατανομής',
      chatStep1Bot: "Γεια! Είμαι η Lisa, η βοηθός onboarding σας. Έτοιμοι να ανοίξετε trading λογαριασμό σε λίγα γρήγορα βήματα;",
      chatStep1Yes: "Ναι, ας ξεκινήσουμε",
      chatStep1More: 'Πες μου περισσότερα πρώτα',
      chatStep2Bot: 'Τέλεια. Έχετε συναλλάξει crypto ή forex στο παρελθόν;',
      chatStep2New: "Είμαι νέος/α",
      chatStep2Mid: 'Κάποια εμπειρία',
      chatStep2Pro: "Έχω εμπειρία",
      chatStep3Bot: 'Τι σας ενδιαφέρει περισσότερο αυτή τη στιγμή;',
      chatStep3Crypto: 'Crypto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Μετοχές / δείκτες',
      chatStep3All: 'Όλα τα παραπάνω',
      chatStep4Bot: "Τέλεια. Θα ετοιμάσω μια δωρεάν φόρμα λογαριασμού — διαρκεί λιγότερο από 3 λεπτά και η ομάδα μας θα καλέσει για να ολοκληρώσει τη ρύθμιση.",
      chatStep4Form: 'Άνοιγμα φόρμας',
      chatMoreReply: 'Καθοδηγούμε αρχάριους με καθαρό dashboard, AI συμβουλές αγοράς σε απλή γλώσσα και ασφαλή χρηματοδότηση από την ελάχιστη κατάθεσή σας. Συνεχίζουμε;',
      chatContinue: "Ναι, ας συνεχίσουμε",
      chatFormPrompt: "Εισαγάγετε τα στοιχεία σας παρακάτω και υποβάλτε — θα μείνω εδώ αν χρειαστείτε κάτι.",
      valPhoneRequired: 'Εισαγάγετε τον αριθμό τηλεφώνου σας',
      valPhoneInvalid: 'Εισαγάγετε έγκυρο αριθμό τηλεφώνου',
      valPhoneCountry: 'Μη έγκυρος κωδικός χώρας',
      valPhoneShort: 'Ο αριθμός τηλεφώνου είναι πολύ σύντομος',
      valPhoneLong: 'Ο αριθμός τηλεφώνου είναι πολύ μακρύς',
      valSessionExpired: 'Η συνεδρία έληξε. Φορτώστε ξανά τη σελίδα και δοκιμάστε ξανά.',
      valGenericError: 'Κάτι πήγε στραβά. Δοκιμάστε ξανά αργότερα.',
      valConnectionError: 'Σφάλμα σύνδεσης. Ελέγξτε τη σύνδεσή σας στο internet και δοκιμάστε ξανά.'
    };
  </script>
  <script>
    (function () {
      try {
        var t = localStorage.getItem('brandTheme') || 'dark';
        document.documentElement.setAttribute('data-theme', t);
      } catch (e) {}
    })();
  </script>

  <?php render_schema($active_page === 'home' ? 'home' : 'page', $schema_extra ?? []); ?>
<?php if (function_exists('offer_vitals_head')) { offer_vitals_head(); } ?>
</head>
<body data-theme="dark">
<script>
  (function () {
    try {
      var t = localStorage.getItem('brandTheme') || 'dark';
      document.body.dataset.theme = t;
      document.documentElement.setAttribute('data-theme', t);
    } catch (e) {}
  })();
</script>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Απαντήσεις για χρηματοδότηση, ασφάλεια, AI insights και έναρξη στο ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';

$faq_chevron = '<svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Συχνές ερωτήσεις</h1>
      <p class="lead">Άμεσες απαντήσεις για εγγραφή, ασφάλεια και πώς βοηθά η AI στην πλατφόρμα.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Πώς ξεκινώ;
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Δημιουργήστε λογαριασμό, ολοκληρώστε σύντομη επαλήθευση και καταθέστε από <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Γραφήματα, εργαλεία και καθοδηγούμενο onboarding ξεκλειδώνουν αμέσως μετά. Μπορείτε επίσης να chat με την Lisa στη γωνία.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Πώς με βοηθά η AI στις συναλλαγές;
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> εμφανίζει σύντομα market insights σε απλή γλώσσα. Εσείς αποφασίζετε πάντα αν θα ενεργήσετε.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Πώς προστατεύεται ο λογαριασμός μου;
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Οι συνδέσεις χρησιμοποιούν κρυπτογράφηση SSL. Δεν ζητάμε ποτέ περιττά δικαιώματα — κρατήστε το login σας ιδιωτικό.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Υπάρχουν κρυφά τέλη;
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Τα τέλη εμφανίζονται πριν επιβεβαιώσετε. Χωρίς απροσδόκητες χρεώσεις σε καταθέσεις ή αναλήψεις όταν τηρούνται οι όροι.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ποιος είναι η Lisa στο chat widget;
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Η Lisa είναι η βοηθός onboarding μας. Σας καθοδηγεί σε σύντομο quiz και βοηθά να υποβάλετε ασφαλές αίτημα λογαριασμού.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Συχνές ερωτήσεις');
$page_description = 'Απαντήσεις για χρηματοδότηση, ασφάλεια, πληροφορίες ΤΝ και έναρξη στο ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Συχνές ερωτήσεις</p>
      <h1>Πριν χρηματοδοτήσετε τον λογαριασμό</h1>
      <p class="lead">Άμεσες απαντήσεις για πρόσβαση, ασφάλεια και πώς βοηθά η ΤΝ στην πλατφόρμα.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Πώς ξεκινώ;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Δημιουργήστε λογαριασμό, ολοκληρώστε σύντομη επαλήθευση και καταθέστε από <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Διαγράμματα, εργαλεία και καθοδηγούμενη ένταξη ξεκλειδώνουν αμέσως μετά.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Πώς με βοηθά η ΤΝ στις συναλλαγές;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Το <?= e(SITE_NAME) ?> εμφανίζει σύντομες πληροφορίες αγοράς σε απλή γλώσσα. Εσείς αποφασίζετε πάντα αν θα ενεργήσετε.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Πώς προστατεύεται ο λογαριασμός μου;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Οι συνδέσεις χρησιμοποιούν κρυπτογράφηση SSL. Δεν ζητάμε περιττά δικαιώματα — κρατήστε ιδιωτικά τα στοιχεία σύνδεσης.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Υπάρχουν κρυφές χρεώσεις;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Τα τέλη εμφανίζονται πριν την επιβεβαίωση. Χωρίς εκπλήξεις σε καταθέσεις ή αναλήψεις όταν τηρούνται οι όροι.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

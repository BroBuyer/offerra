<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Πλατφόρμα trading με AI');
$page_description = 'Κάντε trading σε κρυπτονομίσματα, forex και παγκόσμιες αγορές με την ' . SITE_NAME . '. Ανάλυση σε πραγματικό χρόνο, σήματα με υποστήριξη AI και πλατφόρμα σχεδιασμένη για ταχύτητα και σαφήνεια.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <!-- Hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <p class="eyebrow">Πλατφόρμα trading με AI</p>
        <h1>Κάντε trading πιο έξυπνα.<br><span class="text-accent">Αντιδράστε πιο γρήγορα.</span></h1>
        <p class="lead">
          Το νέο πρότυπο για crypto και multi-market trading. Προηγμένη ασφάλεια, διαφανή κόστη,
          insights με καθοδήγηση AI και διεπαφή που επιταχύνει τις αποφάσεις σας.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Προστασία SSL
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Υποστήριξη 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Γρήγορη εκτέλεση
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Ξεκινήστε το trading - ελάχ. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Ανοίξτε τον λογαριασμό σας σε 2 λεπτά';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Στατιστικά πλατφόρμας">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Διαθέσιμα νομίσματα</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">εκ.</span></div>
        <div class="stat-label">Επαληθευμένοι χρήστες</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">εκ.</span></div>
        <div class="stat-label">Όγκος συναλλαγών</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Υποστηριζόμενες χώρες</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Επισκόπηση πλατφόρμας trading">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Πλατφόρμα trading</p>
        <h2>Επαγγελματικά γραφήματα.<br>Έτοιμη για mobile.</h2>
        <p class="lead">
          Καθαρή διεπαφή εμπνευσμένη από σύγχρονα ανταλλακτήρια, με δεδομένα BTC/USDT σε πραγματικό χρόνο, διαχείριση χαρτοφυλακίου
          και συναλλαγές με ένα κλικ. Σχεδιασμένη για να σας δίνει σιγουριά από την πρώτη σύνδεση.
        </p>
        <ul class="platform-points">
          <li>Γραφήματα κηροπηγίων σε πραγματικό χρόνο</li>
          <li>Χαρτοφυλάκιο και P/L με μια ματιά</li>
          <li>Ασφαλές πίνακας λογαριασμού</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Δοκιμάστε την πλατφόρμα</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Γιατί <?= e(SITE_NAME) ?></p>
        <h2>Όλα όσα χρειάζεστε για να λειτουργείτε με εμπιστοσύνη</h2>
        <p class="lead">Ασφάλεια, ταχύτητα και νοημοσύνη σε μια καθαρή πλατφόρμα σχεδιασμένη για σύγχρονους traders.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Ασφάλεια τραπεζικού επιπέδου</h3>
          <p>Κρυπτογράφηση SSL, 2FA και ασφαλής διαχείριση κεφαλαίων προστατεύουν τα δεδομένα και το κεφάλαιό σας σε κάθε στάδιο.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Σήματα αγοράς με AI</h3>
          <p>Ακριβή insights σε πραγματικό χρόνο σας βοηθούν να εντοπίζετε ευκαιρίες και να παίρνετε πιο γρήγορες, τεκμηριωμένες αποφάσεις.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Αυτοματοποιημένο trading</h3>
          <p>Τα bots με υποστήριξη AI λειτουργούν 24/7 για αποδοτική εκτέλεση στρατηγικών, ενώ εσείς διατηρείτε τον πλήρη έλεγχο.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Πρόσβαση σε πολλές αγορές</h3>
          <p>Κάντε trading σε crypto, forex, μετοχές και εμπορεύματα σε ένα ενιαίο περιβάλλον.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Εκτέλεση χαμηλής καθυστέρησης</h3>
          <p>Υποδομή βελτιστοποιημένη για σταθερή εκτέλεση εντολών ακόμη και σε υψηλή μεταβλητότητα αγοράς.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Καθαρή διεπαφή</h3>
          <p>Μινιμαλιστικός σχεδιασμός που μειώνει τους περισπασμούς και σας επιτρέπει να εστιάζετε στη στρατηγική, όχι στην πλοήγηση.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Αγορές σε πραγματικό χρόνο</p>
        <h2>Κάντε trading σε Bitcoin, Ethereum και άλλα assets</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Ζωντανές τιμές, προηγμένοι δείκτες και επαγγελματική επισκόπηση των αγορών που σας ενδιαφέρουν.
        </p>
        <a href="sign.php" class="btn btn-primary">Πρόσβαση στις αγορές</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Τιμές αγοράς σε πραγματικό χρόνο">
        <div class="exchange-panel-header">
          <span>Αγορές</span>
          <span class="live-dot">Live</span>
        </div>
        <div class="ticker-list" data-ticker-list>
          <div class="ticker-row">
            <div><div class="ticker-symbol">BTC</div><div class="ticker-pair">BTC/USD</div></div>
            <div class="ticker-price" data-price="btc">—</div>
            <div class="ticker-change up" data-change="btc">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">ETH</div><div class="ticker-pair">ETH/USD</div></div>
            <div class="ticker-price" data-price="eth">—</div>
            <div class="ticker-change up" data-change="eth">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">SOL</div><div class="ticker-pair">SOL/USD</div></div>
            <div class="ticker-price" data-price="sol">—</div>
            <div class="ticker-change down" data-change="sol">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">XRP</div><div class="ticker-pair">XRP/USD</div></div>
            <div class="ticker-price" data-price="xrp">—</div>
            <div class="ticker-change up" data-change="xrp">—</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How it works -->
  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Πώς να ξεκινήσετε</p>
        <h2>Από την εγγραφή στο πρώτο trade σε λίγα λεπτά</h2>
        <p class="lead">Μια ξεκάθαρη διαδρομή, χωρίς περιττή πολυπλοκότητα ή αβεβαιότητα.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Δημιουργήστε τον λογαριασμό σας</h3>
          <p>Εγγραφείτε με τα στοιχεία σας και αποκτήστε άμεση, ασφαλή πρόσβαση στην πλατφόρμα.</p>
        </article>
        <article class="step-card">
          <h3>Επαληθεύστε το email</h3>
          <p>Επιβεβαιώστε τη διεύθυνσή σας και ξεκλειδώστε την πλήρη εμπειρία trading.</p>
        </article>
        <article class="step-card">
          <h3>Καταθέστε κεφάλαια</h3>
          <p>Καταθέστε τουλάχιστον <?= MIN_DEPOSIT ?> <?= CURRENCY ?> μέσω τραπεζικής μεταφοράς, κάρτας ή e-wallet.</p>
        </article>
        <article class="step-card">
          <h3>Ορίστε τη στρατηγική</h3>
          <p>Επιλέξτε επίπεδο κινδύνου και προτιμήσεις: χειροκίνητα ή με αυτοματισμό υποστηριζόμενο από AI.</p>
        </article>
        <article class="step-card">
          <h3>Ξεκινήστε το trading</h3>
          <p>Μπείτε στην αγορά με ζωντανά γραφήματα, επαγγελματικά εργαλεία και υποστήριξη πάντα διαθέσιμη.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Ανοίξτε τώρα τον λογαριασμό σας</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Καταθέσεις</p>
      <h2 style="margin-bottom: 0.75rem;">Καταθέστε με τους τρόπους που ήδη χρησιμοποιείτε</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Κάρτες, e-wallets και τραπεζικές μεταφορές, προστατευμένες με κρυπτογράφηση SSL.</p>
      <?php
      $payment_context = 'καταθέσεις και χρηματοδότηση λογαριασμού';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Αξιόπιστη υποδομή</p>
        <h2>Χτισμένη με κορυφαίους συνεργάτες του κλάδου</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Κριτικές</p>
        <h2>Τι λένε οι traders</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Η εγγραφή κράτησε λίγα λεπτά, τα κόστη είναι διαφανή και η υποστήριξη απαντά πραγματικά. Μια ομαλή και αξιόπιστη εμπειρία στην οποία συνεχίζω να βασίζομαι.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Ανεξάρτητος trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Εδώ ξεκίνησα επιτέλους crypto trading χωρίς κανένα παράπονο. Γρήγορη ρύθμιση και όλα εξηγημένα με σαφήνεια. Εξαιρετική επιλογή, ειδικά για να ξεκινήσετε σωστά.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Λάτρης των crypto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Σταθερή και αξιόπιστη. Απλό άνοιγμα λογαριασμού, ξεκάθαροι όροι και ικανή ομάδα. Μια εμπειρία trading εκπληκτικά άνετη.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Διαχειριστής ψηφιακών assets</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Το trading δεν φαίνεται πλέον τόσο περίπλοκο όσο πριν. Απλή εγγραφή, ξεκάθαρα κόστη και υποστήριξη όταν τη χρειάζεστε. Για όσους ξεκινούν, κάνει πραγματικά τη διαφορά.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Ιδιώτης επενδύτρια</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Συχνές ερωτήσεις</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Πώς μπορώ να ξεκινήσω;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Δημιουργήστε τον λογαριασμό σας με βασικά στοιχεία, ολοκληρώστε μια σύντομη επαλήθευση και καταθέστε τουλάχιστον <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Θα έχετε πλήρη πρόσβαση στην πλατφόρμα: ζωντανά γραφήματα, εργαλεία trading και υποβοηθούμενο onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Τα κεφάλαια και τα δεδομένα μου είναι ασφαλή;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Χρησιμοποιούμε κρυπτογράφηση SSL, έλεγχο ταυτότητας δύο παραγόντων και ασφαλείς διαδικασίες μέσω αξιόπιστων παρόχων. Τα προσωπικά σας δεδομένα επεξεργάζονται σύμφωνα με αυστηρά πρότυπα ασφαλείας.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Πότε μπορώ να αποσύρω τα κέρδη;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Μπορείτε να ζητήσετε ανάληψη οποιαδήποτε στιγμή από τον πίνακα ελέγχου. Η επεξεργασία διαρκεί συνήθως από 1 έως 3 εργάσιμες ημέρες. Κόστη και χρόνοι εμφανίζονται πάντα εκ των προτέρων, χωρίς εκπλήξεις.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Χρειάζομαι εμπειρία στο trading;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Καθόλου. Το υποβοηθούμενο onboarding, οι εύχρηστοι οδηγοί και τα εργαλεία με υποστήριξη AI σας βοηθούν να εξελιχθείτε με τον δικό σας ρυθμό. Και για κάθε επίπεδο εμπειρίας, η υποστήριξη είναι διαθέσιμη 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Σε ποιες αγορές μπορώ να δραστηριοποιηθώ;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Πρόσβαση σε κρυπτονομίσματα, forex, παγκόσμιες μετοχές και εμπορεύματα σε μία διεπαφή. Δεδομένα σε πραγματικό χρόνο, ενσωματωμένη ανάλυση και υποστήριξη τόσο για χειροκίνητες όσο και για αυτοματοποιημένες στρατηγικές.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Platform specs -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Πλατφόρμα</p>
        <h2>Βασικά χαρακτηριστικά με μια ματιά</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Μηχανή trading με AI</div>
          <div class="specs-value">Προηγμένη ανάλυση αγοράς με machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Μέθοδοι χρηματοδότησης</div>
          <div class="specs-value">Κάρτες πληρωμής, τραπεζικές μεταφορές, PayPal, e-wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Πρόσβαση από συσκευή</div>
          <div class="specs-value">Web, tablet και mobile, πλήρως responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Ακρίβεια σημάτων</div>
          <div class="specs-value">Έως 85% στις υποστηριζόμενες στρατηγικές AI</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Αγορές</div>
          <div class="specs-value">Crypto, forex, μετοχές, εμπορεύματα</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Γρήγορη ρύθμιση λογαριασμού με υποβοηθούμενη επαλήθευση</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Υποστήριξη</div>
          <div class="specs-value">Επαγγελματική υποστήριξη 24/7 - <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Επικοινωνήστε μαζί μας</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Αξιόπιστη</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Αξιολόγηση <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> κριτικές · Βασισμένο σε <strong>1&nbsp;842</strong> αξιολογήσεις
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Έτοιμοι για trading σε μια πλατφόρμα σχεδιασμένη για μέγιστη σαφήνεια;</h2>
        <p class="lead">Γίνετε μέλος ιδιωτών traders και επιχειρήσεων που αγοράζουν, πωλούν και διαχειρίζονται ψηφιακά assets με εμπιστοσύνη.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Δημιουργήστε δωρεάν λογαριασμό';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

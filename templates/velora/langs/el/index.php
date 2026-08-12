<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Premium AI μηχανή συναλλαγών για παγκόσμιες αγορές');
$page_description = SITE_NAME . ' — ένας πιο έξυπνος, πιο καθαρός τρόπος πρόσβασης στις παγκόσμιες αγορές με δομημένα AI εργαλεία για crypto, forex και μετοχές.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-section" id="signup">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <h1><?= e(SITE_NAME) ?>: ένας πιο έξυπνος, πιο καθαρός τρόπος πρόσβασης στις <span class="text-accent">παγκόσμιες αγορές</span></h1>

          <p class="hero-desc">
            Νέος στις συναλλαγές; <?= e(SITE_NAME) ?> προσφέρει δομημένα AI εργαλεία σχεδιασμένα να κρατούν το ταξίδι σας διαφανές.
            Εξερευνήστε crypto, forex και μετοχές χωρίς τεχνικό χάος.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Ξεκινήστε συναλλαγές — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Ανακαλύψτε δυνατότητες</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Προστασία με πρωτόκολλο SSL
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Καθοδηγούμενη διαδρομή για αρχάριους
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Δημιουργήστε λογαριασμό</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Διαρκεί λιγότερο από 3 λεπτά. Μηδενικά τέλη εγκατάστασης.';
            $form_submit = 'Δημιουργία δωρεάν λογαριασμού';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="stats-bar">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M3 3v18h18"/>
              <path d="m18.7 8-5.1 5.2-2.8-2.7L7 14.3"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">80+</div>
            <div class="stat-label">Διαπραγματεύσιμα assets</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Γρήγορα</div>
            <div class="stat-label">Ρύθμιση λογαριασμού</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">24/7</div>
            <div class="stat-label">Υποστήριξη</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Ασφαλές</div>
            <div class="stat-label">Επεξεργασία δεδομένων</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Έξυπνος χώρος εργασίας</div>

          <h2 class="section-title">
            Επαγγελματικά γραφήματα.<br>
            <span class="text-accent">Σχεδιασμένα για απλές αποφάσεις.</span>
          </h2>

          <p class="section-subtitle">
            Παρακολουθήστε ζωντανές τιμές και ενεργήστε από ένα καθαρό περιβάλλον σχεδιασμένο να μειώνει το γνωστικό φορτίο και το συναισθηματικό trading.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              AI εμπλουτισμένα γραφήματα σε πραγματικό χρόνο
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Σύστημα εκτέλεσης αγοράς με ένα πάτημα
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Δείτε τις δυνατότητες της πλατφόρμας</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Διαθέσιμη άμεση εκτέλεση</h4>
                <p>
                  Για να δρομολογήσετε αυτή την εντολή αμέσως και να αξιοποιήσετε το ενεργό επίπεδο τιμής, ενεργοποιήστε το ασφαλές <?= e(SITE_NAME) ?> τερματικό σας.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Δημιουργία ασφαλούς λογαριασμού
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">Dashboard BTC / USD</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                ΖΩΝΤΑΝΑ
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Σήμερα
            </div>

            <div class="mockup-chart mockup-chart-placeholder" id="mockupChart">
              <div class="chart-track" id="mockupChartTrack">
                <div class="chart-bar" style="height: 60%;"></div>
                <div class="chart-bar" style="height: 55%;"></div>
                <div class="chart-bar" style="height: 65%;"></div>
                <div class="chart-bar" style="height: 70%;"></div>
                <div class="chart-bar" style="height: 85%;"></div>
                <div class="chart-bar" style="height: 80%;"></div>
                <div class="chart-bar" style="height: 75%;"></div>
              </div>
            </div>

            <div class="mockup-actions">
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Πώληση</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Αγορά</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Δυνατότητες πλατφόρμας</div>
        <h2 class="section-title">Όλα όσα χρειάζεστε για να συναλλάσσεστε με αυτοπεποίθηση στο <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Ασφάλεια, ταχύτητα και νευρωνική ευφυΐα αγοράς σε μια καθαρή παρουσίαση</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Ασφάλεια τραπεζικού επιπέδου</h3>
          <p>Κρυπτογράφηση SSL, ασφαλής επεξεργασία δεδομένων και πλήρως προστατευμένη αρχιτεκτονική λογαριασμού.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>AI ανάλυση αγοράς</h3>
          <p>Υπολογισμοί machine learning σε πραγματικό χρόνο εστιασμένοι στην αποτύπωση σημαντικών μετατοπίσεων της αγοράς.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Feeds χαμηλής καθυστέρησης</h3>
          <p>Ευέλικτη υποδομή εστιασμένη στη γρήγορη επεξεργασία εντολών σε περιόδους υψηλής δραστηριότητας.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Assets σε πραγματικό χρόνο</div>
          <h2 class="section-title">Ενοποιημένο <?= e(SITE_NAME) ?> dashboard για παγκόσμιες μετρήσεις</h2>
          <p class="section-subtitle">
            Παρακολουθήστε κινήσεις assets σε πραγματικό χρόνο, παρακολουθήστε το momentum και χρησιμοποιήστε αυτοματοποιημένη AI ανάλυση για γρήγορη χαρτογράφηση μοτίβων.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Επιχειρησιακή αποδοτικότητα:</strong>
              Το παραδοσιακό trading σημαίνει χειροκίνητη παρακολούθηση εκατοντάδων δεικτών.
              <?= e(SITE_NAME) ?> οι αλγόριθμοι επεξεργάζονται χιλιάδες αλλαγές τιμών κάθε χιλιοστό του δευτερολέπτου,
              παράγοντας σαφή μαθηματικά μοντέλα ώστε να εντοπίζετε κινήσεις νωρίς.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Πρόσβαση στις αγορές</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Asset</span>
              <span style="text-align:right; padding-right:16px;">Τιμή</span>
              <span style="text-align:right;">Μεταβολή 24ω</span>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BTC</span>
                <span class="asset-fullname">Bitcoin</span>
              </div>
              <div class="asset-price" id="t-btc-p">$67,420.50</div>
              <div class="asset-change trend-up" id="t-btc-c">+0.15%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ETH</span>
                <span class="asset-fullname">Ethereum</span>
              </div>
              <div class="asset-price" id="t-eth-p">$3,450.25</div>
              <div class="asset-change trend-up" id="t-eth-c">+2.10%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">SOL</span>
                <span class="asset-fullname">Solana</span>
              </div>
              <div class="asset-price" id="t-sol-p">$184.80</div>
              <div class="asset-change trend-down" id="t-sol-c">-0.65%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BNB</span>
                <span class="asset-fullname">BNB Chain</span>
              </div>
              <div class="asset-price" id="t-bnb-p">$582.40</div>
              <div class="asset-change trend-up" id="t-bnb-c">+1.05%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">XRP</span>
                <span class="asset-fullname">Ripple</span>
              </div>
              <div class="asset-price" id="t-xrp-p">$0.5920</div>
              <div class="asset-change trend-down" id="t-xrp-c">-1.42%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ADA</span>
                <span class="asset-fullname">Cardano</span>
              </div>
              <div class="asset-price" id="t-ada-p">$0.4850</div>
              <div class="asset-change trend-up" id="t-ada-c">+0.88%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">DOT</span>
                <span class="asset-fullname">Polkadot</span>
              </div>
              <div class="asset-price" id="t-dot-p">$6.75</div>
              <div class="asset-change trend-down" id="t-dot-c">-0.12%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="onboarding">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Διαδικασία onboarding</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> κάνει την έναρξη χωρίς άγχος</h2>
        <p class="section-subtitle">Δεν έχετε εμπειρία με crypto; Ο αυτοματοποιημένος οδηγός μας σας καθοδηγεί σε κάθε βήμα.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Ασφαλής εγγραφή</h3>
            <p>Εισαγάγετε βασικά στοιχεία επικοινωνίας μέσω του ιδιαίτερα κρυπτογραφημένου συστήματος φορμών μας.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>Ρύθμιση με AI καθοδήγηση</h3>
            <p>Η πλατφόρμα παρουσιάζει επιλογές διεπαφής προσαρμοσμένες στις προτιμήσεις σας.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Ασφαλής χρηματοδότηση</h3>
            <p>Ενεργοποιήστε το εύρος συναλλαγών σας μέσω τυπικών, αξιόπιστων καναλιών πληρωμής.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Ανάπτυξη σημάτων</h3>
            <p>Ξεκινήστε την αλληλεπίδραση με παγκόσμιες αγορές χρησιμοποιώντας ζωντανά νευρωνικά data feeds.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="mobile-app">
    <div class="container">
      <div class="app-promo-grid">
        <div class="app-promo-visual">
          <div class="app-glow"></div>
          <?php
          $as_phone = true;
          require __DIR__ . '/includes/platform-image.php';
          ?>
        </div>

        <div>
          <div class="section-label">Κινητή πρόσβαση</div>
          <h2 class="section-title">Το χαρτοφυλάκιό σας, στην τσέπη σας</h2>
          <p class="section-subtitle">
            Ο πλήρης <?= e(SITE_NAME) ?> engine συμπιεσμένος σε μια γρήγορη κινητή εμπειρία με αίσθηση native εφαρμογής.
            Παρακολουθήστε assets, εκτελέστε συναλλαγές και ακολουθήστε AI σήματα από παντού.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Push ειδοποιήσεις για κρίσιμες κινήσεις τιμών
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Βιομετρική σύνδεση με κρυπτογραφημένη τοπική αποθήκευση
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Πλήρης σουίτα γραφημάτων βελτιστοποιημένη για αφή
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Αποκτήστε την εμπειρία εφαρμογής</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Ισορροπημένο πλαίσιο</div>
        <h2 class="section-title">Διαφανείς λειτουργικές παράμετροι</h2>
        <p class="section-subtitle">
          Πιστεύουμε στην απόλυτη ειλικρίνεια. Ακολουθεί τι ξεχωρίζει το σύστημά μας — και πού συνήθως βρίσκονται τα όρια του κλάδου.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Βασικά πλεονεκτήματα</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Minimalist dashboard ρυθμισμένο για ταχύτητα εκτέλεσης θεσμικού επιπέδου.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Νευρωνική αναλυτική 24/7 σε όλα τα assets.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Μηδενικά κρυφά περιθώρια συναλλαγών ή απροσδόκητα τέλη διαχείρισης.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Άμεση κρυπτογραφική αρχιτεκτονική λογαριασμού SSL.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Καθοδηγούμενη ενσωμάτωση που διαρκεί λεπτά, όχι ημέρες.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Άλλες πλατφόρμες</div>
          <h3>Συνηθισμένα όρια του κλάδου</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Υπερφορτωμένα dashboards με διαφημίσεις που επιβραδύνουν τις αποφάσεις.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Στατικές ημερήσιες αναφορές αντί για συνεχή ζωντανή ανάλυση.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Κρυφά spreads, τέλη ανάληψης και ασαφείς τιμές.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Κοινή παρωχημένη υποδομή με ανισόμορφη προστασία δεδομένων.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Αργή, γραφειοκρατική επαλήθευση που μπορεί να διαρκέσει ημέρες.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Η σύγκριση αντικατοπτρίζει τυπικά μοτίβα στο retail trading και είναι ενδεικτική· οι προσφορές ανταγωνιστών διαφέρουν.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Βασικές δυνατότητες πλατφόρμας με μια ματιά</h2>
        <p class="section-subtitle">Εξετάστε τις λειτουργικές παραμέτρους ενσωματωμένες στο πλαίσιο πρόσβασης του λογαριασμού σας.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Δυνατότητα</th>
              <th>Λειτουργική λεπτομέρεια</th>
              <th class="cap-table-center">Περιλαμβάνεται</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>AI πλαίσιο συναλλαγών</strong></td>
              <td>Αλγοριθμική επεξεργασία που παρέχει δυναμικούς μακροδομικούς υπολογισμούς.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Περιλαμβάνεται">✓</span></td>
            </tr>
            <tr>
              <td><strong>Συγκεντρωτικά feeds</strong></td>
              <td>Ενοποιημένα γραφήματα σε πραγματικό χρόνο για σύγχρονους παγκόσμιους δείκτες και tokens.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Περιλαμβάνεται">✓</span></td>
            </tr>
            <tr>
              <td><strong>Σταθερότητα cross-platform</strong></td>
              <td>Πλήρως responsive rendering σε κινητό, desktop και tablets.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Περιλαμβάνεται">✓</span></td>
            </tr>
            <tr>
              <td><strong>Κάλυψη πολλαπλών assets</strong></td>
              <td>Ενοποιημένη πρόσβαση σε crypto, forex και δείκτες μετοχών από ένα επίπεδο λογαριασμού.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Περιλαμβάνεται">✓</span></td>
            </tr>
            <tr>
              <td><strong>Αυτοματοποιημένες ειδοποιήσεις κινδύνου</strong></td>
              <td>Ρυθμιζόμενες ειδοποιήσεις που επισημαίνουν ασυνήθιστη μεταβλητότητα πριν επηρεάσουν θέσεις.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Περιλαμβάνεται">✓</span></td>
            </tr>
            <tr>
              <td><strong>Κρυπτογραφημένη θήκη δεδομένων</strong></td>
              <td>Προσωπικά και λογαριασμιακά δεδομένα απομονωμένα πίσω από πολυεπίπεδους κρυπτογραφικούς ελέγχους πρόσβασης.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Περιλαμβάνεται">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>24/7 ανθρώπινη υποστήριξη</strong></td>
              <td>Ζωντανοί τεχνικοί χειριστές έτοιμοι να απαντήσουν αμέσως σε ερωτήσεις ρύθμισης.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Περιλαμβάνεται">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Καταθέσεις</div>
      <h2 class="section-title">Χρηματοδοτήστε τον λογαριασμό σας με μεθόδους που ήδη γνωρίζετε</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Κάρτες, ηλεκτρονικά πορτοφόλια και τραπεζικές μεταφορές — όλα προστατεύονται με 256-bit κρυπτογράφηση SSL.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Αποδεκτές μέθοδοι κατάθεσης και χρηματοδότησης">
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="2" y="5" width="20" height="14" rx="2.5"/>
            <path d="M2 10h20"/>
          </svg>
          <span>Visa</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="9" cy="12" r="6"/>
            <circle cx="15" cy="12" r="6"/>
          </svg>
          <span>Mastercard</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M6 3h9a5 5 0 0 1 0 10H9l-1 8H4z"/>
          </svg>
          <span>PayPal</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2a5 5 0 0 0-5 5v3H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-2V7a5 5 0 0 0-5-5z"/>
          </svg>
          <span>Apple Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 8v8M8 12h8"/>
          </svg>
          <span>Google Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="3" y="10" width="18" height="9" rx="1"/>
            <path d="M3 10 12 4l9 6"/>
            <path d="M7 10v9M12 10v9M17 10v9"/>
          </svg>
          <span>Τραπεζική μεταφορά</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>Προστασία SSL</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Αξιόπιστη υποδομή</div>
        <h2 class="section-title">Χτισμένο με συνεργάτες επαγγελματικού επιπέδου</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Ανατροφοδότηση χρηστών</div>
        <h2 class="section-title">Τι λένε οι traders για <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Ειλικρινή ανατροφοδότηση από την παγκόσμια κοινότητά μας multi-market.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 από 5 αστέρια">★★★★★</div>
            <p class="review-text">
              Ως αρχάριος, το crypto με φόβιζε. <?= e(SITE_NAME) ?> έκανε το dashboard τόσο διαισθητικό που ένιωθα σίγουρος μέσα σε λίγα λεπτά. Η AI ανάλυση είναι κρυστάλλινη.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Επαληθευμένος retail operator · ΗΒ</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 από 5 αστέρια">★★★★★</div>
            <p class="review-text">
              Η καθαρή διεπαφή μου εξοικονομεί ώρες. Η AI που φιλτράρει τον θόρυβο της αγοράς στις κύριες τάσεις άλλαξε τον τρόπο που διαχειρίζομαι καθημερινές θέσεις.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Αναλυτής crypto assets · Καναδάς</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 από 5 αστέρια">★★★★★</div>
            <p class="review-text">
              Εκτέλεση χαμηλής καθυστέρησης συν έξυπνες ειδοποιήσεις μου επιτρέπουν να προσαρμόζω στόχους εν κινήσει χωρίς να ανοίγω πολλαπλά προγράμματα.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Ιδιωτικός διαχειριστής χαρτοφυλακίου · Γερμανία</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 από 5 αστέρια">★★★★★</div>
            <p class="review-text">
              Η υποστήριξη απάντησε σε δύο λεπτά ενώ ρύθμιζα την επαλήθευση. Εξαιρετικό πλαίσιο υπηρεσίας θεσμικού επιπέδου.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Algorithmic trader · Γαλλία</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="seo-content">
        <h2 style="font-size: 38px; margin-bottom: 28px; font-weight: 800;">
          <?= e(SITE_NAME) ?>: ενδυναμώνοντας traders με θεσμική AI αρχιτεκτονική
        </h2>

        <p class="seo-intro">
          Η σύγχρονη αλληλεπίδραση με assets απαιτεί απόλυτη σαφήνεια. Όταν τα πλαίσια δεδομένων είναι γεμάτα με promotional banners
          ή βαριά επίπεδα διεπαφής, η απόδοση του χρήστη μειώνεται. <?= e(SITE_NAME) ?> λύνει τη συστημική πολυπλοκότητα αναπτύσσοντας
          ένα κομψό, responsive βασικό περιβάλλον βελτιστοποιημένο για μακροπρόθεσμη στρατηγική εκτέλεση. Κάθε ενότητα της πλατφόρμας,
          από το onboarding έως τη ζωντανή εκτέλεση, βασίζεται στην ίδια αρχή: αφαίρεση του θορύβου ώστε τα υποκείμενα δεδομένα
          να μιλούν από μόνα τους — χωρίς να θυσιάζεται το βάθος που περιμένουν οι έμπειροι συμμετέχοντες.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Προηγμένα <span>crypto trading assets</span></h3>
            <p>
              Η ρευστότητα blockchain εξελίσσεται γρήγορα, καθιστώντας κρίσιμη την υποδομή χαμηλής καθυστέρησης.
              <?= e(SITE_NAME) ?> συνδέει custom nodes με κύριες ψηφιακές αγορές, παρέχοντας ζωντανούς βρόχους ανατροφοδότησης τιμών.
              Καθαρές οπτικές μετρήσεις μετατρέπουν χαοτικές multi-chain δομές σε οργανωμένα, αναγνώσιμα κανάλια δεδομένων.
            </p>
            <p>
              Πέρα από τα ακατέργαστα price feeds, η πλατφόρμα εξηγεί στο πλαίσιο τις μετατοπίσεις όγκου και το βάθος ρευστότητας ώστε τα ξαφνικά spikes να είναι
              ευκολότερα στην ερμηνεία — όχι απλώς αντιδραστικά σήματα. Αυτή η συνέπεια μετράει περισσότερο σε volatile sessions, όταν
              τα κατακερματισμένα εργαλεία επιβραδύνουν αποφάσεις ακριβώς όταν η σαφήνεια χρειάζεται περισσότερο.
            </p>
          </div>

          <div class="seo-block">
            <h3>Βαθιά <span>νευρωνική ανάλυση αγοράς</span></h3>
            <p>
              Αυτοματοποιημένοι αλγόριθμοι αναλύουν εισερχόμενα δεδομένα αγοράς για να υπολογίσουν δομικές μετατοπίσεις σε forex και διεθνή εμπορεύματα.
              <?= e(SITE_NAME) ?> αποστάζει σύνθετους υπολογισμούς σε σαφείς τάσεις δεδομένων που υποστηρίζουν ανεξάρτητη κρίση αντί να την αντικαθιστούν.
            </p>
            <p>
              Επειδή τα μοντέλα τρέχουν συνεχώς αντί για σταθερό χρονοδιάγραμμα, οι αλλαγές momentum εμφανίζονται καθώς συμβαίνουν
              αντί για καθυστερημένη σύνοψη. Το αποτέλεσμα είναι ένα ερευνητικό επίπεδο που υποστηρίζει ανεξάρτητη κρίση
              κρατώντας την τελική απόφαση στα χέρια του χρήστη.
            </p>
          </div>

          <div class="seo-block">
            <h3>Απρόσκοπτη <span>ρύθμιση λογαριασμού</span></h3>
            <p>
              Η συμμόρφωση δεν χρειάζεται να είναι περίπλοκη. Η δομημένη ροή εγγραφής μας προστατεύει τις ιδιωτικές ρυθμίσεις
              μέσω ασφαλών διαδικασιών επαλήθευσης σχεδιασμένων να διαρκούν λιγότερο από τρία λεπτά από την έναρξη έως την πρόσβαση στο τερματικό σας.
            </p>
            <p>
              Κάθε πεδίο στη διαδρομή εξηγεί γιατί ζητείται, ώστε οι αρχάριοι να μην χρειάζεται να μαντέψουν τον σκοπό ενός
              βήματος επαλήθευσης. Μόλις υποβληθεί, κρυπτογραφημένοι έλεγχοι ταυτότητας τρέχουν στο παρασκήνιο ενώ το υπόλοιπο
              dashboard παραμένει πλήρως περιηγήσιμο.
            </p>
          </div>

          <div class="seo-block">
            <h3>Έλεγχοι κινδύνου <span>θεσμικής ποιότητας</span></h3>
            <p>
              Μέγεθος θέσης, όρια έκθεσης και αυτόματοι δείκτες μεταβλητότητας συμπυκνώνουν ιστορικά επαγγελματικά εργαλεία trading desk
              σε απλούς διακόπτες — ώστε οι νεότεροι συμμετέχοντες να κληρονομούν την καθημερινή πειθαρχία από έμπειρους traders.
            </p>
            <p>
              Οι ειδοποιήσεις είναι ρυθμιζόμενες ανά asset, ώστε η προσοχή να στρέφεται μόνο σε αγορές που πραγματικά το αξίζουν.
              Αυτή η εστιασμένη προσέγγιση βοηθά στην πρόληψη κόπωσης από ειδοποιήσεις που συχνά οδηγεί τους ανθρώπους να αγνοούν notifications
              σε λιγότερο επιλεκτικές πλατφόρμες.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Κέντρο υποστήριξης</div>
        <h2 class="section-title">Συχνές ερωτήσεις</h2>
        <p class="section-subtitle">Άμεσες διαδικαστικές απαντήσεις σχετικά με εγγραφή και πρόσβαση στην πλατφόρμα.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Πώς ξεκινώ με <?= e(SITE_NAME) ?>;</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Συμπληρώστε τη φόρμα εγγραφής παραπάνω, ακολουθήστε το ασφαλές βήμα-προς-βήμα onboarding μας
              και ενεργοποιήστε τις ρυθμίσεις λογαριασμού μέσω του δομημένου συστήματος επεξεργασίας πληρωμών μας.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Χρειάζομαι προηγμένη εμπειρία crypto;</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Όχι. <?= e(SITE_NAME) ?> προσφέρει λειτουργία dashboard για αρχάριους, αυτοματοποιημένες αναλυτικές εξηγήσεις,
              και απλοποιημένους χώρους εργασίας για να βοηθούν νέους traders να πλοηγούνται με ασφάλεια.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Ποια είναι η ελάχιστη απαίτηση για συναλλαγές;</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Η τυπική βασική ενεργοποίηση είναι <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Λειτουργεί ως επιχειρησιακό trading κεφάλαιο και παραμένει υπό τον χειροκίνητο έλεγχό σας.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Υπάρχουν κρυφά λειτουργικά τέλη;</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Όχι. <?= e(SITE_NAME) ?> λειτουργεί με απόλυτη διαφάνεια τιμών.
              Δεν εφαρμόζουμε απροσδόκητα περιθώρια πρόσβασης στην πλατφόρμα ή κρυφούς υπολογισμούς ανάληψης.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Πώς λειτουργεί το στοιχείο AI ευφυΐας;</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Τα νευρωνικά συστήματα αξιολογούν βαθιά στατιστικούς δείκτες μεταβλητότητας σε πολλαπλά επίπεδα αγοράς,
              μετατρέποντας ακατέργαστη τηλεμετρία σε απλοποιημένες γραμμές τάσης για ευκολότερη αξιολόγηση.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Τα προσωπικά μου δεδομένα προστατεύονται πλήρως;</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Ναι. Κάθε pipeline λογαριασμού προστατεύεται με ασφαλή SSL προστασία και ισχυρά κρυπτογραφικά πρωτόκολλα
              για πλήρη απομόνωση ιδιωτικών εύρων δεδομένων.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="final-cta" style="background-color:#0F172A;">
    <div class="container">
      <div class="final-cta-grid">
        <div class="final-cta-content">
          <h2>Έτοιμοι να βιώσετε τη σαφήνεια του <?= e(SITE_NAME) ?>;</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Ενταχθείτε σε ένα σύγχρονο σύστημα βελτιστοποιημένο για γρήγορες λειτουργίες, προστασία δεδομένων και διαφανή πρόσβαση.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Δημιουργήστε λογαριασμό</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Δημιουργία δωρεάν λογαριασμού';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

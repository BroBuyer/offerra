<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ομάδα | ' . SITE_NAME . ' - Η ειδική μας ομάδα';
$page_description = 'Γνώρισε την ομάδα πίσω από το ' . SITE_NAME . '.';
$page_canonical = page_url('about.php');
$active_page = 'about';
$page_css = ['team-mob.min.css', 'team-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>Η ομάδα μας</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Φωτογραφία CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Chief Executive Officer (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Φωτογραφία εταίρου" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Εταίρος και Αντιπρόεδρος Ανάπτυξης Επιχειρήσεων</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Φωτογραφία CFO" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Εταίρος και Chief Financial Officer (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Φωτογραφία Managing Partner" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Managing Partner</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Φωτογραφία CTO" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Chief Technology Officer (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Φωτογραφία Προϊόν Director" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Προϊόν Director</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Υποστήριξη κρυπτονομισμάτων</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Εξυπηρέτηση και υποστήριξη πελατών</h3>
              <p>
                Πίσω από το <?= e(SITE_NAME) ?> βρίσκονται έμπειροι επαγγελματίες. Στόχος μας ήταν
                να δημιουργήσουμε ασφαλές περιβάλλον όπου οι χρήστες μπορούν να αγοράζουν με ασφάλεια κρυπτονομίσματα όπως
                Bitcoin. Η επαγγελματική εμπειρία της ομάδας μας επιβεβαιώνει ότι το <?= e(SITE_NAME) ?> είναι
                αξιόπιστο. Έχεις ερωτήσεις; Ο προσωπικός διαχειριστής λογαριασμού σου είναι στη διάθεσή σου.
              </p>
            </div>
            <div class="half right">
              <h3>Ώρες υποστήριξης</h3>
              <p>
                Σε περίπτωση προβλημάτων ή ερωτήσεων, η εξυπηρέτηση πελατών του <?= e(SITE_NAME) ?> είναι
                διαθέσιμη 24/7. Αν δεν μπορούμε να απαντήσουμε αμέσως, η ομάδα μας θα επικοινωνήσει μαζί σου το
                συντομότερο δυνατό.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Μας εμπιστεύονται</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Λογότυπο Crypto.com" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Λογότυπο Binance" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="Λογότυπο CoinDesk" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="Λογότυπο TradingView" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Λογότυπο Deloitte" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Λογότυπο Ledger" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Λογότυπο Decrypt" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Λογότυπο Nansen" />
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

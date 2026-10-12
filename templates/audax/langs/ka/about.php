<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'გუნდი | ' . SITE_NAME . ' - ჩვენი ექსპერტთა გუნდი';
$page_description = 'გაეცანი გუნდს პლატფორმის ' . SITE_NAME . '.';
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
            <h1>ჩვენი გუნდი</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="გენერალური დირექტორის ფოტო" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>გენერალური დირექტორი (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="პარტნიორის ფოტო" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>პარტნიორი და ბიზნესის განვითარების ვიცე-პრეზიდენტი</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="ფინანსური დირექტორის ფოტო" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>პარტნიორი და ფინანსური დირექტორი (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="მმართველი პარტნიორის ფოტო" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>მმართველი პარტნიორი</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="ტექნოლოგიური დირექტორის ფოტო" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>ტექნოლოგიური დირექტორი (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="პროდუქტის დირექტორის ფოტო" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>პროდუქტის დირექტორი</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>კრიპტომხარდაჭერა</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>მომხმარებელთა მომსახურება და მხარდაჭერა</h3>
              <p>
                <?= e(SITE_NAME) ?>-ის უკან გამოცდილი პროფესიონალები დგანან. ჩვენი მიზანი იყო
                შეგვექმნა უსაფრთხო გარემო, სადაც მომხმარებლები უსაფრთხოდ იყიდიან კრიპტოვალუტას, მაგალითად
                Bitcoin-ს. გუნდის პროფესიული გამოცდილება ადასტურებს, რომ <?= e(SITE_NAME) ?> არის
                სანდო. გაქვს კითხვები? შენი პირადი ანგარიშის მენეჯერი შენს განკარგულებაშია.
              </p>
            </div>
            <div class="half right">
              <h3>მხარდაჭერის საათები</h3>
              <p>
                პრობლემების ან კითხვების შემთხვევაში <?= e(SITE_NAME) ?>-ის მხარდაჭერა შენთვის
                ხელმისაწვდომია 24/7. თუ ვერ ვუპასუხებთ მაშინვე, გუნდი დაგიკავშირდება
                რაც შეიძლება მალე.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>გვენდობიან</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Crypto.com-ის ლოგო" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Binance-ის ლოგო" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="CoinDesk-ის ლოგო" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="TradingView-ის ლოგო" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Deloitte-ის ლოგო" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Ledger-ის ლოგო" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Decrypt-ის ლოგო" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Nansen-ის ლოგო" />
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

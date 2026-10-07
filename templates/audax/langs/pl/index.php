<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Inteligentne inwestowanie AI ' . geo_in();
$page_description = 'Automatyczny trading ' . geo_in() . '. Zacznij od ' . money_min() . ' z naszą technologią AI. Bezpiecznie, przejrzyście i prosto.';
$page_canonical = page_url();
$active_page = 'home';
$page_css = ['home-mob.min.css', 'home-desk.min.css', 'calculator.css', 'tinyslider.min.css'];
$page_js = ['tinyslider.min.js', 'index.min.js', 'calculator.js'];
$page_has_form = true;
// Keep the slider's span proportional to the offer's minimum instead of a fixed $10,000.
$calc_deposit_max = max(10000, (int) MIN_DEPOSIT * 40);
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero hero-v_2">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h1>Platforma <?= e(SITE_NAME) ?></h1>
              <p>
                Co wyróżnia <?= e(SITE_NAME) ?>? Tutaj możesz inwestować mądrzej
                <?= e(geo_in()) ?>. Nasza niezawodna platforma tradingowa oparta na AI pomaga podejmować świadome decyzje
                i pewnie zarządzać ryzykiem. Odkryj możliwości <?= e(SITE_NAME) ?> AI.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Oceniona na 4,7 gwiazdki przez ponad 2804 zadowolonych użytkowników</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Ocena 4,7 na 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Dołącz do <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Zarejestruj się';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Wypełniając dane i klikając „Zarejestruj się”
                    potwierdzasz, że akceptujesz
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">politykę prywatności</a> i
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">regulamin</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Metody płatności" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Oceniona na 4,7 gwiazdki przez ponad 2804 zadowolonych użytkowników</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Ocena 4,7 na 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Kalkulator zysku">
        <div
          class="calc-widget is-ltr"
          dir="ltr"
          id="calculator"
          data-calc-root
          data-currency="<?= e(currency_symbol()) ?>"
          data-locale="<?= e(site_locale()) ?>"
          style="
            --calc-accent: #c2410c;
            --calc-cta-bg: #ee6129;
            --calc-cta-text-color: #ffffff;
            --calc-track: #d9deef;
            --calc-radius: 18px;
            --calc-title-color: #1a1a1a;
            --calc-subtitle-color: #555;
            --calc-label-color: #555;
            --calc-value-color: #555;
            --calc-minmax-color: #555;
            --calc-result-bg: #ee6129;
            --calc-result-title-color: #e9e4e3;
            --calc-result-value-color: #ffffff;
            --calc-result-label-color: #e9e4e3;
          "
        >
          <h2 class="calc-widget__title">Oblicz możliwy zysk</h2>
          <p class="calc-widget__subtitle">
            Wybierz kwotę i okres, aby zobaczyć potencjał
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Wpłacasz:</label>
                <div class="calc-widget__value"><span data-calc="deposit_value"><?= e(money_min()) ?></span></div>
                <input
                  id="calc-deposit"
                  class="calc-widget__range"
                  type="range"
                  data-calc="deposit"
                  min="<?= (int) MIN_DEPOSIT ?>"
                  max="<?= (int) $calc_deposit_max ?>"
                  step="1"
                  value="<?= (int) MIN_DEPOSIT ?>"
                />
                <div class="calc-widget__minmax">
                  <span data-calc="deposit_min"><?= e(money_min()) ?></span>
                  <span data-calc="deposit_max"><?= e(currency_symbol() . number_format($calc_deposit_max)) ?></span>
                </div>
              </div>
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-days">Okres inwestycji:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>dni</span>
                </div>
                <input
                  id="calc-days"
                  class="calc-widget__range"
                  type="range"
                  data-calc="days"
                  min="1"
                  max="90"
                  step="1"
                  value="45"
                />
                <div class="calc-widget__minmax">
                  <span>Od 1 dnia</span>
                  <span>Do 3 miesięcy</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Możesz zarobić</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Rentowność</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Przychód</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Poproś o indywidualną wycenę
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Zamknij">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Zostaw dane kontaktowe, a nasz specjalista skontaktuje się z Tobą tak
              szybko, jak to możliwe.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Zarejestruj się';
  $form_phone_id = 'calc-phone';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
      <section class="cards-img">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Twój dostęp <?= e(geo_from()) ?> do wiodących na świecie platform kryptotradingu.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Ikona karty 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> wykorzystuje zaawansowaną sztuczną inteligencję i uczenie maszynowe, aby
                    znajdować nowe możliwości na rynkach finansowych.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Ikona karty 2" />
                </div>
                <div class="text">
                  <p>
                    Inwestorzy w kryptoaktywa <?= e(geo_in()) ?> zyskują dostęp do największych giełd w
                    sektorze i mogą handlować wiodącymi walutami, takimi jak Bitcoin i Ethereum, a także
                    szeroką gamą altcoinów i stablecoinów.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Nasi partnerzy</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Logo Crypto.com" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Logo Binance" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="Logo CoinDesk" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="Logo TradingView" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Logo Deloitte" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Logo Ledger" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Logo Decrypt" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Logo Nansen" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2>Dlaczego <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Ikona zalety 1" />
              </div>
              <div class="text">
                <h3>Bezpieczeństwo <?= e(geo_in()) ?></h3>
                <p>
                  Jako uznana platforma stawiamy bezpieczeństwo na pierwszym miejscu. Używamy SSL,
                  szyfrowania na poziomie bankowym i 2FA, aby <?= e(SITE_NAME) ?> była niezawodna, a Twoje dane
                  były chronione.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Ikona zalety 2" />
              </div>
              <div class="text">
                <h3>Potężne algorytmy AI</h3>
                <p>
                  Nasze elastyczne boty stosują zaawansowane strategie AI i realizują je samodzielnie. Ty
                  ustalasz podejście i zachowujesz kontrolę nad ryzykiem, rynkami i celami, aby
                  móc skupić się na całości.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Ikona zalety 3" />
              </div>
              <div class="text">
                <h3>Przejrzyste opłaty. Bez ukrytych kosztów.</h3>
                <p>
                  Wszystkie opłaty są przejrzyste, a inwestorzy <?= e(geo_in()) ?> nie płacą nic extra za korzystanie z
                  <?= e(SITE_NAME) ?>. Pieniądze wpłacone na trading są w całości Twoje i możesz ich używać
                  jak chcesz. Nic nie zatrzymujemy. Zacznij już od <?= e(money_min()) ?> i zachowaj pełną kontrolę
                  nad inwestycjami.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Ikona zalety 4" />
              </div>
              <div class="text">
                <h3>Intuicyjny interfejs</h3>
                <p>
                  Nasz czytelny pulpit łączy funkcjonalność, precyzję i
                  prostotę — dla początkujących i doświadczonych traderów.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Jak działa <?= e(SITE_NAME) ?>?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona listy 1" />
              <p>
                Nasze oprogramowanie jednocześnie monitoruje wiele platform tradingowych i
                wyszukuje różnice cen, które można wykorzystać.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona listy 2" />
              <p>
                <?= e(SITE_NAME) ?> kupuje tanio na jednym rynku i sprzedaje drożej na innym,
                wykorzystując arbitraż. Takie podejście może przynieść zysk poprzez
                kumulowanie zwrotów z niewielkich ruchów cen.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona listy 3" />
              <p>Zobacz, jak <?= e(SITE_NAME) ?> może poprawić Twój trading.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Dołącz do <?= e(SITE_NAME) ?> — i razem kształtujmy przyszłość finansów <?= e(geo_in()) ?>.
              </h2>
              <p>
                <?= e(SITE_NAME) ?> oferuje szeroki zestaw narzędzi do handlu kryptoaktywami <?= e(geo_in()) ?>. Platforma
                łączy największe międzynarodowe giełdy i daje dostęp do wielu
                kryptowalut — od liderów takich jak Bitcoin po inne, jak XRP. Dodatkowo możesz
                zarabiać na wahaniach cen.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Zarejestruj się';
  $form_phone_id = 'UhZgSohZrA';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>

      <section class="reviews">
        <div class="container">
          <div class="reviews-wrap">
            <div class="review">
              <h3>Piotr, 37, Warszawa</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Ocena 1"
                />
              </div>
              <p class="review-text">
                Zacząłem od <?= e(money_min()) ?>, a teraz wypłacam <?= e(currency_symbol() . '2,000') ?> miesięcznie.
              </p>
            </div>
            <div class="review">
              <h3>Anna, 42, Kraków</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Ocena 2"
                />
              </div>
              <p class="review-text">Prosta platforma: wszystko jest przejrzyste i konkretne.</p>
            </div>
            <div class="review">
              <h3>Marek, 45, Gdańsk</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Ocena 3"
                />
              </div>
              <p class="review-text">Najlepsze rozwiązanie na pasywny dochód.</p>
            </div>
            <div class="review">
              <h3>Kasia, 34, Wrocław</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Ocena 4"
                />
              </div>
              <p class="review-text">Stabilny zysk, nawet na urlopie.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Oferta krypto na <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Korzyść 1"
                />
                <h3>Klucz do kryptotradingu</h3>
                <p>
                  Nasze nowoczesne oprogramowanie jest fundamentem systemu tradingowego. Jest
                  zaprojektowane, by wykorzystywać niewielkie różnice cen między dużymi giełdami
                  kryptowalut.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben2.svg') ?>"
                  width="100"
                  height="100"
                  alt="Korzyść 2"
                />
                <h3>Globalny handel aktywami</h3>
                <p>
                  Ceny akcji i innych aktywów stale się zmieniają; <?= e(SITE_NAME) ?> daje
                  narzędzia, by szybko reagować na rynek i zwiększyć szansę na solidny
                  zwrot.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben3.svg') ?>"
                  width="100"
                  height="100"
                  alt="Korzyść 3"
                />
                <h3>Handel walutami</h3>
                <p>
                  Kursy walut stale się zmieniają i tworzą okazje. <?= e(SITE_NAME) ?>
                  pomaga wykorzystać nawet najmniejsze ruchy na rynku walutowym.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben4.svg') ?>"
                  width="100"
                  height="100"
                  alt="Korzyść 4"
                />
                <h3><?= e(SITE_NAME) ?> i Bitcoin</h3>
                <p>
                  Bitcoin nadal jest liderem rynku i najbardziej widoczną, finansowo stabilną
                  kryptowalutą. Systematycznie wychwytując i wykorzystując zmienność,
                  <?= e(SITE_NAME) ?> ułatwia osiągnięcie regularnego zwrotu.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>Informacje o platformie</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Prywatność</h3>
                  <p><?= e(SITE_NAME) ?> przestrzega obowiązujących przepisów o prywatności <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aktywa</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash i inne wiodące kryptowaluty.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Typ platformy</h3>
                  <p>
                    <?= e(SITE_NAME) ?> daje inwestorom <?= e(geo_in()) ?> szansę zarabiać na wahaniach cen
                    głównych kryptowalut, w tym altcoinów takich jak XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Kraje</h3>
                  <p>Nasza platforma jest dostępna globalnie, także <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Opcje wpłat</h3>
                  <p>Karty kredytowe, PayPal i przelew bankowy.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Koszty</h3>
                  <p>Dostęp do <?= e(SITE_NAME) ?> jest bezpłatny <?= e(geo_from()) ?>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta sec">
        <div class="container">
          <div class="content-wrap">
            <div class="half left bg-elem">
              <h2>Czy <?= e(SITE_NAME) ?> jest niezawodna?</h2>
              <p>
                <?= e(SITE_NAME) ?> współpracuje z brokerami najwyższej klasy, którzy są wyjątkowo niezawodni i
                doświadczeni. Stosujemy zabezpieczenia na poziomie bankowym, takie jak szyfrowanie TLS/SSL
                i uwierzytelnianie dwuskładnikowe (2FA), aby chronić aktywa i dane. Nasza struktura
                cenowa jest w pełni przejrzysta, bez ukrytych kosztów. Przestrzegamy
                obowiązujących przepisów.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Wykres niezawodności" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Nasze systemy sztucznej inteligencji i uczenia maszynowego dostarczają analizę rynku
                w czasie rzeczywistym i konkretne wskazówki tradingowe, by poprawić wyniki.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy trading</h3>
                  <p>
                    Najlepsi traderzy są tacy nie bez powodu. Z <?= e(SITE_NAME) ?> możesz śledzić
                    i kopiować ich transakcje — i korzystać z ich doświadczenia oraz strategii.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Ułamki akcji</h3>
                  <p>
                    Rozszerzając portfel, nawet przy ograniczonym kapitale zyskujesz dostęp do
                    jakościowych aktywów.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Materiały edukacyjne</h3>
                  <p>
                    Aby rozwijać umiejętności tradingowe, oferujemy materiały: poradniki,
                    webinary i przewodniki.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aplikacja mobilna</h3>
                  <p>Handluj kiedy chcesz, gdzie chcesz.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Wsparcie całodobowe</h3>
                  <p>Obsługa klienta jest dostępna 24 godziny na dobę, 7 dni w tygodniu.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Trading oparty na AI</h3>
                  <p>
                    Dzięki zaawansowanym algorytmom sztucznej inteligencji i uczenia maszynowego
                    <?= e(SITE_NAME) ?> nieustannie analizuje najnowsze dane rynkowe. Dzięki temu szybko wychwytywane są
                    okazje rynkowe o największym potencjale zwrotu.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Strategie do dostosowania</h3>
                  <p>
                    Gdy profil ryzyka i cele inwestycyjne są ustawione, możesz ich użyć, by
                    dopracować strategię na naszej platformie wielu klas aktywów.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Dostęp do różnych aktywów</h3>
                  <p>
                    Choć specjalizujemy się w kryptowalutach, wspieramy też handel
                    walutami, akcjami, innymi papierami wartościowymi i surowcami.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="register last">
        <div class="container">
          <div class="content-wrap bg">
            <div class="half left">
              <h2>Możesz handlować z domu, analizować rynki i śledzić pozycje.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Zarejestruj się';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Możesz handlować z domu, analizować rynki i śledzić pozycje.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Zarejestruj się teraz" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

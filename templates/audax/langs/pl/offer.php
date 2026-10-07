<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Promocja | ' . SITE_NAME . ' - Zacznij';
$page_description = 'Zacznij trading na ' . SITE_NAME . '. Zarejestruj się teraz za darmo.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$page_css = ['angebot-mob.min.css', 'angebot-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>
              Otwórz konto dziś w <?= e(SITE_NAME) ?>. Pulpit portfela jest
              gotowy.
            </h1>
            <p>
              W mniej niż 5 minut otworzysz darmowe konto, wpłacisz i zaczniesz
              trading. Zacznij dziś: to szansa, by zbudować solidny fundament finansowy.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Zarejestruj się</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Jak to działa</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Ikona otwarcia konta" />
                <h3>Otwarcie konta</h3>
                <p>
                  Konto możesz otworzyć w kilka sekund. Natychmiast zyskasz dostęp do
                  narzędzi tradingowych i czekających okazji.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Ikona wpłaty" />
                <h3>Wpłać środki</h3>
                <p>Wpłać środki, aby zacząć trading.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Ikona kupna i sprzedaży" />
                <h3>Kupno i sprzedaż</h3>
                <p>
                  Wzmocnij portfel z pewnością. Wejdź na rynek bez
                  wahania.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Nie przegap tego! Dołącz do tysięcy traderów, którzy osiągają wyniki.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Śledź portfel dzięki bieżącym aktualizacjom salda i zyskowi w czasie rzeczywistym.</h3>
            </div>
            <div class="half right">
              <p>
                Nie przegap szczegółów dzięki dogłębnej analizie <?= e(SITE_NAME) ?>
                wzorców tradingowych i stale aktualizowanym danym. Śledzisz wszystkie kluczowe wskaźniki
                — saldo, zysk i wahania cen. Tym narzędziami
                zwiększasz zwrot i podejmujesz przemyślane decyzje inwestycyjne. Przyszłość
                jest teraz: zacznij dziś.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Zacznij teraz</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

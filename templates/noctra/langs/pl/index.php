<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Platforma tradingowa AI');
$page_description = 'Handluj kryptowalutami i innymi rynkami na ' . SITE_NAME . ' — bezpieczne konto, przejrzyste ceny, pomocne narzędzia AI i szybka realizacja zleceń.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <div class="market-tape" aria-hidden="true">
    <div class="container market-tape-inner">
      <span class="tape-item"><strong>BTC</strong> <span class="tape-up" data-change="btc">—</span></span>
      <span class="tape-item"><strong>ETH</strong> <span class="tape-up" data-change="eth">—</span></span>
      <span class="tape-item"><strong>SOL</strong> <span class="tape-down" data-change="sol">—</span></span>
      <span class="tape-item"><strong>XRP</strong> <span class="tape-up" data-change="xrp">—</span></span>
      <span class="tape-item"><strong>Spready</strong> od 0,1</span>
      <span class="tape-item"><strong>Szybkość</strong> poniżej 40 ms</span>
      <span class="tape-item"><strong>Rynki</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> Platforma tradingowa wspierana AI</div>
        <h1>Handluj kryptowalutami i innymi rynkami.<br><span class="text-accent">Zacznij z <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          Prosta platforma do handlu krypto i wieloma aktywami — solidne bezpieczeństwo, przejrzyste ceny,
          pomocne analizy AI i interfejs, który łatwo śledzić.
        </p>
        <div class="hero-badges" aria-label="Mocne strony platformy">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Bezpieczne szyfrowane połączenie (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Wsparcie klienta dostępne 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Szybka realizacja zleceń
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Zacznij dziś — min. depozyt <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Utwórz konto</span>
          <span class="live-pill">Bezpieczne</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Zarejestruj się w mniej niż 2 minuty';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Rynki na żywo</p>
        <h2>Widzisz ceny w czasie rzeczywistym. Startujesz, gdy jesteś gotowy.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Śledź Bitcoina, Ethereum i inne główne pary w przejrzystym panelu —
          potem otwórz konto i złóż pierwszą transakcję.
        </p>
        <a href="sign.php" class="btn btn-primary">Otwórz dostęp do rynków</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Ceny rynków na żywo">
        <div class="exchange-panel-header">
          <span>Rynki</span>
          <span class="live-dot">Na żywo</span>
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

  <section class="platform-section" id="platform" aria-label="Podgląd platformy tradingowej">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Platforma</p>
        <h2>Przejrzyste wykresy.<br>Gotowa do handlu.</h2>
        <p class="lead">
          Ekran tradingowy przyjazny mobilnie z wykresami na żywo, zyskiem i stratą
          oraz prostymi zleceniami jednym dotknięciem — łatwy do zrozumienia od pierwszego logowania.
        </p>
        <ul class="platform-points">
          <li>Wykresy na żywo i ceny rynkowe</li>
          <li>Saldo portfela w jednym spojrzeniu</li>
          <li>Bezpieczny panel konta z 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Otwórz platformę</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Funkcje</p>
        <h2>Co dostajesz z <?= e(SITE_NAME) ?></h2>
        <p class="lead">Bezpieczeństwo, szybkość i czytelne narzędzia — bez przeładowanego ekranu.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Silne bezpieczeństwo konta</h3>
            <p>Szyfrowanie SSL, logowanie dwuskładnikowe i chronione przepływy środków dbają o pieniądze i dane.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>Analizy rynkowe AI</h3>
            <p>Pomocne sygnały o timingach i trendach — przydatne, gdy ceny zmieniają się szybko.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automatyzacja, gdy chcesz</h3>
            <p>Opcjonalne boty tradingowe mogą trzymać się Twoich reguł przez całą dobę — Ty zachowujesz kontrolę.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Wiele rynków w jednym miejscu</h3>
            <p>Krypto, forex, akcje i towary na jednej prostej platformie.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Szybka obsługa zleceń</h3>
            <p>Zaprojektowana pod niezawodne składanie zleceń nawet przy dużym ruchu na rynkach.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Czysty, prosty układ</h3>
            <p>Mniej szumu wizualnego — więcej miejsca na wykres i kolejne zlecenie.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Pierwsze kroki</p>
        <h2>Pięć kroków do pierwszej transakcji</h2>
        <p class="lead">Jasna ścieżka od rejestracji do rynków na żywo.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Otwórz konto</h3>
            <p>Prześlij dane i uzyskaj bezpieczny dostęp do platformy.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Potwierdź e-mail</h3>
            <p>Zweryfikuj adres, aby odblokować pełne środowisko tradingowe.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Dodaj środki</h3>
            <p>Wpłać od <?= MIN_DEPOSIT ?> <?= CURRENCY ?> kartą, przelewem lub e-portfelem.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Wybierz sposób handlu</h3>
            <p>Handluj ręcznie lub używaj narzędzi wspieranych AI z limitami, które ustawiasz.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Handluj na żywo</h3>
            <p>Korzystaj z wykresów, narzędzi i wsparcia 24/7, gdy potrzebujesz pomocy.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Zacznij teraz</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Płatności</p>
      <h2 style="margin-bottom: 0.75rem;">Wpłacaj metodami, które znasz</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Karty, portfele i przelewy — szyfrowane od końca do końca.</p>
      <?php
      $payment_context = 'doładowanie konta i wpłaty';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastruktura</p>
        <h2>Partnerzy infrastrukturalni</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Opinie</p>
        <h2>Co mówią traderzy</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Rejestracja była szybka, opłaty jasne, a wsparcie odpowiedziało. Czuję, że to platforma na dłużej.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Niezależny trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Spróbowałem tu krypto po skakaniu między aplikacjami — konfiguracja była jasna, a układ wykresu wreszcie ma sens.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Traderka krypto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Zlecenia przechodzą niezawodnie, warunki są prostym językiem, a zespół zna produkt. Solidna platforma.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Trader aktywów cyfrowych</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Jako początkujący potrzebowałem jasności, nie fajerwerków. Rejestracja, opłaty i pomoc w tarapatach — wystarczyło.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Inwestorka prywatna</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Zanim doładujesz konto</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak zacząć?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Utwórz konto, przejdź krótką weryfikację i wpłać od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              To odblokowuje wykresy, narzędzia i prowadzony onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak chronione są moje pieniądze i dane?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Stosujemy szyfrowanie SSL, uwierzytelnianie dwuskładnikowe i zaufanych operatorów płatności w ramach ścisłych polityk danych.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak długo trwają wypłaty?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Zgłaszaj wypłaty w każdej chwili z panelu. Większość metod rozlicza się w 1–3 dni robocze — opłaty widoczne z góry.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Czy potrzebuję doświadczenia w tradingu?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nie. Prowadzone kroki i narzędzia wspierane AI pomagają uczyć się we własnym tempie, ze wsparciem 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jakie rynki są dostępne?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kryptowaluty, forex, globalne akcje i towary — ręcznie lub automatycznie — w jednym interfejsie.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Przegląd</p>
        <h2>Platforma w skrócie</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Narzędzia AI</div>
          <div class="specs-value">Analiza rynku z insightami machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Wpłaty</div>
          <div class="specs-value">Karty, przelewy, PayPal, e-portfele</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Urządzenia</div>
          <div class="specs-value">Web, tablet, telefon — w pełni responsywne</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Jakość sygnałów AI</div>
          <div class="specs-value">Do 85% w obsługiwanych strategiach*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Rynki</div>
          <div class="specs-value">Krypto, forex, akcje, towary</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Szybka konfiguracja z prowadzoną weryfikacją</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Wsparcie</div>
          <div class="specs-value">Wsparcie 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontakt</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Ocena</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Scorecard <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> opinie · Na podstawie <strong>1 842</strong> ocen
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Gotowy na jaśniejszy sposób handlu?</h2>
        <p class="lead">Dołącz do traderów, którzy chcą rynków na żywo, przejrzystych opłat i łatwej w użyciu platformy.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Otwórz konto</span>
          <span class="live-pill">Za darmo</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Utwórz darmowe konto';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('AI i egzekucja w czasie rzeczywistym | Oficjalna strona');
$page_description = SITE_NAME . ' — technologia AI, która analizuje rynki i realizuje zlecenia w czasie rzeczywistym, z osobistym analitykiem u Twojego boku, aby zbudować nowe źródło dochodu.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Przejdź do treści</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Główna">
 <a href="#platform">Produkt</a>
 <a href="#how">Jak to działa.</a>
 <a href="#markets">Rynki w czasie rzeczywistym</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Otwórz swoje konto</a>
 <button class="nav-toggle" aria-label="Otwórz menu" aria-expanded="false" aria-controls="navLinks" type="button">
 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
 </button>
 </div>
 </div>
</header>

<main id="top">

<!-- HERO — left: copy + trust chips + CTA · right: lead form (same layout as the reference) -->
<section class="hero" id="hero" aria-labelledby="hero-title">
 <div class="shell hero-grid">
 <div>
 <span class="eyebrow">AI w czasie rzeczywistym + analiza człowieka</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — inwestuj teraz i obserwuj wzrost kapitału</h1>
 <p class="hero-sub">Silnik sztucznej inteligencji skanuje rynki i realizuje zlecenia w ułamkach sekundy, a Twój osobisty analityk dopasowuje każdą decyzję do Twojego profilu. Bez doświadczenia — prowadzimy Cię od początku do końca.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Regulowane</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Środki wydzielone</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9 600 klientów</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> ocena</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Chronione przez SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Wsparcie 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Szybka egzekucja</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Zacznij teraz — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Otwórz swoje konto</h2>
 <p class="sub">Zacznij w kilka minut.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Chcę zacząć';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Kluczowe wskaźniki">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Aktywni użytkownicy</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Wolumen obrotu</span></div>
 <div class="stat"><b>99,1%</b><span>Dostępność sygnałów</span></div>
 <div class="stat"><b>24/7</b><span>Wsparcie</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Wewnątrz <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Śledź konto w czasie rzeczywistym</h2>
 <p class="lede">Każde zlecenie wykonane przez Twojego analityka jest tu rejestrowane — wejścia, wyjścia i zweryfikowane wyniki dla każdej pary, na żywo.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Wykresy świecowe i głębokość rynku w czasie rzeczywistym, na każdym urządzeniu</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Składanie zleceń jednym dotknięciem z natychmiastowym potwierdzeniem</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Listy obserwacyjne i alerty cenowe, które Cię śledzą</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Zacznij teraz</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — mobilny trading z wykresami krypto w czasie rzeczywistym</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platforma</span><h2 id="features-title">Wszystko, czego potrzebujesz, na jednej szybkiej platformie.</h2><p class="lede">Bez pilnowania wykresów, bez timingu zleceń. Silnik <?= e(SITE_NAME) ?> monitoruje księgi zleceń w czasie rzeczywistym na giełdach krypto, API akcji globalnych i głównych parach forex — i składa zlecenia, gdy modele znajdą korzystną konfigurację.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Egzekucja w ułamkach sekundy na każdym podłączonym rynku</h3><p><?= e(SITE_NAME) ?> utrzymuje niskolatencyjne połączenia API z każdą wspieraną giełdą. Gdy model emituje sygnał, zlecenie jest routowane, wykonywane i rejestrowane na panelu przed następnym tikem.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Aktywna 24 godziny na dobę, we wszystkich sesjach</h3><p>Rynek krypto nigdy nie śpi — i silnik <?= e(SITE_NAME) ?> też nie. Skanuje pary w weekendy i święta, żebyś nie przegapił okna.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Raporty w wielu walutach</h3><p>Każde saldo, każde zlecenie, każda wypłata pojawia się w Twojej lokalnej walucie. Bez ukrytej konwersji.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Kapitał wydzielony</h3><p>Twoje środki pozostają na Twoim własnym koncie. <?= e(SITE_NAME) ?> nigdy nie sprawuje opieki — silnik ma tylko uprawnienie do routowania zleceń.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Bezpieczeństwo na poziomie bankowym</h3><p>Szyfrowanie TLS w całej platformie, domyślne uwierzytelnianie dwuskładnikowe i kwartalne audyty infrastruktury przez strony trzecie. Potwierdzenia transakcji zapisane na blockchainie.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Trzy klasy aktywów, jedna platforma</h3><p>Większość platform detalicznych ogranicza się do jednego rynku. <?= e(SITE_NAME) ?> obsługuje krypto, notowane akcje i główne pary forex w tym samym panelu.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Wstępnie ustawione limity ryzyka na każdej pozycji</h3><p>Stop-loss, maksymalny drawdown i limity alokacji kapitału są konfigurowane per klasa aktywów. Silnik automatycznie zamyka transakcję przekraczającą limit, a zdarzenie trafia do historii audytu.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Rynki w czasie rzeczywistym</span>
 <h2 id="markets-title">Handluj Bitcoinem, Ethereum i nie tylko</h2>
 <p class="lede">Ceny w czasie rzeczywistym, zaawansowane wskaźniki i profesjonalny obraz rynków, które Cię interesują.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Chcę dostęp do rynków</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Rynki</span><span class="mkt-live"><i></i>Na żywo</span></div>
 <div class="mkt-list">
 <div class="mkt-row" data-sym="BTC"><div class="mkt-c"><b>BTC</b><span>BTC/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 64.671</b><span class="chg down">-1,06%</span></div></div>
 <div class="mkt-row" data-sym="ETH"><div class="mkt-c"><b>ETH</b><span>ETH/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1.881</b><span class="chg down">-2,55%</span></div></div>
 <div class="mkt-row" data-sym="SOL"><div class="mkt-c"><b>SOL</b><span>SOL/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 76,62</b><span class="chg down">-1,72%</span></div></div>
 <div class="mkt-row" data-sym="XRP"><div class="mkt-c"><b>XRP</b><span>XRP/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1,11</b><span class="chg down">-0,97%</span></div></div>
 </div>
 </div>
 </div>
</section>

<!-- HOW IT WORKS -->
<section class="sec" id="how" aria-labelledby="how-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Jak to działa</span><h2 id="how-title">Jak to działa.</h2><p class="lede">Najnowocześniejsza technologia i prawdziwy ludzki analityk, pracujący razem w czasie rzeczywistym, aby pomóc zbudować nowe źródło dochodu — z wsparciem na każdym etapie.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Utwórz konto</h3><p>Zarejestruj się w kilka minut, używając tylko e-maila.</p></div>
 <div class="step"><div class="n">2</div><h3>Potwierdź e-mail</h3><p>Zweryfikuj adres, aby chronić konto.</p></div>
 <div class="step"><div class="n">3</div><h3>Wpłać na konto</h3><p>Dodaj środki od <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> po swojemu.</p></div>
 <div class="step"><div class="n">4</div><h3>Ustal strategię</h3><p>Wybierz cele; analityk dopasuje plan.</p></div>
 <div class="step"><div class="n">5</div><h3>Zacznij handlować</h3><p>Podążaj za prowadzonymi sygnałami i rozwijaj się we własnym tempie.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Wpłaty</span><h2 id="payment-title">Wpłacaj metodami, które już znasz</h2><p class="lede">Wpłacaj i wypłacaj przez bezpieczne, znane kanały — bez ukrytych opłat.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Przelew bankowy</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Co mówią członkowie</span><h2 id="reviews-title">Co mówią nasi inwestorzy</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>„Mój analityk wszystko jasno wyjaśnił. Ustaliłem cele raz, a teraz dokładnie widzę, jak rośnie mój kapitał — bez stresu przy każdym ruchu.”</p><div class="who"><div class="ini">A</div><div><b>Anna Kowalska</b><span>Warszawa</span></div></div></div>
 <div class="card"><p>„Nigdy wcześniej nie inwestowałem — analityk zajął się strategią i wyjaśnił każdy krok. Bez pustych obietnic, bez presji, a wypłaty przychodzą jak oczekiwano.”</p><div class="who"><div class="ini">T</div><div><b>Tomasz Nowak</b><span>Kraków</span></div></div></div>
 <div class="card"><p>„Zacząłem od małej kwoty na test. Przejrzystość i wsparcie dały mi pewność, by budować dalej.”</p><div class="who"><div class="ini">K</div><div><b>Katarzyna Wiśniewska</b><span>Gdańsk</span></div></div></div>
 <div class="card"><p>„Analizy trafiają do mnie — zatwierdzam lub koryguję w minutach. Idealnie pasuje do rutyny, bez przeszkadzania w pracy.”</p><div class="who"><div class="ini">Ł</div><div><b>Łukasz Wójcik</b><span>Wrocław</span></div></div></div>
 <div class="card"><p>„Przekonała mnie przejrzystość: każda decyzja jest wyjaśniona, a rozumowanie widzę, zanim cokolwiek się wydarzy.”</p><div class="who"><div class="ini">M</div><div><b>Magdalena Kamińska</b><span>Poznań</span></div></div></div>
 <div class="card"><p>„Wsparcie jest prawdziwe i zawsze dostępne. Pierwsza analiza była praktyczna, a platforma od wtedy jest stabilna i przewidywalna.”</p><div class="who"><div class="ini">P</div><div><b>Piotr Lewandowski</b><span>Łódź</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platforma</span><h2 id="capabilities-title">Główne funkcje w skrócie</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">Silnik AI</div>
 <div class="spec-v">Zaawansowana analiza rynku z uczeniem maszynowym</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Metody wpłat</div>
 <div class="spec-v">Karta kredytowa, przelew bankowy, PayPal, portfele cyfrowe</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Dostęp wieloplatformowy</div>
 <div class="spec-v">Web, tablet i telefon — w pełni responsywny</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Dokładność sygnałów</div>
 <div class="spec-v">Do 85% w obsługiwanych strategiach AI</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Rynki</div>
 <div class="spec-v">Kryptowaluty, forex, akcje i towary</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Rejestracja</div>
 <div class="spec-v">Szybkie otwarcie konta z prowadzoną weryfikacją</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Wsparcie</div>
 <div class="spec-v">Profesjonalna obsługa przez całą dobę — <a href="<?= page_url('contacts.php') ?>">Wyślij wiadomość</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Pytania</span><h2 id="faq-title">Często zadawane pytania.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Jaka jest minimalna wpłata?</summary><p>Otwórz i zasil konto od minimalnej wpłaty. Możesz dodawać saldo w miarę postępu planu.</p></details>
 <details><summary>Jak działają wypłaty?</summary><p>Złóż wniosek o wypłatę w dowolnym momencie z panelu. Środki wracają na wybraną metodę płatności, z uwzględnieniem standardowych czasów przetwarzania.</p></details>
 <details><summary>Czy moje pieniądze są bezpieczne?</summary><p>Konta chronione są bezpieczeństwem klasy przemysłowej i rygorystyczną weryfikacją. Jak przy każdej inwestycji, kapitał jest zagrożony, a wartości mogą spadać lub rosnąć.</p></details>
 <details><summary>Jak szybko mogę zacząć?</summary><p>Większość członków kończy rejestrację w kilka minut. Po potwierdzeniu pierwszej wpłaty plan aktywuje się od razu.</p></details>
 <details><summary>Czy są ukryte opłaty?</summary><p>Koszty są pokazywane przejrzyście przed zobowiązaniem. Zawsze wiesz dokładnie, co dotyczy Twojego planu — bez niespodzianek.</p></details>
 <details><summary>Jaki jest minimalny wiek rejestracji?</summary><p>Musisz mieć co najmniej 18 lat, aby otworzyć konto i inwestować. Może być wymagana weryfikacja wieku i tożsamości.</p></details>
 <details><summary>Jakie metody płatności są obsługiwane?</summary><p>Obsługiwane są popularne metody, takie jak karty debetowe i kredytowe, przelew bankowy, wybrane e-portfele i kryptowaluty. Dokładne opcje pojawiają się na etapie wpłaty.</p></details>
 <details><summary>Kiedy dostępna jest obsługa klienta?</summary><p>Nasz zespół wsparcia pracuje od poniedziałku do piątku, 9:00–18:00, i zobowiązuje się odpowiedzieć na każde zapytanie w ciągu jednego dnia roboczego.</p></details>
 <details><summary>Jak rozliczane są podatki?</summary><p>Podatki od zysków inwestycyjnych zależą od przepisów Twojego kraju i są Twoją odpowiedzialnością. Zalecamy prowadzenie ewidencji i konsultację z wykwalifikowanym doradcą podatkowym.</p></details>
 <details><summary>Czym jest KYC i dlaczego jest obowiązkowy?</summary><p>KYC (Know Your Customer) to standardowa weryfikacja tożsamości. Chroni konta i jest częścią otwarcia każdego konta inwestycyjnego.</p></details>
 <details><summary>Czy potrzebuję doświadczenia?</summary><p>Nie. Każdy członek otrzymuje osobistego analityka finansowego, który prowadzi na każdym kroku — wcześniejsza wiedza o rynkach nie jest wymagana.</p></details>
 <details><summary>Kto zarządza moimi inwestycjami?</summary><p>Dedykowany analityk finansowy, wspierany narzędziami AI, pracujący wokół Twoich celów i poziomu ryzyka. Analityk łączy ekspercką wiedzę z technologią — decyzje pozostają ludzkie.</p></details>
 <details><summary>Czy platforma jest regulowana?</summary><p>Tak — spełnia krajowe standardy finansowe i cyberbezpieczeństwa, z ochroną konta i rygorystyczną weryfikacją.</p></details>
 <details><summary>Czy mogę później dodać środki?</summary><p>Tak. Możesz zasilać konto w dowolnym momencie i dostosowywać plan z analitykiem, gdy cele się zmieniają.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">GODNE ZAUFANIA</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Opinie</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> opinii · Na podstawie <b style="color:var(--text,#fff)">2.334</b> ocen</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Zacznij teraz</span>
 <h2 id="signup-title" class="cta-h">Otwórz swoje konto.</h2>
 <p class="lede">Powiedz nam, jak się z Tobą skontaktować — specjalista pomoże zrobić pierwszy krok.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Otwórz swoje konto</h3>
 <p class="sub">Zacznij w kilka minut.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Chcę zacząć';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

</main>

<!-- FOOTER -->
<footer class="foot">
 <div class="shell">
 <div class="foot-top">
 <div>
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <p>Szybkość AI, decyzja człowieka. Kapitał jest zagrożony — inwestuj odpowiedzialnie.</p>
 </div>
 <div><h4>Produkt</h4><div class="foot-links">
 <a href="#platform">Śledź konto w czasie rzeczywistym</a><a href="#markets">Rynki w czasie rzeczywistym</a><a href="#how">Jak to działa.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Firma</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">O nas</a><a href="<?= page_url('offer.php') ?>">Cennik</a><a href="<?= page_url('contacts.php') ?>">Kontakt</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Prywatność</a><a href="<?= page_url('conditions.php') ?>">Warunki</a><a href="<?= page_url('conditions.php') ?>">Ujawnienie ryzyka</a><a href="<?= page_url('contacts.php') ?>">Zgłoś nadużycie</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Wszelkie prawa zastrzeżone. Inwestowanie wiąże się z ryzykiem, w tym możliwą utratą kapitału. · Inwestowanie wiąże się z ryzykiem, w tym możliwą utratą części lub całości zainwestowanego kapitału. Wartość inwestycji może rosnąć lub spadać, a Ty możesz odzyskać mniej, niż początkowo wpłaciłeś. Nie inwestuj pieniędzy, których nie możesz stracić.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('pl-PL',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' zł';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Proszę czekać\u2026";
 var MSG_ERR = "Nie uda\u0142o si\u0119 teraz wys\u0142a\u0107 Twoich danych. Spr\u00f3buj ponownie.";
 var THANKS = "/thanks/";
 function rand(){ return (Math.random().toString(36).substring(2,12)+Math.random().toString(36).substring(2,6)).replace(/[^a-z0-9]/g,'').substring(0,16); }
 // one-time spinner CSS for the submit button's processing state
 if (!document.getElementById('ldf-spin-css')) {
 var _st = document.createElement('style'); _st.id = 'ldf-spin-css';
 _st.textContent = '.ldf-spin{display:inline-block;width:1em;height:1em;margin-right:.5em;vertical-align:-.15em;border:2px solid currentColor;border-right-color:transparent;border-radius:50%;animation:ldfspin .6s linear infinite}@keyframes ldfspin{to{transform:rotate(360deg)}}';
 (document.head || document.documentElement).appendChild(_st);
 }
 var p = new URLSearchParams(location.search);
 // our click subid → hidden field → send.php click_id → iRev aff_sub3. Accept the
 // common tracker param names so whatever the traffic source appends is captured.
 var subid = p.get('subid') || p.get('sub_id') || p.get('clickid') || p.get('click_id')
 || p.get('cid') || p.get('utm_content')
 || (window.KTracking && KTracking.getSubId ? KTracking.getSubId() : '') || '';
 document.querySelectorAll('form[data-leadform]').forEach(function (form) {
 var tok = form.querySelector('.js-token');
 var tsf = form.querySelector('.js-ts');
 var loadTime = Date.now();
 if (tsf) tsf.value = String(loadTime);
 // Anti-bot: the js_token is written ONLY after a genuine human interaction with
 // the form (focus/key/pointer). A script that POSTs the form without ever
 // touching it never gets a token, and the edge worker rejects tokenless posts.
 var armed = false;
 function arm(){ if (armed) return; armed = true; if (tok && !tok.value) tok.value = rand(); }
 ['focusin','keydown','pointerdown','touchstart'].forEach(function (ev) {
 form.addEventListener(ev, arm, { once: true, passive: true });
 });
 var dom = form.querySelector('.js-domain'); if (dom && !dom.value) dom.value = location.hostname;
 var sub = form.querySelector('.js-subid'); if (sub && subid) sub.value = subid; // only if a URL subid; else t.js fills it
 var phone = form.querySelector('input[type=tel]');
 var sending = false;
 function lock(b){ if(!b) return; b.dataset.lbl = b.dataset.lbl || b.innerHTML; b.disabled = true; b.setAttribute('aria-busy','1'); b.style.opacity='.75'; b.style.cursor='progress'; b.innerHTML='<span class="ldf-spin" aria-hidden="true"></span>'+MSG_WAIT; }
 function unlock(b){ if(!b) return; b.disabled=false; b.removeAttribute('aria-busy'); b.style.opacity=''; b.style.cursor=''; if(b.dataset.lbl) b.innerHTML=b.dataset.lbl; }
 function err(msg){ var el=form.querySelector('[data-leaderr]'); if(!el){ el=document.createElement('p'); el.setAttribute('data-leaderr','1'); el.style.cssText='margin-top:.6rem;font-size:.85rem;line-height:1.35;color:#f87171;text-align:center'; form.appendChild(el);} el.textContent=msg; }
 form.addEventListener('submit', async function (e) {
 e.preventDefault();
 if (sending) return;
 sending = true;
 // stamp the client-measured dwell (ms since load) → the worker rejects
 // instant/near-instant submits that no human could produce.
 if (tsf) tsf.value = String(Date.now() - loadTime);
 var iti = (phone && window.intlTelInputGlobals) ? window.intlTelInputGlobals.getInstance(phone) : null;
 if (iti) {
 // separateDialCode expects a NATIONAL number in the field. If the user ALSO typed the
 // country code (e.g. 351961654221 with the +351 selector) it would double to
 // +351351…; when that makes the number invalid, re-parse the raw digits as a full
 // international number so the country code isn't added twice.
 try {
 var dc = (iti.getSelectedCountryData() || {}).dialCode || '';
 var raw = (phone.value || '').replace(/[^\d+]/g, '');
 if (raw && raw.charAt(0) !== '+' && dc && raw.indexOf(dc) === 0 && !iti.isValidNumber()) {
 iti.setNumber('+' + raw);
 }
 } catch (e3) {}
 try { phone.value = iti.getNumber() || phone.value; } catch (e4) {}
 var cc = form.querySelector('[name=country]'), d = iti.getSelectedCountryData();
 if (cc && d && d.iso2) cc.value = d.iso2.toUpperCase();
 }
 var btn = form.querySelector('button[type=submit]'); lock(btn);
 var prev = form.querySelector('[data-leaderr]'); if (prev) prev.textContent = '';
 try {
 var r = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } });
 var data = await r.json().catch(function () { return {}; });
 var dest = data && data.redirect_url;
 if (dest === '/thanks/' || dest === '/thanks') dest = THANKS;
 if (dest) { location.href = dest; return; }
 if (data && data.success) { location.href = THANKS; return; }
 sending = false; unlock(btn);
 err((data && data.error) || MSG_ERR);
 } catch (e2) {
 sending = false; unlock(btn);
 err(MSG_ERR);
 }
 });
 });
})();
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" media="print" onload="this.media='all'"><noscript></noscript>
<style>
.iti{width:100%}.iti input,.iti input[type=tel]{width:100%}
/* The dropdown has a white background but inherits the design's body text colour
 (light, for dark themes) → country names render white-on-white (invisible). Force
 a readable light dropdown that the design's CSS can't override. !important beats
 the inherited colour regardless of the design. */
.iti__country-list{background:#fff!important;color:#1b1b1b!important;border:1px solid #e5e7eb;
 box-shadow:0 8px 28px rgba(0,0,0,.18);max-height:230px}
.iti__country,.iti__country-name{color:#1b1b1b!important}
.iti__dial-code{color:#6b7280!important}
.iti__country.iti__highlight,.iti__country:hover{background:#eef2ff!important}
.iti__flag-box{margin-right:8px!important}
</style>
<script>
(function () {
 var phones = document.querySelectorAll('form[data-leadform] input[type=tel]');
 if (!phones.length) return;
 var loading = false, loaded = false;
 function init() {
 phones.forEach(function (input) {
 if (input.dataset.itiReady) return;
 input.dataset.itiReady = '1';
 var form = input.closest('form');
 var hid = form ? form.querySelector('[name=phone_country]') : null;
 window.intlTelInput(input, {
 initialCountry: (hid && hid.value) || 'pl',
 separateDialCode: true,
 utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js'
 });
 });
 }
 // Lazy: pull the widget (incl. the 58 KB utils.js) only when the visitor first
 // touches a phone field — keeps it off the critical path (FCP/LCP) while still
 // ready before they can finish typing a number.
 function load() {
 if (loaded) { init(); return; }
 if (window.intlTelInput) { loaded = true; init(); return; }
 if (loading) return; loading = true;
 var s = document.createElement('script');
 s.src = 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js';
 s.onload = function () { loaded = true; init(); };
 document.head.appendChild(s);
 }
 // Init immediately so the flag + dial code show on load (this script is at the end
 // of <body>, so it never blocks first paint). The heavy utils.js is still fetched
 // asynchronously by the widget AFTER init, keeping it off the critical render path.
 load();
 phones.forEach(function (input) {
 input.addEventListener('focus', load);
 input.addEventListener('touchstart', load, { passive: true });
 });
})();
</script>
<script>/*anim-failsafe*/
(function () {
 var SEL = '[data-anim],[data-animate],[data-aos],[data-reveal],[data-scroll],[class*="reveal"],[class*="fade"],[class*="aos"]';
 function show(el){
 // remove the hooks the design's opacity:0 rule targets, then force-show as backup
 ['data-anim','data-animate','data-aos','data-reveal','data-scroll'].forEach(function(a){ el.removeAttribute(a); });
 el.classList.remove('reveal','fade','fade-in','fade-up','aos-init','will-reveal','animate');
 el.style.setProperty('opacity','1','important'); el.style.setProperty('transform','none','important');
 el.style.setProperty('visibility','visible','important'); el.style.setProperty('filter','none','important');
 }
 function isHidden(el){ return el.offsetHeight > 0 && parseFloat(getComputedStyle(el).opacity) < 0.08; }
 // reveal a block only when it actually reaches the viewport, and only if its own
 // reveal is STILL missing ~1.2s after it got there (i.e. genuinely broken)
 if ('IntersectionObserver' in window) {
 var io = new IntersectionObserver(function(es){ es.forEach(function(e){
 if (!e.isIntersecting) return;
 var el = e.target; io.unobserve(el);
 setTimeout(function(){ if (isHidden(el)) show(el); }, 1200);
 }); }, {rootMargin: '0px 0px -5% 0px'});
 setTimeout(function(){ [].forEach.call(document.querySelectorAll(SEL), function(el){ if (isHidden(el)) io.observe(el); }); }, 1500);
 }
 // counter fallback: a plain number beats a stat frozen at "0" for a visitor who
 // never scrolls the count-up into view (no-op once the real count-up has run)
 setTimeout(function(){ document.querySelectorAll('[data-count]').forEach(function(el){
 var t = el.getAttribute('data-count'); if (t && !/[1-9]/.test(el.textContent||'')) el.textContent = t; }); }, 8000);
})();
</script>
<div id="ck-consent" role="dialog" aria-label="cookies" hidden style="position:fixed;left:16px;right:16px;bottom:16px;z-index:2147483000;max-width:660px;margin:0 auto;background:var(--surface,var(--panel,#12151c));color:var(--text,var(--fg,#e7e9ee));border:1px solid rgba(127,127,127,.28);border-radius:14px;padding:13px 16px;box-shadow:0 12px 40px rgba(0,0,0,.35);display:none;gap:14px;align-items:center;flex-wrap:wrap;font-size:14px;line-height:1.45">
<span style="flex:1;min-width:200px">Używamy plików cookie, aby poprawić Twoje doświadczenie.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Rozumiem</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>

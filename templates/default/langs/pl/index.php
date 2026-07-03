<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Platforma tradingowa z AI');
$page_description = 'Handluj kryptowalutami, forexem i rynkami globalnymi z ' . SITE_NAME . '. Analiza w czasie rzeczywistym, sygnały wspierane przez AI i platforma zaprojektowana pod szybkość i przejrzystość.';
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
        <p class="eyebrow">Platforma tradingowa z AI</p>
        <h1>Handluj mądrzej.<br><span class="text-accent">Reaguj szybciej.</span></h1>
        <p class="lead">
          Nowy standard handlu krypto i wielorynkowego. Zaawansowane zabezpieczenia, przejrzyste opłaty,
          analizy wspierane przez AI i interfejs, który Cię nie spowalnia.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Zabezpieczenie SSL
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Wsparcie 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Szybka realizacja
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Rozpocznij handel — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Otwórz konto w 2 minuty';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Statystyki platformy">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Dostępne waluty</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Zweryfikowani użytkownicy</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Wolumen obrotu</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Obsługiwane kraje</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Przegląd platformy tradingowej">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Platforma tradingowa</p>
        <h2>Profesjonalne wykresy.<br>Gotowa na mobile.</h2>
        <p class="lead">
          Przejrzysty interfejs inspirowany nowoczesną giełdą — dane BTC/USDT w czasie rzeczywistym, zarządzanie portfelem
          i handel jednym kliknięciem. Zaprojektowany tak, by od pierwszego logowania dawał Ci pewność.
        </p>
        <ul class="platform-points">
          <li>Wykresy świecowe w czasie rzeczywistym</li>
          <li>Portfel i P/L na pierwszy rzut oka</li>
          <li>Bezpieczny panel konta</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Wypróbuj platformę</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Dlaczego <?= e(SITE_NAME) ?></p>
        <h2>Wszystko, czego potrzebujesz do pewnego handlu</h2>
        <p class="lead">Bezpieczeństwo, szybkość i inteligencja — w przejrzystej platformie zaprojektowanej dla nowoczesnych traderów.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Bezpieczeństwo na poziomie bankowym</h3>
          <p>Szyfrowanie SSL, 2FA i bezpieczne zarządzanie środkami chronią Twoje dane i kapitał na każdym kroku.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Sygnały rynkowe AI</h3>
          <p>Precyzyjne analizy w czasie rzeczywistym pomagają wykrywać okazje i podejmować szybsze, świadome decyzje.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Handel automatyczny</h3>
          <p>Boty wspierane przez AI pracują 24/7, skutecznie realizując strategie, a Ty zachowujesz pełną kontrolę.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Dostęp do wielu rynków</h3>
          <p>Handluj kryptowalutami, forexem, akcjami i towarami w jednym, zunifikowanym środowisku.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Niska latencja realizacji</h3>
          <p>Zoptymalizowana infrastruktura zapewnia stabilne wykonywanie zleceń nawet przy wysokiej zmienności rynku.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Przejrzysty interfejs</h3>
          <p>Minimalistyczny design ogranicza rozpraszacze, abyś mógł skupić się na strategii, a nie na nawigacji.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Rynki w czasie rzeczywistym</p>
        <h2>Handluj Bitcoinem, Ethereum i innymi aktywami</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Ceny na żywo, zaawansowane wskaźniki i profesjonalny przegląd rynków, które Cię interesują.
        </p>
        <a href="sign.php" class="btn btn-primary">Wejdź na rynki</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Ceny rynkowe w czasie rzeczywistym">
        <div class="exchange-panel-header">
          <span>Rynki</span>
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
        <p class="eyebrow">Jak zacząć</p>
        <h2>Od rejestracji do pierwszej transakcji w kilka minut</h2>
        <p class="lead">Jasny proces bez zbędnej złożoności i niepewności.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Utwórz konto</h3>
          <p>Zarejestruj się podając swoje dane i uzyskaj natychmiastowy, bezpieczny dostęp do platformy.</p>
        </article>
        <article class="step-card">
          <h3>Zweryfikuj e-mail</h3>
          <p>Potwierdź adres i odblokuj pełne środowisko tradingowe.</p>
        </article>
        <article class="step-card">
          <h3>Wpłać środki</h3>
          <p>Wpłać minimum <?= MIN_DEPOSIT ?> <?= CURRENCY ?> przelewem bankowym, kartą lub portfelem elektronicznym.</p>
        </article>
        <article class="step-card">
          <h3>Ustaw strategię</h3>
          <p>Wybierz poziom ryzyka i preferencje — manualnie lub z automatyzacją wspieraną przez AI.</p>
        </article>
        <article class="step-card">
          <h3>Rozpocznij handel</h3>
          <p>Wejdź na rynek z wykresami na żywo, narzędziami i wsparciem zawsze, gdy go potrzebujesz.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Otwórz konto teraz</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Wpłaty</p>
      <h2 style="margin-bottom: 0.75rem;">Wpłacaj metodami, którym już ufasz</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Karty, portfele elektroniczne i przelewy bankowe — chronione szyfrowaniem SSL.</p>
      <?php
      $payment_context = 'wpłaty i finansowanie konta';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Zaufana infrastruktura</p>
        <h2>Zbudowane z czołowymi partnerami branżowymi</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Opinie</p>
        <h2>Co mówią traderzy</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Rejestracja zajęła kilka minut, opłaty są przejrzyste, a wsparcie naprawdę odpowiada. Płynne i niezawodne doświadczenie — platforma, z której chętnie korzystam dalej.</p>
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
          <p class="review-text">W końcu spróbowałam handlu krypto — bez żadnych żalów. Szybka konfiguracja i wszystko jasno wyjaśnione. Świetny wybór, zwłaszcza na start.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Entuzjastka krypto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabilnie i niezawodnie. Otwarcie konta jest proste, warunki jasne, a zespół wie, co robi. Zaskakująco komfortowe doświadczenie tradingowe.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Operator aktywów cyfrowych</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Handel już nie wydaje się tak skomplikowany. Prosta rejestracja, jasne opłaty i wsparcie, gdy go potrzebuję. Dla początkującego to ogromna różnica.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Prywatna inwestorka</div>
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
        <h2>Najczęściej zadawane pytania</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak mogę zacząć?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Utwórz konto podając podstawowe dane, przejdź krótką weryfikację i wpłać minimum <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Otrzymasz dostęp do całej platformy — wykresów na żywo, narzędzi tradingowych i wspieranego onboardingu.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Czy moje pieniądze i dane są bezpieczne?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Stosujemy szyfrowanie SSL, uwierzytelnianie dwuskładnikowe i bezpieczne przetwarzanie przez zaufanych dostawców. Twoje dane osobowe przetwarzamy zgodnie z rygorystycznymi zasadami bezpieczeństwa na wszystkich poziomach.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kiedy mogę wypłacić zyski?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              O wypłatę możesz poprosić w dowolnym momencie w panelu. Przetwarzanie zwykle trwa od 1 do 3 dni roboczych. Opłaty i terminy są zawsze podane z góry — bez niespodzianek.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Czy potrzebuję doświadczenia w handlu?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Wcale nie. Wspierany onboarding, proste przewodniki i narzędzia wspomagane przez AI pomogą Ci uczyć się we własnym tempie. Niezależnie od tego, czy jesteś początkującym, czy doświadczonym traderem, wsparcie jest dostępne 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Na jakich rynkach mogę handlować?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Uzyskaj dostęp do kryptowalut, forexu, globalnych akcji i towarów w jednym interfejsie. Dane w czasie rzeczywistym, zintegrowane analizy i wsparcie dla strategii manualnych i automatycznych.
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
        <p class="eyebrow">Platforma</p>
        <h2>Kluczowe możliwości na pierwszy rzut oka</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Silnik tradingowy AI</div>
          <div class="specs-value">Zaawansowana analiza rynku z uczeniem maszynowym</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Metody finansowania</div>
          <div class="specs-value">Karty płatnicze, przelewy bankowe, PayPal, portfele elektroniczne</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dostęp z urządzeń</div>
          <div class="specs-value">Web, tablet i mobile — w pełni responsywny</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dokładność sygnałów</div>
          <div class="specs-value">Do 85% dla wspieranych strategii AI</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Rynki</div>
          <div class="specs-value">Krypto, forex, akcje, towary</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Szybka konfiguracja konta ze wspieraną weryfikacją</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Wsparcie</div>
          <div class="specs-value">Profesjonalne wsparcie 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Skontaktuj się z nami</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Zaufane</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Ocena <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> opinii · Na podstawie <strong>1&nbsp;842</strong> ocen
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Gotowy handlować na platformie zaprojektowanej pod przejrzystość?</h2>
        <p class="lead">Dołącz do prywatnych traderów i firm, które z pewnością kupują, sprzedają i zarządzają aktywami cyfrowymi.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Utwórz konto za darmo';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

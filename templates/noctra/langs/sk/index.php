<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI obchodná platforma');
$page_description = 'Obchodujte kryptomeny a ďalšie trhy na ' . SITE_NAME . ' — bezpečný účet, prehľadné ceny, užitočné AI nástroje a rýchla exekúcia príkazov.';
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
      <span class="tape-item"><strong>Rýchlosť</strong> pod 40 ms</span>
      <span class="tape-item"><strong>Trhy</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> Obchodná platforma s AI</div>
        <h1>Obchodujte kryptomeny a ďalšie trhy.<br><span class="text-accent">Začnite s <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          Jednoduchá platforma na krypto a multi-asset obchodovanie — silné zabezpečenie, prehľadné ceny,
          užitočné AI prehľady a rozhranie, ktoré zostáva zrozumiteľné.
        </p>
        <div class="hero-badges" aria-label="Výhody platformy">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Zabezpečené šifrované pripojenie (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Zákaznícka podpora dostupná 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Rýchla exekúcia príkazov
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Začnite dnes — min. vklad <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Vytvoriť účet</span>
          <span class="live-pill">Bezpečné</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Registrácia do 2 minút';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Živé trhy</p>
        <h2>Sledujte ceny v reálnom čase. Začnite, keď budete pripravení.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Sledujte Bitcoin, Ethereum a ďalšie hlavné páry v prehľadnom paneli —
          potom otvorte účet a zadajte prvý obchod.
        </p>
        <a href="sign.php" class="btn btn-primary">Otvoriť prístup na trhy</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Živé ceny trhov">
        <div class="exchange-panel-header">
          <span>Trhy</span>
          <span class="live-dot">Naživo</span>
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

  <section class="platform-section" id="platform" aria-label="Náhľad obchodnej platformy">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Platforma</p>
        <h2>Prehľadné grafy.<br>Pripravené na obchodovanie.</h2>
        <p class="lead">
          Obchodná obrazovka priateľská k mobilu so živými grafmi, ziskom a stratou
          a jednoduchými príkazmi na jedno ťuknutie — zrozumiteľná od prvého prihlásenia.
        </p>
        <ul class="platform-points">
          <li>Živé grafy a trhové ceny</li>
          <li>Stav portfólia na prvý pohľad</li>
          <li>Bezpečný účet s 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Otvoriť platformu</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Funkcie</p>
        <h2>Čo získate s <?= e(SITE_NAME) ?></h2>
        <p class="lead">Zabezpečenie, rýchlosť a prehľadné nástroje — bez preplnenej obrazovky.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Silné zabezpečenie účtu</h3>
            <p>SSL šifrovanie, dvojfaktorové prihlásenie a chránené toky prostriedkov lepšie chránia vaše peniaze a údaje.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>AI prehľady trhu</h3>
            <p>Užitočné signály k načasovaniu a trendom — hodia sa, keď sa ceny rýchlo menia.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automatizácia, keď ju chcete</h3>
            <p>Voliteľné obchodné boty môžu dodržiavať vaše pravidlá nonstop — kontrola zostáva u vás.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Viac trhov na jednom mieste</h3>
            <p>Krypto, forex, akcie a komodity z jednej jednoduchej platformy.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Rýchle spracovanie príkazov</h3>
            <p>Navrhnuté na spoľahlivé zadávanie príkazov aj pri rušných trhoch.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Čisté, jednoduché rozhranie</h3>
            <p>Menej vizuálneho šumu — viac miesta pre graf a ďalší príkaz.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Začíname</p>
        <h2>Päť krokov k prvému obchodu</h2>
        <p class="lead">Jasná cesta od registrácie k živým trhom.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Otvorte účet</h3>
            <p>Odošlite údaje a získajte bezpečný prístup k platforme.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Potvrďte e-mail</h3>
            <p>Overte adresu a odomknite plné obchodné prostredie.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Vložte prostriedky</h3>
            <p>Vložte od <?= MIN_DEPOSIT ?> <?= CURRENCY ?> kartou, bankovým prevodom alebo e-peňaženkou.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Zvoľte spôsob obchodovania</h3>
            <p>Obchodujte ručne alebo s AI nástrojmi s jasnými limitmi, ktoré nastavíte.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Obchodujte naživo</h3>
            <p>Využite grafy, nástroje a podporu 24/7, kedykoľvek potrebujete pomoc.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Začať teď</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Platby</p>
      <h2 style="margin-bottom: 0.75rem;">Vkladajte spôsobmi, ktoré už poznáte</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Karty, peňaženky a bankové prevody — šifrované end-to-end.</p>
      <?php
      $payment_context = 'financovanie účtu a vklady';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infraštruktúra</p>
        <h2>Infraštruktúrni partneri</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recenzie</p>
        <h2>Čo hovoria traderi</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registrácia bola rýchla, poplatky jasné a podpora odpovedala. Pôsobí to ako platforma, pri ktorej zostanem.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Nezávislý trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Skúšal som krypto tu po skákaní medzi aplikáciami — nastavenie bolo jasné a rozloženie grafov konečne dáva zmysel.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Krypto trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Príkazy prechádzajú spoľahlivo, podmienky sú zrozumiteľné a tím produkt pozná. Solidná platforma.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Trader digitálnych aktív</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Ako začiatočník som potreboval skôr prehľadnosť než ohňostroje. Registrácia, poplatky a pomoc, keď som sa zasekol — to stačilo.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Súkromný investor</div>
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
        <h2>Skôr než vložíte prostriedky na účet</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ako začať?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vytvorte účet, dokončete krátké ověření a vložte od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Tým odomknete grafy, nástroje a sprievodcu.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ako sú chránené moje peniaze a údaje?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Používame SSL šifrovanie, dvojfaktorové overenie a dôveryhodných platobných poskytovateľov podľa prísnych zásad pre údaje.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ako dlho trvajú výbery?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Výplaty žiadajte kedykoľvek z dashboardu. Väčšina metód sa vysporiada počas 1–3 pracovných dní s poplatkami zobrazenými vopred.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Potrebujem predchádzajúce obchodné skúsenosti?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nie. Sprievodca a AI nástroje vám pomôžu učiť sa vlastným tempom, s podporou 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ktoré trhy sú k dispozícii?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kryptomeny, forex, globálne akcie a komodity — ručne alebo automaticky — z jedného rozhrania.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Prehľad</p>
        <h2>Platforma v kocke</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI nástroje</div>
          <div class="specs-value">Analýza trhu s prehľadmi strojového učenia</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Vklady</div>
          <div class="specs-value">Karty, bankové prevody, PayPal, e-peňaženky</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Zariadenia</div>
          <div class="specs-value">Web, tablet, mobil — plne responzívne</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Kvalita AI signálov</div>
          <div class="specs-value">Až 85 % pri podporovaných stratégiách*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Trhy</div>
          <div class="specs-value">Krypto, forex, akcie, komodity</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Rýchle nastavenie so sprievodcom overenia</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Podpora</div>
          <div class="specs-value">Podpora 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontaktujte nás</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Hodnotenie</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> — hodnotenie</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> recenzií · Na základe <strong>1,842</strong> hodnotení
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Chcete prehľadnejší spôsob obchodovania?</h2>
        <p class="lead">Pridajte sa k traderom, ktorí chcú živé trhy, jasné poplatky a ľahko použiteľnú platformu.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Otvoriť účet</span>
          <span class="live-pill">Zadarmo</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Vytvorte si účet zadarmo';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

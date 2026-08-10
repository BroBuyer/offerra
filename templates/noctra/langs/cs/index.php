<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI obchodní platforma');
$page_description = 'Obchodujte kryptoměny a další trhy na ' . SITE_NAME . ' — bezpečný účet, přehledné ceny, užitečné AI nástroje a rychlá exekuce příkazů.';
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
      <span class="tape-item"><strong>Rychlost</strong> pod 40 ms</span>
      <span class="tape-item"><strong>Trhy</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> Obchodní platforma s AI</div>
        <h1>Obchodujte kryptoměny a další trhy.<br><span class="text-accent">Začněte s <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          Jednoduchá platforma pro krypto a multi-asset obchodování — silné zabezpečení, přehledné ceny,
          užitečné AI přehledy a rozhraní, které zůstává srozumitelné.
        </p>
        <div class="hero-badges" aria-label="Výhody platformy">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Zabezpečené šifrované připojení (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Zákaznická podpora dostupná 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Rychlá exekuce příkazů
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Začněte dnes — min. vklad <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Vytvořit účet</span>
          <span class="live-pill">Bezpečné</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Registrace do 2 minut';
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
        <h2>Sledujte ceny v reálném čase. Začněte, až budete připraveni.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Sledujte Bitcoin, Ethereum a další hlavní páry v přehledném panelu —
          pak otevřete účet a zadejte první obchod.
        </p>
        <a href="sign.php" class="btn btn-primary">Otevřít přístup na trhy</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Živé ceny trhů">
        <div class="exchange-panel-header">
          <span>Trhy</span>
          <span class="live-dot">Živě</span>
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

  <section class="platform-section" id="platform" aria-label="Náhled obchodní platformy">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Platforma</p>
        <h2>Přehledné grafy.<br>Připraveno k obchodování.</h2>
        <p class="lead">
          Obchodní obrazovka přívětivá k mobilu s živými grafy, ziskem a ztrátou
          a jednoduchými příkazy na jedno klepnutí — srozumitelná od prvního přihlášení.
        </p>
        <ul class="platform-points">
          <li>Živé grafy a tržní ceny</li>
          <li>Stav portfolia na první pohled</li>
          <li>Bezpečný účet s 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Otevřít platformu</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Funkce</p>
        <h2>Co získáte s <?= e(SITE_NAME) ?></h2>
        <p class="lead">Zabezpečení, rychlost a přehledné nástroje — bez přeplněné obrazovky.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Silné zabezpečení účtu</h3>
            <p>SSL šifrování, dvoufaktorové přihlášení a chráněné toky prostředků lépe chrání vaše peníze a data.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>AI přehledy trhu</h3>
            <p>Užitečné signály k načasování a trendům — hodí se, když se ceny rychle mění.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automatizace, když ji chcete</h3>
            <p>Volitelné obchodní boty mohou dodržovat vaše pravidla nonstop — kontrola zůstává u vás.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Více trhů na jednom místě</h3>
            <p>Krypto, forex, akcie a komodity z jedné jednoduché platformy.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Rychlé zpracování příkazů</h3>
            <p>Navrženo pro spolehlivé zadávání příkazů i při rušných trzích.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Čisté, jednoduché rozhraní</h3>
            <p>Méně vizuálního šumu — více místa pro graf a další příkaz.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Začínáme</p>
        <h2>Pět kroků k prvnímu obchodu</h2>
        <p class="lead">Jasná cesta od registrace k živým trhům.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Otevřete účet</h3>
            <p>Odešlete údaje a získejte bezpečný přístup k platformě.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Potvrďte e-mail</h3>
            <p>Ověřte adresu a odemkněte plné obchodní prostředí.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Vložte prostředky</h3>
            <p>Vložte od <?= MIN_DEPOSIT ?> <?= CURRENCY ?> kartou, bankovním převodem nebo e-peněženkou.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Zvolte způsob obchodování</h3>
            <p>Obchodujte ručně nebo s AI nástroji s jasnými limity, které nastavíte.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Obchodujte naživo</h3>
            <p>Využijte grafy, nástroje a podporu 24/7, kdykoli potřebujete pomoc.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Začít teď</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Platby</p>
      <h2 style="margin-bottom: 0.75rem;">Vkládejte způsoby, které už znáte</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Karty, peněženky a bankovní převody — šifrováno end-to-end.</p>
      <?php
      $payment_context = 'financování účtu a vklady';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastruktura</p>
        <h2>Infrastrukturní partneři</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recenze</p>
        <h2>Co říkají tradeři</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registrace byla rychlá, poplatky jasné a podpora odpověděla. Působí to jako platforma, u které zůstanu.</p>
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
          <p class="review-text">Zkoušel jsem krypto tady po skákání mezi aplikacemi — nastavení bylo jasné a rozložení grafů konečně dává smysl.</p>
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
          <p class="review-text">Příkazy procházejí spolehlivě, podmínky jsou srozumitelné a tým produkt zná. Solidní platforma.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Trader digitálních aktiv</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Jako začátečník jsem potřeboval spíš přehlednost než ohňostroje. Registrace, poplatky a pomoc, když jsem se zasekl — to stačilo.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Soukromý investor</div>
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
        <h2>Než vložíte prostředky na účet</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak začít?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vytvořte účet, dokončete krátké ověření a vložte od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Tím odemknete grafy, nástroje a průvodce.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak jsou chráněny mé peníze a data?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Používáme SSL šifrování, dvoufaktorové ověření a důvěryhodné platební poskytovatele podle přísných zásad pro data.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak dlouho trvají výběry?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Výplaty žádejte kdykoli z dashboardu. Většina metod se vypořádá během 1–3 pracovních dnů s poplatky zobrazenými předem.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Potřebuji předchozí obchodní zkušenosti?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ne. Průvodce a AI nástroje vám pomohou učit se vlastním tempem, s podporou 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Které trhy jsou k dispozici?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kryptoměny, forex, globální akcie a komodity — ručně nebo automaticky — z jednoho rozhraní.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Přehled</p>
        <h2>Platforma v kostce</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI nástroje</div>
          <div class="specs-value">Analýza trhu s přehledy strojového učení</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Vklady</div>
          <div class="specs-value">Karty, bankovní převody, PayPal, e-peněženky</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Zařízení</div>
          <div class="specs-value">Web, tablet, mobil — plně responzivní</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Kvalita AI signálů</div>
          <div class="specs-value">Až 85 % u podporovaných strategií*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Trhy</div>
          <div class="specs-value">Krypto, forex, akcie, komodity</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Rychlé nastavení s průvodcem ověření</div>
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
          <span class="trust-badge">Hodnocení</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> — hodnocení</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> recenzí · Na základě <strong>1,842</strong> hodnocení
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Chcete přehlednější způsob obchodování?</h2>
        <p class="lead">Přidejte se k traderům, kteří chtějí živé trhy, jasné poplatky a snadno použitelnou platformu.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Otevřít účet</span>
          <span class="live-pill">Zdarma</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Vytvořte si účet zdarma';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI obchodní platforma');
$page_description = 'Obchodujte kryptoměny, forex i globální trhy s ' . SITE_NAME . '. Analýza v reálném čase, AI asistované signály a platforma navržená pro rychlost a přehlednost.';
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
        <p class="eyebrow">AI obchodní platforma</p>
        <h1>Obchodujte chytřeji.<br><span class="text-accent">Reagujte rychleji.</span></h1>
        <p class="lead">
          Nový standard pro krypto a multi-tržní obchodování. Pokročilé zabezpečení, transparentní poplatky,
          AI řízené insighty a rozhraní, které vás nebrzdí.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Zabezpečeno SSL
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Podpora 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Rychlá exekuce
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Začít obchodovat — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Otevřete účet za 2 minuty';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Statistiky platformy">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Dostupné měny</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Ověření uživatelé</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Objem obchodování</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Podporované země</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Přehled obchodní platformy">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Obchodní platforma</p>
        <h2>Profesionální grafy.<br>Připraveno pro mobil.</h2>
        <p class="lead">
          Čisté rozhraní inspirované moderní burzou — data BTC/USDT v reálném čase, správa portfolia
          a obchodování na jedno kliknutí. Navrženo tak, aby vám dodalo jistotu už při prvním přihlášení.
        </p>
        <ul class="platform-points">
          <li>Svíčkové grafy v reálném čase</li>
          <li>Portfolio a P/L na první pohled</li>
          <li>Zabezpečený účetní dashboard</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Vyzkoušet platformu</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Proč <?= e(SITE_NAME) ?></p>
        <h2>Vše, co potřebujete pro jisté obchodování</h2>
        <p class="lead">Bezpečnost, rychlost a inteligence — v přehledné platformě navržené pro moderní tradery.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Zabezpečení na úrovni banky</h3>
          <p>SSL šifrování, 2FA a bezpečná správa prostředků chrání vaše data i kapitál v každém kroku.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI tržní signály</h3>
          <p>Přesné insighty v reálném čase vám pomáhají odhalit příležitosti a dělat rychlejší, informovaná rozhodnutí.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatizované obchodování</h3>
          <p>AI asistovaní boti pracují 24/7 na efektivní exekuci strategií, zatímco vy si zachováváte kontrolu.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Přístup na více trhů</h3>
          <p>Obchodujte kryptoměny, forex, akcie i komodity v jednom sjednoceném prostředí.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Nízká latence exekuce</h3>
          <p>Optimalizovaná infrastruktura pro stabilní provedení pokynů i během vysoké tržní volatility.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Čisté rozhraní</h3>
          <p>Minimalistický design omezuje rušivé prvky, abyste se soustředili na strategii, ne na navigaci.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Trhy v reálném čase</p>
        <h2>Obchodujte Bitcoin, Ethereum a další aktiva</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Ceny v reálném čase, pokročilé indikátory a profesionální přehled trhů, které vás zajímají.
        </p>
        <a href="sign.php" class="btn btn-primary">Vstoupit na trhy</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Tržní ceny v reálném čase">
        <div class="exchange-panel-header">
          <span>Trhy</span>
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
        <p class="eyebrow">Jak začít</p>
        <h2>Od registrace k prvnímu obchodu během pár minut</h2>
        <p class="lead">Jasný proces bez zbytečné složitosti a nejistoty.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Vytvořte si účet</h3>
          <p>Zaregistrujte se pomocí svých údajů a získejte okamžitý bezpečný přístup k platformě.</p>
        </article>
        <article class="step-card">
          <h3>Ověřte e-mail</h3>
          <p>Potvrďte svou adresu a odemkněte plné obchodní prostředí.</p>
        </article>
        <article class="step-card">
          <h3>Vložte prostředky</h3>
          <p>Vložte minimálně <?= MIN_DEPOSIT ?> <?= CURRENCY ?> bankovním převodem, kartou nebo e-peněženkou.</p>
        </article>
        <article class="step-card">
          <h3>Nastavte strategii</h3>
          <p>Zvolte úroveň rizika a preference — manuálně nebo s AI asistovanou automatizací.</p>
        </article>
        <article class="step-card">
          <h3>Začněte obchodovat</h3>
          <p>Vstupte na trh s grafy v reálném čase, nástroji a podporou vždy, když ji potřebujete.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Otevřít účet nyní</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Vklady</p>
      <h2 style="margin-bottom: 0.75rem;">Vkládejte metodami, kterým už důvěřujete</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Karty, e-peněženky a bankovní převody — chráněné SSL šifrováním.</p>
      <?php
      $payment_context = 'vklady a financování účtu';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Důvěryhodná infrastruktura</p>
        <h2>Postaveno s předními partnery v oboru</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recenze</p>
        <h2>Co říkají tradeři</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registrace zabrala jen pár minut, poplatky jsou transparentní a podpora opravdu reaguje. Plynulá a spolehlivá zkušenost — platforma, na které rád pokračuji.</p>
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
          <p class="review-text">Konečně jsem tu zkusila krypto obchodování — bez jediné lítosti. Rychlé nastavení a vše srozumitelně vysvětlené. Skvělá volba, hlavně pro začátek.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Krypto nadšenec</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabilní a spolehlivé. Otevření účtu je jednoduché, podmínky jasné a tým ví, co dělá. Překvapivě komfortní obchodní zkušenost.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Operátor digitálních aktiv</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Obchodování už nepůsobí tak složitě. Jednoduchá registrace, jasné poplatky a podpora, když ji potřebuji. Pro začátečníka je to zásadní rozdíl.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Soukromá investorka</div>
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
        <h2>Často kladené otázky</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak mohu začít?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vytvořte si účet se základními údaji, dokončete krátké ověření a vložte minimálně <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Získáte přístup k celé platformě — grafům v reálném čase, obchodním nástrojům i asistovanému onboardingu.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jsou moje peníze a data v bezpečí?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Používáme SSL šifrování, dvoufázové ověření a bezpečné zpracování přes důvěryhodné poskytovatele. Vaše osobní údaje zpracováváme podle přísných bezpečnostních pravidel na všech úrovních.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kdy mohu vybrat své zisky?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              O výběr můžete požádat kdykoli ve svém dashboardu. Zpracování obvykle trvá 1 až 3 pracovní dny. Poplatky i termíny jsou vždy uvedeny předem — bez překvapení.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Potřebuji zkušenosti s obchodováním?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vůbec ne. Asistovaný onboarding, jednoduché návody a AI asistované nástroje vám pomohou učit se vlastním tempem. Ať jste začátečník nebo zkušený trader, podpora je dostupná 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Na kterých trzích mohu obchodovat?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Získejte přístup ke kryptoměnám, forexu, globálním akciím i komoditám v jednom rozhraní. Data v reálném čase, integrované analýzy a podpora manuálních i automatizovaných strategií.
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
        <h2>Klíčové možnosti na první pohled</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI obchodní engine</div>
          <div class="specs-value">Pokročilá tržní analýza se strojovým učením</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Metody financování</div>
          <div class="specs-value">Platební karty, bankovní převody, PayPal, e-peněženky</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Přístup podle zařízení</div>
          <div class="specs-value">Web, tablet a mobil — plně responzivní</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Přesnost signálů</div>
          <div class="specs-value">Až 85 % u podporovaných AI strategií</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Trhy</div>
          <div class="specs-value">Krypto, forex, akcie, komodity</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Rychlé nastavení účtu s asistovaným ověřením</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Podpora</div>
          <div class="specs-value">Profesionální podpora 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontaktujte nás</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Důvěryhodné</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Hodnocení <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> recenzí · Na základě <strong>1&nbsp;842</strong> hodnocení
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Jste připraveni obchodovat na platformě navržené pro přehlednost?</h2>
        <p class="lead">Připojte se k privátním traderům i firmám, které s jistotou nakupují, prodávají a spravují digitální aktiva.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Vytvořte si účet zdarma';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

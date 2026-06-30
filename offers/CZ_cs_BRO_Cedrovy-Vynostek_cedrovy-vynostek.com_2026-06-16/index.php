<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Obchodní platforma');
$page_description = 'Obchodujte s kryptoměnami, forexem a globálními trhy na ' . SITE_NAME . '. Analýza v reálném čase, signály podporované AI a platforma navržená pro rychlost a přehlednost.';
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
        <p class="eyebrow">Obchodní platforma s AI</p>
        <h1>Obchodujte chytřeji.<br><span class="text-accent">Jednejte rychleji.</span></h1>
        <p class="lead">
          Nový standard pro obchodování s kryptoměnami a na více trzích. Pokročilé zabezpečení, transparentní poplatky,
          přehledy řízené AI a přehledné rozhraní.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Chráněno SSL
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Podpora 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Rychlé provedení
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Začít obchodovat — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Otevřete si účet za 2 minuty';
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
        <div class="stat-label">Dostupných měn</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Ověřených uživatelů</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Objem obchodování</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Podporovaných zemí</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Náhled obchodní platformy">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Obchodní platforma</p>
        <h2>Profesionální grafy.<br>Optimalizováno pro mobil.</h2>
        <p class="lead">
          Přehledné rozhraní jako u moderní burzy — data BTC/USDT v reálném čase, sledování portfolia
          a provedení jedním klepnutím. Navrženo tak, abyste se cítili jistě od prvního přihlášení.
        </p>
        <ul class="platform-points">
          <li>Candlestick grafy v reálném čase</li>
          <li>Portfolio a P/L na první pohled</li>
          <li>Bezpečný přehled účtu</li>
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
        <h2>Vše, co potřebujete pro obchodování s jistotou</h2>
        <p class="lead">Bezpečnost, rychlost a inteligence — v jedné přehledné platformě pro moderní obchodníky.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Bezpečnost na úrovni banky</h3>
          <p>SSL šifrování, 2FA a bezpečná správa prostředků chrání vaše údaje a kapitál v každém kroku.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI tržní signály</h3>
          <p>Přesné přehledy v reálném čase pomáhají rozpoznat příležitosti a činit rychlejší a informovanější rozhodnutí.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatizované obchodování</h3>
          <p>Boti podporovaní AI pracují 24/7 a efektivně provádějí strategie, zatímco vy máte vždy kontrolu.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Přístup na více trhů</h3>
          <p>Obchodujte s kryptoměnami, forexem, akciemi a komoditami z jednoho rozhraní.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Provedení s nízkou latencí</h3>
          <p>Optimalizovaná infrastruktura pro stabilní provádění objednávek i v špičkových obdobích.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Přehledné rozhraní</h3>
          <p>Minimalistický design, který omezuje rozptylování: více pozornosti strategii, méně navigaci.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Živé trhy</p>
        <h2>Obchodujte s Bitcoinem, Ethereum a dalšími</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Ceny v reálném čase, pokročilé indikátory a profesionální pohled na trhy, které vás zajímají.
        </p>
        <a href="sign.php" class="btn btn-primary">Přístup k trhům</a>
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
        <h2>Od registrace k prvnímu obchodu během několika minut</h2>
        <p class="lead">Průvodce krok za krokem — bez složitostí, bez nejistoty.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Vytvořte si účet</h3>
          <p>Zaregistrujte se se svými údaji a získejte okamžitý a bezpečný přístup k platformě.</p>
        </article>
        <article class="step-card">
          <h3>Ověřte svůj e-mail</h3>
          <p>Potvrďte adresu a odemkněte plný přístup k platformě.</p>
        </article>
        <article class="step-card">
          <h3>Financujte svůj účet</h3>
          <p>Vložte minimálně <?= MIN_DEPOSIT ?> <?= CURRENCY ?> bankovním převodem, kartou nebo e-peněženkou.</p>
        </article>
        <article class="step-card">
          <h3>Nastavte strategii</h3>
          <p>Definujte úroveň rizika a preference — manuálně nebo s automatizací podporovanou AI.</p>
        </article>
        <article class="step-card">
          <h3>Začněte obchodovat</h3>
          <p>Vstupte na trh s živými grafy, nástroji a podporou, kdykoli ji potřebujete.</p>
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
      <h2 style="margin-bottom: 0.75rem;">Vkládejte prostředky známými metodami</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Karty, e-peněženky a bankovní převody — chráněno SSL šifrováním.</p>
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
        <p class="eyebrow">Spolehlivá infrastruktura</p>
        <h2>Postaveno na partnery z oboru</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recenze</p>
        <h2>Co říkají obchodníci</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registrace byla blesková, poplatky transparentní a podpora skutečně odpovídá. Plynulý a spolehlivý zážitek — platformu rád používám dál.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Nezávislý obchodník</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Konečně jsem zde vyzkoušel obchodování s kryptoměnami — bez výčitek. Rychlé nastavení a jasná vysvětlení. Skvělá volba, zejména pro začátečníky.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Nadšenkyně do kryptoměn</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabilní a spolehlivé. Jednoduché otevření účtu, jasné podmínky a kompetentní tým. Překvapivě pohodlný obchodní zážitek.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Obchodník s digitálními aktivy</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Obchodování už nepůsobí složitě. Jednoduchá registrace, jasné poplatky a podpora, když ji potřebujete. Jako začátečníkovi mi to opravdu pomohlo.</p>
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
        <h2>Časté dotazy</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak mohu začít?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vytvořte si účet se základními údaji, dokončete krátký ověřovací krok a vložte minimálně <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Získáte plný přístup k platformě — živé grafy, obchodní nástroje a průvodce nastavením.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jsou mé peníze a údaje v bezpečí?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Používáme SSL šifrování, dvoufaktorové ověření a bezpečné procesy prostřednictvím důvěryhodných poskytovatelů. Vaše osobní údaje jsou spravovány podle přísných bezpečnostních zásad na každé úrovni.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kdy mohu vybrat zisky?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Výběry můžete požádat kdykoli ze svého osobního účtu. Zpracování obvykle trvá 1–3 pracovní dny. Poplatky a lhůty jsou vždy zobrazeny předem — bez překvapení.
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
              Vůbec ne. Průvodce nastavením, jednoduché návody a nástroje podporované AI vám pomohou učit se vlastním tempem. Ať jste začátečník nebo zkušený obchodník, podpora je dostupná 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Na jakých trzích mohu obchodovat?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Získejte přístup ke kryptoměnám, forexu, globálním akciím a komoditám z jednoho rozhraní. Data v reálném čase, integrovaná analýza a podpora manuálních i automatizovaných strategií.
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
        <h2>Hlavní funkce na první pohled</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI obchodní engine</div>
          <div class="specs-value">Pokročilá tržní analýza založená na strojovém učení</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Způsoby vkladu</div>
          <div class="specs-value">Karty, bankovní převody, PayPal, e-peněženky</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Přístup ze zařízení</div>
          <div class="specs-value">Web, tablet a mobil — plně responzivní</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Přesnost signálů</div>
          <div class="specs-value">Až 85 % u podporovaných AI strategií</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Trhy</div>
          <div class="specs-value">Kryptoměny, forex, akcie, komodity</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Nastavení</div>
          <div class="specs-value">Rychlá konfigurace s průvodcem ověřením</div>
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
          <span class="trust-badge">Spolehlivé</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Platforma navržená pro začátečníky</h3>
          <p style="margin-top: 0.5rem; color: var(--text-muted); max-width: 42rem;">
            Průvodce nastavením, vyhrazená podpora a přehledné nástroje pro obchodování s větší jistotou.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Připraveni obchodovat na platformě navržené pro přehlednost?</h2>
        <p class="lead">Připojte se k soukromým obchodníkům a firmám, které nakupují, prodávají a spravují digitální aktiva s jistotou.</p>
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

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Obchodná platforma');
$page_description = 'Obchodujte s kryptomenami, forexom a globálnymi trhmi cez ' . SITE_NAME . '. Analýza v reálnom čase, AI signály a platforma navrhnutá pre rýchlosť a prehľadnosť.';
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
        <p class="eyebrow">Obchodná platforma s AI</p>
        <h1>Obchodujte inteligentnejšie.<br><span class="text-accent">Konajte rýchlejšie.</span></h1>
        <p class="lead">
          Nový štandard pre krypto a multi-trhové obchodovanie. Pokročilá bezpečnosť, transparentné poplatky,
          AI prehľady a prehľadné rozhranie.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL ochrana
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Podpora 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Rýchla exekúcia
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Začať obchodovať — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Otvorte si účet za 2 minúty';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Štatistiky platformy">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Dostupných mien</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Overených používateľov</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Objem obchodov</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Podporovaných krajín</div>
      </div>
    </div>
  </section>

  <!-- Platform phone -->
  <section class="platform-section" id="platform" aria-label="Ukážka obchodnej platformy">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Obchodná platforma</p>
        <h2>Profesionálne grafy.<br>Optimalizované pre mobil.</h2>
        <p class="lead">
          Prehľadné rozhranie ako moderná burza — dáta BTC/USDT v reálnom čase, sledovanie portfólia
          a exekúcia jedným dotykom. Navrhnuté pre istotu od prvého prihlásenia.
        </p>
        <ul class="platform-points">
          <li>Candlestick grafy v reálnom čase</li>
          <li>Portfólio a P/L na prvý pohľad</li>
          <li>Bezpečný dashboard účtu</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Vyskúšať platformu</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Prečo <?= e(SITE_NAME) ?></p>
        <h2>Všetko, čo potrebujete na obchodovanie s istotou</h2>
        <p class="lead">Bezpečnosť, rýchlosť a inteligencia — v jednej prehľadnej platforme pre moderných traderov.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Banková úroveň bezpečnosti</h3>
          <p>SSL šifrovanie, 2FA a bezpečná správa prostriedkov chránia vaše dáta a kapitál v každej fáze.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI trhové signály</h3>
          <p>Presné prehľady v reálnom čase na identifikáciu príležitostí a rýchlejšie, informovanejšie rozhodnutia.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatizované obchodovanie</h3>
          <p>AI boti pracujú 24/7 na efektívnej exekúcii stratégií, zatiaľ čo vy máte vždy kontrolu.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Prístup k viacerým trhom</h3>
          <p>Obchodujte s kryptomenami, forexom, akciami a komoditami z jedného rozhrania.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Exekúcia s nízkou latenciou</h3>
          <p>Optimalizovaná infraštruktúra pre stabilné vykonávanie príkazov aj v špičkách.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Prehľadné rozhranie</h3>
          <p>Minimalistický dizajn s menej rozptýlením: viac pozornosti na stratégiu, menej na navigáciu.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Živé trhy</p>
        <h2>Obchodujte Bitcoin, Ethereum a ďalšie</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Ceny v reálnom čase, pokročilé indikátory a profesionálny pohľad na trhy, ktoré vás zaujímajú.
        </p>
        <a href="sign.php" class="btn btn-primary">Vstúpiť na trhy</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Trhové ceny v reálnom čase">
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
        <p class="eyebrow">Ako začať</p>
        <h2>Od registrácie po prvý obchod za pár minút</h2>
        <p class="lead">Sprievodný proces — bez zbytočnej zložitosti a neistoty.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Vytvorte si účet</h3>
          <p>Zaregistrujte sa so svojimi údajmi a získajte okamžitý a bezpečný prístup na platformu.</p>
        </article>
        <article class="step-card">
          <h3>Overte e-mail</h3>
          <p>Potvrďte adresu a odomknite plný prístup na platformu.</p>
        </article>
        <article class="step-card">
          <h3>Nafundujte účet</h3>
          <p>Vložte minimálne <?= MIN_DEPOSIT ?> <?= CURRENCY ?> bankovým prevodom, kartou alebo e-peňaženkou.</p>
        </article>
        <article class="step-card">
          <h3>Nastavte stratégiu</h3>
          <p>Definujte úroveň rizika a preferencie — manuálne alebo s AI automatizáciou.</p>
        </article>
        <article class="step-card">
          <h3>Začnite obchodovať</h3>
          <p>Vstúpte na trh s live grafmi, nástrojmi a podporou, keď ju potrebujete.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Otvoriť účet teraz</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Vklady</p>
      <h2 style="margin-bottom: 0.75rem;">Vkladajte spôsobmi, ktoré už poznáte</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Karty, e-peňaženky a prevody — chránené SSL šifrovaním.</p>
      <?php
      $payment_context = 'vklady a financovanie účtu';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Spoľahlivá infraštruktúra</p>
        <h2>Postavené s partnermi na úrovni odvetvia</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recenzie</p>
        <h2>Čo hovoria traderi</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registrácia bola blesková, poplatky transparentné a podpora naozaj odpovedá. Plynulý a spoľahlivý zážitok — platformu rád používam ďalej.</p>
          <div class="review-author">
            <div class="review-avatar">OK</div>
            <div>
              <div class="review-name">Ondrej Kováč</div>
              <div class="review-role">Nezávislý trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Konečne som vyskúšal krypto obchodovanie tu — bez ľutovania. Rýchle nastavenie a jasné vysvetlenia. Skvelá voľba, najmä pre začiatočníkov.</p>
          <div class="review-author">
            <div class="review-avatar">AH</div>
            <div>
              <div class="review-name">Anna Horváthová</div>
              <div class="review-role">Nadšená krypto traderka</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabilné a spoľahlivé. Jednoduché otvorenie účtu, jasné podmienky a kompetentný tím. Prekvapivo pohodlný obchodný zážitok.</p>
          <div class="review-author">
            <div class="review-avatar">DV</div>
            <div>
              <div class="review-name">Daniel Varga</div>
              <div class="review-role">Obchodník s digitálnymi aktívami</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Obchodovanie už nepôsobí komplikovane. Jednoduchá registrácia, jasné poplatky a podpora, keď ju potrebujete. Pre začiatočníka to naozaj robí rozdiel.</p>
          <div class="review-author">
            <div class="review-avatar">LŠ</div>
            <div>
              <div class="review-name">Laura Šimková</div>
              <div class="review-role">Súkromná investorka</div>
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
        <h2>Časté otázky</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ako môžem začať?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vytvorte si účet so základnými údajmi, dokončite krátky overovací krok a vložte minimálne <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Odomknete plný prístup na platformu — live grafy, obchodné nástroje a sprievodné nastavenie.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Sú moje peniaze a dáta v bezpečí?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Používame SSL šifrovanie, dvojfaktorové overenie a bezpečné procesy cez overených poskytovateľov. Vaše osobné údaje spracúvame podľa prísnych bezpečnostných politík na každej úrovni.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kedy môžem vybrať zisk?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Výbery môžete požiadať kedykoľvek vo svojej zóne účtu. Spracovanie zvyčajne trvá 1–3 pracovné dni. Poplatky a termíny sú vždy zobrazené vopred — bez prekvapení.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Potrebujem skúsenosti s obchodovaním?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vôbec nie. Sprievodné nastavenie, jednoduché tutoriály a AI nástroje vám pomôžu učiť sa vlastným tempom. Či ste začiatočník alebo expert, podpora je dostupná 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Na ktorých trhoch môžem obchodovať?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Získate prístup ku kryptomenám, forexu, globálnym akciám a komoditám z jedného rozhrania. Dáta v reálnom čase, integrovaná analýza a podpora manuálnych aj automatizovaných stratégií.
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
        <h2>Hlavné funkcie na prvý pohľad</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI obchodný engine</div>
          <div class="specs-value">Pokročilá trhová analýza založená na machine learningu</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Spôsoby vkladu</div>
          <div class="specs-value">Karty, prevody, PayPal, e-peňaženky</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Prístup zo zariadení</div>
          <div class="specs-value">Web, tablet a mobil — plne responzívne</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Presnosť signálov</div>
          <div class="specs-value">Až do 85 % na podporovaných AI stratégiách</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Trhy</div>
          <div class="specs-value">Krypto, forex, akcie, komodity</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Rýchle nastavenie so sprievodným overením</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Podpora</div>
          <div class="specs-value">Profesionálna podpora 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontaktujte nás</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Spoľahlivé</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Platforma navrhnutá pre začiatočníkov</h3>
          <p style="margin-top: 0.5rem; color: var(--text-muted); max-width: 42rem;">
            Sprievodné nastavenie, venovaná podpora a prehľadné nástroje na obchodovanie s väčšou istotou.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Pripravení obchodovať na platforme navrhnutej pre prehľadnosť?</h2>
        <p class="lead">Pridajte sa k súkromným traderom a firmám, ktoré s dôverou nakupujú, predávajú a spravujú digitálne aktíva.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Vytvorte si účet zadarmo';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

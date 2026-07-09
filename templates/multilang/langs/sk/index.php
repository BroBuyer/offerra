<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI obchodná platforma');
$page_description = 'Obchodujte kryptomeny, forex aj globálne trhy s ' . SITE_NAME . '. Analýza v reálnom čase, AI asistované signály a platforma navrhnutá pre rýchlosť a prehľadnosť.';
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
        <p class="eyebrow">AI obchodná platforma</p>
        <h1>Obchodujte múdrejšie.<br><span class="text-accent">Reagujte rýchlejšie.</span></h1>
        <p class="lead">
          Nový štandard pre krypto a multi-trhové obchodovanie. Pokročilé zabezpečenie, transparentné poplatky,
          AI riadené insighty a rozhranie, ktoré vás nebrzdí.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Zabezpečené SSL
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
        $form_heading = 'Otvorte účet za 2 minúty';
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
        <div class="stat-label">Dostupné meny</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Overení používatelia</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Objem obchodovania</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Podporované krajiny</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Prehľad obchodnej platformy">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Obchodná platforma</p>
        <h2>Profesionálne grafy.<br>Pripravené pre mobil.</h2>
        <p class="lead">
          Čisté rozhranie inšpirované modernou burzou — dáta BTC/USDT v reálnom čase, správa portfólia
          a obchodovanie na jedno kliknutie. Navrhnuté tak, aby vám dodalo istotu už pri prvom prihlásení.
        </p>
        <ul class="platform-points">
          <li>Sviečkové grafy v reálnom čase</li>
          <li>Portfólio a P/L na prvý pohľad</li>
          <li>Zabezpečený účtovný dashboard</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Vyskúšať platformu</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Proč <?= e(SITE_NAME) ?></p>
        <h2>Všetko, čo potrebujete na isté obchodovanie</h2>
        <p class="lead">Bezpečnosť, rýchlosť a inteligencia — v prehľadnej platforme navrhnutej pre moderných traderov.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Zabezpečenie na úrovni banky</h3>
          <p>SSL šifrovanie, 2FA a bezpečná správa prostriedkov chránia vaše dáta aj kapitál v každom kroku.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI trhové signály</h3>
          <p>Presné insighty v reálnom čase vám pomáhajú odhaliť príležitosti a robiť rýchlejšie, informované rozhodnutia.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatizované obchodovanie</h3>
          <p>AI asistovaní boti pracujú 24/7 na efektívnej exekúcii stratégií, zatiaľ čo vy si zachovávate kontrolu.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Prístup na viac trhov</h3>
          <p>Obchodujte kryptomeny, forex, akcie aj komodity v jednom zjednotenom prostredí.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Nízka latencia exekúcie</h3>
          <p>Optimalizovaná infraštruktúra pre stabilné vykonanie príkazov aj počas vysokej trhovej volatility.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Čisté rozhranie</h3>
          <p>Minimalistický dizajn obmedzuje rušivé prvky, aby ste sa sústredili na stratégiu, nie na navigáciu.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Trhy v reálnom čase</p>
        <h2>Obchodujte Bitcoin, Ethereum a ďalšie aktíva</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Ceny v reálnom čase, pokročilé indikátory a profesionálny prehľad trhov, ktoré vás zaujímajú.
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
        <h2>Od registrácie k prvému obchodu počas pár minút</h2>
        <p class="lead">Jasný proces bez zbytočnej zložitosti a neistoty.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Vytvorte si účet</h3>
          <p>Zaregistrujte sa pomocou svojich údajov a získajte okamžitý bezpečný prístup k platforme.</p>
        </article>
        <article class="step-card">
          <h3>Overte e-mail</h3>
          <p>Potvrďte svoju adresu a odomknite plné obchodné prostredie.</p>
        </article>
        <article class="step-card">
          <h3>Vložte prostriedky</h3>
          <p>Vložte minimálne <?= MIN_DEPOSIT ?> <?= CURRENCY ?> bankovým prevodom, kartou alebo e-peňaženkou.</p>
        </article>
        <article class="step-card">
          <h3>Nastavte stratégiu</h3>
          <p>Zvoľte úroveň rizika a preferencie — manuálne alebo s AI asistovanou automatizáciou.</p>
        </article>
        <article class="step-card">
          <h3>Začnite obchodovať</h3>
          <p>Vstúpte na trh s grafmi v reálnom čase, nástrojmi a podporou vždy, keď ju potrebujete.</p>
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
      <h2 style="margin-bottom: 0.75rem;">Vkladajte metódami, ktorým už dôverujete</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Karty, e-peňaženky a bankové prevody — chránené SSL šifrovaním.</p>
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
        <p class="eyebrow">Dôveryhodná infraštruktúra</p>
        <h2>Postavené s poprednými partnermi v odvetví</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recenze</p>
        <h2>Čo hovoria traderi</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registrácia zaberala len pár minút, poplatky sú transparentné a podpora naozaj reaguje. Plynulá a spoľahlivá skúsenosť — platforma, na ktorej rád pokračujem.</p>
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
          <p class="review-text">Konečne som tu skúsila krypto obchodovanie — bez jedinej ľútosti. Rýchle nastavenie a všetko zrozumiteľne vysvetlené. Skvelá voľba, hlavne na začiatok.</p>
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
          <p class="review-text">Stabilné a spoľahlivé. Otvorenie účtu je jednoduché, podmienky jasné a tím vie, čo robí. Prekvapivo komfortná obchodná skúsenosť.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Operátor digitálnych aktív</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Obchodovanie už nepôsobí tak zložito. Jednoduchá registrácia, jasné poplatky a podpora, keď ju potrebujem. Pre začiatočníka je to zásadný rozdiel.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
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
        <h2>Často kladené otázky</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ako môžem začať?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vytvorte si účet se základními údaji, dokončete krátké ověření a vložte minimálně <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Získate prístup k celej platforme — grafom v reálnom čase, obchodným nástrojom aj asistovanému onboardingu.
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
              Používame SSL šifrovanie, dvojfaktorové overenie a bezpečné spracovanie cez dôveryhodných poskytovateľov. Vaše osobné údaje spracúvame podľa prísnych bezpečnostných pravidiel na všetkých úrovniach.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kedy môžem vybrať svoje zisky?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              O výber môžete požiadať kedykoľvek vo svojom dashboarde. Spracovanie zvyčajne trvá 1 až 3 pracovné dni. Poplatky aj termíny sú vždy uvedené vopred — bez prekvapení.
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
              Vôbec nie. Asistovaný onboarding, jednoduché návody a AI asistované nástroje vám pomôžu učiť sa vlastným tempom. Či ste začiatočník alebo skúsený trader, podpora je dostupná 24/7.
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
              Získajte prístup ku kryptomenám, forexu, globálnym akciám aj komoditám v jednom rozhraní. Dáta v reálnom čase, integrované analýzy a podpora manuálnych aj automatizovaných stratégií.
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
        <h2>Kľúčové možnosti na prvý pohľad</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI obchodný engine</div>
          <div class="specs-value">Pokročilá trhová analýza so strojovým učením</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Metódy financovania</div>
          <div class="specs-value">Platobné karty, bankové prevody, PayPal, e-peňaženky</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Prístup podľa zariadenia</div>
          <div class="specs-value">Web, tablet a mobil — plne responzívny</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Presnosť signálov</div>
          <div class="specs-value">Až 85 % u podporovaných AI stratégií</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Trhy</div>
          <div class="specs-value">Krypto, forex, akcie, komodity</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Rýchle nastavenie účtu s asistovaným overením</div>
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
          <span class="trust-badge">Důvěryhodné</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Hodnotenie <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> recenzií · Na základe <strong>1&nbsp;842</strong> hodnotení
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Ste pripravení obchodovať na platforme navrhnutej pre prehľadnosť?</h2>
        <p class="lead">Pripojte sa k súkromným traderom aj firmám, ktoré s istotou nakupujú, predávajú a spravujú digitálne aktíva.</p>
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

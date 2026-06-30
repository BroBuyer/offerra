<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Platformă de tranzacționare');
$page_description = 'Tranzacționează cripto, forex și piețe globale cu ' . SITE_NAME . '. Analiză în timp real, semnale asistate de AI și o platformă concepută pentru viteză și claritate.';
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
        <p class="eyebrow">Platformă de tranzacționare cu AI</p>
        <h1>Tranzacționează mai inteligent.<br><span class="text-accent">Acționează mai rapid.</span></h1>
        <p class="lead">
          Un nou standard pentru tranzacționarea cripto și multi-piață. Securitate avansată, comisioane transparente,
          insight-uri ghidate de AI și o interfață esențială.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Protejat SSL
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Asistență 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Execuție rapidă
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Începe să tranzacționezi — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Deschide-ți contul în 2 minute';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Statistici platformă">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Monede disponibile</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Utilizatori verificați</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Volum de tranzacționare</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Țări acceptate</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Previzualizare platformă de tranzacționare">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Platformă de tranzacționare</p>
        <h2>Grafice profesionale.<br>Optimizată pentru mobil.</h2>
        <p class="lead">
          O interfață curată, ca un exchange modern — date BTC/USDT în timp real, monitorizare portofoliu
          și execuție dintr-o atingere. Concepută să îți ofere încredere de la primul acces.
        </p>
        <ul class="platform-points">
          <li>Grafice candlestick în timp real</li>
          <li>Portofoliu și P/L dintr-o privire</li>
          <li>Tablou de bord securizat pentru cont</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Încearcă platforma</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">De ce <?= e(SITE_NAME) ?></p>
        <h2>Tot ce ai nevoie pentru a tranzacționa cu încredere</h2>
        <p class="lead">Securitate, viteză și inteligență — reunite într-o platformă clară, gândită pentru traderii moderni.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Securitate de nivel bancar</h3>
          <p>Criptare SSL, 2FA și gestionare sigură a fondurilor îți protejează datele și capitalul la fiecare pas.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Semnale de piață AI</h3>
          <p>Insight-uri precise în timp real pentru a identifica oportunități și a lua decizii mai rapide și informate.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Tranzacționare automată</h3>
          <p>Roboți asistați de AI lucrează 24/7 pentru a executa strategii eficient, în timp ce tu rămâi mereu în control.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Acces multi-piață</h3>
          <p>Operează pe cripto, forex, acțiuni și mărfuri dintr-o singură interfață.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Execuție cu latență redusă</h3>
          <p>Infrastructură optimizată pentru execuție stabilă a ordinelor chiar și în momentele de vârf.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Interfață clară</h3>
          <p>Design esențial care reduce distragerile: mai mult focus pe strategie, mai puțin pe navigare.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Piețe live</p>
        <h2>Tranzacționează Bitcoin, Ethereum și multe altele</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Prețuri în timp real, indicatori avansați și o vizualizare profesională a piețelor care te interesează.
        </p>
        <a href="sign.php" class="btn btn-primary">Accesează piețele</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Prețuri de piață în timp real">
        <div class="exchange-panel-header">
          <span>Piețe</span>
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
        <p class="eyebrow">Cum să începi</p>
        <h2>De la înregistrare la prima operațiune în câteva minute</h2>
        <p class="lead">Un parcurs ghidat — fără complexitate, fără incertitudine.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Creează-ți contul</h3>
          <p>Înregistrează-te cu datele tale și obține acces imediat și securizat la platformă.</p>
        </article>
        <article class="step-card">
          <h3>Verifică-ți emailul</h3>
          <p>Confirmă adresa pentru a debloca accesul complet la platformă.</p>
        </article>
        <article class="step-card">
          <h3>Alimentează-ți contul</h3>
          <p>Depune minimum <?= MIN_DEPOSIT ?> <?= CURRENCY ?> prin transfer bancar, card sau e-wallet.</p>
        </article>
        <article class="step-card">
          <h3>Configurează strategia</h3>
          <p>Definește nivelul de risc și preferințele — manual sau cu automatizare asistată de AI.</p>
        </article>
        <article class="step-card">
          <h3>Începe să tranzacționezi</h3>
          <p>Intră pe piață cu grafice live, instrumente și suport când ai nevoie.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Deschide contul acum</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Depuneri</p>
      <h2 style="margin-bottom: 0.75rem;">Depune cu metode pe care le cunoști deja</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Carduri, e-wallet și transferuri bancare — protejate cu criptare SSL.</p>
      <?php
      $payment_context = 'depuneri și finanțare cont';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastructură de încredere</p>
        <h2>Construită cu parteneri de nivel industrial</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recenzii</p>
        <h2>Ce spun traderii</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Înregistrarea a fost foarte rapidă, comisioane transparente și asistență care răspunde cu adevărat. Experiență fluidă și de încredere — o platformă pe care o folosesc cu plăcere.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Trader independent</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Am încercat în sfârșit tranzacționarea cripto aici — fără regrete. Configurare rapidă și explicații clare. O alegere excelentă, mai ales dacă abia începi.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Pasionată de cripto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabilă și de încredere. Deschiderea contului simplă, termeni clari și echipă competentă. O experiență de tranzacționare surprinzător de confortabilă.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Operator de active digitale</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Tranzacționarea nu mai pare atât de complicată. Înregistrare simplă, comisioane clare și suport când ai nevoie. Ca începător, face cu adevărat diferența.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Investitoare privată</div>
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
        <h2>Întrebări frecvente</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Cum pot începe?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Creează un cont cu datele tale de bază, finalizează un scurt pas de verificare și depune minimum <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Vei debloca accesul complet la platformă — grafice live, instrumente de tranzacționare și onboarding ghidat.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Banii și datele mele sunt în siguranță?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Utilizăm criptare SSL, autentificare în doi pași și procese sigure prin furnizori de încredere. Datele tale personale sunt gestionate cu politici stricte de securitate la fiecare nivel.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Când pot retrage profiturile?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Solicită retrageri oricând din zona ta personală. Procesarea durează de obicei 1–3 zile lucrătoare. Comisioanele și termenele sunt afișate din timp — fără surprize.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Este necesară experiență de tranzacționare?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Absolut nu. Onboarding ghidat, tutoriale simple și instrumente asistate de AI te ajută să înveți în ritmul tău. Fie că ești la început sau experimentat, asistența este disponibilă 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Pe ce piețe pot tranzacționa?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Accesează criptomonede, forex, acțiuni globale și mărfuri dintr-o singură interfață. Date în timp real, analiză integrată și suport pentru strategii manuale sau automate.
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
        <p class="eyebrow">Platformă</p>
        <h2>Funcționalități principale dintr-o privire</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Motor de tranzacționare AI</div>
          <div class="specs-value">Analiză avansată de piață bazată pe machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Metode de depunere</div>
          <div class="specs-value">Carduri, transferuri bancare, PayPal, e-wallet</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Acces de pe dispozitive</div>
          <div class="specs-value">Web, tabletă și mobil — complet responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Acuratețea semnalelor</div>
          <div class="specs-value">Până la 85% pe strategiile AI acceptate</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Piețe</div>
          <div class="specs-value">Cripto, forex, acțiuni, mărfuri</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Configurare rapidă cu verificare ghidată</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Asistență</div>
          <div class="specs-value">Suport profesional 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contactează-ne</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">De încredere</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">O platformă gândită pentru cei care încep</h3>
          <p style="margin-top: 0.5rem; color: var(--text-muted); max-width: 42rem;">
            Onboarding ghidat, asistență dedicată și instrumente clare pentru a tranzacționa cu mai multă liniște.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Pregătit să tranzacționezi pe o platformă concepută pentru claritate?</h2>
        <p class="lead">Alătură-te traderilor privați și companiilor care cumpără, vând și gestionează active digitale cu încredere.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Creează-ți contul gratuit';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Platformă de tranzacționare AI');
$page_description = 'Tranzacționează criptomonede, forex și piețe globale cu ' . SITE_NAME . '. Analiză în timp real, semnale asistate de AI și o platformă proiectată pentru viteză și claritate.';
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
        <p class="eyebrow">Platformă de tranzacționare AI</p>
        <h1>Tranzacționează mai inteligent.<br><span class="text-accent">Reacționează mai rapid.</span></h1>
        <p class="lead">
          Noul standard pentru tranzacționarea crypto și multi-piață. Securitate avansată, costuri transparente,
          insight-uri ghidate de AI și o interfață care accelerează deciziile tale.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL securizat
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Suport 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Execuție rapidă
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Începe să tranzacționezi - min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
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
  <section class="stats" aria-label="Statistici ale platformei">
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
        <div class="stat-label">Țări suportate</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Prezentare generală a platformei de tranzacționare">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Platformă de tranzacționare</p>
        <h2>Grafice profesionale.<br>Pregătită pentru mobil.</h2>
        <p class="lead">
          Interfață curată inspirată de exchange-urile moderne, cu date BTC/USDT în timp real, gestionarea portofoliului
          și operativitate cu un singur clic. Proiectată să îți ofere încredere de la prima autentificare.
        </p>
        <ul class="platform-points">
          <li>Grafice cu lumânări în timp real</li>
          <li>Portofoliu și P/L dintr-o privire</li>
          <li>Tablou de bord securizat al contului</li>
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
        <p class="lead">Securitate, viteză și inteligență într-o platformă clară proiectată pentru traderii moderni.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Securitate la nivel bancar</h3>
          <p>Criptare SSL, 2FA și gestionarea sigură a fondurilor îți protejează datele și capitalul în fiecare etapă.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Semnale de piață AI</h3>
          <p>Insight-uri precise în timp real te ajută să identifici oportunități și să iei decizii mai rapide și informate.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Tranzacționare automatizată</h3>
          <p>Boții asistați de AI operează 24/7 pentru o execuție eficientă a strategiilor, păstrând controlul deplin.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Acces multi-piață</h3>
          <p>Tranzacționează crypto, forex, acțiuni și mărfuri într-un singur mediu integrat.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Execuție cu latență redusă</h3>
          <p>Infrastructură optimizată pentru execuția stabilă a ordinelor chiar și în perioade de volatilitate ridicată.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Interfață curată</h3>
          <p>Design minimalist care reduce distragerile și te lasă să te concentrezi pe strategie, nu pe navigare.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Piețe în timp real</p>
        <h2>Tranzacționează Bitcoin, Ethereum și alte active</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Prețuri live, indicatori avansați și o prezentare profesională a piețelor care te interesează.
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
        <h2>De la înregistrare la primul trade în câteva minute</h2>
        <p class="lead">Un parcurs clar, fără complexitate sau incertitudini inutile.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Creează-ți contul</h3>
          <p>Înregistrează-te cu datele tale și obține acces imediat și securizat la platformă.</p>
        </article>
        <article class="step-card">
          <h3>Verifică e-mailul</h3>
          <p>Confirmă adresa ta și deblochează experiența completă de tranzacționare.</p>
        </article>
        <article class="step-card">
          <h3>Depune fonduri</h3>
          <p>Depune minim <?= MIN_DEPOSIT ?> <?= CURRENCY ?> prin transfer bancar, card sau e-wallet.</p>
        </article>
        <article class="step-card">
          <h3>Setează strategia</h3>
          <p>Alege nivelul de risc și preferințele: manual sau cu automatizare asistată de AI.</p>
        </article>
        <article class="step-card">
          <h3>Începe să tranzacționezi</h3>
          <p>Intră pe piață cu grafice live, instrumente profesionale și suport mereu disponibil.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Deschide-ți contul acum</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Depuneri</p>
      <h2 style="margin-bottom: 0.75rem;">Depune cu metodele pe care le folosești deja</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Carduri, e-wallet-uri și transferuri bancare, protejate prin criptare SSL.</p>
      <?php
      $payment_context = 'depuneri și finanțarea contului';
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
        <h2>Construită cu parteneri de top din industrie</h2>
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
          <p class="review-text">Înregistrarea a durat câteva minute, costurile sunt transparente și suportul răspunde cu adevărat. O experiență fluidă și de încredere pe care mă pot baza.</p>
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
          <p class="review-text">Aici am început în sfârșit să tranzacționez crypto fără regrete. Configurare rapidă și totul explicat clar. O alegere excelentă, mai ales pentru un început bun.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Appassionata di crypto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabile e affidabile. Apertura conto semplice, condizioni chiare e un team competente. Un'esperienza di trading sorprendentemente confortevole.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Operatore di asset digitali</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Tranzacționarea nu mai pare atât de complicată. Înregistrare simplă, costuri clare și suport când ai nevoie. Pentru începători, face cu adevărat diferența.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Investitrice privata</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Întrebări frecvente -->
  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">Întrebări frecvente</p>
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
              Creează-ți contul cu datele de bază, finalizează o scurtă verificare și depune minim <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Vei avea acces complet la platformă: grafice live, instrumente de tranzacționare și onboarding asistat.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Fondurile și datele mele sunt în siguranță?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Utilizziamo crittografia SSL, autenticazione a due fattori e processi sicuri tramite provider affidabili. I tuoi dati personali vengono trattati secondo rigorosi standard di sicurezza.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Quando posso prelevare i profitti?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Poți solicita o retragere oricând din tabloul de bord. Procesarea durează de obicei între 1 și 3 zile lucrătoare. Costurile și termenele sunt întotdeauna indicate dinainte, fără surprize.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Devo avere esperienza di trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Absolut deloc. Onboarding asistat, ghiduri intuitive și instrumente asistate de AI te ajută să progresezi în ritmul tău. Pentru orice nivel de experiență, suportul este disponibil 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Su quali mercati posso operare?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Accesează criptomonede, forex, acțiuni globale și mărfuri într-o singură interfață. Date în timp real, analize integrate și suport pentru strategii manuale și automatizate.
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
        <h2>Funzionalita chiave a colpo d'occhio</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Motor de tranzacționare AI</div>
          <div class="specs-value">Analiză avansată a pieței cu machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Metode de finanțare</div>
          <div class="specs-value">Carduri de plată, transferuri bancare, PayPal, e-wallet-uri</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Accesso da dispositivo</div>
          <div class="specs-value">Web, tabletă și mobil, complet responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Precizia semnalelor</div>
          <div class="specs-value">Fino all'85% sulle strategie AI supportate</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Piețe</div>
          <div class="specs-value">Crypto, forex, acțiuni, mărfuri</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Configurare rapidă a contului cu verificare asistată</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Supporto</div>
          <div class="specs-value">Suport profesional 24/7 - <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contactează-ne</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Affidabile</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Evaluare <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> recenzii · Bazat pe <strong>1&nbsp;842</strong> evaluări
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Ești pregătit să tranzacționezi pe o platformă proiectată pentru claritate maximă?</h2>
        <p class="lead">Alătură-te traderilor privați și companiilor care cumpără, vând și gestionează active digitale cu încredere.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Creează-ți contul gratuito';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

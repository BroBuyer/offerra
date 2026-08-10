<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Platformă de trading AI');
$page_description = 'Tranzacționează crypto și alte piețe pe ' . SITE_NAME . ' — cont securizat, prețuri clare, instrumente AI utile și execuție rapidă a ordinelor.';
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
      <span class="tape-item"><strong>Spread-uri</strong> de la 0,1</span>
      <span class="tape-item"><strong>Viteză</strong> sub 40 ms</span>
      <span class="tape-item"><strong>Piețe</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> Platformă de trading cu AI</div>
        <h1>Tranzacționează crypto și alte piețe.<br><span class="text-accent">Începe cu <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          O platformă simplă pentru trading crypto și multi-asset — securitate solidă, prețuri clare,
          insight-uri AI utile și o interfață ușor de urmărit.
        </p>
        <div class="hero-badges" aria-label="Puncte forte ale platformei">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Conexiune criptată securizată (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Suport clienți disponibil 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Execuție rapidă a ordinelor
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Începe azi — depozit min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Creează cont</span>
          <span class="live-pill">Securizat</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Înregistrare în mai puțin de 2 minute';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Piețe live</p>
        <h2>Vezi prețurile în timp real. Începe când ești gata.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Urmărește Bitcoin, Ethereum și alte perechi majore într-un panou clar —
          apoi deschide contul și plasează primul ordin.
        </p>
        <a href="sign.php" class="btn btn-primary">Deschide accesul la piețe</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Prețuri de piață live">
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

  <section class="platform-section" id="platform" aria-label="Previzualizare platformă de trading">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Platformă</p>
        <h2>Grafice clare.<br>Gata de tranzacționat.</h2>
        <p class="lead">
          Ecran de trading prietenos pe mobil cu grafice live, profit și pierdere
          și ordine simple dintr-o atingere — ușor de înțeles de la prima autentificare.
        </p>
        <ul class="platform-points">
          <li>Grafice live și prețuri de piață</li>
          <li>Soldul portofoliului dintr-o privire</li>
          <li>Panou de cont securizat cu 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Deschide platforma</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Funcții</p>
        <h2>Ce obții cu <?= e(SITE_NAME) ?></h2>
        <p class="lead">Securitate, viteză și instrumente clare — fără un ecran aglomerat.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Securitate puternică a contului</h3>
            <p>Criptarea SSL, autentificarea în doi pași și fluxurile de fonduri protejate îți păstrează banii și datele mai în siguranță.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>Insight-uri AI de piață</h3>
            <p>Semnale utile pentru timing și trenduri — utile când prețurile se mișcă rapid.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automatizare când vrei</h3>
            <p>Boții opționali de trading pot urma regulile tale non-stop — tu rămâi la control.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Mai multe piețe într-un singur loc</h3>
            <p>Crypto, forex, acțiuni și mărfuri de pe o singură platformă simplă.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Procesare rapidă a ordinelor</h3>
            <p>Construit pentru plasarea fiabilă a ordinelor chiar și când piețele sunt aglomerate.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Aspect curat și simplu</h3>
            <p>Mai puțin zgomot vizual — mai mult spațiu pentru grafic și următorul ordin.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Primii pași</p>
        <h2>Cinci pași până la prima tranzacție</h2>
        <p class="lead">O cale clară de la înregistrare la piețele live.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Deschide un cont</h3>
            <p>Trimite datele și obține acces securizat la platformă.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Confirmă e-mailul</h3>
            <p>Verifică adresa pentru a debloca mediul complet de trading.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Adaugă fonduri</h3>
            <p>Depune de la <?= MIN_DEPOSIT ?> <?= CURRENCY ?> cu cardul, transfer bancar sau e-wallet.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Alege cum tranzacționezi</h3>
            <p>Tranzacționează manual sau folosește instrumente asistate de AI cu limite clare pe care le setezi.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Tranzacționează live</h3>
            <p>Folosește grafice, instrumente și suport 24/7 oricând ai nevoie de ajutor.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Începe acum</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Plăți</p>
      <h2 style="margin-bottom: 0.75rem;">Depune cu metode pe care le cunoști deja</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Carduri, portofele și transferuri bancare — criptate end-to-end.</p>
      <?php
      $payment_context = 'alimentare cont și depozite';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastructură</p>
        <h2>Parteneri de infrastructură</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recenzii</p>
        <h2>Ce spun traderii</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Înregistrarea a fost rapidă, taxele clare, iar suportul a răspuns. Pare o platformă cu care pot rămâne.</p>
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
          <p class="review-text">Am încercat crypto aici după ce am sărit între aplicații — configurarea a fost clară, iar layout-ul graficului are în sfârșit sens.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Trader crypto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Ordinele trec fiabil, termenii sunt în limbaj clar, iar echipa cunoaște produsul. O platformă solidă.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Trader de active digitale</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Ca începător am avut nevoie de claritate mai mult decât de efecte. Înregistrare, taxe și ajutor când mă blocam — a fost suficient.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Investitor privat</div>
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
        <h2>Înainte să alimentezi contul</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Cum încep?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Creează un cont, finalizează o scurtă verificare și depune de la <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Astfel deblochezi graficele, instrumentele și onboarding-ul ghidat.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Cum sunt protejați banii și datele mele?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Folosim criptare SSL, autentificare în doi pași și procesatori de plăți de încredere, conform unor politici stricte privind datele.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Cât durează retragerile?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Solicită plățile oricând din panou. Majoritatea metodelor se finalizează în 1–3 zile lucrătoare, cu taxele afișate dinainte.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Am nevoie de experiență anterioară în trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nu. Pașii ghidați și instrumentele asistate de AI te ajută să înveți în ritmul tău, cu suport 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ce piețe sunt disponibile?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Criptomonede, forex, acțiuni globale și mărfuri — manual sau automat — dintr-o singură interfață.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Prezentare</p>
        <h2>Platforma pe scurt</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Instrumente AI</div>
          <div class="specs-value">Analiză de piață cu insight-uri de machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Depuneri</div>
          <div class="specs-value">Carduri, transferuri bancare, PayPal, e-wallet-uri</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispozitive</div>
          <div class="specs-value">Web, tabletă, mobil — pe deplin responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Calitatea semnalelor AI</div>
          <div class="specs-value">Până la 85% pe strategiile suportate*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Piețe</div>
          <div class="specs-value">Crypto, forex, acțiuni, mărfuri</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Configurare rapidă cu verificare ghidată</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Suport</div>
          <div class="specs-value">Suport 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contactează-ne</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Evaluat</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> scor</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> recenzii · Pe baza a <strong>1,842</strong> evaluări
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Ești gata pentru un mod mai clar de a tranzacționa?</h2>
        <p class="lead">Alătură-te traderilor care vor piețe live, taxe clare și o platformă ușor de folosit.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Deschide cont</span>
          <span class="live-pill">Gratuit</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Creează-ți contul gratuit';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

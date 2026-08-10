<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI trgovačka platforma');
$page_description = 'Trgujte kriptovalutama i drugim tržištima na ' . SITE_NAME . ' — siguran račun, jasne cijene, korisni AI alati i brza izvršenja naloga.';
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
      <span class="tape-item"><strong>Spreadovi</strong> od 0,1</span>
      <span class="tape-item"><strong>Brzina</strong> ispod 40 ms</span>
      <span class="tape-item"><strong>Tržišta</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> Trgovačka platforma s AI</div>
        <h1>Trgujte kriptovalutama i drugim tržištima.<br><span class="text-accent">Započnite s <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          Jednostavna platforma za kripto i multi-asset trgovanje — jaka sigurnost, jasne cijene,
          korisni AI uvidi i sučelje koje je lako pratiti.
        </p>
        <div class="hero-badges" aria-label="Istaknute značajke">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Sigurna šifrirana veza (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Korisnička podrška dostupna 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Brza izvršenja naloga
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Započnite danas — min. depozit <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Otvorite račun</span>
          <span class="live-pill">Sigurno</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Registracija u manje od 2 minute';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Živa tržišta</p>
        <h2>Pratite cijene u stvarnom vremenu. Započnite kad ste spremni.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Pratite Bitcoin, Ethereum i druge glavne parove u preglednoj ploči —
          zatim otvorite račun i postavite prvi nalog.
        </p>
        <a href="sign.php" class="btn btn-primary">Otvorite pristup tržištima</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Cijene tržišta uživo">
        <div class="exchange-panel-header">
          <span>Tržišta</span>
          <span class="live-dot">Uživo</span>
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

  <section class="platform-section" id="platform" aria-label="Pregled trgovačke platforme">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Platforma</p>
        <h2>Jasni grafikoni.<br>Spremni za trgovanje.</h2>
        <p class="lead">
          Trgovački zaslon prilagođen mobitelu sa živim grafikonima, dobiti i gubitkom
          te jednostavnim nalozima jednim dodirom — lako za razumjeti od prve prijave.
        </p>
        <ul class="platform-points">
          <li>Živi grafikoni i cijene tržišta</li>
          <li>Stanje portfelja na prvi pogled</li>
          <li>Sigurna ploča računa s 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Otvorite platformu</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Značajke</p>
        <h2>Što dobivate s <?= e(SITE_NAME) ?></h2>
        <p class="lead">Sigurnost, brzina i jasni alati — bez prenatrpanog zaslona.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Jaka sigurnost računa</h3>
            <p>SSL enkripcija, dvofaktorska prijava i zaštićeni tokovi sredstava čine vaš novac i podatke sigurnijima.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>AI uvidi u tržište</h3>
            <p>Korisni signali za timing i trendove — korisno kad se cijene brzo mijenjaju.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automatizacija kad je želite</h3>
            <p>Opcionalni trgovački botovi mogu slijediti vaša pravila non-stop — vi ostajete na kontroli.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Više tržišta na jednom mjestu</h3>
            <p>Kripto, forex, dionice i robe s jedne jednostavne platforme.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Brza obrada naloga</h3>
            <p>Izgrađeno za pouzdano postavljanje naloga čak i kad su tržišta zauzeta.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Čist, jednostavan raspored</h3>
            <p>Manje vizualne buke — više prostora za grafikon i sljedeći nalog.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Početak</p>
        <h2>Pet koraka do prvog trgovanja</h2>
        <p class="lead">Jasan put od registracije do živih tržišta.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Otvorite račun</h3>
            <p>Pošaljite podatke i dobijte siguran pristup platformi.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Potvrdite e-poštu</h3>
            <p>Potvrdite adresu kako biste otključali puno trgovačko okruženje.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Dodajte sredstva</h3>
            <p>Uplata od <?= MIN_DEPOSIT ?> <?= CURRENCY ?> karticom, bankovnim transferom ili e-novčanikom.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Odaberite način trgovanja</h3>
            <p>Trgujte ručno ili koristite AI alate s jasnim limitima koje postavite.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Trgujte uživo</h3>
            <p>Koristite grafikone, alate i podršku 24/7 kad god trebate pomoć.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Započnite sada</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Plaćanja</p>
      <h2 style="margin-bottom: 0.75rem;">Uplatite načinima koje već poznajete</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kartice, novčanici i bankovni transferi — šifrirano od kraja do kraja.</p>
      <?php
      $payment_context = 'financiranje računa i uplate';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastruktura</p>
        <h2>Partneri infrastrukture</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recenzije</p>
        <h2>Što traderi kažu</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registracija je bila brza, naknade jasne, a podrška je odgovorila. Čini se kao platforma uz koju mogu ostati.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Neovisni trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Isprobao sam kripto ovdje nakon skakanja među aplikacijama — postavka je bila jasna, a raspored grafikona konačno ima smisla.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Kripto trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Nalozi prolaze pouzdano, uvjeti su jasnim jezikom, a tim poznaje proizvod. Solidna platforma.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Trader digitalnih sredstava</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Kao početnik trebao sam jasnoću više od efekata. Registracija, naknade i pomoć kad zapnem — to je bilo dovoljno.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Privatni investitor</div>
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
        <h2>Prije nego uplatite račun</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako započeti?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Otvorite račun, dovršite kratku verifikaciju i uplatite od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Time otključavate grafikone, alate i vođeni onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako su zaštićeni moj novac i podaci?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Koristimo SSL enkripciju, dvofaktorsku autentifikaciju i pouzdane platne pružatelje prema strogim politikama podataka.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Koliko traju isplate?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Isplate zatražite bilo kada s nadzorne ploče. Većina metoda se namiruje u 1–3 radna dana uz unaprijed prikazane naknade.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Trebam li prethodno iskustvo u trgovanju?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ne. Vođeni koraci i AI alati pomažu vam učiti vlastitim tempom uz podršku 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Koja su tržišta dostupna?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kriptovalute, forex, globalne dionice i robe — ručno ili automatski — s jednog sučelja.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Pregled</p>
        <h2>Platforma na prvi pogled</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI alati</div>
          <div class="specs-value">Analiza tržišta s uvidima strojnog učenja</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Uplate</div>
          <div class="specs-value">Kartice, bankovni transferi, PayPal, e-novčanici</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Uređaji</div>
          <div class="specs-value">Web, tablet, mobitel — potpuno responzivno</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Kvaliteta AI signala</div>
          <div class="specs-value">Do 85% na podržanim strategijama*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Tržišta</div>
          <div class="specs-value">Kripto, forex, dionice, robe</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Brzo postavljanje uz vođenu verifikaciju</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Podrška</div>
          <div class="specs-value">Podrška 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontaktirajte nas</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Ocjena</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> ocjena</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> recenzija · Na temelju <strong>1,842</strong> ocjena
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Spremni za jasniji način trgovanja?</h2>
        <p class="lead">Pridružite se traderima koji žele živa tržišta, jasne naknade i platformu koja ostaje jednostavna za korištenje.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Otvorite račun</span>
          <span class="live-pill">Besplatno</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Stvorite besplatni račun';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

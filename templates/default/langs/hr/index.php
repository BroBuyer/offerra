<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Trgovačka platforma s AI-jem');
$page_description = 'Trgujte kripto, forexom i globalnim tržištima s ' . SITE_NAME . '. Analitika u stvarnom vremenu, signali uz AI podršku i platforma dizajnirana za brzinu i jasnoću.';
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
        <p class="eyebrow">Trgovačka platforma s AI-jem</p>
        <h1>Trgujte pametnije.<br><span class="text-accent">Djelujte brže.</span></h1>
        <p class="lead">
          Novi standard u kripto i multi-tržišnom trgovanju. Napredna sigurnost, transparentne naknade,
          uvidi vođeni AI-jem i sučelje koje vam ne stoji na putu.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL zaštićeno
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Podrška 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Brza izvršenja
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Počnite trgovati — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Otvorite račun za 2 minute';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Statistike platforme">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Dostupnih valuta</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Provjerenih korisnika</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Obujam trgovanja</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Podržanih država</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Pregled trgovačke platforme">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Trgovačka platforma</p>
        <h2>Profesionalni grafikoni.<br>Spremna za mobitel.</h2>
        <p class="lead">
          Čisto sučelje poput moderne burze — podaci BTC/USDT uživo, praćenje portfelja
          i izvršenje jednim dodirom. Dizajnirano da vam daje povjerenje od prvog prijave.
        </p>
        <ul class="platform-points">
          <li>Grafikoni svijeća u stvarnom vremenu</li>
          <li>Portfelj i P/L na prvi pogled</li>
          <li>Sigurna nadzorna ploča računa</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Isprobajte platformu</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Zašto <?= e(SITE_NAME) ?></p>
        <h2>Sve što vam treba za trgovanje s povjerenjem</h2>
        <p class="lead">Sigurnost, brzina i inteligencija — u jednoj jasnoj platformi dizajniranoj za moderne trgovce.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Sigurnost bankovne razine</h3>
          <p>SSL enkripcija, 2FA i sigurno rukovanje sredstvima štite vaše podatke i kapital na svakom koraku.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI tržišni signali</h3>
          <p>Točni uvidi u stvarnom vremenu pomažu vam prepoznati prilike i donositi informirane odluke brže.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatizirano trgovanje</h3>
          <p>Botovi uz AI podršku rade non-stop kako bi učinkovito izvršavali strategije dok vi zadržavate kontrolu.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Pristup više tržišta</h3>
          <p>Trgujte kripto, forexom, dionicama i rovinama iz jednog ujedinjenog okruženja.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Izvršenje niske latencije</h3>
          <p>Optimizirana infrastruktura osigurava stabilno izvršenje naloga čak i tijekom vrhunaca tržišne aktivnosti.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Čisto sučelje</h3>
          <p>Minimalistički dizajn smanjuje šum kako biste se mogli fokusirati na strategiju, a ne na navigaciju.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Tržišta uživo</p>
        <h2>Trgujte Bitcoinom, Ethereumom i više</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Cijene u stvarnom vremenu, napredni indikatori i profesionalni pregled tržišta koja vas zanimaju.
        </p>
        <a href="sign.php" class="btn btn-primary">Pristupite tržištima</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Cijene tržišta uživo">
        <div class="exchange-panel-header">
          <span>Tržišta</span>
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
        <p class="eyebrow">Kako započeti</p>
        <h2>Od registracije do prve trgovine u nekoliko minuta</h2>
        <p class="lead">Vođeni put — bez složenosti, bez nagađanja.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Stvorite račun</h3>
          <p>Registrirajte se svojim podacima i odmah dobijte siguran pristup platformi.</p>
        </article>
        <article class="step-card">
          <h3>Potvrdite e-poštu</h3>
          <p>Potvrdite adresu kako biste otključali potpuno trgovačko okruženje.</p>
        </article>
        <article class="step-card">
          <h3>Uplatite sredstva</h3>
          <p>Uplatite minimalno <?= MIN_DEPOSIT ?> <?= CURRENCY ?> bankovnim transferom, karticom ili e-novčanikom.</p>
        </article>
        <article class="step-card">
          <h3>Postavite strategiju</h3>
          <p>Odredite razinu rizika i preference — ručno ili uz AI automatizaciju.</p>
        </article>
        <article class="step-card">
          <h3>Počnite trgovati</h3>
          <p>Uđite na tržište s grafikonima uživo, alatima i podrškom kad god vam zatreba.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Otvorite račun odmah</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Financiranje</p>
      <h2 style="margin-bottom: 0.75rem;">Uplatite načinima kojima već vjerujete</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kartice, e-novčanici i bankovni transferi — zaštićeni SSL enkripcijom.</p>
      <?php
      $payment_context = 'depoziti i financiranje računa';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Pouzdana infrastruktura</p>
        <h2>Izgrađena na partnerskim standardima industrije</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Recenzije</p>
        <h2>Što kažu trgovci</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registracija je trajala nekoliko minuta, naknade su transparentne, a podrška stvarno odgovara. Glatko, pouzdano iskustvo — platforma s kojom rado nastavljam.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Neovisni trgovac</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Konačno sam ovdje isprobao kripto trgovanje — bez žaljenja. Postavljanje je bilo brzo, sve jasno objašnjeno. Odličan izbor, posebno ako tek počinjete.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Kripto entuzijast</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabilno i pouzdano. Otvaranje računa jednostavno, uvjeti jasni, a tim zna svoje poslo. Iznenađujuće ugodno iskustvo trgovanja.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Operater digitalne imovine</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Trgovanje više ne djeluje preplavljujuće. Jednostavna registracija, jasne naknade i podrška kad mi zatreba. Kao početniku, to znači sve.</p>
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

  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Česta pitanja</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako mogu započeti?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Stvorite račun s osnovnim podacima, dovršite kratki korak verifikacije i uplatite minimalno <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Otključat ćete punu platformu — grafikone uživo, alate za trgovanje i vođenu registraciju.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jesu li moj novac i podaci sigurni?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Koristimo SSL enkripciju, dvofaktorsku autentifikaciju i sigurnu obradu putem pouzdanih pružatelja. Vaši osobni podaci obrađuju se prema strogim sigurnosnim pravilima na svim razinama.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kada mogu podići dobit?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Zatražite isplatu bilo kada s nadzorne ploče. Obrada obično traje 1–3 radna dana. Primjenjive naknade i rokovi uvijek su prikazani unaprijed — bez iznenađenja.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Trebam li iskustvo u trgovanju?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Uopće ne. Vođena registracija, jednostavni vodiči i alati uz AI podršku pomažu vam učiti vlastitim tempom. Bilo da ste početnik ili iskusni, podrška je dostupna 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Na kojim tržištima mogu trgovati?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Pristupite kriptovalutama, forexu, globalnim dionicama i rovinama iz jednog sučelja. Podaci u stvarnom vremenu, integrirana analitika i podrška za ručne i automatizirane strategije.
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
        <h2>Glavne mogućnosti na prvi pogled</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI trgovački motor</div>
          <div class="specs-value">Napredna tržišna analiza uz strojno učenje</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Načini financiranja</div>
          <div class="specs-value">Kreditne kartice, bankovni transferi, PayPal, e-novčanici</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Pristup s uređaja</div>
          <div class="specs-value">Web, tablet i mobitel — potpuno responzivno</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Točnost signala</div>
          <div class="specs-value">Do 85% na podržanim AI strategijama</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Tržišta</div>
          <div class="specs-value">Kripto, forex, dionice, rovina</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Registracija</div>
          <div class="specs-value">Brzo postavljanje računa s vođenom verifikacijom</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Podrška</div>
          <div class="specs-value">Profesionalna pomoć 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontaktirajte nas</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Pouzdano</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Recenzije <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> recenzije · Na temelju <strong>1&nbsp;842</strong> ocjena
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Spremni trgovati na platformi dizajniranoj za jasnoću?</h2>
        <p class="lead">Pridružite se privatnim trgovcima i tvrtkama koje kupuju, prodaju i upravljaju digitalnom imovinom s povjerenjem.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Stvorite besplatni račun';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

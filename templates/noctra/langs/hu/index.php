<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI kereskedési platform');
$page_description = 'Kereskedjen kriptóval és más piacokkal a(z) ' . SITE_NAME . ' platformon — biztonságos fiók, átlátható díjak, hasznos AI eszközök és gyors megbízásvégrehajtás.';
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
      <span class="tape-item"><strong>Spreadek</strong> 0,1-től</span>
      <span class="tape-item"><strong>Sebesség</strong> 40 ms alatt</span>
      <span class="tape-item"><strong>Piacok</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> AI-alapú kereskedési platform</div>
        <h1>Kereskedjen kriptóval és más piacokkal.<br><span class="text-accent">Kezdjen a(z) <?= e(SITE_NAME) ?> segítségével</span></h1>
        <p class="lead">
          Egyszerű platform kripto- és többeszközös kereskedéshez — erős biztonság, átlátható díjak,
          hasznos AI betekintések és könnyen követhető felület.
        </p>
        <div class="hero-badges" aria-label="Platformelőnyök">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Biztonságos titkosított kapcsolat (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Ügyfélszolgálat 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Gyors megbízásvégrehajtás
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Kezdje ma — min. befizetés <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Fiók létrehozása</span>
          <span class="live-pill">Biztonságos</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Regisztráció 2 perc alatt';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Élő piacok</p>
        <h2>Kövesse az árakat valós időben. Kezdjen, amikor készen áll.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Kövesse a Bitcoint, az Ethereumot és más fő párokat egy átlátható panelen —
          majd nyissa meg fiókját, és adja le első megbízását.
        </p>
        <a href="sign.php" class="btn btn-primary">Piaci hozzáférés megnyitása</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Élő piaci árak">
        <div class="exchange-panel-header">
          <span>Piacok</span>
          <span class="live-dot">Élő</span>
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

  <section class="platform-section" id="platform" aria-label="Kereskedési platform előnézet">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Platform</p>
        <h2>Átlátható chartok.<br>Készen a kereskedésre.</h2>
        <p class="lead">
          Mobilbarát kereskedési képernyő élő chartokkal, nyereséggel és veszteséggel,
          valamint egyszerű egyérintéses megbízásokkal — az első bejelentkezéstől érthető.
        </p>
        <ul class="platform-points">
          <li>Élő chartok és piaci árak</li>
          <li>Portfólióegyenleg egy pillantásra</li>
          <li>Biztonságos fiókpanel 2FA-val</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Platform megnyitása</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Funkciók</p>
        <h2>Amit a(z) <?= e(SITE_NAME) ?> nyújt</h2>
        <p class="lead">Biztonság, sebesség és átlátható eszközök — zsúfolt képernyő nélkül.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Erős fiókbiztonság</h3>
            <p>Az SSL titkosítás, a kétfaktoros bejelentkezés és a védett pénzmozgások biztonságosabban tartják a pénzét és adatait.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>AI piaci betekintések</h3>
            <p>Hasznos jelek az időzítéshez és trendekhez — hasznos, amikor az árak gyorsan mozognak.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automatizálás, amikor szeretné</h3>
            <p>Opcionális kereskedőbotok tarthatják a szabályait éjjel-nappal — Ön marad az irányításban.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Több piac egy helyen</h3>
            <p>Kripto, forex, részvények és árucikkek egy egyszerű platformról.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Gyors megbízáskezelés</h3>
            <p>Megbízható megbízásadásra épült, még forgalmas piacokon is.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Tiszta, egyszerű elrendezés</h3>
            <p>Kevesebb vizuális zaj — több hely a chartnak és a következő megbízásnak.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Első lépések</p>
        <h2>Öt lépés az első kereskedésig</h2>
        <p class="lead">Világos út a regisztrációtól az élő piacokig.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Nyisson fiókot</h3>
            <p>Küldje el adatait, és kapjon biztonságos hozzáférést a platformhoz.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>E-mail megerősítése</h3>
            <p>Erősítse meg címét a teljes kereskedési környezet feloldásához.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Pénzeszközök hozzáadása</h3>
            <p>Befizetéstól <?= MIN_DEPOSIT ?> <?= CURRENCY ?> kártyával, banki átutalással vagy e-pénztárcával.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Válassza ki a kereskedés módját</h3>
            <p>Kereskedjen manuálisan, vagy használjon AI-eszközöket az Ön által beállított egyértelmű limitekkel.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Élő kereskedés</h3>
            <p>Használjon chartokat, eszközöket és 24/7 támogatást, amikor segítségre van szüksége.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Kezdés most</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Fizetések</p>
      <h2 style="margin-bottom: 0.75rem;">Fizessen már ismert módokon</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kártyák, pénztárcák és banki átutalások — végponttól végpontig titkosítva.</p>
      <?php
      $payment_context = 'számlatöltés és befizetések';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastruktúra</p>
        <h2>Infrastruktúra-partnerek</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Vélemények</p>
        <h2>Mit mondanak a kereskedők</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">A regisztráció gyors volt, a díjak egyértelműek, a támogatás válaszolt. Olyan platform, amellyel szívesen maradok.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Független kereskedő</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Több app után itt próbáltam a kriptót — a beállítás egyértelmű volt, és a chart elrendezése végre érthető.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Kripto kereskedő</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">A megbízások megbízhatóan mennek át, a feltételek érthetőek, a csapat ismeri a terméket. Szolid platform.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Digitális eszköz kereskedő</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Kezdőként inkább az átláthatóság kellett, nem a látvány. Regisztráció, díjak és segítség, ha elakadtam — ennyi elég volt.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Magánbefektető</div>
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
        <h2>Mielőtt feltöltené a fiókját</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hogyan kezdhetek?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Hozzon létre fiókot, fejezze be a rövid ellenőrzést, és helyezzen el legalább <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Ezzel feloldja a chartokat, eszközöket és az irányított onboardingt.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hogyan védik a pénzemet és az adataimat?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL titkosítást, kétfaktoros hitelesítést és megbízható fizetési szolgáltatókat használunk szigorú adatkezelési szabályzat mellett.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Mennyi ideig tartanak a kifizetések?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              A kifizetéseket bármikor kérheti az irányítópultról. A legtöbb módszer 1–3 munkanap alatt teljesül, a díjak előre láthatók.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Szükségem van előzetes kereskedési tapasztalatra?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nem. Irányított lépések és AI-eszközök segítenek saját tempóban tanulni, 24/7 támogatással.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Mely piacok érhetők el?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kriptovaluták, forex, globális részvények és árucikkek — manuálisan vagy automatikusan — egy felületről.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Áttekintés</p>
        <h2>Platform egy pillantásra</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI eszközök</div>
          <div class="specs-value">Piacelemzés gépi tanulásos betekintésekkel</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Befizetés</div>
          <div class="specs-value">Kártyák, banki átutalások, PayPal, e-pénztárcák</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Eszközök</div>
          <div class="specs-value">Web, tablet, mobil — teljesen reszponzív</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">AI jelminőség</div>
          <div class="specs-value">Akár 85% a támogatott stratégiáknál*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Piacok</div>
          <div class="specs-value">Kripto, forex, részvények, árucikkek</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Gyors beállítás irányított ellenőrzéssel</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Támogatás</div>
          <div class="specs-value">24/7 támogatás — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kapcsolat</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Értékelés</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> értékelés</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> vélemény · Alapja <strong>1,842</strong> értékelés
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Készen áll az átláthatóbb kereskedésre?</h2>
        <p class="lead">Csatlakozzon azokhoz, akik élő piacokat, átlátható díjakat és könnyen használható platformot szeretnének.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Fiók megnyitása</span>
          <span class="live-pill">Ingyenes</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Hozza létre ingyenes fiókját';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

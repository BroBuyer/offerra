<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Tekoälyllä toimiva kaupankäyntialusta');
$page_description = 'Käy kauppaa kryptolla ja muilla markkinoilla ' . SITE_NAME . '-palvelussa — turvallinen tili, selkeät hinnat, hyödylliset tekoälytyökalut ja nopea toimeksiantojen toteutus.';
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
      <span class="tape-item"><strong>Spreadit</strong> alkaen 0,1</span>
      <span class="tape-item"><strong>Nopeus</strong> alle 40 ms</span>
      <span class="tape-item"><strong>Markkinat</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> Tekoälyllä toimiva kaupankäyntialusta</div>
        <h1>Käy kauppaa kryptolla ja muilla markkinoilla.<br><span class="text-accent">Aloita <?= e(SITE_NAME) ?>-palvelulla</span></h1>
        <p class="lead">
          Yksinkertainen alusta krypto- ja monivarakaupankäyntiin — vahva tietoturva, selkeät hinnat,
          hyödylliset tekoälynäkemykset ja helppokäyttöinen käyttöliittymä.
        </p>
        <div class="hero-badges" aria-label="Alustan edut">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Turvallinen salattu yhteys (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Asiakastuki saatavilla 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Nopea toimeksiantojen toteutus
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Aloita tänään — min. talletus <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Luo tili</span>
          <span class="live-pill">Turvallinen</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Rekisteröidy alle 2 minuutissa';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Live-markkinat</p>
        <h2>Näe hinnat reaaliajassa. Aloita, kun olet valmis.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Seuraa Bitcoinia, Ethereumia ja muita tärkeimpiä pareja selkeässä markkinanäkymässä —
          avaa sitten tilisi ja tee ensimmäinen kauppa.
        </p>
        <a href="sign.php" class="btn btn-primary">Avaa markkinapääsy</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Live-markkinahinnat">
        <div class="exchange-panel-header">
          <span>Markkinat</span>
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

  <section class="platform-section" id="platform" aria-label="Kaupankäyntialustan esikatselu">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Alusta</p>
        <h2>Selkeät kaaviot.<br>Valmiina kaupankäyntiin.</h2>
        <p class="lead">
          Mobiiliystävällinen kaupankäyntinäkymä live-kaavioilla, voitto- ja tappioseurannalla
          sekä yksinkertaisilla yhden napin toimeksiannoilla — helppo ymmärtää heti ensimmäisestä kirjautumisesta.
        </p>
        <ul class="platform-points">
          <li>Live-kaaviot ja markkinahinnat</li>
          <li>Salkun saldo yhdellä silmäyksellä</li>
          <li>Turvallinen tilinäkymä 2FA:lla</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Avaa alusta</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Ominaisuudet</p>
        <h2>Mitä saat <?= e(SITE_NAME) ?>-palvelulla</h2>
        <p class="lead">Tietoturvaa, nopeutta ja selkeitä työkaluja — ilman sekavaa näyttöä.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Vahva tilin tietoturva</h3>
            <p>SSL-salaus, kaksivaiheinen kirjautuminen ja suojatut rahaliikenteen kulut pitävät rahasi ja tietosi turvassa.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>Tekoälyn markkinanäkemykset</h3>
            <p>Hyödylliset signaalit nostavat esiin ajoitusta ja trendejä — etenkin kun hinnat liikkuvat nopeasti.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automaatio, kun sitä tarvitset</h3>
            <p>Valinnaiset kaupankäyntibotit voivat noudattaa sääntöjäsi ympäri vuorokauden — sinä pysyt ohjaksissa.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Useita markkinoita yhdessä paikassa</h3>
            <p>Krypto, valuutat, osakkeet ja raaka-aineet yhdeltä selkeältä alustalta.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Nopea toimeksiantojen käsittely</h3>
            <p>Rakennettu luotettavaan toimeksiantojen lähettämiseen myös kiireisinä markkina-aikoina.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Siisti, yksinkertainen asettelu</h3>
            <p>Vähemmän visuaalista hälyä — enemmän tilaa kaaviolle ja seuraavalle toimeksiannolle.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Aloittaminen</p>
        <h2>Viisi askelta ensimmäiseen kauppaan</h2>
        <p class="lead">Selkeä polku rekisteröitymisestä live-markkinoille.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Avaa tili</h3>
            <p>Lähetä tietosi ja saat turvallisen pääsyn alustalle.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Vahvista sähköposti</h3>
            <p>Vahvista osoitteesi avataksesi täyden kaupankäyntiympäristön.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Lisää varoja</h3>
            <p>Talleta alkaen <?= MIN_DEPOSIT ?> <?= CURRENCY ?> kortilla, tilisiirrolla tai e-lompakolla.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Valitse tapasi käydä kauppaa</h3>
            <p>Käy kauppaa manuaalisesti tai käytä tekoälyä hyödyntäviä työkaluja selkeillä rajoilla, jotka asetat itse.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Käy kauppaa livenä</h3>
            <p>Käytä kaavioita, työkaluja ja 24/7-tukea aina, kun tarvitset apua.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Aloita nyt</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Maksut</p>
      <h2 style="margin-bottom: 0.75rem;">Talleta tutuilla maksutavoilla</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kortit, lompakot ja tilisiirrot — salattu päästä päähän.</p>
      <?php
      $payment_context = 'tilin rahoitus ja talletukset';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastruktuuri</p>
        <h2>Infrastruktuurikumppanit</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Arvostelut</p>
        <h2>Mitä käyttäjät sanovat</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Rekisteröityminen oli nopeaa, kulut selkeitä ja tuki vastasi. Tuntuu alustalta, jota voin käyttää pidempäänkin.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Itsenäinen sijoittaja</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Kokeilin kryptoa täällä vaihdettuani sovelluksia — käyttöönotto oli selkeää ja kaavionäkymä tuntuu vihdoin järkevältä.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Kryptokaupankäyttäjä</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Toimeksiannot menevät läpi luotettavasti, ehdot ovat selkeällä kielellä ja tiimi tuntee tuotteen. Vakaa alusta.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Digitaalisten varojen sijoittaja</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Aloittelijana tarvitsin selkeyttä enemmän kuin tehosteita. Rekisteröityminen, kulut ja apu jumittuessa — se riitti.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Yksityissijoittaja</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">UKK</p>
        <h2>Ennen kuin rahoitat tilisi</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Miten aloitan?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Luo tili, tee lyhyt vahvistus ja talleta alkaen <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Se avaa kaaviot, työkalut ja ohjatun aloituksen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Miten rahani ja tietoni suojataan?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Käytämme SSL-salausta, kaksivaiheista tunnistautumista ja luotettavia maksupalveluja tiukkojen tietosuojakäytäntöjen mukaisesti.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kuinka kauan nostot kestävät?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Voit pyytää nostoja milloin tahansa hallintapaneelista. Useimmat tavat valmistuvat 1–3 arkipäivässä, ja kulut näytetään etukäteen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Tarvitsenko aiempaa kaupankäyntikokemusta?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Et. Ohjatut vaiheet ja tekoälyä hyödyntävät työkalut auttavat oppimaan omaan tahtiisi, ja 24/7-tuki on saatavilla.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Mitkä markkinat ovat saatavilla?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kryptovaluutat, valuutat, kansainväliset osakkeet ja raaka-aineet — manuaalisesti tai automaattisesti — yhdeltä käyttöliittymältä.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Yhteenveto</p>
        <h2>Alusta yhdellä silmäyksellä</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Tekoälytyökalut</div>
          <div class="specs-value">Markkina-analyysi koneoppimisen näkemyksillä</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Rahoitus</div>
          <div class="specs-value">Kortit, tilisiirrot, PayPal, e-lompakot</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Laitteet</div>
          <div class="specs-value">Selain, tabletti, mobiili — täysin responsiivinen</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Tekoälysignaalien laatu</div>
          <div class="specs-value">Jopa 85 % tuetuilla strategioilla*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markkinat</div>
          <div class="specs-value">Krypto, valuutat, osakkeet, raaka-aineet</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Aloitus</div>
          <div class="specs-value">Nopea käyttöönotto ohjatulla vahvistuksella</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Tuki</div>
          <div class="specs-value">24/7-tuki — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Ota yhteyttä</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Arvioitu</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> arvio</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> arvostelua · Perustuu <strong>1 842</strong> arvioon
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Valmis selkeämpään tapaan käydä kauppaa?</h2>
        <p class="lead">Liity käyttäjiin, jotka haluavat live-markkinat, selkeät kulut ja alustan, joka pysyy helppokäyttöisenä.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Avaa tili</span>
          <span class="live-pill">Ilmainen</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Luo ilmainen tilisi';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Tekoälyllä toimiva kaupankäyntialusta');
$page_description = 'Käy kauppaa kryptolla, forexillä ja maailmanmarkkinoilla ' . SITE_NAME . '-alustalla. Reaaliaikainen analytiikka, tekoälyn tukemat signaalit ja alusta, joka on rakennettu nopeutta ja selkeyttä varten.';
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
        <p class="eyebrow">Tekoälykaupankäyntialusta</p>
        <h1>Käy kauppaa fiksummin.<br><span class="text-accent">Reagoi nopeammin.</span></h1>
        <p class="lead">
          Uusi standardi krypto- ja monimarkkinakaupankäyntiin. Kehittynyt turvallisuus, läpinäkyvät kulut,
          tekoälyn tuottamat näkemykset ja käyttöliittymä, joka pysyy tahdissasi.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL-suojattu
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            24/7-tuki
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Nopea toteutus
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Aloita kaupankäynti — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Avaa tilisi 2 minuutissa';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Alustan tilastot">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Saatavilla olevaa valuuttaa</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Vahvistettua käyttäjää</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Kaupankäyntivolyymi</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Tuettua maata</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Kaupankäyntialustan esikatselu">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Kaupankäyntialusta</p>
        <h2>Ammattimaiset kaaviot.<br>Mobiiliin optimoitu.</h2>
        <p class="lead">
          Selkeä käyttöliittymä modernin pörssin tapaan — live BTC/USDT-data, salkun seuranta
          ja kaupankäynti yhdellä napautuksella. Suunniteltu herättämään luottamusta heti ensimmäisestä kirjautumisesta.
        </p>
        <ul class="platform-points">
          <li>Reaaliaikaiset kynttiläkaaviot</li>
          <li>Salkku ja P/L yhdellä silmäyksellä</li>
          <li>Turvallinen tilin hallintapaneeli</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Kokeile alustaa</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Miksi <?= e(SITE_NAME) ?></p>
        <h2>Kaikki mitä tarvitset luottavaiseen kaupankäyntiin</h2>
        <p class="lead">Turvallisuus, nopeus ja älykkyys — yhdessä selkeässä alustassa nykyaikaisille treidaajille.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Pankkitason turvallisuus</h3>
          <p>SSL-salaus, kaksivaiheinen tunnistautuminen ja turvallinen varojen käsittely suojaavat tietojasi ja pääomaasi jokaisessa vaiheessa.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Tekoälyn markkinasignaalit</h3>
          <p>Tarkat, reaaliaikaiset näkemykset auttavat tunnistamaan tilaisuuksia ja tekemään perusteltuja päätöksiä nopeammin.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Automatisoitu kaupankäynti</h3>
          <p>Tekoälyllä toimivat botit työskentelevät ympäri vuorokauden ja toteuttavat strategioita tehokkaasti — sinä säilytät hallinnan.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Pääsy useille markkinoille</h3>
          <p>Käy kauppaa kryptolla, forexillä, osakkeilla ja raaka-aineilla yhdessä yhtenäisessä ympäristössä.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Matalan latenssin toteutus</h3>
          <p>Optimoitu infrastruktuuri tarjoaa vakaata toimeksiantojen toteutusta myös markkinoiden vilkkaina hetkinä.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Selkeä käyttöliittymä</h3>
          <p>Minimalistinen suunnittelu vähentää häiriöitä, jotta voit keskittyä strategiaan — ei navigointiin.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Live-markkinat</p>
        <h2>Käy kauppaa Bitcoinilla, Ethereumilla ja muilla</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Reaaliaikaiset hinnat, kehittyneet indikaattorit ja ammattimainen näkymä markkinoihin, jotka kiinnostavat sinua.
        </p>
        <a href="sign.php" class="btn btn-primary">Hanki markkinapääsy</a>
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

  <!-- How it works -->
  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Näin aloitat</p>
        <h2>Rekisteröinnistä ensimmäiseen kauppaan minuuteissa</h2>
        <p class="lead">Selkeä polku — ei monimutkaisuutta, ei arvailua.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Luo tilisi</h3>
          <p>Rekisteröidy tiedoillasi ja saat heti turvallisen pääsyn alustalle.</p>
        </article>
        <article class="step-card">
          <h3>Vahvista sähköpostisi</h3>
          <p>Vahvista osoitteesi avataksesi koko kaupankäyntiympäristön.</p>
        </article>
        <article class="step-card">
          <h3>Talleta tilillesi</h3>
          <p>Talleta vähintään <?= MIN_DEPOSIT ?> <?= CURRENCY ?> tilisiirrolla, kortilla tai e-lompakolla.</p>
        </article>
        <article class="step-card">
          <h3>Aseta strategiasi</h3>
          <p>Määritä riskitaso ja mieltymykset — käy kauppaa manuaalisesti tai anna tekoälyn automatisoinnin hoitaa toteutus.</p>
        </article>
        <article class="step-card">
          <h3>Aloita kaupankäynti</h3>
          <p>Siirry markkinoille live-kaavioilla, työkaluilla ja tuella aina kun tarvitset sitä.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Avaa tili nyt</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Rahoitus</p>
      <h2 style="margin-bottom: 0.75rem;">Talleta menetelmillä, joihin jo luotat</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kortit, e-lompakot ja tilisiirrot — suojattu SSL-salauksella.</p>
      <?php
      $payment_context = 'tilin rahoitus ja talletukset';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Luotettava infrastruktuuri</p>
        <h2>Rakennettu alan standardikumppaneille</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Arvostelut</p>
        <h2>Mitä treidaajat sanovat</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Rekisteröinti kesti muutaman minuutin, kulut ovat läpinäkyviä ja tuki vastaa oikeasti. Sujuva ja luotettava kokemus — alusta, jolla viihdyn mielelläni.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Itsenäinen treidaaja</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Kokeilin vihdoin kryptokauppaa täällä — en kadu. Pystytys oli nopea ja kaikki selitetty selkeästi. Hyvä valinta erityisesti aloittelijalle.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Kryptoentusiasti</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Vakaa ja luotettava. Tilin avaus oli yksinkertainen, ehdot selkeät ja tiimi osaa asiansa. Yllättävän miellyttävä kaupankäyntikokemus.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Digitaalisten varojen operaattori</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Kaupankäynti ei enää tunnu ylivoimaiselta. Helppo rekisteröinti, selkeät kulut ja tuki tarvittaessa. Aloittelijana se tekee kaiken eron.</p>
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

  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">UKK</p>
        <h2>Yleisimmät kysymykset</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Miten aloitan?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Luo tili perustiedoillasi, suorita lyhyt vahvistus ja talleta vähintään <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Saat käyttöösi koko alustan — live-kaaviot, kaupankäyntityökalut ja ohjatun aloituksen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ovatko rahani ja tietoni turvassa?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Käytämme SSL-salausta, kaksivaiheista tunnistautumista ja turvallista käsittelyä luotettavien palveluntarjoajien kautta. Henkilötietojasi käsitellään tiukkojen tietoturvakäytäntöjen mukaisesti kaikilla tasoilla.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Milloin voin nostaa voittoja?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Pyydä nostoa milloin tahansa hallintapaneelista. Käsittely kestää yleensä 1–3 arkipäivää. Kulut ja aikataulut näkyvät aina etukäteen — ei yllätyksiä.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Tarvitsenko kaupankäyntikokemusta?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Et lainkaan. Ohjattu aloitus, selkeät oppaat ja tekoälyn tukemat työkalut auttavat oppimaan omaan tahtiisi. Olitpa aloittelija tai kokenut, tuki on saatavilla 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Millä markkinoilla voin käydä kauppaa?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Käytä kryptovaluuttoja, forexiä, maailman osakkeita ja raaka-aineita yhdessä käyttöliittymässä. Reaaliaikainen data, integroitu analytiikka sekä tuki manuaalisille ja automatisoiduille strategioille.
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
        <p class="eyebrow">Alusta</p>
        <h2>Keskeiset ominaisuudet yhdellä silmäyksellä</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Tekoälykaupankäyntimoottori</div>
          <div class="specs-value">Kehittynyt markkina-analyysi koneoppimisen avulla</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Rahoitusmenetelmät</div>
          <div class="specs-value">Luottokortit, tilisiirrot, PayPal, e-lompakot</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Laitteet</div>
          <div class="specs-value">Selain, tabletti ja mobiili — täysin responsiivinen</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Signaalien tarkkuus</div>
          <div class="specs-value">Jopa 85 % tuetuilla tekoälystrategioilla</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markkinat</div>
          <div class="specs-value">Krypto, forex, osakkeet, raaka-aineet</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Aloitus</div>
          <div class="specs-value">Nopea tilin avaus ohjatulla vahvistuksella</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Tuki</div>
          <div class="specs-value">Ammattimainen 24/7-apu — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Ota yhteyttä</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Luotettu</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> -arvostelut</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> arvostelua · Perustuu <strong>1&nbsp;842</strong> arvioon
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Valmis käymään kauppaa alustalla, joka on rakennettu selkeyttä varten?</h2>
        <p class="lead">Liity yksityistreidaajien ja yritysten joukkoon, jotka ostavat, myyvät ja hallitsevat digitaalisia varoja luottavaisin mielin.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Luo ilmainen tilisi';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

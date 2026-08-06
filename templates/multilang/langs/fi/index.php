<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Tekoälypohjainen kaupankäyntialusta');
$page_description = 'Käy kauppaa kryptolla, valuuttamarkkinoilla ja maailmanmarkkinoilla palvelussa ' . SITE_NAME . '. Reaaliaikainen analytiikka, tekoälyavusteiset signaalit ja alusta, joka on rakennettu nopeutta ja selkeyttä varten.';
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
        <h1>Kauppaa fiksummin.<br><span class="text-accent">Liiku nopeammin.</span></h1>
        <p class="lead">
          Uusi standardi krypto- ja monimarkkinakaupankäynnissä. Kehittynyt tietoturva, läpinäkyvät kulut,
          tekoälypohjaiset näkemykset ja käyttöliittymä, joka pysyy tieltäsi pois.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL-suojattu
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Tuki 24/7
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
        <div class="stat-label">Tuetut maat</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Kaupankäyntialustan esikatselu">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Kaupankäyntialusta</p>
        <h2>Ammattimaiset kaaviot.<br>Valmis mobiiliin.</h2>
        <p class="lead">
          Selkeä käyttöliittymä, joka on rakennettu kuin moderni pörssi — reaaliaikainen BTC/USDT-data, salkun seuranta
          ja suoritus yhdellä napautuksella. Suunniteltu herättämään luottamusta jo ensimmäisestä kirjautumisesta.
        </p>
        <ul class="platform-points">
          <li>Reaaliaikaiset kynttiläkaaviot</li>
          <li>Salkku ja tulos yhdellä silmäyksellä</li>
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
        <p class="lead">Tietoturva, nopeus ja älykkyys — yhdessä selkeässä alustassa, joka on suunniteltu nykyaikaisille treidaajille.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Pankkitason tietoturva</h3>
          <p>SSL-salaus, kaksivaiheinen tunnistautuminen ja turvallinen varojen käsittely suojaavat tietojasi ja pääomaasi joka vaiheessa.</p>
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
          <p>Tekoälypohjaiset botit työskentelevät ympäri vuorokauden ja toteuttavat strategioita tehokkaasti — sinä säilytät hallinnan.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Pääsy useille markkinoille</h3>
          <p>Käy kauppaa kryptolla, valuutoilla, osakkeilla ja raaka-aineilla yhdestä yhtenäisestä ympäristöstä.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Matala viive</h3>
          <p>Optimoitu infrastruktuuri tarjoaa vakaan toimeksiantojen toteutuksen myös markkinoiden vilkkaimpina hetkinä.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Selkeä käyttöliittymä</h3>
          <p>Minimalistinen muotoilu vähentää hälyä, jotta voit keskittyä strategiaan — ei navigointiin.</p>
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
          Reaaliaikaiset hinnat, kehittyneet indikaattorit ja ammattitason näkymä markkinoihin, jotka kiinnostavat sinua.
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
        <p class="eyebrow">Näin pääset alkuun</p>
        <h2>Rekisteröitymisestä ensimmäiseen kauppaan minuuteissa</h2>
        <p class="lead">Ohjattu polku — ei monimutkaisuutta, ei arvaamista.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Luo tilisi</h3>
          <p>Rekisteröidy tiedoillasi ja saat välittömän, turvallisen pääsyn alustalle.</p>
        </article>
        <article class="step-card">
          <h3>Vahvista sähköpostisi</h3>
          <p>Vahvista osoitteesi avataksesi koko kaupankäyntiympäristön.</p>
        </article>
        <article class="step-card">
          <h3>Rahoita tilisi</h3>
          <p>Talleta vähintään <?= MIN_DEPOSIT ?> <?= CURRENCY ?> tilisiirrolla, kortilla tai e-lompakolla.</p>
        </article>
        <article class="step-card">
          <h3>Määritä strategiasi</h3>
          <p>Valitse riskitaso ja asetukset — käy kauppaa manuaalisesti tai anna tekoälyautomaation hoitaa toteutus.</p>
        </article>
        <article class="step-card">
          <h3>Aloita kaupankäynti</h3>
          <p>Siirry markkinoille live-kaavioilla, työkaluilla ja tuella aina tarvittaessa.</p>
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
      <h2 style="margin-bottom: 0.75rem;">Talleta jo luottamillasi tavoilla</h2>
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
          <p class="review-text">Rekisteröityminen vei muutaman minuutin, kulut ovat läpinäkyvät ja tuki vastaa oikeasti. Sujuva ja luotettava kokemus — alusta, jonka kanssa jatkan mielelläni.</p>
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
          <p class="review-text">Kokeilin vihdoin kryptokauppaa täällä — ei kaduta. Aloitus oli nopea ja kaikki selitetty selkeästi. Hyvä valinta etenkin, jos olet vasta alussa.</p>
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
          <p class="review-text">Vakaa ja luotettava. Tilin avaus oli helppo, ehdot selkeät ja tiimi osaa asiansa. Yllättävän miellyttävä kaupankäyntikokemus.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Digitaalisten varojen ammattilainen</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Kaupankäynti ei enää tunnu ylivoimaiselta. Yksinkertainen rekisteröityminen, selkeät kulut ja tuki tarvittaessa. Aloittelijalle sillä on valtava merkitys.</p>
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
            Miten pääsen alkuun?
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
            Onko rahani ja tietoni turvassa?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Käytämme SSL-salausta, kaksivaiheista tunnistautumista ja turvallista käsittelyä luotettujen palveluntarjoajien kautta. Henkilötietojasi käsitellään tiukkojen tietoturvakäytäntöjen mukaisesti jokaisella tasolla.
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
              Pyydä nostoja milloin tahansa hallintapaneelista. Käsittely kestää yleensä 1–3 arkipäivää. Sovellettavat kulut ja aikataulut näytetään aina etukäteen — ei yllätyksiä.
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
              Et lainkaan. Ohjattu aloitus, selkeät oppaat ja tekoälyavusteiset työkalut auttavat oppimaan omaan tahtiisi. Olitpa uusi tai kokenut, tuki on saatavilla 24/7.
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
              Pääset kryptovaluuttoihin, valuuttamarkkinoihin, maailman osakkeisiin ja raaka-aineisiin yhdestä käyttöliittymästä. Reaaliaikainen data, integroitu analytiikka sekä tuki sekä manuaalisille että automatisoiduille strategioille.
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
          <div class="specs-label">Rahoitustavat</div>
          <div class="specs-value">Luottokortit, tilisiirrot, PayPal, e-lompakot</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Laitteet</div>
          <div class="specs-value">Selain, tabletti ja mobiili — täysin responsiivinen</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Signaalien tarkkuus</div>
          <div class="specs-value">Jopa 85 % tuetuissa tekoälystrategioissa</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markkinat</div>
          <div class="specs-value">Krypto, valuutat, osakkeet, raaka-aineet</div>
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
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> arvostelut</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> arvostelua · Perustuu <strong>1 842</strong> arvioon
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Valmis käymään kauppaa alustalla, joka on rakennettu selkeyttä varten?</h2>
        <p class="lead">Liity yksityistreidaajien ja yritysten joukkoon, jotka ostavat, myyvät ja hallinnoivat digitaalisia varoja luottavaisesti.</p>
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

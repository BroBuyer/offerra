<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Tekoälypohjainen sijoitusalusta');
$page_description = 'Yksinkertainen tekoälyllä toimiva sijoitusalusta — selkeät markkinat, ohjatut päätökset ja nopea tilin avaus ' . SITE_NAME . '-palvelussa.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Johdanto">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Sijoita selkeästi.<br><span class="text-accent">Anna tekoälyn pitää se yksinkertaisena.</span></h1>
        <p class="lead">
          Moderni sijoitusalusta, joka selittää markkinat selkeällä kielellä, korostaa hyödyllisiä tekoälynäkemyksiä ja auttaa tekemään toimeksiantoja ilman turhaa hälyä.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Aloita alkaen <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Katso, miten se toimii</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">Rakennettu aloittelijoille</p>
        <h2>Kolme vaihetta. Sitten käyt kauppaa.</h2>
        <p class="lead">Ei terminaalijargonia — selkeä polku rekisteröitymisestä ensimmäiseen positioon.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Avaa tilisi</h3>
          <p>Jaa muutama tieto. Vahvistus on lyhyt ja ohjattu.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Talleta turvallisesti</h3>
          <p>Talleta alkaen <?= MIN_DEPOSIT ?> <?= CURRENCY ?> luotettavilla maksutavoilla.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Käy kauppaa tekoälyn avulla</h3>
          <p>Seuraa selkeällä kielellä kirjoitettuja näkemyksiä ja tee toimeksiantoja, kun olet valmis.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">Tekoäly, joka todella auttaa</p>
        <h2>Signaalit, jotka oikeasti ymmärrät</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> muuttaa markkinahälyn lyhyiksi, luettaviksi vihjeiksi — vähemmän arvailua, enemmän päätöksiä.
        </p>
        <ul class="feature-list">
          <li>Selkeät osta / pidä / seuraa -vihjeet</li>
          <li>Riskimuistutukset ennen vahvistusta</li>
          <li>Käyttöliittymä, joka pysyy rauhallisena paineessa</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Kokeile alustaa</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Esimerkkinäkemys">
        <p class="insight-panel__label">Live-näkemys</p>
        <p class="insight-panel__title">BTC / USD · vakaa momentum</p>
        <p class="insight-panel__body">
          Volatiliteetti hiljenee. Tekoäly ehdottaa seuraavan session seuraamista ennen koon kasvattamista — pidät kontrollin jokaisesta toimeksiannosta.
        </p>
        <div class="insight-panel__meta">
          <span>Korkea luottamus</span>
          <span>Päivitetty juuri nyt</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Aloita</p>
        <h2>Luo <?= e(SITE_NAME) ?>-tilisi</h2>
        <p class="lead lead-light">
          Liity alustaan, joka tuntuu premiumilta ja pysyy yksinkertaisena — tekoälyohjaus mukana ensimmäisestä päivästä.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Avaa alle 2 minuutissa';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Luotettava infrastruktuuri</p>
        <h2>Infrastruktuurikumppanit</h2>
        <p class="lead">Maksut ja markkinapääsy vakiintuneiden tarjoajien kautta.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">UKK</p>
        <h2>Pikavastaukset</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Tarvitsenko kaupankäyntikokemusta?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Ei. <?= e(SITE_NAME) ?> on rakennettu ensikertalaisille sijoittajille — tekoälyvinkit on kirjoitettu selkeällä kielellä.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Mikä on vähimmäistalletus?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Voit aloittaa alkaen <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Kulut näkyvät ennen vahvistusta.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Onko tuki saatavilla?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kyllä — tiimimme auttaa vuorokauden ympäri rahoituksessa ja tilin asetuksissa.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Lue koko UKK →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

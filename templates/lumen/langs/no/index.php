<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI-investeringsplattform');
$page_description = 'En enkel investeringsplattform drevet av AI — tydelige markeder, veiledede beslutninger og rask kontoåpning på ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Introduksjon">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Invester med klarhet.<br><span class="text-accent">La AI holde det enkelt.</span></h1>
        <p class="lead">
          En moderne investeringsplattform som forklarer markedene på klart språk, fremhever nyttige AI-innsikter og hjelper deg med å legge ordrer uten unødvendig støy.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Start fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Se hvordan det fungerer</a>
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
        <p class="eyebrow">Bygget for nybegynnere</p>
        <h2>Tre steg. Deretter handler du.</h2>
        <p class="lead">Ingen terminalsjargong — en tydelig vei fra registrering til din første posisjon.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Åpne kontoen din</h3>
          <p>Del noen få opplysninger. Verifiseringen er kort og veiledet.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Sett inn trygt</h3>
          <p>Sett inn fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?> med pålitelige betalingsmetoder.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Handle med AI-hjelp</h3>
          <p>Følg innsikter på klart språk og legg ordrer når du er klar.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI som faktisk hjelper</p>
        <h2>Signaler du faktisk forstår</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> gjør markedsstøy om til korte, lesbare tips — mindre gjetting, mer beslutning.
        </p>
        <ul class="feature-list">
          <li>Tydelige kjøp-/hold-/følg-signaler</li>
          <li>Risikopåminnelser før bekreftelse</li>
          <li>Et grensesnitt som forblir rolig under press</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Prøv plattformen</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Eksempelinnsikt">
        <p class="insight-panel__label">Live-innsikt</p>
        <p class="insight-panel__title">BTC / USD · stabil momentum</p>
        <p class="insight-panel__body">
          Volatiliteten avtar. AI foreslår å følge neste sesjon før du øker størrelsen — du beholder kontrollen over hver ordre.
        </p>
        <div class="insight-panel__meta">
          <span>Høy tillit</span>
          <span>Oppdatert nettopp</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Kom i gang</p>
        <h2>Opprett din <?= e(SITE_NAME) ?>-konto</h2>
        <p class="lead lead-light">
          Bli med på en plattform som føles premium og forblir enkel — AI-veiledning fra dag én.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Åpne på under 2 minutter';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Pålitelig infrastruktur</p>
        <h2>Infrastrukturpartnere</h2>
        <p class="lead">Betalinger og markedsadgang via etablerte leverandører.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Raske svar</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Trenger jeg handelserfaring?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Nei. <?= e(SITE_NAME) ?> er bygget for førstegangsinvestorer — AI-tips på klart språk.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hva er minste innskudd?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Du kan starte fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Gebyrer forblir synlige før bekreftelse.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Er support tilgjengelig?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ja — teamet vårt er tilgjengelig døgnet rundt for innskudd og kontooppsett.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Les hele FAQ →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

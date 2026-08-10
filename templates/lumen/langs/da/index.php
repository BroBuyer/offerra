<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI-investeringsplatform');
$page_description = 'En enkel investeringsplatform drevet af AI — klare markeder, vejledte beslutninger og hurtig kontoåbning på ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Introduktion">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Invester med klarhed.<br><span class="text-accent">Lad AI holde det enkelt.</span></h1>
        <p class="lead">
          En moderne investeringsplatform, der forklarer markederne på klart sprog, fremhæver nyttige AI-indsigter og hjælper dig med at placere ordrer uden unødvendig støj.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Start fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Se, hvordan det virker</a>
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
        <p class="eyebrow">Bygget til begyndere</p>
        <h2>Tre trin. Så handler du.</h2>
        <p class="lead">Ingen terminaljargon — en klar vej fra tilmelding til din første position.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Åbn din konto</h3>
          <p>Del et par oplysninger. Verificeringen er kort og vejledt.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Indbetal sikkert</h3>
          <p>Indbetal fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?> med pålidelige betalingsmetoder.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Handel med AI-hjælp</h3>
          <p>Følg indsigter på klart sprog, og placer ordrer, når du er klar.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI, der faktisk hjælper</p>
        <h2>Signaler, du faktisk forstår</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> forvandler markedsstøj til korte, læsbare tip — mindre gætteri, mere beslutning.
        </p>
        <ul class="feature-list">
          <li>Klare køb-/hold-/overvåg-signaler</li>
          <li>Risikopåmindelser før bekræftelse</li>
          <li>En grænseflade, der forbliver rolig under pres</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Prøv platformen</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Eksempelindsigt">
        <p class="insight-panel__label">Live-indsigt</p>
        <p class="insight-panel__title">BTC / USD · stabil momentum</p>
        <p class="insight-panel__body">
          Volatiliteten aftager. AI foreslår at overvåge næste session, før du øger størrelsen — du beholder kontrollen over hver ordre.
        </p>
        <div class="insight-panel__meta">
          <span>Høj tillid</span>
          <span>Opdateret lige nu</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Kom i gang</p>
        <h2>Opret din <?= e(SITE_NAME) ?>-konto</h2>
        <p class="lead lead-light">
          Tilmeld dig en platform, der føles premium og forbliver enkel — AI-vejledning fra dag ét.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Åbn på under 2 minutter';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Pålidelig infrastruktur</p>
        <h2>Infrastrukturpartnere</h2>
        <p class="lead">Betalinger og markedsadgang via etablerede udbydere.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Hurtige svar</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Har jeg brug for handelserfaring?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Nej. <?= e(SITE_NAME) ?> er bygget til førstegangsinvestorer — AI-tip på klart sprog.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvad er mindste indbetaling?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Du kan starte fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Gebyrer forbliver synlige før bekræftelse.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Er support tilgængelig?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ja — vores team er tilgængeligt døgnet rundt for indbetalinger og kontoopsætning.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Læs hele FAQ →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

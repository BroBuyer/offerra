<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI-beleggingsplatform');
$page_description = 'Een eenvoudig beleggingsplatform aangedreven door AI — heldere markten, begeleide keuzes en snelle accountaanmaak op ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Introductie">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Beleg met helderheid.<br><span class="text-accent">Laat AI het eenvoudig houden.</span></h1>
        <p class="lead">
          Een modern beleggingsplatform dat markten in gewone taal uitlegt, nuttige AI-inzichten belicht en u helpt orders te plaatsen zonder ruis.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Start vanaf <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Bekijk hoe het werkt</a>
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
        <p class="eyebrow">Gemaakt voor beginners</p>
        <h2>Drie stappen. Daarna handelt u.</h2>
        <p class="lead">Geen terminaljargon — een duidelijk pad van aanmelding tot uw eerste positie.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Open uw account</h3>
          <p>Deel een paar gegevens. Verificatie is kort en begeleid.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Veilig storten</h3>
          <p>Stort vanaf <?= MIN_DEPOSIT ?> <?= CURRENCY ?> met betrouwbare betaalmethoden.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Handel met AI-hulp</h3>
          <p>Volg inzichten in gewone taal en plaats orders wanneer u klaar bent.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI die echt helpt</p>
        <h2>Signalen die u echt begrijpt</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> zet marktruis om in korte, leesbare tips — minder gissen, meer beslissen.
        </p>
        <ul class="feature-list">
          <li>Duidelijke koop-/houd-/volg-signalen</li>
          <li>Risicoherinneringen vóór bevestiging</li>
          <li>Een interface die rustig blijft onder druk</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Probeer het platform</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Voorbeeldinzicht">
        <p class="insight-panel__label">Live-inzicht</p>
        <p class="insight-panel__title">BTC / USD · stabiel momentum</p>
        <p class="insight-panel__body">
          De volatiliteit neemt af. AI adviseert de volgende sessie te bekijken vóór u opschaalt — u blijft elke order beheersen.
        </p>
        <div class="insight-panel__meta">
          <span>Hoge betrouwbaarheid</span>
          <span>Zojuist bijgewerkt</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Aan de slag</p>
        <h2>Maak uw <?= e(SITE_NAME) ?>-account</h2>
        <p class="lead lead-light">
          Sluit u aan bij een platform dat premium aanvoelt en eenvoudig blijft — AI-begeleiding vanaf dag één.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Openen in minder dan 2 minuten';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Betrouwbare infrastructuur</p>
        <h2>Infrastructuurpartners</h2>
        <p class="lead">Betalingen en markttoegang via gevestigde aanbieders.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Snelle antwoorden</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Heb ik handelservaring nodig?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Nee. <?= e(SITE_NAME) ?> is gemaakt voor beginnende beleggers — AI-tips in gewone taal.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wat is het minimale stortingsbedrag?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              U kunt starten vanaf <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Kosten blijven zichtbaar vóór bevestiging.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Is er support beschikbaar?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ja — ons team helpt rond de klok bij stortingen en accountinrichting.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Lees de volledige FAQ →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI-investeringsplattform');
$page_description = 'En enkel investeringsplattform driven av AI — tydliga marknader, vägledda beslut och snabb kontoöppning på ' . SITE_NAME . '.';
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
        <h1>Investera med tydlighet.<br><span class="text-accent">Låt AI hålla det enkelt.</span></h1>
        <p class="lead">
          En modern investeringsplattform som förklarar marknader på begripligt språk, lyfter fram användbara AI-insikter och hjälper dig lägga ordrar utan onödigt brus.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Börja från <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Se hur det fungerar</a>
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
        <p class="eyebrow">Byggd för nybörjare</p>
        <h2>Tre steg. Sedan handlar du.</h2>
        <p class="lead">Ingen terminaljargong — en tydlig väg från registrering till din första position.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Öppna ditt konto</h3>
          <p>Dela några uppgifter. Verifieringen är kort och vägledd.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Sätt in tryggt</h3>
          <p>Sätt in från <?= MIN_DEPOSIT ?> <?= CURRENCY ?> med pålitliga betalningsmetoder.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Handla med AI-hjälp</h3>
          <p>Följ insikter på begripligt språk och lägg ordrar när du är redo.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI som faktiskt hjälper</p>
        <h2>Signaler du verkligen förstår</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> omvandlar marknadsbrus till korta, läsbara tips — mindre gissning, mer beslut.
        </p>
        <ul class="feature-list">
          <li>Tydliga köp-/håll-/bevaka-signaler</li>
          <li>Riskpåminnelser före bekräftelse</li>
          <li>Ett gränssnitt som förblir lugnt under press</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Prova plattformen</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Exempelinsikt">
        <p class="insight-panel__label">Live-insikt</p>
        <p class="insight-panel__title">BTC / USD · stabil momentum</p>
        <p class="insight-panel__body">
          Volatiliteten avtar. AI föreslår att du bevakar nästa session innan du ökar storleken — du behåller kontrollen över varje order.
        </p>
        <div class="insight-panel__meta">
          <span>Hög tillförlitlighet</span>
          <span>Uppdaterad just nu</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Kom igång</p>
        <h2>Skapa ditt <?= e(SITE_NAME) ?>-konto</h2>
        <p class="lead lead-light">
          Gå med i en plattform som känns premium och förblir enkel — AI-vägledning från dag ett.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Öppna på under 2 minuter';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Pålitlig infrastruktur</p>
        <h2>Infrastrukturpartners</h2>
        <p class="lead">Betalningar och marknadsåtkomst via etablerade leverantörer.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Snabba svar</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Behöver jag handelserfarenhet?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Nej. <?= e(SITE_NAME) ?> är byggd för förstagångsinvesterare — AI-tips på begripligt språk.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Vad är minsta insättning?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Du kan börja från <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Avgifter syns innan du bekräftar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Finns support tillgänglig?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ja — vårt team finns tillgängligt dygnet runt för insättningar och kontoinställning.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Läs hela FAQ →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

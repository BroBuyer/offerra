<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI naložbena platforma');
$page_description = 'Preprosta naložbena platforma, ki jo poganja AI — jasni trgi, vodene odločitve in hitra nastavitev računa na ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Uvod">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Investirajte z jasnostjo.<br><span class="text-accent">Naj bo umetna inteligenca preprosta.</span></h1>
        <p class="lead">
          Sodobna naložbena platforma, ki razlaga trge v preprostem jeziku, poudarja uporabne vpoglede umetne inteligence in vam pomaga sklepati posle brez nereda.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Začnite od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Oglejte si, kako deluje</a>
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
        <p class="eyebrow">Ustvarjena za začetnike</p>
        <h2>Trije koraki. Potem trgujete.</h2>
        <p class="lead">Brez terminalskega žargona - samo jasna pot od prijave do vaše prve pozicije.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Odprite svoj račun</h3>
          <p>Delite nekaj podrobnosti. Preverjanje je kratko in vodeno.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Varno financirajte</h3>
          <p>Nakazilo od <?= MIN_DEPOSIT ?> <?= CURRENCY ?> z zaupanja vrednimi načini plačila.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Trgujte s pomočjo AI</h3>
          <p>Sledite vpogledom v preprostem jeziku in oddajte naročila, ko ste pripravljeni.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI, ki ostane uporaben</p>
        <h2>Signali, ki jih dejansko lahko razumete</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> spremeni tržni hrup v kratke, berljive pozive — tako porabite manj časa za ugibanje in več časa za odločanje.
        </p>
        <ul class="feature-list">
          <li>Jasni namigi za nakup, držanje ali spremljanje</li>
          <li>Opomniki za tveganje pred potrditvijo</li>
          <li>Vmesnik, ki ostane miren pod pritiskom</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Preizkusite platformo</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Primer vpogleda">
        <p class="insight-panel__label">Vpogled v živo</p>
        <p class="insight-panel__title">BTC / USD · enakomeren zagon</p>
        <p class="insight-panel__body">
          Volatilnost se ohlaja. Umetna inteligenca predlaga, da si ogledate naslednjo sejo, preden določite velikost – nadzirate vsako naročilo.
        </p>
        <div class="insight-panel__meta">
          <span>Samozavest visoka</span>
          <span>Pravkar posodobljeno</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Začnite</p>
        <h2>Ustvarite svoj <?= e(SITE_NAME) ?> račun</h2>
        <p class="lead lead-light">
          Pridružite se platformi, ki je zasnovana tako, da se ostane pregledna in preprosta – smernice AI vključene od prvega dne.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Odpre se v manj kot 2 minutah';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Zaupanja vredne tirnice</p>
        <h2>Infrastrukturni partnerji</h2>
        <p class="lead">Plačila in dostop do trga prek uveljavljenih ponudnikov.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">pogosta vprašanja</p>
        <h2>Hitri odgovori</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Ali potrebujem izkušnje s trgovanjem?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Ne. <?= e(SITE_NAME) ?> je ustvarjen za nove vlagatelje – nasveti AI so napisani v preprostem jeziku.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kolikšen je minimalni depozit?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Začnete lahko od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Provizije ostanejo vidne, preden potrdite.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ali je podpora na voljo?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Da — naša ekipa je na voljo 24 ur na dan za pomoč pri financiranju in nastavitvi računa.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Preberite celotna pogosta vprašanja →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

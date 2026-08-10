<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Investičná platforma s AI');
$page_description = 'Jednoduchá investičná platforma poháňaná AI — zrozumiteľné trhy, vedené rozhodnutia a rýchle založenie účtu na ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Úvod">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Investujte prehľadne.<br><span class="text-accent">Nech AI udržuje jednoduchosť.</span></h1>
        <p class="lead">
          Moderná investičná platforma, ktorá vysvetľuje trhy zrozumiteľne, zvýrazňuje užitočné AI poznatky a pomáha zadávať obchody bez zbytočného šumu.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Začať od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Ako to funguje</a>
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
        <p class="eyebrow">Pre začiatočníkov</p>
        <h2>Tri kroky. Potom obchodujete.</h2>
        <p class="lead">Bez terminálového žargónu — jasná cesta od registrácie k prvej pozícii.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Otvorte účet</h3>
          <p>Stačí niekoľko údajov. Overenie je krátke a vedené.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Vložte prostriedky bezpečne</h3>
          <p>Vložte od <?= MIN_DEPOSIT ?> <?= CURRENCY ?> dôveryhodnými platobnými metódami.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Obchodujte s pomocou AI</h3>
          <p>Sledujte poznatky v zrozumiteľnom jazyku a zadávajte príkazy, keď budete pripravení.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI, ktorá naozaj pomáha</p>
        <h2>Signály, ktorým naozaj rozumiete</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> mení trhový šum na krátke, čitateľné tipy — menej tipovania, viac rozhodovania.
        </p>
        <ul class="feature-list">
          <li>Jasné tipy kúpiť / držať / sledovať</li>
          <li>Pripomienky rizika pred potvrdením</li>
          <li>Rozhranie, ktoré zostáva pokojné pod tlakom</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Vyskúšať platformu</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Ukážkový insight">
        <p class="insight-panel__label">Živý insight</p>
        <p class="insight-panel__title">BTC / USD · stabilné momentum</p>
        <p class="insight-panel__body">
          Volatilita sa upokojila. AI navrhuje sledovať ďalšiu seansu pred navyšovaním — pri každom príkaze zostávate vy.
        </p>
        <div class="insight-panel__meta">
          <span>Vysoká spoľahlivosť</span>
          <span>Práve aktualizované</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Začať</p>
        <h2>Vytvorte si účet <?= e(SITE_NAME) ?></h2>
        <p class="lead lead-light">
          Pridajte sa k platforme, ktorá pôsobí prémiovo a zostáva jednoduchá — vedenie AI od prvého dňa.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Otvorenie do 2 minút';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Dôveryhodná infraštruktúra</p>
        <h2>Infraštruktúrni partneri</h2>
        <p class="lead">Platby a prístup na trhy cez zavedených poskytovateľov.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Rýchle odpovede</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Potrebujem skúsenosti s obchodovaním?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Nie. <?= e(SITE_NAME) ?> je vytvorená pre začínajúcich investorov — tipy AI sú v zrozumiteľnom jazyku.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Aký je minimálny vklad?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Môžete začať od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Poplatky sú viditeľné pred potvrdením.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Je dostupná podpora?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Áno — náš tím pomáha nonstop s financovaním a nastavením účtu.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Prečítať celé FAQ →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

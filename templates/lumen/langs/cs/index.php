<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Investiční platforma s AI');
$page_description = 'Jednoduchá investiční platforma poháněná AI — srozumitelné trhy, vedená rozhodnutí a rychlé založení účtu na ' . SITE_NAME . '.';
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
        <h1>Investujte s jasností.<br><span class="text-accent">Nechte AI udržet věci jednoduché.</span></h1>
        <p class="lead">
          Moderní investiční platforma, která vysvětluje trhy srozumitelně, zvýrazňuje užitečné AI poznatky a pomáhá zadávat obchody bez zbytečného šumu.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Začít od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Jak to funguje</a>
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
        <p class="eyebrow">Pro začátečníky</p>
        <h2>Tři kroky. Pak obchodujete.</h2>
        <p class="lead">Bez terminálového žargonu — jasná cesta od registrace k první pozici.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Otevřete účet</h3>
          <p>Stačí několik údajů. Ověření je krátké a vedené.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Vložte prostředky bezpečně</h3>
          <p>Vložte od <?= MIN_DEPOSIT ?> <?= CURRENCY ?> důvěryhodnými platebními metodami.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Obchodujte s pomocí AI</h3>
          <p>Sledujte poznatky v srozumitelném jazyce a zadávejte příkazy, až budete připraveni.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI, která opravdu pomáhá</p>
        <h2>Signály, kterým opravdu rozumíte</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> mění tržní šum na krátké, čitelné tipy — méně hádání, více rozhodování.
        </p>
        <ul class="feature-list">
          <li>Jasné tipy koupit / držet / sledovat</li>
          <li>Připomínky rizika před potvrzením</li>
          <li>Rozhraní, které zůstává klidné pod tlakem</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Vyzkoušet platformu</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Ukázkový insight">
        <p class="insight-panel__label">Živý insight</p>
        <p class="insight-panel__title">BTC / USD · stabilní momentum</p>
        <p class="insight-panel__body">
          Volatilita se zklidňuje. AI doporučuje sledovat další seanci před navyšováním — u každého příkazu zůstáváte vy.
        </p>
        <div class="insight-panel__meta">
          <span>Vysoká spolehlivost</span>
          <span>Právě aktualizováno</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Začít</p>
        <h2>Vytvořte si účet <?= e(SITE_NAME) ?></h2>
        <p class="lead lead-light">
          Přidejte se k platformě, která působí prémiově a zůstává jednoduchá — vedení AI od prvního dne.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Otevření do 2 minut';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Důvěryhodná infrastruktura</p>
        <h2>Infrastrukturní partneři</h2>
        <p class="lead">Platby a přístup na trhy přes zavedené poskytovatele.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Rychlé odpovědi</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Potřebuji zkušenosti s obchodováním?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Ne. <?= e(SITE_NAME) ?> je vytvořena pro začínající investory — tipy AI jsou v srozumitelném jazyce.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jaký je minimální vklad?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Můžete začít od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Poplatky jsou viditelné před potvrzením.
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
              Ano — náš tým pomáhá nonstop s financováním a nastavením účtu.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Přečíst celé FAQ →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

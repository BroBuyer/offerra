<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Investicijska platforma s AI');
$page_description = 'Jednostavna investicijska platforma pokretana AI-jem — jasna tržišta, vođene odluke i brzo otvaranje računa na ' . SITE_NAME . '.';
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
        <h1>Ulažite jasno i jednostavno.<br><span class="text-accent">Neka AI zadrži jednostavnost.</span></h1>
        <p class="lead">
          Moderna investicijska platforma koja objašnjava tržišta jednostavnim jezikom, ističe korisne AI uvide i pomaže vam postavljati naloge bez nepotrebne buke.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Započnite od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Pogledajte kako funkcionira</a>
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
        <p class="eyebrow">Izrađeno za početnike</p>
        <h2>Tri koraka. Zatim trgujete.</h2>
        <p class="lead">Bez terminalnog žargona — jasan put od registracije do prve pozicije.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Otvorite račun</h3>
          <p>Dovoljno je nekoliko podataka. Provjera je kratka i vođena.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Uplatite sigurno</h3>
          <p>Uplatite od <?= MIN_DEPOSIT ?> <?= CURRENCY ?> pouzdanim načinima plaćanja.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Trgujte uz pomoć AI-ja</h3>
          <p>Pratite uvide jednostavnim jezikom i postavljajte naloge kada ste spremni.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI koji stvarno pomaže</p>
        <h2>Signali koje zaista razumijete</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> pretvara tržišnu buku u kratke, čitljive poruke — manje nagađanja, više odlučivanja.
        </p>
        <ul class="feature-list">
          <li>Jasni signali kupi / drži / prati</li>
          <li>Podsjetnici na rizik prije potvrde</li>
          <li>Sučelje koje ostaje mirno pod pritiskom</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Isprobajte platformu</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Primjer uvida">
        <p class="insight-panel__label">Uvid uživo</p>
        <p class="insight-panel__title">BTC / USD · stabilan momentum</p>
        <p class="insight-panel__body">
          Volatilnost se smiruje. AI predlaže praćenje sljedeće sesije prije povećanja veličine — vi kontrolirate svaki nalog.
        </p>
        <div class="insight-panel__meta">
          <span>Visoka pouzdanost</span>
          <span>Upravo ažurirano</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Započnite</p>
        <h2>Izradite svoj <?= e(SITE_NAME) ?> račun</h2>
        <p class="lead lead-light">
          Pridružite se platformi koja djeluje premium, a ostaje jednostavna — AI vodstvo od prvog dana.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Otvaranje u manje od 2 minute';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Pouzdana infrastruktura</p>
        <h2>Infrastrukturni partneri</h2>
        <p class="lead">Plaćanja i pristup tržištima putem etabliranih pružatelja.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Brzi odgovori</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Trebam li iskustvo u trgovanju?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Ne. <?= e(SITE_NAME) ?> je izrađena za početnike — AI savjeti su napisani jednostavnim jezikom.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Koji je minimalni depozit?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Možete početi od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Naknade ostaju vidljive prije potvrde.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Je li podrška dostupna?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Da — naš tim je dostupan non-stop za uplate i postavljanje računa.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Pročitajte cjeloviti FAQ →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

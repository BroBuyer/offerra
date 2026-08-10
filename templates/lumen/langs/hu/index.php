<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('MI-befektetési platform');
$page_description = 'Egyszerű, MI-alapú befektetési platform — átlátható piacok, vezetett döntések és gyors számlanyitás a ' . SITE_NAME . ' oldalon.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Bevezetés">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Fektessen be átláthatóan.<br><span class="text-accent">Hagyja, hogy az MI egyszerűen tartsa.</span></h1>
        <p class="lead">
          Modern befektetési platform, amely közérthetően magyarázza a piacokat, hasznos MI-elemzéseket emel ki, és segít megbízásokat leadni felesleges zaj nélkül.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Kezdés <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Így működik</a>
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
        <p class="eyebrow">Kezdőknek tervezve</p>
        <h2>Három lépés. Aztán már kereskedik.</h2>
        <p class="lead">Nincs terminálzsargon — világos út a regisztrációtól az első pozícióig.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Nyissa meg számláját</h3>
          <p>Néhány adat elegendő. Az ellenőrzés rövid és vezetett.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Töltse fel biztonságosan</h3>
          <p>Helyezzen el <?= MIN_DEPOSIT ?> <?= CURRENCY ?> összegtől megbízható fizetési módokkal.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Kereskedjen MI-segítséggel</h3>
          <p>Kövesse a közérthető elemzéseket, és adjon le megbízásokat, amikor készen áll.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">MI, ami valóban segít</p>
        <h2>Jelek, amelyeket tényleg megért</h2>
        <p class="lead">
          A <?= e(SITE_NAME) ?> a piaci zajt rövid, olvasható tippekké alakítja — kevesebb tippelés, több döntés.
        </p>
        <ul class="feature-list">
          <li>Egyértelmű vétel / tartás / figyelés jelek</li>
          <li>Kockázati emlékeztetők megerősítés előtt</li>
          <li>Felület, amely nyomás alatt is nyugodt marad</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Próbálja ki a platformot</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Példa insight">
        <p class="insight-panel__label">Élő insight</p>
        <p class="insight-panel__title">BTC / USD · stabil momentum</p>
        <p class="insight-panel__body">
          A volatilitás csökken. Az MI a következő session figyelését javasolja a méret növelése előtt — minden megbízásnál Ön dönt.
        </p>
        <div class="insight-panel__meta">
          <span>Magas megbízhatóság</span>
          <span>Épp most frissítve</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Kezdés</p>
        <h2>Hozza létre <?= e(SITE_NAME) ?> számláját</h2>
        <p class="lead lead-light">
          Csatlakozzon egy prémiumnak tűnő, mégis egyszerű platformhoz — MI-útmutatással már az első naptól.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Megnyitás 2 percen belül';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Megbízható infrastruktúra</p>
        <h2>Infrastruktúra-partnerek</h2>
        <p class="lead">Fizetések és piaci hozzáférés elismert szolgáltatókon keresztül.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">GYIK</p>
        <h2>Gyors válaszok</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Szükségem van kereskedési tapasztalatra?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Nem. A <?= e(SITE_NAME) ?> kezdő befektetőknek készült — az MI-tippek közérthető nyelven íródnak.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Mi a minimális befizetés?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= MIN_DEPOSIT ?> <?= CURRENCY ?> összegtől kezdhet. A díjak a megerősítés előtt láthatók.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Elérhető a támogatás?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Igen — csapatunk a nap 24 órájában segít a feltöltésben és a számla beállításában.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Teljes GYIK elolvasása →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

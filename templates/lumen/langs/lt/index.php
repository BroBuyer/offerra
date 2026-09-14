<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI investavimo platforma');
$page_description = 'Paprasta investavimo platforma, paremta dirbtiniu intelektu – aiškios rinkos, vadovaujami sprendimai ir greitas paskyros nustatymas ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Įvadas">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Investuokite aiškiai.<br><span class="text-accent">Tegul AI būna paprasta.</span></h1>
        <p class="lead">
          Šiuolaikinė investavimo platforma, kuri aiškia kalba paaiškina rinkas, išryškina naudingas AI įžvalgas ir padeda sudaryti sandorius be netvarkos.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Pradėkite nuo <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Pažiūrėkite, kaip tai veikia</a>
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
        <p class="eyebrow">Sukurta pradedantiesiems</p>
        <h2>Trys žingsniai. Tada jūs prekiaujate.</h2>
        <p class="lead">Jokio terminalo žargono – tiesiog aiškus kelias nuo registracijos iki pirmosios pozicijos.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Atidarykite paskyrą</h3>
          <p>Pasidalinkite keliomis detalėmis. Patikrinimas yra trumpas ir vadovaujamasi.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Saugiai finansuokite</h3>
          <p>Indėlis iš <?= MIN_DEPOSIT ?> <?= CURRENCY ?> naudojant patikimus mokėjimo būdus.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Prekyba su AI pagalba</h3>
          <p>Sekite įžvalgas paprasta kalba ir pateikite užsakymus, kai būsite pasiruošę.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI, kuris išlieka naudingas</p>
        <h2>Signalai, kuriuos iš tikrųjų galite suprasti</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> paverčia rinkos triukšmą trumpais, įskaitomais raginimais, todėl sugaišite mažiau laiko spėliodami ir daugiau laiko apsispręsite.
        </p>
        <ul class="feature-list">
          <li>Aiškūs pirkimo / laikymo / žiūrėjimo ženklai</li>
          <li>Priminimai apie riziką prieš patvirtindami</li>
          <li>Sąsaja, kuri išlieka rami esant spaudimui</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Išbandykite platformą</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Įžvalgos pavyzdys">
        <p class="insight-panel__label">Gyva įžvalga</p>
        <p class="insight-panel__title">BTC / USD · pastovus impulsas</p>
        <p class="insight-panel__body">
          Nepastovumas vėsta. AI siūlo žiūrėti kitą seansą prieš nustatant dydį – jūs galite kontroliuoti kiekvieną užsakymą.
        </p>
        <div class="insight-panel__meta">
          <span>Pasitikėjimas aukštas</span>
          <span>Tik dabar atnaujinta</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Pradėkite</p>
        <h2>Sukurkite savo <?= e(SITE_NAME) ?>sąskaitą</h2>
        <p class="lead lead-light">
          Prisijunkite prie platformos, sukurtos taip, kad jaustumėtės aukščiausios kokybės ir išliktumėte paprastas – dirbtinio intelekto gairės įtrauktos nuo pirmos dienos.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Atidarykite mažiau nei 2 minutes';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Patikimi bėgiai</p>
        <h2>Infrastruktūros partneriai</h2>
        <p class="lead">Mokėjimai ir patekimas į rinką per nusistovėjusius teikėjus.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">DUK</p>
        <h2>Greiti atsakymai</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Ar man reikia prekybos patirties?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Ne. <?= e(SITE_NAME) ?> sukurtas pirmą kartą investuotojams – AI patarimai parašyti paprasta kalba.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Koks yra minimalus depozitas?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Galite pradėti nuo <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Mokesčiai matomi prieš patvirtinant.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ar galima gauti paramą?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Taip – ​​mūsų komanda visą parą gali padėti finansuoti ir nustatyti paskyrą.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Skaitykite visus DUK →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

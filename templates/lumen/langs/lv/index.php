<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI ieguldījumu platforma');
$page_description = 'Vienkārša AI darbināta ieguldījumu platforma — skaidri tirgi, vadīti lēmumi un ātra konta izveide vietnē ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Ievads">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Ieguldiet skaidri.<br><span class="text-accent">Ļaujiet AI to padarīt vienkāršu.</span></h1>
        <p class="lead">
          Mūsdienīga ieguldījumu platforma, kas skaidro tirgus vienkāršā valodā, izceļ noderīgas AI atziņas un palīdz veikt darījumus bez lieka trokšņa.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Sāciet no <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Skatīt, kā tas darbojas</a>
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
        <p class="eyebrow">Radīta iesācējiem</p>
        <h2>Trīs soļi. Tad jūs jau tirgojaties.</h2>
        <p class="lead">Bez termināļa žargona — skaidrs ceļš no reģistrācijas līdz pirmajai pozīcijai.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Atveriet kontu</h3>
          <p>Sniedziet dažus datus. Verifikācija ir īsa un vadīta.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Iemaksājiet droši</h3>
          <p>Iemaksājiet no <?= MIN_DEPOSIT ?> <?= CURRENCY ?> ar uzticamiem maksājumu veidiem.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Tirgojieties ar AI palīdzību</h3>
          <p>Sekojiet skaidrām atziņām un iesniedziet rīkojumus, kad esat gatavi.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI, kas paliek noderīgs</p>
        <h2>Signāli, kurus patiešām saprotat</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> pārvērš tirgus troksni īsos, lasāmos norādījumos — mazāk minēšanas, vairāk lēmumu.
        </p>
        <ul class="feature-list">
          <li>Skaidri pirkt / turēt / vērot signāli</li>
          <li>Riska atgādinājumi pirms apstiprināšanas</li>
          <li>Saskarne, kas saglabā mieru spiediena apstākļos</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Izmēģināt platformu</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Piemēra atziņa">
        <p class="insight-panel__label">Tiešraides atziņa</p>
        <p class="insight-panel__title">BTC / USD · stabils impulss</p>
        <p class="insight-panel__body">
          Svārstīgums samazinās. AI iesaka vērot nākamo sesiju pirms pozīcijas palielināšanas — jūs joprojām kontrolējat katru rīkojumu.
        </p>
        <div class="insight-panel__meta">
          <span>Augsta pārliecība</span>
          <span>Atjaunināts tikko</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Sāciet</p>
        <h2>Izveidojiet savu <?= e(SITE_NAME) ?> kontu</h2>
        <p class="lead lead-light">
          Pievienojieties platformai, kas jūtas premium un paliek vienkārša — AI vadība iekļauta no pirmās dienas.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Atveriet mazāk nekā 2 minūtēs';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Uzticama infrastruktūra</p>
        <h2>Infrastruktūras partneri</h2>
        <p class="lead">Maksājumi un tirgus piekļuve caur pārbaudītiem pakalpojumu sniedzējiem.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Īsas atbildes</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Vai man ir nepieciešama tirdzniecības pieredze?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Nē. <?= e(SITE_NAME) ?> ir veidota pirmreizējiem ieguldītājiem — AI padomi ir uzrakstīti vienkāršā valodā.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kāda ir minimālā iemaksa?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Varat sākt no <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Komisijas ir redzamas pirms apstiprināšanas.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Vai ir pieejams atbalsts?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Jā — mūsu komanda ir pieejama visu diennakti, lai palīdzētu ar finansējumu un konta izveidi.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Lasīt pilno FAQ →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

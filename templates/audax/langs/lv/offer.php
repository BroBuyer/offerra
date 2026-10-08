<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Piedāvājums | ' . SITE_NAME . ' - Sāciet';
$page_description = 'Sāciet tirgot ' . SITE_NAME . '. Reģistrējieties tagad bez maksas.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$page_css = ['angebot-mob.min.css', 'angebot-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>
              Atveriet kontu šodien <?= e(SITE_NAME) ?>. Portfeļa panelis ir
              gatavs.
            </h1>
            <p>
              Mazāk nekā 5 minūtēs atverat bezmaksas kontu, iemaksājat un sākat
              tirgot. Sāciet šodien: tā ir iespēja solidam finanšu pamatam.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Reģistrēties</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Kā tas darbojas</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Konta atvēršanas ikona" />
                <h3>Konta atvēršana</h3>
                <p>
                  Kontu varat atvērt dažās sekundēs. Uzreiz iegūstat piekļuvi
                  tirdzniecības rīkiem un iespējām, kas jūs gaida.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Iemaksas ikona" />
                <h3>Iemaksājiet līdzekļus</h3>
                <p>Iemaksājiet līdzekļus, lai sāktu tirgot.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Pirkšanas un pārdošanas ikona" />
                <h3>Pirkšana un pārdošana</h3>
                <p>
                  Nostipriniet portfeli ar pārliecību. Ieejiet tirgū bez
                  vilcināšanās.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Nepalaidiet garām! Pievienojieties tūkstošiem treideru, kas sasniedz rezultātus.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Sekojiet portfelim ar nepārtrauktiem bilances atjauninājumiem un peļņu reāllaikā.</h3>
            </div>
            <div class="half right">
              <p>
                Nepalaidiet garām detaļas, pateicoties <?= e(SITE_NAME) ?> padziļinātajai
                tirdzniecības modeļu analīzei un nemitīgi atjauninātiem datiem. Sekojat visiem galvenajiem rādītājiem
                — bilancei, peļņai un cenu svārstībām. Ar šiem rīkiem
                palielināt ienesīgumu un pieņemat pārdomātus ieguldījumu lēmumus. Nākotne
                ir tagad: sāciet šodien.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Sāciet tagad</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

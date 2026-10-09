<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Erbjudande | ' . SITE_NAME . ' - Kom igång';
$page_description = 'Börja handla på ' . SITE_NAME . '. Registrera dig gratis nu.';
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
              Skapa ditt konto i dag hos <?= e(SITE_NAME) ?>. Portföljens instrumentpanel är
              klar.
            </h1>
            <p>
              På under 5 minuter skapar du det gratis kontot, sätter in och börjar
              handla. Starta i dag: det här är chansen att bygga en solid ekonomisk grund.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registrera dig</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Så fungerar det</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Ikon för kontoskapande" />
                <h3>Kontoskapande</h3>
                <p>
                  Du kan skapa kontot på några sekunder. Du får omedelbar tillgång till
                  handelsverktygen och de möjligheter som väntar.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Ikon för insättning" />
                <h3>Sätt in pengar</h3>
                <p>Sätt in pengar för att starta handeln.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Ikon för köp och sälj" />
                <h3>Köp och sälj</h3>
                <p>
                  Stärk portföljen tryggt. Ta steget in på marknaden utan
                  att tveka.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Missa inte det! Bli en av tusentals handlare som får resultat.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Följ portföljen med löpande saldouppdateringar och vinst i realtid.</h3>
            </div>
            <div class="half right">
              <p>
                Missa inte detaljer tack vare <?= e(SITE_NAME) ?>s grundliga analys av
                handelsmönster och alltid uppdaterade data. Du följer alla nyckeltal
                — saldo, vinst och kursrörelser. Med de här verktygen
                ökar du avkastningen och fattar genomtänkta investeringsval. Framtiden
                är nu: starta i dag.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Starta nu</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

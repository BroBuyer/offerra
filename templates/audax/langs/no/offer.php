<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kampanje | ' . SITE_NAME . ' - Kom i gang';
$page_description = 'Start trading på ' . SITE_NAME . '. Registrer deg gratis nå.';
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
              Åpne kontoen din i dag hos <?= e(SITE_NAME) ?>. Porteføljedashbordet er
              klart.
            </h1>
            <p>
              På under 5 minutter åpner du den gratis kontoen, setter inn og begynner å
              trade. Start i dag: dette er sjansen til å bygge et solid økonomisk fundament.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registrer deg</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Slik fungerer det</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Ikon for kontoåpning" />
                <h3>Kontoåpning</h3>
                <p>
                  Du kan åpne kontoen på noen sekunder. Du får umiddelbar tilgang til
                  tradingverktøyene og mulighetene som venter.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Ikon for innskudd" />
                <h3>Sett inn penger</h3>
                <p>Sett inn penger for å starte trading.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Ikon for kjøp og salg" />
                <h3>Kjøp og salg</h3>
                <p>
                  Styrk porteføljen med trygghet. Ta steget inn i markedet uten
                  å nøle.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Ikke gå glipp av det! Bli med tusenvis av tradere som får resultater.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Følg porteføljen med løpende saldooppdateringer og gevinst i sanntid.</h3>
            </div>
            <div class="half right">
              <p>
                Gå ikke glipp av detaljer takket være <?= e(SITE_NAME) ?>s grundige analyse av
                tradingmønstre og alltid oppdatert data. Du følger alle nøkkeltall
                — saldo, gevinst og kursbevegelser. Med disse verktøyene
                øker du avkastningen og tar veloverveide investeringsvalg. Fremtiden
                er nå: start i dag.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Start nå</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

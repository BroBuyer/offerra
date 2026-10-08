<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tilbud | ' . SITE_NAME . ' - Kom i gang';
$page_description = 'Start handel på ' . SITE_NAME . '. Tilmeld dig gratis nu.';
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
              Opret din konto i dag hos <?= e(SITE_NAME) ?>. Portefølje-dashboardet er
              klart.
            </h1>
            <p>
              På under 5 minutter opretter du den gratis konto, indbetaler og begynder at
              handle. Start i dag: dette er chancen for at bygge et solidt økonomisk fundament.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Tilmeld dig</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Sådan fungerer det</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Ikon for kontooprettelse" />
                <h3>Kontooprettelse</h3>
                <p>
                  Du kan oprette kontoen på få sekunder. Du får øjeblikkelig adgang til
                  handelsværktøjerne og de muligheder, der venter.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Ikon for indbetaling" />
                <h3>Indbetal penge</h3>
                <p>Indbetal penge for at starte handlen.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Ikon for køb og salg" />
                <h3>Køb og salg</h3>
                <p>
                  Styrk porteføljen med tryghed. Tag skridtet ind på markedet uden
                  at tøve.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Gå ikke glip af det! Bliv en af tusindvis af tradere, der får resultater.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Følg porteføljen med løbende saldoopdateringer og gevinst i realtid.</h3>
            </div>
            <div class="half right">
              <p>
                Gå ikke glip af detaljer takket være <?= e(SITE_NAME) ?>s grundige analyse af
                handelsmønstre og altid opdaterede data. Du følger alle nøgletal
                — saldo, gevinst og kursbevægelser. Med disse værktøjer
                øger du afkastet og træffer velovervejede investeringsvalg. Fremtiden
                er nu: start i dag.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Start nu</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Aanbod | ' . SITE_NAME . ' - Ga van start';
$page_description = 'Start met trading op ' . SITE_NAME . '. Meld je nu gratis aan.';
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
              Open vandaag je account bij <?= e(SITE_NAME) ?>. Het portefeuilledashboard is
              klaar.
            </h1>
            <p>
              In minder dan 5 minuten open je het gratis account, stort je en begin je met
              trading. Start vandaag: dit is je kans om een stevig financieel fundament te leggen.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Aanmelden</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Hoe het werkt</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Pictogram account openen" />
                <h3>Account openen</h3>
                <p>
                  Je kunt het account in enkele seconden openen. Je krijgt direct toegang tot onze
                  tradingtools en de kansen die op je wachten.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Pictogram storting" />
                <h3>Geld storten</h3>
                <p>Stort geld om met trading te beginnen.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Pictogram kopen en verkopen" />
                <h3>Kopen en verkopen</h3>
                <p>
                  Versterk de portefeuille met overtuiging. Zet de stap naar de markt zonder
                  te aarzelen.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Mis dit niet! Sluit je aan bij duizenden traders die resultaat boeken.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Volg de portefeuille met doorlopend bijgewerkte saldi en winst in realtime.</h3>
            </div>
            <div class="half right">
              <p>
                Mis geen detail dankzij de grondige analyse van <?= e(SITE_NAME) ?> van
                tradingpatronen en altijd actuele data. Je volgt alle kerncijfers
                — saldo, winst en koersschommelingen. Met deze tools
                vergroot je het rendement en neem je weloverwogen beleggingsbeslissingen. De toekomst
                is nu: start vandaag.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Start nu</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

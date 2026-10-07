<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Akcia | ' . SITE_NAME . ' - Začnite';
$page_description = 'Začnite trading na ' . SITE_NAME . '. Zaregistrujte sa teraz zadarmo.';
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
              Otvorte si účet dnes u <?= e(SITE_NAME) ?>. Nástenka portfólia je
              pripravená.
            </h1>
            <p>
              Za menej ako 5 minút otvoríte bezplatný účet, vložíte peniaze a začnete
              obchodovať. Začnite dnes: to je šanca vybudovať solídny finančný základ.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registrovať sa</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Ako to funguje</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Ikona otvorenia účtu" />
                <h3>Otvorenie účtu</h3>
                <p>
                  Účet môžete otvoriť v priebehu niekoľkých sekúnd. Okamžite získate prístup k
                  obchodným nástrojom a čakajúcim príležitostiam.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Ikona vkladu" />
                <h3>Vložte prostriedky</h3>
                <p>Vložte prostriedky, aby ste začali obchodovať.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Ikona nákupu a predaja" />
                <h3>Nákup a predaj</h3>
                <p>
                  Posilnite portfólio s istotou. Vstúpte na trh bez
                  váhania.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Nenechajte si to ujsť! Pridajte sa k tisícom traderov, ktorí dosahujú výsledky.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Sledujte portfólio vďaka priebežným aktualizáciám zostatku a zisku v reálnom čase.</h3>
            </div>
            <div class="half right">
              <p>
                Nenechajte si ujsť detaily vďaka hĺbkovej analýze <?= e(SITE_NAME) ?>
                obchodných vzorcov a neustále aktualizovaných dát. Sledujete všetky kľúčové ukazovatele
                — zostatok, zisk a výkyvy cien. Týmito nástrojmi
                zvyšujete výnos a robíte premyslené investičné rozhodnutia. Budúcnosť
                je teraz: začnite dnes.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Začať teraz</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

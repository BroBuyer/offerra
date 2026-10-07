<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Akce | ' . SITE_NAME . ' - Začněte';
$page_description = 'Začněte trading na ' . SITE_NAME . '. Zaregistrujte se nyní zdarma.';
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
              Otevřete si účet dnes u <?= e(SITE_NAME) ?>. Nástěnka portfolia je
              připravená.
            </h1>
            <p>
              Za méně než 5 minut otevřete bezplatný účet, vložíte peníze a začnete
              obchodovat. Začněte dnes: to je šance vybudovat solidní finanční základ.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registrovat se</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Jak to funguje</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Ikona otevření účtu" />
                <h3>Otevření účtu</h3>
                <p>
                  Účet můžete otevřít během několika sekund. Okamžitě získáte přístup k
                  obchodním nástrojům a čekajícím příležitostem.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Ikona vkladu" />
                <h3>Vložte prostředky</h3>
                <p>Vložte prostředky, abyste začali obchodovat.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Ikona nákupu a prodeje" />
                <h3>Nákup a prodej</h3>
                <p>
                  Posilte portfolio s jistotou. Vstupte na trh bez
                  váhání.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Nenechte si to ujít! Přidejte se k tisícům traderů, kteří dosahují výsledků.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Sledujte portfolio díky průběžným aktualizacím zůstatku a zisku v reálném čase.</h3>
            </div>
            <div class="half right">
              <p>
                Nenechte si ujít detaily díky hloubkové analýze <?= e(SITE_NAME) ?>
                obchodních vzorců a neustále aktualizovaných dat. Sledujete všechny klíčové ukazatele
                — zůstatek, zisk a výkyvy cen. Těmito nástroji
                zvyšujete výnos a děláte promyšlená investiční rozhodnutí. Budoucnost
                je teď: začněte dnes.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Začít nyní</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

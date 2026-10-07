<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ponuda | ' . SITE_NAME . ' - Počni';
$page_description = 'Počni trgovati na ' . SITE_NAME . '. Registriraj se sada besplatno.';
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
              Otvori račun danas na <?= e(SITE_NAME) ?>. Nadzorna ploča portfelja je
              spremna.
            </h1>
            <p>
              Za manje od 5 minuta otvaraš besplatni račun, uplaćuješ i počinješ
              trgovati. Počni danas: to je prilika za solidan financijski temelj.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registracija</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Kako funkcionira</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Ikona otvaranja računa" />
                <h3>Otvaranje računa</h3>
                <p>
                  Račun možeš otvoriti u nekoliko sekundi. Odmah dobivaš pristup
                  trgovačkim alatima i prilikama koje te čekaju.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Ikona uplate" />
                <h3>Uplati sredstva</h3>
                <p>Uplati sredstva da počneš trgovati.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Ikona kupnje i prodaje" />
                <h3>Kupnja i prodaja</h3>
                <p>
                  Ojačaj portfelj sa sigurnošću. Uđi na tržište bez
                  oklijevanja.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Ne propusti! Pridruži se tisućama tradera koji ostvaruju rezultate.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Prati portfelj uz stalne ažuriranja salda i dobit u stvarnom vremenu.</h3>
            </div>
            <div class="half right">
              <p>
                Ne propusti detalje zahvaljujući dubinskoj analizi <?= e(SITE_NAME) ?>
                trgovačkih obrazaca i stalno ažuriranih podataka. Pratiš sve ključne pokazatelje
                — saldo, dobit i oscilacije cijena. Tim alatima
                povećavaš prinos i donosiš promišljene investicijske odluke. Budućnost
                je sada: počni danas.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Počni sada</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

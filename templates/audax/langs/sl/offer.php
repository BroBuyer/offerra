<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ponudba | ' . SITE_NAME . ' - Začni';
$page_description = 'Začni trgovati na ' . SITE_NAME . '. Registriraj se zdaj brezplačno.';
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
              Odpri račun danes na <?= e(SITE_NAME) ?>. Nadzorna plošča portfelja je
              pripravljena.
            </h1>
            <p>
              V manj kot 5 minutah odpreš brezplačni račun, vplačaš in začneš
              trgovati. Začni danes: to je priložnost za trdno finančno osnovo.
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
            <h2>Kako deluje</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Ikona odprtja računa" />
                <h3>Odprtje računa</h3>
                <p>
                  Račun lahko odpreš v nekaj sekundah. Takoj dobiš dostop do
                  trgovalnih orodij in priložnosti, ki te čakajo.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Ikona vplačila" />
                <h3>Vplačaj sredstva</h3>
                <p>Vplačaj sredstva, da začneš trgovati.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Ikona nakupa in prodaje" />
                <h3>Nakup in prodaja</h3>
                <p>
                  Okrepi portfelj z zaupanjem. Vstopi na trg brez
                  obotavljanja.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Ne zamudi! Pridruži se tisočem traderjev, ki dosegajo rezultate.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Spremljaj portfelj s stalnimi posodobitvami salda in dobičkom v realnem času.</h3>
            </div>
            <div class="half right">
              <p>
                Ne zamudi podrobnosti zahvaljujoč poglobljeni analizi <?= e(SITE_NAME) ?>
                trgovalnih vzorcev in nenehno posodobljenih podatkov. Spremljaš vse ključne kazalnike
                — saldo, dobiček in nihanja cen. S temi orodji
                povečaš donos in sprejemaš premišljene naložbene odločitve. Prihodnost
                je zdaj: začni danes.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Začni zdaj</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

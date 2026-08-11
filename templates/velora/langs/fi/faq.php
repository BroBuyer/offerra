<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Vastauksia rahoitukseen, turvallisuuteen, tekoälynäkemyksiin ja aloittamiseen palvelussa ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';

$faq_chevron = '<svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Usein kysytyt kysymykset</h1>
      <p class="lead">Suoria vastauksia rekisteröitymisestä, turvallisuudesta ja siitä, miten tekoäly auttaa alustalla.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Miten aloitan?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Luo tili, suorita lyhyt tunnistautuminen ja talleta alkaen <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Kaaviot, työkalut ja ohjattu käyttöönotto avautuvat heti sen jälkeen. Voit myös chatata Lisan kanssa kulmassa.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Miten tekoäly auttaa kaupankäynnissä?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> näyttää lyhyitä markkinanäkemyksiä selkokielellä. Sinä päätät aina, toimitko.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Miten tilini on suojattu?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yhteydet käyttävät SSL-salausta. Emme koskaan pyydä tarpeettomia oikeuksia — pidä kirjautumistietosi yksityisinä.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Onko piilotettuja maksuja?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Maksut näytetään ennen vahvistusta. Ei yllätyksellisiä veloituksia talletuksista tai nostoista, kun ehtoja noudatetaan.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kuka on Lisa chat-widgetissä?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa on käyttöönottoavustajamme. Hän ohjaa sinut lyhyen kyselyn läpi ja auttaa lähettämään turvallisen tilipyynnön.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

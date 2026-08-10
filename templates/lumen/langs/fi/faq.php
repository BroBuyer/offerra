<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('UKK');
$page_description = 'Vastauksia rahoituksesta, turvallisuudesta, tekoälynäkemyksistä ja aloittamisesta ' . SITE_NAME . '-palvelussa.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">UKK</p>
      <h1>Ennen kuin rahoitat tilisi</h1>
      <p class="lead">Suoria vastauksia pääsystä, turvallisuudesta ja tekoälyn roolista alustalla.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Miten aloitan?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Luo tili, suorita lyhyt vahvistus ja talleta alkaen <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Kaaviot, työkalut ja ohjattu käyttöönotto avautuvat heti sen jälkeen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Miten tekoäly auttaa kaupankäynnissä?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> näyttää lyhyitä markkinanäkemyksiä selkeällä kielellä. Päätät aina itse, toimitko.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Miten tilini on suojattu?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yhteydet käyttävät SSL-salausta. Emme pyydä tarpeettomia oikeuksia — pidä kirjautumistietosi yksityisinä.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Onko piilokuluja?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kulut näytetään ennen vahvistusta. Ei yllätyksiä talletuksissa tai nostoissa, kun ehtoja noudatetaan.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('UKK');
$page_description = 'Vastauksia rahoitukseen, tietoturvaan, kuluihin ja aloittamiseen ' . SITE_NAME . '-palvelussa.';
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
      <p class="lead">Suorat vastaukset pääsystä, turvallisuudesta ja siitä, miten alusta toimii.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Miten aloitan?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Luo tili, vahvista sähköposti ja talleta alkaen <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Kaaviot, työkalut ja ohjattu aloitus avautuvat heti sen jälkeen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Miten <?= e(SITE_NAME) ?> on suojattu?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL-salaus, kaksivaiheinen tunnistautuminen ja vahvistetut maksupalvelut ovat jokaisen tilitoiminnon taustalla.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Entä kulut?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kulut näytetään ennen vahvistusta. Ei yllätyksiä talletuksissa tai nostoissa.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Voinko automatisoida kaupat?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kyllä — voit asettaa tekoälyä hyödyntäviä botteja riskirajoilla tai pysyä täysin manuaalisena ja vaihtaa milloin tahansa.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Miten nostot toimivat?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Pyydä nostoa hallintapaneelista. Useimmat tavat valmistuvat 1–3 arkipäivässä maksutavasta riippuen.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Onko sinulla vielä kysyttävää?</p>
        <a href="contacts.php" class="btn btn-outline">Ota yhteyttä tukeen</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('UKK');
$page_description = 'Vastauksia kaupankäynnistä, ominaisuuksista, tietoturvasta, kuluista ja aloittamisesta palvelussa ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">UKK</p>
      <h1>Usein kysytyt kysymykset</h1>
      <p class="lead">Kaikki tarvitsemasi ennen kuin aloitat.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Miten pääsen alkuun?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Luo tili, vahvista sähköpostisi ja talleta vähintään <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Saat heti käyttöösi kaaviot, työkalut ja aloitusoppaat.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Onko <?= e(SITE_NAME) ?> turvallinen ja luotettava?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Käytämme alan standardin mukaista SSL-salausta, kaksivaiheista tunnistautumista ja vahvistettuja maksuprosessoreita. Tietoturva on rakennettu alustan jokaiseen kerrokseen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Mitkä ovat kulut?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kulut ovat läpinäkyviä ja näytetään ennen kuin vahvistat minkään tapahtuman. Ei piilokuluja talletuksissa tai nostoissa.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Voinko käyttää automatisoitua kaupankäyntiä?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kyllä. Määritä tekoälyavusteiset botit riskiasetuksillasi tai käy kauppaa manuaalisesti — voit vaihtaa milloin tahansa.
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
              Pyydä nostoa hallintapaneelista. Käsittely kestää tyypillisesti 1–3 arkipäivää maksutavasta riippuen.
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

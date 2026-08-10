<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('GYIK');
$page_description = 'Válaszok a feltöltésről, biztonságról, díjakról és a kezdésről a(z) ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Mielőtt feltöltené a fiókját</h1>
      <p class="lead">Egyenes válaszok a hozzáférésről, biztonságról és a platform működéséről.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Hogyan kezdhetek?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Hozzon létre fiókot, erősítse meg az e-mailt, és helyezzen el legalább <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. A chartok, eszközök és az onboarding azonnal feloldódnak.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Mennyire biztonságos a(z) <?= e(SITE_NAME) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL titkosítás, kétfaktoros hitelesítés és ellenőrzött fizetési processzorok állnak minden fiókművelet mögött.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Mi a helyzet a díjakkal?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              A díjak a megerősítés előtt láthatók. Nincsenek meglepetésdíjak a befizetéseknél vagy kifizetéseknél.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Automatizálhatom a kereskedéseket?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Igen — állítson be AI-botokat kockázati limitekkel, vagy maradjon teljesen manuális, és bármikor váltson.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hogyan működnek a kifizetések?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kérje az irányítópultról. A legtöbb módszer 1–3 munkanap alatt teljesül a fizetési módtól függően.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Még vannak kérdései?</p>
        <a href="contacts.php" class="btn btn-outline">Kapcsolat a támogatással</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

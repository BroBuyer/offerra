<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('DUK');
$page_description = 'Atsakymai apie finansavimą, saugumą, AI įžvalgas ir darbo pradžią' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';

$faq_chevron = '<svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">DUK</p>
      <h1>Dažnai užduodami klausimai</h1>
      <p class="lead">Tiesūs atsakymai apie registraciją, saugą ir tai, kaip AI padeda platformoje.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Kaip man pradėti?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Sukurkite paskyrą, atlikite trumpą patvirtinimą ir įneškite įmoką iš<?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Diagramos, įrankiai ir vadovaujamas įvedimo atrakinimas iškart po to. Taip pat galite pabendrauti su Lisa kampe.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kaip AI padeda man prekiauti?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?>paprasta kalba pateikia trumpas rinkos įžvalgas. Jūs visada nusprendžiate, ar veikti.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kaip apsaugota mano sąskaita?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ryšiams naudojamas SSL šifravimas. Mes niekada neprašome nereikalingų leidimų – laikykite savo prisijungimą privatų.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ar yra paslėptų mokesčių?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Mokesčiai rodomi prieš patvirtinant. Jokių netikėtų mokesčių už indėlius ar išėmimus, kai laikomasi sąlygų.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kas yra Lisa pokalbių valdiklyje?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa yra mūsų priėmimo padėjėja. Ji supažindins jus su trumpa viktorina ir padės pateikti saugios paskyros užklausą.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

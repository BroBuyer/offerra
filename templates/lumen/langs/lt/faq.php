<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('DUK');
$page_description = 'Atsakymai apie finansavimą, saugumą, AI įžvalgas ir ' . SITE_NAME . ' pradžią.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">DUK</p>
      <h1>Prieš finansuodami savo sąskaitą</h1>
      <p class="lead">Tiesūs atsakymai apie prieigą, saugą ir tai, kaip AI padeda platformoje.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Kaip man pradėti?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Sukurkite paskyrą, užbaikite trumpą patvirtinimą ir įneškite indėlį iš <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Diagramos, įrankiai ir vadovaujamas įvedimo atrakinimas iškart po to.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kaip AI padeda man prekiauti?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> paprasta kalba pateikia trumpas rinkos įžvalgas. Jūs visada nusprendžiate, ar veikti.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kaip apsaugota mano sąskaita?
            <span class="faq-icon" aria-hidden="true"></span>
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
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Mokesčiai rodomi prieš patvirtinant. Jokių netikėtų mokesčių už indėlius ar išėmimus, kai laikomasi sąlygų.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

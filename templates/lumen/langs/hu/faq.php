<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('GYIK');
$page_description = 'Válaszok a feltöltésről, biztonságról, MI-elemzésekről és a ' . SITE_NAME . ' indulásáról.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">GYIK</p>
      <h1>Mielőtt feltölti a számlát</h1>
      <p class="lead">Egyenes válaszok a hozzáférésről, biztonságról és az MI szerepéről a platformon.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Hogyan kezdjek?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Hozzon létre számlát, végezze el a rövid ellenőrzést, és fizessen be <?= MIN_DEPOSIT ?> <?= CURRENCY ?> összegtől. Chartok, eszközök és vezetett onboarding ezután nyílnak meg.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hogyan segít az MI a kereskedésben?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              A <?= e(SITE_NAME) ?> rövid piaci elemzéseket mutat közérthetően. Mindig Ön dönt, hogy cselekszik-e.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hogyan védett a számlám?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              A kapcsolatok SSL-titkosítást használnak. Nem kérünk felesleges jogosultságokat — tartsa privátban a belépési adatait.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Vannak rejtett díjak?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              A díjak a megerősítés előtt látszanak. Nincs meglepetés a befizetéseknél vagy kifizetéseknél, ha betartja a feltételeket.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Válaszok a finanszírozásról, biztonságról, AI betekintésekről és a kezdésről a ' . SITE_NAME . ' platformon.';
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
      <h1>Gyakran ismételt kérdések</h1>
      <p class="lead">Egyértelmű válaszok a regisztrációról, biztonságról és arról, hogyan segít az AI a platformon.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Hogyan kezdjek el?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Hozzon létre fiókot, végezzen el egy rövid ellenőrzést, és fizessen be <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              A chartok, eszközök és vezetett belépés azonnal feloldódnak. Lisával is cseveghet a sarokban.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hogyan segít az AI a kereskedésben?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> rövid piaci betekintéseket jelenít meg érthető nyelven. Ön mindig eldönti, hogy cselekszik-e.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hogyan van biztonságban a fiókom?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              A kapcsolatok SSL titkosítást használnak. Soha nem kérünk felesleges engedélyeket — tartsa privátban a bejelentkezését.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Vannak rejtett díjak?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              A díjak a megerősítés előtt megjelennek. Nincs meglepetés a befizetéseknél vagy kifizetéseknél, ha betartja a feltételeket.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ki Lisa a csevegő widgetben?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa a belépési asszisensünk. Végigvezet egy rövid kvízen, és segít biztonságos fiókkérelem benyújtásában.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

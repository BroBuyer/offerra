<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('pogosta vprašanja');
$page_description = 'Odgovori o financiranju, varnosti, vpogledih v umetno inteligenco in o tem, kako začeti' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';

$faq_chevron = '<svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">pogosta vprašanja</p>
      <h1>Pogosta vprašanja</h1>
      <p class="lead">Neposredni odgovori o registraciji, varnosti in o tem, kako AI pomaga na platformi.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Kako naj začnem?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Ustvarite račun, opravite kratko preverjanje in položite pri<?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Grafikoni, orodja in vodeno vkrcanje se odklenejo takoj zatem. Lahko tudi klepetaš z Liso v kotu.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako mi AI pomaga trgovati?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?>prikazuje kratke tržne vpoglede v preprostem jeziku. Vedno se odločite, ali boste ukrepali.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako je moj račun zavarovan?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Povezave uporabljajo šifriranje SSL. Nikoli ne zahtevamo nepotrebnih dovoljenj - vaša prijava naj bo zasebna.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ali obstajajo skriti stroški?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Provizije so prikazane, preden potrdite. Brez presenetljivih stroškov za pologe ali dvige, če se upoštevajo pogoji.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kdo je Lisa v pripomočku za klepet?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa je naša pomočnica pri vkrcanju. Vodi vas skozi kratek kviz in vam pomaga oddati zahtevo za varen račun.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

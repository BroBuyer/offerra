<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('pogosta vprašanja');
$page_description = 'Odgovori o financiranju, varnosti, vpogledih v umetno inteligenco in začetku na ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">pogosta vprašanja</p>
      <h1>Preden napolnite svoj račun</h1>
      <p class="lead">Neposredni odgovori o dostopu, varnosti in tem, kako AI pomaga na platformi.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Kako naj začnem?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Ustvarite račun, opravite kratko preverjanje in položite denar od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Grafikoni, orodja in vodeno vkrcanje se odklenejo takoj zatem.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako mi AI pomaga trgovati?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> prikazuje kratke vpoglede na trg v preprostem jeziku. Vedno se odločite, ali boste ukrepali.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako je moj račun zavarovan?
            <span class="faq-icon" aria-hidden="true"></span>
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
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Provizije so prikazane, preden potrdite. Brez presenetljivih stroškov za pologe ali dvige, če se upoštevajo pogoji.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

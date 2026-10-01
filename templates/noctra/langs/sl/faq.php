<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odgovori o financiranju, varnosti, provizijah in začetku na ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Preden napolnite račun</h1>
      <p class="lead">Neposredni odgovori o dostopu, varnosti in delovanju platforme.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Kako začnem?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Ustvarite račun, potrdite e-pošto in položite od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Grafikoni, orodja in uvajanje se odklenijo takoj zatem.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako je <?= e(SITE_NAME) ?> zaščitena?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Šifriranje SSL, dvofaktorsko overjanje in preverjeni plačilni procesorji spremljajo vsako dejanje na računu.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kaj pa provizije?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Provizije so prikazane pred potrditvijo. Ni presenečenj pri pologih ali dvigih.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ali lahko avtomatiziram posle?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Da — nastavite bote UI z omejitvami tveganja ali ostanite povsem ročni in preklopite kadar koli.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako delujejo dvigi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Zahtevajte z nadzorne plošče. Večina načinov se poravna v 1–3 delovnih dneh, glede na način plačila.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Imate še vprašanja?</p>
        <a href="contacts.php" class="btn btn-outline">Kontaktirajte podporo</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Răspunsuri despre finanțare, securitate, insight-uri AI și cum să începeți pe ' . SITE_NAME . '.';
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
      <h1>Întrebări frecvente</h1>
      <p class="lead">Răspunsuri directe despre înregistrare, siguranță și cum ajută AI pe platformă.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Cum încep?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Creați un cont, finalizați o verificare scurtă și depuneți de la <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Graficele, instrumentele și onboarding-ul ghidat se deblochează imediat după. Puteți discuta și cu Lisa în colț.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Cum mă ajută AI să tranzacționez?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> afișează insight-uri scurte de piață în limbaj simplu. Decideți întotdeauna dacă acționați.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Cum este securizat contul meu?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Conexiunile folosesc criptare SSL. Nu cerem niciodată permisiuni inutile — păstrați login-ul privat.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Există taxe ascunse?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Taxele sunt afișate înainte de confirmare. Fără taxe surpriză la depuneri sau retrageri când termenii sunt respectați.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Cine este Lisa în widget-ul de chat?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa este asistenta noastră de onboarding. Vă conduce printr-un scurt quiz și vă ajută să trimiteți o cerere securizată de cont.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

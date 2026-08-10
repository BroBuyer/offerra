<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odgovori o financiranju, sigurnosti, AI uvidima i početku na ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Prije nego financirate račun</h1>
      <p class="lead">Izravni odgovori o pristupu, sigurnosti i ulozi AI-ja na platformi.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Kako započeti?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Izradite račun, dovršite kratku provjeru i uplatite od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Grafikoni, alati i vođeno uvođenje otključavaju se odmah nakon.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako mi AI pomaže u trgovanju?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> prikazuje kratke tržišne uvide jednostavnim jezikom. Uvijek vi odlučujete hoćete li djelovati.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako je moj račun zaštićen?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Veze koriste SSL enkripciju. Nikad ne tražimo nepotrebne dozvole — držite podatke za prijavu privatnima.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Postoje li skrivene naknade?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Naknade se prikazuju prije potvrde. Bez iznenađenja kod uplata ili isplata kada se poštuju uvjeti.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

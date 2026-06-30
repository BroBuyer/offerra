<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odpovede na otázky o obchodovaní, funkciách, bezpečnosti, poplatkoch a ako začať s ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Často kladené otázky</h1>
      <p class="lead">Všetko, čo potrebujete vedieť pred začiatkom.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Ako môžem začať?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Vytvorte si účet, overte e-mail a vložte minimálne <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Získate okamžitý prístup k grafom, nástrojom a úvodným sprievodcom.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Je <?= e(SITE_NAME) ?> bezpečné a spoľahlivé?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Používame SSL šifrovanie, 2FA a overených spracovateľov platieb. Bezpečnosť je integrovaná na každej úrovni platformy.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Aké sú poplatky?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Poplatky sú transparentné a zobrazené pred potvrdením akejkoľvek operácie. Žiadne skryté náklady pri vkladoch alebo výberoch.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Môžem použiť automatizované obchodovanie?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Áno. Môžete nastaviť botov s AI asistenciou podľa vášho rizikového profilu, alebo obchodovať manuálne — môžete kedykoľvek prepnúť.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ako fungujú výbery?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Požiadajte o výber vo svojej zóne účtu. Spracovanie zvyčajne trvá 1–3 pracovné dni podľa spôsobu platby.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Máte ešte otázky?</p>
        <a href="contacts.php" class="btn btn-outline">Kontaktujte podporu</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odpovede o financovaní, bezpečnosti, AI poznatkoch a štarte na ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Než účet financujete</h1>
      <p class="lead">Priame odpovede o prístupe, bezpečnosti a úlohe AI na platforme.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Ako začať?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Vytvorte účet, dokončite krátke overenie a vložte od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Grafy, nástroje a vedené onboarding sa odomknú hneď potom.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ako mi AI pomáha obchodovať?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> zobrazuje krátke trhové poznatky zrozumiteľným jazykom. Vždy rozhodujete vy.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ako je môj účet zabezpečený?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Spojenia používajú SSL šifrovanie. Nežiadame zbytočné oprávnenia — prihlasovacie údaje si uchovajte v súkromí.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Existujú skryté poplatky?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Poplatky sa zobrazia pred potvrdením. Žiadne prekvapenia pri vkladoch ani výberoch pri dodržaní podmienok.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odpovede na vklady, zabezpečenie, poplatky a začiatky na ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Skôr než vložíte prostriedky na účet</h1>
      <p class="lead">Priame odpovede k prístupu, bezpečnosti a fungovaniu platformy.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Ako začať?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Vytvorte účet, ověřte e-mail a vložte od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Grafy, nástroje a sprievodca sa odomknú hneď potom.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ako je zabezpečený <?= e(SITE_NAME) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL šifrovanie, dvojfaktorové overenie a overení platobní procesori stoja za každou akciou na účte.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Čo poplatky?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Poplatky vidíte pred potvrdením. Žiadne prekvapivé poplatky pri vkladoch ani výberoch.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Môžem automatizovať obchody?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Áno — nastavte AI boty s limitmi rizika, alebo zostaňte plne ručne a kedykoľvek prepnite.
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
              Žiadajte z dashboardu. Väčšina metód sa vysporiada počas 1–3 pracovných dní podľa platobnej metódy.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Ešte máte otázky?</p>
        <a href="contacts.php" class="btn btn-outline">Kontaktovať podporu</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

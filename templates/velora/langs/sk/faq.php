<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odpovede k financovaniu, zabezpečeniu, AI insightom a začiatku na ' . SITE_NAME . ' platforme.';
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
      <h1>Často kladené otázky</h1>
      <p class="lead">Priame odpovede k registrácii, bezpečnosti a tomu, ako AI pomáha na platforme.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Ako začať?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Vytvorte účet, dokončite krátku verifikáciu a vložte prostriedky od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Grafy, nástroje a vedený onboarding sa odomknú hneď potom. Môžete tiež chatovať s Lisou v rohu.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ako mi AI pomáha obchodovať?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> zobrazuje krátke trhové insighty v jednoduchom jazyku. Vždy sami rozhodujete, či konať.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ako je môj účet zabezpečený?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Pripojenia používajú SSL šifrovanie. Nikdy nepožadujeme zbytočné oprávnenia — udržujte svoje prihlásenie v súkromí.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Existujú skryté poplatky?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Poplatky sú zobrazené pred potvrdením. Žiadne prekvapivé poplatky za vklady alebo výbery, ak sú dodržané podmienky.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kto je Lisa v chat widgete?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa je naša asistentka onboardingu. Prevedie vás krátkym kvízom a pomôže odoslať bezpečnú žiadosť o účet.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

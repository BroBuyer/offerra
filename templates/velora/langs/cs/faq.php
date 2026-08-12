<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odpovědi k financování, zabezpečení, AI insightům a začátku na ' . SITE_NAME . '.';
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
      <p class="lead">Přímé odpovědi k registraci, bezpečnosti a tomu, jak AI pomáhá na platformě.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Jak začít?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Vytvořte účet, dokončete krátkou verifikaci a vložte prostředky od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Grafy, nástroje a vedený onboarding se odemknou hned poté. Můžete také chatovat s Lisou v rohu.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak mi AI pomáhá obchodovat?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> zobrazuje krátké tržní insighty v jednoduchém jazyce. Vždy sami rozhodujete, zda jednat.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak je můj účet zabezpečen?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Připojení používají SSL šifrování. Nikdy nepožadujeme zbytečná oprávnění — udržujte své přihlášení v soukromí.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Existují skryté poplatky?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Poplatky jsou zobrazeny před potvrzením. Žádné překvapivé poplatky za vklady nebo výběry, pokud jsou dodrženy podmínky.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kdo je Lisa v chat widgetu?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa je naše asistentka onboardingu. Provede vás krátkým kvízem a pomůže odeslat bezpečnou žádost o účet.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Svar om insättning, säkerhet, avgifter och att komma igång på ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Innan du sätter in pengar på ditt konto</h1>
      <p class="lead">Tydliga svar om åtkomst, säkerhet och hur plattformen fungerar.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Hur kommer jag igång?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Skapa ett konto, bekräfta e-post och sätt in från <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Diagram, verktyg och onboarding låses upp direkt.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hur är <?= e(SITE_NAME) ?> säkrad?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL-kryptering, tvåfaktorsautentisering och verifierade betalningsleverantörer ligger bakom varje kontoåtgärd.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hur är det med avgifter?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Avgifter visas innan du bekräftar. Inga överraskande avgifter på insättningar eller uttag.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kan jag automatisera affärer?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ja — skapa AI-assisterade botar med riskgränser, eller var helt manuell och byt när som helst.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hur fungerar uttag?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Begär från kontopanelen. De flesta metoder slutförs på 1–3 vardagar beroende på betalningsmetod.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Har du fortfarande frågor?</p>
        <a href="contacts.php" class="btn btn-outline">Kontakta support</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

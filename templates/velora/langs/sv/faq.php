<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Svar om finansiering, säkerhet, AI-insikter och att komma igång på ' . SITE_NAME . ' plattformen.';
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
      <h1>Vanliga frågor</h1>
      <p class="lead">Raka svar om registrering, säkerhet och hur AI hjälper på plattformen.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Hur kommer jag igång?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Skapa ett konto, slutför en kort verifiering och sätt in från <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Diagram, verktyg och guidad onboarding låses upp direkt efter. Du kan också chatta med Lisa i hörnet.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hur hjälper AI mig att handla?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> visar korta marknadsinsikter på enkelt språk. Du bestämmer alltid om du ska agera.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hur säkras mitt konto?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Anslutningar använder SSL-kryptering. Vi ber aldrig om onödiga behörigheter — håll din inloggning privat.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Finns det dolda avgifter?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Avgifter visas innan du bekräftar. Inga överraskningsavgifter på insättningar eller uttag när villkoren följs.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Vem är Lisa i chattwidgeten?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa är vår onboardingassistent. Hon guidar dig genom ett kort quiz och hjälper dig skicka en säker kontoförfrågan.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

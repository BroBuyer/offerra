<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Antwoorden over storten, beveiliging, kosten en starten op ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Voordat u uw account stort</h1>
      <p class="lead">Duidelijke antwoorden over toegang, veiligheid en hoe het platform werkt.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Hoe begin ik?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Maak een account aan, bevestig uw e-mail en stort vanaf <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Grafieken, tools en onboarding zijn daarna meteen beschikbaar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hoe is <?= e(SITE_NAME) ?> beveiligd?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL-versleuteling, tweefactorauthenticatie en geverifieerde betalingsverwerkers bij elke accountactie.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hoe zit het met kosten?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kosten ziet u vóór bevestiging. Geen verrassingen bij stortingen of opnames.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kan ik trades automatiseren?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ja — stel AI-ondersteunde bots in met risicolimieten, of blijf volledig handmatig en wissel wanneer u wilt.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hoe werken opnames?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vraag ze aan via het dashboard. De meeste methoden worden in 1–3 werkdagen afgehandeld, afhankelijk van de betaalmethode.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Nog vragen?</p>
        <a href="contacts.php" class="btn btn-outline">Contact support</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

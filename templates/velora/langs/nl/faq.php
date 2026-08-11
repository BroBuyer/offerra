<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Antwoorden over financiering, beveiliging, AI-inzichten en starten op ' . SITE_NAME . '.';
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
      <h1>Veelgestelde vragen</h1>
      <p class="lead">Duidelijke antwoorden over registratie, veiligheid en hoe AI helpt op het platform.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Hoe begin ik?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Maak een account aan, rond een korte verificatie af en stort vanaf <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Grafieken, tools en begeleide onboarding worden daarna vrijgegeven. U kunt ook chatten met Lisa in de hoek.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hoe helpt AI mij bij handelen?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> toont korte marktinzichten in gewone taal. U beslist altijd of u handelt.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hoe is mijn account beveiligd?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Verbindingen gebruiken SSL-encryptie. We vragen nooit onnodige rechten — houd uw login privé.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Zijn er verborgen kosten?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kosten worden getoond voordat u bevestigt. Geen verrassingskosten bij stortingen of opnames wanneer de voorwaarden worden gevolgd.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie is Lisa in de chatwidget?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa is onze onboardingassistent. Zij begeleidt u door een korte quiz en helpt een veilig accountverzoek in te dienen.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

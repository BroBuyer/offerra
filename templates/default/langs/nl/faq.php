<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Antwoorden op vragen over trading, functies, veiligheid, kosten en starten met ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Veelgestelde vragen</h1>
      <p class="lead">Alles wat u moet weten voordat u start.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Hoe kan ik beginnen?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Maak een account aan, verifieer uw e-mail en stort minimaal <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. U krijgt direct toegang tot grafieken, tools en begeleide onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Is <?= e(SITE_NAME) ?> veilig en betrouwbaar?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              We gebruiken SSL-encryptie, tweestapsverificatie en gevalideerde betalingsverwerkers. Beveiliging is op alle niveaus in het platform ingebouwd.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Welke kosten gelden er?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kosten zijn transparant en zichtbaar voordat u een transactie bevestigt. Geen verborgen kosten voor stortingen of opnames.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kan ik geautomatiseerd handelen gebruiken?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ja. Stel AI-ondersteunde bots in op basis van uw risicoprofiel of handel handmatig - u kunt op elk moment wisselen.
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
              U vraagt opnames aan via uw dashboard. Verwerking duurt meestal 1 tot 3 werkdagen, afhankelijk van de gekozen methode.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Nog vragen?</p>
        <a href="contacts.php" class="btn btn-outline">Contact opnemen met support</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

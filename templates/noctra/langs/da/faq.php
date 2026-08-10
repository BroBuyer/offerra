<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Svar om indbetaling, sikkerhed, gebyrer og opstart på ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Før du indbetaler på din konto</h1>
      <p class="lead">Klare svar om adgang, sikkerhed og hvordan platformen fungerer.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Hvordan kommer jeg i gang?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Opret en konto, bekræft e-mail, og indbetal fra <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Diagrammer, værktøjer og onboarding låses op med det samme.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvordan er <?= e(SITE_NAME) ?> sikret?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL-kryptering, tofaktorgodkendelse og verificerede betalingsudbydere ligger under hver kontohandling.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvad med gebyrer?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Gebyrer vises, før du bekræfter. Ingen overraskende gebyrer på ind- eller udbetalinger.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kan jeg automatisere handler?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ja — opret AI-assisterede bots med risikogrænser, eller bliv fuldt manuel og skift når som helst.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvordan fungerer udbetalinger?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Anmod fra dashboardet. De fleste metoder afvikles på 1–3 hverdage afhængigt af betalingsmetoden.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Har du stadig spørgsmål?</p>
        <a href="contacts.php" class="btn btn-outline">Kontakt support</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

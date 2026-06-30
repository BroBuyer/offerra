<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Svar om handel, funktioner, sikkerhed, gebyrer og hvordan du kommer i gang med ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Ofte stillede spørgsmål</h1>
      <p class="lead">Det vigtigste, du bør vide, før du går i gang.</p>
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
              Opret en konto, bekræft din e-mail og indsæt mindst <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Du får straks adgang til grafer, værktøjer og introduktionsguides.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Er <?= e(SITE_NAME) ?> sikkert og pålideligt?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vi bruger SSL-kryptering, totrinsgodkendelse og verificerede betalingsudbydere. Sikkerhed er indbygget i alle lag af platformen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvilke gebyrer er der?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Gebyrer er gennemsigtige og vises, før du bekræfter en handling. Ingen skjulte omkostninger på indbetalinger eller udbetalinger.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kan jeg bruge automatiseret handel?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ja. Du kan konfigurere AI-assisterede bots ud fra din risikoprofil eller handle manuelt — du kan skifte når som helst.
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
              Du anmoder om udbetaling fra dit område. Behandlingen tager typisk 1–3 hverdage afhængigt af betalingsmetode.
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

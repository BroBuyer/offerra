<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Svar på spørsmål om handel, funksjoner, sikkerhet, gebyrer og å komme i gang med ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Ofte stilte spørsmål</h1>
      <p class="lead">Alt du trenger å vite før du starter.</p>
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
              Opprett en konto, bekreft e-posten din og sett inn minst <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Du får umiddelbar tilgang til diagrammer, verktøy og veiledet onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Er <?= e(SITE_NAME) ?> trygg og pålitelig?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vi bruker SSL-kryptering, tofaktorautentisering og validerte betalingsbehandlere. Sikkerhet er innebygd på alle nivåer i plattformen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvilke gebyrer gjelder?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Gebyrer er transparente og synlige før du bekrefter og transaksjon. Ingen skjulte gebyrer for innskudd eller uttak.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kan jeg bruke automatisert handel?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ja. Sett opp AI-støttede roboter basert på risikoprofilen din, eller handle manuelt – du kan bytte når som helst.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hvordan fungerer uttak?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Du ber om uttak via dashbordet ditt. Behandling tar vanligvis 1 til 3 virkedager, avhengig av valgt metode.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Flere spørsmål?</p>
        <a href="contacts.php" class="btn btn-outline">Kontakt support</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

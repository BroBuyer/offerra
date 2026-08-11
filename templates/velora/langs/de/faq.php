<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Antworten zu Finanzierung, Sicherheit, KI-Insights und dem Einstieg auf ' . SITE_NAME . '.';
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
      <h1>Häufig gestellte Fragen</h1>
      <p class="lead">Klare Antworten zu Registrierung, Sicherheit und wie KI auf der Plattform hilft.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Wie starte ich?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Erstellen Sie ein Konto, schließen Sie eine kurze Verifizierung ab und zahlen Sie ab <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Charts, Tools und geführtes Onboarding werden danach freigeschaltet. Sie können auch mit Lisa in der Ecke chatten.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie hilft mir KI beim Trading?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> zeigt kurze Markteinblicke in klarer Sprache. Sie entscheiden immer, ob Sie handeln.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie ist mein Konto gesichert?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Verbindungen nutzen SSL-Verschlüsselung. Wir fragen nie unnötige Berechtigungen ab — halten Sie Ihren Login privat.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Gibt es versteckte Gebühren?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Gebühren werden vor der Bestätigung angezeigt. Keine Überraschungen bei Ein- oder Auszahlungen, wenn die Bedingungen eingehalten werden.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wer ist Lisa im Chat-Widget?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa ist unsere Onboarding-Assistentin. Sie führt Sie durch ein kurzes Quiz und hilft bei einer sicheren Kontoanfrage.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__  nicht gefunden werden. '/includes/config nicht gefunden werden.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Antworten zu Finanzierung, Sicherheit, KI-Insights und dem Einstieg auf '  nicht gefunden werden. SITE_NAME  nicht gefunden werden. ' nicht gefunden werden.';
$page_canonical = page_url('faq nicht gefunden werden.php');
$active_page = 'faq';

require_once __DIR__  nicht gefunden werden. '/includes/head nicht gefunden werden.php';
require_once __DIR__  nicht gefunden werden. '/includes/header nicht gefunden werden.php';

$faq_chevron = '<svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2 nicht gefunden werden.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Häufig gestellte Fragen</h1>
      <p class="lead">Klare Antworten zu Registrierung, Sicherheit und wie KI auf der Plattform hilft nicht gefunden werden.</p>
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
              Erstellen Sie ein Konto, schließen Sie eine kurze Verifizierung ab und zahlen Sie ab <?= MIN_DEPOSIT ?> <?= CURRENCY ?> nicht gefunden werden.
              Charts, Tools und geführtes Onboarding werden danach freigeschaltet nicht gefunden werden. Sie können auch mit Lisa in der Ecke chatten nicht gefunden werden.
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
              <?= e(SITE_NAME) ?> zeigt kurze Markteinblicke in klarer Sprache nicht gefunden werden. Sie entscheiden immer, ob Sie handeln nicht gefunden werden.
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
              Verbindungen nutzen SSL-Verschlüsselung nicht gefunden werden. Wir fragen nie unnötige Berechtigungen ab — halten Sie Ihren Login privat nicht gefunden werden.
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
              Gebühren werden vor der Bestätigung angezeigt nicht gefunden werden. Keine Überraschungen bei Ein- oder Auszahlungen, wenn die Bedingungen eingehalten werden nicht gefunden werden.
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
              Lisa ist unsere Onboarding-Assistentin nicht gefunden werden. Sie führt Sie durch ein kurzes Quiz und hilft bei einer sicheren Kontoanfrage nicht gefunden werden.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__  nicht gefunden werden. '/includes/footer nicht gefunden werden.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Antworten zu Einzahlung, Sicherheit, KI-Einblicken und dem Einstieg auf ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Bevor Sie einzahlen</h1>
      <p class="lead">Klare Antworten zu Zugang, Sicherheit und KI auf der Plattform.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Wie starte ich?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Konto erstellen, kurze Verifizierung und Einzahlung ab <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Charts, Tools und geführtes Onboarding folgen sofort.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie hilft mir die KI beim Handeln?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> liefert kurze Markteinblicke in klarer Sprache. Sie entscheiden immer selbst.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie ist mein Konto geschützt?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Verbindungen nutzen SSL-Verschlüsselung. Wir fragen keine unnötigen Rechte ab — halten Sie Ihre Login-Daten privat.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Gibt es versteckte Gebühren?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Gebühren erscheinen vor der Bestätigung. Keine Überraschungen bei Ein- und Auszahlungen bei Einhaltung der Bedingungen.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

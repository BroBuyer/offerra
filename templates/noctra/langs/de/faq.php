<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Antworten zu Einzahlung, Sicherheit, Gebühren und dem Einstieg bei ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Bevor Sie Ihr Konto aufladen</h1>
      <p class="lead">Klare Antworten zu Zugang, Sicherheit und Funktionsweise der Plattform.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Wie starte ich?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Erstellen Sie ein Konto, bestätigen Sie Ihre E-Mail und zahlen Sie ab <?= MIN_DEPOSIT ?> <?= CURRENCY ?> ein. Charts, Tools und Einführung sind danach sofort verfügbar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie ist <?= e(SITE_NAME) ?> abgesichert?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL-Verschlüsselung, Zwei-Faktor-Authentifizierung und geprüfte Zahlungsanbieter stehen hinter jeder Kontoaktion.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie sieht es mit Gebühren aus?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Gebühren werden vor der Bestätigung angezeigt. Keine Überraschungen bei Ein- oder Auszahlungen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kann ich Trades automatisieren?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ja — richten Sie KI-gestützte Bots mit Risikolimits ein, oder bleiben Sie komplett manuell und wechseln jederzeit.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie funktionieren Auszahlungen?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Fordern Sie sie im Dashboard an. Die meisten Methoden werden in 1–3 Werktagen abgewickelt — je nach Zahlungsmethode.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Noch Fragen?</p>
        <a href="contacts.php" class="btn btn-outline">Support kontaktieren</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

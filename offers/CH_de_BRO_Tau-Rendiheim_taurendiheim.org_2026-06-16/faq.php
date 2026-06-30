<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Antworten zu Trading, Funktionen, Sicherheit, Gebühren und dem Einstieg bei ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Häufig gestellte Fragen</h1>
      <p class="lead">Alles, was Sie vor dem Start wissen sollten.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Wie kann ich starten?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Eröffnen Sie ein Konto, bestätigen Sie Ihre E-Mail und zahlen Sie mindestens <?= MIN_DEPOSIT ?> <?= CURRENCY ?> ein. Sie erhalten sofortigen Zugang zu Charts, Tools und Einführungsanleitungen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ist <?= e(SITE_NAME) ?> sicher und vertrauenswürdig?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Wir verwenden SSL-Verschlüsselung, Zwei-Faktor-Authentifizierung und geprüfte Zahlungsabwickler. Sicherheit ist auf jeder Ebene der Plattform integriert.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie hoch sind die Gebühren?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Die Gebühren sind transparent und werden angezeigt, bevor Sie eine Transaktion bestätigen. Keine versteckten Kosten bei Ein- oder Auszahlungen.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kann ich automatisiert handeln?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ja. Sie können Bots mit KI-Unterstützung entsprechend Ihrem Risikoprofil konfigurieren oder manuell handeln — Sie können jederzeit wechseln.
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
              Fordern Sie eine Auszahlung über Ihr persönliches Konto an. Die Bearbeitung dauert in der Regel 1–3 Werktage, je nach Zahlungsmethode.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Haben Sie noch Fragen?</p>
        <a href="contacts.php" class="btn btn-outline">Support kontaktieren</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

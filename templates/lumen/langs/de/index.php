<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('KI-Investitionsplattform');
$page_description = 'Eine einfache KI-gestützte Investitionsplattform — klare Märkte, geführte Entscheidungen und schnelle Kontoeröffnung auf ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Einführung">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Investieren Sie mit Klarheit.<br><span class="text-accent">Lassen Sie die KI es einfach halten.</span></h1>
        <p class="lead">
          Eine moderne Investitionsplattform, die Märkte in klarer Sprache erklärt, nützliche KI-Einblicke hervorhebt und Ihnen hilft, ohne Ballast zu handeln.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Starten ab <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">So funktioniert’s</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">Für Einsteiger gemacht</p>
        <h2>Drei Schritte. Dann handeln Sie.</h2>
        <p class="lead">Kein Terminal-Jargon — ein klarer Weg von der Anmeldung zur ersten Position.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Konto eröffnen</h3>
          <p>Wenige Angaben reichen. Die Verifizierung ist kurz und geführt.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Sicher einzahlen</h3>
          <p>Einzahlung ab <?= MIN_DEPOSIT ?> <?= CURRENCY ?> mit vertrauenswürdigen Zahlungsmethoden.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Mit KI-Hilfe handeln</h3>
          <p>Folgen Sie verständlichen Einblicken und platzieren Sie Orders, wenn Sie bereit sind.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">KI, die wirklich hilft</p>
        <h2>Signale, die Sie verstehen</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> verwandelt Marktlärm in kurze, lesbare Hinweise — weniger Rätselraten, mehr Entscheiden.
        </p>
        <ul class="feature-list">
          <li>Klare Kauf-/Halten-/Beobachten-Hinweise</li>
          <li>Risikoerinnerungen vor der Bestätigung</li>
          <li>Eine Oberfläche, die auch unter Druck ruhig bleibt</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Plattform testen</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Beispiel-Einblick">
        <p class="insight-panel__label">Live-Einblick</p>
        <p class="insight-panel__title">BTC / USD · stabiles Momentum</p>
        <p class="insight-panel__body">
          Die Volatilität lässt nach. Die KI empfiehlt, die nächste Session zu beobachten, bevor Sie aufstocken — Sie behalten die Kontrolle über jede Order.
        </p>
        <div class="insight-panel__meta">
          <span>Hohe Konfidenz</span>
          <span>Gerade aktualisiert</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Loslegen</p>
        <h2>Erstellen Sie Ihr <?= e(SITE_NAME) ?>-Konto</h2>
        <p class="lead lead-light">
          Eine Plattform, die premium wirkt und einfach bleibt — KI-Hilfe ab dem ersten Tag.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'In unter 2 Minuten öffnen';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Vertrauenswürdige Infrastruktur</p>
        <h2>Infrastrukturpartner</h2>
        <p class="lead">Zahlungen und Marktzugang über etablierte Anbieter.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Kurze Antworten</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Brauche ich Handelserfahrung?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Nein. <?= e(SITE_NAME) ?> ist für Erstinvestoren gebaut — KI-Tipps in klarer Sprache.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Wie hoch ist die Mindesteinzahlung?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sie können ab <?= MIN_DEPOSIT ?> <?= CURRENCY ?> starten. Gebühren bleiben vor der Bestätigung sichtbar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Gibt es Support?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ja — unser Team hilft rund um die Uhr bei Einzahlung und Kontoeinrichtung.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Zur vollständigen FAQ →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

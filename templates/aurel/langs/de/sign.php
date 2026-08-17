<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Registrierung ' . SITE_NAME;
$page_description = 'Eröffnen Sie Ihr Konto bei ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Jetzt starten</span>
    <h1>Konto eröffnen</h1>
    <p class="kpnq92g">Ein paar Angaben zum Start, dann übernimmt ein Spezialist. In diesem Schritt wird nichts abgebucht.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Was als Nächstes passiert</h2>
    <ol class="nxlk2qu">
      <li><h3>Sie senden das Formular</h3><p>Es dauert wenige Minuten und kostet nichts.</p></li>
      <li><h3>Ein Spezialist ruft an</h3><p>Sie bestätigen Ihre Daten, beantworten Fragen und erklären den nächsten Schritt. Kein Druck zur Einzahlung.</p></li>
      <li><h3>Sie prüfen und wählen einen Betrag</h3><p>Erst dann bewegt sich Geld, und nur in dem Betrag, den Sie wählen.</p></li>
    </ol>
    <p class="jkkyl">Investieren birgt Risiken, einschließlich des möglichen Verlusts eines Teils oder des gesamten Kapitals. Der Wert von Anlagen kann fallen oder steigen, und Sie können weniger zurückerhalten, als Sie eingesetzt haben. Sie sollten kein Geld investieren, dessen Verlust Sie sich nicht leisten können.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Starten — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Häufige Fragen</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Was Sie brauchen</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Eine E-Mail-Adresse, die Sie wirklich lesen.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Eine Telefonnummer, damit ein Spezialist Sie erreicht.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ein Ausweisdokument für den späteren Prüfungsschritt.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Was nach dem Absenden des Formulars passiert</h2>
    <h3>Der Prüf-Anruf</h3>
    <p>Ein Spezialist ruft an, bestätigt die Angaben, beantwortet Fragen und stimmt einen sinnvollen Startbetrag ab. Der Anruf ist ein Gespräch, kein Verkaufsskript: ein Konto mit unrealistischen Erwartungen nützt niemandem.</p>
    <h4>Wie lange es dauert</h4>
    <p>Meist ein Anruf von zehn bis fünfzehn Minuten. Wenn Sie zu einer bestimmten Zeit angerufen werden möchten, geben Sie das im Formular an — die Zeit wird eingehalten.</p>
    <h3>Identitätsprüfungen erklärt</h3>
    <p>Vor der ersten Einzahlung werden ein Lichtbildausweis und ein aktuelles Dokument mit Adresse verlangt. Das ist dieselbe Anforderung wie bei jeder regulierten Finanzdienstleistung — damit eine Auszahlung nur an Sie zurückgeht.</p>
    <h4>Was akzeptiert wird</h4>
    <p>Reisepass oder Personalausweis und eine Stromrechnung oder ein Kontoauszug der letzten drei Monate. Ein scharfes Foto vom Handy reicht.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Konto eröffnen</h2>
      <p class="pt6joj">In wenigen Minuten starten.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Jetzt starten';
  $form_class = 'leadform lead-form aurel-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

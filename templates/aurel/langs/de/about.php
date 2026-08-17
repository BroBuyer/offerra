<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Über uns ' . SITE_NAME;
$page_description = 'Ein Konto, klarer Blick auf Ihr Kapital — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Die Plattform</span>
    <h1>Ein Konto, klarer Blick auf alles</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> bringt Guthaben, Strategie und Performance in ein einziges transparentes Dashboard, damit jede Entscheidung informiert und jede Zahl sichtbar ist.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Die Menschen hinter Ihrem Konto</h2>
    <p>Hinter der Oberfläche stehen Analysten, die täglich die Märkte studieren, Ingenieure, die die Plattform am Laufen halten, und Support-Spezialisten, die in Ihrer Sprache antworten.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Marktanalysten, die Bedingungen täglich prüfen, nicht einmal im Quartal.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ingenieure für die Plattform, mit Rund-um-die-Uhr-Monitoring.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Support-Spezialisten für Onboarding, Prüfung und Auszahlungen.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Regulierung, Risiko und was wir nicht versprechen</h2>
    <p>Investieren birgt Risiken, und keine Plattform nimmt sie weg. Eine Plattform kann klar sein: Bedingungen veröffentlichen, Kundengeld bei regulierten Partnern halten und Auszahlungen dokumentieren.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Identitätsprüfung, bevor Geld auf dem Konto bewegt wird.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Auszahlungen kehren zur selben Methode wie die Einzahlung zurück.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Bedingungen, Risikohinweis und Datenschutzerklärung vollständig veröffentlicht.</span></li>
    </ul>
    <p class="jkkyl">Investieren birgt Risiken, einschließlich des möglichen Verlusts eines Teils oder des gesamten Kapitals. Der Wert von Anlagen kann fallen oder steigen, und Sie können weniger zurückerhalten, als Sie eingesetzt haben. Sie sollten kein Geld investieren, dessen Verlust Sie sich nicht leisten können.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Starten — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Nachricht senden</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Wie die Plattform entstanden ist</h2>
    <ol class="nxlk2qu">
      <li><h3>Der Ausgangspunkt</h3><p>Eine kleine Gruppe von Analysten und Ingenieuren hörte immer dieselbe Klage: die Tools gibt es, aber niemand erklärt sie.</p></li>
      <li><h3>Erste funktionierende Version</h3><p>Die erste Version machte eines: Guthaben und Position verständlich zeigen. Alles andere wurde entfernt, bis das klar war.</p></li>
      <li><h3>Die menschliche Seite</h3><p>Automatisierung beantwortet was und wann; Menschen beantworten warum. Support-Spezialisten kamen dazu, damit jedes Mitglied jemanden zum Fragen hat.</p></li>
      <li><h3>Öffnung für weitere Märkte</h3><p>Lokale Zahlungsmethoden, Sprachen und Support-Zeiten.</p></li>
      <li><h3>Wo wir jetzt stehen</h3><p>Dieselben Prinzipien in größerem Maßstab: transparente Zahlen, erreichbare Menschen, keine Überraschungen im Kleingedruckten.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Wofür wir da sind</h2>
    <p>Die meisten, die investieren wollen, fangen nie an, weil jeder Weg für jemanden gemacht scheint, der das Vokabular schon kennt. Wir haben das Gegenteil gebaut: ein Konto, klare Sprache und ein Spezialist, mit dem Sie wirklich sprechen.</p>
    <p>Kein Jargon, wo ein klarer Satz reicht, keine Gebühren, die erst nach der Geldbewegung erscheinen, und keine Ertragsversprechen, die niemand ehrlich garantieren kann.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Aktive Nutzer</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Gehandeltes Volumen</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Support</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

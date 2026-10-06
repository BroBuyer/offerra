<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Missbrauch melden | ' . SITE_NAME;
$page_description = 'Melden Sie Missbrauch oder verdächtige Aktivitäten auf ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Missbrauch melden</h1>
            <p class="bold-title">1. Missbrauchsmeldung</p>
            <p>
              1.1. Wenn Sie auf unserer Website unangemessene Inhalte finden, melden Sie uns das bitte
              über unser Kontaktformular.
            </p>
            <p>Kontakt: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. In diesem Abschnitt können Sie missbräuchliches Verhalten oder Inhalte beschreiben,
              die gegen unsere Richtlinien verstoßen.
            </p>
            <p>
              1.3. Ihre Meldung ist uns wichtig. Bitte machen Sie konkrete Angaben, damit wir
              den Vorfall sachgerecht prüfen können.
            </p>
            <p>Mit dem Absenden einer Meldung akzeptieren Sie auch unsere Datenschutzerklärung.</p>
            <p class="bold-title">2. Wer darf melden</p>
            <p>
              2.1. Wenn Sie Opfer von Missbrauch geworden sind oder unangemessenes Verhalten feststellen, haben Sie
              das Recht, es zu melden.
            </p>
            <p>2.1.1. Sie müssen mindestens 18 Jahre alt sein, um eine Meldung abzugeben.</p>
            <p>2.1.2. Die Meldung muss wahrheitsgemäß und auf Tatsachen gestützt sein.</p>
            <p>2.1.3. Die Nutzung des Meldeformulars muss in Ihrem Land rechtmäßig sein.</p>
            <p>2.2. Für falsche oder böswillige Meldungen übernehmen wir keine Verantwortung.</p>
            <p class="bold-title">3. Meldeverfahren</p>
            <p>3.1. Wir behalten uns vor, alle Missbrauchsmeldungen zu prüfen.</p>
            <p>3.2. Wird eine Meldung als begründet angesehen, ergreifen wir die erforderlichen Maßnahmen.</p>
            <p class="bold-title">4. Unzulässige Handlungen bei Meldungen</p>
            <p>4.1. Die Nutzung des Formulars zu böswilligen Zwecken ist nicht gestattet.</p>
            <p>4.1.1. Falsche oder irreführende Meldungen sind nicht gestattet.</p>
            <p>4.1.2. Die Belästigung anderer Nutzer über das Meldesystem ist nicht gestattet.</p>
            <p>4.1.3. Der Einsatz von Bots oder Automatisierung zum Absenden von Meldungen ist untersagt.</p>
            <p>4.1.4. Jeder Versuch, das Meldesystem zu manipulieren, wird untersucht.</p>
            <p>4.1.5. Die Nutzung des Systems zur Verbreitung falscher Informationen ist untersagt.</p>
            <p>4.1.6. Versuche, eine Untersuchung zu behindern, sind nicht gestattet.</p>
            <p>4.1.7. Die Nutzung des Systems für Drohungen ist nicht gestattet.</p>
            <p>4.1.8. Jede rechtswidrige Handlung im Zusammenhang mit Meldungen wird geahndet.</p>
            <p>4.1.9. Versuche, Melderichtlinien zu umgehen, sind nicht gestattet.</p>
            <p>4.1.10. Jeder Missbrauch des Meldesystems wird ernst genommen.</p>
            <p class="bold-title">5. Immaterialgüterrechte bei Meldungen</p>
            <p>
              5.1. Inhalte, die Sie bei einer Missbrauchsmeldung übermitteln, begründen keine Eigentumsrechte.
            </p>
            <p>5.2. Durch eine Meldung erwerben Nutzer keine Rechte an Website-Inhalten.</p>
            <p>5.3. Meldungen dienen ausschließlich der Prüfung.</p>
            <p>5.4. Dritte dürfen Meldungen weder kopieren noch verändern.</p>
            <p class="bold-title">6. Haftungsbeschränkung bei Meldungen</p>
            <p>6.1. Mit dem Absenden einer Meldung übernehmen Sie die Verantwortung für deren Inhalt.</p>
            <p>6.2. Für Folgen eingereichter Meldungen übernehmen wir keine Verantwortung.</p>
            <p>6.3. Jeder aus einer Meldung entstehende Schaden liegt in der Verantwortung des Nutzers.</p>
            <p>6.4. Für durch Meldungen verursachte Schäden übernehmen wir keine Haftung.</p>
            <p>
              6.5. Technische Probleme des Meldesystems fallen nicht in unsere Verantwortung.
            </p>
            <p class="bold-title">7. Hinweise zum Meldeverfahren</p>
            <p>
              7.1. Mit der Nutzung des Meldesystems erklären Sie sich damit einverstanden, dass wir Sie um weitere Angaben bitten dürfen.
            </p>
            <p>7.2. Meldungen werden vertraulich behandelt.</p>
            <p>7.3. Nutzern wird empfohlen, eine Kopie ihrer Meldungen aufzubewahren.</p>
            <p class="bold-title">8. Weitere Links und Ressourcen</p>
            <p>8.1. Weitere Hinweise zum Melden von Missbrauch finden Sie in unseren Richtlinien.</p>
            <p>8.2. Links zu externen Quellen stellen keine Empfehlung unsererseits dar.</p>
            <p>8.3. Wir empfehlen, jede Quelle vor der Nutzung zu prüfen.</p>
            <p class="bold-title">9. Allgemeine Bestimmungen zu Meldungen</p>
            <p>
              9.1. Wir behalten uns vor, das Meldeverfahren zu ändern, auszusetzen oder einzustellen
              jederzeit.
            </p>
            <p>
              9.2. Die Bedingungen dieses Verfahrens können sich jederzeit ändern. Die fortgesetzte Nutzung
              des Meldeservice nach solchen Änderungen gilt als Annahme der neuen Bedingungen.
            </p>
            <p>9.3. Mit dem Absenden einer Meldung akzeptiert der Nutzer diese Bedingungen vollständig.</p>
            <p>
              9.4. Jede Vereinbarung oder Erklärung, schriftlich oder mündlich, die nicht unter die
              konkreten Punkte dieser Bedingungen fällt, ist rechtlich unwirksam und bindet keine der Parteien.
            </p>
            <p>
              9.5. Ein durch diese Bedingungen eingeräumtes, nicht ausgeübtes Recht — sei es durch Zustimmung,
              Nachlässigkeit oder Unvermögen — gilt als verzichtet. Die teilweise oder vollständige Ausübung eines Rechts
              schließt dessen spätere Ausübung nicht aus und beschränkt sie nicht.
            </p>
            <p>
              9.6. Erklärt ein zuständiges Gericht eine Bestimmung dieser Bedingungen für nichtig, gilt sie
              als nichtig. Der Rest der Bedingungen bleibt jedoch vollständig in Kraft.
            </p>
            <p>
              9.7. Es wird anerkannt, dass diese Bedingungen den Betrieb der Website durch Dritte ermöglichen,
              die ihre Rechte und Pflichten übertragen dürfen. Der Nutzer darf
              seine Rechte und Pflichten nicht auf eine andere Partei übertragen.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

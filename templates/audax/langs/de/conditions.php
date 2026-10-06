<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Nutzungsbedingungen | ' . SITE_NAME;
$page_description = 'Nutzungsbedingungen der Plattform ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Nutzungsbedingungen</h1>
            <p class="bold-title">1. Einleitung</p>
            <p>1.1. Die Annahme dieser Bedingungen ist Voraussetzung für die Nutzung unserer Dienste.</p>
            <p>1.2. Diese Bedingungen bilden eine rechtlich bindende Vereinbarung.</p>
            <p>1.3. Die fortgesetzte Nutzung der Website gilt als Annahme der Bedingungen.</p>
            <p>
              1.4. Bei Fragen erreichen Sie uns unter
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Nutzungsrecht</p>
            <p>2.1. Sie müssen mindestens 18 Jahre alt sein, um die Dienste zu nutzen.</p>
            <p>2.1.1. Sie müssen in einem Land wohnen, in dem die Dienste rechtmäßig sind.</p>
            <p>2.1.2. Sie dürfen auf keiner Sanktionsliste stehen.</p>
            <p>2.1.3. Sie müssen geschäftsfähig sein.</p>
            <p>2.2. Für die Nutzung durch ungeeignete Personen übernehmen wir keine Verantwortung.</p>
            <p class="bold-title">3. Nutzerkonto</p>
            <p>3.1. Sie sind für die Sicherheit Ihres Kontos verantwortlich.</p>
            <p>3.2. Geben Sie Ihr Passwort nicht an Dritte weiter.</p>
            <p class="bold-title">4. Unzulässige Handlungen</p>
            <p>4.1. Die Nutzung der Dienste zu rechtswidrigen Zwecken ist nicht gestattet.</p>
            <p>4.1.1. Geldwäsche ist streng untersagt.</p>
            <p>4.1.2. Betrug wird den zuständigen Behörden gemeldet.</p>
            <p>4.1.3. Der Einsatz von Bots oder Automatisierungssoftware ist nicht gestattet.</p>
            <p>4.1.4. Jeder Versuch, das System zu manipulieren, wird untersucht.</p>
            <p>4.1.5. Die Verbreitung falscher Informationen ist untersagt.</p>
            <p>4.1.6. Versuche, Untersuchungen zu behindern, sind nicht gestattet.</p>
            <p>4.1.7. Drohungen gegenüber anderen Nutzern sind untersagt.</p>
            <p>4.1.8. Jede rechtswidrige Handlung wird geahndet.</p>
            <p>4.1.9. Versuche, Richtlinien zu umgehen, sind nicht gestattet.</p>
            <p>4.1.10. Jeder Missbrauch des Systems wird ernst genommen.</p>
            <p class="bold-title">5. Immaterialgüterrechte</p>
            <p>5.1. Alle Inhalte der Website sind unser geistiges Eigentum.</p>
            <p>5.2. Nutzer erwerben keine Rechte an Website-Inhalten.</p>
            <p>5.3. Inhalte dürfen ohne Erlaubnis nicht kopiert werden.</p>
            <p>5.4. Dritten ist es nicht gestattet, Inhalte zu verändern.</p>
            <p class="bold-title">6. Haftungsbeschränkung</p>
            <p>6.1. Die Nutzung der Dienste erfolgt auf eigenes Risiko.</p>
            <p>6.2. Für Verluste aus der Nutzung der Dienste übernehmen wir keine Verantwortung.</p>
            <p>6.3. Jeder aus der Nutzung der Website entstehende Schaden liegt in der Verantwortung des Nutzers.</p>
            <p>6.4. Für Schäden aus der Nutzung der Website übernehmen wir keine Haftung.</p>
            <p>6.5. Technische Probleme fallen nicht in unsere Verantwortung.</p>
            <p class="bold-title">7. Hinweise</p>
            <p>7.1. Mit der Nutzung der Dienste erklären Sie sich mit einer Kontaktaufnahme einverstanden.</p>
            <p>7.2. Informationen werden vertraulich behandelt.</p>
            <p>7.3. Nutzern wird empfohlen, Nachweise aufzubewahren.</p>
            <p class="bold-title">8. Links und weitere Ressourcen</p>
            <p>8.1. Weitere Informationen finden Sie in unseren Richtlinien.</p>
            <p>8.2. Externe Links stellen keine Empfehlung dar.</p>
            <p>8.3. Wir empfehlen, Quellen vor der Nutzung zu prüfen.</p>
            <p class="bold-title">9. Allgemeine Bestimmungen</p>
            <p>9.1. Wir behalten uns vor, die Dienste jederzeit zu ändern.</p>
            <p>9.2. Die Bedingungen können sich jederzeit ändern.</p>
            <p>9.3. Mit der Nutzung der Dienste akzeptieren Sie diese Bedingungen.</p>
            <p>9.4. Mündliche Vereinbarungen sind unwirksam.</p>
            <p>9.5. Nicht ausgeübte Rechte gelten nicht als verzichtet.</p>
            <p>
              9.6. Wird eine Bestimmung für unwirksam erklärt, bleiben die übrigen Bestimmungen in Kraft.
            </p>
            <p>9.7. Die Dienste können von externen Anbietern betrieben werden.</p>
            <p>
              9.8. Für diese Bedingungen gilt das Recht <?= e(geo_in()) ?>. Alle Streitigkeiten werden dem
              zuständigen Gericht <?= e(geo_in()) ?> vorgelegt.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

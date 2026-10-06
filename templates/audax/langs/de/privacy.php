<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Datenschutzerklärung | ' . SITE_NAME;
$page_description = 'Datenschutzerklärung von ' . SITE_NAME . '.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Datenschutzerklärung</h1>
            <p>
              Ihre personenbezogenen Daten und Ihre Vermögenswerte sind uns besonders wichtig. Wir verpflichten uns
              umfassend, sie zu schützen.
            </p>
            <p>
              <?= e(SITE_NAME) ?> erhebt und speichert die für Ihre Trading-Geschäfte erforderlichen Daten. Wie
              diese Daten erhoben und gespeichert werden, beschreibt die folgende Datenschutzerklärung.
            </p>
            <p>Unsere Erklärung stützt sich auf die folgenden Grundsätze:</p>
            <p class="circle">
              Mit dem Ziel, größtmögliche Transparenz über unsere Verfahren zur Erhebung und
              Speicherung Ihrer personenbezogenen Daten zu gewährleisten:
            </p>
            <p>
              Unser Ziel ist, dass Sie verstehen, wie wir Ihre Daten erheben und verarbeiten, damit Sie
              fundierte Entscheidungen treffen können. Wir wenden klare Regeln und Verfahren für die Datenverarbeitung auf
              dieser Website an. Unsere Erklärung beschreibt im Detail die Methoden, mit denen wir Ihnen
              klare, konkrete Informationen zur Datennutzung geben. Sie behalten die Kontrolle.
            </p>
            <p>
              Wir benachrichtigen Sie unverzüglich, wenn wir es für nötig halten. Transparenz hat für uns
              grundlegende Bedeutung.
            </p>
            <p>
              Unser Fachteam steht bereit, alle Ihre Fragen zu jedem Aspekt
              unserer Verfahren zu beantworten, einschließlich unserer Pflichten nach dem Recht <?= e(geo_in()) ?> und den EU-
              Vorschriften. Sie erreichen uns unter:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Eine andere Verwendung personenbezogener Daten ist unsererseits nicht zulässig, außer in den in unserer
              Datenschutzerklärung vorgesehenen Fällen.
            </p>
            <p>
              Wir dürfen personenbezogene Daten zu folgenden Zwecken verarbeiten, insbesondere um den ordnungsgemäßen
              Betrieb der Dienste von <?= e(SITE_NAME) ?> zu gewährleisten und Nutzer mit Trading-Plattformen
              Dritter zu verbinden. Die Verarbeitung kann außerdem nötig sein, um Funktionen und Dienste der Website
              zu pflegen und zu verbessern; um unsere Rechte zu schützen und gesetzliche sowie sonstige
              Pflichten zu erfüllen. Schließlich dienen diese Daten, soweit nötig, der Wahrnehmung administrativer
              und betrieblicher Aufgaben im Zusammenhang mit den Ihnen erbrachten Diensten.
            </p>
            <p>
              Um Dienste anzubieten, die besser zu Ihren Präferenzen und Bedürfnissen passen, verwendet <?= e(SITE_NAME) ?>
              personenbezogene Daten.
            </p>
            <p class="circle">
              Mit dem Ziel, die nötigen Mittel zum Schutz Ihrer personenbezogenen Daten einzusetzen und Ihre
              Rechte daran zu wahren:
            </p>
            <p>
              Sie können uns jederzeit kontaktieren und Zugang zu all Ihren personenbezogenen Daten erhalten. Wir können sie
              bei Bedarf auch ändern oder löschen. Außerdem bearbeiten wir Anträge auf Übermittlung dieser
              Daten an Sie oder an einen von Ihnen benannten Dritten. Wir bieten diesen Service, damit Sie
              Ihre Datenschutz- und Kontrollrechte vollständig wahrnehmen können.
            </p>
            <p class="circle">Schützen Sie Ihre personenbezogenen Daten:</p>
            <p>
              Unsere Sicherheitssysteme entsprechen hohem Standard und umfassen Maßnahmen auf Bankniveau. Obwohl
              ein vollständiger Schutz nicht garantiert werden kann, verpflichten wir uns, unsere Systeme dauerhaft
              auf hohem Niveau zu halten und bereits umgesetzte Maßnahmen zu verstärken.
            </p>
            <p>
              Wir verfügen über ausführliche Datenschutzrichtlinien und erstklassige Sicherheitssysteme.
            </p>
            <p class="bold-title">1. Geltungsbereich</p>
            <p>
              Diese Erklärung beschreibt unsere Verfahren zur Erhebung, Verarbeitung und Offenlegung aller
              Daten natürlicher Personen.
            </p>
            <p>
              Die Bestimmungen unserer Erklärung gelten für alle natürlichen Personen, die identifizierbar sind oder
              identifiziert werden. Insbesondere für jede natürliche Person, die anhand von Daten identifizierbar ist,
              die uns anvertraut wurden, auf die wir Zugriff haben und/oder die wir kombinieren können.
            </p>
            <p>
              Die Datenverarbeitung im Sinne der Datenschutzerklärung umfasst insbesondere die Speicherung,
              Verwaltung und Organisation personenbezogener Daten.
            </p>
            <p>
              Wir erheben keine Informationen über Personen unter 18 Jahren und versuchen dies auch nicht.
              Personen unter 18 Jahren ist die Nutzung unserer Plattform zu keinem
              Zweck gestattet. Stellen wir fest, dass ein Nutzer unter 18 Jahre alt ist, löschen wir diese Daten unverzüglich.
            </p>
            <p class="bold-title">2. Welche personenbezogenen Daten erheben wir?</p>
            <p>
              Bei der Registrierung erheben wir die für die Nutzung unserer Dienste erforderlichen personenbezogenen Daten. Bei Bedarf
              können wir auch Daten zur Überprüfung anfordern, etwa um
              die Kontoinhaberschaft zu bestätigen. Um die Qualität unserer Dienste zu verbessern und zu halten,
              erheben und analysieren wir Informationen über Ihre Nutzung der Plattform und
              verbundener Dienste Dritter.
            </p>
            <p class="bold-title">
              3. Sie sind in keinem Fall verpflichtet, der Gesellschaft Ihre personenbezogenen Daten mitzuteilen.
            </p>
            <p>
              Obwohl Sie uns Ihre Daten nicht mitteilen müssen, kann die Entscheidung dagegen
              die Erbringung unserer Dienste einschränken. Das kann außerdem zu
              Einschränkungen bei der Nutzung der Plattform führen.
            </p>
            <p class="bold-title">
              4. Welche personenbezogenen Daten erheben wir? Beim Aufruf unserer Website können wir die
              folgenden personenbezogenen Daten erheben:
            </p>
            <p>
              Wir erheben keine Daten, die Sie unmittelbar identifizieren. Wir erfassen Angaben wie
              Ihre Kontonutzung, IP-Adressen sowie Zugriffsdatum und -uhrzeit. Für Wartung,
              Sicherheit und Support speichern wir Systemfehlerberichte, Browserinformationen und den Typ
              des Geräts, mit dem Sie auf Ihr Konto zugreifen. Außerdem speichern wir die in Ihrem Konto eingestellte Sprache.
            </p>
            <p>
              Hinsichtlich personenbezogener Daten erheben und speichern wir ausschließlich Informationen,
              die Sie bei der Verbindung mit einer Trading-Plattform Dritter über unsere Dienste angeben.
            </p>
            <p>
              Personenbezogene Daten, die Sie Plattformen Dritter mitgeteilt haben, können insbesondere umfassen:
              Vor- und Nachname, Anschrift, Telefonnummer und E-Mail-Adresse.
            </p>
            <p class="bold-title">
              5. Warum benötigt die Gesellschaft meine Daten und ist die Verarbeitung rechtmäßig?
            </p>
            <p>
              Die Gesellschaft erhebt, speichert und verarbeitet Ihre personenbezogenen Daten ausschließlich zu den
              in der Erklärung genannten Zwecken. Alle beschriebenen Verwendungen und Verarbeitungen entsprechen dem
              geltenden Recht <?= e(geo_in()) ?> und den EU-Vorschriften.
            </p>
            <p>
              Die Gesellschaft verwaltet, verarbeitet oder übermittelt Ihre Daten nur im Einklang mit den
              geltenden Vorschriften <?= e(geo_in()) ?>. Die einschlägigen Rechtsgrundlagen sind nachstehend aufgeführt:
            </p>
            <p class="circle">
              Sie haben in die Speicherung und Verarbeitung Ihrer personenbezogenen Daten durch die
              Gesellschaft eingewilligt. Mit der Übermittlung Ihrer Daten an uns ermächtigen Sie uns, sie an die
              zuständige Trading-Plattform Dritter weiterzuleiten. Außerdem haben Sie in die
              Verarbeitung Ihrer personenbezogenen Daten zu einem oder mehreren Zwecken eingewilligt.
            </p>
            <p class="circle">
              Zur Verbesserung der Dienste, zur Geltendmachung oder Verteidigung von Rechtsansprüchen und zum Schutz berechtigter
              Interessen kann es insbesondere erforderlich sein, dass die Gesellschaft Ihre personenbezogenen Daten
              speichert und verarbeitet.
            </p>
            <p class="circle">Zur Erfüllung gesetzlicher Pflichten ist die Datenverarbeitung erforderlich.</p>
            <p>
              Wenn Sie mehr über die Verarbeitungen erfahren möchten, zu denen die Gesellschaft verpflichtet
              ist, schreiben Sie uns gerne per E-Mail.
            </p>
            <p>
              Nachstehend finden Sie die konkreten Zwecke und die Rechtsgrundlage, die uns
              zur Verarbeitung Ihrer personenbezogenen Daten berechtigt.
            </p>
            <p class="green">Zweck</p>
            <p class="green">Rechtsgrundlage</p>
            <p>
              1. Um Ihnen den Zugang zum digitalen Trading zu erleichtern und — ausschließlich auf Ihre Bitte —
              teilen wir Ihre personenbezogenen Daten mit Plattformen Dritter. Ihre Daten können erhoben
              und an Dritte weitergegeben werden, ausschließlich auf Ihre Bitte und nach Ihrer Wahl.
            </p>
            <p>
              Sie haben in die Verarbeitung Ihrer personenbezogenen Daten zu einem oder mehreren Zwecken eingewilligt.
            </p>
            <p>
              2. Bitte übermitteln Sie uns die nötigen Angaben, damit wir rasch und
              wirksam auf Ihre Anliegen, Bedenken und Fragen zu unseren Diensten reagieren können.
            </p>
            <p>
              Zur Wahrnehmung berechtigter Interessen der Gesellschaft oder eines benannten Dritten
              ist die Verarbeitung personenbezogener Daten erforderlich.
            </p>
            <p>
              3. Zur Erfüllung unserer gesetzlichen und verwaltungsrechtlichen Pflichten ist die Verarbeitung personenbezogener Daten erforderlich.
            </p>
            <p>Zur Erfüllung unserer gesetzlichen Pflichten müssen wir bestimmte personenbezogene Daten verarbeiten.</p>
            <p>
              4. Zur Verbesserung unserer Dienste benötigen wir anonymisierte Daten und müssen die Nutzung beobachten,
              einschließlich Fehlerberichten.
            </p>
            <p>
              Zum Schutz berechtigter Interessen der Gesellschaft und externer Dienstleister
              ist die Verarbeitung und Speicherung personenbezogener Daten erforderlich.
            </p>
            <p>5. Dies ist erforderlich, um Betrug und Missbrauch unseres Dienstes zu verhindern.</p>
            <p>
              Zur Wahrung berechtigter Interessen der Gesellschaft und dritter Dienstleister
              ist die Verarbeitung und Speicherung personenbezogener Daten erforderlich.
            </p>
            <p>
              6. Die Anforderungen unseres Dienstes verpflichten uns, Daten für
              Geschäftsentwicklung, strategische Entscheidungen, Überwachung, regulatorische Compliance und
              sonstige betriebliche Tätigkeiten zu beobachten und zu verarbeiten.
            </p>
            <p>
              Mit dem Ziel, berechtigte Interessen der Gesellschaft und externer Dienstleister
              ist die Verarbeitung und Speicherung personenbezogener Daten erforderlich.
            </p>
            <p>
              7. Wir nutzen statistische und analytische Werkzeuge, um Entscheidungen in einem breiten
              Spektrum unserer Dienste und in der strategischen Planung zu stützen.
            </p>
            <p>
              Zum Schutz berechtigter Interessen der Gesellschaft und unserer externen Dienstleister
              ist die Verarbeitung und Speicherung personenbezogener Daten erforderlich.
            </p>
            <p>
              8. Soweit erforderlich, um Rechte, Vermögen und Interessen der
              Gesellschaft und dritter Dienstleister zu schützen, und im Einklang mit den örtlichen Gesetzen und
              geltenden Vorschriften, Verträgen sowie unseren eigenen Bedingungen, dürfen wir
              personenbezogene Daten verarbeiten. Diese Verarbeitung erfolgt ausschließlich nach erforderlichen und
              festgelegten Verfahren.
            </p>
            <p>
              Zum Schutz berechtigter Interessen der Gesellschaft und jedes dritten
              Dienstleisters ist die Verarbeitung und Speicherung personenbezogener Daten erforderlich.
            </p>
            <p class="bold-title">6. Weitergabe personenbezogener Daten an Dritte</p>
            <p>
              Zur Speicherung und Verarbeitung von IP-Adressen, für Umfragen und Nutzungsanalysen
              sowie für verwandte Dienste kann die Gesellschaft anonymisierte Daten an
              externe Dienstleister weitergeben.
            </p>
            <p>
              Auf Ihre Bitte geben wir bestimmte von Ihnen mitgeteilte personenbezogene Daten an externe
              Dienstleister weiter. In diesem Fall unterliegt die Verarbeitung Ihrer Daten der
              Datenschutzerklärung dieses Unternehmens. Das kann verschiedene digitale Trading-Plattformen umfassen.
            </p>
            <p>
              Mit dem Ziel, den Kundenservice zu verbessern und unsere Dienste insgesamt zu optimieren,
              kann die Gesellschaft personenbezogene Daten an verbundene Unternehmen und Geschäftspartner weitergeben.
            </p>
            <p>
              Wenn es gesetzlich erforderlich ist oder zum Schutz der Rechte und des Vermögens der Gesellschaft und betroffener
              Dritter, können wir Daten an zuständige Gerichte oder Aufsichtsbehörden übermitteln.
            </p>
            <p>
              Im Rahmen wesentlicher Geschäftsvorgänge, etwa eines Verkaufs der Gesellschaft,
              einer Kapitalaufnahme oder eines Kreditantrags, können relevante Daten
              rechtmäßig und angemessen weitergegeben werden. Das gilt auch für Fusionen, Umstrukturierungen,
              Zusammenschlüsse oder eine Insolvenz der Gesellschaft nach Maßgabe des Gesetzes.
            </p>
            <p class="bold-title">7. Cookies und Dienste Dritter</p>
            <p>
              Zur Website-Analyse und in Zusammenarbeit mit Werbeagenturen können Cookies und andere
              ähnliche Technologien nach Maßgabe des Gesetzes und der üblichen Praxis eingesetzt werden.
            </p>
            <p>
              Cookies, kleine Textdateien, die beim Besuch einer Website auf Ihrem Gerät gespeichert werden, dienen dazu,
              Informationen über Ihr Surfverhalten, Präferenzen und weitere Daten zu erfassen. Ihr
              Zweck ist, Ihr Nutzungserlebnis zu personalisieren und zu verbessern. Sie helfen uns, Ihre
              Einstellungen und Präferenzen zu merken und unser Angebot anzupassen. Sie dienen außerdem
              der Website-Analyse und der Erstellung von Statistiken für die Planung.
            </p>
            <p>
              Diese Website verwendet in der Regel zwei Arten von Cookies: Sitzungs-Cookies, die nur
              für die Dauer der Browsersitzung gespeichert und beim Schließen des Browsers gelöscht werden;
              und persistente Cookies, die nach Ende der Sitzung im Browser bleiben. Letztere
              ermöglichen der Website, Sie als wiederkehrenden Besucher zu erkennen und die Nutzung zu erleichtern.
            </p>
            <p class="bold-title">Arten von Cookies:</p>
            <p>Cookies können je nach Zweck nach Bedarf eingesetzt werden:</p>
            <p class="green">Cookie-Art</p>
            <p>Diese Cookies sind unbedingt erforderlich</p>
            <p class="green">Zweck</p>
            <p>
              Cookies dienen dazu, Sie als Kunden zu erkennen, damit wir Ihnen die Informationen,
              Einstellungen und Dienste bereitstellen können, die Sie angefordert haben.
              Sie erleichtern außerdem die Navigation auf unserer Website und den Zugang zu ihr.
            </p>
            <p>
              Wir verwenden Cookies, damit Ihr Gerät Inhalte laden und wiedergeben kann. Sie ermöglichen
              außerdem den Zugriff auf wesentliche Funktionen und die Rückkehr zu bereits besuchten Seiten.
            </p>
            <p class="green">Zusätzliche Hinweise</p>
            <p>
              Für einen schnellen, einfachen Zugang zur Website speichern und verarbeiten Cookies bestimmte
              personenbezogene Daten, etwa den Nutzernamen und das Datum des letzten Zugriffs, wenn Sie die Website bitten,
              Sie beim Anmelden zu merken.
            </p>
            <p>Sitzungs-Cookies werden gelöscht, wenn Sie den Browser schließen.</p>
            <p class="green">Cookie-Art</p>
            <p>Funktionale Cookies</p>
            <p class="green">Zweck</p>
            <p>
              Mit Cookies können wir Ihre Einstellungen und Präferenzen sicher speichern und anwenden.
              Sie ermöglichen uns außerdem, Sie beim erneuten Besuch der Website zu erkennen.
            </p>
            <p class="green">Zusätzliche Hinweise</p>
            <p>
              Persistente Cookies bleiben nach der Browsersitzung gespeichert und bleiben aktiv bis zum
              Ablaufdatum.
            </p>
            <p class="green">Cookie-Art</p>
            <p>Performance-Cookies</p>
            <p class="green">Zweck</p>
            <p>
              Zur Verbesserung unserer Dienste erheben wir statistische Daten mittels Cookies. Diese Cookies
              liefern uns Angaben zur Leistung der Website und zu ihrer Nutzung.
            </p>
            <p class="green">Zusätzliche Hinweise</p>
            <p>
              Alle über Cookies gespeicherten Informationen sind anonym und ermöglichen keine Identifizierung von Personen.
            </p>
            <p>
              Sitzungs-Cookies werden beim Schließen des Browsers gelöscht, während persistente Cookies
              bis zum Ablaufdatum oder unbegrenzt aktiv bleiben, sofern Sie sie nicht manuell löschen.
            </p>
            <p>Cookies blockieren oder löschen</p>
            <p>
              Wenn Sie Cookies entfernen oder blockieren möchten, tun Sie das in den
              Browsereinstellungen. Die folgenden Links enthalten ausführliche Anleitungen für die gängigsten Browser.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Das Blockieren von Cookies kann dazu führen, dass einzelne Funktionen der Website nicht wie vorgesehen arbeiten.
            </p>
            <p class="bold-title">Speicherdauer personenbezogener Daten</p>
            <p>
              Ihre personenbezogenen Daten werden nur so lange gespeichert, wie es für die erforderlichen
              Vorgänge unbedingt nötig ist, wie in anderen Abschnitten dieser Erklärung beschrieben. Eine längere Speicherung ist möglich, wenn
              örtliche Gesetze, Vorschriften oder interne Richtlinien es verlangen.
            </p>
            <p>
              Ihre personenbezogenen Daten werden auf Ihre Bitte und nach Ihrer Wahl an Trading-Plattformen
              Dritter für einen Zeitraum von 12 Monaten weitergegeben. Nach Ablauf dieses Zeitraums und mit Ihrer
              Einwilligung werden diese Daten für weitere 12 Monate weitergegeben.
            </p>
            <p>
              Unsere Verfahren sehen eine regelmäßige Prüfung aller personenbezogenen Daten vor, um zu beurteilen, ob
              sie noch benötigt werden.
            </p>
            <p class="bold-title">
              9. Übermittlung personenbezogener Daten in Drittländer oder an internationale Organisationen
            </p>
            <p>
              Soweit es für unsere Dienste und/oder aus Sicherheitsgründen nötig ist, können wir
              personenbezogene Daten in andere Länder (außerhalb Ihres Landes) und an internationale Organisationen
              übermitteln — nach umfassenden Sicherheitsprotokollen. Wir setzen Datenschutzmaßnahmen auf
              hohem Niveau ein, um Ihre Informationen zu schützen und Ihren Zugang zu Rechtsbehelfen
              und gesetzlichen Rechten jederzeit zu gewährleisten.
            </p>
            <p>
              Im Europäischen Wirtschaftsraum (EWR) gelten für alle Einwohner Datenschutz und entsprechende Garantien.
            </p>
            <p class="circle">
              Datenübermittlungen erfolgen stets unter EU-Gerichtsbarkeit und -Aufsicht, im Einklang
              mit den Datenschutzstandards und Protokollen nach Artikel 45 Absatz 3 der Verordnung
              (EU) 2016/679 des Europäischen Parlaments und des Rates vom 27. April 2016
              (&ldquo;DSGVO&rdquo;).
            </p>
            <p class="circle">
              Jede Datenübermittlung zwischen öffentlichen Stellen erfolgt nach Artikel
              46 Absatz 2. Es handelt sich um eine rechtlich bindende und durchsetzbare Vereinbarung.
            </p>
            <p class="circle">
              Die Standardvertragsklauseln der Europäischen Kommission nach Artikel 46 Absatz 2 Buchstabe c DSGVO legen
              die Bedingungen der Übermittlung fest; solche Übermittlungen erfolgen im Einklang mit
              ihnen. Die Bestimmungen können Sie einsehen unter
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Weitere Informationen zu den konkreten Sicherheitsmaßnahmen, die die Gesellschaft ergriffen hat, um
              Ihre personenbezogenen Daten bei einer Übermittlung in ein Drittland zu schützen, können Sie per
              E-Mail anfragen unter <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Schutz personenbezogener Daten</p>
            <p>
              Personenbezogene Daten werden durch technische und organisatorische Maßnahmen auf höchstem
              Niveau geschützt, angewandt nach Referenzverfahren. Diese Verfahren sind wirksam,
              um jede Zerstörung von Daten durch rechtswidrige oder unvorhergesehene Ereignisse zu verhindern, ebenso
              wie deren Verlust oder Veränderung.
            </p>
            <p>
              Obwohl wir größte Sorgfalt und Verfahren anwenden, die den strengsten
              Datenschutzstandards und dem Gesetz genügen, kann unter keinen Umständen garantiert werden,
              dass Ihre personenbezogenen Daten fehlerfrei sind. Deshalb können wir keine Haftung übernehmen, wenn
              personenbezogene Daten einen zufälligen, immateriellen oder Folgeschaden oder eine Offenlegung erleiden.
              Das umfasst Situationen außerhalb unserer Kontrolle, etwa Offenlegungen durch Übertragungsfehler,
              unbefugten Zugriff Dritter oder ähnliche Ursachen.
            </p>
            <p>
              Wenn uns rechtlich bindende Auskunftsersuchen von Aufsichtsbehörden oder anderen
              öffentlichen Stellen mit gesetzlichen Befugnissen erreichen, können wir verpflichtet sein, Ihre personenbezogenen
              Daten an diese Stellen zu übermitteln. Nach einer Übermittlung aufgrund gesetzlicher Pflicht haben wir
              keinen Einfluss mehr darauf, wie diese Stellen Ihre Daten behandeln, speichern oder schützen.
            </p>
            <p>
              Alles, was über das Internet übertragen wird, einschließlich personenbezogener Angaben, birgt ein
              gewisses Abhörrisiko und ist nicht zu 100 % sicher. Die Gesellschaft kann die
              Sicherheit online übermittelter Daten nicht garantieren.
            </p>
            <p class="bold-title">11. Links zu Websites Dritter</p>
            <p>
              Auf dieser Website finden Sie Links zu Anwendungen und Websites Dritter. Bitte
              beachten Sie, dass sie weder mit der Gesellschaft verbunden noch ihrer Kontrolle unterliegen und dass unsere
              Datenschutzerklärung auf diese Dritten nicht Anwendung findet. Sie arbeiten nach ihren
              eigenen Verfahren und Prioritäten bei der Erhebung und Verarbeitung personenbezogener Daten; wir
              übernehmen daher keine Haftung für diese Tätigkeiten. Nutzen Sie sie nach eigenem Ermessen.
            </p>
            <p>
              Prüfen Sie stets die Datenschutzerklärung des Unternehmens oder Dienstes, wenn Sie dessen Website
              besuchen, bevor Sie personenbezogene Daten angeben. Prüfen Sie, ob deren Regeln zur Erhebung, Nutzung und
              Verarbeitung Ihren Vorstellungen entsprechen. Wenn Sie Daten teilen, tun Sie das
              direkt gegenüber dem Anbieter.
            </p>
            <p class="bold-title">12. Aktualisierungen der Erklärung</p>
            <p>
              Wir behalten uns vor, diese Erklärung jederzeit zu aktualisieren oder zu ändern. Wir informieren Sie
              über Änderungen über die Website und die betroffenen Kanäle. Die aktualisierte Fassung der Datenschutz-
              erklärung wird auf der Website veröffentlicht; die geänderte Erklärung gilt
              ab Veröffentlichung, sofern nichts anderes angegeben ist.
            </p>
            <p class="bold-title">13. Ihre Rechte in Bezug auf personenbezogene Daten</p>
            <p>
              Sie behalten die Kontrolle und das letzte Wort über die Verwendung all Ihrer personenbezogenen Daten. Das
              umfasst die Prüfung ihrer Richtigkeit, die Berichtigung von Fehlern sowie das Recht auf Löschung oder
              Einschränkung unserer Verarbeitung — dem Umfang und der Art nach.
            </p>
            <p>Einwohner des EWR finden auf dieser Seite die für sie relevanten Hinweise:</p>
            <p>
              Ihre personenbezogenen Daten sind durch die hier beschriebenen Rechte geschützt. Mit einer E-Mail an
              die nachstehende Adresse können Sie diese Rechte unverzüglich ausüben.
            </p>
            <p>Zugang zu Ihren Rechten</p>
            <p>
              Sind die von Ihnen angegebenen personenbezogenen Daten zutreffend, können Sie jederzeit darauf zugreifen. Alle
              personenbezogenen Daten, die wir verarbeiten, stehen uns zur Verfügung und sind daher prüfbar.
            </p>
            <p>
              Sie können jederzeit Ihre personenbezogenen Daten zur Prüfung anfordern; sie werden Ihnen
              in elektronischer Form zur Verfügung gestellt. Fordern Sie über die bereits bereitgestellte Kopie hinaus
              weitere Kopien Ihrer verarbeiteten Daten an, kann ein angemessenes Entgelt berechnet werden.
            </p>
            <p>
              Die gesetzlich und durch die Datenschutzerklärung anerkannten Rechte dürfen die Rechte Dritter
              nicht beeinträchtigen. Die Gesellschaft behält sich vor, den Zugang zu personenbezogenen Daten zu verweigern oder einzuschränken,
              wenn dadurch Rechte und Freiheiten Dritter verletzt würden.
            </p>
            <p>Recht auf Berichtigung</p>
            <p>
              Jeder Fehler in Ihren personenbezogenen Daten, ob durch Auslassung oder unrichtige Angaben,
              kann von Ihnen oder der Gesellschaft berichtigt werden, um eine ordnungsgemäße Verarbeitung sicherzustellen.
            </p>
            <p>Recht auf Löschung</p>
            <p>
              Sie haben das Recht, die Löschung Ihrer personenbezogenen Daten in den folgenden
              Fällen zu verlangen: 1) wenn sie ohne Ihre Einwilligung oder außerhalb gesetzlicher Grenzen verarbeitet wurden; 2)
              auf Ihren Antrag, wenn Sie die Löschung wünschen und die Gesellschaft keine gesetzliche Pflicht zur
              Aufbewahrung hat; 3) wenn Sie der Verarbeitung widersprechen oder nicht mehr einwilligen, auch wenn sie
              rechtmäßig ist und auf unseren Interessen oder denen Dritter beruht; und 4) wenn das Gesetz
              uns zur Löschung verpflichtet.
            </p>
            <p>
              Das Recht auf Löschung gilt nicht, wenn gesetzliche Pflichten der EU oder
              eines Mitgliedstaats entgegenstehen. Es gilt auch nicht, wenn die Daten zur Geltendmachung oder
              Verteidigung von Rechtsansprüchen benötigt werden.
            </p>
            <p>Recht auf Einschränkung der Verarbeitung</p>
            <p>
              Sie haben das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen, wenn Sie
              Unrichtigkeiten vermuten.
            </p>
            <p>
              Verlangen Sie die Einschränkung der Nutzung Ihrer personenbezogenen Daten, schränken wir die Verarbeitung ein, außer in
              folgenden Fällen: 1) wenn das Recht der Europäischen Union oder eines ihrer
              Mitgliedstaaten entgegensteht; 2) mit Ihrer Einwilligung, soweit es zur Verteidigung oder Geltendmachung von
              Rechtsansprüchen nötig ist; 3) zum Schutz der Rechte einer anderen natürlichen Person.
            </p>
            <p>Recht auf Datenübertragbarkeit</p>
            <p>
              Sie haben das Recht, auf die von Ihnen bereitgestellten personenbezogenen Daten zuzugreifen und sie zu kontrollieren, soweit
              Sie in ihre Erhebung eingewilligt haben und die Verarbeitung
              über automatisierte Systeme erfolgt.
            </p>
            <p>
              Sie haben das Recht, die Übermittlung all Ihrer personenbezogenen Daten an ein anderes Unternehmen oder
              eine andere Organisation zu verlangen, soweit technisch möglich. Dieses Recht berührt nicht Ihr
              Recht auf Löschung. Es gilt nicht, wenn seine Ausübung die Rechte
              oder Freiheiten einer anderen natürlichen Person verletzt.
            </p>
            <p>Widerspruchsrecht gegen die Verarbeitung</p>
            <p>
              Unbeschadet des Rechts der Gesellschaft, unsere berechtigten Interessen oder
              die eines als Dienstleister auftretenden Dritten zu verfolgen, haben Sie das Recht, der
              Verarbeitung zu widersprechen und ihre Einstellung zu verlangen. Dieses Recht gilt nicht, wenn eine dringende
              rechtliche Notwendigkeit besteht, die Verarbeitung fortzusetzen, sei es zur Verteidigung oder zur Geltendmachung von
              Rechtsansprüchen. In solchen Fällen können wir die Verarbeitung Ihrer Daten fortsetzen.
            </p>
            <p>
              Sie können der Verarbeitung Ihrer personenbezogenen Daten zu Zwecken der Direktwerbung jederzeit widersprechen.
            </p>
            <p>
              Recht auf Widerruf der Einwilligung
            </p>
            <p>
              Sie können Ihre Einwilligung in die Verarbeitung Ihrer personenbezogenen Daten jederzeit
              mit sofortiger Wirkung widerrufen. Ein solcher Widerruf wirkt nicht zurück auf Verarbeitungen, die
              vor dem Widerruf erfolgt sind.
            </p>
            <p>
              Wenn Sie aus irgendeinem Grund unzufrieden sind, haben Sie das Recht, eine Beschwerde bei einer
              gerichtlichen, aufsichtsrechtlichen oder sonstigen Kontrollstelle einzureichen.
            </p>
            <p>
              Wenn Sie der Auffassung sind, dass Ihre Rechte und Freiheiten hinsichtlich der Verarbeitung Ihrer personenbezogenen Daten
              verletzt wurden, verfügen die Mitgliedstaaten der Europäischen Union über Aufsichts- und Kontrollstellen
              zu diesem Zweck. Sie können sich an diese Stellen wenden, wenn Sie es für angezeigt halten.
            </p>
            <p>
              Abschnitt 13 beschreibt Situationen, in denen Ihre Rechte in Bezug auf personenbezogene Daten durch das Recht
              der Europäischen Union oder der Mitgliedstaaten eingeschränkt sein können.
            </p>
            <p>
              Wenn uns Ihr Antrag zu Ihren personenbezogenen Daten und deren Verarbeitung erreicht, gewähren wir Ihnen
              Zugang zu den angeforderten Informationen, wie in Abschnitt 13 dieser Erklärung vorgesehen.
              Wir können diese Frist um bis zu zwei Monate verlängern, je nach Umfang des Antrags
              und der Art Ihres Anliegens. Falls nötig, teilen wir Ihnen die Verlängerung
              innerhalb eines Monats nach Eingang Ihres Antrags mit.
            </p>
            <p>
              Wir übermitteln Ihnen die angeforderten Informationen elektronisch und unentgeltlich, sofern
              dem nicht das Gesetz oder die Bestimmungen in Abschnitt 13 entgegenstehen. Wir behalten uns vor,
              ein angemessenes Entgelt zu verlangen oder einen Antrag abzulehnen, wenn er als unbegründet, übermäßig oder wiederholt angesehen wird.
            </p>
            <p>
              Wir behalten uns vor, eine zusätzliche Identitätsprüfung zu verlangen, wenn begründete
              Zweifel an der Person bestehen, die einen Antrag zu personenbezogenen Daten stellt, um
              die Datensicherheit zu schützen und zu gewährleisten.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

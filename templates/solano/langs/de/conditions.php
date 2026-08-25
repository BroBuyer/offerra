<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Nutzungsbedingungen ᐉ ' . SITE_NAME;
$page_description = 'Nutzungsbedingungen von ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Rechtliches</span>
    <h1>Nutzungsbedingungen</h1>
    <p class="rmct9">Die Regeln, die gelten, wenn Sie auf <?= e(SITE_NAME) ?> zugreifen oder es nutzen.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Zuletzt aktualisiert: Januar 2025</p>

    <h2>1. Annahme der Bedingungen</h2>
    <p>Durch den Zugriff auf Website und Dienste von <?= e(SITE_NAME) ?> stimmen Sie diesen Nutzungsbedingungen zu. Wenn Sie nicht einverstanden sind, nutzen Sie die Dienste nicht.</p>

    <h2>2. Teilnahmeberechtigung</h2>
    <p>Sie müssen mindestens 18 Jahre alt sein (oder volljährig in Ihrer Rechtsordnung) und rechtlich in der Lage, einen verbindlichen Vertrag zu schließen. Die Dienste werden Einwohnern eingeschränkter Rechtsordnungen nicht angeboten, wo ein solches Angebot unrechtmäßig wäre.</p>

    <h2>3. Kontoregistrierung</h2>
    <p>Sie stimmen zu, bei der Registrierung genaue, aktuelle und vollständige Angaben zu machen und sie aktuell zu halten. Sie sind für die Vertraulichkeit Ihrer Zugangsdaten und für alle Aktivitäten auf Ihrem Konto verantwortlich.</p>

    <h2>4. Dienste</h2>
    <p><?= e(SITE_NAME) ?> stellt technologische Tools und Bildungsinformationen zum Online-Investieren bereit. Wir sind nicht Ihr Finanzberater. Nichts auf dieser Website ist personalisierte Anlageberatung, Steuerberatung oder eine Aufforderung zum Kauf oder Verkauf eines Finanzinstruments.</p>

    <h2>5. Gebühren</h2>
    <p>Anfallende Gebühren, Spreads und Provisionen sind auf der Plattform oder im Gebührenverzeichnis ausgewiesen. Sie sind für Steuern aus Ihrer Tätigkeit verantwortlich.</p>

    <h2>6. Verbotenes Verhalten</h2>
    <ul>
      <li>Nutzung der Dienste für Geldwäsche, Terrorismusfinanzierung, Marktmanipulation oder jeden unrechtmäßigen Zweck.</li>
      <li>Sich als eine andere Person auszugeben oder falsche Identitätsangaben zu machen.</li>
      <li>Versuche, Teile der Plattform zu stören, zu kompromittieren oder reverse-engineeren.</li>
      <li>Nutzung automatisierter Tools zum Zugriff auf die Dienste, soweit nicht ausdrücklich erlaubt.</li>
    </ul>

    <h2>7. Geistiges Eigentum</h2>
    <p>Alle Inhalte, Marken, Software und Materialien auf der Website sind Eigentum von <?= e(SITE_NAME) ?> oder seiner Lizenzgeber und durch geltendes Recht geschützt. Sie erhalten eine beschränkte, nicht ausschließliche, widerrufliche Lizenz zur Nutzung der Dienste zum vorgesehenen Zweck.</p>

    <h2>8. Dienste Dritter</h2>
    <p>Die Plattform kann Links zu Diensten Dritter enthalten oder sich mit ihnen integrieren. Wir sind für solche Dienste, ihre Verfügbarkeit, Genauigkeit oder Inhalte nicht verantwortlich.</p>

    <h2>9. Haftungsausschlüsse</h2>
    <p>Die Dienste werden „wie besehen“ und „wie verfügbar“ ohne Gewährleistung jeglicher Art bereitgestellt. Handeln birgt ein erhebliches Verlustrisiko. Siehe unseren <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Risikohinweis</a> für weitere Details.</p>

    <h2>10. Haftungsbeschränkung</h2>
    <p>Soweit gesetzlich zulässig, haftet <?= e(SITE_NAME) ?> nicht für indirekte, zufällige, besondere, Folgeschäden oder Strafschadensersatz oder für entgangenen Gewinn oder Umsatz aus der Nutzung der Dienste.</p>

    <h2>11. Freistellung</h2>
    <p>Sie stimmen zu, <?= e(SITE_NAME) ?>, verbundene Unternehmen und Mitarbeiter von Ansprüchen freizustellen, die aus der Verletzung dieser Bedingungen oder dem Missbrauch der Dienste entstehen.</p>

    <h2>12. Aussetzung und Beendigung</h2>
    <p>Wir können den Zugang zu den Diensten jederzeit aussetzen oder beenden, mit oder ohne Vorankündigung, wenn wir glauben, dass Sie diese Bedingungen oder geltendes Recht verletzt haben.</p>

    <h2>13. Anwendbares Recht</h2>
    <p>Diese Bedingungen unterliegen dem Recht am Sitz von <?= e(SITE_NAME) ?>, ohne Rücksicht auf Kollisionsnormen.</p>

    <h2>14. Änderungen</h2>
    <p>Wir können diese Bedingungen von Zeit zu Zeit ändern. Die weitere Nutzung der Dienste nach Änderungen gilt als Annahme der geänderten Bedingungen.</p>

    <h2>15. Kontakt</h2>
    <p>Fragen zu diesen Bedingungen können Sie über die Kontaktseite senden.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Zurück zur Startseite</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

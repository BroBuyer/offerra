<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Privatlivspolitik ᐉ ' . SITE_NAME;
$page_description = 'Hvordan ' . SITE_NAME . ' indsamler, bruger og beskytter dine personoplysninger.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Juridisk information</span>
    <h1>Privatlivspolitik</h1>
    <p class="etpy2">Hvordan <?= e(SITE_NAME) ?> indsamler, bruger og beskytter dine personoplysninger.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Seneste opdatering: januar 2025</p>

    <h2>1. Introduktion</h2>
    <p><?= e(SITE_NAME) ?> ("vi", "os", "vores") forpligter sig til at beskytte privatlivet for besøgende og kunder. Denne privatlivspolitik forklarer, hvilke personoplysninger vi indsamler, hvorfor vi indsamler dem, og hvordan vi behandler dem, når du bruger vores website og tjenester.</p>

    <h2>2. Oplysninger vi indsamler</h2>
    <ul>
      <li><strong>Identitetsdata</strong> — navn, fødselsdato, officielt statsudstedt identifikation til identitetsverificering og overholdelse af KYC/AML-regler.</li>
      <li><strong>Kontaktdata</strong> — e-mailadresse, telefonnummer, postadresse.</li>
      <li><strong>Finansielle data</strong> — betalingsoplysninger, transaktionshistorik, oplysninger om midlers oprindelse.</li>
      <li><strong>Tekniske data</strong> — IP-adresse, browsertype, enheds-id'er, cookies og brugsanalyse.</li>
    </ul>

    <h2>3. Sådan bruger vi dine data</h2>
    <ul>
      <li>For at verificere identitet og opfylde regulatoriske forpligtelser.</li>
      <li>For at levere, vedligeholde og forbedre vores platform og tjenester.</li>
      <li>For at behandle betalinger og opdage svigagtig aktivitet.</li>
      <li>For at kommunikere med dig om din konto, opdateringer og supporthenvendelser.</li>
      <li>For at sende marketingkommunikation, når du har givet samtykke (du kan til enhver tid framelde dig).</li>
    </ul>

    <h2>4. Retsgrundlag</h2>
    <p>Vi behandler personoplysninger på grundlag af en eller flere af følgende retsgrundlag: opfyldelse af kontrakt, overholdelse af juridisk forpligtelse, vores legitime interesser eller dit samtykke.</p>

    <h2>5. Deling og offentliggørelse</h2>
    <p>Vi kan dele personoplysninger med regulerede betalingsudbydere, KYC/AML-verificeringspartnere, cloud-infrastrukturudbydere, professionelle rådgivere og kompetente myndigheder, når loven kræver det. Vi sælger ikke personoplysninger.</p>

    <h2>6. Internationale overførsler</h2>
    <p>Når personoplysninger overføres uden for din jurisdiktion, sikrer vi passende garantier, herunder standardkontraktklausuler.</p>

    <h2>7. Opbevaring af data</h2>
    <p>Vi opbevarer personoplysninger så længe, det er nødvendigt for at levere tjenester og opfylde juridiske, regulatoriske og regnskabsmæssige krav — typisk mindst fem år efter lukning af en konto.</p>

    <h2>8. Dine rettigheder</h2>
    <p>Under gældende lov kan du anmode om indsigt, berigtigelse, sletning, begrænsning eller dataportabilitet af dine personoplysninger og gøre indsigelse mod visse behandlinger. For at udøve disse rettigheder, kontakt os via adressen nedenfor.</p>

    <h2>9. Cookies</h2>
    <p>Vi bruger nødvendige og analytiske cookies til at drive siden og forstå brug. Du kan administrere cookies via dine browserindstillinger.</p>

    <h2>10. Sikkerhed</h2>
    <p>Vi anvender administrative, tekniske og fysiske sikkerhedsforanstaltninger designet til at beskytte personoplysninger mod uautoriseret adgang, offentliggørelse, ændring eller destruktion. Intet system er perfekt sikkert, og vi kan ikke garantere absolut sikkerhed.</p>

    <h2>11. Ændringer</h2>
    <p>Vi kan opdatere denne politik fra tid til anden. Den seneste version vil altid være tilgængelig på denne side med opdateret dato.</p>

    <h2>12. Kontakt</h2>
    <p>For spørgsmål om privatliv eller for at udøve dine rettigheder, kontakt databeskyttelsesteamet hos <?= e(SITE_NAME) ?> via vores kontaktside.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Tilbage til forsiden</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

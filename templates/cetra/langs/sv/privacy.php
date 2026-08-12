<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Integritetspolicy');
$page_description = 'Hur ' . SITE_NAME . ' samlar in, använder och skyddar dina personuppgifter.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Hoved">
      <a href="<?= page_url() ?>#platform">Rapportera missbruk</a>
      <a href="<?= page_url() ?>#how">Så fungerar det</a>
      <a href="<?= page_url() ?>#markets">Markeder</a>
      <a href="<?= page_url() ?>#faq">Marknader</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Kom igång</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Juridisk information</span>
      <h1>Integritetspolicy</h1>
      <p class="lede">Hur <?= e(SITE_NAME) ?> samlar in, använder och skyddar dina personuppgifter.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Senest opdateret: januar 2025</p>

      <h2>1. Introduktion</h2>
      <p><?= e(SITE_NAME) ?> („vi“, „vores“) er forpligtet til at beskytte privatlivet for besøgende og kunder. Denne privatlivspolitik forklarer hvilke personoplysninger vi indsamler, hvorfor og hvordan vi behandler dem, når du bruger vores website og tjenester.</p>

      <h2>2. Oplysninger vi indsamler</h2>
      <ul>
        <li>Identitetsdata — navn, fødselsdato, offentligt udstedte id-dokumenter til registrering og KYC/AML-overholdelse.</li>
        <li>Kontaktadata — e-mailadresse, telefonnummer, postadresse.</li>
        <li>Finansielle data — betalingsoplysninger, transaktionshistorik, oplysninger om midlernes oprindelse.</li>
        <li>Tekniske data — IP-adresse, browsertype, enhedsidentifikatorer, cookies og brugsanalyser.</li>
      </ul>

      <h2>3. Hvordan vi bruger dine data</h2>
      <ul>
        <li>Til at verificere identitet og opfylde regulatoriske forpligtelser.</li>
        <li>Til at levere, vedligeholde og forbedre vores platform og tjenester.</li>
        <li>Til at behandle betalinger og opdage svigagtig aktivitet.</li>
        <li>Til at kommunikere med dig om din konto, opdateringer og supportanmodninger.</li>
        <li>Til at sende markedsføringskommunikation når du har givet samtykke (du kan framelde dig når som helst).</li>
      </ul>

      <h2>4. Retsgrundlag</h2>
      <p>Vi behandler personoplysninger på grundlag af et eller flere af følgende lovlige grundlag: opfyldelse af en kontrakt, overholdelse af en retlig forpligtelse, vores legitime interesser eller dit samtykke.</p>

      <h2>5. Deling og videregivelse</h2>
      <p>Vi kan dele personoplysninger med regulerede betalingsudbydere, KYC/AML-verifikationspartnere, cloudinfrastrukturudbydere, professionelle rådgivere og kompetente myndigheder når loven kræver det. Vi sælger ikke personoplysninger.</p>

      <h2>6. Internationale overførsler</h2>
      <p>Når personoplysninger overføres uden for din jurisdiktion, sikrer vi passende garantier, herunder standardkontraktbestemmelser.</p>

      <h2>7. Opbevaring af data</h2>
      <p>Vi opbevarer personoplysninger så længe det er nødvendigt for at levere tjenester og opfylde juridiske, regulatoriske og regnskabsmæssige krav — typisk mindst fem år efter kontolukning.</p>

      <h2>8. Dine rettigheder</h2>
      <p>Med forbehold for gældende ret kan du anmode om adgang, berigtigelse, sletning, begrænsning eller portabilitet af dine personoplysninger og gøre indsigelse mod visse behandlinger. For at udøve disse rettigheder skal du kontakte os på adressen nedenfor.</p>

      <h2>9. Cookies</h2>
      <p>Vi bruger essentielle og analytiske cookies til at drive sitet og forstå brugen. Du kan administrere cookies via dine browserindstillinger.</p>

      <h2>10. Sikkerhed</h2>
      <p>Vi anvender administrative, tekniske og fysiske sikkerhedsforanstaltninger designet til at beskytte personoplysninger mod uautoriseret adgang, videregivelse, ændring eller ødelæggelse. Intet system er perfekt sikkert, og vi kan ikke garantere absolut sikkerhed.</p>

      <h2>11. Ændringer</h2>
      <p>Vi kan opdatere denne politik fra tid til anden. Den seneste version vil altid være tilgængelig på denne side med den opdaterede dato.</p>

      <h2>12. Kontakt</h2>
      <p>Ved privatlivsspørgsmål eller for at udøve dine rettigheder skal du kontakte <?= e(SITE_NAME) ?>'s databeskyttelsesteam via vores <a href="<?= page_url('contacts.php') ?>">kontaktside</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Tilbage til forsiden</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Vanliga frågor. ·
      <a href="<?= page_url('privacy.php') ?>">Integritet</a> ·
      <a href="<?= page_url('conditions.php') ?>">Villkor</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>

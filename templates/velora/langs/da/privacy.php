<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Privatlivspolitik');
$page_description = 'Læs hvordan ' . SITE_NAME . ' indsamler, bruger og beskytter dine personoplysninger.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Privatlivspolitik</h1>
      <p class="lead">Senest opdateret: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Denne privatlivspolitik beskriver, hvordan <?= e(SITE_NAME) ?> («vi») indsamler og behandler personoplysninger, når du bruger vores website og tjenester.</p>

      <h2>Oplysninger vi indsamler</h2>
      <p>Vi kan indsamle: navn, e-mailadresse, telefonnummer, bopælsland, IP-adresse og oplysninger, du giver via formularer eller supportanmodninger.</p>

      <h2>Sådan bruger vi dine oplysninger</h2>
      <ul>
        <li>Til at oprette og administrere din konto</li>
        <li>Til at levere adgang til handelsplatformen og kundesupport</li>
        <li>Til at overholde juridiske og regulatoriske forpligtelser</li>
        <li>Til at forbedre vores tjenester og forebygge svindel</li>
      </ul>

      <h2>Datasikkerhed</h2>
      <p>Vi implementerer tekniske og organisatoriske foranstaltninger, herunder SSL-kryptering og adgangskontrol, for at beskytte dine data.</p>

      <h2>Dine rettigheder</h2>
      <p>Afhængigt af din jurisdiktion kan du have rettigheder til at få adgang til, rette eller slette dine personoplysninger. Kontakt <?= e(SUPPORT_EMAIL) ?> for at udøve disse rettigheder.</p>

      <h2>Kontakt</h2>
      <p>Spørgsmål om denne politik? Skriv til <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

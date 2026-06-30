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
      <p>Denne politik beskriver, hvordan <?= e(SITE_NAME) ?> indsamler og behandler personoplysninger, når du bruger vores website og tjenester.</p>

      <h2>Oplysninger vi indsamler</h2>
      <p>Vi kan indsamle: navn, e-mailadresse, telefonnummer, bopælsland, IP-adresse og oplysninger, du giver via formularer eller supporthenvendelser.</p>

      <h2>Sådan bruger vi oplysningerne</h2>
      <ul>
        <li>Til at oprette og administrere din konto</li>
        <li>Til at give adgang til platformen og yde kundesupport</li>
        <li>Til at overholde lovgivning og regulatoriske krav</li>
        <li>Til at forbedre tjenester og forebygge svig</li>
      </ul>

      <h2>Datasikkerhed</h2>
      <p>Vi anvender tekniske og organisatoriske foranstaltninger, herunder SSL-kryptering og adgangskontroller, for at beskytte dine data.</p>

      <h2>Dine rettigheder</h2>
      <p>Afhængigt af din jurisdiktion kan du have ret til at få indsigt i, rette eller slette dine personoplysninger. Kontakt <?= e(SUPPORT_EMAIL) ?> for at udøve disse rettigheder.</p>

      <h2>Kontakt</h2>
      <p>Spørgsmål til denne politik? Skriv til <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

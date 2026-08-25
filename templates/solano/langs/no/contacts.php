<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kontakt ' . SITE_NAME . ' ᐉ Vi er her for at hjelpe deg';
$page_description = 'Har du spørsmål om ' . SITE_NAME . ' eller kontoen din?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Contacto</span>
    <h1>Vi er her for at hjelpe deg</h1>
    <p class="kpnq92g">Har du spørsmål om <?= e(SITE_NAME) ?> eller kontoen din? Våre supportteam hjelper gerne. Skriv til osss, så svarer vi så raskt som mulig.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Før du skriver til osss</h2>
    <p>De fleste spørgsmål er allerede svaret på siden, og det er ofte hurtigere at sjekke først end at vente på svar.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Ofte stilte spørsmål</a> — omkostninger, utbetalinger, verifisering og minimumsbeløp.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Slik fungerer det</a> — hvad der sker efter registrering, trinn for trinn.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Priser</a> — hvad der er gratis, og hvor omkostninger kan opstå.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Slik kontakter du oss</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Channel</th><th scope="col">Best for</th><th scope="col">Response</th></tr></thead>
      <tbody>
        <tr><td>Support via e-post — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Spørgsmål om konto, verifisering, utbetalinger</td><td>Vi svarer normalt inden for én virkedag.</td></tr>
        <tr><td>Callback request</td><td>Alt der er nemmere at forklare i samtale</td><td>Supporttider: mandag til fredag, 9:00–18:00</td></tr>
        <tr><td>Abuse report — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/denunciar-abuso</a></td><td>Identitetstyveri, misbruk af brandet, mistænkelige beskeder</td><td>Reviewed on receipt</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Hva du kan forvente, når du kontakter osss</h2>
    <h3>Hvilken kanal du bør bruke</h3>
    <p>E-post passer til alt med vedlegg: identitetsverifisering, spørgsmål om utbetalinger, tvivl om kontoutskrift. Tilbakekaldsskjemaet er til resten, fordi de fleste kontospørsmål løses hurtigere på to minutters samtale end i fire beskeder.</p>
    <h4>Uden for åpningstid</h4>
    <p>Beskeder sendt om aftenen eller i weekenden sættes i kø og svares tidligt næste virkedag i mottaksrekkefølge.</p>
    <h3>Opplysninger det er godt at inkludere</h3>
    <p>Den registrerede e-post og omtrentlig dato for din henvendelse er nok til at finde kontoen. Send aldrig passord, fuldt kortnummer eller engangskode: ingen på våre team vil nogensinde bede om det.</p>
    <h4>Hvis noe ikke virker riktig</h4>
    <p>Meld fra samme dag. Enhver situation om en betaling, du ikke genkender, behandles med en gang uden den vanlige køen.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

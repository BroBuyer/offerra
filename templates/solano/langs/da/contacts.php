<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kontakt ' . SITE_NAME . ' ᐉ Vi er her for at hjælpe dig';
$page_description = 'Har du spørgsmål om ' . SITE_NAME . ' eller din konto?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Contacto</span>
    <h1>Vi er her for at hjælpe dig</h1>
    <p class="kpnq92g">Har du spørgsmål om <?= e(SITE_NAME) ?> eller din konto? Vores supportteam hjælper gerne. Skriv til os, så svarer vi så hurtigt som muligt.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Før du skriver til os</h2>
    <p>De fleste spørgsmål er allerede besvaret på siden, og det er ofte hurtigere at tjekke først end at vente på svar.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Ofte stillede spørgsmål</a> — omkostninger, udbetalinger, verificering og minimumsbeløb.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Sådan fungerer det</a> — hvad der sker efter registrering, trin for trin.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Priser</a> — hvad der er gratis, og hvor omkostninger kan opstå.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Sådan kontakter du os</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Channel</th><th scope="col">Best for</th><th scope="col">Response</th></tr></thead>
      <tbody>
        <tr><td>Support via e-mail — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Spørgsmål om konto, verificering, udbetalinger</td><td>Vi svarer normalt inden for én hverdag.</td></tr>
        <tr><td>Callback request</td><td>Alt der er nemmere at forklare i samtale</td><td>Supporttider: mandag til fredag, 9:00–18:00</td></tr>
        <tr><td>Abuse report — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/denunciar-abuso</a></td><td>Identitetstyveri, misbrug af brandet, mistænkelige beskeder</td><td>Reviewed on receipt</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Hvad du kan forvente, når du kontakter os</h2>
    <h3>Hvilken kanal du skal bruge</h3>
    <p>E-mail passer til alt med vedhæftning: identitetsverificering, spørgsmål om udbetalinger, tvivl om kontoudtog. Tilbagekaldsformularen er til resten, fordi de fleste kontospørgsmål løses hurtigere på to minutters samtale end i fire beskeder.</p>
    <h4>Uden for åbningstid</h4>
    <p>Beskeder sendt om aftenen eller i weekenden sættes i kø og besvares tidligt næste hverdag i modtagelsesrækkefølge.</p>
    <h3>Oplysninger det er godt at inkludere</h3>
    <p>Den registrerede e-mail og den omtrentlige dato for din henvendelse er nok til at finde kontoen. Send aldrig adgangskode, fuldt kortnummer eller engangskode: ingen på vores team vil nogensinde bede om det.</p>
    <h4>Hvis noget ikke virker rigtigt</h4>
    <p>Anmeld det samme dag. Enhver situation om en betaling, du ikke genkender, behandles med det samme uden den sædvanlige kø.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

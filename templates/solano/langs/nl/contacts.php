<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Contact ' . SITE_NAME . ' ᐉ Wij staan voor u klaar';
$page_description = 'Heeft u vragen over ' . SITE_NAME . ' of uw account?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Contact</span>
    <h1>Wij staan voor u klaar</h1>
    <p class="kpnq92g">Heeft u vragen over <?= e(SITE_NAME) ?> of uw account? Ons supportteam helpt u graag. Schrijf ons en wij reageren zo snel mogelijk.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Voordat u ons schrijft</h2>
    <p>De meeste vragen zijn al beantwoord op de site, en eerst kijken is meestal sneller dan op een antwoord wachten.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Veelgestelde vragen</a> — kosten, opnames, verificatie en minimumbedragen.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Hoe het werkt</a> — wat er na registratie gebeurt, stap voor stap.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Prijzen</a> — wat gratis is en waar kosten kunnen ontstaan.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Begin — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Hoe u contact opneemt</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Channel</th><th scope="col">Best for</th><th scope="col">Response</th></tr></thead>
      <tbody>
        <tr><td>Support per e-mail — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Vragen over account, verificatie, opnames</td><td>Wij reageren meestal binnen één werkdag.</td></tr>
        <tr><td>Callback request</td><td>Alles wat makkelijker uit te leggen is in een gesprek</td><td>Supporttijden: maandag t/m vrijdag, 9:00–18:00</td></tr>
        <tr><td>Abuse report — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/denunciar-abuso</a></td><td>Identiteitsfraude, misbruik van het merk, verdachte berichten</td><td>Reviewed on receipt</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Wat u kunt verwachten bij contact</h2>
    <h3>Welk kanaal te gebruiken</h3>
    <p>E-mail is geschikt voor alles met een bijlage: identiteitsverificatie, vragen over opnames, twijfels over een afschrift. Het terugbelformulier is voor de rest, omdat de meeste accountvragen sneller in twee minuten gesprek dan in vier berichten worden opgelost.</p>
    <h4>Buiten openingstijden</h4>
    <p>Berichten die 's avonds of in het weekend worden verstuurd, komen in de wachtrij en worden op volgorde van binnenkomst beantwoord aan het begin van de volgende werkdag.</p>
    <h3>Gegevens die handig zijn om te vermelden</h3>
    <p>Het geregistreerde e-mailadres en de geschatte datum van uw vraag zijn voldoende om het account te vinden. Stuur nooit een wachtwoord, volledig kaartnummer of eenmalige code: geen enkel teamlid zal daar ooit om vragen.</p>
    <h4>Als iets niet klopt</h4>
    <p>Meld het dezelfde dag. Elke situatie rond een betaling die u niet herkent, wordt direct behandeld, zonder de gebruikelijke wachtrij.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kontakt ' . SITE_NAME . ' ᐉ Vi finns här för att hjälpa';
$page_description = 'Har du en fråga om ' . SITE_NAME . ' eller ditt konto?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Kontakt</span>
    <h1>Vi finns här för att hjälpa</h1>
    <p class="kpnq92g">Har du en fråga om <?= e(SITE_NAME) ?> eller ditt konto? Vårt supportteam hjälper gärna till. Skriv till oss så svarar vi så snart vi kan.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Innan du skriver till oss</h2>
    <p>De flesta frågor har redan ett svar på sajten, och att kolla först går oftast snabbare än att vänta på ett svar.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Vanliga frågor</a> — kostnader, uttag, verifiering och minsta belopp.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Så fungerar det</a> — vad som händer efter att du registrerat dig, steg för steg.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Priser</a> — vad som är gratis och var en kostnad kan uppstå.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Börja — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Hur du kontaktar oss</h2>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Kanal</th><th scope="col">Bäst för</th><th scope="col">Svar</th></tr></thead>
      <tbody>
        <tr><td>E-postsupport — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Kontofrågor, verifiering, uttag</td><td>Vi svarar vanligtvis inom en arbetsdag.</td></tr>
        <tr><td>Begäran om återuppringning</td><td>Allt som är enklare att förklara i telefon</td><td>Supporttider: måndag till fredag, 9:00–18:00</td></tr>
        <tr><td>Missbruksanmälan — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Efterlikning, varumärkesmissbruk, misstänkta meddelanden</td><td>Granskas vid mottagande</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Vad du kan förvänta dig när du hör av dig</h2>
    <h3>Vilken kanal du ska använda</h3>
    <p>E-post är rätt val för allt med bilaga: identitetskontroller, uttagsfrågor, frågor om ett kontoutdrag. Formuläret för återuppringning är till för resten, för de flesta kontofrågor löses snabbare på två minuters samtal än i fyra meddelanden.</p>
    <h4>Utanför supporttiderna</h4>
    <p>Meddelanden på kvällen eller helgen stannar i kön och besvaras först nästa arbetsdag, i den ordning de kom in.</p>
    <h3>Uppgifter som är värda att ta med</h3>
    <p>Den registrerade e-posten och ungefärligt datum för det du frågar om räcker för att hitta kontot. Skicka aldrig ett lösenord, ett helt kortnummer eller en engångskod: ingen i vårt team kommer någonsin att be dig om det.</p>
    <h4>Om något inte ser rätt ut</h4>
    <p>Anmäl det samma dag. Allt som rör en betalning du inte känner igen hanteras omedelbart, utan att vänta i den vanliga kön.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

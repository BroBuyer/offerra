<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Registrering ' . SITE_NAME;
$page_description = 'Öppna ditt konto hos ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Börja nu</span>
    <h1>Öppna ditt konto</h1>
    <p class="kpnq92g">Några uppgifter för att börja, sedan tar en specialist över. Ingen betalning tas i det här steget.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Vad som händer sedan</h2>
    <ol class="nxlk2qu">
      <li><h3>Du skickar formuläret</h3><p>Det tar några minuter och kostar ingenting.</p></li>
      <li><h3>En specialist ringer</h3><p>De bekräftar dina uppgifter, svarar på frågor och förklarar nästa steg. Ingen press att sätta in.</p></li>
      <li><h3>Du verifierar och väljer ett belopp</h3><p>Först då flyttas några pengar, och bara det belopp du väljer.</p></li>
    </ol>
    <p class="jkkyl">Investeringar innebär risk, inklusive möjlig förlust av en del eller hela det kapital du investerar. Värdet på investeringar kan både sjunka och stiga, och du kan få tillbaka mindre än du ursprungligen satte in. Du bör inte investera pengar du inte har råd att förlora.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Börja — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Vanliga frågor</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Vad du behöver</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>En e-postadress du faktiskt läser.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ett telefonnummer, så att en specialist kan nå dig.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>En identitetshandling, till verifieringssteget senare.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Vad som händer efter att du skickat formuläret</h2>
    <h3>Verifieringssamtalet</h3>
    <p>En specialist ringer för att bekräfta uppgifterna du skickade, svara på frågor och komma överens om ett rimligt startbelopp för dig. Samtalet är ett samtal, inte ett säljscript: ett konto öppnat på orealistiska förväntningar hjälper ingen.</p>
    <h4>Hur lång tid det tar</h4>
    <p>Vanligtvis ett samtal på tio till femton minuter. Om du hellre vill bli uppringd vid en viss tid, skriv det i formuläret så respekteras den tiden.</p>
    <h3>Identitetskontroller förklarade</h3>
    <p>Före den första insättningen ombeds du om en foto-ID och ett aktuellt dokument som visar din adress. Det är samma krav som varje reglerad finansiell tjänst har, och det finns så att ett uttag bara kan gå tillbaka till dig.</p>
    <h4>Vad som accepteras</h4>
    <p>Pass eller nationellt ID-kort, och en räkning eller ett kontoutdrag utfärdat de senaste tre månaderna. Ett tydligt foto taget med telefonen går bra.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Öppna ditt konto</h2>
      <p class="pt6joj">Kom igång på några minuter.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Börja nu';
  $form_class = 'leadform lead-form solano-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

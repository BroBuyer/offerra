<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Anmäl missbruk ᐉ ' . SITE_NAME;
$page_description = 'Anmäl missbruk — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Förtroende och säkerhet</span>
    <h1>Anmäl missbruk</h1>
    <p class="rmct9">Hjälp oss att hålla <?= e(SITE_NAME) ?> säkert. Anmäl misstänkt bedrägeri, efterlikning eller missbruk av vår plattform eller vårt varumärke.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Vad du ska anmäla</h2>
    <p>Anmäl något av följande till vårt Trust and Safety-team:</p>
    <ul>
      <li>Nätfiskemejl, bedrägliga webbplatser eller falska appar som utger sig för att vara <?= e(SITE_NAME) ?>.</li>
      <li>Konton i sociala medier, annonser eller meddelandekanaler som missbrukar vårt namn, vår logotyp eller våra varumärken.</li>
      <li>Misstänkt kontoövertagande, obehörig åtkomst eller identitetsstöld.</li>
      <li>Misstänkta betalningsförfrågningar, ”återvinningsagenter” eller tredje parter som påstår sig agera för vår räkning.</li>
      <li>Marknadsmissbruk, misstankar om penningtvätt eller annan olaglig verksamhet kopplad till våra tjänster.</li>
      <li>Kränkande, hotfullt eller trakasserande beteende mot vår personal eller våra användare.</li>
    </ul>

    <h2>Hur du anmäler</h2>
    <p>Skicka en detaljerad rapport via någon av kanalerna nedan. Om du kan, ta med:</p>
    <ul>
      <li>Datum och tid för händelsen.</li>
      <li>URL:er, skärmbilder, meddelandehuvuden, avsändaradresser eller telefonnummer.</li>
      <li>Dina kontouppgifter (om rapporten rör ditt konto).</li>
      <li>All annan kontext som kan hjälpa oss att utreda.</li>
    </ul>

    <div class="ziavo">
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>E-post till Trust and Safety</b>
        <span>Använd kontaktsidan för att nå vårt Trust and Safety-team. Rapporter prioriteras inom en arbetsdag.</span>
      </div>
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Sårbarhetsanmälan</b>
        <span>För ansvarsfull rapportering av säkerhetsbrister som påverkar våra system, kontakta oss innan du delar detaljer offentligt.</span>
      </div>
    </div>

    <h2>Vad händer sedan?</h2>
    <p>Vi granskar varje rapport. Beroende på ärendets art kan vi kontakta dig för mer information, samarbeta med betalleverantörer eller hostingplattformar för att ta bort bedrägligt innehåll, eller lämna ärendet vidare till polis eller tillsynsmyndigheter. Vi behandlar rapporter konfidentiellt och skyddar, där lagen tillåter, anmälares identitet.</p>

    <h2>Akuta ärenden</h2>
    <p>Om du tror att du har utsatts för ett brott, kontakta din lokala polismyndighet och meddela oss också. Om du misstänker att ditt konto har komprometterats, byt lösenord omedelbart och meddela oss direkt.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Kontakta Trust and Safety</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Tillbaka till startsidan</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

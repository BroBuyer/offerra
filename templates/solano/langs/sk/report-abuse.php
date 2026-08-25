<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Nahlásiť zneužitie ᐉ ' . SITE_NAME;
$page_description = 'Nahlásiť zneužitie — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Dôvera a bezpečnosť</span>
    <h1>Nahlásiť zneužitie</h1>
    <p class="etpy2">Pomôžte nám udržať <?= e(SITE_NAME) ?> v bezpečí. Nahláste podozrenie na podvod, vydávanie sa za nás alebo zneužitie platformy či značky.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Čo nahlásiť</h2>
    <p>Nahláste tímu Trust and Safety ktorékoľvek z nasledujúceho:</p>
    <ul>
      <li>Phishingové e-maily, podvodné weby alebo falošné aplikácie vydávajúce sa za <?= e(SITE_NAME) ?>.</li>
      <li>Účty na sociálnych sieťach, reklamy alebo kanály, ktoré zneužívajú naše meno, logo alebo ochranné známky.</li>
      <li>Podozrenie na prevzatie účtu, neoprávnený prístup alebo krádež identity.</li>
      <li>Podozrivé žiadosti o platbu, „recovery agentov“ alebo tretie strany, ktoré tvrdia, že konajú naším menom.</li>
      <li>Trhové zneužitie, obavy z prania peňazí alebo akákoľvek nezákonná činnosť spojená s našimi službami.</li>
      <li>Urážlivé, výhražné alebo obťažujúce správanie voči zamestnancom alebo používateľom.</li>
    </ul>

    <h2>Ako nahlásiť</h2>
    <p>Pošlite podrobnú správu ktorýmkoľvek z kanálov nižšie. Ak môžete, uveďte:</p>
    <ul>
      <li>Dátum a čas incidentu.</li>
      <li>URL, snímky obrazovky, hlavičky správ, adresy odosielateľa alebo telefónne čísla.</li>
      <li>Údaje k účtu (ak sa správa týka vášho účtu).</li>
      <li>Akýkoľvek ďalší kontext, ktorý pomôže šetreniu.</li>
    </ul>

    <div class="ziavo">
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>E-mail Trust and Safety</b>
        <span>Tím Trust and Safety zastihnete cez kontaktnú stránku. Hlásenia triedime do jedného pracovného dňa.</span>
      </div>
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Nahlásenie zraniteľnosti</b>
        <span>Pre zodpovedné nahlásenie zraniteľností našich systémov nás kontaktujte skôr, ako detaily zverejníte.</span>
      </div>
    </div>

    <h2>Čo nasleduje?</h2>
    <p>Každé hlásenie posúdime. Podľa povahy môžeme požiadať o ďalšie informácie, spolupracovať s poskytovateľmi platieb alebo hostingom na odstránení podvodného obsahu, alebo vec predložiť orgánom. Hlásenia berieme dôverne a kde to zákon dovolí, chránime identitu oznamovateľov.</p>

    <h2>Naliehavé záležitosti</h2>
    <p>Ak sa domnievate, že ste obeťou trestného činu, kontaktujte miestnu políciu a zároveň nás. Ak máte podozrenie na kompromitáciu účtu, ihneď zmeňte heslo a ihneď nás informujte.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Kontaktovať Trust and Safety</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Späť na úvod</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Visszaélés bejelentése ᐉ ' . SITE_NAME;
$page_description = 'Visszaélés bejelentése — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Bizalom és biztonság</span>
    <h1>Visszaélés bejelentése</h1>
    <p class="rmct9">Segítsen biztonságban tartani a(z) <?= e(SITE_NAME) ?> platformot. Jelentse a gyanús csalást, megszemélyesítést vagy platformunk, illetve márkánk visszaélését.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Mit jelentsen</h2>
    <p>Kérjük, jelentse a Trust and Safety csapatnak a következők bármelyikét:</p>
    <ul>
      <li>Adathalász e-mailek, csaló weboldalak vagy hamis alkalmazások, amelyek a(z) <?= e(SITE_NAME) ?> nevében lépnek fel.</li>
      <li>Közösségimédia-fiókok, hirdetések vagy üzenetcsatornák, amelyek visszaélnek a nevünkkel, logónkkal vagy védjegyeinkkel.</li>
      <li>Gyanús fiókátvétel, jogosulatlan hozzáférés vagy személyazonosság-lopás.</li>
      <li>Gyanús fizetési kérések, „visszaszerző ügynökök” vagy harmadik felek, akik a nevünkben lépnek fel.</li>
      <li>Piaci visszaélés, pénzmosással kapcsolatos aggodalmak vagy bármely, a szolgáltatásainkhoz kapcsolódó jogellenes tevékenység.</li>
      <li>Sértő, fenyegető vagy zaklató magatartás munkatársainkkal vagy felhasználóinkkal szemben.</li>
    </ul>

    <h2>Hogyan jelentsen</h2>
    <p>Küldjön részletes jelentést az alábbi csatornák bármelyikén. Ha tudja, tüntesse fel:</p>
    <ul>
      <li>Az eset dátuma és időpontja.</li>
      <li>URL-ek, képernyőképek, üzenetfejlécek, feladói címek vagy telefonszámok.</li>
      <li>A fiókadatok (ha a jelentés a fiókját érinti).</li>
      <li>Bármely további kontextus, amely segítheti a vizsgálatot.</li>
    </ul>

    <div class="ziavo">
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>Trust and Safety e-mail</b>
        <span>A Trust and Safety csapatot a kapcsolati oldalon éri el. A jelentéseket egy munkanapon belül triázzuk.</span>
      </div>
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Biztonsági bejelentés</b>
        <span>Rendszereinket érintő biztonsági sérülékenységek felelős bejelentéséhez lépjen kapcsolatba velünk, mielőtt a részleteket nyilvánosságra hozná.</span>
      </div>
    </div>

    <h2>Mi következik?</h2>
    <p>Minden jelentést átnézünk. A jellegtől függően további információt kérhetünk, együttműködhetünk fizetési szolgáltatókkal vagy tárhelyszolgáltatókkal a csalárd tartalom eltávolításában, vagy az ügyet hatóságokhoz továbbíthatjuk. A jelentéseket bizalmasan kezeljük, és ahol a törvény engedi, védjük a bejelentők személyazonosságát.</p>

    <h2>Sürgős ügyek</h2>
    <p>Ha úgy véli, bűncselekmény áldozata lett, értesítse a helyi hatóságot, és minket is. Ha gyanítja, hogy fiókját kompromittálták, azonnal változtassa meg a jelszavát, és értesítsen minket.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Kapcsolat a Trust and Safety csapattal</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Vissza a kezdőlapra</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

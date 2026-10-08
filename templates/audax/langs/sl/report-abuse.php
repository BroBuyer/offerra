<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Prijavi zlorabo | ' . SITE_NAME;
$page_description = 'Prijavi zlorabo ali sumljivo dejavnost na ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Prijavi zlorabo</h1>
            <p class="bold-title">1. Prijava zlorabe</p>
            <p>
              1.1. Če na spletnem mestu naletiš na neprimerno vsebino, to sporoči
              nam prek kontaktnega obrazca.
            </p>
            <p>Kontakt: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. V tem delu lahko navedeš informacije o zlorabi ali vsebini,
              ki krši naša pravila.
            </p>
            <p>
              1.3. Tvoja prijava je pomembna. Navedi konkretne podrobnosti, da lahko
              primer ustrezno raziščemo.
            </p>
            <p>S pošiljanjem prijave sprejmeš tudi našo politiko zasebnosti.</p>
            <p class="bold-title">2. Kdo lahko prijavi</p>
            <p>
              2.1. Če si postal žrtev zlorabe ali si opazil neprimerno ravnanje, imaš
              pravico to prijaviti.
            </p>
            <p>2.1.1. Prijavo lahko vložijo samo osebe, starejše od 18 let.</p>
            <p>2.1.2. Prijava mora biti resnična in utemeljena na dejstvih.</p>
            <p>2.1.3. Uporaba obrazca mora biti zakonita v tvoji državi.</p>
            <p>2.2. Nismo odgovorni za lažne ali zlonamerne prijave.</p>
            <p class="bold-title">3. Postopek prijave</p>
            <p>3.1. Pridržujemo si pravico raziskati vse prijave zlorabe.</p>
            <p>3.2. Če je prijava utemeljena, bomo sprejeli potrebne ukrepe.</p>
            <p class="bold-title">4. Prepovedane dejavnosti pri prijavi</p>
            <p>4.1. Uporaba obrazca v zlonamerne namene ni dovoljena.</p>
            <p>4.1.1. Lažne ali zavajajoče prijave niso dovoljene.</p>
            <p>4.1.2. Nadlegovanje drugih uporabnikov prek sistema prijav ni dovoljeno.</p>
            <p>4.1.3. Uporaba botov ali avtomatizacije za pošiljanje prijav je prepovedana.</p>
            <p>4.1.4. Vsak poskus manipulacije sistema prijav bo raziskan.</p>
            <p>4.1.5. Uporaba sistema za širjenje napačnih informacij je prepovedana.</p>
            <p>4.1.6. Poskusi oviranja preiskave niso dovoljeni.</p>
            <p>4.1.7. Uporaba sistema za grožnje ni dovoljena.</p>
            <p>4.1.8. Vsaka nezakonita dejavnost, povezana s prijavami, bo sankcionirana.</p>
            <p>4.1.9. Poskusi obida pravil prijave niso dovoljeni.</p>
            <p>4.1.10. Vsako zlorabo sistema prijav jemljemo resno.</p>
            <p class="bold-title">5. Intelektualna lastnina pri prijavi</p>
            <p>
              5.1. Vsebina, poslana ob prijavi, ti ne podeljuje lastninskih pravic.
            </p>
            <p>5.2. Z vložitvijo prijave uporabniki ne pridobijo pravic do vsebine spletnega mesta.</p>
            <p>5.3. Prijave se uporabljajo izključno za preiskavo.</p>
            <p>5.4. Tretje osebe ne smejo kopirati ali spreminjati prijav.</p>
            <p class="bold-title">6. Omejitev odgovornosti pri prijavi</p>
            <p>6.1. S pošiljanjem prijave prevzameš odgovornost za njeno vsebino.</p>
            <p>6.2. Nismo odgovorni za posledice vloženih prijav.</p>
            <p>6.3. Vsaka izguba, ki izhaja iz prijave, bremeni uporabnika.</p>
            <p>6.4. Ne sprejemamo odgovornosti za škodo, povzročeno s prijavami.</p>
            <p>
              6.5. Tehnične težave sistema prijav niso naša odgovornost.
            </p>
            <p class="bold-title">7. Informacije o postopku prijave</p>
            <p>
              7.1. Z uporabo sistema prijav se strinjaš, da te lahko kontaktiramo zaradi dodatnih informacij.
            </p>
            <p>7.2. S prijavami ravnamo zaupno.</p>
            <p>7.3. Uporabnikom svetujemo, da obdržijo kopijo prijav.</p>
            <p class="bold-title">8. Dodatne povezave in viri</p>
            <p>8.1. Več o prijavi zlorabe najdeš v naših pravilih.</p>
            <p>8.2. Povezave na zunanje vire niso naše priporočilo.</p>
            <p>8.3. Svetujemo, da vsak vir preveriš pred uporabo.</p>
            <p class="bold-title">9. Splošne določbe o prijavah</p>
            <p>
              9.1. Pridržujemo si pravico spremeniti, ustaviti ali ukiniti postopek prijave
              kadarkoli.
            </p>
            <p>
              9.2. Pogoji tega postopka se lahko kadarkoli spremenijo. Nadaljnja uporaba
              storitve prijav po takih spremembah pomeni sprejem novih pogojev.
            </p>
            <p>9.3. Z vložitvijo prijave uporabnik v celoti sprejme te pogoje.</p>
            <p>
              9.4. Vsak sporazum ali izjava, pisna ali ustna, ki ne spada pod
              konkretne točke teh pogojev, je pravno neveljavna in ne zavezuje nobene stranke.
            </p>
            <p>
              9.5. Pravica, podeljena s temi pogoji, ki se ne uporablja — zaradi privolitve,
              malomarnosti ali nezmožnosti — se šteje za odpoved. Delna ali popolna uporaba pravice
              ne izključuje in ne omejuje poznejše uporabe.
            </p>
            <p>
              9.6. Če pristojno sodišče razglasi določbo teh pogojev za nično, se
              šteje za nično. Preostanek pogojev pa ostane v celoti v veljavi.
            </p>
            <p>
              9.7. Sprejema se, da ti pogoji omogočajo tretjim osebam vodenje spletnega mesta
              in prenos pravic ter obveznosti. Uporabnik ne sme prenesti
              svojih pravic in obveznosti na drugo stranko.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

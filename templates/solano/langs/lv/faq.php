<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'BUJ ' . SITE_NAME;
$page_description = 'Jautājumi, atbildēti — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Jautājumi</span>
    <h1>Jautājumi, skaidri atbildēti</h1>
    <p class="kpnq92g">Ko cilvēki jautā pirms konta atvēršanas — un atbildes, ko teiktu arī pa tālruni.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Jautājumi par naudu</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Vai <?= e(SITE_NAME) ?> ir krāpniecība?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nē: <?= e(SITE_NAME) ?> darbojas ar verifikācijas pārbaudēm, publicē noteikumus un risku informāciju pilnā apjomā, un izņemšanas vienmēr atgriežas sākotnējā maksājuma metodē. Tomēr katrs ieguldījums nes reālu risku, un neviena nopietna platforma nesola garantētu ienesīgumu — esiet uzmanīgi pret tiem, kas to dara.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Cik maksā konta atvēršana?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Konta atvēršana ir bezmaksas. Nav reģistrācijas maksas un nav abonementa; iemaksājat tikai summu, ko izvēlaties ieguldīt.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Cik ilgi aizņem izņemšanas?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Pieprasījumi tiek apstrādāti darba dienās un atgriežas iemaksas metodē. Bankas pārskaitījumi aizņem ilgāk nekā kartes vai e-maki.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Vai ir minimālā summa?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Jā, un tā ir apzināti zema, no <?= e(money_min()) ?>, lai varētu sākt ar mazu summu un vēlāk pievienot. Precīzā summa redzama pirms apstiprināšanas.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Bieži uzdotie jautājumi</h2>
    <div class="fjl4d">
      <details open><summary>Kāda ir minimālā iemaksa, lai sāktu?</summary><p>Kontu varat atvērt un finansēt no <?= e(money_min()) ?> minimāli. Papildu līdzekļus varat pievienot, kad plāns virzās uz priekšu.</p></details>
      <details><summary>Kā darbojas izņemšanas?</summary><p>Pieprasiet izņemšanu jebkurā laikā no paneļa. Līdzekļi atgriežas izvēlētajā maksājuma metodē, parastajos apstrādes termiņos.</p></details>
      <details><summary>Vai mana nauda tiek glabāta droši?</summary><p>Kontus aizsargā profesionāla līmeņa drošība un identitātes pārbaudes. Tāpat kā jebkurā ieguldījumā, kapitāls ir riskam pakļauts un vērtības var kristies un celties.</p></details>
      <details><summary>Cik ilgi aizņem sākt ieguldīt?</summary><p>Lielākā daļa dalībnieku reģistrāciju pabeidz dažu minūšu laikā. Pēc pirmās iemaksas apstrādes plānu varat aktivizēt uzreiz.</p></details>
      <details><summary>Vai ir slēptas komisijas?</summary><p>Visas izmaksas tiek rādītas caurspīdīgi pirms apņemšanās. Vienmēr redzēsiet, kas attiecas uz jūsu plānu — bez pārsteigumiem.</p></details>
      <details><summary>Kāds ir minimālais vecums reģistrācijai?</summary><p>Jums jābūt vismaz 18 gadus vecam, lai atvērtu kontu un ieguldītu. Verifikācija var apstiprināt vecumu un identitāti.</p></details>
      <details><summary>Kādi maksājumu veidi tiek pieņemti?</summary><p>Pieņemam ierastos veidus: debetkartes un kredītkartes, bankas pārskaitījumus, atlasītos e-makus un kriptovalūtas. Precīzās iespējas redzēsiet iemaksas solī.</p></details>
      <details><summary>Kad ir pieejams klientu atbalsts?</summary><p>Atbalsta komanda ir pieejama no pirmdienas līdz piektdienai, 9:00–18:00, un apņemas atbildēt uz katru pieprasījumu vienas darba dienas laikā.</p></details>
      <details><summary>Kā tiek risināti nodokļi no peļņas?</summary><p>Nodokļi no ieguldījumu peļņas atkarīgi no jūsu valsts noteikumiem un ir jūsu atbildība. Iesakām vest pašu uzskaiti un runāt ar kvalificētu nodokļu konsultantu.</p></details>
      <details><summary>Kas ir KYC verifikācija un kāpēc tā nepieciešama?</summary><p>KYC (Know Your Customer) ir standarta identitātes pārbaude. Tā palīdz aizsargāt kontus un ir ierasta ieguldījumu konta atvēršanas daļa.</p></details>
      <details><summary>Vai man nepieciešama iepriekšēja ieguldījumu pieredze?</summary><p>Nē. Katram dalībniekam ir personīgais finanšu analītiķis, kas vada katrā solī, tāpēc iepriekšējas tirgus zināšanas nav nepieciešamas.</p></details>
      <details><summary>Kas pārvalda manus ieguldījumus?</summary><p>Personīgais finanšu analītiķis ar MI rīkiem, atbilstoši jūsu mērķiem un riska līmenim. Apvieno ekspertīzi ar tehnoloģiju — lēmumi paliek cilvēka.</p></details>
      <details><summary>Vai platforma atbilst regulatīvajiem standartiem?</summary><p>Jā — tā atbilst nacionālajiem finanšu un kiberdrošības standartiem, ar iebūvētu konta aizsardzību un verifikāciju.</p></details>
      <details><summary>Vai vēlāk varu pievienot papildu līdzekļus?</summary><p>Jā. Kontu varat papildināt jebkurā laikā un plānu ar analītiķi pielāgot, kad mērķi mainās.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Konts un drošība</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Kā darbojas pieteikšanās <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Pieteikties ar reģistrēto e-pastu un paroli no vietnes vai mobilā pārlūka. Ja ieslēgta divpakāpju verifikācija, būs jāievada kods; aizmirstu paroli varat atjaunot pieteikšanās ekrānā.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Kāpēc jums vajadzīgi personu apliecinoši dokumenti?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Verifikācija nepieciešama, pirms konts var kustināt līdzekļus. Tā arī novērš, ka kāds atver kontu jūsu vārdā.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Vai man nepieciešama iepriekšēja pieredze?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nē. Lielākā daļa dalībnieku sāk bez tās. Speciālists izved cauri pirmajiem soļiem, un demo atlikums ļauj trenēties.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Vai varu lietot telefonā?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Jā, platforma darbojas mobilajā pārlūkā, nekas nav jāinstalē.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Sākt — <?= e(money_min()) ?> no</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Nosūtīt ziņojumu</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

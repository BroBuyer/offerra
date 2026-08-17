<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Časté otázky ' . SITE_NAME;
$page_description = 'Otázky, zodpovedané — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Otázky</span>
    <h1>Otázky, zodpovedané jasne</h1>
    <p class="kpnq92g">Na čo sa ľudia pýtajú pred otvorením účtu — a odpovede, ktoré by sme dali aj po telefóne.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Otázky o peniazoch</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Je <?= e(SITE_NAME) ?> podvod?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nie: <?= e(SITE_NAME) ?> funguje s overením, zverejňuje podmienky aj upozornenie na riziká v plnom znení a výbery sa vždy vracajú pôvodnou platobnou metódou. Každá investícia však nesie reálne riziko a žiadna seriózna platforma nesľubuje garantované výnosy — dávajte si pozor na tých, kto to robia.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Koľko stojí otvorenie účtu?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Otvorenie účtu je zadarmo. Žiadny registračný poplatok ani predplatné; vkladáte len sumu, ktorú sa rozhodnete investovať.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Ako dlho trvajú výbery?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Žiadosti sa spracúvajú v pracovné dni a vracajú sa metódou vkladu. Bankové prevody trvajú dlhšie ako karty alebo e-peňaženky.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Je tu minimálna suma?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Áno, a je zámerne nízka, od <?= e(money_min()) ?>, aby ste mohli začať v malom a neskôr pridať. Presná suma je viditeľná pred potvrdením.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Často kladené otázky</h2>
    <div class="fjl4d">
      <details open><summary>Aký je minimálny vklad na začiatok?</summary><p>Účet môžete otvoriť a financovať od <?= e(money_min()) ?> minimálne. Ďalšie prostriedky môžete pridať, ako plán postupuje.</p></details>
      <details><summary>Ako fungujú výbery?</summary><p>Výber požiadajte kedykoľvek z panela. Prostriedky sa vrátia zvolenou platobnou metódou, v obvyklých lehotách.</p></details>
      <details><summary>Sú moje peniaze v bezpečí?</summary><p>Účty chráni zabezpečenie profesionálnej úrovne a overenie identity. Ako pri každej investícii je kapitál v riziku a hodnoty môžu klesať aj stúpať.</p></details>
      <details><summary>Ako dlho trvá začať investovať?</summary><p>Väčšina členov dokončí registráciu počas niekoľkých minút. Po spracovaní prvého vkladu môžete plán aktivovať hneď.</p></details>
      <details><summary>Sú tu skryté poplatky?</summary><p>Všetky náklady sú viditeľné transparentne pred záväzkom. Vždy uvidíte, čo platí pre váš plán — bez prekvapení.</p></details>
      <details><summary>Aký je minimálny vek na registráciu?</summary><p>Musíte mať aspoň 18 rokov, aby ste otvorili účet a investovali. Overenie môže potvrdiť vek a identitu.</p></details>
      <details><summary>Ktoré platobné metódy sa prijímajú?</summary><p>Prijímame bežné metódy: debetné a kreditné karty, bankové prevody, vybrané e-peňaženky a kryptomeny. Presné možnosti uvidíte pri vklade.</p></details>
      <details><summary>Kedy je dostupná zákaznícka podpora?</summary><p>Tím podpory je k dispozícii pondelok až piatok, 9:00–18:00, a zaväzuje sa odpovedať do jedného pracovného dňa.</p></details>
      <details><summary>Ako sa riešia dane z výnosov?</summary><p>Dane z investičných výnosov závisia od pravidiel vašej krajiny a sú vašou zodpovednosťou. Odporúčame viesť vlastné záznamy a hovoriť s daňovým poradcom.</p></details>
      <details><summary>Čo je overenie KYC a prečo je potrebné?</summary><p>KYC (Know Your Customer) je štandardná kontrola identity. Pomáha chrániť účty a je bežnou súčasťou otvorenia investičného účtu.</p></details>
      <details><summary>Potrebujem predchádzajúcu investičnú skúsenosť?</summary><p>Nie. Každý člen má osobného finančného analytika, ktorý vás vedie na každom kroku, takže predchádzajúca znalosť trhov nie je potrebná.</p></details>
      <details><summary>Kto spravuje moje investície?</summary><p>Vyhradený finančný analytik s nástrojmi AI, podľa vašich cieľov a rizika. Spája odbornosť s technológiou — rozhodnutia ostávajú ľudské.</p></details>
      <details><summary>Spĺňa platforma regulačné štandardy?</summary><p>Áno — spĺňa národné finančné a kybernetické štandardy, s ochranou účtu a vstavaným overením.</p></details>
      <details><summary>Môžem neskôr pridať ďalšie prostriedky?</summary><p>Áno. Účet môžete kedykoľvek doplniť a plán s analytikom upraviť, ako sa ciele menia.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Účet a zabezpečenie</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Ako funguje prihlásenie na <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Prihlásite sa registrovaným e-mailom a heslom z webu alebo mobilného prehliadača. Pri dvojfázovom overení zadáte kód; zabudnuté heslo obnovíte na prihlasovacej obrazovke.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Prečo potrebujete doklady totožnosti?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Overenie je nutné, kým účet môže pohybovať prostriedkami. Tiež zabráni, aby si niekto otvoril účet vaším menom.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Potrebujem predchádzajúcu skúsenosť?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nie. Väčšina členov začína bez nej. Špecialista vás prevedie prvými krokmi a demo zostatok slúži na nácvik.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Môžem to používať v telefóne?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Áno, platforma funguje v mobilnom prehliadači, nič sa neinštaluje.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začať — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Odoslať správu</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

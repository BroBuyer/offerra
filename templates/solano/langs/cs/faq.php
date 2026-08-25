<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Časté dotazy ' . SITE_NAME;
$page_description = 'Otázky, zodpovězené — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Otázky</span>
    <h1>Otázky, zodpovězené jasně</h1>
    <p class="kpnq92g">Na co se lidé ptají před otevřením účtu — a odpovědi, které bychom dali i po telefonu.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Otázky o penězích</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Je <?= e(SITE_NAME) ?> podvod?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ne: <?= e(SITE_NAME) ?> funguje s ověřením, zveřejňuje podmínky i upozornění na rizika v plném znění a výběry se vždy vrací původní platební metodou. Každá investice ale nese reálné riziko a žádná seriózní platforma neslibuje garantované výnosy — dávejte si pozor na ty, kdo to dělají.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Kolik stojí otevření účtu?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Otevření účtu je zdarma. Žádný registrační poplatek ani předplatné; vkládáte jen částku, kterou se rozhodnete investovat.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Jak dlouho trvají výběry?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Žádosti se zpracovávají v pracovní dny a vrací se metodou vkladu. Bankovní převody trvají déle než karty nebo e-peněženky.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Je tu minimální částka?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ano, a je záměrně nízká, od <?= e(money_min()) ?>, abyste mohli začít s málem a později přidat. Přesná částka je vidět před potvrzením.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Často kladené otázky</h2>
    <div class="fjl4d">
      <details open><summary>Jaký je minimální vklad pro začátek?</summary><p>Účet můžete otevřít a financovat od <?= e(money_min()) ?> minimálně. Další prostředky můžete přidat, jak plán postupuje.</p></details>
      <details><summary>Jak fungují výběry?</summary><p>Výběr požádejte kdykoli z panelu. Prostředky se vrátí zvolenou platební metodou, v obvyklých lhůtách.</p></details>
      <details><summary>Jsou mé peníze v bezpečí?</summary><p>Účty chrání zabezpečení profesionální úrovně a ověření identity. Jako u každé investice je kapitál v riziku a hodnoty mohou klesat i stoupat.</p></details>
      <details><summary>Jak dlouho trvá začít investovat?</summary><p>Většina členů dokončí registraci během několika minut. Po zpracování prvního vkladu můžete plán aktivovat hned.</p></details>
      <details><summary>Jsou tu skryté poplatky?</summary><p>Všechny náklady jsou vidět transparentně před závazkem. Vždy uvidíte, co platí pro váš plán — bez překvapení.</p></details>
      <details><summary>Jaký je minimální věk pro registraci?</summary><p>Musíte mít alespoň 18 let, abyste otevřeli účet a investovali. Ověření může potvrdit věk a identitu.</p></details>
      <details><summary>Které platební metody se přijímají?</summary><p>Přijímáme běžné metody: debetní a kreditní karty, bankovní převody, vybrané e-peněženky a kryptoměny. Přesné možnosti uvidíte u vkladu.</p></details>
      <details><summary>Kdy je dostupná zákaznická podpora?</summary><p>Tým podpory je k dispozici pondělí až pátek, 9:00–18:00, a zavazuje se odpovědět do jednoho pracovního dne.</p></details>
      <details><summary>Jak se řeší daně z výnosů?</summary><p>Daně z investičních výnosů závisí na pravidlech vaší země a jsou vaší odpovědností. Doporučujeme vést vlastní záznamy a mluvit s daňovým poradcem.</p></details>
      <details><summary>Co je ověření KYC a proč je potřeba?</summary><p>KYC (Know Your Customer) je standardní kontrola identity. Pomáhá chránit účty a je běžnou součástí otevření investičního účtu.</p></details>
      <details><summary>Potřebuji předchozí investiční zkušenost?</summary><p>Ne. Každý člen má osobního finančního analytika, který vás vede na každém kroku, takže předchozí znalost trhů není nutná.</p></details>
      <details><summary>Kdo spravuje mé investice?</summary><p>Vyhrazený finanční analytik s nástroji AI, podle vašich cílů a rizika. Spojuje odbornost s technologií — rozhodnutí zůstávají lidská.</p></details>
      <details><summary>Splňuje platforma regulatorní standardy?</summary><p>Ano — splňuje národní finanční a kybernetické standardy, s ochranou účtu a vestavěným ověřením.</p></details>
      <details><summary>Mohu později přidat další prostředky?</summary><p>Ano. Účet můžete kdykoli doplnit a plán s analytikem upravit, jak se cíle mění.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Účet a zabezpečení</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Jak funguje přihlášení na <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Přihlásíte se registrovaným e-mailem a heslem z webu nebo mobilního prohlížeče. Při dvoufázovém ověření zadáte kód; zapomenuté heslo obnovíte na přihlašovací obrazovce.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Proč potřebujete doklady totožnosti?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ověření je nutné, než účet může pohybovat prostředky. Také zabrání, aby si někdo otevřel účet vaším jménem.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Potřebuji předchozí zkušenost?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ne. Většina členů začíná bez ní. Specialista vás provede prvními kroky a demo zůstatek slouží k nácviku.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Mohu to používat v telefonu?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ano, platforma funguje v mobilním prohlížeči, nic se neinstaluje.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začít — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Odeslat zprávu</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

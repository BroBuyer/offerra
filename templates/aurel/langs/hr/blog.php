<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Blog ' . SITE_NAME;
$page_description = 'Što se mijenja u propisima i što to znači za vas — ' . SITE_NAME;
$page_canonical = page_url("blog.php");
$active_page = "blog";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="vd7z9k">Bilješke</span>
    <h1>Što se mijenja u propisima i što to znači za vas</h1>
    <p class="kpnq92g">Kratki, praktični članci o propisima koji utječu na privatne ulagače na vašem tržištu: bez pravnog žargona, bez pretjerivanja.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <ul class="cngnn7" itemscope itemtype="https://schema.org/Blog">
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-1" itemprop="url"><?= e(SITE_NAME) ?> review 2026: što novi zahtjevi o kriptu govore privatnim ulagačima</a></h2>
        <p itemprop="description">Regulator pooštrava način na koji se kripto usluge nude maloprodajnim klijentima. Ovdje je verzija jednostavnim jezikom i datumi koji su važni.</p>
        <a class="hwtx8q" href="/blog-1">Pročitaj bilješku →</a>
      </li>
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-2" itemprop="url">Kako analizirati investicijsku platformu prije depozita</a></h2>
        <p itemprop="description">Pet provjera koje traju deset minuta i govore više od bilo koje stranice s recenzijama.</p>
        <a class="hwtx8q" href="/blog-2">Pročitaj bilješku →</a>
      </li>
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-3" itemprop="url">Zašto vaša prva uplata kod <?= e(SITE_NAME) ?> + Hrvatska bi trebala biti manja nego što mislite</a></h2>
        <p itemprop="description">Najjeftiniji način da saznate kako se platforma ponaša jest dati joj vrlo malo s čime može raditi.</p>
        <a class="hwtx8q" href="/blog-3">Pročitaj bilješku →</a>
      </li>
    </ul>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Započnite — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Često postavljana pitanja</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Kako čitati sljedeće bilješke</h2>
    <h3>Napisano za početnike</h3>
    <p>Svaka bilješka ovdje pretpostavlja da nemate prethodno tržišno obrazovanje. Kad je pojam neizbježan, objašnjava se pri prvom pojavljivanju, a kad se pravilo razlikuje po zemljama, to se navodi umjesto da se zanemari.</p>
    <h4>Ono što nećete naći</h4>
    <p>Ni predviđanja cijena ni signali. Sve što se predstavlja kao zajamčeni prinos najjasniji je alarm u ovom sektoru, i nećemo dodati još jedan.</p>
    <h3>Koliko se često ažurira</h3>
    <p>Bilješke se pregledavaju kad se promijene temeljna pravila: nova regulacija, novi informativni zahtjev, promjena u upravljanju uplatama. Datum svake bilješke je datum zadnjeg pregleda, ne originalnog pisanja.</p>
    <h4>Predložite temu</h4>
    <p>Ako postoji pitanje koje bilješke ne pokrivaju, pošaljite ga putem stranice za kontakt; ponavljajuća pitanja često postaju sljedeća bilješka.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

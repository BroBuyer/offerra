<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Blog ' . SITE_NAME;
$page_description = 'Kaj se spreminja v pravilih in kaj to pomeni za vas — ' . SITE_NAME;
$page_canonical = page_url("blog.php");
$active_page = "blog";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="vd7z9k">Opombe</span>
    <h1>Kaj se spreminja v pravilih in kaj to pomeni za vas</h1>
    <p class="kpnq92g">Kratki, praktični članki o pravilih, ki vplivajo na male vlagatelje na vašem trgu: brez pravnega žargona, brez navdušenja.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <ul class="cngnn7" itemscope itemtype="https://schema.org/Blog">
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-1" itemprop="url"><?= e(SITE_NAME) ?> pregled 2026: kaj pomenijo nova kripto pravila za male vlagatelje</a></h2>
        <p itemprop="description">Regulator zaostruje, kako se kripto storitve ponujajo malim strankam. Tukaj je navadna angleška različica in datumi, ki so pomembni.</p>
        <a class="hwtx8q" href="/blog-1">Preberi opombo →</a>
      </li>
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-2" itemprop="url">Kako oceniti naložbeno platformo, preden položite denar</a></h2>
        <p itemprop="description">Pet pregledov, ki vzamejo deset minut in vam povedo več kot katera koli spletna stran z ocenami.</p>
        <a class="hwtx8q" href="/blog-2">Preberi opombo →</a>
      </li>
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-3" itemprop="url">Zakaj bi moral biti vaš prvi depozit z <?= e(SITE_NAME) ?> na vašem trgu manjši, kot si mislite</a></h2>
        <p itemprop="description">Najcenejši način, da se naučite, kako se platforma obnaša, je, da ji daste zelo malo časa za delo.</p>
        <a class="hwtx8q" href="/blog-3">Preberi opombo →</a>
      </li>
    </ul>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začetek — <?= e(money_min()) ?> od</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Pogosta vprašanja</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Kako brati opombe, ki sledijo</h2>
    <h3>Napisano za ljudi, ki začenjajo</h3>
    <p>Vsaka opomba tukaj predvideva, da nimate predhodnega usposabljanja na trgih. Kadar se izrazu ni mogoče izogniti, je pojasnjen, ko se pojavi prvič, in kadar se pravilo razlikuje glede na državo, je to navedeno in ne preskočeno.</p>
    <h4>Kaj ne boste našli</h4>
    <p>Brez napovedi cen in brez signalov. Vse, kar je predstavljeno kot zajamčen donos, je najjasnejši opozorilni znak v tej industriji in ne bomo dodali še enega.</p>
    <h3>Kako pogosto se to posodablja</h3>
    <p>Opombe se pregledajo, ko se osnovna pravila spremenijo: nova uredba, nova zahteva za poročanje, sprememba načina obravnavanja depozitov. Datum na vsakem zapisku je datum njegovega zadnjega pregleda in ne datum, ko je bil prvič napisan.</p>
    <h4>Predlagajte temo</h4>
    <p>Če obstaja vprašanje, na katerega opombe ne odgovorijo, ga pošljite prek kontaktne strani; ponavljajoča se vprašanja običajno postanejo naslednja opomba.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

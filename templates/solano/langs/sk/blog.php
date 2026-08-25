<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Blog ' . SITE_NAME;
$page_description = 'Čo sa mení v pravidlách a čo to znamená pre vás — ' . SITE_NAME;
$page_canonical = page_url("blog.php");
$active_page = "blog";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="vd7z9k">Poznámky</span>
    <h1>Čo sa mení v pravidlách a čo to znamená pre vás</h1>
    <p class="kpnq92g">Krátke praktické články o pravidlách, ktoré ovplyvňujú retailových investorov na vašom trhu: bez právnického žargónu a bez hype.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <ul class="cngnn7" itemscope itemtype="https://schema.org/Blog">
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-1" itemprop="url"><?= e(SITE_NAME) ?> recenzia 2026: čo nové krypto pravidlá znamenajú pre retailových investorov</a></h2>
        <p itemprop="description">Regulátor sprísňuje, ako sa krypto služby ponúkajú retailovým klientom. Tu je zrozumiteľná verzia a dátumy, na ktorých záleží.</p>
        <a class="hwtx8q" href="/blog-1">Prečítať poznámku →</a>
      </li>
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-2" itemprop="url">Ako posúdiť investičnú platformu pred vkladom</a></h2>
        <p itemprop="description">Päť kontrol, ktoré trvajú desať minút a povedia viac ako recenzné weby.</p>
        <a class="hwtx8q" href="/blog-2">Prečítať poznámku →</a>
      </li>
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-3" itemprop="url">Prečo by prvý vklad u <?= e(SITE_NAME) ?> na vašom trhu mal byť menší, ako si myslíte</a></h2>
        <p itemprop="description">Najlacnejší spôsob, ako spoznať správanie platformy, je dať jej málo na prácu.</p>
        <a class="hwtx8q" href="/blog-3">Prečítať poznámku →</a>
      </li>
    </ul>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začať — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Časté otázky</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Ako čítať nasledujúce poznámky</h2>
    <h3>Písané pre tých, kto začínajú</h3>
    <p>Každá poznámka predpokladá, že nemáte školenie v trhoch. Keď sa termínu nedá vyhnúť, vysvetlí sa pri prvom výskyte, a keď sa pravidlo líši podľa krajiny, je to povedané, nie preskočené.</p>
    <h4>Čo tu nenájdete</h4>
    <p>Žiadne cenové predikcie a žiadne signály. Čokoľvek prezentované ako garantovaný výnos je najsilnejšie varovanie v odbore — a ďalšie nepridáme.</p>
    <h3>Ako často sa to aktualizuje</h3>
    <p>Poznámky sa revidujú, keď sa zmenia pravidlá: nová regulácia, nová oznamovacia povinnosť, zmena vkladov. Dátum pri poznámke je dátum poslednej revízie, nie prvého spísania.</p>
    <h4>Navrhnúť tému</h4>
    <p>Ak poznámky na niečo neodpovedajú, pošlite to cez kontaktnú stránku; opakujúce sa otázky sa zvyčajne stanú ďalšou poznámkou.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

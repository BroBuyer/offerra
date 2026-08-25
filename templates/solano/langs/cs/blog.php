<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Blog ' . SITE_NAME;
$page_description = 'Co se mění v pravidlech a co to znamená pro vás — ' . SITE_NAME;
$page_canonical = page_url("blog.php");
$active_page = "blog";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="vd7z9k">Poznámky</span>
    <h1>Co se mění v pravidlech a co to znamená pro vás</h1>
    <p class="kpnq92g">Krátké praktické články o pravidlech, která ovlivňují retailové investory na vašem trhu: bez právnického žargonu a bez hype.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <ul class="cngnn7" itemscope itemtype="https://schema.org/Blog">
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-1" itemprop="url"><?= e(SITE_NAME) ?> recenze 2026: co nová krypto pravidla znamenají pro retailové investory</a></h2>
        <p itemprop="description">Regulátor zpřísňuje, jak se krypto služby nabízejí retailovým klientům. Tady je srozumitelná verze a data, na kterých záleží.</p>
        <a class="hwtx8q" href="/blog-1">Přečíst poznámku →</a>
      </li>
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-2" itemprop="url">Jak posoudit investiční platformu před vkladem</a></h2>
        <p itemprop="description">Pět kontrol, které trvají deset minut a řeknou víc než recenzní weby.</p>
        <a class="hwtx8q" href="/blog-2">Přečíst poznámku →</a>
      </li>
      <li class="blxco" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
        <h2 itemprop="headline"><a href="/blog-3" itemprop="url">Proč by první vklad u <?= e(SITE_NAME) ?> na vašem trhu měl být menší, než si myslíte</a></h2>
        <p itemprop="description">Nejlevnější způsob, jak poznat chování platformy, je dát jí málo k práci.</p>
        <a class="hwtx8q" href="/blog-3">Přečíst poznámku →</a>
      </li>
    </ul>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začít — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Časté dotazy</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Jak číst následující poznámky</h2>
    <h3>Psáno pro ty, kdo začínají</h3>
    <p>Každá poznámka předpokládá, že nemáte školení v trzích. Když se termínu nelze vyhnout, vysvětlí se při prvním výskytu, a když se pravidlo liší podle země, je to řečeno, ne přeskočeno.</p>
    <h4>Co tu nenajdete</h4>
    <p>Žádné cenové predikce a žádné signály. Cokoli prezentované jako garantovaný výnos je nejsilnější varování v oboru — a další nepřidáme.</p>
    <h3>Jak často se to aktualizuje</h3>
    <p>Poznámky se revidují, když se změní pravidla: nová regulace, nová oznamovací povinnost, změna vkladů. Datum u poznámky je datum poslední revize, ne prvního sepsání.</p>
    <h4>Navrhnout téma</h4>
    <p>Pokud poznámky na něco neodpovídají, pošlete to přes kontaktní stránku; opakující se otázky se obvykle stanou další poznámkou.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

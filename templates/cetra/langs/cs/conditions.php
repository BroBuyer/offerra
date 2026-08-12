<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Podmínky použití');
$page_description = 'Pravidla, která platí, když přistupujete k ' . SITE_NAME . ' nebo jej používáte.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Hlavní">
      <a href="<?= page_url() ?>#platform">Platforma</a>
      <a href="<?= page_url() ?>#how">Jak to funguje</a>
      <a href="<?= page_url() ?>#markets">Trhy</a>
      <a href="<?= page_url() ?>#faq">Často kladené otázky</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Začít</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal</span>
      <h1>Podmínky použití</h1>
      <p class="lede">Pravidla, která platí, když přistupujete k <?= e(SITE_NAME) ?> nebo jej používáte.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Poslední aktualizace: leden 2025</p>

      <h2>1. Přijetí podmínek</h2>
      <p>Přístupem k webu a službám <?= e(SITE_NAME) ?> nebo jejich používáním souhlasíte s těmito Podmínkami použití. Pokud nesouhlasíte, služby nepoužívejte.</p>

      <h2>2. Způsobilost</h2>
      <p>Musíte mít alespoň 18 let (nebo věk zletilosti ve vaší jurisdikci) a právní způsobilost uzavřít závaznou smlouvu. Služby nejsou nabízeny obyvatelům omezených jurisdikcí, kde by taková nabídka byla nezákonná.</p>

      <h2>3. Registrace účtu</h2>
      <p>Souhlasíte s poskytnutím přesných, aktuálních a úplných informací při registraci a s jejich udržováním v aktuálním stavu. Jste odpovědní za důvěrnost přihlašovacích údajů a za veškerou aktivitu na účtu.</p>

      <h2>4. Služby</h2>
      <p><?= e(SITE_NAME) ?> poskytuje technologické nástroje a vzdělávací informace související s online investováním. Nejsme váš finanční poradce. Nic na tomto webu nepředstavuje personalizované investiční poradenství, daňové poradenství ani výzvu ke koupi nebo prodeji finančního nástroje.</p>

      <h2>5. Poplatky</h2>
      <p>Platné poplatky, spready a provize jsou uvedeny na platformě nebo v platném sazebníku. Jste odpovědní za veškeré daně vyplývající z vašich aktivit.</p>

      <h2>6. Zakázané chování</h2>
      <ul>
        <li>Používání služeb k praní špinavých peněz, financování terorismu, manipulaci trhu nebo jakémukoli nezákonnému účelu.</li>
        <li>Vydávání se za jinou osobu nebo poskytování nepravdivých údajů o totožnosti.</li>
        <li>Pokusy o zásah, kompromitaci nebo reverse engineering jakékoli části platformy.</li>
        <li>Používání automatizovaných nástrojů k přístupu ke službám jinak než výslovně povoleným způsobem.</li>
      </ul>

      <h2>7. Duševní vlastnictví</h2>
      <p>Veškerý obsah, ochranné známky, software a materiály na webu jsou majetkem <?= e(SITE_NAME) ?> nebo jejích poskytovatelů licence a jsou chráněny platnými zákony o duševním vlastnictví. Je vám udělena omezená, nevýhradní, odvolatelná licence k používání služeb k zamýšlenému účelu.</p>

      <h2>8. Služby třetích stran</h2>
      <p>Platforma může obsahovat odkazy na služby třetích stran nebo je integrovat. Nejsme odpovědní za takové služby, jejich dostupnost, přesnost ani obsah.</p>

      <h2>9. Vyloučení odpovědnosti</h2>
      <p>Služby jsou poskytovány „jak jsou“ a „podle dostupnosti“ bez záruk jakéhokoli druhu. Obchodování zahrnuje podstatné riziko ztráty. Viz naše <a href="<?= page_url('conditions.php') ?>">Upozornění na rizika</a> pro podrobnosti.</p>

      <h2>10. Omezení odpovědnosti</h2>
      <p>V maximálním rozsahu povoleném zákonem <?= e(SITE_NAME) ?> nenese odpovědnost za nepřímé, nahodilé, zvláštní, následné nebo sankční škody ani za ztrátu zisku nebo výnosů vyplývající z používání služeb.</p>

      <h2>11. Odškodnění</h2>
      <p>Souhlasíte s odškodněním a zproštěním odpovědnosti <?= e(SITE_NAME) ?>, jejích přidružených společností a personálu za jakýkoli nárok vyplývající z porušení těchto Podmínek nebo zneužití služeb.</p>

      <h2>12. Pozastavení a ukončení</h2>
      <p>Můžeme pozastavit nebo ukončit přístup ke službám kdykoli, s oznámením nebo bez něj, pokud se domníváme, že jste porušili tyto Podmínky nebo platné právo.</p>

      <h2>13. Rozhodné právo</h2>
      <p>Tyto Podmínky se řídí právem platným v sídle <?= e(SITE_NAME) ?>, bez ohledu na zásady kolize právních norem.</p>

      <h2>14. Změny</h2>
      <p>Tyto Podmínky můžeme čas od času měnit. Pokračující používání služeb po změnách představuje přijetí revidovaných Podmínek.</p>

      <h2>15. Kontakt</h2>
      <p>Dotazy k těmto Podmínkám lze zaslat prostřednictvím naší <a href="<?= page_url('contacts.php') ?>">kontaktní stránky</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Zpět na úvodní stránku</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Všechna práva vyhrazena ·
      <a href="<?= page_url('privacy.php') ?>">Soukromí</a> ·
      <a href="<?= page_url('conditions.php') ?>">Podmínky</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>

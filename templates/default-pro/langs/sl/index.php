<?php
require_once __DIR__ . '/includes/config.php';

$brand = SITE_NAME;
$market = market_country_name();
$audience = market_audience();

$page_title = page_title('Pametna trgovalna platforma');
$page_description = $brand . ' je globalna trgovalna platforma, zasnovana za ' . $audience
    . ', ki iščejo dosledno zmogljivost, hitro izvedbo in popoln nadzor nad okoljem.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <p class="eyebrow">AI trgovalna platforma <?= e($audience) ?></p>
        <h1>AI trgovalna platforma <?= e($brand) ?>:<br><span class="text-accent">samodejna analiza in pametnejše trgovanje</span></h1>
        <p class="lead">
          <?= e($brand) ?> je napredna trgovalna platforma z umetno inteligenco. V realnem času analizira finančne trge
          in pripravi samodejne vpoglede za <?= e($audience) ?>. Pametni pomočnik pomaga prepoznati priložnosti,
          upravljati tveganje in sprejemati odločitve na enem zaslonu — brez zapletenega namiznega terminala.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL varnost
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            24/7 Podpora
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Hitra izvedba
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Začnite z <?= e($brand) ?> — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Odprite račun ' . $brand;
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="stats" aria-label="Statistika platforme <?= e($brand) ?>">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Trgi na <?= e($brand) ?></div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Registrirani uporabniki</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Poročani obseg</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Podprte države</div>
      </div>
    </div>
  </section>

  <section class="platform-section" id="platform" aria-label="Predogled trgovalne platforme <?= e($brand) ?>">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Delovni prostor <?= e($brand) ?></p>
        <h2>Nadzorna plošča <?= e($brand) ?><br>na računalniku in telefonu</h2>
        <p class="lead">
 <?= e($brand) ?> je zasnovan kot sodobna borza: podatki BTC/USDT v živo, spremljanje portfelja
          in naročila z enim tapom. Seznami spremljanja, opozorila in status računa ostanejo usklajeni, da <?= e($audience) ?>
          vidi isto knjigo v brskalniku ali na telefonu.
        </p>
        <ul class="platform-points">
          <li>Svečni grafikoni v realnem času v <?= e($brand) ?></li>
          <li>Portfelj in D/I na začetnem zaslonu <?= e($brand) ?></li>
          <li>Varno območje računa <?= e($brand) ?></li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Preizkusite <?= e($brand) ?></a>
      </div>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Zakaj <?= e($brand) ?></p>
        <h2>Kaj dobite v <?= e($brand) ?></h2>
        <p class="lead">Varnost, hitrost in analiza z umetno inteligenco — ena platforma za <?= e($audience) ?>, ki želijo eno mizo za več sredstev.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Varnostni sklad <?= e($brand) ?></h3>
          <p>SSL, 2FA in dokumentirani koraki pologa ter dviga. <?= e($brand) ?> hrani poverilnice in nadzor seje v območju računa.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Signali UI na <?= e($brand) ?></h3>
          <p>Sistem <?= e($brand) ?> označi priložnosti iz cene, obsega in tehničnih tokov, da manj časa preklapljate med zavihki.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Podprta avtomatizacija</h3>
          <p>Uporabite bote <?= e($brand) ?> s svojim profilom tveganja ali ostanite povsem ročni. Velikost, provizije in izpostavljenost potrdite, preden gre naročilo ven.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Miza <?= e($brand) ?> za več sredstev</h3>
          <p>Kripto, FX, indeksi in drugi navedeni instrumenti delijo eno knjigo <?= e($brand) ?> s skupnimi omejitvami.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Naročila z nizko zakasnitvijo</h3>
          <p><?= e($brand) ?> usmerja naročila skozi optimiziran sklad, da ostanejo obremenjene seje uporabne.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Pregleden vmesnik <?= e($brand) ?></h3>
          <p>Tržni podatki, zapiski in plošča računa ostanejo ločeni, da <?= e($audience) ?> preberejo priložnost brez šuma.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Trgi v živo</p>
        <h2>Trgujte Bitcoin, Ethereum in več na <?= e($brand) ?></h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Cene v realnem času in profesionalni pogledi v <?= e($brand) ?> — isti pari, ki jih <?= e($audience) ?> spremljajo na običajni mizi.
        </p>
        <a href="sign.php" class="btn btn-primary">Dostop do trgov <?= e($brand) ?></a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Cene trgov v živo">
        <div class="exchange-panel-header">
          <span>Trgi <?= e($brand) ?></span>
          <span class="live-dot">Live</span>
        </div>
        <div class="ticker-list" data-ticker-list>
          <div class="ticker-row">
            <div><div class="ticker-symbol">BTC</div><div class="ticker-pair">BTC/USD</div></div>
            <div class="ticker-price" data-price="btc">—</div>
            <div class="ticker-change up" data-change="btc">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">ETH</div><div class="ticker-pair">ETH/USD</div></div>
            <div class="ticker-price" data-price="eth">—</div>
            <div class="ticker-change up" data-change="eth">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">SOL</div><div class="ticker-pair">SOL/USD</div></div>
            <div class="ticker-price" data-price="sol">—</div>
            <div class="ticker-change down" data-change="sol">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">XRP</div><div class="ticker-pair">XRP/USD</div></div>
            <div class="ticker-price" data-price="xrp">—</div>
            <div class="ticker-change up" data-change="xrp">—</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Kako začeti</p>
        <h2>Kako začeti z <?= e($brand) ?></h2>
        <p class="lead">Registracija je brezplačna. Dostop do polne mize <?= e($brand) ?> sledi preverjanju in navedenemu najmanjšemu pologu.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>1. Registracija na <?= e($brand) ?></h3>
          <p>Izpolnite obrazec z imenom, e-pošto in telefonom. Upravitelj <?= e($brand) ?> lahko pokliče za potrditev računa.</p>
        </article>
        <article class="step-card">
          <h3>2. Preverite račun</h3>
          <p>Opravite vodene preverjanja in nastavite preference tveganja. Podpora <?= e($brand) ?> lahko <?= e($audience) ?> vodi skozi uvajanje.</p>
        </article>
        <article class="step-card">
          <h3>3. Deposit <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h3>
          <p>Napolnite z kartico, nakazilom ali elektronsko denarnico. <?= e($brand) ?> pred potrditvijo pokaže provizije.</p>
        </article>
        <article class="step-card">
          <h3>4. Nastavite omejitve <?= e($brand) ?></h3>
          <p>Določite tveganje in opozorila. Ostanite ročni ali naj avtomatizacija <?= e($brand) ?> pomaga pri izvedbi.</p>
        </article>
        <article class="step-card">
          <h3>5. Trgujte na mizi <?= e($brand) ?></h3>
          <p>Grafikoni v živo, naročila in podpora 24/7 ostanejo na isti nadzorni plošči.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Odprite račun <?= e($brand) ?></a>
      </div>
    </div>
  </section>

  <section class="section" id="about-platform" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container seo-prose">
      <p class="eyebrow">Informirano trgovanje</p>
      <h2>Kako <?= e($brand) ?> podpira odločitve na finančnih trgih</h2>
      <p>
 <?= e($brand) ?> združuje analizo z umetno inteligenco, nastavljiva opozorila in nadzorno ploščo za <?= e($audience) ?>,
        ki želijo spremljati več sredstev na enem mestu. Cilj ni obljubljen donos. <?= e($brand) ?> ponuja
        orodja za branje volatilnosti, nastavitev omejitev in sledenje od registracije do dviga.
      </p>
      <p>
        Analizni sistem obdela tokove cen, obseg in tehnične signale po časovnih okvirih ter označi
        nastavitve, ki zaslužijo pozornost — ne nadomešča vaše presoje. Filtrirajte po trgu, nastavite pragove opozoril
        in prejemajte povzetke, ko se pogoji spremenijo. Zgodovina stoji ob zadnjih premikih, da skok nikoli
        ni prikazan brez izhodišča.
      </p>
      <p>
        Upravljanje tveganja je del toka <?= e($brand) ?>: omejitve izpostavljenosti, opomniki velikosti pozicije in povzetki
        pred potrditvijo. Spletno trgovanje prinaša tveganje izgube kapitala; noben algoritem ne odstrani volatilnosti in ne jamči rezultatov.
        Provizije, razpon in status računa ostanejo na enem zaslonu <?= e($brand) ?>, preden pošljete naročilo.
      </p>
      <p>
        Po registraciji vodena pot razloži preverjanje, najmanjši polog <?= MIN_DEPOSIT ?> <?= CURRENCY ?>,
        veljavne provizije in čase knjiženja. Podpora <?= e($brand) ?> pomaga pri dokumentih, dvigih in nastavitvi na telefonu.
        Pred večjimi zneski si oglejte strani izdelka.
      </p>
      <div class="seo-grid">
        <article class="feature-card">
          <h3>Analiza več časovnih okvirov</h3>
          <p>Kratki in dolgi horizonti s sintetičnimi indikatorji in opozorili <?= e($brand) ?>, razporejeni po trgih.</p>
        </article>
        <article class="feature-card">
          <h3>Vgrajena orodja za tveganje</h3>
          <p>Omejitve, opomniki velikosti in potrditve, preden gredo naročila <?= e($brand) ?> ven.</p>
        </article>
        <article class="feature-card">
          <h3>Ena nadzorna plošča</h3>
          <p>Brskalnik ali telefon z usklajenimi nastavitvami <?= e($brand) ?> — pozicije, opozorila in podpora v eni postavitvi.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Financiranje</p>
      <h2 style="margin-bottom: 0.75rem;">Napolnite račun <?= e($brand) ?> z načini, ki jih že uporabljate</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kartice, elektronske denarnice in bančna nakazila — prikazana v <?= e($brand) ?> pred potrditvijo.</p>
      <?php
      $payment_context = 'Financiranje računa in pologi ' . $brand;
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Zaupanja vredna infrastruktura</p>
        <h2><?= e($brand) ?> teče na uveljavljenih partnerjih</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Mnenja o <?= e($brand) ?></p>
        <h2>Kaj <?= e($audience) ?> pravijo o <?= e($brand) ?></h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Registracija na <?= e($brand) ?> je trajala minute, provizije so bile na zaslonu in podpora je res odgovorila. To je miza, ki jo imam odprto.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">uporabnik <?= e($brand) ?></div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Prva kripto naročila prek <?= e($brand) ?> so bila jasnejša, kot sem pričakoval. Nastavitev je bila kratka, zapiski UI na <?= e($brand) ?> pa so mi prihranili pet aplikacij.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">uporabnik <?= e($brand) ?></div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text"><?= e($brand) ?> je bil v obremenjenih urah stabilen. Odprtje računa je bilo preprosto, pogoji pa ob gumbu za polog.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">uporabnik <?= e($brand) ?></div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Kot začetnik sem potreboval vodeno pot. Prijava, provizije in podpora <?= e($brand) ?> so bili na enem mestu — zato sem ostal.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">uporabnik <?= e($brand) ?></div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Kaj vedeti, preden začnete z <?= e($brand) ?></h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kaj je <?= e($brand) ?> in kako deluje?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
 <?= e($brand) ?> je trgovalna platforma z umetno inteligenco: v realnem času analizira trge in označi priložnosti z opozorili ter orodji za tveganje za <?= e($audience) ?>.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ali potrebujem izkušnje s trgovanjem za <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ne. <?= e($brand) ?> vodi registracijo, polog in osnovno navigacijo. Napredna orodja ostanejo na voljo, ko ste pripravljeni.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ali so moji podatki in sredstva na <?= e($brand) ?> varno obravnavani?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
 <?= e($brand) ?> uporablja šifrirane povezave, preverjanje računa ter dokumentirane korake pologa in dviga. Trgovanje še vedno prinaša tveganje izgube kapitala.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kakšne donose lahko pričakujem na <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
 <?= e($brand) ?> ne jamči donosov. Rezultati so odvisni od kapitala, strategije, volatilnosti in tega, kako upravljate tveganje.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kateri trgi so na voljo na <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
 <?= e($brand) ?> pokriva digitalna sredstva in instrumente več trgov na eni nadzorni plošči, z opozorili in podprto avtomatizacijo.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ali lahko <?= e($brand) ?> uporabljam na telefonu?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Da. <?= e($brand) ?> je narejen za sodobne telefone in brskalnike, nastavitve pa se uskladijo med napravami.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako stopim v stik s podporo <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Uporabite <a href="contacts.php">kontaktno stran</a> <?= e($brand) ?> za račune, pologe, dvige in vprašanja o platformi.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako danes začnem z <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Izpolnite obrazec <?= e($brand) ?>, opravite preverjanje in odprite nadzorno ploščo. Najmanjši polog je <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Platforma <?= e($brand) ?></p>
        <h2>Zmožnosti <?= e($brand) ?> na prvi pogled</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Sistem UI <?= e($brand) ?></div>
          <div class="specs-value">Tržna analiza s strojnim učenjem</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Financiranje</div>
          <div class="specs-value">Kartice, bančna nakazila, PayPal, elektronske denarnice — od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Naprave</div>
          <div class="specs-value"><?= e($brand) ?> na spletu, tablici in telefonu</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Trgi</div>
          <div class="specs-value">Kripto, forex, delnice, surovine v eni knjigi <?= e($brand) ?></div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Uvajanje</div>
          <div class="specs-value">Vodeno preverjanje <?= e($brand) ?> za <?= e($audience) ?></div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Podpora</div>
          <div class="specs-value">24/7 <?= e($brand) ?> assistance — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Kontakt</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Zaupanja vreden</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Ocene <?= e($brand) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> ocen · Na podlagi <strong>1,842</strong> ocen <?= e($brand) ?>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Pripravljeni na <?= e($brand) ?>?</h2>
        <p class="lead">Odprite račun <?= e($brand) ?> za <?= e($audience) ?>. Trgovanje prinaša tveganje — uporabite le kapital, ki si ga lahko privoščite izgubiti.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Ustvarite račun ' . $brand;
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

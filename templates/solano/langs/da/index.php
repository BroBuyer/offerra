<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' ᐉ Fuld kontrol over din investering, live';
$page_description = 'Følg i realtid, hvordan din kapital arbejder med ' . SITE_NAME . ': klare rapporter, personlig analytiker og AI. Generer ekstra indkomst fra ' . money_min();
$page_canonical = page_url();
$active_page = "home";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="pnylsh" data-hero="split" aria-labelledby="rrqdpt">
  <div class="nrzt44 qg0sgs">
    <div class="nfb5z">
    <span class="odwy4o">AI + erfarne menneskelige analytikere</span>
    <h1 id="rrqdpt"><?= e(SITE_NAME) ?></h1>
    <p class="roc33zb">En personlig finansanalytiker, understøttet af AI, der hjælper almindelige mennesker med at skabe ekstra indkomst uden tidligere erfaring. Din analytiker guider dig i hvert trin, mens dashboardet viser dig i realtid, hvordan din kapital arbejder.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Reguleret</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Adskilte midler</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>39.600 kunder</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.9</span> vurdering</span></div>
    <div class="do1sdty">
      <a class="rs0voj6 ggca24u" href="#jsyo6">Start — <?= e(money_min()) ?> min.</a>
      <a class="rs0voj6 krccqy8" href="<?= page_url('product.php') ?>">Sådan fungerer det</a>
    </div>
    <ul class="eok92u">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>SSL-beskyttelse</li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Support 24/7</li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Hurtig eksekvering</li>
    </ul>

    </div>


    <div class="up98m" id="jsyo6" data-u="formband">
      <h2>Åbn din konto</h2>
      <p class="amrqy">Kom i gang på få minutter.</p>
      <?php
  $form_id = 'lead-form-hero';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Kom i gang nu';
  $form_class = 'leadform lead-form solano-form';
  $form_variant = 'stack';
  require __DIR__ . '/includes/form.php';
?>
    </div>
    </div>
</section>

<section class="sec-sm" aria-label="Indicadores clave">
 <div class="nrzt44">
<div class="acd048l">
      <div class="kstat"><b>33.000</b><span>Aktive brugere</span></div>
      <div class="kstat"><b>€0,6B</b><span>Handelsvolumen</span></div>
      <div class="kstat"><b>99,8%</b><span>Signaltilgængelighed</span></div>
      <div class="kstat"><b>24/7</b><span>Support</span></div>
    </div>
  
 </div>
</section>

<div class="nrzt44 jx8jnza">
  <details class="tjbln" open aria-label="På denne side">
    <summary class="eik0loi">På denne side</summary>
    <ol>
      <li><a href="#exd9dmd">Live markeder</a></li>
      <li><a href="#sor9s"><?= e(SITE_NAME) ?></a></li>
      <li><a href="#dmobczk">Sådan fungerer det</a></li>
      <li><a href="#gp0nit">På enhver skærm</a></li>
      <li><a href="#esypwbx">Afkast</a></li>
      <li><a href="#evp8w6d">Beskyttelse</a></li>
      <li><a href="#vzo0q">Por qué <?= e(SITE_NAME) ?></a></li>
      <li><a href="#br1y4s">Hvad medlemmer siger</a></li>
      <li><a href="#vatll">Din analytiker</a></li>
      <li><a href="#rb8p3">Dit udgangspunkt</a></li>
      <li><a href="#nw3j7wd">Spørgsmål</a></li>
    </ol>
    <a class="rs0voj6 ggca24u" href="#jsyo6">Start — <?= e(money_min()) ?> min.</a>
  </details>

  <div>
    <section class="xrn58" data-u="sec" id="br1y4s" aria-labelledby="es9pra">
      <div class="wdsnx3j">
        <span class="odwy4o">Hvad medlemmer siger</span>
        <h2 id="es9pra">Hvad investorer siger</h2>
      </div>
      <div class="vdaz1q">
        <figure class="qkl7dd8" itemscope itemtype="https://schema.org/Review">
          <div class="dnjuv">
            <span class="cc91z" aria-label="5/5">★★★★★</span>
            <span class="ue1r1">+2.200 kr. på 4 måneder</span>
          </div>
          <blockquote style="margin:0" itemprop="reviewBody"><p>Min analytiker forklarede hvert trin. Jeg satte mine mål én gang, og nu kan jeg se præcis, hvordan min kapital arbejder, uden at sætte spørgsmålstegn ved hver beslutning.</p></blockquote>
          <figcaption itemprop="author" itemscope itemtype="https://schema.org/Person">
            <b itemprop="name">Mette Hansen</b>København
          </figcaption>
          <meta itemprop="datePublished" content="2026-01-01"/>
          <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
            <meta itemprop="ratingValue" content="5"/><meta itemprop="bestRating" content="5"/>
          </div>
          <span itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization" itemid="<?= e(rtrim(SITE_URL, '/')) ?>/#org" hidden><meta itemprop="name" content="<?= e(SITE_NAME) ?>"/><link itemprop="url" href="<?= e(rtrim(SITE_URL, '/')) ?>/"/></span>
        </figure>
        <figure class="qkl7dd8" itemscope itemtype="https://schema.org/Review">
          <div class="dnjuv">
            <span class="cc91z" aria-label="5/5">★★★★★</span>
            <span class="ue1r1">+2.200 kr. på 4 måneder</span>
          </div>
          <blockquote style="margin:0" itemprop="reviewBody"><p>Jeg havde aldrig investeret før — min analytiker designede strategien og forklarede hvert træk. Ingen tomme løfter, intet pres, og udbetalinger kommer, når jeg forventer det.</p></blockquote>
          <figcaption itemprop="author" itemscope itemtype="https://schema.org/Person">
            <b itemprop="name">Lars Nielsen</b>Aarhus
          </figcaption>
          <meta itemprop="datePublished" content="2026-01-01"/>
          <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
            <meta itemprop="ratingValue" content="5"/><meta itemprop="bestRating" content="5"/>
          </div>
          <span itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization" itemid="<?= e(rtrim(SITE_URL, '/')) ?>/#org" hidden><meta itemprop="name" content="<?= e(SITE_NAME) ?>"/><link itemprop="url" href="<?= e(rtrim(SITE_URL, '/')) ?>/"/></span>
        </figure>
        <figure class="qkl7dd8" itemscope itemtype="https://schema.org/Review">
          <div class="dnjuv">
            <span class="cc91z" aria-label="5/5">★★★★★</span>
            <span class="ue1r1">+2.200 kr. på 4 måneder</span>
          </div>
          <blockquote style="margin:0" itemprop="reviewBody"><p>Jeg startede med lidt for at prøve. Den reelle gennemsigtighed og løbende support gav mig tillid til at vokse derfra.</p></blockquote>
          <figcaption itemprop="author" itemscope itemtype="https://schema.org/Person">
            <b itemprop="name">Anna Jensen</b>Odense
          </figcaption>
          <meta itemprop="datePublished" content="2026-01-01"/>
          <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
            <meta itemprop="ratingValue" content="5"/><meta itemprop="bestRating" content="5"/>
          </div>
          <span itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization" itemid="<?= e(rtrim(SITE_URL, '/')) ?>/#org" hidden><meta itemprop="name" content="<?= e(SITE_NAME) ?>"/><link itemprop="url" href="<?= e(rtrim(SITE_URL, '/')) ?>/"/></span>
        </figure>
        <figure class="qkl7dd8" itemscope itemtype="https://schema.org/Review">
          <div class="dnjuv">
            <span class="cc91z" aria-label="5/5">★★★★★</span>
            <span class="ue1r1">+2.200 kr. på 4 måneder</span>
          </div>
          <blockquote style="margin:0" itemprop="reviewBody"><p>Forslag kommer til mig — jeg godkender eller justerer på få minutter. Det passer til mit arbejdsliv uden at blive en besættelse.</p></blockquote>
          <figcaption itemprop="author" itemscope itemtype="https://schema.org/Person">
            <b itemprop="name">Peter Andersen</b>Aalborg
          </figcaption>
          <meta itemprop="datePublished" content="2026-01-01"/>
          <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
            <meta itemprop="ratingValue" content="5"/><meta itemprop="bestRating" content="5"/>
          </div>
          <span itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization" itemid="<?= e(rtrim(SITE_URL, '/')) ?>/#org" hidden><meta itemprop="name" content="<?= e(SITE_NAME) ?>"/><link itemprop="url" href="<?= e(rtrim(SITE_URL, '/')) ?>/"/></span>
        </figure>
        <figure class="qkl7dd8" itemscope itemtype="https://schema.org/Review">
          <div class="dnjuv">
            <span class="cc91z" aria-label="5/5">★★★★★</span>
            <span class="ue1r1">+2.200 kr. på 4 måneder</span>
          </div>
          <blockquote style="margin:0" itemprop="reviewBody"><p>Det, der overbeviste mig, var den fulde klarhed: hver beslutning er begrundet, og jeg ser ræsonnementet, før noget sker.</p></blockquote>
          <figcaption itemprop="author" itemscope itemtype="https://schema.org/Person">
            <b itemprop="name">Sofie Christensen</b>Esbjerg
          </figcaption>
          <meta itemprop="datePublished" content="2026-01-01"/>
          <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
            <meta itemprop="ratingValue" content="5"/><meta itemprop="bestRating" content="5"/>
          </div>
          <span itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization" itemid="<?= e(rtrim(SITE_URL, '/')) ?>/#org" hidden><meta itemprop="name" content="<?= e(SITE_NAME) ?>"/><link itemprop="url" href="<?= e(rtrim(SITE_URL, '/')) ?>/"/></span>
        </figure>
        <figure class="qkl7dd8" itemscope itemtype="https://schema.org/Review">
          <div class="dnjuv">
            <span class="cc91z" aria-label="5/5">★★★★★</span>
            <span class="ue1r1">+2.200 kr. på 4 måneder</span>
          </div>
          <blockquote style="margin:0" itemprop="reviewBody"><p>Kundeservice er ægte og tilgængelig. Min første analyse var personlig, og platformen har været stabil og forudsigelig siden da.</p></blockquote>
          <figcaption itemprop="author" itemscope itemtype="https://schema.org/Person">
            <b itemprop="name">Thomas Pedersen</b>Roskilde
          </figcaption>
          <meta itemprop="datePublished" content="2026-01-01"/>
          <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
            <meta itemprop="ratingValue" content="5"/><meta itemprop="bestRating" content="5"/>
          </div>
          <span itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization" itemid="<?= e(rtrim(SITE_URL, '/')) ?>/#org" hidden><meta itemprop="name" content="<?= e(SITE_NAME) ?>"/><link itemprop="url" href="<?= e(rtrim(SITE_URL, '/')) ?>/"/></span>
        </figure>
      </div>
    </section>

    <section class="xrn58" data-u="sec" id="vzo0q" aria-labelledby="mzn56z">
      <div class="wdsnx3j">
        <span class="odwy4o">Por qué <?= e(SITE_NAME) ?></span>
        <h2 id="mzn56z">Ingen regneark. Ingen skærme. Ingen sidste-øjebliks tvivl</h2>
        <p class="rmct9">Se hvordan <?= e(SITE_NAME) ?> sammenlignes med traditionelle mæglere og selv at handle.</p>
      </div>
      <div class="smnsm2" role="region" tabindex="0" aria-label="Ingen regneark. Ingen skærme. Ingen sidste-øjebliks tvivl"><table class="by635s">
        <thead><tr><th scope="col">Platform</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Traditionel mægler</th><th scope="col">Handle selv</th></tr></thead>
        <tbody>
          <tr><td>Ordreudførelse med AI</td><td class="bfe2o6f">✓</td><td class="byuav">begrænset åbningstid</td><td class="byuav">manuel</td></tr>
          <tr><td>24/7 overvågning på alle markeder</td><td class="bfe2o6f">✓</td><td class="byuav">papirarbejde</td><td class="byuav">På egen hånd</td></tr>
          <tr><td>Ordre-routing på under et sekund</td><td class="bfe2o6f">✓</td><td class="byuav">kun efter niveau</td><td class="byuav">manuel</td></tr>
          <tr><td>Rapporter i flere valutaer</td><td class="bfe2o6f">✓</td><td class="byuav">begrænset åbningstid</td><td class="byuav">På egen hånd</td></tr>
          <tr><td>Kontooprettelse uden papirarbejde</td><td class="bfe2o6f">✓</td><td class="byuav">papirarbejde</td><td class="byuav">manuel</td></tr>
          <tr><td>Arbitrage mellem børser</td><td class="bfe2o6f">✓</td><td class="byuav">kun efter niveau</td><td class="byuav">På egen hånd</td></tr>
          <tr><td>Tildelt personlig manager</td><td class="bfe2o6f">✓</td><td class="byuav">begrænset åbningstid</td><td class="byuav">manuel</td></tr>
        </tbody>
      </table></div>
      <p style="margin-top:22px"><a class="rs0voj6 krccqy8" href="<?= page_url('offer.php') ?>">Hvorfor os</a></p>
    </section>

    <section class="xrn58" data-u="sec" id="evp8w6d" aria-labelledby="ykur4hl">
      <div class="tsgf5eq">
        <div>
          <div class="wdsnx3j">
            <span class="odwy4o">Beskyttelse</span>
            <h2 id="ykur4hl">Dine penge, beskyttet by design</h2>
            <p class="rmct9">Kundemidler deponeres hos regulerede betalingspartnere, adgang er verificeret, og hver udbetaling følger en dokumenteret rute tilbage til oprindelig konto.</p>
          </div>
          <ul class="ibiqy0k">
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Realtids candlestick-grafer og markedsdybde på enhver enhed</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ordrer med ét tryk og øjeblikkelig bekræftelse</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Watchlists og prisalarmer, der følger dig overalt</span></li>
          </ul>
        </div>
        <img src="<?= asset('static/img/platform.webp') ?>" srcset="<?= asset('static/img/platform-640.webp') ?> 640w, <?= asset('static/img/platform.webp') ?> 800w" sizes="(max-width: 768px) 92vw, 680px" alt="Porteføljeoverblik i platformen" width="760" height="520" decoding="async" title="Porteføljeoverblik i platformen" loading="lazy">
      </div>
    </section>

    <section class="xrn58" data-u="sec" id="vatll" aria-labelledby="iouvw">
      <div class="tsgf5eq mudjf">
        <img src="<?= asset('static/img/platform.webp') ?>" srcset="<?= asset('static/img/platform-640.webp') ?> 640w, <?= asset('static/img/platform.webp') ?> 800w" sizes="(max-width: 768px) 92vw, 680px" alt="Din personlige analytiker ved arbejdspladsen" width="760" height="520" decoding="async" title="Din personlige analytiker ved arbejdspladsen" loading="lazy">
        <div>
          <div class="wdsnx3j">
            <span class="odwy4o">Din analytiker</span>
            <h2 id="iouvw">Din personlige finansanalytiker</h2>
            <p class="rmct9">Hvert medlem matches med en personlig finansanalytiker med mange års markeds erfaring. Med egen ekspertise, afprøvede analysemetoder og moderne AI-værktøjer hjælper de dig med at spotte lovende muligheder og følger dig i hvert trin.</p>
          </div>
          <ul class="ibiqy0k">
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Års praktisk markeds erfaring</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Strategi designet efter dine mål, risiko og kapital</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Tæt vejledning i hvert trin</span></li>
          </ul>
        </div>
      </div>
    </section>

    <section class="xrn58" id="esypwbx" aria-labelledby="rq8es">
      <div class="wdsnx3j">
        <span class="odwy4o">Afkast</span>
        <h2 id="rq8es">Et eksempel med din indbetaling</h2>
        <p class="rmct9">Flyt skyderen for at simulere en større indbetaling: beløbene beregnes ud fra en repræsentativ plan med minimumsindbetalingen på <?= e(money_min()) ?>. Dette er et eksempel, ikke et løfte; dit reelle afkast afhænger af, hvor meget du investerer, og hvilken strategi du vælger sammen med din analytiker.</p>
      </div>
      <div class="wmuyc">
        <div>
          <?php
            $calc_min = max(1, (int) MIN_DEPOSIT);
            $calc_max = 10000;
            $calc_default = min($calc_max, max($calc_min, 1000));
          ?>
          <div class="vcf9ca"><label for="calc-dep">Startbeløb</label><span class="cj9i15q" id="csezcv1"><?= e(currency_symbol() . number_format($calc_default, 0, ',', '.')) ?></span></div>
          <input id="lsm9on" type="range" min="<?= (int) $calc_min ?>" max="<?= (int) $calc_max ?>" step="50" value="<?= (int) $calc_default ?>" aria-label="Startbeløb"/>
          <div class="vcf9ca"><label for="calc-mon">Måneder</label><span class="cj9i15q" id="ywprvgd">6</span></div>
          <input id="gqz8w" type="range" min="1" max="24" step="1" value="6" aria-label="Måneder"/>
          <p class="ifuciwq">Beløbene er vejledende. Dit reelle afkast afhænger af beløbet du investerer og strategien du vælger sammen med din analytiker.</p>
        </div>
        <div class="gbastl">
          <small>Forventet saldo</small>
          <b id="aowtjsf">€1.000</b>
          <a class="rs0voj6 ggca24u" href="#jsyo6" style="margin-top:14px;width:100%">Åbn en konto</a>
        </div>
      </div>
    </section>

    <section class="xrn58" id="rb8p3" aria-labelledby="dv0846">
      <div class="wdsnx3j">
        <span class="odwy4o">Dit udgangspunkt</span>
        <h2 id="dv0846">Tre spørgsmål og et foreslået startplan</h2>
        <p class="rmct9">Ingen score eller karakter: svarene fortæller kun din specialist, hvor I skal starte, så det første opkald ikke bruges på det grundlæggende.</p>
      </div>
      <form class="yw6xmlm" id="sqw38g" novalidate>
        <div class="jpmo5sl" hidden aria-hidden="true"><i></i></div>
        <p class="sdahnb" hidden aria-live="polite" role="status"
           data-l="Spørgsmål"
           data-of="af"></p>
        <fieldset class="hpwy9" data-u="quizq" tabindex="-1">
          <legend>01. Hvor meget erfaring har du med at investere?</legend>
          <div class="bjatk">
            <label><input type="radio" name="q1" value="1"/><span>Ingen</span></label>
            <label><input type="radio" name="q1" value="2"/><span>Lidt, på egen hånd</span></label>
            <label><input type="radio" name="q1" value="3"/><span>Jeg investerer regelmæssigt</span></label>
          </div>
        </fieldset>
        <fieldset class="hpwy9" data-u="quizq" tabindex="-1">
          <legend>02. Hvad er vigtigst for dig lige nu?</legend>
          <div class="bjatk">
            <label><input type="radio" name="q2" value="1"/><span>Holde risikoen lav</span></label>
            <label><input type="radio" name="q2" value="2"/><span>Stabil vækst</span></label>
            <label><input type="radio" name="q2" value="3"/><span>Forstå hvordan det fungerer</span></label>
          </div>
        </fieldset>
        <fieldset class="hpwy9" data-u="quizq" tabindex="-1">
          <legend>03. Hvor meget tid kan du afsætte?</legend>
          <div class="bjatk">
            <label><input type="radio" name="q3" value="1"/><span>Næsten intet</span></label>
            <label><input type="radio" name="q3" value="2"/><span>Et par minutter om dagen</span></label>
            <label><input type="radio" name="q3" value="3"/><span>Jeg følger gerne markederne</span></label>
          </div>
        </fieldset>
        <div class="beqazp3">
          <button class="rs0voj6 krccqy8 sihas5z" type="button" hidden>Tilbage</button>
          <p class="ubn7i4v" id="bpisnbk" hidden>Dine svar er klar: efterlad dine oplysninger, og en specialist gennemgår dem med dig.</p>
          <a class="rs0voj6 ggca24u pk4h2" href="#jsyo6">Se mit startplan</a>
        </div>
      </form>
    </section>

    <section class="xrn58" data-u="sec" id="dmobczk" aria-labelledby="dl5sp">
      <div class="wdsnx3j">
        <span class="odwy4o">Sådan fungerer det</span>
        <h2 id="dl5sp">Sådan fungerer det</h2>
        <p class="rmct9">Moderne AI og en ægte menneskelig analytiker, der arbejder sammen for at hjælpe dig med at opbygge ekstra indkomst, guide dig i hvert trin og vise hver bevægelse af din kapital.</p>
      </div>
      <ol class="zzk9i">
        <li><span class="vpx6kk">01</span><div><h3>Opret din konto</h3><p>Tilmeld dig på få minutter med kun din e-mail.</p></div></li>
        <li><span class="vpx6kk">02</span><div><h3>Verificer din e-mail</h3><p>Bekræft din adresse for at beskytte din konto.</p></div></li>
        <li><span class="vpx6kk">03</span><div><h3>Indsæt midler</h3><p>Tilføj kapital fra <?= e(money_min()) ?>, med den metode du foretrækker.</p></div></li>
        <li><span class="vpx6kk">04</span><div><h3>Definér din strategi</h3><p>Vælg dine mål; din analytiker tilpasser planen til dig.</p></div></li>
        <li><span class="vpx6kk">05</span><div><h3>Begynd at investere</h3><p>Følg de guidede signaler og følg din fremgang i realtid.</p></div></li>
      </ol>
      <p style="margin-top:22px"><a class="rs0voj6 krccqy8" href="<?= page_url('product.php') ?>">Læs den fulde guide</a></p>
    </section>

    <section class="xrn58" data-u="sec" id="exd9dmd" aria-labelledby="rlolt2l">
      <div class="wdsnx3j">
        <span class="odwy4o">Live markeder</span>
        <h2 id="rlolt2l">Handl med Bitcoin, Ethereum og meget mere</h2>
        <p class="rmct9">Realtidspriser, avancerede indikatorer og et professionelt overblik over de markeder, der interesserer dig.</p>
      </div>
      <div class="smnsm2" role="region" tabindex="0" aria-label="Handl med Bitcoin, Ethereum og meget mere"><table class="nd3owbf">
        <caption>Priser opdateres automatisk, mens siden er åben.</caption>
        <thead><tr><th scope="col">Aktiv</th><th scope="col">Pris</th><th scope="col">24h</th></tr></thead>
        <tbody>
          <tr data-sym="BTC"><td><span class="jtcrzrj">Bitcoin<small>BTC/USDT</small></span></td><td class="qsd2h">€64.671</td><td class="dprrq gv5fw2">-1,06%</td></tr>
          <tr data-sym="ETH"><td><span class="jtcrzrj">Ethereum<small>ETH/USDT</small></span></td><td class="qsd2h">€1.881</td><td class="dprrq gv5fw2">-2,55%</td></tr>
          <tr data-sym="SOL"><td><span class="jtcrzrj">Solana<small>SOL/USDT</small></span></td><td class="qsd2h">€76,62</td><td class="dprrq gv5fw2">-1,72%</td></tr>
          <tr data-sym="XRP"><td><span class="jtcrzrj">XRP<small>XRP/USDT</small></span></td><td class="qsd2h">€1,11</td><td class="dprrq gv5fw2">-0,97%</td></tr>
        </tbody>
      </table></div>
    </section>

    <section class="xrn58" data-u="sec" id="gp0nit" aria-labelledby="jg778dx">
      <div class="tsgf5eq">
        <div>
          <div class="wdsnx3j">
            <span class="odwy4o">På enhver skærm</span>
            <h2 id="jg778dx">Samme konto på din computer og i lommen</h2>
            <p class="rmct9">Én login, én saldo. Åbn den i computerens browser eller på mobilen: intet at installere og intet der kun virker på én enhed.</p>
          </div>
          <ul class="ibiqy0k">
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Desktop — fuldt dashboard, grafer og rapporter</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Mobil — saldi, positioner og udbetalinger, uanset hvor du er</span></li>
          </ul>
        </div>
        <figure class="nb2zw0m">
          <img src="<?= asset('static/img/phone.webp') ?>" alt="Samme porteføljevisning på en mobilskærm" title="Samme porteføljevisning på en mobilskærm" width="896" height="1200" decoding="async" loading="lazy">
        </figure>
      </div>
    </section>

    <section class="xrn58" data-u="sec" id="sor9s" aria-labelledby="onidtj">
      <div class="wdsnx3j">
        <span class="odwy4o"><?= e(SITE_NAME) ?></span>
        <h2 id="onidtj">Se din konto i realtid</h2>
        <p class="rmct9">Hver handel din analytiker placerer, registreres her: indgange, udgange og verificerede resultater pr. par, live.</p>
      </div>
      <ol class="zzk9i">
        <li><span class="vpx6kk">01</span><div><h3>Eksekvering på under et sekund på hvert tilsluttet marked</h3><p><?= e(SITE_NAME) ?> opretholder permanente lav-latens API-forbindelser til hver understøttet børs. Når modellen genererer et signal, sendes ordren, udføres og registreres i dit dashboard før næste tick.</p></div></li>
        <li><span class="vpx6kk">02</span><div><h3>Fungerer 24/7 i hver markedssession</h3><p>Kryptovaluta hviler aldrig, og <?= e(SITE_NAME) ?> heller ikke. Motoren fortsætter med at analysere par i weekender og på helligdage, så du aldrig misser en mulighed.</p></div></li>
        <li><span class="vpx6kk">03</span><div><h3>Rapporter i flere valutaer</h3><p>Hver saldo, hver handel og hver udbetaling vises i din lokale valuta. Ingen skjulte konverteringstrin på noget tidspunkt.</p></div></li>
        <li><span class="vpx6kk">04</span><div><h3>Adskilt kapital</h3><p>Dine midler forbliver på din egen konto. <?= e(SITE_NAME) ?> opbevarer dem aldrig: motoren har kun tilladelse til at sende ordrer.</p></div></li>
        <li><span class="vpx6kk">05</span><div><h3>Sikkerhed på bankniveau</h3><p>TLS-kryptering på hele platformen, totrinsbekræftelse som standard og kvartalsvise infrastruktur-revisioner af tredjeparter. Handelskvitteringer registreret på blockchain.</p></div></li>
        <li><span class="vpx6kk">06</span><div><h3>Tre aktivklasser, én platform</h3><p>De fleste retail-platforme begrænser dig til ét marked. <?= e(SITE_NAME) ?> handler kryptovaluta, børsnoterede aktier og de vigtigste valutapar fra samme dashboard.</p></div></li>
        <li><span class="vpx6kk">07</span><div><h3>Foruddefinerede risikogrænser for hver position</h3><p>Stop-loss, maksimalt tilladt tab og kapitalallokeringslofter konfigureres pr. aktivklasse. Motoren lukker automatisk enhver handel, der overskrider en grænse, og hændelsen registreres i din auditlog.</p></div></li>
      </ol>
    </section>

    <section class="xrn58" id="nw3j7wd" aria-labelledby="wysa9hx">
      <div class="wdsnx3j">
        <span class="odwy4o">Spørgsmål</span>
        <h2 id="wysa9hx">Ofte stillede spørgsmål</h2>
      </div>
      <div class="hnxh4ir" itemscope itemtype="https://schema.org/FAQPage">
        <details open itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Hvad er minimumsindbetalingen for at komme i gang?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Du kan åbne og finansiere din konto med <?= e(money_min()) ?> minimum. Du er fri til at tilføje flere midler, efterhånden som din investeringsplan skrider frem.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Hvordan fungerer udbetalinger?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Anmod om udbetaling når som helst fra dit dashboard. Midler returneres til din valgte betalingsmetode med de sædvanlige behandlingstider.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Er mine penge sikkert beskyttet?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Konti er beskyttet med professionelle sikkerheds- og identifikationsstandarder. Som ved enhver investering er din kapital udsat for risiko, og værdier kan stige eller falde.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Hvor lang tid tager det at begynde at investere?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">De fleste medlemmer fuldfører registreringen på få minutter. Når din første indbetaling er behandlet, kan du aktivere en plan med det samme.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Er der skjulte gebyrer?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Alle omkostninger vises gennemsigtigt, før du forpligter dig. Du ser altid, hvad der gælder for din plan, uden overraskelser.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Hvad er minimumsalderen for at registrere sig?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Du skal være mindst 18 år for at åbne en konto og investere. Verificering kan blive anmodet for at bekræfte din alder og identitet.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Hvilke betalingsmetoder accepteres?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Almindelige metoder som debet- og kreditkort, bankoverførsler, udvalgte e-wallets og kryptovaluta accepteres. De præcise muligheder vises ved indbetalingstrinnet.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Hvornår er kundeservice tilgængelig?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Vores supportteam er tilgængeligt mandag til fredag, 9:00–18:00, og svarer på hver henvendelse inden for én hverdag.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Hvordan håndteres skat på gevinster?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Skat på investeringsgevinster afhænger af reglerne i dit land og er dit ansvar. Vi anbefaler at føre egne optegnelser og konsultere en kvalificeret skatterådgiver.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Hvad er KYC-verificering, og hvorfor er den obligatorisk?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">KYC (Know Your Customer) er en standard identitetskontrol. Den hjælper med at holde konti sikre og er en rutine del af at åbne en investeringskonto.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Har jeg brug for tidligere investeringserfaring?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Nej. Hvert medlem har en personlig finansanalytiker, der guider dig i hvert trin, så du ikke behøver forudgående markedsviden.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Hvem administrerer mine investeringer?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">En dedikeret finansanalytiker, understøttet af AI-værktøjer, der arbejder efter dine mål og risikoniveau. Analytikeren kombinerer professionel erfaring med teknologi — beslutningerne forbliver menneskelige.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Overholder platformen reglerne?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Ja — den overholder nationale finansielle og cybersikkerhedsstandarder med integreret kontobeskyttelse og verificering. Vi er reguleret af Finanstilsynet.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Kan jeg tilføje flere midler til min konto senere?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Ja. Du kan genopfylde din konto når som helst og justere din plan med din analytiker, efterhånden som dine mål udvikler sig.</p>
          </div>
        </details>
      </div>
      <p style="margin-top:22px"><a class="rs0voj6 krccqy8" href="<?= page_url('faq.php') ?>">Ver todas las preguntas</a></p>
    </section>
  </div>
</div>

<!--reviews-block--><section aria-label="Kundeanmeldelser" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">TROVÆRDIG</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Anmeldelser</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.9</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:98.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">817</b> anmeldelser · Baseret på <b style="color:var(--text,#fff)">4.902</b> vurderinger</div></div></section><section class="bjiwuc" id="signup" aria-labelledby="fglj2pf">
  <div class="nrzt44 kdbtf1i">
    <div>
      <span class="odwy4o">Kom i gang nu</span>
      <h2 id="fglj2pf">Klar til at se din kapital i bevægelse?</h2>
      <p class="rmct9">Åbn din konto på få minutter, indbetal fra et beskedent minimum og følg din fremgang gennemsigtigt fra dag ét.</p>
      <ul class="ibiqy0k" style="margin-top:16px">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>En e-mail du faktisk tjekker.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Et telefonnummer, så en specialist kan kontakte dig.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Et identitetsdokument til senere verificering.</span></li>
      </ul>
    </div>
    <div class="bv1ft5">
      <h3>Opret din profil</h3>
      <p class="amrqy">Kom i gang på få minutter.</p>
      <?php
  $form_id = 'lead-form-cta';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Kom i gang nu';
  $form_class = 'leadform lead-form solano-form solano-stack';
  $form_variant = 'stack';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

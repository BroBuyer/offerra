<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Uvjeti korištenja');
$page_description = 'Pravila koja vrijede kada pristupate ili koristite ' . SITE_NAME . '.';
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
    <nav class="nav-links" aria-label="Glavna">
      <a href="<?= page_url() ?>#platform">Platforma</a>
      <a href="<?= page_url() ?>#how">Kako funkcionira</a>
      <a href="<?= page_url() ?>#markets">Tržišta</a>
      <a href="<?= page_url() ?>#faq">Često postavljana pitanja</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Započni</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal</span>
      <h1>Uvjeti korištenja</h1>
      <p class="lede">Pravila koja vrijede kada pristupate ili koristite <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Zadnja aktualizacija: siječanj 2025</p>

      <h2>1. Prihvaćanje Uvjeta</h2>
      <p>Pristupanjem ili korištenjem web-stranice i usluga <?= e(SITE_NAME) ?> pristajete biti vezani ovim Uvjetima korištenja. Ako se ne slažete, ne koristite usluge.</p>

      <h2>2. Prihvatljivost</h2>
      <p>Morate imati najmanje 18 godina (ili dob punoljetnosti u svojoj jurisdikciji) i pravnu sposobnost sklapanja obvezujućeg ugovora. Usluge se ne nude stanovnicima ograničenih jurisdikcija gdje bi takva ponuda bila nezakonita.</p>

      <h2>3. Registracija računa</h2>
      <p>Pristajete pružiti točne, aktualne i potpune informacije tijekom registracije i održavati ih ažurnima. Odgovorni ste za povjerljivost vjerodajnica i za svu aktivnost na računu.</p>

      <h2>4. Usluge</h2>
      <p><?= e(SITE_NAME) ?> pruža tehnološke alate i edukativne informacije povezane s online ulaganjem. Nismo vaš financijski savjetnik. Ništa na ovoj stranici ne predstavlja personalizirani investicijski savjet, porezni savjet ili poziv na kupnju ili prodaju financijskog instrumenta.</p>

      <h2>5. Naknade</h2>
      <p>Primjenjive naknade, spreadovi i provizije objavljuju se na platformi ili u primjenjivom cjeniku. Odgovorni ste za poreze koji proizlaze iz vaših aktivnosti.</p>

      <h2>6. Zabranjeno ponašanje</h2>
      <ul>
        <li>Korištenje usluga za pranje novca, financiranje terorizma, manipulaciju tržištem ili bilo koju nezakonitu svrhu.</li>
        <li>Lažno predstavljanje kao druga osoba ili pružanje lažnih podataka o identitetu.</li>
        <li>Pokušaji ometanja, kompromitiranja ili reverse engineeringa bilo kojeg dijela platforme.</li>
        <li>Korištenje automatiziranih alata za pristup uslugama drugačije nego što je izričito dopušteno.</li>
      </ul>

      <h2>7. Intelektualno vlasništvo</h2>
      <p>Sav sadržaj, žigovi, softver i materijali na stranici vlasništvo su <?= e(SITE_NAME) ?> ili njezinih davatelja licence i zaštićeni su primjenjivim zakonima o intelektualnom vlasništvu. Dodjeljuje vam se ograničena, neisključiva, opoziva licenca za korištenje usluga u njihovoj predviđenoj svrsi.</p>

      <h2>8. Usluge trećih strana</h2>
      <p>Platforma može sadržavati poveznice na usluge trećih strana ili ih integrirati. Nismo odgovorni za takve usluge, njihovu dostupnost, točnost ili sadržaj.</p>

      <h2>9. Odricanja</h2>
      <p>Usluge se pružaju „kakve jesu” i „prema dostupnosti” bez jamstava bilo koje vrste. Trgovanje uključuje značajan rizik gubitka. Pogledajte našu <a href="<?= page_url('conditions.php') ?>">Objava rizika</a> za detalje.</p>

      <h2>10. Ograničenje odgovornosti</h2>
      <p>U najvećoj mjeri dopuštenoj zakonom <?= e(SITE_NAME) ?> neće biti odgovoran za neizravne, slučajne, posebne, posljedične ili kaznene štete niti za gubitak dobiti ili prihoda koji proizlazi iz korištenja usluga.</p>

      <h2>11. Naknada štete</h2>
      <p>Pristajete naknaditi štetu i osloboditi <?= e(SITE_NAME) ?>, njezine povezane subjekte i osoblje od bilo kojeg zahtjeva koji proizlazi iz kršenja ovih Uvjeta ili zlouporabe usluga.</p>

      <h2>12. Suspendiranje i raskid</h2>
      <p>Možemo suspendirati ili prekinuti pristup uslugama bilo kada, s obavijesti ili bez nje, ako smatramo da ste prekršili ove Uvjete ili primjenjivo pravo.</p>

      <h2>13. Mjerodavno pravo</h2>
      <p>Ovi Uvjeti uređeni su zakonima koji vrijede u sjedištu <?= e(SITE_NAME) ?>, bez obzira na načela sukoba zakona.</p>

      <h2>14. Izmjene</h2>
      <p>Ove Uvjete možemo s vremena na vrijeme mijenjati. Nastavak korištenja usluga nakon izmjena predstavlja prihvaćanje revidiranih Uvjeta.</p>

      <h2>15. Kontakt</h2>
      <p>Pitanja o ovim Uvjetima mogu se poslati putem naše <a href="<?= page_url('contacts.php') ?>">stranice za kontakt</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Natrag na početnu</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Sva prava pridržana ·
      <a href="<?= page_url('privacy.php') ?>">Privatnost</a> ·
      <a href="<?= page_url('conditions.php') ?>">Uvjeti</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>

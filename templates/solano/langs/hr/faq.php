<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Često postavljana pitanja ' . SITE_NAME;
$page_description = 'Pitanja, odgovorena — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pitanja</span>
    <h1>Pitanja, odgovorena jasno</h1>
    <p class="kpnq92g">Ono što ljudi pitaju prije otvaranja računa i odgovori koje bismo vam dali telefonom.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Pitanja o novcu</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Je li <?= e(SITE_NAME) ?> prijevara?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ne: <?= e(SITE_NAME) ?> radi s provjerama, u cijelosti objavljuje uvjete i upozorenje o riziku, a isplate uvijek se vraćaju na izvorni način plaćanja. Ipak, svako ulaganje uključuje stvarni rizik i nijedna ozbiljna platforma ne obećava zajamčeni prinos; ne vjerujte onima koji to čine.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Koliko košta otvaranje računa?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Otvaranje računa je besplatno. Nema naknade za registraciju ni pretplate; uplatite samo iznos koji odlučite uložiti.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Koliko traju isplate?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Zahtjevi se obrađuju radnim danima i vraćaju se na način kojim ste uplatili. Bankovni prijenosi traju duže od kartica ili e-novčanika.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Postoji li minimalni iznos?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Da, i namjerno je nizak, od <?= e(money_min()) ?>, kako biste mogli polako početi i kasnije povećati. Točan iznos prikazuje se prije nego što išta potvrdite.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Često postavljana pitanja</h2>
    <div class="fjl4d">
      <details open><summary>Koliki je minimalni depozit za početak?</summary><p>Račun možete otvoriti i financirati s <?= e(money_min()) ?> minimum. Slobodno možete dodati više sredstava kako vaš investicijski plan napreduje.</p></details>
      <details><summary>Kako funkcioniraju isplate sredstava?</summary><p>Isplatu možete zatražiti u bilo kojem trenutku s nadzorne ploče. Sredstva se vraćaju na odabrani način plaćanja, uz uobičajena vremena obrade.</p></details>
      <details><summary>Je li moj novac sigurno zaštićen?</summary><p>Računi su zaštićeni profesionalnim sigurnosnim i identifikacijskim standardima. Kao i kod svakog ulaganja, vaš je kapital izložen riziku, a vrijednosti mogu rasti ili padati.</p></details>
      <details><summary>Koliko traje početak ulaganja?</summary><p>Većina članova dovrši registraciju u nekoliko minuta. Nakon što se obradi prvi depozit, plan možete aktivirati odmah.</p></details>
      <details><summary>Postoje li skrivene naknade?</summary><p>Svi troškovi prikazuju se transparentno prije nego što se obvežete. Uvijek ćete vidjeti što se primjenjuje na vaš plan, bez iznenađenja.</p></details>
      <details><summary>Kolika je minimalna dob za registraciju?</summary><p>Morate imati najmanje 18 godina da biste otvorili račun i ulagali. Može se zatražiti provjera kako bi se potvrdila vaša dob i identitet.</p></details>
      <details><summary>Koji se načini plaćanja prihvaćaju?</summary><p>Prihvaćaju se uobičajeni načini poput debitnih i kreditnih kartica, bankovnih prijenosa, odabranih e-novčanika i kriptovaluta. Točne opcije prikazuju se u koraku depozita.</p></details>
      <details><summary>Kada je dostupna korisnička podrška?</summary><p>Naš tim podrške dostupan je od ponedjeljka do petka, 9:00–18:00, i obvezuje se odgovoriti na svaki upit u roku od jednog radnog dana.</p></details>
      <details><summary>Kako se upravlja porezima na dobit?</summary><p>Porezi na investicijsku dobit ovise o propisima vaše zemlje i vaša su odgovornost. Preporučujemo vođenje vlastitih evidencija i savjetovanje s kvalificiranim poreznim savjetnikom.</p></details>
      <details><summary>Što je KYC provjera i zašto je obavezna?</summary><p>KYC (Know Your Customer) standardna je provjera vašeg identiteta. Pomaže održati račune sigurnima i rutinski je dio otvaranja investicijskog računa.</p></details>
      <details><summary>Trebam li prethodno iskustvo s ulaganjima?</summary><p>Ne. Svaki član ima osobnog financijskog analitičara koji vas vodi u svakom koraku, pa vam nije potrebno prethodno znanje o tržištima.</p></details>
      <details><summary>Tko upravlja mojim ulaganjima?</summary><p>Posvećeni financijski analitičar, potpomognut AI alatima, radi prema vašim ciljevima i razini rizika. Analitičar spaja profesionalno iskustvo s tehnologijom — odluke ostaju ljudske.</p></details>
      <details><summary>Je li platforma usklađena s propisima?</summary><p>Da — usklađena je s nacionalnim financijskim i kibernetičkim standardima, s integriranom zaštitom računa i provjerom. Regulirani smo od strane HANFA-e.</p></details>
      <details><summary>Mogu li kasnije dodati više sredstava na račun?</summary><p>Da. Račun možete dopuniti u bilo kojem trenutku i prilagoditi plan sa svojim analitičarem kako se vaši ciljevi razvijaju.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Račun i sigurnost</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Kako funkcionira prijava u <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Pristupate registriranom e-poštom i lozinkom putem weba ili mobilnog preglednika. Ako ste aktivirali dvofaktorsku provjeru, tražit će se dodatni kod; ako zaboravite lozinku, možete je resetirati na samom ekranu za prijavu.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Zašto su vam potrebni moji identifikacijski dokumenti?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Provjera je obavezna prije nego što račun može premještati sredstva. Također sprječava da netko drugi otvori račun u vaše ime.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Trebam li prethodno iskustvo?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ne. Većina članova počinje bez ikakvog iskustva. Stručnjak vas prati u prvim koracima, a demo saldo omogućuje vježbu.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Mogu li koristiti na mobitelu?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Da, platforma radi u mobilnom pregledniku bez potrebe za instalacijom.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Započnite — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Pošalji poruku</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

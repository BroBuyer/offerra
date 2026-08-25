<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Întrebări frecvente ' . SITE_NAME;
$page_description = 'Întrebări, cu răspunsuri — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Întrebări</span>
    <h1>Întrebări, cu răspunsuri clare</h1>
    <p class="kpnq92g">Ce întreabă oamenii înainte să deschidă un cont — și răspunsurile pe care vi le-am da și la telefon.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Întrebări despre bani</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Este <?= e(SITE_NAME) ?> o înșelătorie?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nu: <?= e(SITE_NAME) ?> funcționează cu verificări, publică termenii și informarea privind riscurile integral, iar retragerile revin întotdeauna la metoda de plată originală. Totuși, fiecare investiție implică un risc real, iar nicio platformă serioasă nu promite randamente garantate — fiți precaut față de oricine o face.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Cât costă deschiderea unui cont?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Deschiderea unui cont este gratuită. Fără taxă de înregistrare și fără abonament; depuneți doar suma pe care alegeți să o investiți.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Cât durează retragerile?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Solicitările sunt procesate în zilele lucrătoare și returnate prin metoda cu care ați depus. Transferurile bancare durează mai mult decât cardurile sau e-portofelele.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Există o sumă minimă?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Da, și este intenționat scăzută, de la <?= e(money_min()) ?>, ca să puteți începe cu puțin și să adăugați mai târziu. Cifra exactă este afișată înainte să confirmați ceva.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Întrebări frecvente</h2>
    <div class="fjl4d">
      <details open><summary>Care este depunerea minimă pentru a începe?</summary><p>Puteți deschide și alimenta contul de la <?= e(money_min()) ?> minim. Puteți adăuga fonduri suplimentare pe măsură ce planul de investiții avansează.</p></details>
      <details><summary>Cum funcționează retragerile?</summary><p>Solicitați o retragere oricând din panou. Fondurile revin la metoda de plată aleasă, în termenele obișnuite de procesare.</p></details>
      <details><summary>Banii mei sunt păstrați în siguranță?</summary><p>Conturile sunt protejate cu securitate de nivel profesional și verificări de identitate. Ca la orice investiție, capitalul este în risc, iar valorile pot scădea sau crește.</p></details>
      <details><summary>Cât durează până începeți să investiți?</summary><p>Majoritatea membrilor finalizează înregistrarea în câteva minute. După procesarea primei depuneri, puteți activa un plan imediat.</p></details>
      <details><summary>Există comisioane ascunse?</summary><p>Toate costurile sunt afișate transparent înainte să vă angajați. Veți vedea întotdeauna ce se aplică planului dumneavoastră, fără surprize.</p></details>
      <details><summary>Care este vârsta minimă pentru înregistrare?</summary><p>Trebuie să aveți cel puțin 18 ani pentru a deschide un cont și a investi. Poate fi solicitată o verificare pentru confirmarea vârstei și a identității.</p></details>
      <details><summary>Ce metode de plată sunt acceptate?</summary><p>Sunt acceptate metode obișnuite, precum carduri de debit și de credit, transferuri bancare, e-portofele selectate și criptomonede. Opțiunile exacte apar la pasul de depunere.</p></details>
      <details><summary>Când este disponibil suportul clienți?</summary><p>Echipa de suport este disponibilă de luni până vineri, 9:00–18:00, și se angajează să răspundă fiecărei solicitări în termen de o zi lucrătoare.</p></details>
      <details><summary>Cum sunt tratate impozitele pe câștiguri?</summary><p>Impozitele pe câștigurile din investiții depind de regulile din țara dumneavoastră și sunt responsabilitatea dumneavoastră. Vă recomandăm să țineți evidențe proprii și să vorbiți cu un consultant fiscal calificat.</p></details>
      <details><summary>Ce este verificarea KYC și de ce este necesară?</summary><p>KYC (Know Your Customer) este o verificare standard a identității. Ajută la protejarea conturilor și face parte din rutina deschiderii unui cont de investiții.</p></details>
      <details><summary>Am nevoie de experiență anterioară în investiții?</summary><p>Nu. Fiecare membru are un analist financiar personal care vă ghidează la fiecare pas, deci nu este nevoie de cunoștințe anterioare despre piețe.</p></details>
      <details><summary>Cine îmi gestionează investițiile?</summary><p>Un analist financiar dedicat, susținut de instrumente AI, care lucrează în jurul obiectivelor și al nivelului de risc. Analistul combină expertiza profesională cu tehnologia — deciziile rămân umane.</p></details>
      <details><summary>Platforma respectă standardele de reglementare?</summary><p>Da — respectă standardele naționale financiare și de securitate cibernetică, cu protecția contului și verificarea integrate.</p></details>
      <details><summary>Pot adăuga ulterior mai multe fonduri în cont?</summary><p>Da. Puteți alimenta contul oricând și puteți ajusta planul împreună cu analistul, pe măsură ce obiectivele evoluează.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Cont și securitate</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Cum funcționează autentificarea pe <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Vă autentificați cu e-mailul și parola înregistrate, de pe site sau din browserul mobil. Dacă ați activat verificarea în doi pași, vi se va cere un cod suplimentar; dacă uitați parola, o puteți reseta chiar de pe ecranul de autentificare.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">De ce aveți nevoie de actele mele de identitate?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Verificarea este necesară înainte ca un cont să poată mișca fonduri. Previne și deschiderea unui cont pe numele dumneavoastră de către altcineva.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Am nevoie de experiență anterioară?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nu. Majoritatea membrilor încep fără experiență. Un specialist vă trece prin primii pași, iar un sold demo vă permite să exersați.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Pot să o folosesc pe telefon?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Da, platforma funcționează într-un browser mobil, fără nimic de instalat.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Începeți — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Trimiteți un mesaj</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

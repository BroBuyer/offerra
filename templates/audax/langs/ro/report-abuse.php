<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Raportează un abuz | ' . SITE_NAME;
$page_description = 'Raportează un abuz sau o activitate suspectă pe ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Raportează un abuz</h1>
            <p class="bold-title">1. Raportarea abuzului</p>
            <p>
              1.1. Dacă întâlnești conținut nepotrivit pe site, raportează-l
              nouă prin formularul de contact.
            </p>
            <p>Contact: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. În această secțiune poți oferi informații despre un abuz sau conținut
              care încalcă regulile noastre.
            </p>
            <p>
              1.3. Raportul tău este important. Oferă detalii concrete ca să putem
              investiga adecvat cazul.
            </p>
            <p>Trimițând un raport accepți și politica noastră de confidențialitate.</p>
            <p class="bold-title">2. Cine poate raporta</p>
            <p>
              2.1. Dacă ai fost victimă a unui abuz sau ai observat un comportament nepotrivit, ai
              dreptul să îl raportezi.
            </p>
            <p>2.1.1. Raportul poate fi depus doar de persoane de cel puțin 18 ani.</p>
            <p>2.1.2. Raportul trebuie să fie adevărat și bazat pe fapte.</p>
            <p>2.1.3. Folosirea formularului trebuie să fie legală în țara ta.</p>
            <p>2.2. Nu suntem responsabili pentru rapoarte false sau rău-intenționate.</p>
            <p class="bold-title">3. Procedura de raportare</p>
            <p>3.1. Ne rezervăm dreptul de a investiga toate rapoartele de abuz.</p>
            <p>3.2. Dacă raportul este considerat întemeiat, vom lua măsurile necesare.</p>
            <p class="bold-title">4. Activități interzise la raportare</p>
            <p>4.1. Folosirea formularului în scopuri rău-intenționate nu este permisă.</p>
            <p>4.1.1. Rapoartele false sau înșelătoare nu sunt permise.</p>
            <p>4.1.2. Hărțuirea altor utilizatori prin sistemul de rapoarte nu este permisă.</p>
            <p>4.1.3. Folosirea de boți sau automatizare pentru trimiterea rapoartelor este interzisă.</p>
            <p>4.1.4. Orice tentativă de manipulare a sistemului de rapoarte va fi investigată.</p>
            <p>4.1.5. Folosirea sistemului pentru a răspândi informații false este interzisă.</p>
            <p>4.1.6. Tentativele de a împiedica o investigație nu sunt permise.</p>
            <p>4.1.7. Folosirea sistemului pentru amenințări nu este permisă.</p>
            <p>4.1.8. Orice activitate ilegală legată de rapoarte va fi sancționată.</p>
            <p>4.1.9. Tentativele de a ocoli regulile de raportare nu sunt permise.</p>
            <p>4.1.10. Orice abuz al sistemului de rapoarte îl luăm în serios.</p>
            <p class="bold-title">5. Proprietate intelectuală la raportare</p>
            <p>
              5.1. Conținutul trimis odată cu raportul nu îți conferă drepturi de proprietate.
            </p>
            <p>5.2. Prin depunerea unui raport utilizatorii nu dobândesc drepturi asupra conținutului site-ului.</p>
            <p>5.3. Rapoartele se folosesc exclusiv în scop de investigație.</p>
            <p>5.4. Terții nu pot copia sau modifica rapoartele.</p>
            <p class="bold-title">6. Limitarea răspunderii la raportare</p>
            <p>6.1. Trimițând un raport îți asumi responsabilitatea pentru conținutul său.</p>
            <p>6.2. Nu suntem responsabili pentru consecințele rapoartelor depuse.</p>
            <p>6.3. Orice pierdere rezultată dintr-un raport cade în sarcina utilizatorului.</p>
            <p>6.4. Nu acceptăm răspunderea pentru daune cauzate de rapoarte.</p>
            <p>
              6.5. Problemele tehnice ale sistemului de rapoarte nu sunt responsabilitatea noastră.
            </p>
            <p class="bold-title">7. Informații despre procedura de raportare</p>
            <p>
              7.1. Folosind sistemul de rapoarte ești de acord să te contactăm pentru informații suplimentare.
            </p>
            <p>7.2. Tratăm rapoartele confidențial.</p>
            <p>7.3. Utilizatorilor le recomandăm să păstreze o copie a rapoartelor.</p>
            <p class="bold-title">8. Linkuri și resurse suplimentare</p>
            <p>8.1. Mai multe despre raportarea abuzului găsești în regulile noastre.</p>
            <p>8.2. Linkurile către surse externe nu sunt o recomandare a noastră.</p>
            <p>8.3. Îți recomandăm să verifici fiecare sursă înainte de a o folosi.</p>
            <p class="bold-title">9. Dispoziții generale privind rapoartele</p>
            <p>
              9.1. Ne rezervăm dreptul de a modifica, suspenda sau întrerupe procedura de raportare
              în orice moment.
            </p>
            <p>
              9.2. Termenii acestei proceduri se pot schimba oricând. Continuarea folosirii
              serviciului de rapoarte după astfel de modificări înseamnă acceptarea noilor termeni.
            </p>
            <p>9.3. Prin depunerea unui raport utilizatorul acceptă pe deplin acești termeni.</p>
            <p>
              9.4. Orice acord sau declarație, scrisă sau orală, care nu intră sub
              punctele concrete ale acestor termeni este juridic nulă și nu obligă nicio parte.
            </p>
            <p>
              9.5. Un drept acordat de acești termeni care nu este exercitat — din cauza consimțământului,
              neglijenței sau imposibilității — se consideră renunțat. Exercitarea parțială sau deplină a unui drept
              nu exclude și nu limitează exercitarea ulterioară.
            </p>
            <p>
              9.6. Dacă o instanță competentă declară o dispoziție a acestor termeni nulă, aceasta se
              consideră nulă. Restul termenilor rămâne totuși pe deplin în vigoare.
            </p>
            <p>
              9.7. Se recunoaște că acești termeni permit terților să opereze site-ul
              și să transfere drepturi și obligații. Utilizatorul nu poate transfera
              drepturile și obligațiile sale unei alte părți.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Politica de confidențialitate | ' . SITE_NAME;
$page_description = 'Politica de confidențialitate pentru ' . SITE_NAME . '.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Politica de confidențialitate</h1>
            <p>
              Datele tale personale și activele tale sunt extrem de importante pentru noi. Suntem pe deplin
              angajați în protecția lor.
            </p>
            <p>
              <?= e(SITE_NAME) ?> colectează și stochează datele necesare tranzacțiilor tale. Cum
              sunt colectate și stocate este descris în politica de confidențialitate de mai jos.
            </p>
            <p>Politica noastră se bazează pe următoarele principii:</p>
            <p class="circle">
              Cu scopul transparenței maxime a proceselor de colectare și
              stocare a datelor tale personale:
            </p>
            <p>
              Vrem să înțelegi cum colectăm și prelucrăm datele, ca să poți lua
              decizii informate. Pe acest site aplicăm proceduri clare de prelucrare a
              datelor. Politica descrie detaliat metodele prin care îți oferim
              informații clare și concrete despre folosirea datelor. Controlul e al tău.
            </p>
            <p>
              Te vom anunța imediat când considerăm necesar. Transparența ne este
              esențială.
            </p>
            <p>
              Echipa noastră de specialiști e mereu disponibilă să răspundă la întrebări despre orice aspect
              al proceselor noastre, inclusiv obligațiile față de dreptul <?= e(geo_in()) ?> și reglementările
              UE. Ne poți contacta la:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Nicio altă folosire a datelor personale din partea noastră nu este permisă, exceptând ce e prevăzut în
              politica de confidențialitate.
            </p>
            <p>
              Putem prelucra date personale în următoarele scopuri, inclusiv asigurarea funcționării corecte
              a serviciilor <?= e(SITE_NAME) ?> și conectarea utilizatorilor cu platforme de tranzacționare
              ale terților. Prelucrarea poate fi necesară și pentru menținerea și îmbunătățirea
              funcțiilor și serviciilor site-ului; protejarea drepturilor noastre și îndeplinirea obligațiilor legale și de altă
              natură. În final, datele servesc, după caz, funcțiilor administrative
              și altor funcții de business legate de serviciile oferite ție, clientului.
            </p>
            <p>
              Pentru a oferi servicii de calitate adaptate preferințelor și nevoilor tale, <?= e(SITE_NAME) ?>
              folosește date personale.
            </p>
            <p class="circle">
              Cu scopul de a folosi instrumentele necesare pentru protejarea datelor personale și a
              drepturilor tale în legătură cu ele:
            </p>
            <p>
              Oricând ne poți contacta și obține acces la toate datele tale. Le putem și
              modifica sau șterge la nevoie. În plus prelucrăm cereri de transfer al acestor
              date ție sau unui terț pe care îl desemnezi. Oferim acest serviciu ca să poți
              îți exercita pe deplin drepturile de confidențialitate și control.
            </p>
            <p class="circle">Protejează-ți datele personale:</p>
            <p>
              Sistemele noastre de securitate sunt de înaltă calitate și includ măsuri la nivel bancar. Deși
              protecția absolută nu e garantată, ne angajăm să menținem sistemele continuu
              la un nivel înalt și să consolidăm măsurile deja aplicate.
            </p>
            <p>
              Avem politici de confidențialitate cuprinzătoare și sisteme de securitate de primă clasă.
            </p>
            <p class="bold-title">1. Domeniul de aplicare</p>
            <p>
              Această politică descrie procedurile de colectare, prelucrare și divulgare a tuturor
              datelor persoanelor fizice.
            </p>
            <p>
              Dispozițiile politicii se aplică tuturor persoanelor fizice care pot fi identificate sau sunt
              identificate. În special oricărei persoane fizice care poate fi identificată în legătură cu
              datele încredințate nouă, la care avem acces și/sau pe care le putem combina.
            </p>
            <p>
              Prelucrarea datelor în sensul politicii de confidențialitate include în special stocarea,
              gestionarea și organizarea datelor personale.
            </p>
            <p>
              Nu colectăm și nu încercăm să colectăm informații despre persoane sub 18
              ani. Persoanele sub 18 ani nu au voie nici să folosească platforma noastră în niciun
              scop. Dacă constatăm că un utilizator are sub 18 ani, vom șterge imediat acele date.
            </p>
            <p class="bold-title">2. Ce date personale colectăm?</p>
            <p>
              La înregistrare colectăm datele personale necesare folosirii serviciilor. La nevoie
              putem solicita și date pentru verificare, de exemplu ca să
              confirmăm proprietatea contului. Pentru a îmbunătăți și menține calitatea
              serviciilor, colectăm și analizăm informații despre folosirea platformei și
              a serviciilor terțe conexe.
            </p>
            <p class="bold-title">
              3. În niciun caz nu ești obligat să furnizezi date personale companiei.
            </p>
            <p>
              Deși nu ești obligat să ne dai datele, decizia de a nu o face
              poate limita furnizarea serviciilor. Poate duce și la
              limitări în folosirea platformei.
            </p>
            <p class="bold-title">
              4. Ce date personale colectăm? Vizitând site-ul putem colecta următoarele
              date personale:
            </p>
            <p>
              Nu colectăm date care te identifică direct. Înregistrăm printre altele
              activitatea contului, adrese IP și datele și orele de acces. Pentru întreținere,
              securitate și suport stocăm rapoarte de erori de sistem, informații despre browser și tipul
              dispozitivului de pe care te conectezi. Înregistrăm și limba setată pe cont.
            </p>
            <p>
              În ce privește datele personale, colectăm și stocăm exclusiv informațiile
              oferite la conectarea la o platformă de tranzacționare terță prin serviciile noastre.
            </p>
            <p>
              Datele personale furnizate platformelor terțe pot include:
              numele complet, adresa, numărul de telefon și e-mailul.
            </p>
            <p class="bold-title">
              5. De ce are compania nevoie de datele mele și este prelucrarea legală?
            </p>
            <p>
              Compania colectează, stochează și prelucrează datele tale personale exclusiv în
              scopurile prevăzute în politică. Toate folosirile și prelucrările menționate sunt conforme cu
              dreptul aplicabil <?= e(geo_in()) ?> și reglementările UE.
            </p>
            <p>
              Compania va gestiona, prelucra sau transfera datele tale doar în conformitate cu
              reglementările aplicabile <?= e(geo_in()) ?>. Bazele legale relevante sunt enumerate mai jos:
            </p>
            <p class="circle">
              Ai dat consimțământul pentru stocarea și prelucrarea datelor personale de către
              companie. Furnizând datele companiei, ne autorizezi să le transmitem platformei
              de tranzacționare terțe corespunzătoare. În plus ai dat consimțământul pentru
              prelucrarea datelor personale într-unul sau mai multe scopuri.
            </p>
            <p class="circle">
              Pentru a îmbunătăți serviciile, a formula sau apăra pretenții și a proteja interese
              legitime, printre altele, compania poate trebui să stocheze și să
              prelucreze datele tale personale.
            </p>
            <p class="circle">Pentru îndeplinirea obligațiilor legale prelucrarea datelor este necesară.</p>
            <p>
              Dacă vrei să afli mai multe despre prelucrarea pe care compania e obligată să o
              efectueze, scrie-ne liber pe e-mail.
            </p>
            <p>
              Mai jos sunt scopurile concrete și baza legală care ne
              autorizează să prelucrăm datele tale personale.
            </p>
            <p class="green">Scop</p>
            <p class="green">Bază legală</p>
            <p>
              1. Pentru a-ți facilita accesul la tranzacționarea digitală și — exclusiv la cererea ta —
              împărtășim datele personale cu platforme terțe. Datele tale pot fi colectate
              și împărtășite cu terți exclusiv la cererea ta și la discreția ta.
            </p>
            <p>
              Ai dat consimțământul pentru prelucrarea datelor personale într-unul sau mai multe scopuri.
            </p>
            <p>
              2. Oferă-ne informațiile necesare ca să putem răspunde rapid și
              eficace la cererile, neliniștile și întrebările tale despre servicii.
            </p>
            <p>
              Pentru urmărirea intereselor legitime ale companiei sau ale unui terț numit
              prelucrarea datelor personale este necesară.
            </p>
            <p>
              3. Pentru îndeplinirea obligațiilor legale și administrative prelucrarea datelor personale este necesară.
            </p>
            <p>Pentru îndeplinirea obligațiilor legale trebuie să prelucrăm anumite date personale.</p>
            <p>
              4. Pentru a îmbunătăți serviciile avem nevoie de date anonimizate și trebuie să monitorizăm folosirea,
              inclusiv rapoartele de erori.
            </p>
            <p>
              Pentru protejarea intereselor legitime ale companiei și ale furnizorilor
              externi de servicii prelucrarea și stocarea datelor personale sunt necesare.
            </p>
            <p>5. Acest lucru e necesar pentru prevenirea fraudei și a abuzului de serviciu.</p>
            <p>
              Pentru asigurarea intereselor legitime ale companiei și ale furnizorilor terți
              prelucrarea și stocarea datelor personale sunt necesare.
            </p>
            <p>
              6. Cerințele serviciului ne obligă să monitorizăm și să prelucrăm date pentru
              dezvoltarea afacerii, decizii strategice, supraveghere, conformitate reglementară și
              alte activități de business.
            </p>
            <p>
              Cu scopul de a proteja interesele legitime ale companiei și ale furnizorilor
              externi de servicii prelucrarea și stocarea datelor personale sunt necesare.
            </p>
            <p>
              7. Folosim instrumente statistice și analitice pentru a susține decizii pe un spectru
              larg de servicii și în planificarea strategică.
            </p>
            <p>
              Pentru protejarea intereselor legitime ale companiei și ale furnizorilor noștri
              externi de servicii prelucrarea și stocarea datelor personale sunt necesare.
            </p>
            <p>
              8. În măsura necesară pentru protejarea drepturilor, proprietății și intereselor
              companiei și ale furnizorilor terți, în conformitate cu legile locale și
              reglementările aplicabile, contractele și propriii termeni, putem prelucra
              date personale. O astfel de prelucrare are loc exclusiv potrivit procedurilor necesare și
              stabilite.
            </p>
            <p>
              Pentru protejarea intereselor legitime ale companiei și ale fiecărui
              furnizor terț prelucrarea și stocarea datelor personale sunt necesare.
            </p>
            <p class="bold-title">6. Împărtășirea datelor personale cu terți</p>
            <p>
              Pentru stocarea și prelucrarea adreselor IP, chestionare și analiza folosirii
              precum și servicii conexe, compania poate împărtăși date anonimizate
              cu furnizori externi de servicii.
            </p>
            <p>
              La cererea ta împărtășim unele date personale furnizate cu furnizori
              externi. În acel caz prelucrarea este supusă politicii de confidențialitate
              a acelei companii. Acest lucru poate include diverse platforme digitale de tranzacționare.
            </p>
            <p>
              Cu scopul de a îmbunătăți serviciul clienți și de a optimiza serviciile în general
              compania poate împărtăși date personale cu societăți afiliate și parteneri de business.
            </p>
            <p>
              Când legea o cere sau pentru a proteja drepturile și proprietatea companiei și ale terților
              conexe, putem împărtăși date cu autorități legale sau de supraveghere competente.
            </p>
            <p>
              În cadrul operațiunilor critice de business, cum ar fi vânzarea companiei,
              obținerea de investiții sau o cerere de credit, datele relevante pot fi
              împărtășite legal și adecvat. Acest lucru se aplică și fuziunilor, restructurărilor,
              consolidărilor sau insolvenței companiei, în conformitate cu legea.
            </p>
            <p class="bold-title">7. Cookie-uri și servicii terțe</p>
            <p>
              Pentru analiza site-ului și în cooperare cu agenții de publicitate, cookie-urile și alte
              tehnologii similare pot fi folosite în conformitate cu legea și practica obișnuită.
            </p>
            <p>
              Cookie-urile — fișiere text mici stocate pe dispozitiv la vizitarea unui site — servesc la
              colectarea de informații despre comportamentul de navigare, preferințe și alte date. Scopul
              lor este personalizarea și îmbunătățirea experienței. Ajută să-ți reținem
              setările și preferințele și să adaptăm oferta. Servesc și
              analizei site-ului și statisticii pentru planificare.
            </p>
            <p>
              Site-ul folosește de regulă două tipuri de cookie-uri: de sesiune, stocate
              doar pe durata sesiunii de browser și șterse la închidere;
              și persistente, care rămân și după sesiune. Acestea din urmă
              permit site-ului să te recunoască ca vizitator revenit și ușurează folosirea.
            </p>
            <p class="bold-title">Tipuri de cookie-uri:</p>
            <p>Cookie-urile pot fi folosite după nevoie, în funcție de scop:</p>
            <p class="green">Tipul cookie-ului</p>
            <p>Aceste cookie-uri sunt strict necesare</p>
            <p class="green">Scop</p>
            <p>
              Cookie-urile servesc să te recunoaștem ca client, ca să putem oferi informațiile,
              setările și serviciile pe care le-ai solicitat.
              Ușurează și navigarea și accesul la site.
            </p>
            <p>
              Folosim cookie-uri ca dispozitivul să poată descărca și reda conținut. Permit și
              accesul la funcții esențiale și revenirea la paginile vizitate anterior.
            </p>
            <p class="green">Informații suplimentare</p>
            <p>
              Pentru un acces rapid și simplu, cookie-urile stochează și prelucrează anumite
              date personale, de exemplu numele de utilizator și data ultimului acces, dacă ceri site-ului să te
              țină minte la autentificare.
            </p>
            <p>Cookie-urile de sesiune se șterg la închiderea browserului.</p>
            <p class="green">Tipul cookie-ului</p>
            <p>Cookie-uri funcționale</p>
            <p class="green">Scop</p>
            <p>
              Datorită cookie-urilor putem stoca și aplica în siguranță setările și preferințele tale.
              Ne permit și să te recunoaștem la următoarea vizită.
            </p>
            <p class="green">Informații suplimentare</p>
            <p>
              Cookie-urile persistente rămân după sesiunea de browser și sunt active până la
              data de expirare.
            </p>
            <p class="green">Tipul cookie-ului</p>
            <p>Cookie-uri de performanță</p>
            <p class="green">Scop</p>
            <p>
              Pentru a îmbunătăți serviciile colectăm statistici cu cookie-uri. Acestea
              ne oferă informații despre performanța site-ului și folosirea lui.
            </p>
            <p class="green">Informații suplimentare</p>
            <p>
              Toate informațiile stocate prin cookie-uri sunt anonime și nu permit identificarea persoanelor.
            </p>
            <p>
              Cookie-urile de sesiune se șterg la închiderea browserului, iar cele persistente
              rămân active până la expirare sau nelimitat, dacă nu le ștergi manual.
            </p>
            <p>Blocarea sau ștergerea cookie-urilor</p>
            <p>
              Dacă vrei să elimini sau să blochezi cookie-urile, fă-o în
              setările browserului. Linkurile următoare conțin instrucțiuni detaliate pentru cele mai populare browsere.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Blocarea cookie-urilor poate face ca unele funcții ale site-ului să nu funcționeze cum e prevăzut.
            </p>
            <p class="bold-title">Cât timp păstrăm datele personale</p>
            <p>
              Datele personale le păstrăm doar atât cât e strict necesar pentru procesele
              necesare, așa cum e menționat în alte secțiuni ale acestei politici. Stocare mai lungă e posibilă dacă
              o cer reglementările locale sau regulile interne ale companiei.
            </p>
            <p>
              Datele tale personale, la cererea ta și la discreția ta, sunt împărtășite cu platforme de tranzacționare
              terțe timp de 12 luni. După expirarea acestei perioade și cu
              consimțământul tău datele sunt împărtășite încă 12 luni.
            </p>
            <p>
              Procedurile noastre prevăd evaluarea regulată a tuturor datelor personale ca să vedem dacă
              mai sunt necesare.
            </p>
            <p class="bold-title">
              9. Transferul datelor personale către țări terțe sau organizații internaționale
            </p>
            <p>
              Când e necesar pentru servicii și/sau din motive de securitate, putem transfera
              date personale către alte țări (în afara țării tale) și organizații internaționale
              potrivit protocoalelor cuprinzătoare de securitate. Aplicăm măsuri de protecție a datelor la
              un nivel înalt ca să protejăm informațiile și să asigurăm accesul la căi de atac
              și drepturi legale în orice moment.
            </p>
            <p>
              În Spațiul Economic European (SEE) toți rezidenții beneficiază de protecție a datelor și garanții.
            </p>
            <p class="circle">
              Transferurile au loc întotdeauna sub jurisdicția și supravegherea UE, în conformitate
              cu standardele și protocoalele de protecție a datelor din articolul 45 alineatul (3) din Regulamentul
              (UE) 2016/679 al Parlamentului European și al Consiliului din 27 aprilie 2016
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Orice transfer de date între organisme publice are loc potrivit articolului
              46 alineatul (2). Acesta este un acord juridic obligatoriu și executoriu.
            </p>
            <p class="circle">
              Clauzele contractuale standard ale Comisiei Europene potrivit articolului 46.2.c GDPR stabilesc
              condițiile transferului, iar astfel de transferuri au loc în conformitate cu
              acestea. Poți consulta dispozițiile la
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Mai multe despre măsurile concrete de securitate luate de companie pentru a
              proteja datele personale la transferul către țări terțe poți trimite o cerere
              pe e-mail la <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Protecția datelor personale</p>
            <p>
              Datele personale sunt protejate de măsuri tehnice și organizatorice de cel mai înalt
              nivel, aplicate potrivit procedurilor de referință. Aceste proceduri previn eficace
              distrugerea datelor din cauza evenimentelor ilegale sau neprevăzute, precum și
              pierderea sau modificarea lor.
            </p>
            <p>
              Deși aplicăm cea mai mare grijă posibilă și proceduri care îndeplinesc cele mai stricte
              standarde de protecție a datelor și legea, în nicio circumstanță nu e garantat
              că datele personale sunt fără eroare. Prin urmare nu acceptăm răspunderea dacă
              datele personale suferă daune accidentale, nemateriale sau consecutive sau divulgare.
              Aceasta include situații în afara controlului nostru, de exemplu divulgarea din cauza erorilor de transmisie,
              accesului neautorizat al terților sau unor cauze similare.
            </p>
            <p>
              Când primim cereri juridic obligatorii de la autorități de supraveghere sau alte
              organisme cu puteri legale, putem fi obligați să transmitem datele tale personale
              acelor organisme. După transmitere pe baza unei obligații legale nu avem
              control asupra modului în care acele organisme prelucrează, stochează sau protejează datele tale.
            </p>
            <p>
              Tot ce se transmite pe internet, inclusiv datele personale, poartă un anumit
              risc de interceptare și nu e 100% sigur. Compania nu poate garanta
              securitatea datelor trimise online.
            </p>
            <p class="bold-title">11. Linkuri către site-uri terțe</p>
            <p>
              Pe acest site vei găsi linkuri către aplicații și site-uri terțe. Reține
              că nu sunt legate de companie și nici sub controlul ei, iar politica noastră de
              confidențialitate nu se aplică acelor terți. Ei acționează după propriile
              proceduri și priorități la colectarea și prelucrarea datelor personale, prin urmare
              nu acceptăm răspunderea pentru acele activități. Folosește-le la propria discreție.
            </p>
            <p>
              Verifică întotdeauna politica de confidențialitate a companiei sau serviciului când le vizitezi site-ul
              înainte de a furniza date personale. Verifică dacă regulile lor de colectare, folosire și
              prelucrare corespund preferințelor tale. Dacă împărtășești date, fă-o
              direct la furnizorul de servicii.
            </p>
            <p class="bold-title">12. Actualizări ale politicii</p>
            <p>
              Ne rezervăm dreptul de a actualiza sau modifica această politică în orice moment. Te vom informa
              despre modificări prin site și canale relevante. Versiunea actualizată a politicii de
              confidențialitate va fi publicată pe site, iar politica revizuită intră în vigoare
              imediat după publicare, dacă nu e menționat altfel.
            </p>
            <p class="bold-title">13. Drepturile tale privind datele personale</p>
            <p>
              Ai controlul și ultimul cuvânt asupra folosirii tuturor datelor tale personale. Asta include
              verificarea acurateței, corectarea erorilor și dreptul la ștergere sau
              restricționarea prelucrării noastre — atât ca amploare, cât și ca natură.
            </p>
            <p>Rezidenții SEE găsesc pe această pagină informații relevante pentru ei:</p>
            <p>
              Datele tale personale sunt protejate de drepturile descrise aici. Trimițând un e-mail la
              adresa de mai jos poți exercita imediat acele drepturi.
            </p>
            <p>Accesul la drepturile tale</p>
            <p>
              Dacă datele personale furnizate sunt corecte, le poți accesa oricând. Toate
              datele personale pe care le prelucrăm ne sunt disponibile, deci verificabile.
            </p>
            <p>
              Oricând poți solicita datele personale pentru verificare și îți vor fi
              puse la dispoziție în formă electronică. Dacă soliciți copii suplimentare ale
              datelor prelucrate dincolo de copia deja furnizată, se poate percepe o taxă rezonabilă.
            </p>
            <p>
              Drepturile recunoscute de lege și de politica de confidențialitate nu trebuie să afecteze drepturile terților.
              Compania își rezervă dreptul de a refuza sau restricționa accesul la date personale
              dacă aceasta încalcă drepturile și libertățile terților.
            </p>
            <p>Dreptul la rectificare</p>
            <p>
              Orice eroare din datele personale, fie din omisiune, fie din informație inexactă,
              poate fi corectată de tine sau de companie ca prelucrarea să fie corectă.
            </p>
            <p>Dreptul la ștergerea datelor</p>
            <p>
              Ai dreptul să soliciți ștergerea datelor personale în următoarele
              circumstanțe: 1) dacă au fost prelucrate fără consimțământ sau în afara limitelor legale; 2)
              la cererea ta, dacă vrei să le ștergi, iar compania nu are obligație legală să
              le păstreze; 3) dacă te opui prelucrării sau îți retragi consimțământul, chiar dacă e
              legală și acoperită de interesele noastre sau ale terților; și 4) dacă legea ne
              obligă să le ștergem.
            </p>
            <p>
              Dreptul la ștergere nu se aplică dacă i se opun obligații legale ale UE sau
              ale unui stat membru. Nu se aplică nici dacă datele sunt necesare pentru formularea sau
              apărarea unor pretenții.
            </p>
            <p>Dreptul la restricționarea prelucrării</p>
            <p>
              Ai dreptul să soliciți restricționarea prelucrării datelor personale dacă consideri
              că ele conțin inexactități.
            </p>
            <p>
              Dacă soliciți restricționarea folosirii datelor personale, vom restricționa prelucrarea, exceptând
              următoarele cazuri: 1) dacă i se opune dreptul Uniunii Europene sau al unuia dintre
              statele sale membre; 2) cu consimțământul tău, dacă e necesar pentru apărarea sau formularea
              unor pretenții; 3) pentru protejarea drepturilor altei persoane fizice.
            </p>
            <p>Dreptul la portabilitatea datelor</p>
            <p>
              Ai dreptul de acces și control asupra datelor personale furnizate, în măsura
              în care ai dat consimțământul pentru colectarea lor și dacă prelucrarea
              are loc în sisteme automatizate.
            </p>
            <p>
              Ai dreptul să soliciți transferul tuturor datelor personale către o altă companie sau
              organizație, în măsura tehnic posibilă. Acest drept nu afectează
              dreptul la ștergerea datelor. Nu se aplică dacă exercitarea lui ar încălca drepturile
              sau libertățile altei persoane fizice.
            </p>
            <p>Dreptul de a te opune prelucrării</p>
            <p>
              Fără a aduce atingere dreptului companiei de a urmări interesele noastre legitime sau
              pe cele ale unui terț care acționează ca furnizor, ai dreptul să te opui
              prelucrării și să soliciți încetarea ei. Acest drept nu se aplică dacă există o nevoie
              legală urgentă de continuare a prelucrării — fie pentru apărare împotriva unor pretenții, fie pentru
              formularea lor. În astfel de cazuri putem continua prelucrarea datelor tale.
            </p>
            <p>
              Oricând te poți opune prelucrării datelor personale în scopuri de marketing direct.
            </p>
            <p>
              Dreptul de a retrage consimțământul
            </p>
            <p>
              Poți retrage consimțământul pentru prelucrarea datelor personale oricând,
              cu efect imediat. Retragerea nu are efect retroactiv asupra prelucrării
              efectuate înainte de retragere.
            </p>
            <p>
              Dacă ești nemulțumit din orice motiv, ai dreptul să depui o plângere
              la un organism legal, de supraveghere sau de control.
            </p>
            <p>
              Dacă consideri că drepturile și libertățile tale privind prelucrarea datelor personale
              au fost încălcate, statele membre ale UE au organisme de supraveghere și control
              în acest scop. Poți depune o plângere la acele organisme dacă consideri potrivit.
            </p>
            <p>
              Punctul 13 descrie situațiile în care drepturile tale privind datele personale pot fi
              limitate de dreptul Uniunii Europene sau al statelor membre.
            </p>
            <p>
              Când primim cererea ta privind datele personale și prelucrarea lor, îți vom da
              acces la informațiile solicitate, așa cum e menționat la punctul 13 al acestei politici.
              Putem prelungi acest termen cu până la două luni, în funcție de amploarea cererii
              și natura solicitării. La nevoie te vom anunța despre prelungire
              într-o lună de la primirea cererii.
            </p>
            <p>
              Informațiile solicitate le vom trimite electronic și gratuit, exceptând cazul în care
              acest lucru contravine legii sau dispozițiilor punctului 13. Ne rezervăm dreptul de a
              percepe o taxă rezonabilă sau de a refuza o cerere dacă e considerată neîntemeiată, excesivă sau repetitivă.
            </p>
            <p>
              Ne rezervăm dreptul de a solicita o verificare suplimentară a identității dacă există
              o suspiciune rezonabilă despre persoana care depune o cerere de date personale, ca să
              protejăm și asigurăm securitatea datelor.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

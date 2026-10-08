<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Termeni de utilizare | ' . SITE_NAME;
$page_description = 'Termeni de utilizare ai platformei ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Termeni de utilizare</h1>
            <p class="bold-title">1. Introducere</p>
            <p>1.1. Pentru folosirea serviciilor este necesară acceptarea acestor termeni.</p>
            <p>1.2. Acești termeni constituie un acord juridic obligatoriu.</p>
            <p>1.3. Continuarea folosirii site-ului înseamnă acceptarea termenilor.</p>
            <p>
              1.4. Pentru întrebări ne poți contacta la
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Dreptul de utilizare</p>
            <p>2.1. Serviciile pot fi folosite doar de persoane de cel puțin 18 ani.</p>
            <p>2.1.1. Trebuie să locuiești într-o țară în care serviciile sunt legale.</p>
            <p>2.1.2. Nu trebuie să fii pe o listă de sancțiuni.</p>
            <p>2.1.3. Trebuie să ai capacitate juridică de a încheia contracte.</p>
            <p>2.2. Nu suntem responsabili pentru folosirea de către utilizatori neautorizați.</p>
            <p class="bold-title">3. Contul de utilizator</p>
            <p>3.1. Ești responsabil de securitatea contului tău.</p>
            <p>3.2. Nu împărtăși parola cu terți.</p>
            <p class="bold-title">4. Activități interzise</p>
            <p>4.1. Folosirea serviciilor în scopuri ilegale nu este permisă.</p>
            <p>4.1.1. Spălarea de bani este strict interzisă.</p>
            <p>4.1.2. Frauda va fi raportată autorităților competente.</p>
            <p>4.1.3. Folosirea de boți sau software de automatizare nu este permisă.</p>
            <p>4.1.4. Orice tentativă de manipulare a sistemului va fi investigată.</p>
            <p>4.1.5. Răspândirea de informații false este interzisă.</p>
            <p>4.1.6. Tentativele de a împiedica investigațiile nu sunt permise.</p>
            <p>4.1.7. Amenințările către alți utilizatori sunt interzise.</p>
            <p>4.1.8. Orice activitate ilegală va fi sancționată.</p>
            <p>4.1.9. Tentativele de a ocoli regulile nu sunt permise.</p>
            <p>4.1.10. Orice abuz al sistemului îl luăm în serios.</p>
            <p class="bold-title">5. Proprietate intelectuală</p>
            <p>5.1. Tot conținutul site-ului este proprietatea noastră intelectuală.</p>
            <p>5.2. Utilizatorii nu dobândesc drepturi asupra conținutului site-ului.</p>
            <p>5.3. Conținutul nu poate fi copiat fără permisiune.</p>
            <p>5.4. Terții nu pot modifica conținutul.</p>
            <p class="bold-title">6. Limitarea răspunderii</p>
            <p>6.1. Folosești serviciile pe propria răspundere.</p>
            <p>6.2. Nu suntem responsabili pentru pierderi rezultate din folosirea serviciilor.</p>
            <p>6.3. Orice pierdere din folosirea site-ului cade în sarcina utilizatorului.</p>
            <p>6.4. Nu acceptăm răspunderea pentru daune cauzate de folosirea site-ului.</p>
            <p>6.5. Problemele tehnice nu sunt responsabilitatea noastră.</p>
            <p class="bold-title">7. Informații</p>
            <p>7.1. Folosind serviciile ești de acord să fii contactat.</p>
            <p>7.2. Tratăm informațiile confidențial.</p>
            <p>7.3. Utilizatorilor le recomandăm să păstreze evidențe.</p>
            <p class="bold-title">8. Linkuri și resurse suplimentare</p>
            <p>8.1. Mai multe informații găsești în regulile noastre.</p>
            <p>8.2. Linkurile externe nu sunt o recomandare.</p>
            <p>8.3. Recomandăm verificarea surselor înainte de folosire.</p>
            <p class="bold-title">9. Dispoziții generale</p>
            <p>9.1. Ne rezervăm dreptul de a modifica serviciile în orice moment.</p>
            <p>9.2. Termenii se pot schimba oricând.</p>
            <p>9.3. Folosind serviciile accepți acești termeni.</p>
            <p>9.4. Acordurile orale nu sunt valabile.</p>
            <p>9.5. Drepturile neexercitate nu se consideră renunțate.</p>
            <p>
              9.6. Dacă o dispoziție este declarată nevalidă, restul rămân în vigoare.
            </p>
            <p>9.7. Serviciile pot fi administrate de furnizori externi.</p>
            <p>
              9.8. Acești termeni se supun dreptului <?= e(geo_in()) ?>. Toate litigiile se depun la
              instanța competentă <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

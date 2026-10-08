<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Pogoji uporabe | ' . SITE_NAME;
$page_description = 'Pogoji uporabe platforme ' . SITE_NAME . '.';
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
            <h1>Pogoji uporabe</h1>
            <p class="bold-title">1. Uvod</p>
            <p>1.1. Za uporabo storitev je potrebno sprejetje teh pogojev.</p>
            <p>1.2. Ti pogoji predstavljajo pravno zavezujoč sporazum.</p>
            <p>1.3. Nadaljnja uporaba spletnega mesta pomeni sprejem pogojev.</p>
            <p>
              1.4. Za vprašanja nas lahko kontaktiraš na
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Pravica do uporabe</p>
            <p>2.1. Storitev lahko uporabljajo samo osebe, starejše od 18 let.</p>
            <p>2.1.1. Moraš živeti v državi, kjer so storitve zakonite.</p>
            <p>2.1.2. Ne smeš biti na seznamu sankcij.</p>
            <p>2.1.3. Moraš imeti poslovno sposobnost za sklepanje pogodb.</p>
            <p>2.2. Nismo odgovorni za uporabo s strani nepooblaščenih uporabnikov.</p>
            <p class="bold-title">3. Uporabniški račun</p>
            <p>3.1. Odgovoren si za varnost svojega računa.</p>
            <p>3.2. Gesla ne deli s tretjimi osebami.</p>
            <p class="bold-title">4. Prepovedane dejavnosti</p>
            <p>4.1. Uporaba storitev v nezakonite namene ni dovoljena.</p>
            <p>4.1.1. Pranje denarja je strogo prepovedano.</p>
            <p>4.1.2. Prevara bo prijavljena pristojnim organom.</p>
            <p>4.1.3. Uporaba botov ali programske opreme za avtomatizacijo ni dovoljena.</p>
            <p>4.1.4. Vsak poskus manipulacije sistema bo raziskan.</p>
            <p>4.1.5. Širjenje napačnih informacij je prepovedano.</p>
            <p>4.1.6. Poskusi oviranja preiskav niso dovoljeni.</p>
            <p>4.1.7. Grožnje drugim uporabnikom so prepovedane.</p>
            <p>4.1.8. Vsaka nezakonita dejavnost bo sankcionirana.</p>
            <p>4.1.9. Poskusi obida pravil niso dovoljeni.</p>
            <p>4.1.10. Vsako zlorabo sistema jemljemo resno.</p>
            <p class="bold-title">5. Intelektualna lastnina</p>
            <p>5.1. Vsa vsebina spletnega mesta je naša intelektualna lastnina.</p>
            <p>5.2. Uporabniki ne pridobijo pravic do vsebine spletnega mesta.</p>
            <p>5.3. Vsebine ni dovoljeno kopirati brez dovoljenja.</p>
            <p>5.4. Tretje osebe ne smejo spreminjati vsebine.</p>
            <p class="bold-title">6. Omejitev odgovornosti</p>
            <p>6.1. Storitev uporabljaš na lastno odgovornost.</p>
            <p>6.2. Nismo odgovorni za izgube, ki izhajajo iz uporabe storitev.</p>
            <p>6.3. Vsaka izguba zaradi uporabe spletnega mesta bremeni uporabnika.</p>
            <p>6.4. Ne sprejemamo odgovornosti za škodo, povzročeno z uporabo spletnega mesta.</p>
            <p>6.5. Tehnične težave niso naša odgovornost.</p>
            <p class="bold-title">7. Informacije</p>
            <p>7.1. Z uporabo storitev se strinjaš s kontaktiranjem.</p>
            <p>7.2. Z informacijami ravnamo zaupno.</p>
            <p>7.3. Uporabnikom svetujemo vodenje evidenc.</p>
            <p class="bold-title">8. Povezave in dodatni viri</p>
            <p>8.1. Več informacij najdeš v naših pravilih.</p>
            <p>8.2. Zunanje povezave niso priporočilo.</p>
            <p>8.3. Priporočamo preverjanje virov pred uporabo.</p>
            <p class="bold-title">9. Splošne določbe</p>
            <p>9.1. Pridržujemo si pravico spremeniti storitve kadarkoli.</p>
            <p>9.2. Pogoji se lahko kadarkoli spremenijo.</p>
            <p>9.3. Z uporabo storitev sprejmeš te pogoje.</p>
            <p>9.4. Ustni sporazumi niso veljavni.</p>
            <p>9.5. Neizkoriščene pravice se ne štejejo za odpoved.</p>
            <p>
              9.6. Če se določba razglasi za neveljavno, preostale ostanejo v veljavi.
            </p>
            <p>9.7. Storitev lahko upravljajo zunanji ponudniki.</p>
            <p>
              9.8. Za te pogoje velja pravo <?= e(geo_in()) ?>. Vsi spori se predajo
              pristojnemu sodišču <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

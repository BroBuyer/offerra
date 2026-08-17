<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Termeni | Acord de utilizare cu ' . SITE_NAME;
$page_description = 'Citiți termenii platformei, regulile de tranzacționare și politicile de suport ale ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Termeni', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="fir de navigare" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Acasă</a>
            <span class="breadcrumb-item">Termeni</span>
        </nav>
        <h1>Termeni de utilizare</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Introducere</h2>
    <p>Acest site informează despre servicii de tranzacționare ale terților. Continuând, acceptați acești termeni și Politica de confidențialitate. Termenii se pot actualiza.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Eligibilitatea utilizatorului</h2>
    <p>Trebuie să aveți cel puțin 18 ani și să fiți legal îndreptățit să acceptați acești termeni, conform legislației locale. Excludem răspunderea pentru utilizarea necorespunzătoare a platformei.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Limitări de acces</h2>
    <p>Accesul poate fi restricționat în anumite regiuni sau din cauza limitărilor de reglementare. Unele servicii pot fi indisponibile în locuri specifice.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Utilizare corespunzătoare</h2>
    <p>Utilizarea neautorizată este interzisă, inclusiv activități ilegale, încălcarea drepturilor, conținut dăunător sau boți. Încălcările pot duce la suspendarea contului.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Proprietate intelectuală</h2>
    <p>Tot conținutul, mărcile și drepturile de proprietate intelectuală ne aparțin nouă sau afiliaților. Utilizarea site-ului este personală; copierea sau modificarea conținutului nu este permisă.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Declinare de răspundere</h2>
    <p>Serviciile și site-ul sunt furnizate «ca atare». Nu acceptăm răspunderea pentru erori, pierderi sau daune rezultate din utilizare.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Conținut al terților</h2>
    <p>Pot apărea conținuturi sau linkuri ale terților, fără garanție de acuratețe sau disponibilitate; verificați independent.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Linkuri externe</h2>
    <p>Linkurile externe sunt pentru comoditate. Nu susținem și nu controlăm aceste site-uri și excludem răspunderea pentru conținutul lor.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Termeni suplimentari</h2>
    <p>Putem actualiza serviciile și termenii. Acești termeni formează întregul acord. Neexercitarea drepturilor nu înseamnă renunțare.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

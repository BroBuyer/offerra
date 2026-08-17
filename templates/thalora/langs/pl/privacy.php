<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Prywatność | Ochrona danych w ' . SITE_NAME;
$page_description = 'Zobacz, jak ' . SITE_NAME . ' chroni Twoje dane w polityce prywatności.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Polityka prywatności', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="ścieżka nawigacji"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Strona główna</a>
  <span class="breadcrumb-item">Polityka prywatności</span>
</nav>
<h1>Nasze zaangażowanie w ochronę Twojej prywatności</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Ostatnia aktualizacja: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («my»), ochrona Twoich danych osobowych jest priorytetem. To oświadczenie wyjaśnia, jak zbieramy, używamy i chronimy Twoje informacje.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Przejrzystość przetwarzania danych</p>
    <p>
      Dążymy do jasności przetwarzania danych. Skontaktuj się z nami pod      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Cel wykorzystania danych</p>
    <p>Używamy Twoich informacji do świadczenia usług, ulepszania platformy i spełniania obowiązków prawnych.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Dostęp do Twoich danych</p>
    <p>W każdej chwili możesz poprosić o dostęp, sprostowanie lub usunięcie danych osobowych.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Praktyki bezpieczeństwa</p>
    <p>Stosujemy solidne środki bezpieczeństwa, bez możliwości gwarancji absolutnej ochrony.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informacje, które zbieramy</h2>
    <p>Zbieramy m.in. adresy IP, dane urządzenia, typy przeglądarek oraz informacje, które nam podasz.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Podstawy przetwarzania</h2>
    <p>Przetwarzanie opiera się na zgodzie, uzasadnionych interesach i przestrzeganiu obowiązującego prawa.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Udostępnianie danych</h2>
    <p>Twoje dane mogą być udostępniane zaufanym partnerom, dostawcom i organom, gdy wymaga tego prawo.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Pliki cookie</h2>
    <p>Cookie wspierają działanie strony i analizę użycia; możesz je wyłączyć, jeśli chcesz.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Okres przechowywania</h2>
    <p>Przechowujemy informacje tylko tak długo, jak to konieczne do opisanych celów.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Transfery międzynarodowe</h2>
    <p>Dane mogą być przekazywane poza kraj, z odpowiednimi zabezpieczeniami.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Linki do innych stron</h2>
    <p>Nie bierzemy odpowiedzialności za zewnętrzne strony linkowane z platformy ani za ich praktyki.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Aktualizacje tej polityki</h2>
    <p>Ta polityka prywatności może być aktualizowana.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Twoje prawa</h2>
    <p>Masz prawo do dostępu, sprostowania, usunięcia, ograniczenia przetwarzania, przenoszenia danych, wycofania zgody i złożenia skargi.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>

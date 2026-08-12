<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Warunki korzystania');
$page_description = 'Zasady obowiązujące, gdy uzyskujesz dostęp do ' . SITE_NAME . ' lub z niego korzystasz.';
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
    <nav class="nav-links" aria-label="Główna">
      <a href="<?= page_url() ?>#platform">Platforma</a>
      <a href="<?= page_url() ?>#how">Jak to działa</a>
      <a href="<?= page_url() ?>#markets">Rynki</a>
      <a href="<?= page_url() ?>#faq">Często zadawane pytania</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Zacznij</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal</span>
      <h1>Warunki korzystania</h1>
      <p class="lede">Zasady obowiązujące, gdy uzyskujesz dostęp do <?= e(SITE_NAME) ?> lub z niego korzystasz.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Ostatnia aktualizacja: styczeń 2025</p>

      <h2>1. Akceptacja Warunków</h2>
      <p>Uzyskując dostęp do witryny i usług <?= e(SITE_NAME) ?> lub z nich korzystając, zgadzasz się na związanie niniejszymi Warunkami korzystania. Jeśli nie wyrażasz zgody, nie korzystaj z usług.</p>

      <h2>2. Kwalifikowalność</h2>
      <p>Musisz mieć co najmniej 18 lat (lub wiek pełnoletności w swojej jurysdykcji) oraz zdolność prawną do zawarcia wiążącej umowy. Usługi nie są oferowane mieszkańcom jurysdykcji objętych ograniczeniami, gdzie taka oferta byłaby nielegalna.</p>

      <h2>3. Rejestracja konta</h2>
      <p>Zgadzasz się podać dokładne, aktualne i kompletne informacje podczas rejestracji oraz utrzymywać je w aktualności. Odpowiadasz za poufność danych logowania i za wszelką aktywność na koncie.</p>

      <h2>4. Usługi</h2>
      <p><?= e(SITE_NAME) ?> dostarcza narzędzia technologiczne i informacje edukacyjne związane z inwestowaniem online. Nie jesteśmy Twoim doradcą finansowym. Nic na tej stronie nie stanowi spersonalizowanej porady inwestycyjnej, podatkowej ani wezwania do kupna lub sprzedaży instrumentu finansowego.</p>

      <h2>5. Opłaty</h2>
      <p>Obowiązujące opłaty, spready i prowizje są ujawniane na platformie lub w obowiązującym cenniku. Odpowiadasz za wszelkie podatki wynikające z Twojej działalności.</p>

      <h2>6. Zabronione zachowanie</h2>
      <ul>
        <li>Używanie usług do prania pieniędzy, finansowania terroryzmu, manipulacji rynkiem lub innego nielegalnego celu.</li>
        <li>Podszywanie się pod inną osobę lub podawanie fałszywych danych tożsamości.</li>
        <li>Próby ingerencji, kompromitacji lub reverse engineeringu jakiejkolwiek części platformy.</li>
        <li>Używanie narzędzi automatycznych do dostępu do usług w sposób inny niż wyraźnie dozwolony.</li>
      </ul>

      <h2>7. Własność intelektualna</h2>
      <p>Cała treść, znaki towarowe, oprogramowanie i materiały na stronie są własnością <?= e(SITE_NAME) ?> lub jej licencjodawców i są chronione obowiązującymi przepisami o własności intelektualnej. Udzielana jest ograniczona, niewyłączna, odwołalna licencja na korzystanie z usług zgodnie z ich przeznaczeniem.</p>

      <h2>8. Usługi stron trzecich</h2>
      <p>Platforma może zawierać linki do usług stron trzecich lub je integrować. Nie odpowiadamy za takie usługi, ich dostępność, dokładność ani treść.</p>

      <h2>9. Zastrzeżenia</h2>
      <p>Usługi są świadczone „tak jak są” i „w miarę dostępności” bez gwarancji jakiegokolwiek rodzaju. Handel wiąże się z istotnym ryzykiem straty. Zobacz naszą <a href="<?= page_url('conditions.php') ?>">Ujawnienie ryzyka</a> po szczegóły.</p>

      <h2>10. Ograniczenie odpowiedzialności</h2>
      <p>W maksymalnym zakresie dozwolonym przez prawo <?= e(SITE_NAME) ?> nie ponosi odpowiedzialności za jakiekolwiek szkody pośrednie, przypadkowe, szczególne, wynikowe lub karne ani za utratę zysków lub przychodów wynikającą z korzystania z usług.</p>

      <h2>11. Zwolnienie z odpowiedzialności</h2>
      <p>Zgadzasz się zwolnić <?= e(SITE_NAME) ?>, jej podmioty powiązane i personel z wszelkich roszczeń wynikających z naruszenia niniejszych Warunków lub niewłaściwego użycia usług.</p>

      <h2>12. Zawieszenie i rozwiązanie</h2>
      <p>Możemy zawiesić lub zakończyć dostęp do usług w dowolnym momencie, z powiadomieniem lub bez, jeśli uznamy, że naruszyłeś niniejsze Warunki lub obowiązujące prawo.</p>

      <h2>13. Prawo właściwe</h2>
      <p>Niniejsze Warunki podlegają prawu właściwemu dla siedziby <?= e(SITE_NAME) ?>, bez względu na zasady kolizji praw.</p>

      <h2>14. Zmiany</h2>
      <p>Możemy od czasu do czasu zmieniać niniejsze Warunki. Dalsze korzystanie z usług po zmianach oznacza akceptację zmienionych Warunków.</p>

      <h2>15. Kontakt</h2>
      <p>Pytania dotyczące niniejszych Warunków można przesłać przez naszą <a href="<?= page_url('contacts.php') ?>">stronę kontaktową</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Powrót do strony głównej</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Wszelkie prawa zastrzeżone ·
      <a href="<?= page_url('privacy.php') ?>">Prywatność</a> ·
      <a href="<?= page_url('conditions.php') ?>">Warunki</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>

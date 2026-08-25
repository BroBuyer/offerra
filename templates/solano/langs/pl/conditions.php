<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Warunki użytkowania ᐉ ' . SITE_NAME;
$page_description = 'Warunki użytkowania ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Informacje prawne</span>
    <h1>Warunki użytkowania</h1>
    <p class="etpy2">Zasady, które obowiązują przy dostępie do <?= e(SITE_NAME) ?> lub korzystaniu z serwisu.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Ostatnia aktualizacja: styczeń 2025</p>

    <h2>1. Akceptacja warunków</h2>
    <p>Korzystając ze strony i usług <?= e(SITE_NAME) ?>, akceptują Państwo niniejsze Warunki użytkowania. W razie braku zgody prosimy nie korzystać z usług.</p>

    <h2>2. Uprawnienie</h2>
    <p>Trzeba mieć co najmniej 18 lat (lub wiek pełnoletności w Państwa jurysdykcji) oraz zdolność do zawarcia wiążącej umowy. Usług nie oferuje się mieszkańcom jurysdykcji objętych ograniczeniami, gdzie taka oferta byłaby niezgodna z prawem.</p>

    <h2>3. Rejestracja konta</h2>
    <p>Zgadzają się Państwo podać przy rejestracji dane dokładne, aktualne i kompletne oraz je aktualizować. Odpowiadają Państwo za poufność danych logowania i za całą aktywność na koncie.</p>

    <h2>4. Usługi</h2>
    <p><?= e(SITE_NAME) ?> dostarcza narzędzi technologicznych i informacji edukacyjnych dotyczących inwestowania online. Nie jesteśmy Państwa doradcą finansowym. Nic na stronie nie stanowi spersonalizowanej porady inwestycyjnej, podatkowej ani zachęty do kupna lub sprzedaży instrumentu finansowego.</p>

    <h2>5. Opłaty</h2>
    <p>Obowiązujące opłaty, spready i prowizje są podane na platformie lub w tabeli opłat. Za podatki wynikające z działalności odpowiadają Państwo.</p>

    <h2>6. Zabronione działania</h2>
    <ul>
      <li>Korzystanie z usług do prania pieniędzy, finansowania terroryzmu, manipulacji rynkiem lub jakiegokolwiek celu niezgodnego z prawem.</li>
      <li>Podszywanie się pod inną osobę lub podawanie nieprawdziwych danych tożsamości.</li>
      <li>Próby zakłócenia, kompromitacji lub inżynierii wstecznej jakiejkolwiek części platformy.</li>
      <li>Korzystanie z narzędzi automatycznych w celu dostępu do usług inaczej, niż jest to wyraźnie dozwolone.</li>
    </ul>

    <h2>7. Własność intelektualna</h2>
    <p>Cała treść, znaki towarowe, oprogramowanie i materiały na stronie są własnością <?= e(SITE_NAME) ?> lub licencjodawców i chroni je prawo własności intelektualnej. Otrzymują Państwo ograniczoną, niewyłączną, odwołalną licencję na korzystanie z usług zgodnie z przeznaczeniem.</p>

    <h2>8. Usługi stron trzecich</h2>
    <p>Platforma może zawierać odnośniki do usług stron trzecich lub się z nimi integrować. Za te usługi, ich dostępność, dokładność ani treść nie ponosimy odpowiedzialności.</p>

    <h2>9. Wyłączenia</h2>
    <p>Usługi świadczone są „tak jak są” i „w miarę dostępności” bez jakichkolwiek gwarancji. Handel wiąże się z istotnym ryzykiem straty. Zobacz <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Informacja o ryzyku</a> po więcej szczegółów.</p>

    <h2>10. Ograniczenie odpowiedzialności</h2>
    <p>W maksymalnym zakresie dozwolonym prawem <?= e(SITE_NAME) ?> nie ponosi odpowiedzialności za szkody pośrednie, przypadkowe, szczególne, następcze lub karne ani za utratę zysków lub przychodów wynikającą z korzystania z usług.</p>

    <h2>11. Zwolnienie z odpowiedzialności</h2>
    <p>Zgadzają się Państwo zwolnić <?= e(SITE_NAME) ?>, podmioty powiązane i pracowników z roszczeń wynikających z naruszenia niniejszych Warunków lub niewłaściwego korzystania z usług.</p>

    <h2>12. Zawieszenie i zakończenie</h2>
    <p>Dostęp do usług możemy w dowolnym momencie zawiesić lub zakończyć, z powiadomieniem lub bez, jeśli uznamy, że naruszyli Państwo niniejsze Warunki lub prawo.</p>

    <h2>13. Prawo właściwe</h2>
    <p>Niniejsze Warunki podlegają prawu siedziby <?= e(SITE_NAME) ?>, bez względu na normy kolizyjne.</p>

    <h2>14. Zmiany</h2>
    <p>Niniejsze Warunki możemy od czasu do czasu zmieniać. Dalsze korzystanie z usług po zmianie oznacza akceptację zaktualizowanych Warunków.</p>

    <h2>15. Kontakt</h2>
    <p>Pytania do niniejszych Warunków można przesłać przez stronę kontaktową.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Powrót na stronę główną</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

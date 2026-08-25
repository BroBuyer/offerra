<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Zgłoś nadużycie ᐉ ' . SITE_NAME;
$page_description = 'Zgłoś nadużycie — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Zaufanie i bezpieczeństwo</span>
    <h1>Zgłoś nadużycie</h1>
    <p class="rmct9">Pomóż utrzymać <?= e(SITE_NAME) ?> w bezpieczeństwie. Zgłoś podejrzenie oszustwa, podszywania się lub nadużycia platformy albo marki.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Co zgłaszać</h2>
    <p>Prosimy zgłosić zespołowi Trust and Safety którekolwiek z poniższych:</p>
    <ul>
      <li>Wiadomości phishingowe, oszukańcze strony lub fałszywe aplikacje podszywające się pod <?= e(SITE_NAME) ?>.</li>
      <li>Konta w mediach społecznościowych, reklamy lub kanały, które nadużywają naszej nazwy, logo lub znaków towarowych.</li>
      <li>Podejrzenie przejęcia konta, nieuprawnionego dostępu lub kradzieży tożsamości.</li>
      <li>Podejrzane prośby o płatność, „agentów odzyskiwania” lub osoby trzecie twierdzące, że działają w naszym imieniu.</li>
      <li>Nadużycia rynkowe, obawy dotyczące prania pieniędzy lub jakakolwiek nielegalna działalność związana z naszymi usługami.</li>
      <li>Obraźliwe, groźne lub nękające zachowanie wobec pracowników lub użytkowników.</li>
    </ul>

    <h2>Jak zgłosić</h2>
    <p>Wyślij szczegółowe zgłoszenie dowolnym z kanałów poniżej. Jeśli to możliwe, podaj:</p>
    <ul>
      <li>Datę i godzinę zdarzenia.</li>
      <li>Adresy URL, zrzuty ekranu, nagłówki wiadomości, adresy nadawcy lub numery telefonu.</li>
      <li>Dane konta (jeśli zgłoszenie dotyczy Państwa konta).</li>
      <li>Jakikolwiek inny kontekst, który pomoże w wyjaśnieniu.</li>
    </ul>

    <div class="ziavo">
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>E-mail Trust and Safety</b>
        <span>Zespół Trust and Safety można zastać przez stronę kontaktową. Zgłoszenia sortujemy w ciągu jednego dnia roboczego.</span>
      </div>
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Zgłoszenie luki bezpieczeństwa</b>
        <span>W sprawie odpowiedzialnego zgłoszenia luk w naszych systemach prosimy o kontakt, zanim szczegóły trafią do publicznej wiadomości.</span>
      </div>
    </div>

    <h2>Co dalej?</h2>
    <p>Każde zgłoszenie rozpatrujemy. W zależności od charakteru możemy poprosić o dodatkowe informacje, współpracować z dostawcami płatności lub hostingiem przy usuwaniu oszukańczych treści albo przekazać sprawę organom. Zgłoszenia traktujemy poufnie i, gdzie prawo na to pozwala, chronimy tożsamość zgłaszających.</p>

    <h2>Sprawy pilne</h2>
    <p>Jeśli uważają Państwo, że stali się ofiarą przestępstwa, skontaktujcie się z lokalną policją i jednocześnie z nami. Jeśli jest podejrzenie kompromitacji konta, natychmiast zmień hasło i od razu nas powiadom.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Skontaktuj się z Trust and Safety</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Powrót na stronę główną</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

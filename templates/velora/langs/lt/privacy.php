<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Privatumo politika');
$page_description = 'Sužinokite kaip' . SITE_NAME . 'renka, naudoja ir saugo jūsų asmens duomenis.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Privatumo politika</h1>
      <p class="lead">Paskutinį kartą atnaujinta:<?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Šioje privatumo politikoje aprašoma, kaip<?= e(SITE_NAME) ?>(„mes“, „mes“) renka ir tvarko asmeninę informaciją, kai naudojatės mūsų svetaine ir paslaugomis.</p>

      <h2>Informacija, kurią renkame</h2>
      <p>Galime rinkti: vardą, pavardę, el. pašto adresą, telefono numerį, gyvenamąją šalį, IP adresą ir informaciją, kurią pateikiate naudodami formas arba pagalbos prašymus.</p>

      <h2>Kaip mes naudojame jūsų informaciją</h2>
      <ul>
        <li>Norėdami sukurti ir valdyti savo paskyrą</li>
        <li>Suteikti prieigą prie prekybos platformos ir klientų aptarnavimo</li>
        <li>Vykdyti teisinius ir reguliavimo įsipareigojimus</li>
        <li>Siekdami pagerinti savo paslaugas ir užkirsti kelią sukčiavimui</li>
      </ul>

      <h2>Duomenų saugumas</h2>
      <p>Siekdami apsaugoti jūsų duomenis, įgyvendiname technines ir organizacines priemones, įskaitant SSL šifravimą ir prieigos kontrolę.</p>

      <h2>Jūsų teisės</h2>
      <p>Priklausomai nuo jūsų jurisdikcijos, galite turėti teisę pasiekti, taisyti arba ištrinti savo asmeninius duomenis. Susisiekite<?= e(SUPPORT_EMAIL) ?>pasinaudoti šiomis teisėmis.</p>

      <h2>Susisiekite</h2>
      <p>Turite klausimų apie šią politiką? El. paštas<a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

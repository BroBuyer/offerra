<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrati');
$page_description = 'Crea il tuo account ' . SITE_NAME . ' e inizia a fare trading con una guida IA chiara.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Inizia</p>
      <h1>Crea il tuo account</h1>
      <p class="lead">Deposito minimo <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Meno di 3 minuti.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Inserisci i tuoi dati';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

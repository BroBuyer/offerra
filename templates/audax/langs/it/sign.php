<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Apri il tuo conto ' . SITE_NAME;
$page_description = 'Crea il tuo conto ' . SITE_NAME . ' ' . geo_in() . ' e inizia con ' . money_min() . '. L’iscrizione richiede meno di un minuto.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$page_css = [];
$page_js = [];
$page_has_form = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h1>Apri il tuo conto <?= e(SITE_NAME) ?></h1>
              <p>
                Compila il modulo: uno specialista ti contatterà per aprire il conto. Il
                minimo per iniziare è di <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Iscriviti';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Inserendo i tuoi dati personali e cliccando sul pulsante «Iscriviti»,
                confermi di accettare i
                <a href="<?= page_url('conditions.php') ?>">Termini e condizioni</a> e l’
                <a href="<?= page_url('privacy.php') ?>">Informativa sulla privacy</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

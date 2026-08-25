<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Inscription ' . SITE_NAME;
$page_description = 'Ouvrir votre compte chez ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Commencer</span>
    <h1>Ouvrir votre compte</h1>
    <p class="kpnq92g">Quelques informations pour démarrer, puis un spécialiste prend le relais. Aucun paiement n’est demandé à cette étape.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>La suite</h2>
    <ol class="nxlk2qu">
      <li><h3>Vous envoyez le formulaire</h3><p>Cela prend quelques minutes et ne coûte rien.</p></li>
      <li><h3>Un spécialiste vous appelle</h3><p>Il confirme vos informations, répond aux questions et explique l’étape suivante. Aucune pression pour déposer.</p></li>
      <li><h3>Vous vérifiez votre identité et choisissez un montant</h3><p>Ce n’est qu’alors que de l’argent circule, et uniquement le montant que vous choisissez.</p></li>
    </ol>
    <p class="jkkyl">Investir comporte des risques, y compris la perte possible d’une partie ou de la totalité du capital investi. La valeur des investissements peut baisser comme augmenter, et vous pouvez récupérer moins que ce que vous avez versé. N’investissez pas d’argent que vous ne pouvez pas vous permettre de perdre.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Commencer — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">FAQ</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Ce dont vous avez besoin</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Une adresse e-mail que vous consultez vraiment.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un numéro de téléphone, pour qu’un spécialiste puisse vous joindre.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Une pièce d’identité, pour l’étape de vérification plus tard.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Ce qui se passe après l’envoi du formulaire</h2>
    <h3>L’appel de vérification</h3>
    <p>Un spécialiste appelle pour confirmer les informations que vous avez envoyées, répondre aux questions et convenir d’un montant de départ raisonnable pour vous. L’appel est une conversation, pas un script commercial : un compte ouvert sur des attentes irréalistes ne sert à personne.</p>
    <h4>Combien de temps cela prend</h4>
    <p>En général un appel de dix à quinze minutes. Si vous préférez être appelé à une heure précise, indiquez-le dans le formulaire : ce créneau est respecté.</p>
    <h3>Les contrôles d’identité expliqués</h3>
    <p>Avant le premier dépôt, on vous demandera une pièce d’identité photo et un document récent indiquant votre adresse. C’est la même exigence que pour tout service financier réglementé, et elle existe pour qu’un retrait ne puisse jamais revenir qu’à vous.</p>
    <h4>Ce qui est accepté</h4>
    <p>Un passeport ou une carte nationale d’identité, et une facture ou un relevé bancaire datant de moins de trois mois. Une photo nette prise avec un téléphone suffit.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Ouvrir votre compte</h2>
      <p class="pt6joj">Commencez en quelques minutes.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Commencer';
  $form_class = 'leadform lead-form solano-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

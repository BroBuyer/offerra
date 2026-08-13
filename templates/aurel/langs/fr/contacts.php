<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Contact ' . SITE_NAME . ' ᐉ Nous sommes là pour vous aider';
$page_description = 'Une question sur ' . SITE_NAME . ' ou sur votre compte ?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Contact</span>
    <h1>Nous sommes là pour vous aider</h1>
    <p class="kpnq92g">Une question sur <?= e(SITE_NAME) ?> ou sur votre compte ? Notre équipe d’assistance se fera un plaisir de vous aider. Écrivez-nous et nous vous répondrons dès que possible.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Avant de nous écrire</h2>
    <p>La plupart des questions ont déjà une réponse sur le site, et vérifier d’abord est en général plus rapide que d’attendre une réponse.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">FAQ</a> — coûts, retraits, vérification et montants minimums.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Comment ça marche</a> — ce qui se passe après l’inscription, étape par étape.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Tarifs</a> — ce qui est gratuit et où un coût peut apparaître.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Commencer — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Comment nous contacter</h2>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Canal</th><th scope="col">Idéal pour</th><th scope="col">Réponse</th></tr></thead>
      <tbody>
        <tr><td>Assistance e-mail — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Questions de compte, vérification, retraits</td><td>Nous répondons en général sous un jour ouvré.</td></tr>
        <tr><td>Demande de rappel</td><td>Tout ce qui s’explique plus facilement par téléphone</td><td>Horaires d’assistance : du lundi au vendredi, de 9 h à 18 h</td></tr>
        <tr><td>Signalement d’abus — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Usurpation, usage abusif de la marque, messages suspects</td><td>Examiné dès réception</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>À quoi s’attendre lorsque vous nous contactez</h2>
    <h3>Quel canal utiliser</h3>
    <p>L’e-mail est le bon choix pour tout ce qui comporte une pièce jointe : contrôles d’identité, questions de retrait, interrogations sur un relevé. Le formulaire de rappel convient au reste, car la plupart des questions de compte se règlent plus vite en deux minutes de conversation qu’en quatre messages.</p>
    <h4>En dehors des horaires d’assistance</h4>
    <p>Les messages envoyés le soir ou le week-end restent dans la file et sont traités en premier le jour ouvré suivant, dans l’ordre d’arrivée.</p>
    <h3>Les informations utiles à indiquer</h3>
    <p>L’e-mail d’inscription et la date approximative de ce dont vous parlez suffisent pour retrouver le compte. N’envoyez jamais un mot de passe, un numéro de carte complet ou un code à usage unique : aucun membre de notre équipe ne vous les demandera.</p>
    <h4>Si quelque chose ne vous semble pas normal</h4>
    <p>Signalez-le le jour même. Tout ce qui concerne un paiement que vous ne reconnaissez pas est traité immédiatement, sans attendre dans la file habituelle.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Merci ᐉ ' . SITE_NAME;
$page_description = 'Votre demande a bien été reçue par l’équipe ' . SITE_NAME . '.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Message reçu</span>
      <h1>Merci — nous vous recontacterons</h1>
      <p>Votre demande a bien été reçue par l’équipe <?= e(SITE_NAME) ?>. Un spécialiste vous recontactera sous peu pour vous aider à commencer. En attendant, n’hésitez pas à explorer la plateforme.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Retour à l’accueil</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Explorer la plateforme</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

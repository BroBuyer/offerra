<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Signaler un abus ᐉ ' . SITE_NAME;
$page_description = 'Signaler un abus — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Confiance et sécurité</span>
    <h1>Signaler un abus</h1>
    <p class="rmct9">Aidez-nous à protéger <?= e(SITE_NAME) ?>. Signalez une fraude suspecte, une usurpation d’identité ou un usage abusif de notre plateforme ou de notre marque.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Que signaler</h2>
    <p>Veuillez signaler à notre équipe Confiance et sécurité l’un des cas suivants :</p>
    <ul>
      <li>E-mails d’hameçonnage, sites frauduleux ou applications fictives se faisant passer pour <?= e(SITE_NAME) ?>.</li>
      <li>Comptes de réseaux sociaux, publicités ou canaux de messagerie qui abusent de notre nom, de notre logo ou de nos marques.</li>
      <li>Prise de contrôle de compte suspectée, accès non autorisé ou vol d’identité.</li>
      <li>Demandes de paiement suspectes, « agents de recouvrement » ou tiers prétendant agir en notre nom.</li>
      <li>Abus de marché, soupçons de blanchiment d’argent ou toute activité illégale liée à nos services.</li>
      <li>Comportement abusif, menaçant ou harcelant envers notre personnel ou nos utilisateurs.</li>
    </ul>

    <h2>Comment signaler</h2>
    <p>Envoyez-nous un signalement détaillé par l’un des canaux ci-dessous. Si possible, joignez :</p>
    <ul>
      <li>La date et l’heure de l’incident.</li>
      <li>Les URL, captures d’écran, en-têtes de messages, adresses d’expéditeur ou numéros de téléphone.</li>
      <li>Les informations de votre compte (si le signalement concerne votre compte).</li>
      <li>Tout autre contexte susceptible de nous aider à enquêter.</li>
    </ul>

    <div class="ziavo">
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>E-mail Confiance et sécurité</b>
        <span>Utilisez la page de contact pour joindre notre équipe Confiance et sécurité. Les signalements sont triés sous un jour ouvré.</span>
      </div>
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Divulgation de sécurité</b>
        <span>Pour une divulgation responsable de vulnérabilités de sécurité touchant nos systèmes, contactez-nous avant de partager les détails publiquement.</span>
      </div>
    </div>

    <h2>Que se passe-t-il ensuite ?</h2>
    <p>Nous examinons chaque signalement. Selon la nature du problème, nous pouvons vous contacter pour plus d’informations, travailler avec des prestataires de paiement ou des hébergeurs pour retirer un contenu frauduleux, ou saisir les forces de l’ordre ou les autorités. Nous traitons les signalements de façon confidentielle et, lorsque la loi le permet, nous protégeons l’identité des personnes qui signalent.</p>

    <h2>Situations urgentes</h2>
    <p>Si vous pensez avoir été victime d’une infraction, contactez également les autorités locales, en plus de nous en informer. Si vous soupçonnez que votre compte a été compromis, changez votre mot de passe immédiatement et prévenez-nous sans délai.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Contacter Confiance et sécurité</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Retour à l’accueil</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

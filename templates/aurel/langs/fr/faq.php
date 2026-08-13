<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'FAQ ' . SITE_NAME;
$page_description = 'Des questions, des réponses claires — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Questions</span>
    <h1>Des questions, des réponses claires</h1>
    <p class="kpnq92g">Ce que les gens demandent avant d’ouvrir un compte, et les réponses que nous vous donnerions au téléphone.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Questions sur l’argent</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name"><?= e(SITE_NAME) ?> est-il une arnaque ?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Non : <?= e(SITE_NAME) ?> fonctionne avec des contrôles de vérification, publie intégralement ses conditions et son avertissement sur les risques, et les retraits reviennent toujours vers le moyen de paiement d’origine. Cela dit, tout investissement comporte un risque réel et aucune plateforme sérieuse ne promet de rendements garantis — méfiez-vous de quiconque le fait.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Combien coûte l’ouverture d’un compte ?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ouvrir un compte est gratuit. Il n’y a ni frais d’inscription ni abonnement ; vous ne versez que le montant que vous choisissez d’investir.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Combien de temps prennent les retraits ?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Les demandes sont traitées les jours ouvrés et renvoyées vers le moyen avec lequel vous avez déposé. Les virements bancaires prennent plus de temps que les cartes ou les portefeuilles électroniques.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Y a-t-il un montant minimum ?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Oui, et il est volontairement bas, à partir de <?= e(money_min()) ?>, pour que vous puissiez commencer petit et ajouter davantage plus tard. Le montant exact s’affiche avant que vous confirmiez quoi que ce soit.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Questions fréquentes</h2>
    <div class="fjl4d">
      <details open><summary>Quel est le dépôt minimum pour commencer ?</summary><p>Vous pouvez ouvrir et alimenter votre compte à partir de <?= e(money_min()) ?> minimum. Vous êtes libre d’ajouter davantage de fonds au fur et à mesure de votre plan d’investissement.</p></details>
      <details><summary>Comment fonctionnent les retraits ?</summary><p>Demandez un retrait à tout moment depuis votre tableau de bord. Les fonds reviennent vers le moyen de paiement que vous avez choisi, avec les délais de traitement habituels.</p></details>
      <details><summary>Mon argent est-il conservé en sécurité ?</summary><p>Les comptes sont protégés par une sécurité de niveau professionnel et des contrôles d’identité. Comme pour tout investissement, votre capital est à risque et les valeurs peuvent baisser comme augmenter.</p></details>
      <details><summary>Combien de temps faut-il pour commencer à investir ?</summary><p>La plupart des membres terminent l’inscription en quelques minutes. Une fois votre premier dépôt traité, vous pouvez activer un plan immédiatement.</p></details>
      <details><summary>Y a-t-il des frais cachés ?</summary><p>Tous les coûts sont affichés de façon transparente avant que vous vous engagiez. Vous verrez toujours ce qui s’applique à votre plan, sans surprise.</p></details>
      <details><summary>Quel est l’âge minimum pour s’inscrire ?</summary><p>Vous devez avoir au moins 18 ans pour ouvrir un compte et investir. Une vérification peut être demandée pour confirmer votre âge et votre identité.</p></details>
      <details><summary>Quels moyens de paiement sont acceptés ?</summary><p>Les moyens courants comme les cartes de débit et de crédit, les virements bancaires, certains portefeuilles électroniques et les cryptomonnaies sont acceptés. Les options exactes s’affichent à l’étape du dépôt.</p></details>
      <details><summary>Quand l’assistance client est-elle disponible ?</summary><p>Notre équipe d’assistance est disponible du lundi au vendredi, de 9 h à 18 h, et s’engage à répondre à chaque demande sous un jour ouvré.</p></details>
      <details><summary>Comment sont gérés les impôts sur les plus-values ?</summary><p>Les impôts sur les plus-values d’investissement dépendent des règles de votre pays et relèvent de votre responsabilité. Nous vous recommandons de conserver vos propres justificatifs et de consulter un conseiller fiscal qualifié.</p></details>
      <details><summary>Qu’est-ce que la vérification KYC et pourquoi est-elle exigée ?</summary><p>Le KYC (Know Your Customer, « connaissance du client ») est un contrôle standard de votre identité. Il contribue à sécuriser les comptes et fait partie du processus habituel d’ouverture d’un compte d’investissement.</p></details>
      <details><summary>Ai-je besoin d’une expérience préalable en investissement ?</summary><p>Non. Chaque membre dispose d’un analyste financier personnel qui vous guide à chaque étape, vous n’avez donc pas besoin de connaître déjà les marchés.</p></details>
      <details><summary>Qui gère mes investissements ?</summary><p>Un analyste financier dédié, appuyé par des outils d’IA, qui travaille selon vos objectifs et votre niveau de risque. L’analyste combine expertise professionnelle et technologie — les décisions restent humaines.</p></details>
      <details><summary>La plateforme respecte-t-elle les normes réglementaires ?</summary><p>Oui — elle répond aux normes financières et de cybersécurité nationales, avec protection du compte et vérification intégrées.</p></details>
      <details><summary>Puis-je ajouter davantage de fonds plus tard ?</summary><p>Oui. Vous pouvez alimenter votre compte à tout moment et ajuster votre plan avec votre analyste au fil de l’évolution de vos objectifs.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Compte et sécurité</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Comment fonctionne la connexion sur <?= e(SITE_NAME) ?> ?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Vous vous connectez avec l’e-mail et le mot de passe enregistrés, depuis le site ou un navigateur mobile. Si vous avez activé la vérification en deux étapes, un code supplémentaire vous sera demandé ; si vous oubliez votre mot de passe, vous pouvez le réinitialiser depuis l’écran de connexion lui-même.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Pourquoi avez-vous besoin de mes documents d’identité ?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">La vérification est exigée avant qu’un compte puisse faire circuler des fonds. Elle empêche aussi quelqu’un d’autre d’ouvrir un compte à votre nom.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Ai-je besoin d’une expérience préalable ?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Non. La plupart des membres commencent sans aucune. Un spécialiste vous accompagne pour les premières étapes, et un solde de démonstration vous permet de vous exercer.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Puis-je l’utiliser sur un téléphone ?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Oui, la plateforme fonctionne dans un navigateur mobile, sans rien à installer.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Commencer — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Envoyer un message</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

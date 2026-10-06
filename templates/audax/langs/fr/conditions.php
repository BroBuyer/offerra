<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Conditions d’utilisation | ' . SITE_NAME;
$page_description = 'Conditions d’utilisation de la plateforme ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Conditions d’utilisation</h1>
            <p class="bold-title">1. Introduction</p>
            <p>1.1. L’acceptation de ces conditions est requise pour utiliser nos services.</p>
            <p>1.2. Ces conditions constituent un accord juridiquement contraignant.</p>
            <p>1.3. La poursuite de l’usage du site vaut acceptation des conditions.</p>
            <p>
              1.4. Pour toute question, vous pouvez nous écrire à
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Droit d’utilisation</p>
            <p>2.1. Vous devez avoir au moins 18 ans pour utiliser les services.</p>
            <p>2.1.1. Vous devez résider dans un pays où les services sont licites.</p>
            <p>2.1.2. Vous ne devez figurer sur aucune liste de sanctions.</p>
            <p>2.1.3. Vous devez avoir la capacité juridique de contracter.</p>
            <p>2.2. Nous ne sommes pas responsables d’un usage par des personnes non éligibles.</p>
            <p class="bold-title">3. Compte utilisateur</p>
            <p>3.1. Vous êtes responsable de la sécurité de votre compte.</p>
            <p>3.2. Ne communiquez pas votre mot de passe à des tiers.</p>
            <p class="bold-title">4. Activités interdites</p>
            <p>4.1. L’usage des services à des fins illicites n’est pas autorisé.</p>
            <p>4.1.1. Le blanchiment d’argent est strictement interdit.</p>
            <p>4.1.2. Toute fraude sera signalée aux autorités compétentes.</p>
            <p>4.1.3. L’usage de robots ou de logiciels d’automatisation n’est pas autorisé.</p>
            <p>4.1.4. Toute tentative de manipulation du système fera l’objet d’une enquête.</p>
            <p>4.1.5. La diffusion de fausses informations est interdite.</p>
            <p>4.1.6. Toute tentative d’entraver une enquête n’est pas autorisée.</p>
            <p>4.1.7. Les menaces envers d’autres utilisateurs sont interdites.</p>
            <p>4.1.8. Toute activité illicite sera sanctionnée.</p>
            <p>4.1.9. Toute tentative de contourner les règles n’est pas autorisée.</p>
            <p>4.1.10. Toute tentative d’abus du système est prise au sérieux.</p>
            <p class="bold-title">5. Propriété intellectuelle</p>
            <p>5.1. L’ensemble du contenu du site est notre propriété intellectuelle.</p>
            <p>5.2. Les utilisateurs n’acquièrent aucun droit sur le contenu du site.</p>
            <p>5.3. Le contenu ne peut être copié sans autorisation.</p>
            <p>5.4. Les tiers ne sont pas autorisés à modifier le contenu.</p>
            <p class="bold-title">6. Limitation de responsabilité</p>
            <p>6.1. L’usage des services se fait à vos propres risques.</p>
            <p>6.2. Nous ne sommes pas responsables des pertes liées à l’usage des services.</p>
            <p>6.3. Toute perte liée à l’usage du site relève de la responsabilité de l’utilisateur.</p>
            <p>6.4. Nous n’acceptons aucune responsabilité pour les dommages liés à l’usage du site.</p>
            <p>6.5. Les problèmes techniques ne relèvent pas de notre responsabilité.</p>
            <p class="bold-title">7. Informations</p>
            <p>7.1. En utilisant les services, vous acceptez d’être contacté.</p>
            <p>7.2. Les informations sont traitées de manière confidentielle.</p>
            <p>7.3. Il est conseillé aux utilisateurs de conserver leurs justificatifs.</p>
            <p class="bold-title">8. Liens et ressources complémentaires</p>
            <p>8.1. Pour plus d’informations, consultez nos politiques.</p>
            <p>8.2. Les liens externes ne valent pas approbation.</p>
            <p>8.3. Nous recommandons de vérifier les sources avant usage.</p>
            <p class="bold-title">9. Dispositions générales</p>
            <p>9.1. Nous nous réservons le droit de modifier les services à tout moment.</p>
            <p>9.2. Les conditions peuvent évoluer à tout moment.</p>
            <p>9.3. En utilisant les services, vous acceptez ces conditions.</p>
            <p>9.4. Les accords oraux ne sont pas valables.</p>
            <p>9.5. Les droits non exercés ne sont pas réputés abandonnés.</p>
            <p>
              9.6. Si une disposition est déclarée nulle, les autres restent en vigueur.
            </p>
            <p>9.7. Les services peuvent être gérés par des prestataires externes.</p>
            <p>
              9.8. Le droit applicable <?= e(geo_in()) ?> régit ces conditions. Tout litige sera soumis au
              tribunal compétent <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

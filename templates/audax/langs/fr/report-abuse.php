<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Signaler un abus | ' . SITE_NAME;
$page_description = 'Signalez un abus ou une activité suspecte sur ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Signaler un abus</h1>
            <p class="bold-title">1. Signalement d’un abus</p>
            <p>
              1.1. Si vous avez rencontré un contenu inapproprié sur notre site, merci de nous le signaler
              via notre formulaire de contact.
            </p>
            <p>Contactez-nous : <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. Dans cette section, vous pouvez décrire tout comportement abusif ou tout contenu
              qui enfreint nos règles.
            </p>
            <p>
              1.3. Votre signalement compte pour nous. Merci de fournir des éléments précis afin que nous puissions
              enquêter correctement sur les faits.
            </p>
            <p>En envoyant un signalement, vous acceptez également notre politique de confidentialité.</p>
            <p class="bold-title">2. Qui peut signaler</p>
            <p>
              2.1. Si vous êtes victime d’un abus ou si vous constatez un comportement inapproprié, vous
              avez le droit de le signaler.
            </p>
            <p>2.1.1. Vous devez avoir au moins 18 ans pour déposer un signalement.</p>
            <p>2.1.2. Votre signalement doit être sincère et fondé sur des faits.</p>
            <p>2.1.3. L’usage du formulaire de signalement doit être licite dans votre pays.</p>
            <p>2.2. Nous ne sommes pas responsables des signalements faux ou malveillants.</p>
            <p class="bold-title">3. Procédure de signalement</p>
            <p>3.1. Nous nous réservons le droit d’examiner tous les signalements d’abus.</p>
            <p>3.2. Si un signalement est jugé fondé, nous prendrons les mesures nécessaires.</p>
            <p class="bold-title">4. Activités interdites lors d’un signalement</p>
            <p>4.1. L’usage du formulaire à des fins malveillantes n’est pas autorisé.</p>
            <p>4.1.1. Les signalements faux ou trompeurs ne sont pas autorisés.</p>
            <p>4.1.2. Le harcèlement d’autres utilisateurs via le système de signalement n’est pas autorisé.</p>
            <p>4.1.3. L’usage de robots ou d’automatisation pour déposer des signalements est interdit.</p>
            <p>4.1.4. Toute tentative de manipulation du système de signalement fera l’objet d’une enquête.</p>
            <p>4.1.5. L’usage du système pour diffuser de fausses informations est interdit.</p>
            <p>4.1.6. Toute tentative d’entraver une enquête n’est pas autorisée.</p>
            <p>4.1.7. L’usage du système pour proférer des menaces n’est pas autorisé.</p>
            <p>4.1.8. Toute activité illicite liée au signalement sera sanctionnée.</p>
            <p>4.1.9. Toute tentative de contourner les règles de signalement n’est pas autorisée.</p>
            <p>4.1.10. Toute tentative d’abus du système de signalement est prise au sérieux.</p>
            <p class="bold-title">5. Droits de propriété intellectuelle lors du signalement</p>
            <p>
              5.1. Le contenu que vous transmettez en signalant un abus ne vous confère aucun droit de propriété.
            </p>
            <p>5.2. Les utilisateurs n’acquièrent aucun droit sur le contenu du site en déposant un signalement.</p>
            <p>5.3. Les signalements sont utilisés exclusivement à des fins d’enquête.</p>
            <p>5.4. Les tiers ne peuvent ni copier ni modifier les signalements.</p>
            <p class="bold-title">6. Limitation de responsabilité lors du signalement</p>
            <p>6.1. En déposant un signalement, vous assumez la responsabilité de son contenu.</p>
            <p>6.2. Nous ne sommes pas responsables des conséquences des signalements déposés.</p>
            <p>6.3. Toute perte découlant d’un signalement relève de la responsabilité de l’utilisateur.</p>
            <p>6.4. Nous n’acceptons aucune responsabilité pour les dommages causés par des signalements.</p>
            <p>
              6.5. Les problèmes techniques liés au système de signalement ne relèvent pas de notre responsabilité.
            </p>
            <p class="bold-title">7. Informations sur la procédure de signalement</p>
            <p>
              7.1. En utilisant le système de signalement, vous acceptez que nous puissions vous contacter pour obtenir plus d’informations.
            </p>
            <p>7.2. Les signalements sont traités de manière confidentielle.</p>
            <p>7.3. Il est conseillé aux utilisateurs de conserver une copie de leurs signalements.</p>
            <p class="bold-title">8. Liens et ressources complémentaires</p>
            <p>8.1. Pour en savoir plus sur le signalement d’un abus, consultez nos politiques.</p>
            <p>8.2. Les liens vers des sources externes ne valent pas approbation de notre part.</p>
            <p>8.3. Nous vous conseillons de vérifier chaque source avant de l’utiliser.</p>
            <p class="bold-title">9. Dispositions générales relatives aux signalements</p>
            <p>
              9.1. Nous nous réservons le droit de modifier, suspendre ou interrompre la procédure de signalement
              à tout moment.
            </p>
            <p>
              9.2. Les conditions de cette procédure peuvent évoluer à tout moment. La poursuite de l’usage
              du service de signalement après ces changements vaut acceptation des nouvelles conditions.
            </p>
            <p>9.3. En déposant un signalement, l’utilisateur accepte pleinement ces conditions.</p>
            <p>
              9.4. Tout accord ou déclaration, écrit ou oral, qui n’entre pas dans les
              points précis de ces conditions est juridiquement nul et n’engage aucune des parties.
            </p>
            <p>
              9.5. Tout droit conféré par ces conditions et non exercé, que ce soit par consentement,
              négligence ou impossibilité, est réputé abandonné. L’exercice partiel ou total d’un droit
              n’exclut ni ne limite son exercice ultérieur.
            </p>
            <p>
              9.6. Si un tribunal compétent déclare nulle une disposition de ces conditions, elle sera
              réputée nulle. Le reste des conditions demeure toutefois pleinement en vigueur.
            </p>
            <p>
              9.7. Il est entendu que ces conditions permettent l’exploitation du site par des tiers,
              qui peuvent céder leurs droits et obligations. L’utilisateur ne peut pas céder
              ses droits et obligations à un tiers.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

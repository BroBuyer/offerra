<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Politique de confidentialité | ' . SITE_NAME;
$page_description = 'Politique de confidentialité de ' . SITE_NAME . '.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Politique de confidentialité</h1>
            <p>
              Vos données personnelles et vos actifs sont pour nous d’une importance capitale. Nous nous
              engageons pleinement à les protéger.
            </p>
            <p>
              <?= e(SITE_NAME) ?> collecte et conserve les données essentielles à vos opérations de trading. Les
              modalités de cette collecte et de cette conservation sont décrites dans la présente politique.
            </p>
            <p>Notre politique repose sur les principes suivants :</p>
            <p class="circle">
              Dans le but d’assurer une transparence maximale sur nos processus de collecte et de
              conservation de vos données personnelles :
            </p>
            <p>
              Notre objectif est que vous compreniez comment nous collectons et traitons vos données, afin que vous puissiez
              décider en connaissance de cause. Nous appliquons des règles et des processus clairs pour le traitement des données sur
              ce site. Notre politique décrit en détail les méthodes que nous employons pour vous donner
              une information claire et concrète sur l’usage des données. C’est vous qui décidez.
            </p>
            <p>
              Nous vous informerons sans délai lorsque nous l’estimerons nécessaire. La transparence est pour nous
              d’une importance fondamentale.
            </p>
            <p>
              Notre équipe spécialisée reste disponible pour répondre à toutes vos questions sur n’importe quel aspect
              de nos processus, y compris nos obligations au titre du droit <?= e(geo_in()) ?> et des règlements
              européens. Vous pouvez nous écrire à :
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Aucun autre usage des données personnelles n’est autorisé de notre part, sauf dans les cas prévus par notre
              politique de confidentialité.
            </p>
            <p>
              Nous pouvons traiter des données personnelles aux fins suivantes, notamment pour assurer le bon
              fonctionnement des services <?= e(SITE_NAME) ?> et pour mettre en relation les membres avec des plateformes
              de trading tierces. Le traitement peut aussi être nécessaire pour maintenir et améliorer
              les fonctionnalités et services du site ; pour protéger nos droits et pour satisfaire aux obligations légales et
              autres. Enfin, ces données sont utilisées, le cas échéant, pour assurer les fonctions administratives
              et opérationnelles liées aux services qui vous sont fournis.
            </p>
            <p>
              Pour proposer des services plus adaptés à vos préférences et à vos besoins, <?= e(SITE_NAME) ?>
              utilise des données personnelles.
            </p>
            <p class="circle">
              Dans le but d’utiliser les outils indispensables pour protéger vos données personnelles et garantir vos
              droits à leur égard :
            </p>
            <p>
              Vous pouvez à tout moment nous contacter et accéder à l’ensemble de vos données personnelles. Nous pouvons aussi
              les modifier ou les supprimer si nécessaire. Nous traitons également les demandes de transfert de ces
              données vers vous ou un tiers que vous désignez. Nous proposons ce service pour que vous puissiez
              exercer pleinement vos droits de confidentialité et de contrôle.
            </p>
            <p class="circle">Protégez vos données personnelles :</p>
            <p>
              Nos systèmes de sécurité sont d’un très haut niveau et intègrent des mesures de niveau bancaire. Même si
              une protection absolue ne peut être garantie, nous nous engageons à maintenir en permanence nos
              systèmes au plus haut niveau et à renforcer les mesures déjà en place.
            </p>
            <p>
              Nous disposons de politiques de confidentialité détaillées et de systèmes de sécurité de premier plan.
            </p>
            <p class="bold-title">1. Champ d’application</p>
            <p>
              La présente politique décrit nos procédures de collecte, de traitement et de communication de
              toutes les données relatives à des personnes physiques.
            </p>
            <p>
              Les dispositions de notre politique s’appliquent à toutes les personnes physiques identifiables ou
              identifiées. Elles concernent notamment toute personne physique identifiable à partir de
              données qui nous sont confiées, auxquelles nous avons accès et/ou que nous pouvons combiner.
            </p>
            <p>
              Le traitement des données, au sens de la politique de confidentialité, inclut notamment la conservation,
              la gestion et l’organisation des données personnelles.
            </p>
            <p>
              Nous ne collectons ni n’essayons de collecter d’informations sur les personnes de moins de 18 ans.
              Nous n’autorisons pas non plus les mineurs de moins de 18 ans à utiliser notre plateforme, à quelque
              fin que ce soit. Si nous constatons qu’un utilisateur a moins de 18 ans, nous supprimerons ces données immédiatement.
              immediately.
            </p>
            <p class="bold-title">2. Quelles données personnelles collectons-nous ?</p>
            <p>
              Lors de l’inscription, nous collectons les données personnelles nécessaires à l’usage de nos services. Si besoin,
              nous pouvons aussi demander des données pour vérification, par exemple pour
              confirmer que le compte vous appartient. Pour améliorer et maintenir la qualité de nos
              services, nous collectons et analysons des informations sur votre usage de la plateforme et
              des services tiers associés.
            </p>
            <p class="bold-title">
              3. Vous n’êtes en aucun cas tenu de nous communiquer vos données personnelles.
              company.
            </p>
            <p>
              Même si vous n’êtes pas tenu de nous transmettre vos données, le choix de ne pas le faire
              peut limiter la fourniture de nos services. Cela peut aussi entraîner
              des limitations d’usage de la plateforme.
            </p>
            <p class="bold-title">
              4. Quelles données personnelles collectons-nous ? En accédant à notre site, nous pouvons collecter les
              données personnelles suivantes :
            </p>
            <p>
              Nous ne collectons pas de données qui permettent de vous identifier personnellement. Nous collectons des informations telles que
              l’activité de votre compte, les adresses IP et les dates et heures d’accès. Pour la maintenance,
              la sécurité et l’assistance, nous conservons les rapports d’erreur, les informations de navigateur et le type
              d’appareil utilisé pour accéder à votre compte. Nous enregistrons aussi la langue définie sur votre compte.
              account.
            </p>
            <p>
              S’agissant des données personnelles, nous collectons et conservons uniquement les informations
              que vous fournissez en vous connectant à une plateforme de trading tierce via nos services.
            </p>
            <p>
              Les données personnelles communiquées à des plateformes tierces peuvent notamment comprendre :
              nom et prénom, adresse, numéro de téléphone et adresse e-mail.
            </p>
            <p class="bold-title">
              5. Pourquoi l’entreprise a-t-elle besoin de mes données et le traitement est-il licite ?
            </p>
            <p>
              L’entreprise collecte, conserve et traite vos données personnelles exclusivement pour les
              finalités prévues par la politique. Tous les usages et traitements décrits sont conformes au
              droit applicable <?= e(geo_in()) ?> et aux règlements européens.
            </p>
            <p>
              L’entreprise ne gère, ne traite ni ne transfère vos données que conformément à la
              réglementation applicable <?= e(geo_in()) ?>. Les bases juridiques pertinentes sont listées ci-dessous :
            </p>
            <p class="circle">
              Vous avez consenti à la conservation et au traitement de vos données personnelles par
              l’entreprise. En nous transmettant vos données, vous nous autorisez à les transmettre à la
              plateforme de trading tierce concernée. Vous avez également consenti au
              traitement de vos données personnelles pour une ou plusieurs finalités.
            </p>
            <p class="circle">
              Pour améliorer les services, pour exercer ou défendre des droits en justice, et pour protéger des intérêts
              légitimes, il peut notamment être nécessaire que l’entreprise conserve et
              traite vos données personnelles.
            </p>
            <p class="circle">Le traitement des données est nécessaire au respect d’obligations légales.</p>
            <p>
              Si vous souhaitez plus d’informations sur les traitements que l’entreprise est tenue
              d’effectuer, n’hésitez pas à nous écrire.
            </p>
            <p>
              Vous trouverez ci-dessous la liste des finalités précises et de la base juridique qui nous autorise
              à traiter vos données personnelles.
            </p>
            <p class="green">Finalité</p>
            <p class="green">Base juridique</p>
            <p>
              1. Pour faciliter votre accès au trading digital et, exclusivement à votre demande, nous
              partageons vos données personnelles avec des plateformes tierces. Vos données peuvent être collectées
              et partagées avec des tiers, exclusivement à votre demande et selon votre choix.
            </p>
            <p>
              Vous avez consenti au traitement de vos données personnelles pour une ou plusieurs finalités.
            </p>
            <p>
              2. Merci de nous transmettre les informations nécessaires afin que nous puissions répondre rapidement et
              efficacement à vos demandes, préoccupations et questions sur nos services.
            </p>
            <p>
              Pour la poursuite des intérêts légitimes de l’entreprise ou d’un tiers identifié,
              le traitement des données personnelles est nécessaire.
            </p>
            <p>
              3. Pour satisfaire à nos obligations légales et administratives, le traitement des données personnelles est nécessaire.
              necessary.
            </p>
            <p>Pour respecter nos obligations légales, nous devons traiter certaines données personnelles.</p>
            <p>
              4. Pour améliorer nos services, nous avons besoin de données anonymisées et devons suivre l’usage,
              y compris les rapports d’erreur.
            </p>
            <p>
              Pour la protection des intérêts légitimes de l’entreprise et des prestataires
              externes, le traitement et la conservation des données personnelles sont nécessaires.
            </p>
            <p>5. Cela est nécessaire pour prévenir la fraude et l’abus de notre service.</p>
            <p>
              Pour garantir les intérêts légitimes de l’entreprise et des prestataires tiers,
              le traitement et la conservation des données personnelles sont nécessaires.
            </p>
            <p>
              6. Les exigences de notre service nous obligent à suivre et à traiter des données pour
              le développement commercial, les décisions stratégiques, le suivi, la conformité réglementaire et
              d’autres activités opérationnelles.
            </p>
            <p>
              Dans le but de protéger les intérêts légitimes de l’entreprise et des prestataires
              externes, le traitement et la conservation des données personnelles sont nécessaires.
            </p>
            <p>
              7. Nous utilisons des outils statistiques et d’analyse de données pour éclairer les décisions sur un large
              éventail de nos services et dans la planification stratégique.
            </p>
            <p>
              Pour la protection des intérêts légitimes de l’entreprise et de nos prestataires
              externes, le traitement et la conservation des données personnelles sont nécessaires.
            </p>
            <p>
              8. Dans la mesure nécessaire pour protéger les droits, les biens et les intérêts de
              l’entreprise et des prestataires tiers, et conformément aux lois locales et
              règlements applicables, aux contrats et à nos propres conditions, nous pouvons traiter
              des données personnelles. Ce traitement n’a lieu que selon des procédures nécessaires et
              établies.
            </p>
            <p>
              Pour la protection des intérêts légitimes de l’entreprise et de chaque prestataire
              tiers, le traitement et la conservation des données personnelles sont nécessaires.
            </p>
            <p class="bold-title">6. Partage des données personnelles avec des tiers</p>
            <p>
              Pour la conservation et le traitement des adresses IP, pour les enquêtes et l’analyse d’usage,
              ainsi que pour d’autres services associés, l’entreprise peut partager des données anonymisées avec
              des prestataires externes.
            </p>
            <p>
              À votre demande, nous partagerons certaines données personnelles que vous nous avez transmises avec des
              prestataires externes. Dans ce cas, le traitement de vos données est soumis à la
              politique de confidentialité de cette entreprise. Cela peut inclure diverses plateformes de trading digital.
            </p>
            <p>
              Dans le but d’améliorer notre service client et d’optimiser nos services en général,
              l’entreprise peut partager des données personnelles avec ses sociétés affiliées et ses partenaires commerciaux.
              partners.
            </p>
            <p>
              Lorsque la loi l’exige ou pour protéger les droits et les biens de l’entreprise et des
              tiers concernés, nous pouvons communiquer des données aux autorités judiciaires ou de contrôle compétentes.
            </p>
            <p>
              Dans le cadre d’opérations structurantes, comme la cession de l’entreprise,
              une levée de fonds ou une demande de crédit, les données pertinentes peuvent être partagées
              de manière licite et adaptée. Cela vaut aussi pour les fusions, restructurations,
              regroupements ou insolvabilité de l’entreprise, conformément à la loi.
            </p>
            <p class="bold-title">7. Cookies et services tiers</p>
            <p>
              Pour l’analyse du site et en coopération avec des agences publicitaires, des cookies et d’autres
              technologies similaires peuvent être utilisés conformément à la loi et aux usages.
            </p>
            <p>
              Les cookies, petits fichiers texte enregistrés sur votre appareil lorsque vous visitez un site, servent à
              collecter des informations sur votre navigation, vos préférences et d’autres données. Leur
              objet est de personnaliser et d’améliorer votre expérience. Ils nous aident à mémoriser vos
              paramètres et préférences et à adapter notre offre. Ils servent aussi
              à l’analyse du site et à l’établissement de statistiques pour la planification.
            </p>
            <p>
              Ce site utilise généralement deux types de cookies : les cookies de session, conservés
              uniquement le temps de votre session et supprimés à la fermeture du navigateur ;
              et les cookies persistants, qui restent dans le navigateur après la fin de la session. Ces
              derniers permettent au site de vous reconnaître comme visiteur de retour et d’en faciliter l’usage.
            </p>
            <p class="bold-title">Types de cookies :</p>
            <p>Les cookies peuvent être utilisés selon les besoins, en fonction de leur finalité :</p>
            <p class="green">Type de cookie</p>
            <p>Ces cookies sont strictement nécessaires</p>
            <p class="green">Finalité</p>
            <p>
              Les cookies servent à vous identifier comme client, afin de vous fournir les informations,
              paramètres et services que vous avez demandés.
              Ils facilitent aussi la navigation sur le site et l’accès à celui-ci.
            </p>
            <p>
              Nous utilisons des cookies pour que votre appareil puisse télécharger et lire du contenu. Ils
              permettent aussi d’accéder aux fonctions essentielles et de revenir aux pages déjà visitées.
            </p>
            <p class="green">Informations complémentaires</p>
            <p>
              Pour un accès rapide et simple au site, les cookies stockent et traitent certaines
              données personnelles, comme le nom d’utilisateur et la date de dernier accès, si vous demandez au site de
              se souvenir de vous à la connexion.
            </p>
            <p>Les cookies de session sont supprimés à la fermeture du navigateur.</p>
            <p class="green">Type de cookie</p>
            <p>Cookies fonctionnels</p>
            <p class="green">Finalité</p>
            <p>
              Grâce aux cookies, nous pouvons enregistrer et appliquer vos paramètres et préférences en toute sécurité.
              Ils nous permettent aussi de vous reconnaître lorsque vous revenez sur le site.
            </p>
            <p class="green">Informations complémentaires</p>
            <p>
              Les cookies persistants restent enregistrés après la session et restent actifs jusqu’à
              leur date d’expiration.
            </p>
            <p class="green">Type de cookie</p>
            <p>Cookies de performance</p>
            <p class="green">Finalité</p>
            <p>
              Pour améliorer nos services, nous collectons des données statistiques via des cookies. Ces cookies
              nous renseignent sur les performances du site et sur son usage.
            </p>
            <p class="green">Informations complémentaires</p>
            <p>
              Toutes les informations stockées via les cookies sont anonymes et ne permettent pas d’identifier des personnes.
              individuals.
            </p>
            <p>
              Les cookies de session sont supprimés à la fermeture du navigateur, tandis que les cookies persistants
              restent actifs jusqu’à leur expiration ou indéfiniment, sauf si vous les supprimez manuellement.
              manually.
            </p>
            <p>Cookies bloqués ou supprimés</p>
            <p>
              Si vous souhaitez supprimer ou bloquer les cookies, vous devez le faire dans les
              paramètres de votre navigateur. Consultez les liens suivants pour les instructions détaillées des navigateurs les plus courants.
              browsers.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Le blocage des cookies peut empêcher certaines fonctions du site de fonctionner correctement.
            </p>
            <p class="bold-title">Durée de conservation des données personnelles</p>
            <p>
              Vos données personnelles sont conservées uniquement le temps strictement nécessaire aux
              traitements, comme indiqué dans d’autres sections de cette politique. Elles peuvent l’être plus longtemps si
              les lois locales, les règlements ou les politiques internes l’exigent.
            </p>
            <p>
              Vos données personnelles sont partagées, à votre demande et selon votre choix, avec des plateformes
              de trading tierces pendant 12 mois. À l’issue de cette période et avec votre
              consentement, ces données sont partagées pour 12 mois supplémentaires.
            </p>
            <p>
              Nos procédures prévoient une évaluation régulière de toutes les données personnelles afin de déterminer si
              elles sont encore nécessaires.
            </p>
            <p class="bold-title">
              9. Transfert de données personnelles vers des pays tiers ou des organisations internationales
            </p>
            <p>
              Lorsque c’est nécessaire pour fournir nos services et/ou pour des raisons de sécurité, nous pouvons transférer
              des données personnelles vers d’autres pays (hors du vôtre) et vers des organisations internationales
              selon des protocoles de sécurité complets. Nous appliquons des mesures de protection des données au
              plus haut niveau afin de protéger vos informations et de garantir votre accès aux recours
              et aux droits prévus par la loi, à tout moment.
            </p>
            <p>
              Dans l’Espace économique européen (EEE), tous les résidents bénéficient d’une protection des données et de garanties.
              guarantees.
            </p>
            <p class="circle">
              Les transferts de données s’effectuent toujours sous juridiction et autorité européennes, conformément
              aux normes et protocoles de protection prévus à l’article 45, paragraphe 3, du règlement
              (UE) 2016/679 du Parlement européen et du Conseil du 27 avril 2016
              (&ldquo;RGPD&rdquo;).
            </p>
            <p class="circle">
              Tout transfert de données entre autorités publiques s’effectue au titre de l’article
              46, paragraphe 2. Il s’agit d’un accord juridiquement contraignant et exécutoire.
            </p>
            <p class="circle">
              Les clauses contractuelles types de la Commission européenne au titre de l’article 46, paragraphe 2, point c), du RGPD fixent
              les conditions du transfert, et ces transferts s’effectuent conformément à
              celles-ci. Vous pouvez consulter ces dispositions à l’adresse
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Pour plus d’informations sur les mesures de sécurité spécifiques prises par l’entreprise afin de
              protéger vos données personnelles lors d’un transfert vers un pays tiers, vous pouvez adresser une demande
              par e-mail à <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Protection des données personnelles</p>
            <p>
              Les données personnelles sont protégées par des mesures techniques et organisationnelles du plus haut
              niveau, appliquées selon des procédures de référence. Ces procédures sont efficaces
              pour prévenir toute destruction de données due à un événement illicite ou imprévu, ainsi que
              leur perte ou leur modification.
            </p>
            <p>
              Même si nous appliquons le plus grand soin et des procédures conformes aux normes les plus
              strictes de protection des données et à la loi, il ne peut en aucune circonstance être garanti
              que vos données personnelles soient exemptes d’erreur. Nous ne pouvons donc accepter aucune responsabilité si
              des données personnelles subissent un dommage accidentel, immatériel ou indirect, ou une divulgation.
              Cela inclut les situations hors de notre contrôle, comme les divulgations dues à des erreurs de
              transmission, à un accès non autorisé par des tiers, ou à d’autres causes similaires.
            </p>
            <p>
              Lorsque nous recevons des demandes juridiquement contraignantes d’autorités de contrôle ou d’autres
              organismes publics investis de pouvoirs légaux, nous pouvons être tenus de transmettre vos données
              personnelles à ces organismes. Une fois transmises au titre d’une obligation légale, nous n’avons plus
              aucun contrôle sur la façon dont ces organismes traitent, conservent ou protègent vos données.
            </p>
            <p>
              Tout ce qui transite sur internet, y compris les informations personnelles, comporte un
              risque d’interception et n’est pas sécurisé à 100 %. L’entreprise ne peut garantir la
              sécurité des données envoyées en ligne.
            </p>
            <p class="bold-title">11. Liens vers des sites tiers</p>
            <p>
              Ce site contient des liens vers des applications et sites tiers. Veuillez
              noter qu’ils ne sont ni liés à l’entreprise ni placés sous son contrôle, et que notre
              politique de confidentialité ne s’applique pas à ces tiers. Ils fonctionnent selon leurs
              propres procédures et priorités de collecte et de traitement des données ; nous
              n’acceptons donc aucune responsabilité pour ces activités. Utilisez-les à votre discrétion.
            </p>
            <p>
              Consultez toujours la politique de confidentialité de l’entreprise ou du service lorsque vous visitez son site
              avant de communiquer des données personnelles. Vérifiez si leurs règles de collecte, d’usage et de
              traitement correspondent à vos attentes. Si vous décidez de partager des données, faites-le
              directement auprès du prestataire.
            </p>
            <p class="bold-title">12. Mises à jour de la politique</p>
            <p>
              Nous nous réservons le droit de mettre à jour ou de modifier cette politique à tout moment. Nous vous informerons
              des changements via le site et les canaux concernés. La version actualisée de la politique de
              confidentialité sera publiée sur le site, et la politique révisée prend effet
              dès sa publication, sauf indication contraire.
            </p>
            <p class="bold-title">13. Vos droits concernant les données personnelles</p>
            <p>
              Vous gardez le contrôle et le dernier mot sur l’usage de toutes vos données personnelles, ce qui
              inclut la vérification de leur exactitude, la correction des erreurs, ainsi que le droit à l’effacement ou
              à la limitation de notre traitement, dans sa portée comme dans sa nature.
            </p>
            <p>Les résidents de l’EEE trouveront sur cette page les informations qui les concernent :</p>
            <p>
              Vos données personnelles sont protégées par les droits décrits ici. En envoyant un e-mail à
              l’adresse ci-dessous, vous pouvez les exercer immédiatement.
            </p>
            <p>Accès à vos droits</p>
            <p>
              Si les données personnelles que vous avez fournies sont exactes, vous pouvez y accéder à tout moment. Toutes
              les données personnelles que nous traitons nous sont accessibles et donc vérifiables.
            </p>
            <p>
              Vous pouvez à tout moment demander vos données personnelles pour vérification ; elles vous seront
              communiquées sous forme électronique. Si vous demandez des copies supplémentaires de vos
              données déjà fournies, des frais raisonnables peuvent être facturés.
            </p>
            <p>
              Les droits reconnus par la loi et par la politique de confidentialité ne doivent pas porter atteinte aux droits des
              tiers. L’entreprise se réserve le droit de refuser ou de restreindre l’accès aux données personnelles
              si cela porte atteinte aux droits et libertés de tiers.
            </p>
            <p>Droit de rectification</p>
            <p>
              Toute erreur dans vos données personnelles, qu’elle résulte d’une omission ou d’une inexactitude,
              peut être corrigée par vous ou par l’entreprise afin d’assurer un traitement correct.
            </p>
            <p>Droit à l’effacement</p>
            <p>
              Vous avez le droit de demander l’effacement de vos données personnelles dans les
              cas suivants : 1) si elles ont été traitées sans votre consentement ou hors des limites légales ; 2)
              à votre demande, si vous souhaitez leur suppression et que l’entreprise n’a aucune obligation légale de
              les conserver ; 3) si vous vous opposez à notre traitement ou n’y consentez plus, même s’il
              est licite et fondé sur nos intérêts ou ceux de tiers ; et 4) si la loi
              nous oblige à les supprimer.
            </p>
            <p>
              Le droit à l’effacement ne s’applique pas en cas d’obligations légales de l’UE ou
              d’un État membre. Il ne s’applique pas non plus si les données sont nécessaires pour exercer ou
              défendre des droits en justice.
            </p>
            <p>Droit à la limitation du traitement</p>
            <p>
              Vous avez le droit de demander la limitation du traitement de vos données personnelles si vous
              estimez qu’elles comportent des inexactitudes.
            </p>
            <p>
              Si vous demandez la limitation de l’usage de vos données personnelles, nous en limiterons le traitement, sauf dans
              les cas suivants : 1) si le droit de l’Union européenne ou d’un de ses
              États membres s’y oppose ; 2) avec votre consentement, si c’est nécessaire pour défendre ou exercer
              des droits en justice ; 3) pour protéger les droits d’une autre personne physique.
            </p>
            <p>Droit à la portabilité</p>
            <p>
              Vous avez le droit d’accéder aux données personnelles que vous avez fournies et d’en garder le contrôle, dans
              la mesure où vous avez consenti à leur collecte, et si leur traitement
              s’effectue via des systèmes automatisés.
            </p>
            <p>
              Vous avez le droit de demander le transfert de toutes vos données personnelles vers une autre entreprise ou
              organisation, dans la mesure techniquement possible. Ce droit ne porte pas atteinte à votre
              droit à l’effacement. Il ne s’applique pas si son exercice porte atteinte aux droits
              ou libertés d’une autre personne physique.
            </p>
            <p>Droit d’opposition au traitement</p>
            <p>
              Sans préjudice du droit de l’entreprise de poursuivre nos intérêts légitimes ou
              ceux d’un tiers agissant comme prestataire, vous avez le droit de vous opposer au
              traitement et d’en demander la cessation. Ce droit ne s’applique pas s’il existe un besoin
              juridique impérieux de poursuivre le traitement, que ce soit pour se défendre ou pour exercer
              des droits en justice. Dans ces cas, nous pouvons poursuivre le traitement de vos données.
            </p>
            <p>
              Vous pouvez à tout moment vous opposer au traitement de vos données personnelles à des fins de prospection commerciale.
              purposes.
            </p>
            <p>
              Droit de retirer son consentement
            </p>
            <p>
              Vous pouvez retirer à tout moment votre consentement au traitement de vos données personnelles,
              avec effet immédiat. Ce retrait n’a pas d’effet rétroactif sur les traitements déjà
              effectués avant votre retrait.
            </p>
            <p>
              Si vous n’êtes pas satisfait, vous avez le droit d’introduire une réclamation auprès d’une
              autorité judiciaire, de contrôle ou d’un autre organisme compétent.
            </p>
            <p>
              Si vous estimez que vos droits et libertés concernant le traitement de vos données personnelles
              ont été violés, les États membres de l’Union européenne disposent d’autorités de contrôle
              à cette fin. Vous pouvez saisir ces autorités si vous le jugez opportun.
              appropriate.
            </p>
            <p>
              La section 13 décrit les situations dans lesquelles vos droits relatifs aux données personnelles peuvent être
              limités par le droit de l’Union européenne ou des États membres.
            </p>
            <p>
              Lorsque nous recevons votre demande concernant vos données personnelles et leur traitement, nous vous
              donnerons accès aux informations demandées, comme indiqué à la section 13 de cette politique.
              Nous pouvons prolonger ce délai de deux mois au plus, selon l’ampleur de la demande
              et sa nature. Si besoin, nous vous informerons de la prolongation
              dans un délai d’un mois après réception de votre demande.
            </p>
            <p>
              Nous vous enverrons les informations demandées par voie électronique et gratuitement, sauf si
              cela est contraire à la loi ou aux dispositions de la section 13. Nous nous réservons le droit de
              facturer des frais raisonnables ou de refuser une demande si elle est jugée infondée, excessive ou répétitive.
              repetitive.
            </p>
            <p>
              Nous nous réservons le droit de demander une vérification d’identité complémentaire s’il existe un
              doute raisonnable sur la personne à l’origine d’une demande relative aux données personnelles, afin de
              protéger et d’assurer la sécurité des données.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

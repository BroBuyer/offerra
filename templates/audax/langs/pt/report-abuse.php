<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Denunciar um abuso | ' . SITE_NAME;
$page_description = 'Denuncia um abuso ou uma atividade suspeita em ' . SITE_NAME . '.';
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
            <h1>Denunciar um abuso</h1>
            <p class="bold-title">1. Denúncia de um abuso</p>
            <p>
              1.1. Se encontraste conteúdo inadequado no nosso sítio, informa-nos
              através do formulário de contacto.
            </p>
            <p>Contacta-nos: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. Nesta secção podes descrever qualquer conduta abusiva ou conteúdo
              que infrinja as nossas normas.
            </p>
            <p>
              1.3. A tua denúncia é importante. Indica dados precisos para que possamos
              investigar corretamente os factos.
            </p>
            <p>Ao enviares uma denúncia também aceitas a nossa política de privacidade.</p>
            <p class="bold-title">2. Quem pode denunciar</p>
            <p>
              2.1. Se foste vítima de um abuso ou constatares uma conduta inadequada, tens
              o direito de o denunciar.
            </p>
            <p>2.1.1. Tens de ter pelo menos 18 anos para apresentar uma denúncia.</p>
            <p>2.1.2. A denúncia deve ser verdadeira e baseada em factos.</p>
            <p>2.1.3. O uso do formulário de denúncia deve ser lícito no teu país.</p>
            <p>2.2. Não somos responsáveis por denúncias falsas ou dolosas.</p>
            <p class="bold-title">3. Procedimento de denúncia</p>
            <p>3.1. Reservamo-nos o direito de examinar todas as denúncias de abuso.</p>
            <p>3.2. Se uma denúncia for considerada fundada, adotaremos as medidas necessárias.</p>
            <p class="bold-title">4. Atividades proibidas ao denunciar</p>
            <p>4.1. O uso do formulário para fins dolosos não é permitido.</p>
            <p>4.1.1. As denúncias falsas ou enganosas não são permitidas.</p>
            <p>4.1.2. Assediar outros utilizadores através do sistema de denúncia não é permitido.</p>
            <p>4.1.3. O uso de robots ou de automatização para enviar denúncias está proibido.</p>
            <p>4.1.4. Qualquer tentativa de manipular o sistema de denúncia será objeto de investigação.</p>
            <p>4.1.5. O uso do sistema para difundir informação falsa está proibido.</p>
            <p>4.1.6. Qualquer tentativa de obstruir uma investigação não é permitida.</p>
            <p>4.1.7. O uso do sistema para proferir ameaças não é permitido.</p>
            <p>4.1.8. Qualquer atividade ilícita ligada à denúncia será sancionada.</p>
            <p>4.1.9. Qualquer tentativa de contornar as normas de denúncia não é permitida.</p>
            <p>4.1.10. Qualquer tentativa de abuso do sistema de denúncia é tomada a sério.</p>
            <p class="bold-title">5. Direitos de propriedade intelectual ao denunciar</p>
            <p>
              5.1. Os conteúdos que transmites ao denunciar um abuso não te conferem nenhum direito de propriedade.
            </p>
            <p>5.2. Os utilizadores não adquirem direitos sobre os conteúdos do sítio ao apresentar uma denúncia.</p>
            <p>5.3. As denúncias usam-se exclusivamente para fins de investigação.</p>
            <p>5.4. Os terceiros não podem copiar nem modificar as denúncias.</p>
            <p class="bold-title">6. Limitação de responsabilidade ao denunciar</p>
            <p>6.1. Ao apresentares uma denúncia assumes a responsabilidade pelo seu conteúdo.</p>
            <p>6.2. Não somos responsáveis pelas consequências das denúncias apresentadas.</p>
            <p>6.3. Qualquer perda decorrente de uma denúncia é responsabilidade do utilizador.</p>
            <p>6.4. Não aceitamos qualquer responsabilidade pelos danos causados por denúncias.</p>
            <p>
              6.5. Os problemas técnicos ligados ao sistema de denúncia não recaem na nossa responsabilidade.
            </p>
            <p class="bold-title">7. Informação sobre o procedimento de denúncia</p>
            <p>
              7.1. Ao usares o sistema de denúncia aceitas que possamos contactar-te para obter mais informação.
            </p>
            <p>7.2. As denúncias são tratadas de forma confidencial.</p>
            <p>7.3. Recomenda-se aos utilizadores que conservem uma cópia das suas denúncias.</p>
            <p class="bold-title">8. Ligações e recursos complementares</p>
            <p>8.1. Para saberes mais sobre como denunciar um abuso, consulta as nossas políticas.</p>
            <p>8.2. As ligações a fontes externas não constituem uma aprovação da nossa parte.</p>
            <p>8.3. Recomendamos-te que verifiques cada fonte antes de a usares.</p>
            <p class="bold-title">9. Disposições gerais sobre as denúncias</p>
            <p>
              9.1. Reservamo-nos o direito de modificar, suspender ou interromper o procedimento de denúncia
              em qualquer momento.
            </p>
            <p>
              9.2. Os termos deste procedimento podem evoluir em qualquer momento. O uso continuado
              do serviço de denúncia após essas alterações equivale à aceitação dos novos termos.
            </p>
            <p>9.3. Ao apresentar uma denúncia, o utilizador aceita plenamente estes termos.</p>
            <p>
              9.4. Qualquer acordo ou declaração, escrita ou oral, que não entre nos
              pontos específicos destes termos é juridicamente nulo e não vincula nenhuma das partes.
            </p>
            <p>
              9.5. Qualquer direito conferido por estes termos e não exercido, por consentimento,
              negligência ou impossibilidade, considera-se renunciado. O exercício parcial ou total de um direito
              não exclui nem limita o seu exercício posterior.
            </p>
            <p>
              9.6. Se um tribunal competente declarar nula uma disposição destes termos, esta
              considerar-se-á nula. O resto dos termos permanece, contudo, plenamente em vigor.
            </p>
            <p>
              9.7. Entende-se que estes termos permitem a gestão do sítio por terceiros,
              que podem ceder os seus direitos e obrigações. O utilizador não pode ceder
              os seus direitos e obrigações a um terceiro.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

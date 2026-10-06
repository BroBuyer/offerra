<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Política de privacidade | ' . SITE_NAME;
$page_description = 'Política de privacidade de ' . SITE_NAME . '.';
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
            <h1>Política de privacidade</h1>
            <p>
              Os teus dados pessoais e os teus ativos são para nós de máxima importância. Comprometemo-nos
              plenamente a protegê-los.
            </p>
            <p>
              <?= e(SITE_NAME) ?> recolhe e conserva os dados essenciais para as tuas operações de trading. As
              modalidades desta recolha e conservação descrevem-se na presente política.
            </p>
            <p>A nossa política fundamenta-se nos seguintes princípios:</p>
            <p class="circle">
              Com o fim de garantir a máxima transparência sobre os nossos processos de recolha e
              conservação dos teus dados pessoais:
            </p>
            <p>
              O nosso objetivo é que compreendas como recolhemos e tratamos os teus dados, para que possas
              decidir com critério. Aplicamos normas e processos claros para o tratamento de dados neste
              sítio. A nossa política descreve em pormenor os métodos que usamos para te dar
              uma informação clara e concreta sobre o uso dos dados. Tu decides.
            </p>
            <p>
              Informar-te-emos sem demora quando o considerarmos necessário. A transparência é para nós
              de importância fundamental.
            </p>
            <p>
              A nossa equipa especializada permanece disponível para responder a todas as tuas perguntas sobre qualquer aspeto
              dos nossos processos, incluindo as nossas obrigações conforme o direito <?= e(geo_in()) ?> e os regulamentos
              europeus. Podes escrever-nos para:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Nenhum outro uso dos dados pessoais está autorizado da nossa parte, salvo os casos previstos na nossa
              política de privacidade.
            </p>
            <p>
              Podemos tratar dados pessoais para as seguintes finalidades, em particular para garantir o correto
              funcionamento dos serviços <?= e(SITE_NAME) ?> e para pôr em relação os utilizadores com plataformas
              de trading de terceiros. O tratamento também pode ser necessário para manter e melhorar
              as funções e os serviços do sítio; para proteger os nossos direitos e para cumprir as obrigações legais e
              de outro tipo. Por último, estes dados usam-se, se for necessário, para assegurar as funções administrativas
              e operativas ligadas aos serviços que te são prestados.
            </p>
            <p>
              Para propor serviços mais adaptados às tuas preferências e às tuas necessidades, <?= e(SITE_NAME) ?>
              usa dados pessoais.
            </p>
            <p class="circle">
              Com o fim de usar as ferramentas indispensáveis para proteger os teus dados pessoais e garantir os teus
              direitos a esse respeito:
            </p>
            <p>
              Podes em qualquer momento contactar-nos e aceder ao conjunto dos teus dados pessoais. Também podemos
              modificá-los ou eliminá-los se for necessário. Tratamos ainda os pedidos de transferência desses
              dados para ti ou para um terceiro que indiques. Oferecemos este serviço para que possas
              exercer plenamente os teus direitos de privacidade e de controlo.
            </p>
            <p class="circle">Protege os teus dados pessoais:</p>
            <p>
              Os nossos sistemas de segurança são de altíssimo nível e integram medidas de nível bancário. Embora
              uma proteção absoluta não possa garantir-se, comprometemo-nos a manter de forma permanente os nossos
              sistemas no máximo nível e a reforçar as medidas já implementadas.
            </p>
            <p>
              Dispomos de políticas de privacidade pormenorizadas e de sistemas de segurança de primeiro nível.
            </p>
            <p class="bold-title">1. Âmbito de aplicação</p>
            <p>
              A presente política descreve os nossos procedimentos de recolha, tratamento e comunicação de
              todos os dados relativos a pessoas singulares.
            </p>
            <p>
              As disposições da nossa política aplicam-se a todas as pessoas singulares identificáveis ou
              identificadas. Dizem respeito em particular a toda a pessoa singular identificável a partir de
              dados que nos são confiados, a que temos acesso e/ou que podemos combinar.
            </p>
            <p>
              O tratamento de dados, nos termos da política de privacidade, inclui em particular a conservação,
              a gestão e a organização dos dados pessoais.
            </p>
            <p>
              Não recolhemos nem tentamos recolher informação sobre pessoas menores de 18 anos.
              Tampouco permitimos aos menores de 18 anos usar a nossa plataforma, para qualquer
              fim. Se constatarmos que um utilizador tem menos de 18 anos, eliminaremos esses dados de imediato.
            </p>
            <p class="bold-title">2. Que dados pessoais recolhemos?</p>
            <p>
              No registo recolhemos os dados pessoais necessários para o uso dos nossos serviços. Se for preciso,
              também podemos pedir dados para a verificação, por exemplo para
              confirmar que a conta te pertence. Para melhorar e manter a qualidade dos nossos
              serviços, recolhemos e analisamos informação sobre o teu uso da plataforma e
              dos serviços de terceiros associados.
            </p>
            <p class="bold-title">
              3. Em caso algum estás obrigado a comunicar-nos os teus dados pessoais.
            </p>
            <p>
              Embora não estejas obrigado a transmitir-nos os dados, a decisão de o não fazer
              pode limitar a prestação dos nossos serviços. Isso também pode comportar
              limitações de uso da plataforma.
            </p>
            <p class="bold-title">
              4. Que dados pessoais recolhemos? Ao acederes ao nosso sítio podemos recolher os
              seguintes dados pessoais:
            </p>
            <p>
              Não recolhemos dados que permitam identificar-te pessoalmente. Recolhemos informação como
              a atividade da tua conta, os endereços IP e as datas e horas de acesso. Para a manutenção,
              a segurança e o apoio, conservamos os relatórios de erro, a informação do navegador e o tipo
              de dispositivo usado para aceder à tua conta. Também registamos o idioma configurado na tua conta.
            </p>
            <p>
              Quanto aos dados pessoais, recolhemos e conservamos unicamente a informação
              que facilitas ao ligares-te a uma plataforma de trading de terceiros através dos nossos serviços.
            </p>
            <p>
              Os dados pessoais comunicados a plataformas de terceiros podem compreender em particular:
              nome e apelidos, morada, número de telemóvel e endereço de correio eletrónico.
            </p>
            <p class="bold-title">
              5. Porque precisa a empresa dos meus dados e o tratamento é lícito?
            </p>
            <p>
              A empresa recolhe, conserva e trata os teus dados pessoais exclusivamente para as
              finalidades previstas na política. Todos os usos e tratamentos descritos são conformes ao
              direito aplicável <?= e(geo_in()) ?> e aos regulamentos europeus.
            </p>
            <p>
              A empresa gere, trata ou transfere os teus dados só em conformidade com a
              normativa aplicável <?= e(geo_in()) ?>. As bases jurídicas pertinentes enumeram-se a seguir:
            </p>
            <p class="circle">
              Consentiste a conservação e o tratamento dos teus dados pessoais por parte
              da empresa. Ao transmitir-nos os dados, autorizas-nos a reenviá-los à
              plataforma de trading de terceiros interessada. Além disso consentiste o
              tratamento dos teus dados pessoais para uma ou várias finalidades.
            </p>
            <p class="circle">
              Para melhorar os serviços, para exercer ou defender direitos em juízo e para proteger interesses
              legítimos, pode em particular ser necessário que a empresa conserve e
              trate os teus dados pessoais.
            </p>
            <p class="circle">O tratamento de dados é necessário para cumprir obrigações legais.</p>
            <p>
              Se desejares mais informação sobre os tratamentos que a empresa está obrigada
              a realizar, não hesites em escrever-nos.
            </p>
            <p>
              A seguir encontras a lista das finalidades precisas e da base jurídica que nos autoriza
              a tratar os teus dados pessoais.
            </p>
            <p class="green">Finalidade</p>
            <p class="green">Base jurídica</p>
            <p>
              1. Para facilitar o teu acesso ao trading digital e, exclusivamente a teu pedido, nós
              partilhamos os teus dados pessoais com plataformas de terceiros. Os teus dados podem recolher-se
              e partilhar-se com terceiros, exclusivamente a teu pedido e segundo a tua escolha.
            </p>
            <p>
              Consentiste o tratamento dos teus dados pessoais para uma ou várias finalidades.
            </p>
            <p>
              2. Pedimos-te que nos transmitas a informação necessária para que possamos responder de forma rápida e
              eficaz aos teus pedidos, preocupações e perguntas sobre os nossos serviços.
            </p>
            <p>
              Para a prossecução dos interesses legítimos da empresa ou de um terceiro identificado,
              o tratamento dos dados pessoais é necessário.
            </p>
            <p>
              3. Para cumprir as nossas obrigações legais e administrativas, o tratamento dos dados pessoais é necessário.
            </p>
            <p>Para respeitar as nossas obrigações legais devemos tratar determinados dados pessoais.</p>
            <p>
              4. Para melhorar os nossos serviços precisamos de dados anonimizados e devemos seguir o uso,
              incluindo os relatórios de erro.
            </p>
            <p>
              Para a proteção dos interesses legítimos da empresa e dos prestadores
              externos, o tratamento e a conservação dos dados pessoais são necessários.
            </p>
            <p>5. Isso é necessário para prevenir fraudes e abusos do nosso serviço.</p>
            <p>
              Para garantir os interesses legítimos da empresa e dos prestadores terceiros,
              o tratamento e a conservação dos dados pessoais são necessários.
            </p>
            <p>
              6. As exigências do nosso serviço obrigam-nos a seguir e a tratar os dados para
              o desenvolvimento comercial, as decisões estratégicas, o acompanhamento, o cumprimento normativo e
              outras atividades operativas.
            </p>
            <p>
              Com o fim de proteger os interesses legítimos da empresa e dos prestadores
              externos, o tratamento e a conservação dos dados pessoais são necessários.
            </p>
            <p>
              7. Usamos ferramentas estatísticas e de análise de dados para orientar as decisões num amplo
              leque dos nossos serviços e no planeamento estratégico.
            </p>
            <p>
              Para a proteção dos interesses legítimos da empresa e dos nossos prestadores
              externos, o tratamento e a conservação dos dados pessoais são necessários.
            </p>
            <p>
              8. Na medida necessária para proteger os direitos, os bens e os interesses
              da empresa e dos prestadores terceiros, e em conformidade com as leis locais e
              os regulamentos aplicáveis, os contratos e os nossos termos, podemos tratar
              dados pessoais. Esse tratamento realiza-se só segundo procedimentos necessários e
              estabelecidos.
            </p>
            <p>
              Para a proteção dos interesses legítimos da empresa e de cada prestador
              terceiro, o tratamento e a conservação dos dados pessoais são necessários.
            </p>
            <p class="bold-title">6. Partilhar os dados pessoais com terceiros</p>
            <p>
              Para a conservação e o tratamento dos endereços IP, para os inquéritos e a análise de uso,
              bem como para outros serviços associados, a empresa pode partilhar dados anonimizados com
              prestadores externos.
            </p>
            <p>
              A teu pedido partilharemos alguns dados pessoais que nos transmitiste com
              prestadores externos. Nesse caso, o tratamento dos teus dados fica sujeito à
              política de privacidade dessa empresa. Isso pode incluir diversas plataformas de trading digital.
            </p>
            <p>
              Com o fim de melhorar o atendimento ao cliente e otimizar os nossos serviços em geral,
              a empresa pode partilhar dados pessoais com as suas sociedades afiliadas e os seus parceiros comerciais.
            </p>
            <p>
              Quando a lei o exige ou para proteger os direitos e os bens da empresa e dos
              terceiros interessados, podemos comunicar os dados às autoridades judiciais ou de controlo competentes.
            </p>
            <p>
              No quadro de operações estruturais, como a cessão da empresa,
              uma captação de capital ou um pedido de crédito, os dados pertinentes podem partilhar-se
              de forma lícita e adequada. Isso vale também para fusões, reestruturações,
              concentrações ou insolvência da empresa, em conformidade com a lei.
            </p>
            <p class="bold-title">7. Cookies e serviços de terceiros</p>
            <p>
              Para a análise do sítio e em colaboração com agências publicitárias, cookies e outras
              tecnologias semelhantes podem usar-se em conformidade com a lei e as práticas habituais.
            </p>
            <p>
              As cookies, pequenos ficheiros de texto guardados no teu dispositivo quando visitas um sítio, servem para
              recolher informação sobre a navegação, as preferências e outros dados. A sua
              finalidade é personalizar e melhorar a tua experiência. Ajudam-nos a recordar as tuas
              definições e preferências e a adaptar a nossa oferta. Servem também
              para a análise do sítio e a produção de estatísticas para o planeamento.
            </p>
            <p>
              Este sítio usa em geral dois tipos de cookies: as cookies de sessão, conservadas
              só durante a sessão e eliminadas ao fechares o navegador;
              e as cookies persistentes, que permanecem no navegador após o fim da sessão. Estas
              últimas permitem ao sítio reconhecer-te como visitante recorrente e facilitar o seu uso.
            </p>
            <p class="bold-title">Tipos de cookies:</p>
            <p>As cookies podem usar-se segundo as necessidades, em função da finalidade:</p>
            <p class="green">Tipo de cookie</p>
            <p>Estas cookies são estritamente necessárias</p>
            <p class="green">Finalidade</p>
            <p>
              As cookies servem para te identificar como cliente, para te facilitar a informação,
              as definições e os serviços que pediste.
              Também facilitam a navegação no sítio e o acesso ao mesmo.
            </p>
            <p>
              Usamos cookies para que o teu dispositivo possa descarregar e reproduzir conteúdos. Permitem
              também aceder às funções essenciais e voltar às páginas já visitadas.
            </p>
            <p class="green">Informação complementar</p>
            <p>
              Para um acesso rápido e simples ao sítio, as cookies armazenam e tratam determinados
              dados pessoais, como o nome de utilizador e a data do último acesso, se pedires ao sítio que
              te recorde ao iniciares sessão.
            </p>
            <p>As cookies de sessão eliminam-se ao fechares o navegador.</p>
            <p class="green">Tipo de cookie</p>
            <p>Cookies funcionais</p>
            <p class="green">Finalidade</p>
            <p>
              Graças às cookies podemos guardar e aplicar as tuas definições e preferências de forma segura.
              Também nos permitem reconhecer-te quando voltas ao sítio.
            </p>
            <p class="green">Informação complementar</p>
            <p>
              As cookies persistentes permanecem guardadas após a sessão e continuam ativas até à
              data de caducidade.
            </p>
            <p class="green">Tipo de cookie</p>
            <p>Cookies de desempenho</p>
            <p class="green">Finalidade</p>
            <p>
              Para melhorar os nossos serviços, recolhemos dados estatísticos mediante cookies. Estas cookies
              informam-nos sobre o desempenho do sítio e sobre o seu uso.
            </p>
            <p class="green">Informação complementar</p>
            <p>
              Toda a informação armazenada mediante cookies é anónima e não permite identificar pessoas.
            </p>
            <p>
              As cookies de sessão eliminam-se ao fechares o navegador, enquanto as cookies persistentes
              continuam ativas até à caducidade ou de forma indefinida, salvo eliminação manual.
            </p>
            <p>Cookies bloqueadas ou eliminadas</p>
            <p>
              Se desejares eliminar ou bloquear as cookies, deves fazê-lo nas
              definições do navegador. Consulta as ligações seguintes para as instruções pormenorizadas dos navegadores mais usados.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              O bloqueio de cookies pode impedir que algumas funções do sítio funcionem corretamente.
            </p>
            <p class="bold-title">Duração da conservação dos dados pessoais</p>
            <p>
              Os teus dados pessoais conservam-se só o tempo estritamente necessário para os
              tratamentos, como se indica noutras secções desta política. Podem conservar-se mais tempo se
              as leis locais, os regulamentos ou as políticas internas o exigirem.
            </p>
            <p>
              Os teus dados pessoais partilham-se, a teu pedido e segundo a tua escolha, com plataformas
              de trading de terceiros durante 12 meses. No termo desse período e com o teu
              consentimento, esses dados partilham-se durante 12 meses adicionais.
            </p>
            <p>
              Os nossos procedimentos preveem uma avaliação periódica de todos os dados pessoais para determinar se
              continuam a ser necessários.
            </p>
            <p class="bold-title">
              9. Transferência de dados pessoais para países terceiros ou organizações internacionais
            </p>
            <p>
              Quando é necessário para prestar os nossos serviços e/ou por motivos de segurança, podemos transferir
              dados pessoais para outros países (fora do teu) e para organizações internacionais
              segundo protocolos de segurança completos. Aplicamos medidas de proteção de dados ao
              máximo nível para proteger a tua informação e garantir o teu acesso aos recursos
              e aos direitos previstos pela lei, em qualquer momento.
            </p>
            <p>
              No Espaço Económico Europeu (EEE), todos os residentes beneficiam de uma proteção de dados e de garantias.
            </p>
            <p class="circle">
              As transferências de dados realizam-se sempre sob jurisdição e autoridade europeias, em conformidade
              com as normas e os protocolos de proteção previstos no artigo 45.º, n.º 3, do regulamento
              (UE) 2016/679 do Parlamento Europeu e do Conselho de 27 de abril de 2016
              (&ldquo;RGPD&rdquo;).
            </p>
            <p class="circle">
              Qualquer transferência de dados entre autoridades públicas realiza-se ao abrigo do artigo
              46.º, n.º 2. Trata-se de um acordo juridicamente vinculativo e executável.
            </p>
            <p class="circle">
              As cláusulas contratuais-tipo da Comissão Europeia ao abrigo do artigo 46.º, n.º 2, alínea c), do RGPD fixam
              as condições da transferência, e essas transferências realizam-se em conformidade com
              elas. Podes consultar essas disposições em
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Para mais informação sobre as medidas de segurança específicas adotadas pela empresa para
              proteger os teus dados pessoais em caso de transferência para um país terceiro, podes enviar um pedido
              por correio eletrónico para <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Proteção dos dados pessoais</p>
            <p>
              Os dados pessoais estão protegidos por medidas técnicas e organizativas do mais alto
              nível, aplicadas segundo procedimentos de referência. Esses procedimentos são eficazes
              para prevenir qualquer destruição de dados devida a um acontecimento ilícito ou imprevisto, bem como
              a sua perda ou modificação.
            </p>
            <p>
              Embora apliquemos o máximo cuidado e procedimentos conformes às normas mais
              estritas de proteção de dados e à lei, em nenhuma circunstância pode garantir-se
              que os teus dados pessoais estejam isentos de erros. Por isso não podemos aceitar qualquer responsabilidade se
              os dados pessoais sofrerem um dano acidental, imaterial ou indireto, ou uma divulgação.
              Isso inclui as situações fora do nosso controlo, como as divulgações devidas a erros de
              transmissão, a acessos não autorizados por parte de terceiros ou a outras causas semelhantes.
            </p>
            <p>
              Quando recebemos pedidos juridicamente vinculativos de autoridades de controlo ou de outros
              organismos públicos dotados de poderes legais, podemos estar obrigados a transmitir os teus dados
              pessoais a esses organismos. Uma vez transmitidos em virtude de uma obrigação legal, já não temos
              nenhum controlo sobre o modo como esses organismos tratem, conservem ou protejam os teus dados.
            </p>
            <p>
              Tudo o que transita pela internet, incluindo a informação pessoal, implica um
              certo risco de interceção e não é seguro a 100 %. A empresa não pode garantir a
              segurança dos dados enviados em linha.
            </p>
            <p class="bold-title">11. Ligações a sítios de terceiros</p>
            <p>
              Este sítio contém ligações a aplicações e sítios de terceiros. Pedimos-te que
              tenhas em conta que não estão vinculados à empresa nem sob o seu controlo, e que a nossa
              política de privacidade não se aplica a esses terceiros. Operam segundo os seus
              próprios procedimentos e prioridades de recolha e tratamento de dados; não
              aceitamos por isso qualquer responsabilidade por essas atividades. Usa-os à tua discrição.
            </p>
            <p>
              Consulta sempre a política de privacidade da empresa ou do serviço quando visitares o seu sítio
              antes de comunicar dados pessoais. Verifica se as suas normas de recolha, uso e
              tratamento coincidem com as tuas expectativas. Se decidires partilhar dados, fá-lo
              diretamente junto do prestador.
            </p>
            <p class="bold-title">12. Atualizações da política</p>
            <p>
              Reservamo-nos o direito de atualizar ou modificar esta política em qualquer momento. Informar-te-emos
              das alterações através do sítio e dos canais afetados. A versão atualizada da política de
              privacidade será publicada no sítio, e a política revista produz efeitos
              desde a publicação, salvo indicação em contrário.
            </p>
            <p class="bold-title">13. Os teus direitos sobre os dados pessoais</p>
            <p>
              Conservas o controlo e a última palavra sobre o uso de todos os teus dados pessoais, o que
              inclui a verificação da sua exatidão, a correção de erros, bem como o direito ao apagamento ou
              à limitação do nosso tratamento, no alcance como na natureza.
            </p>
            <p>Os residentes do EEE encontrarão nesta página a informação que lhes diz respeito:</p>
            <p>
              Os teus dados pessoais estão protegidos pelos direitos descritos aqui. Ao enviares um correio para o
              endereço seguinte, podes exercê-los de imediato.
            </p>
            <p>Acesso aos teus direitos</p>
            <p>
              Se os dados pessoais que facultaste são exatos, podes aceder a eles em qualquer momento. Todos
              os dados pessoais que tratamos são-nos acessíveis e por isso verificáveis.
            </p>
            <p>
              Podes em qualquer momento pedir os teus dados pessoais para verificação; ser-te-ão
              comunicados em forma eletrónica. Se pedires cópias adicionais dos teus
              dados já facultados, podem cobrar-se custos razoáveis.
            </p>
            <p>
              Os direitos reconhecidos pela lei e pela política de privacidade não devem prejudicar os direitos de
              terceiros. A empresa reserva-se o direito de recusar ou limitar o acesso aos dados pessoais
              se isso prejudicar os direitos e as liberdades de terceiros.
            </p>
            <p>Direito de retificação</p>
            <p>
              Qualquer erro nos teus dados pessoais, derivado de omissão ou inexatidão,
              pode ser corrigido por ti ou pela empresa para assegurar um tratamento correto.
            </p>
            <p>Direito de apagamento</p>
            <p>
              Tens o direito de pedir o apagamento dos teus dados pessoais nos
              seguintes casos: 1) se foram tratados sem o teu consentimento ou fora dos limites legais; 2)
              a teu pedido, se desejares o seu apagamento e a empresa não tiver nenhuma obrigação legal de
              os conservar; 3) se te opuseres ao nosso tratamento ou já não consentires nele, ainda que seja
              lícito e fundado nos nossos interesses ou nos de terceiros; e 4) se a lei
              nos obrigar a apagá-los.
            </p>
            <p>
              O direito de apagamento não se aplica em caso de obrigações legais da UE ou
              de um Estado-Membro. Tampouco se aplica se os dados forem necessários para exercer ou
              defender direitos em juízo.
            </p>
            <p>Direito à limitação do tratamento</p>
            <p>
              Tens o direito de pedir a limitação do tratamento dos teus dados pessoais se
              considerares que contêm inexatidões.
            </p>
            <p>
              Se pedires a limitação do uso dos teus dados pessoais, limitaremos o seu tratamento, salvo nos
              seguintes casos: 1) se o direito da União Europeia ou de um dos seus
              Estados-Membros se opuser; 2) com o teu consentimento, se for necessário para defender ou exercer
              direitos em juízo; 3) para proteger os direitos de outra pessoa singular.
            </p>
            <p>Direito à portabilidade</p>
            <p>
              Tens o direito de aceder aos dados pessoais que facultaste e de manter o seu controlo, na
              medida em que tenhas consentido a sua recolha, e se o seu tratamento
              se realizar mediante sistemas automatizados.
            </p>
            <p>
              Tens o direito de pedir a transferência de todos os teus dados pessoais para outra empresa ou
              organização, na medida tecnicamente possível. Este direito não prejudica o teu
              direito de apagamento. Não se aplica se o seu exercício prejudicar os direitos
              ou as liberdades de outra pessoa singular.
            </p>
            <p>Direito de oposição ao tratamento</p>
            <p>
              Sem prejuízo do direito da empresa a prosseguir os nossos interesses legítimos ou
              os de um terceiro que atua como prestador, tens o direito de te opor ao
              tratamento e de pedir a sua cessação. Este direito não se aplica se existir uma necessidade
              jurídica premente de continuar o tratamento, seja para se defender ou para exercer
              direitos em juízo. Nesses casos podemos continuar o tratamento dos teus dados.
            </p>
            <p>
              Podes em qualquer momento opor-te ao tratamento dos teus dados pessoais para fins de prospeção comercial.
            </p>
            <p>
              Direito a retirar o consentimento
            </p>
            <p>
              Podes retirar em qualquer momento o consentimento ao tratamento dos teus dados pessoais,
              com efeito imediato. Essa retirada não tem efeito retroativo sobre os tratamentos já
              realizados antes da retirada.
            </p>
            <p>
              Se não estiveres satisfeito, tens o direito de apresentar uma reclamação junto de uma
              autoridade judicial, de controlo ou outro organismo competente.
            </p>
            <p>
              Se considerares que os teus direitos e liberdades relativamente ao tratamento dos dados pessoais
              foram violados, os Estados-Membros da União Europeia dispõem de autoridades de controlo
              para esse fim. Podes recorrer a essas autoridades se o considerares oportuno.
            </p>
            <p>
              A secção 13 descreve as situações em que os teus direitos sobre os dados pessoais podem ver-se
              limitados pelo direito da União Europeia ou dos Estados-Membros.
            </p>
            <p>
              Quando recebermos o teu pedido sobre os dados pessoais e o seu tratamento, dar-te-emos
              acesso à informação solicitada, como se indica na secção 13 desta política.
              Podemos prorrogar esse prazo até dois meses no máximo, segundo a amplitude do pedido
              e da sua natureza. Se for preciso, informar-te-emos da prorrogação
              no prazo de um mês a contar da receção do teu pedido.
            </p>
            <p>
              Enviar-te-emos a informação solicitada por via eletrónica e de forma gratuita, salvo se
              isso for contrário à lei ou às disposições da secção 13. Reservamo-nos o direito de
              cobrar custos razoáveis ou de recusar um pedido se for considerado infundado, excessivo ou repetitivo.
            </p>
            <p>
              Reservamo-nos o direito de pedir uma verificação de identidade complementar se existir uma
              dúvida razoável sobre a pessoa que origina um pedido relativo aos dados pessoais, a fim de
              proteger e assegurar a segurança dos dados.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

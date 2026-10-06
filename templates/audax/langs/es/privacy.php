<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Política de privacidad | ' . SITE_NAME;
$page_description = 'Política de privacidad de ' . SITE_NAME . '.';
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
            <h1>Política de privacidad</h1>
            <p>
              Tus datos personales y tus activos son para nosotros de máxima importancia. Nos
              comprometemos plenamente a protegerlos.
            </p>
            <p>
              <?= e(SITE_NAME) ?> recopila y conserva los datos esenciales para tus operaciones de trading. Las
              modalidades de esta recopilación y conservación se describen en la presente política.
            </p>
            <p>Nuestra política se fundamenta en los siguientes principios:</p>
            <p class="circle">
              Con el fin de garantizar la máxima transparencia sobre nuestros procesos de recopilación y
              conservación de tus datos personales:
            </p>
            <p>
              Nuestro objetivo es que comprendas cómo recopilamos y tratamos tus datos, para que puedas
              decidir con criterio. Aplicamos normas y procesos claros para el tratamiento de datos en
              este sitio. Nuestra política describe en detalle los métodos que usamos para darte
              una información clara y concreta sobre el uso de los datos. Tú decides.
            </p>
            <p>
              Te informaremos sin demora cuando lo consideremos necesario. La transparencia es para nosotros
              de importancia fundamental.
            </p>
            <p>
              Nuestro equipo especializado permanece disponible para responder a todas tus preguntas sobre cualquier aspecto
              de nuestros procesos, incluidas nuestras obligaciones conforme al derecho <?= e(geo_in()) ?> y a los reglamentos
              europeos. Puedes escribirnos a:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Ningún otro uso de los datos personales está autorizado por nuestra parte, salvo los casos previstos en nuestra
              política de privacidad.
            </p>
            <p>
              Podemos tratar datos personales para las siguientes finalidades, en particular para garantizar el correcto
              funcionamiento de los servicios <?= e(SITE_NAME) ?> y para poner en relación a los usuarios con plataformas
              de trading de terceros. El tratamiento también puede ser necesario para mantener y mejorar
              las funciones y los servicios del sitio; para proteger nuestros derechos y para cumplir las obligaciones legales y
              de otro tipo. Por último, estos datos se usan, si es necesario, para asegurar las funciones administrativas
              y operativas ligadas a los servicios que se te prestan.
            </p>
            <p>
              Para proponer servicios más adaptados a tus preferencias y a tus necesidades, <?= e(SITE_NAME) ?>
              usa datos personales.
            </p>
            <p class="circle">
              Con el fin de usar las herramientas indispensables para proteger tus datos personales y garantizar tus
              derechos al respecto:
            </p>
            <p>
              Puedes en cualquier momento contactarnos y acceder al conjunto de tus datos personales. También podemos
              modificarlos o eliminarlos si es necesario. Tratamos además las solicitudes de transferencia de dichos
              datos hacia ti o un tercero que indiques. Ofrecemos este servicio para que puedas
              ejercer plenamente tus derechos de privacidad y de control.
            </p>
            <p class="circle">Protege tus datos personales:</p>
            <p>
              Nuestros sistemas de seguridad son de altísimo nivel e integran medidas de nivel bancario. Aunque
              una protección absoluta no puede garantizarse, nos comprometemos a mantener de forma permanente nuestros
              sistemas al máximo nivel y a reforzar las medidas ya implantadas.
            </p>
            <p>
              Disponemos de políticas de privacidad detalladas y de sistemas de seguridad de primer nivel.
            </p>
            <p class="bold-title">1. Ámbito de aplicación</p>
            <p>
              La presente política describe nuestros procedimientos de recopilación, tratamiento y comunicación de
              todos los datos relativos a personas físicas.
            </p>
            <p>
              Las disposiciones de nuestra política se aplican a todas las personas físicas identificables o
              identificadas. Conciernen en particular a toda persona física identificable a partir de
              datos que se nos confían, a los que tenemos acceso y/o que podemos combinar.
            </p>
            <p>
              El tratamiento de datos, a tenor de la política de privacidad, incluye en particular la conservación,
              la gestión y la organización de los datos personales.
            </p>
            <p>
              No recopilamos ni intentamos recopilar información sobre personas menores de 18 años.
              Tampoco permitimos a los menores de 18 años usar nuestra plataforma, para cualquier
              fin. Si constatamos que un usuario tiene menos de 18 años, eliminaremos esos datos de inmediato.
            </p>
            <p class="bold-title">2. ¿Qué datos personales recopilamos?</p>
            <p>
              En el registro recopilamos los datos personales necesarios para el uso de nuestros servicios. Si hace falta,
              también podemos pedir datos para la verificación, por ejemplo para
              confirmar que la cuenta te pertenece. Para mejorar y mantener la calidad de nuestros
              servicios, recopilamos y analizamos información sobre tu uso de la plataforma y
              de los servicios de terceros asociados.
            </p>
            <p class="bold-title">
              3. En ningún caso estás obligado a comunicarnos tus datos personales.
            </p>
            <p>
              Aunque no estás obligado a transmitirnos los datos, la decisión de no hacerlo
              puede limitar la prestación de nuestros servicios. Ello también puede comportar
              limitaciones de uso de la plataforma.
            </p>
            <p class="bold-title">
              4. ¿Qué datos personales recopilamos? Al acceder a nuestro sitio podemos recopilar los
              siguientes datos personales:
            </p>
            <p>
              No recopilamos datos que permitan identificarte personalmente. Recopilamos información como
              la actividad de tu cuenta, las direcciones IP y las fechas y horas de acceso. Para el mantenimiento,
              la seguridad y la asistencia, conservamos los informes de error, la información del navegador y el tipo
              de dispositivo usado para acceder a tu cuenta. También registramos el idioma configurado en tu cuenta.
            </p>
            <p>
              En cuanto a los datos personales, recopilamos y conservamos únicamente la información
              que facilitas al conectarte a una plataforma de trading de terceros a través de nuestros servicios.
            </p>
            <p>
              Los datos personales comunicados a plataformas de terceros pueden comprender en particular:
              nombre y apellidos, dirección, número de teléfono y dirección de correo electrónico.
            </p>
            <p class="bold-title">
              5. ¿Por qué necesita la empresa mis datos y el tratamiento es lícito?
            </p>
            <p>
              La empresa recopila, conserva y trata tus datos personales exclusivamente para las
              finalidades previstas en la política. Todos los usos y tratamientos descritos son conformes al
              derecho aplicable <?= e(geo_in()) ?> y a los reglamentos europeos.
            </p>
            <p>
              La empresa gestiona, trata o transfiere tus datos solo de conformidad con la
              normativa aplicable <?= e(geo_in()) ?>. Las bases jurídicas pertinentes se enumeran a continuación:
            </p>
            <p class="circle">
              Has consentido la conservación y el tratamiento de tus datos personales por parte
              de la empresa. Al transmitirnos los datos, nos autorizas a reenviarlos a la
              plataforma de trading de terceros interesada. Además has consentido el
              tratamiento de tus datos personales para una o varias finalidades.
            </p>
            <p class="circle">
              Para mejorar los servicios, para ejercer o defender derechos en juicio y para proteger intereses
              legítimos, puede en particular ser necesario que la empresa conserve y
              trate tus datos personales.
            </p>
            <p class="circle">El tratamiento de datos es necesario para cumplir obligaciones legales.</p>
            <p>
              Si deseas más información sobre los tratamientos que la empresa está obligada
              a realizar, no dudes en escribirnos.
            </p>
            <p>
              A continuación encuentras la lista de las finalidades precisas y de la base jurídica que nos autoriza
              a tratar tus datos personales.
            </p>
            <p class="green">Finalidad</p>
            <p class="green">Base jurídica</p>
            <p>
              1. Para facilitar tu acceso al trading digital y, exclusivamente a tu petición, nosotros
              compartimos tus datos personales con plataformas de terceros. Tus datos pueden recopilarse
              y compartirse con terceros, exclusivamente a tu petición y según tu elección.
            </p>
            <p>
              Has consentido el tratamiento de tus datos personales para una o varias finalidades.
            </p>
            <p>
              2. Te pedimos que nos transmitas la información necesaria para que podamos responder de forma rápida y
              eficaz a tus solicitudes, preocupaciones y preguntas sobre nuestros servicios.
            </p>
            <p>
              Para la persecución de los intereses legítimos de la empresa o de un tercero identificado,
              el tratamiento de los datos personales es necesario.
            </p>
            <p>
              3. Para cumplir nuestras obligaciones legales y administrativas, el tratamiento de los datos personales es necesario.
            </p>
            <p>Para respetar nuestras obligaciones legales debemos tratar determinados datos personales.</p>
            <p>
              4. Para mejorar nuestros servicios necesitamos datos anonimizados y debemos seguir el uso,
              incluidos los informes de error.
            </p>
            <p>
              Para la protección de los intereses legítimos de la empresa y de los proveedores
              externos, el tratamiento y la conservación de los datos personales son necesarios.
            </p>
            <p>5. Ello es necesario para prevenir fraudes y abusos de nuestro servicio.</p>
            <p>
              Para garantizar los intereses legítimos de la empresa y de los proveedores terceros,
              el tratamiento y la conservación de los datos personales son necesarios.
            </p>
            <p>
              6. Las exigencias de nuestro servicio nos obligan a seguir y a tratar los datos para
              el desarrollo comercial, las decisiones estratégicas, el seguimiento, el cumplimiento normativo y
              otras actividades operativas.
            </p>
            <p>
              Con el fin de proteger los intereses legítimos de la empresa y de los proveedores
              externos, el tratamiento y la conservación de los datos personales son necesarios.
            </p>
            <p>
              7. Usamos herramientas estadísticas y de análisis de datos para orientar las decisiones en un amplio
              abanico de nuestros servicios y en la planificación estratégica.
            </p>
            <p>
              Para la protección de los intereses legítimos de la empresa y de nuestros proveedores
              externos, el tratamiento y la conservación de los datos personales son necesarios.
            </p>
            <p>
              8. En la medida necesaria para proteger los derechos, los bienes y los intereses
              de la empresa y de los proveedores terceros, y de conformidad con las leyes locales y
              los reglamentos aplicables, los contratos y nuestras condiciones, podemos tratar
              datos personales. Dicho tratamiento se realiza solo según procedimientos necesarios y
              establecidos.
            </p>
            <p>
              Para la protección de los intereses legítimos de la empresa y de cada proveedor
              tercero, el tratamiento y la conservación de los datos personales son necesarios.
            </p>
            <p class="bold-title">6. Compartir los datos personales con terceros</p>
            <p>
              Para la conservación y el tratamiento de las direcciones IP, para las encuestas y el análisis de uso,
              así como para otros servicios asociados, la empresa puede compartir datos anonimizados con
              proveedores externos.
            </p>
            <p>
              A tu petición compartiremos algunos datos personales que nos has transmitido con
              proveedores externos. En tal caso, el tratamiento de tus datos queda sujeto a la
              política de privacidad de dicha empresa. Ello puede incluir diversas plataformas de trading digital.
            </p>
            <p>
              Con el fin de mejorar la atención al cliente y optimizar nuestros servicios en general,
              la empresa puede compartir datos personales con sus sociedades afiliadas y sus partners comerciales.
            </p>
            <p>
              Cuando la ley lo exige o para proteger los derechos y los bienes de la empresa y de los
              terceros interesados, podemos comunicar los datos a las autoridades judiciales o de control competentes.
            </p>
            <p>
              En el marco de operaciones estructurales, como la cesión de la empresa,
              una captación de capital o una solicitud de crédito, los datos pertinentes pueden compartirse
              de forma lícita y adecuada. Ello vale también para fusiones, reestructuraciones,
              concentraciones o insolvencia de la empresa, de conformidad con la ley.
            </p>
            <p class="bold-title">7. Cookies y servicios de terceros</p>
            <p>
              Para el análisis del sitio y en colaboración con agencias publicitarias, cookies y otras
              tecnologías similares pueden usarse de conformidad con la ley y las prácticas habituales.
            </p>
            <p>
              Las cookies, pequeños archivos de texto guardados en tu dispositivo cuando visitas un sitio, sirven para
              recopilar información sobre la navegación, las preferencias y otros datos. Su
              finalidad es personalizar y mejorar tu experiencia. Nos ayudan a recordar tus
              parámetros y preferencias y a adaptar nuestra oferta. Sirven también
              para el análisis del sitio y la producción de estadísticas para la planificación.
            </p>
            <p>
              Este sitio usa en general dos tipos de cookies: las cookies de sesión, conservadas
              solo durante la sesión y eliminadas al cerrar el navegador;
              y las cookies persistentes, que permanecen en el navegador tras el fin de la sesión. Estas
              últimas permiten al sitio reconocerte como visitante recurrente y facilitar su uso.
            </p>
            <p class="bold-title">Tipos de cookies:</p>
            <p>Las cookies pueden usarse según las necesidades, en función de la finalidad:</p>
            <p class="green">Tipo de cookie</p>
            <p>Estas cookies son estrictamente necesarias</p>
            <p class="green">Finalidad</p>
            <p>
              Las cookies sirven para identificarte como cliente, para facilitarte la información,
              los parámetros y los servicios que has solicitado.
              También facilitan la navegación en el sitio y el acceso al mismo.
            </p>
            <p>
              Usamos cookies para que tu dispositivo pueda descargar y reproducir contenidos. Permiten
              también acceder a las funciones esenciales y volver a las páginas ya visitadas.
            </p>
            <p class="green">Información complementaria</p>
            <p>
              Para un acceso rápido y sencillo al sitio, las cookies almacenan y tratan determinados
              datos personales, como el nombre de usuario y la fecha del último acceso, si pides al sitio que
              te recuerde al iniciar sesión.
            </p>
            <p>Las cookies de sesión se eliminan al cerrar el navegador.</p>
            <p class="green">Tipo de cookie</p>
            <p>Cookies funcionales</p>
            <p class="green">Finalidad</p>
            <p>
              Gracias a las cookies podemos guardar y aplicar tus parámetros y preferencias de forma segura.
              También nos permiten reconocerte cuando vuelves al sitio.
            </p>
            <p class="green">Información complementaria</p>
            <p>
              Las cookies persistentes permanecen guardadas tras la sesión y siguen activas hasta la
              fecha de caducidad.
            </p>
            <p class="green">Tipo de cookie</p>
            <p>Cookies de rendimiento</p>
            <p class="green">Finalidad</p>
            <p>
              Para mejorar nuestros servicios, recopilamos datos estadísticos mediante cookies. Estas cookies
              nos informan sobre el rendimiento del sitio y sobre su uso.
            </p>
            <p class="green">Información complementaria</p>
            <p>
              Toda la información almacenada mediante cookies es anónima y no permite identificar a personas.
            </p>
            <p>
              Las cookies de sesión se eliminan al cerrar el navegador, mientras que las cookies persistentes
              siguen activas hasta la caducidad o de forma indefinida, salvo eliminación manual.
            </p>
            <p>Cookies bloqueadas o eliminadas</p>
            <p>
              Si deseas eliminar o bloquear las cookies, debes hacerlo en la
              configuración del navegador. Consulta los enlaces siguientes para las instrucciones detalladas de los navegadores más usados.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              El bloqueo de cookies puede impedir que algunas funciones del sitio funcionen correctamente.
            </p>
            <p class="bold-title">Duración de la conservación de los datos personales</p>
            <p>
              Tus datos personales se conservan solo el tiempo estrictamente necesario para los
              tratamientos, como se indica en otras secciones de esta política. Pueden conservarse más tiempo si
              las leyes locales, los reglamentos o las políticas internas lo exigen.
            </p>
            <p>
              Tus datos personales se comparten, a tu petición y según tu elección, con plataformas
              de trading de terceros durante 12 meses. Al término de dicho periodo y con tu
              consentimiento, dichos datos se comparten durante 12 meses adicionales.
            </p>
            <p>
              Nuestros procedimientos prevén una evaluación periódica de todos los datos personales para determinar si
              siguen siendo necesarios.
            </p>
            <p class="bold-title">
              9. Transferencia de datos personales a países terceros u organizaciones internacionales
            </p>
            <p>
              Cuando es necesario para prestar nuestros servicios y/o por motivos de seguridad, podemos transferir
              datos personales a otros países (fuera del tuyo) y a organizaciones internacionales
              según protocolos de seguridad completos. Aplicamos medidas de protección de datos al
              máximo nivel para proteger tu información y garantizar tu acceso a los recursos
              y a los derechos previstos por la ley, en cualquier momento.
            </p>
            <p>
              En el Espacio Económico Europeo (EEE), todos los residentes se benefician de una protección de datos y de garantías.
            </p>
            <p class="circle">
              Las transferencias de datos se realizan siempre bajo jurisdicción y autoridad europeas, de conformidad
              con los estándares y protocolos de protección previstos en el artículo 45, apartado 3, del reglamento
              (UE) 2016/679 del Parlamento Europeo y del Consejo de 27 de abril de 2016
              (&ldquo;RGPD&rdquo;).
            </p>
            <p class="circle">
              Cualquier transferencia de datos entre autoridades públicas se realiza al amparo del artículo
              46, apartado 2. Se trata de un acuerdo jurídicamente vinculante y ejecutable.
            </p>
            <p class="circle">
              Las cláusulas contractuales tipo de la Comisión Europea al amparo del artículo 46, apartado 2, letra c), del RGPD fijan
              las condiciones de la transferencia, y dichas transferencias se realizan de conformidad con
              ellas. Puedes consultar dichas disposiciones en
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Para más información sobre las medidas de seguridad específicas adoptadas por la empresa para
              proteger tus datos personales en caso de transferencia a un país tercero, puedes enviar una solicitud
              por correo electrónico a <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Protección de los datos personales</p>
            <p>
              Los datos personales están protegidos por medidas técnicas y organizativas del más alto
              nivel, aplicadas según procedimientos de referencia. Dichos procedimientos son eficaces
              para prevenir cualquier destrucción de datos debida a un suceso ilícito o imprevisto, así como
              su pérdida o modificación.
            </p>
            <p>
              Aunque aplicamos el máximo cuidado y procedimientos conformes a los estándares más
              estrictos de protección de datos y a la ley, en ninguna circunstancia puede garantizarse
              que tus datos personales estén exentos de errores. Por tanto no podemos aceptar ninguna responsabilidad si
              los datos personales sufren un daño accidental, inmaterial o indirecto, o una divulgación.
              Ello incluye las situaciones fuera de nuestro control, como las divulgaciones debidas a errores de
              transmisión, a accesos no autorizados por parte de terceros o a otras causas similares.
            </p>
            <p>
              Cuando recibimos solicitudes jurídicamente vinculantes de autoridades de control o de otros
              organismos públicos investidos de poderes legales, podemos estar obligados a transmitir tus datos
              personales a dichos organismos. Una vez transmitidos en virtud de una obligación legal, ya no tenemos
              ningún control sobre cómo dichos organismos traten, conserven o protejan tus datos.
            </p>
            <p>
              Todo lo que transita por internet, incluida la información personal, conlleva un
              cierto riesgo de interceptación y no es seguro al 100 %. La empresa no puede garantizar la
              seguridad de los datos enviados en línea.
            </p>
            <p class="bold-title">11. Enlaces a sitios de terceros</p>
            <p>
              Este sitio contiene enlaces a aplicaciones y sitios de terceros. Te pedimos que
              tengas en cuenta que no están vinculados a la empresa ni bajo su control, y que nuestra
              política de privacidad no se aplica a dichos terceros. Operan según sus
              propios procedimientos y prioridades de recopilación y tratamiento de datos; no
              aceptamos por tanto ninguna responsabilidad por dichas actividades. Úsalos a tu discreción.
            </p>
            <p>
              Consulta siempre la política de privacidad de la empresa o del servicio cuando visites su sitio
              antes de comunicar datos personales. Verifica si sus normas de recopilación, uso y
              tratamiento coinciden con tus expectativas. Si decides compartir datos, hazlo
              directamente ante el proveedor.
            </p>
            <p class="bold-title">12. Actualizaciones de la política</p>
            <p>
              Nos reservamos el derecho de actualizar o modificar esta política en cualquier momento. Te informaremos
              de los cambios a través del sitio y de los canales afectados. La versión actualizada de la política de
              privacidad se publicará en el sitio, y la política revisada produce efectos
              desde la publicación, salvo indicación en contrario.
            </p>
            <p class="bold-title">13. Tus derechos sobre los datos personales</p>
            <p>
              Conservas el control y la última palabra sobre el uso de todos tus datos personales, lo que
              incluye la verificación de su exactitud, la corrección de errores, así como el derecho a la supresión o
              a la limitación de nuestro tratamiento, en el alcance como en la naturaleza.
            </p>
            <p>Los residentes del EEE encontrarán en esta página la información que les concierne:</p>
            <p>
              Tus datos personales están protegidos por los derechos descritos aquí. Al enviar un correo a la
              dirección siguiente, puedes ejercerlos de inmediato.
            </p>
            <p>Acceso a tus derechos</p>
            <p>
              Si los datos personales que has facilitado son exactos, puedes acceder a ellos en cualquier momento. Todos
              los datos personales que tratamos nos son accesibles y por tanto verificables.
            </p>
            <p>
              Puedes en cualquier momento solicitar tus datos personales para verificación; se te
              comunicarán en forma electrónica. Si solicitas copias adicionales de tus
              datos ya facilitados, pueden cobrarse costes razonables.
            </p>
            <p>
              Los derechos reconocidos por la ley y por la política de privacidad no deben perjudicar los derechos de
              terceros. La empresa se reserva el derecho de denegar o limitar el acceso a los datos personales
              si ello perjudica los derechos y las libertades de terceros.
            </p>
            <p>Derecho de rectificación</p>
            <p>
              Cualquier error en tus datos personales, derivado de omisión o inexactitud,
              puede ser corregido por ti o por la empresa para asegurar un tratamiento correcto.
            </p>
            <p>Derecho de supresión</p>
            <p>
              Tienes derecho a solicitar la supresión de tus datos personales en los
              siguientes casos: 1) si se trataron sin tu consentimiento o fuera de los límites legales; 2)
              a tu petición, si deseas su supresión y la empresa no tiene ninguna obligación legal de
              conservarlos; 3) si te opones a nuestro tratamiento o ya no consientes en él, aunque sea
              lícito y fundado en nuestros intereses o en los de terceros; y 4) si la ley
              nos obliga a suprimirlos.
            </p>
            <p>
              El derecho de supresión no se aplica en caso de obligaciones legales de la UE o
              de un Estado miembro. Tampoco se aplica si los datos son necesarios para ejercer o
              defender derechos en juicio.
            </p>
            <p>Derecho a la limitación del tratamiento</p>
            <p>
              Tienes derecho a solicitar la limitación del tratamiento de tus datos personales si
              consideras que contienen inexactitudes.
            </p>
            <p>
              Si solicitas la limitación del uso de tus datos personales, limitaremos su tratamiento, salvo en
              los siguientes casos: 1) si el derecho de la Unión Europea o de uno de sus
              Estados miembros se opone; 2) con tu consentimiento, si es necesario para defender o ejercer
              derechos en juicio; 3) para proteger los derechos de otra persona física.
            </p>
            <p>Derecho a la portabilidad</p>
            <p>
              Tienes derecho a acceder a los datos personales que has facilitado y a mantener su control, en la
              medida en que hayas consentido su recopilación, y si su tratamiento
              se realiza mediante sistemas automatizados.
            </p>
            <p>
              Tienes derecho a solicitar la transferencia de todos tus datos personales a otra empresa u
              organización, en la medida técnicamente posible. Este derecho no perjudica tu
              derecho de supresión. No se aplica si su ejercicio perjudica los derechos
              o las libertades de otra persona física.
            </p>
            <p>Derecho de oposición al tratamiento</p>
            <p>
              Sin perjuicio del derecho de la empresa a perseguir nuestros intereses legítimos o
              los de un tercero que actúa como proveedor, tienes derecho a oponerte al
              tratamiento y a solicitar su cese. Este derecho no se aplica si existe una necesidad
              jurídica apremiante de continuar el tratamiento, ya sea para defenderse o para ejercer
              derechos en juicio. En tales casos podemos continuar el tratamiento de tus datos.
            </p>
            <p>
              Puedes en cualquier momento oponerte al tratamiento de tus datos personales con fines de prospección comercial.
            </p>
            <p>
              Derecho a retirar el consentimiento
            </p>
            <p>
              Puedes retirar en cualquier momento el consentimiento al tratamiento de tus datos personales,
              con efecto inmediato. Dicha retirada no tiene efecto retroactivo sobre los tratamientos ya
              realizados antes de la retirada.
            </p>
            <p>
              Si no estás satisfecho, tienes derecho a presentar una reclamación ante una
              autoridad judicial, de control u otro organismo competente.
            </p>
            <p>
              Si consideras que tus derechos y libertades respecto al tratamiento de los datos personales
              han sido vulnerados, los Estados miembros de la Unión Europea disponen de autoridades de control
              a tal fin. Puedes acudir a dichas autoridades si lo consideras oportuno.
            </p>
            <p>
              La sección 13 describe las situaciones en las que tus derechos sobre los datos personales pueden verse
              limitados por el derecho de la Unión Europea o de los Estados miembros.
            </p>
            <p>
              Cuando recibamos tu solicitud sobre los datos personales y su tratamiento, te
              daremos acceso a la información solicitada, como se indica en la sección 13 de esta política.
              Podemos prorrogar dicho plazo hasta dos meses como máximo, según la amplitud de la solicitud
              y de su naturaleza. Si hace falta, te informaremos de la prórroga
              en el plazo de un mes desde la recepción de tu solicitud.
            </p>
            <p>
              Te enviaremos la información solicitada por vía electrónica y de forma gratuita, salvo si
              ello es contrario a la ley o a las disposiciones de la sección 13. Nos reservamos el derecho de
              cobrar costes razonables o de denegar una solicitud si se considera infundada, excesiva o repetitiva.
            </p>
            <p>
              Nos reservamos el derecho de pedir una verificación de identidad complementaria si existe una
              duda razonable sobre la persona que origina una solicitud relativa a los datos personales, a fin de
              proteger y asegurar la seguridad de los datos.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

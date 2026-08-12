/**
 * Complete PT→FR/IT/ES maps for cetra. Writes {fr,it,es}.json
 * Run: node scripts/cetra-i18n/write-packs.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

/** @type {Record<string, [fr: string, it: string, es: string]>} */
const rows = {};

function add(pt, fr, it, es) {
  if (!pt || pt === fr && pt === it && pt === es) return;
  rows[pt] = [fr, it, es];
}

// ─── Form ───
add('Criar conta gratuita', 'Créer un compte gratuit', 'Crea un account gratuito', 'Crear una cuenta gratis');
add('Já está registrado', 'Déjà inscrit', 'Sei già registrato', 'Ya estás registrado');
add('O seu pedido com', 'Votre demande auprès de', 'La tua richiesta su', 'Tu solicitud en');
add('foi recebido. Aguarde uma chamada do nosso gestor.', "a été reçue. Attendez l'appel de notre conseiller.", 'è stata ricevuta. Attendi la chiamata di un nostro consulente.', 'ha sido recibida. Espera la llamada de nuestro asesor.');
add('Nome', 'Prénom', 'Nome', 'Nombre');
add('Sobrenome', 'Nom', 'Cognome', 'Apellido');
add('E-mail', 'E-mail', 'E-mail', 'Correo electrónico');
add('Endereço de e-mail', 'Adresse e-mail', 'Indirizzo e-mail', 'Correo electrónico');
add('Telefone', 'Téléphone', 'Telefono', 'Teléfono');
add('Métodos de pagamento aceites', 'Moyens de paiement acceptés', 'Metodi di pagamento accettati', 'Métodos de pago aceptados');
add('Transferência bancária', 'Virement bancaire', 'Bonifico bancario', 'Transferencia bancaria');
add('Seguro', 'Sécurisé', 'Sicuro', 'Seguro');
add('Ao continuar, aceita nossos Termos e Política de Privacidade.', 'En continuant, vous acceptez nos Conditions et notre Politique de confidentialité.', "Continuando, accetti i nostri Termini e l'Informativa sulla privacy.", 'Al continuar, aceptas nuestros Términos y la Política de privacidad.');
add('Privacidade', 'Confidentialité', 'Privacy', 'Privacidad');
add('Termos de Utilização', "Conditions d'utilisation", 'Termini di utilizzo', 'Términos de uso');
add('Termos', 'Conditions', 'Termini', 'Términos');
add('Quero começar', 'Je veux commencer', 'Voglio iniziare', 'Quiero empezar');
add('Abra sua conta', 'Ouvrez votre compte', 'Apri il tuo account', 'Abre tu cuenta');
add('Abra sua conta.', 'Ouvrez votre compte.', 'Apri il tuo account.', 'Abre tu cuenta.');
add('Comece em poucos minutos.', 'Commencez en quelques minutes.', 'Inizia in pochi minuti.', 'Empieza en pocos minutos.');
add('Comece em poucos minutos', 'Commencez en quelques minutes', 'Inizia in pochi minuti', 'Empieza en pocos minutos');
add('Enviar', 'Envoyer', 'Invia', 'Enviar');
add('Deixe seus dados', 'Laissez vos coordonnées', 'Lascia i tuoi dati', 'Deja tus datos');
add('Usamos cookies para melhorar sua experiência.', 'Nous utilisons des cookies pour améliorer votre expérience.', 'Utilizziamo i cookie per migliorare la tua esperienza.', 'Usamos cookies para mejorar tu experiencia.');
add('Entendi', "J'ai compris", 'Ho capito', 'Entendido');
add('Aguarde, por favor…', 'Veuillez patienter…', 'Attendere, prego…', 'Espere, por favor…');
add('Não foi possível enviar seus dados agora. Tente novamente.', "Impossible d'envoyer vos données pour le moment. Réessayez.", 'Impossibile inviare i dati al momento. Riprova.', 'No se pudieron enviar tus datos ahora. Inténtalo de nuevo.');
add('Aguarde, por favor\\u2026', 'Veuillez patienter\\u2026', 'Attendere, prego\\u2026', 'Espere, por favor\\u2026');
add('N\\u00e3o foi poss\\u00edvel enviar seus dados agora. Tente novamente.', "Impossible d'envoyer vos donn\\u00e9es pour le moment. R\\u00e9essayez.", 'Impossibile inviare i dati al momento. Riprova.', 'No se pudieron enviar tus datos ahora. Int\\u00e9ntalo de nuevo.');

// ─── SEO / head / schema ───
add('IA e execução em tempo real', 'IA et exécution en temps réel', 'IA ed esecuzione in tempo reale', 'IA y ejecución en tiempo real');
add('IA e execução em tempo real | Site Oficial', 'IA et exécution en temps réel | Site officiel', 'IA ed esecuzione in tempo reale | Sito ufficiale', 'IA y ejecución en tiempo real | Sitio oficial');
add(' — tecnologia de IA que analisa mercados e executa ordens em tempo real, com um analista pessoal ao seu lado.', " — une technologie d'IA qui analyse les marchés et exécute des ordres en temps réel, avec un analyste personnel à vos côtés.", ' — tecnologia di IA che analizza i mercati ed esegue ordini in tempo reale, con un analista personale al tuo fianco.', ' — tecnología de IA que analiza mercados y ejecuta órdenes en tiempo real, con un analista personal a tu lado.');
add(' — tecnologia de IA que analisa mercados e executa ordens em tempo real, com um analista pessoal ao seu lado para construir uma nova fonte de renda.', " — une technologie d'IA qui analyse les marchés et exécute des ordres en temps réel, avec un analyste personnel à vos côtés pour construire une nouvelle source de revenus.", ' — tecnologia di IA che analizza i mercati ed esegue ordini in tempo reale, con un analista personale al tuo fianco per costruire una nuova fonte di reddito.', ' — tecnología de IA que analiza mercados y ejecuta órdenes en tiempo real, con un analista personal a tu lado para construir una nueva fuente de ingresos.');
add(' — plataforma de investimento com IA e execução em tempo real.', " — plateforme d'investissement avec IA et exécution en temps réel.", ' — piattaforma di investimento con IA ed esecuzione in tempo reale.', ' — plataforma de inversión con IA y ejecución en tiempo real.');
add('plataforma de investimento com IA e execução em tempo real.', "plateforme d'investissement avec IA et exécution en temps réel.", 'piattaforma di investimento con IA ed esecuzione in tempo reale.', 'plataforma de inversión con IA y ejecución en tiempo real.');
add('Política de Privacidade', 'Politique de confidentialité', 'Informativa sulla privacy', 'Política de privacidad');
add(
  "Como a ' . SITE_NAME . ' recolhe, utiliza e protege os seus dados pessoais.",
  "Comment ' . SITE_NAME . ' collecte, utilise et protège vos données personnelles.",
  "Come ' . SITE_NAME . ' raccoglie, utilizza e protegge i tuoi dati personali.",
  "Cómo ' . SITE_NAME . ' recoge, utiliza y protege tus datos personales.",
);
add(
  'Como a <?= e(SITE_NAME) ?> recolhe, utiliza e protege os seus dados pessoais.',
  'Comment <?= e(SITE_NAME) ?> collecte, utilise et protège vos données personnelles.',
  'Come <?= e(SITE_NAME) ?> raccoglie, utilizza e protegge i tuoi dati personali.',
  'Cómo <?= e(SITE_NAME) ?> recoge, utiliza y protege tus datos personales.',
);
add(
  "As regras que se aplicam quando acede ou utiliza ' . SITE_NAME . '.",
  "Les règles applicables lorsque vous accédez à ou utilisez ' . SITE_NAME . '.",
  "Le regole che si applicano quando accedi o utilizzi ' . SITE_NAME . '.",
  "Las normas que se aplican cuando accedes o utilizas ' . SITE_NAME . '.",
);
add(
  'As regras que se aplicam quando acede ou utiliza <?= e(SITE_NAME) ?>.',
  'Les règles applicables lorsque vous accédez à ou utilisez <?= e(SITE_NAME) ?>.',
  'Le regole che si applicano quando accedi o utilizzi <?= e(SITE_NAME) ?>.',
  'Las normas que se aplican cuando accedes o utilizas <?= e(SITE_NAME) ?>.',
);

// ─── Nav ───
add('Saltar para o conteúdo', 'Aller au contenu', 'Vai al contenuto', 'Saltar al contenido');
add('Principal', 'Principal', 'Principale', 'Principal');
add('Produto', 'Produit', 'Prodotto', 'Producto');
add('Como funciona.', 'Comment ça marche.', 'Come funziona.', 'Cómo funciona.');
add('Como funciona', 'Comment ça marche', 'Come funziona', 'Cómo funciona');
add('Mercados em tempo real', 'Marchés en temps réel', 'Mercati in tempo reale', 'Mercados en tiempo real');
add('Abrir menu', 'Ouvrir le menu', 'Apri menu', 'Abrir menú');
add('Começar', 'Commencer', 'Inizia', 'Empezar');
add('Começar agora', 'Commencer maintenant', 'Inizia ora', 'Empezar ahora');
add('Comece agora', 'Commencez maintenant', 'Inizia ora', 'Empieza ahora');
add('Comece agora —', 'Commencez maintenant —', 'Inizia ora —', 'Empieza ahora —');
add(' mín.', ' min.', ' min.', ' mín.');
add('Contacto', 'Contact', 'Contatti', 'Contacto');
add('Sobre', 'À propos', 'Chi siamo', 'Sobre nosotros');
add('Preços', 'Tarifs', 'Prezzi', 'Precios');
add('Empresa', 'Entreprise', 'Azienda', 'Empresa');
add('Divulgação de Riscos', 'Avertissement sur les risques', 'Informativa sui rischi', 'Divulgación de riesgos');
add('Denunciar abuso', 'Signaler un abus', 'Segnala un abuso', 'Denunciar abuso');
add('Plataforma', 'Plateforme', 'Piattaforma', 'Plataforma');
add('Mercados', 'Marchés', 'Mercati', 'Mercados');
add('Perguntas Frequentes', 'Questions fréquentes', 'Domande frequenti', 'Preguntas frecuentes');
add('Perguntas frequentes', 'Questions fréquentes', 'Domande frequenti', 'Preguntas frecuentes');
add('Perguntas frequentes.', 'Questions fréquentes.', 'Domande frequenti.', 'Preguntas frecuentes.');
add('Todos os direitos reservados', 'Tous droits réservés', 'Tutti i diritti riservati', 'Todos los derechos reservados');
add('Todos os direitos reservados.', 'Tous droits réservés.', 'Tutti i diritti riservati.', 'Todos los derechos reservados.');

// Continue in same file — hero through legal
add('IA em tempo real + análise humana', 'IA en temps réel + analyse humaine', 'IA in tempo reale + analisi umana', 'IA en tiempo real + análisis humano');
add(' — invista agora, veja seu capital crescer', ' — investissez maintenant, voyez croître votre capital', ' — investi ora, guarda crescere il tuo capitale', ' — invierte ahora, mira crecer tu capital');
add('Um motor de inteligência artificial escaneia os mercados e executa ordens em frações de segundo, enquanto seu analista pessoal ajusta cada decisão ao seu perfil. Sem experiência necessária — é guiado do início ao fim.', "Un moteur d'intelligence artificielle scanne les marchés et exécute des ordres en fractions de seconde, tandis que votre analyste personnel adapte chaque décision à votre profil. Aucune expérience requise — vous êtes guidé du début à la fin.", "Un motore di intelligenza artificiale scansiona i mercati ed esegue ordini in frazioni di secondo, mentre il tuo analista personale adatta ogni decisione al tuo profilo. Nessuna esperienza necessaria — sei guidato dall'inizio alla fine.", 'Un motor de inteligencia artificial escanea los mercados y ejecuta órdenes en fracciones de segundo, mientras tu analista personal ajusta cada decisión a tu perfil. Sin experiencia necesaria — te guían de principio a fin.');
add('Regulado', 'Régulé', 'Regolamentato', 'Regulado');
add('Fundos segregados', 'Fonds ségrégués', 'Fondi segregati', 'Fondos segregados');
add('9.600 clientes', '9 600 clients', '9.600 clienti', '9.600 clientes');
add('avaliação', 'note', 'valutazione', 'valoración');
add('Protegido por SSL', 'Protégé par SSL', 'Protetto da SSL', 'Protegido por SSL');
add('Apoio 24/7', 'Assistance 24/7', 'Supporto 24/7', 'Soporte 24/7');
add('Execução rápida', 'Exécution rapide', 'Esecuzione rapida', 'Ejecución rápida');
add('Indicadores-chave', 'Indicateurs clés', 'Indicatori chiave', 'Indicadores clave');
add('Usuários ativos', 'Utilisateurs actifs', 'Utenti attivi', 'Usuarios activos');
add('Volume negociado', 'Volume négocié', 'Volume scambiato', 'Volumen negociado');
add('Disponibilidade dos sinais', 'Disponibilité des signaux', 'Disponibilità dei segnali', 'Disponibilidad de las señales');
add('Suporte', 'Support', 'Supporto', 'Soporte');

add('Por dentro da', "À l'intérieur de", 'Dentro', 'Dentro de');
add('Acompanhe sua conta em tempo real', 'Suivez votre compte en temps réel', 'Monitora il tuo account in tempo reale', 'Sigue tu cuenta en tiempo real');
add('Cada ordem executada pelo seu analista é registrada aqui — entradas, saídas e resultados verificados em cada par, transmitidos ao vivo.', 'Chaque ordre exécuté par votre analyste est enregistré ici — entrées, sorties et résultats vérifiés sur chaque paire, diffusés en direct.', 'Ogni ordine eseguito dal tuo analista viene registrato qui — ingressi, uscite e risultati verificati su ogni coppia, trasmessi in diretta.', 'Cada orden ejecutada por tu analista se registra aquí — entradas, salidas y resultados verificados en cada par, transmitidos en vivo.');
add('Gráficos de candles e profundidade em tempo real, em qualquer dispositivo', 'Graphiques en chandeliers et profondeur en temps réel, sur tout appareil', 'Grafici a candele e depth in tempo reale, su qualsiasi dispositivo', 'Gráficos de velas y profundidad en tiempo real, en cualquier dispositivo');
add('Envio de ordens com um toque e confirmação instantânea', "Envoi d'ordres en un tap et confirmation instantanée", 'Invio ordini con un tocco e conferma istantanea', 'Envío de órdenes con un toque y confirmación instantánea');
add('Listas de acompanhamento e alertas de preço que seguem', 'Listes de suivi et alertes de prix qui vous suivent', 'Watchlist e avvisi di prezzo che ti seguono', 'Listas de seguimiento y alertas de precio que te acompañan');
add(' — trading móvel com gráficos de criptomoedas em tempo real', ' — trading mobile avec graphiques crypto en temps réel', ' — trading mobile con grafici crypto in tempo reale', ' — trading móvil con gráficos de criptomonedas en tiempo real');

add('A plataforma', 'La plateforme', 'La piattaforma', 'La plataforma');
add('Tudo que precisa, numa só plataforma veloz.', 'Tout ce dont vous avez besoin, sur une seule plateforme rapide.', "Tutto ciò di cui hai bisogno, in un'unica piattaforma veloce.", 'Todo lo que necesitas, en una sola plataforma rápida.');
add('Sem gráficos para vigiar, sem ordens para cronometrar. O motor da <?= e(SITE_NAME) ?> monitora livros de ofertas em tempo real em exchanges de criptomoedas, APIs de ações globais e os principais pares de forex — e dispara ordens no instante em que os modelos encontram uma configuração vantajosa.', "Sans graphiques à surveiller, sans ordres à chronométrer. Le moteur de <?= e(SITE_NAME) ?> surveille les carnets d'ordres en temps réel sur les exchanges crypto, les API d'actions mondiales et les principales paires forex — et déclenche des ordres dès que les modèles trouvent une configuration avantageuse.", 'Niente grafici da sorvegliare, niente ordini da cronometrare. Il motore di <?= e(SITE_NAME) ?> monitora i order book in tempo reale sugli exchange crypto, le API azionarie globali e le principali coppie forex — e lancia ordini nell\'istante in cui i modelli trovano una configurazione vantaggiosa.', 'Sin gráficos que vigilar, sin órdenes que cronometrar. El motor de <?= e(SITE_NAME) ?> monitoriza los libros de órdenes en tiempo real en exchanges de criptomonedas, APIs de acciones globales y los principales pares de forex — y dispara órdenes en el instante en que los modelos encuentran una configuración ventajosa.');

add('Execução em frações de segundo em cada praça conectada', 'Exécution en fractions de seconde sur chaque place connectée', 'Esecuzione in frazioni di secondo su ogni piazza collegata', 'Ejecución en fracciones de segundo en cada plaza conectada');
add('A <?= e(SITE_NAME) ?> mantém conexões de API de baixa latência com cada exchange suportada. Quando o modelo dispara um sinal, a ordem é roteada, executada e registrada no seu painel antes do próximo tick.', '<?= e(SITE_NAME) ?> maintient des connexions API à faible latence avec chaque exchange pris en charge. Lorsque le modèle émet un signal, l\'ordre est routé, exécuté et enregistré dans votre tableau de bord avant le prochain tick.', '<?= e(SITE_NAME) ?> mantiene connessioni API a bassa latenza con ogni exchange supportato. Quando il modello emette un segnale, l\'ordine viene instradato, eseguito e registrato nel tuo pannello prima del tick successivo.', '<?= e(SITE_NAME) ?> mantiene conexiones API de baja latencia con cada exchange compatible. Cuando el modelo emite una señal, la orden se enruta, se ejecuta y se registra en tu panel antes del siguiente tick.');
add('Ativa 24 horas por dia, em todas as sessões', 'Active 24 h/24, sur toutes les sessions', 'Attiva 24 ore su 24, in tutte le sessioni', 'Activa las 24 horas, en todas las sesiones');
add('O mercado cripto nunca dorme, e o motor da <?= e(SITE_NAME) ?> também não. Ele continua escaneando pares durante fins de semana e feriados, para si nunca perder uma janela.', 'Le marché crypto ne dort jamais, et le moteur de <?= e(SITE_NAME) ?> non plus. Il continue de scanner les paires pendant les week-ends et jours fériés, pour que vous ne manquiez jamais une fenêtre.', 'Il mercato crypto non dorme mai, e il motore di <?= e(SITE_NAME) ?> nemmeno. Continua a scansionare le coppie nei weekend e nei giorni festivi, così non perdi mai una finestra.', 'El mercado crypto nunca duerme, y el motor de <?= e(SITE_NAME) ?> tampoco. Sigue escaneando pares durante fines de semana y festivos, para que nunca pierdas una ventana.');
add('Relatórios em múltiplas moedas', 'Rapports en plusieurs devises', 'Report in più valute', 'Informes en múltiples monedas');
add('Cada saldo, cada ordem, cada retirada aparece na sua moeda local. Nenhuma etapa oculta de conversão.', 'Chaque solde, chaque ordre, chaque retrait apparaît dans votre devise locale. Aucune étape de conversion cachée.', 'Ogni saldo, ogni ordine, ogni prelievo appare nella tua valuta locale. Nessuna fase di conversione nascosta.', 'Cada saldo, cada orden, cada retiro aparece en tu moneda local. Ningún paso oculto de conversión.');
add('Capital segregado', 'Capital ségrégué', 'Capitale segregato', 'Capital segregado');
add('Seus recursos permanecem na sua própria conta. A <?= e(SITE_NAME) ?> nunca tem custódia — o motor apenas tem permissão para rotear ordens.', 'Vos fonds restent sur votre propre compte. <?= e(SITE_NAME) ?> n\'a jamais la garde — le moteur a seulement l\'autorisation de router les ordres.', 'Le tue risorse restano sul tuo account. <?= e(SITE_NAME) ?> non ha mai la custodia — il motore ha solo il permesso di instradare gli ordini.', 'Tus fondos permanecen en tu propia cuenta. <?= e(SITE_NAME) ?> nunca tiene la custodia — el motor solo tiene permiso para enrutar órdenes.');
add('Segurança de nível bancário', 'Sécurité de niveau bancaire', 'Sicurezza di livello bancario', 'Seguridad de nivel bancario');
add('Criptografia TLS em toda a plataforma, autenticação em duas etapas por padrão e auditorias trimestrais de infraestrutura por terceiros. Recibos de operações registrados em blockchain.', 'Chiffrement TLS sur toute la plateforme, authentification à deux facteurs par défaut et audits trimestriels d\'infrastructure par des tiers. Reçus d\'opérations enregistrés sur blockchain.', 'Crittografia TLS su tutta la piattaforma, autenticazione a due fattori di default e audit trimestrali dell\'infrastruttura da terzi. Ricevute delle operazioni registrate su blockchain.', 'Cifrado TLS en toda la plataforma, autenticación en dos pasos por defecto y auditorías trimestrales de infraestructura por terceros. Recibos de operaciones registrados en blockchain.');
add('Três classes de ativos, uma só plataforma', 'Trois classes d\'actifs, une seule plateforme', 'Tre classi di asset, un\'unica piattaforma', 'Tres clases de activos, una sola plataforma');
add('A maioria das plataformas de varejo limita a um único mercado. A <?= e(SITE_NAME) ?> opera cripto, ações listadas e os principais pares de forex no mesmo painel.', 'La plupart des plateformes grand public se limitent à un seul marché. <?= e(SITE_NAME) ?> opère la crypto, les actions cotées et les principales paires forex dans le même tableau de bord.', 'La maggior parte delle piattaforme retail si limita a un solo mercato. <?= e(SITE_NAME) ?> opera crypto, azioni quotate e le principali coppie forex nello stesso pannello.', 'La mayoría de las plataformas minoristas se limitan a un solo mercado. <?= e(SITE_NAME) ?> opera cripto, acciones cotizadas y los principales pares de forex en el mismo panel.');
add('Limites de risco predefinidos em cada posição', 'Limites de risque prédéfinis sur chaque position', 'Limiti di rischio predefiniti su ogni posizione', 'Límites de riesgo predefinidos en cada posición');
add('Stop-loss, drawdown máximo e limites de alocação de capital são configurados por classe de ativo. O motor sai automaticamente de qualquer operação que cruze um limite, e o evento é registrado no seu histórico de auditoria.', 'Stop-loss, drawdown maximum et limites d\'allocation de capital sont configurés par classe d\'actifs. Le moteur sort automatiquement de toute opération qui franchit une limite, et l\'événement est enregistré dans votre historique d\'audit.', 'Stop-loss, drawdown massimo e limiti di allocazione del capitale sono configurati per classe di asset. Il motore esce automaticamente da ogni operazione che supera un limite, e l\'evento viene registrato nel tuo storico di audit.', 'Stop-loss, drawdown máximo y límites de asignación de capital se configuran por clase de activo. El motor sale automáticamente de cualquier operación que cruce un límite, y el evento se registra en tu historial de auditoría.');

console.log('mid count', Object.keys(rows).length);
export { rows, add };

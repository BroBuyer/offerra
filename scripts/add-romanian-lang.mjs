import fs from 'node:fs';
import path from 'node:path';
import https from 'node:https';

const repo = path.resolve('.');

function copyDir(src, dest) {
    fs.cpSync(src, dest, { recursive: true });
}

function walkFiles(dir, ext) {
    const files = [];
    for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
        const full = path.join(dir, entry.name);
        if (entry.isDirectory()) {
            files.push(...walkFiles(full, ext));
        } else if (entry.name.endsWith(ext)) {
            files.push(full);
        }
    }
    return files;
}

// Italian → Romanian (longer phrases first when applying).
const translations = [
    ["define('SITE_LANG', 'it')", "define('SITE_LANG', 'ro')"],
    ["define('ACTIVE_LANG', 'it')", "define('ACTIVE_LANG', 'ro')"],
    ['Piattaforma di trading AI', 'Platformă de tranzacționare AI'],
    ['Fai trading in modo piu intelligente.', 'Tranzacționează mai inteligent.'],
    ['Reagisci piu velocemente.', 'Reacționează mai rapid.'],
    ['Il nuovo standard per il trading crypto e multi-mercato.', 'Noul standard pentru tranzacționarea crypto și multi-piață.'],
    ['Sicurezza avanzata, costi trasparenti,', 'Securitate avansată, costuri transparente,'],
    ["insight guidati dall'AI e un'interfaccia che accelera le tue decisioni.", 'insight-uri ghidate de AI și o interfață care accelerează deciziile tale.'],
    ['SSL protetto', 'SSL securizat'],
    ['Supporto 24/7', 'Suport 24/7'],
    ['Esecuzione rapida', 'Execuție rapidă'],
    ['Inizia a fare trading', 'Începe să tranzacționezi'],
    ['Statistiche della piattaforma', 'Statistici ale platformei'],
    ['Valute disponibili', 'Monede disponibile'],
    ['Utenti verificati', 'Utilizatori verificați'],
    ['Volume di trading', 'Volum de tranzacționare'],
    ['Paesi supportati', 'Țări suportate'],
    ['Panoramica della piattaforma di trading', 'Prezentare generală a platformei de tranzacționare'],
    ['Piattaforma di trading', 'Platformă de tranzacționare'],
    ['Grafici professionali.', 'Grafice profesionale.'],
    ['Pronta per mobile.', 'Pregătită pentru mobil.'],
    ['Interfaccia pulita ispirata agli exchange moderni, con dati BTC/USDT in tempo reale, gestione del portafoglio', 'Interfață curată inspirată de exchange-urile moderne, cu date BTC/USDT în timp real, gestionarea portofoliului'],
    ['e operativita con un solo clic. Progettata per darti sicurezza fin dal primo accesso.', 'și operativitate cu un singur clic. Proiectată să îți ofere încredere de la prima autentificare.'],
    ['Grafici a candele in tempo reale', 'Grafice cu lumânări în timp real'],
    ["Portafoglio e P/L a colpo d'occhio", 'Portofoliu și P/L dintr-o privire'],
    ['Dashboard conto sicura', 'Tablou de bord securizat al contului'],
    ['Prova la piattaforma', 'Încearcă platforma'],
    ['Tutto cio che ti serve per operare con fiducia', 'Tot ce ai nevoie pentru a tranzacționa cu încredere'],
    ['Sicurezza, velocita e intelligenza in una piattaforma chiara progettata per i trader moderni.', 'Securitate, viteză și inteligență într-o platformă clară proiectată pentru traderii moderni.'],
    ['Sicurezza di livello bancario', 'Securitate la nivel bancar'],
    ['Crittografia SSL, 2FA e gestione sicura dei fondi proteggono i tuoi dati e il tuo capitale in ogni fase.', 'Criptare SSL, 2FA și gestionarea sigură a fondurilor îți protejează datele și capitalul în fiecare etapă.'],
    ['Segnali di mercato AI', 'Semnale de piață AI'],
    ['Insight precisi in tempo reale ti aiutano a individuare opportunita e prendere decisioni piu rapide e informate.', 'Insight-uri precise în timp real te ajută să identifici oportunități și să iei decizii mai rapide și informate.'],
    ['Trading automatizzato', 'Tranzacționare automatizată'],
    ["I bot assistiti dall'AI operano 24/7 per un'esecuzione efficiente delle strategie, mentre mantieni il pieno controllo.", 'Boții asistați de AI operează 24/7 pentru o execuție eficientă a strategiilor, păstrând controlul deplin.'],
    ['Accesso multi-mercato', 'Acces multi-piață'],
    ['Fai trading su crypto, forex, azioni e materie prime in un unico ambiente integrato.', 'Tranzacționează crypto, forex, acțiuni și mărfuri într-un singur mediu integrat.'],
    ['Esecuzione a bassa latenza', 'Execuție cu latență redusă'],
    ["Infrastruttura ottimizzata per un'esecuzione stabile degli ordini anche durante elevata volatilita di mercato.", 'Infrastructură optimizată pentru execuția stabilă a ordinelor chiar și în perioade de volatilitate ridicată.'],
    ['Interfaccia pulita', 'Interfață curată'],
    ['Design minimale che riduce le distrazioni e ti permette di concentrarti sulla strategia, non sulla navigazione.', 'Design minimalist care reduce distragerile și te lasă să te concentrezi pe strategie, nu pe navigare.'],
    ['Mercati in tempo reale', 'Piețe în timp real'],
    ['Fai trading su Bitcoin, Ethereum e altri asset', 'Tranzacționează Bitcoin, Ethereum și alte active'],
    ['Prezzi live, indicatori avanzati e una panoramica professionale dei mercati che ti interessano.', 'Prețuri live, indicatori avansați și o prezentare profesională a piețelor care te interesează.'],
    ['Accedi ai mercati', 'Accesează piețele'],
    ['Prezzi di mercato in tempo reale', 'Prețuri de piață în timp real'],
    ['Come iniziare', 'Cum să începi'],
    ['Dalla registrazione al primo trade in pochi minuti', 'De la înregistrare la primul trade în câteva minute'],
    ['Un percorso chiaro, senza complessita o incertezze inutili.', 'Un parcurs clar, fără complexitate sau incertitudini inutile.'],
    ['Crea il tuo account', 'Creează-ți contul'],
    ['Registrati con i tuoi dati e ottieni accesso immediato e sicuro alla piattaforma.', 'Înregistrează-te cu datele tale și obține acces imediat și securizat la platformă.'],
    ["Verifica l'email", 'Verifică e-mailul'],
    ["Conferma il tuo indirizzo e sblocca l'esperienza di trading completa.", 'Confirmă adresa ta și deblochează experiența completă de tranzacționare.'],
    ['Deposita fondi', 'Depune fonduri'],
    ['Versa almeno', 'Depune minim'],
    ['tramite bonifico bancario, carta o e-wallet.', 'prin transfer bancar, card sau e-wallet.'],
    ['Imposta la strategia', 'Setează strategia'],
    ["Scegli livello di rischio e preferenze: manuale o con automazione assistita dall'AI.", 'Alege nivelul de risc și preferințele: manual sau cu automatizare asistată de AI.'],
    ['Inizia a fare trading', 'Începe să tranzacționezi'],
    ['Entra sul mercato con grafici live, strumenti professionali e supporto sempre disponibile.', 'Intră pe piață cu grafice live, instrumente profesionale și suport mereu disponibil.'],
    ['Apri ora il tuo account', 'Deschide-ți contul acum'],
    ['Deposita con i metodi che gia utilizzi', 'Depune cu metodele pe care le folosești deja'],
    ['Carte, e-wallet e bonifici bancari, protetti da crittografia SSL.', 'Carduri, e-wallet-uri și transferuri bancare, protejate prin criptare SSL.'],
    ['depositi e finanziamento del conto', 'depuneri și finanțarea contului'],
    ['Infrastruttura affidabile', 'Infrastructură de încredere'],
    ['Costruita con partner leader del settore', 'Construită cu parteneri de top din industrie'],
    ['Recensioni', 'Recenzii'],
    ['Cosa dicono i trader', 'Ce spun traderii'],
    ['Trader indipendente', 'Trader independent'],
    ['Come posso iniziare?', 'Cum pot începe?'],
    ['Crea un account con i tuoi dati di base, completa una breve verifica e deposita un minimo di', 'Creează un cont cu datele tale de bază, finalizează o scurtă verificare și depune minim'],
    ["Ottieni l'accesso completo alla piattaforma, inclusi grafici live e strumenti di trading.", 'Obții acces complet la platformă, inclusiv grafice live și instrumente de tranzacționare.'],
    ['I miei soldi e i miei dati sono al sicuro?', 'Banii și datele mele sunt în siguranță?'],
    ['Utilizziamo crittografia SSL, autenticazione a due fattori e elaborazione sicura tramite fornitori affidabili.', 'Folosim criptare SSL, autentificare în doi pași și procesare securizată prin furnizori de încredere.'],
    ['I tuoi dati personali sono trattati secondo rigorose regole di sicurezza a tutti i livelli.', 'Datele tale personale sunt tratate conform unor reguli stricte de securitate la toate nivelurile.'],
    ['Quando posso prelevare i miei profitti?', 'Când pot retrage profiturile?'],
    ['Puoi richiedere un prelievo in qualsiasi momento dalla dashboard.', 'Poți solicita o retragere oricând din tabloul de bord.'],
    ['L\'elaborazione richiede solitamente da 1 a 3 giorni lavorativi.', 'Procesarea durează de obicei între 1 și 3 zile lucrătoare.'],
    ['Commissioni e tempistiche sono sempre indicate in anticipo, senza sorprese.', 'Comisioanele și termenele sunt întotdeauna indicate dinainte, fără surprize.'],
    ['Ho bisogno di esperienza di trading?', 'Am nevoie de experiență în tranzacționare?'],
    ['Per niente.', 'Deloc.'],
    ["L'onboarding assistito, guide semplici e strumenti supportati dall'AI ti aiutano a imparare al tuo ritmo.", 'Onboarding-ul asistat, ghidurile simple și instrumentele asistate de AI te ajută să înveți în ritmul tău.'],
    ['Che tu sia un principiante o un trader esperto, il supporto e disponibile 24/7.', 'Fie că ești începător sau trader experimentat, suportul este disponibil 24/7.'],
    ['Su quali mercati posso fare trading?', 'Pe ce piețe pot tranzacționa?'],
    ['Accedi a criptovalute, forex, azioni globali e materie prime in un\'unica interfaccia.', 'Accesează criptomonede, forex, acțiuni globale și mărfuri într-o singură interfață.'],
    ['Dati in tempo reale, analisi integrate e supporto per strategie manuali e automatizzate.', 'Date în timp real, analize integrate și suport pentru strategii manuale și automatizate.'],
    ['Opzioni chiave a colpo d\'occhio', 'Opțiuni cheie dintr-o privire'],
    ['Motore di trading AI', 'Motor de tranzacționare AI'],
    ['Analisi avanzata del mercato con machine learning', 'Analiză avansată a pieței cu machine learning'],
    ['Metodi di finanziamento', 'Metode de finanțare'],
    ['Carte di pagamento, bonifici bancari, PayPal, e-wallet', 'Carduri de plată, transferuri bancare, PayPal, e-wallet-uri'],
    ['Accesso per dispositivo', 'Acces pe dispozitive'],
    ['Web, tablet e mobile, completamente responsive', 'Web, tabletă și mobil, complet responsive'],
    ['Precisione dei segnali', 'Precizia semnalelor'],
    ['Fino all\'85% per strategie AI supportate', 'Până la 85% pentru strategii AI suportate'],
    ['Crypto, forex, azioni, materie prime', 'Crypto, forex, acțiuni, mărfuri'],
    ['Configurazione rapida dell\'account con verifica assistita', 'Configurare rapidă a contului cu verificare asistată'],
    ['Supporto professionale 24/7', 'Suport profesional 24/7'],
    ['Contattaci', 'Contactează-ne'],
    ['Valutazione', 'Evaluare'],
    ['recensioni', 'recenzii'],
    ['Basato su', 'Bazat pe'],
    ['valutazioni', 'evaluări'],
    ['Sei pronto a fare trading su una piattaforma progettata per la chiarezza?', 'Ești pregătit să tranzacționezi pe o platformă proiectată pentru claritate?'],
    ['Unisciti a trader privati e aziende che acquistano, vendono e gestiscono asset digitali con fiducia.', 'Alătură-te traderilor privați și companiilor care cumpără, vând și gestionează active digitale cu încredere.'],
    ['Fai trading su criptovalute, forex e mercati globali con', 'Tranzacționează criptomonede, forex și piețe globale cu'],
    ['Analisi in tempo reale, segnali supportati dall\'AI e una piattaforma progettata per velocita e chiarezza.', 'Analiză în timp real, semnale asistate de AI și o platformă proiectată pentru viteză și claritate.'],
    ['Apri il tuo conto in 2 minuti', 'Deschide-ți contul în 2 minute'],
    ['Sei gia registrato', 'Ești deja înregistrat'],
    ['Abbiamo ricevuto la tua richiesta su', 'Am primit solicitarea ta pe'],
    ['Riceverai presto una chiamata da un nostro specialista.', 'Vei primi în curând un apel de la un specialist al nostru.'],
    ['Nome', 'Prenume'],
    ['Cognome', 'Nume'],
    ['Email', 'E-mail'],
    ['Telefono', 'Telefon'],
    ['Crea account gratuito', 'Creează cont gratuit'],
    ['registrazione account', 'înregistrare cont'],
    ['Inviando i tuoi dati, accetti la nostra', 'Prin trimiterea datelor tale, accepți'],
    ['Informativa sulla privacy', 'Politica de confidențialitate'],
    ['Termini di utilizzo', 'Termenii de utilizare'],
    ['Navigazione principale', 'Navigare principală'],
    ['Home', 'Acasă'],
    ['Prodotto', 'Produs'],
    ['Offerta', 'Ofertă'],
    ['Contatti', 'Contact'],
    ['FAQ', 'Întrebări frecvente'],
    ['Inizia', 'Începe'],
    ['Apri menu', 'Deschide meniul'],
    ['Navigazione mobile', 'Navigare mobilă'],
    ['Domande frequenti', 'Întrebări frecvente'],
    ['Grazie', 'Mulțumim'],
    ['La tua richiesta e stata ricevuta', 'Solicitarea ta a fost primită'],
    ['Inserisci un numero di telefono valido', 'Introduceți un număr de telefon valid'],
    ['Prefisso nazionale non valido', 'Prefix național invalid'],
    ['Il numero di telefono e troppo corto', 'Numărul de telefon este prea scurt'],
    ['Il numero di telefono e troppo lungo', 'Numărul de telefon este prea lung'],
    ['Inserisci il tuo numero di telefono', 'Introduceți numărul de telefon'],
    ['Mercati', 'Piețe'],
    ['Depositi', 'Depuneri'],
    ['Perche', 'De ce'],
    ['Live', 'Live'],
    ['it-IT', 'ro-RO'],
    ['Italiano', 'Română'],
    ["Analisi in tempo reale, segnali supportati dall'AI e una piattaforma progettata per velocita e chiarezza.", 'Analiză în timp real, semnale asistate de AI și o platformă proiectată pentru viteză și claritate.'],
    ['Inserisci i tuoi dati qui sotto', 'Introduceți datele mai jos'],
    ['Apri il tuo conto di trading', 'Deschide-ți contul de tranzacționare'],
    ['Unisciti a migliaia di trader. Deposito minimo', 'Alătură-te miilor de traderi. Depozit minim'],
    ['Creează-ți contul su ', 'Creează-ți contul pe '],
    [' e inizia a fare trading su crypto, forex e mercati globali con strumenti assistiti dall\'AI.', ' și începe să tranzacționezi crypto, forex și piețe globale cu instrumente asistate de AI.'],
    ['Scopri gli strumenti di trading di ', 'Descoperă instrumentele de tranzacționare '],
    [' - analisi in tempo reale, segnali AI, accesso multi-mercato e strategie automatizzate.', ' — analiză în timp real, semnale AI, acces multi-piață și strategii automatizate.'],
    ['Analisi digitale progettata per i trader', 'Analiză digitală proiectată pentru traderi'],
    ["Un'unica piattaforma. Tutti i mercati. Strumenti che seguono il tuo ritmo.", 'O singură platformă. Toate piețele. Instrumente care urmează ritmul tău.'],
    ['Motore segnali AI', 'Motor de semnale AI'],
    ['I modelli di machine learning evidenziano setup ad alta probabilita con contesto chiaro per entrata e uscita.', 'Modelele de machine learning evidențiază setup-uri cu probabilitate ridicată, cu context clar pentru intrare și ieșire.'],
    ['Configura bot con gestione del rischio personalizzata: monitora e ottimizza, oppure opera manualmente in parallelo.', 'Configurează boți cu gestionarea personalizată a riscului: monitorizează și optimizează, sau operează manual în paralel.'],
    ['Strumenti stop-loss, take-profit e sizing delle posizioni integrati in ogni workflow operativo.', 'Instrumente stop-loss, take-profit și dimensionare a pozițiilor integrate în fiecare flux operațional.'],
    ['Guide pratiche e spiegazioni dei mercati per trader principianti e intermedi.', 'Ghiduri practice și explicații despre piețe pentru traderi începători și intermediari.'],
    ['Scegli l\'offerta di ', 'Alege oferta '],
    [' - inizia con un deposito minimo di ', ' — începe cu un depozit minim de '],
    [' e sblocca l\'accesso completo alla piattaforma.', ' și deblochează accesul complet la platformă.'],
    ['Ottieni la gestione del portafoglio gratuita con la registrazione', 'Obține gestionarea gratuită a portofoliului la înregistrare'],
    ['Începe da ', 'Începe de la '],
    ['. Quando sei pronto, puoi crescere ulteriormente.', '. Când ești pregătit, poți crește ulterior.'],
    ['deposito minimo', 'depozit minim'],
    ['Piattaforma completa', 'Platformă completă'],
    ['Segnali AI', 'Semnale AI'],
    ['Abbiamo ricevuto la tua richiesta di account su ', 'Am primit solicitarea ta de cont pe '],
    ['Mulțumim per esserti registrato su ', 'Mulțumim că te-ai înregistrat pe '],
    ['Il nostro team ti contattera a breve per completare la configurazione del tuo account. Tieni il telefono a portata di mano.', 'Echipa noastră te va contacta în curând pentru a finaliza configurarea contului. Ține telefonul la îndemână.'],
    ['La registrazione ha richiesto pochi minuti, i costi sono trasparenti e il supporto risponde davvero. Un\'esperienza fluida e affidabile su cui continuo a fare affidamento.', 'Înregistrarea a durat câteva minute, costurile sunt transparente și suportul răspunde cu adevărat. O experiență fluidă și de încredere pe care mă pot baza.'],
    ['Qui ho iniziato finalmente a fare trading crypto senza alcun rimpianto. Setup rapido e tutto spiegato con chiarezza. Ottima scelta, soprattutto per partire con il piede giusto.', 'Aici am început în sfârșit să tranzacționez crypto fără regrete. Configurare rapidă și totul explicat clar. O alegere excelentă, mai ales pentru un început bun.'],
    ['Il trading non sembra piu complicato come prima. Registrazione semplice, costi chiari e supporto quando serve. Per chi inizia, fa davvero la differenza.', 'Tranzacționarea nu mai pare atât de complicată. Înregistrare simplă, costuri clare și suport când ai nevoie. Pentru începători, face cu adevărat diferența.'],
    ['Creează-ți contul con i dati di base, completa una breve verifica e deposita almeno', 'Creează-ți contul cu datele de bază, finalizează o scurtă verificare și depune minim'],
    ['. Avrai accesso completo alla piattaforma: grafici live, strumenti di trading e onboarding assistito.', '. Vei avea acces complet la platformă: grafice live, instrumente de tranzacționare și onboarding asistat.'],
    ['I miei fondi e i miei dati sono al sicuro?', 'Fondurile și datele mele sunt în siguranță?'],
    ["L'elaborazione richiede in genere da 1 a 3 giorni lavorativi. Costi e tempi sono sempre indicati in anticipo, senza sorprese.", 'Procesarea durează de obicei între 1 și 3 zile lucrătoare. Costurile și termenele sunt întotdeauna indicate dinainte, fără surprize.'],
    ["Assolutamente no. Onboarding assistito, guide intuitive e strumenti supportati dall'AI ti aiutano a crescere al tuo ritmo. E per ogni livello di esperienza, il supporto e disponibile 24/7.", 'Absolut deloc. Onboarding asistat, ghiduri intuitive și instrumente asistate de AI te ajută să progresezi în ritmul tău. Pentru orice nivel de experiență, suportul este disponibil 24/7.'],
    ['Dati in tempo reale, analisi integrate e supporto per strategie sia manuali sia automatizzate.', 'Date în timp real, analize integrate și suport pentru strategii manuale și automatizate.'],
    ['Piattaforma', 'Platformă'],
    ['Analisi di mercato avanzata con machine learning', 'Analiză avansată a pieței cu machine learning'],
    ['Pronto a fare trading su una piattaforma progettata per la massima chiarezza?', 'Ești pregătit să tranzacționezi pe o platformă proiectată pentru claritate maximă?'],
    ['Errore di connessione. Controlla la connessione internet e riprova.', 'Eroare de conexiune. Verifică conexiunea la internet și încearcă din nou.'],
    ['Risposte su trading, funzionalita, sicurezza, costi e come iniziare con ', 'Răspunsuri despre tranzacționare, funcții, securitate, costuri și cum să începi cu '],
    ['Tutto cio che devi sapere prima di iniziare.', 'Tot ce trebuie să știi înainte de a începe.'],
    ['Utilizziamo crittografia SSL, autenticazione a due fattori e processori di pagamento verificati. La sicurezza e integrata in ogni livello della piattaforma.', 'Folosim criptare SSL, autentificare în doi pași și procesatori de plată verificați. Securitatea este integrată la fiecare nivel al platformei.'],
    ['Quali sono i costi?', 'Care sunt costurile?'],
    ['I costi sono trasparenti e mostrati prima della conferma di ogni transazione. Nessun costo nascosto su depositi o prelievi.', 'Costurile sunt transparente și afișate înainte de confirmarea fiecărei tranzacții. Fără costuri ascunse la depuneri sau retrageri.'],
    ['Posso usare il trading automatizzato?', 'Pot folosi tranzacționarea automatizată?'],
    ["Si. Imposta bot assistiti dall'AI in base al tuo profilo di rischio oppure opera manualmente: puoi passare da una modalita all'altra in qualsiasi momento.", 'Da. Configurează boți asistați de AI în funcție de profilul tău de risc sau operează manual: poți comuta oricând între moduri.'],
    ["Puoi richiedere il prelievo dalla tua dashboard. L'elaborazione richiede in genere da 1 a 3 giorni lavorativi, in base al metodo scelto.", 'Poți solicita retragerea din tabloul de bord. Procesarea durează de obicei între 1 și 3 zile lucrătoare, în funcție de metoda aleasă.'],
    ['Contatta il supporto', 'Contactează suportul'],
    ['Contatta il supporto ', 'Contactează suportul '],
    ['Siamo qui per aiutarti', 'Suntem aici să te ajutăm'],
    ['Suport profesional 24/7 per domande su account, trading e aspetti tecnici.', 'Suport profesional 24/7 pentru întrebări despre cont, tranzacționare și aspecte tehnice.'],
    ['Rispondiamo alla maggior parte delle richieste entro poche ore. Le questioni urgenti legate al trading hanno priorita.', 'Răspundem la majoritatea solicitărilor în câteva ore. Problemele urgente legate de tranzacționare au prioritate.'],
    ['Apri il tuo account in pochi minuti, senza bisogno di telefonate.', 'Deschide-ți contul în câteva minute, fără apeluri telefonice.'],
    ['Consulta i termini di utilizzo della piattaforma di trading e del sito ', 'Consultă termenii de utilizare ai platformei de tranzacționare și ale site-ului '],
    ['Devi avere almeno 18 anni ed essere legalmente autorizzato a negoziare strumenti finanziari nella tua giurisdizione.', 'Trebuie să ai cel puțin 18 ani și să fii autorizat legal să tranzacționezi instrumente financiare în jurisdicția ta.'],
    ['Il trading di criptovalute, forex, CFD e altri strumenti finanziari comporta un rischio significativo di perdita. Le performance passate non garantiscono risultati futuri. Opera solo con capitale che puoi permetterti di perdere.', 'Tranzacționarea criptomonedelor, forex, CFD și a altor instrumente financiare implică un risc semnificativ de pierdere. Performanțele trecute nu garantează rezultate viitoare. Operează doar cu capital pe care ți-l permiți să îl pierzi.'],
    ['Sei responsabile della riservatezza delle tue credenziali di accesso e di tutte le attivita svolte tramite il tuo account.', 'Ești responsabil pentru confidențialitatea credențialelor de acces și pentru toate activitățile efectuate prin contul tău.'],
    ["non e responsabile per perdite di trading o danni derivanti dall'uso delle informazioni presenti su questo sito. Se necessario, consulta un consulente finanziario indipendente.", 'nu este responsabil pentru pierderi de tranzacționare sau daune rezultate din utilizarea informațiilor de pe acest site. Dacă este necesar, consultă un consilier financiar independent.'],
    ['Privacy', 'Confidențialitate'],
    ['non e responsabile per perdite o danni derivanti dall\'utilizzo delle informazioni presenti su questo sito.', 'nu este responsabil pentru pierderi sau daune rezultate din utilizarea informațiilor de pe acest site.'],
    ['Il trading sui mercati finanziari comporta rischi. Investi solo fondi che puoi permetterti di perdere. Forex, CFD e criptovalute', 'Tranzacționarea pe piețele financiare implică riscuri. Investește doar fonduri pe care ți le permiți să le pierzi. Forex, CFD și criptomonede'],
    ['potrebbero non essere adatti a tutti gli investitori. Prima di operare, valuta una consulenza con un professionista qualificato.', 's-ar putea să nu fie potrivite pentru toți investitorii. Înainte de a opera, ia în considerare consultarea unui profesionist calificat.'],
    ['Metodi di pagamento accettati per ', 'Metode de plată acceptate pentru '],
    ['Partner per compliance e sicurezza finanziaria', 'Partener pentru conformitate și securitate financiară'],
    ['assistita dall\'AI per criptovalute, forex e mercati globali.', 'asistată de AI pentru criptomonede, forex și piețe globale.'],
    ['intelligente con analisi di mercato in tempo reale e segnali assistiti dall\'AI.', 'inteligentă cu analiză de piață în timp real și semnale asistate de AI.'],
    ['Creează-ți contul in pochi minuti, completa una breve verifica e deposita almeno ', 'Creează-ți contul în câteva minute, finalizează o scurtă verificare și depune minim '],
    ['. Sbloccherai la piattaforma completa con grafici live e strumenti di trading.', '. Vei debloca platforma completă cu grafice live și instrumente de tranzacționare.'],
    ['Proteggiamo gli account con crittografia SSL, autenticazione a due fattori e gestione sicura dei fondi tramite provider di pagamento affidabili. I dati personali sono gestiti secondo rigidi standard di sicurezza.', 'Protejăm conturile cu criptare SSL, autentificare în doi pași și gestionarea sigură a fondurilor prin furnizori de plată de încredere. Datele personale sunt gestionate conform unor standarde stricte de securitate.'],
    ['L\'elaborazione richiede di solito da 1 a 3 giorni lavorativi, in base al metodo scelto. Costi e tempi sono visibili in anticipo.', 'Procesarea durează de obicei între 1 și 3 zile lucrătoare, în funcție de metoda aleasă. Costurile și termenele sunt vizibile dinainte.'],
    ['Non e richiesta esperienza precedente. Onboarding assistito, guide intuitive e strumenti supportati dall\'AI ti aiutano ad apprendere al tuo ritmo, con supporto disponibile 24/7.', 'Nu este necesară experiență anterioară. Onboarding asistat, ghiduri intuitive și instrumente asistate de AI te ajută să înveți în ritmul tău, cu suport disponibil 24/7.'],
    ['Cum să începi a fare trading con ', 'Cum să începi să tranzacționezi cu '],
    ['Registrati con i dati di base e ottieni accesso sicuro alla piattaforma.', 'Înregistrează-te cu datele de bază și obține acces securizat la platformă.'],
    ['Verifica la tua email', 'Verifică e-mailul'],
    ['Conferma l\'email e sblocca l\'accesso completo alla piattaforma.', 'Confirmă e-mailul și deblochează accesul complet la platformă.'],
    ['Entra sul mercato con fiducia grazie ai dati in tempo reale e agli insight AI.', 'Intră pe piață cu încredere datorită datelor în timp real și insight-urilor AI.'],
    [' interfaccia mobile di trading con grafico live BTC/USDT e strumenti di portafoglio', ' interfață mobilă de tranzacționare cu grafic live BTC/USDT și instrumente de portofoliu'],
    ['La presente Politica de confidențialitate descrive come ', 'Prezenta Politică de confidențialitate descrie cum '],
    [' ("noi") raccoglie e tratta i dati personali durante l\'utilizzo del nostro sito e dei nostri servizi.', ' („noi”) colectează și prelucrează datele personale în timpul utilizării site-ului și serviciilor noastre.'],
    ['Per creare e gestire il tuo account', 'Pentru a crea și gestiona contul tău'],
    ['Applichiamo misure tecniche e organizzative, inclusa la crittografia SSL e il controllo degli accessi, per proteggere i tuoi dati.', 'Aplicăm măsuri tehnice și organizatorice, inclusiv criptare SSL și control al accesului, pentru a-ți proteja datele.'],
    ['In base alla tua giurisdizione, puoi avere il diritto di accesso, rettifica o cancellazione dei dati personali. Per esercitare questi diritti, contatta ', 'În funcție de jurisdicția ta, poți avea dreptul de acces, rectificare sau ștergere a datelor personale. Pentru a exercita aceste drepturi, contactează '],
];

function translateContent(content) {
    let out = content;
    for (const [from, to] of translations) {
        out = out.split(from).join(to);
    }
    return out;
}

function setupMultilangRo(roDir) {
    const includes = path.join(roDir, 'includes');
    fs.writeFileSync(
        path.join(includes, 'config.php'),
        "<?php\n\ndefine('ACTIVE_LANG', 'ro');\nrequire_once __DIR__ . '/../../../includes/config.php';\n",
    );
    fs.writeFileSync(
        path.join(includes, 'header.php'),
        "<?php\n\nrequire_once __DIR__ . '/../../../includes/header.php';\n",
    );

    const formPath = path.join(includes, 'form.php');
    if (fs.existsSync(formPath)) {
        let form = fs.readFileSync(formPath, 'utf8');
        form = form.replace(/name="language" value="[^"]*"/, 'name="language" value="ro"');
        fs.writeFileSync(formPath, form);
    }
}

for (const template of ['default', 'multilang']) {
    const itDir = path.join(repo, 'templates', template, 'langs', 'it');
    const roDir = path.join(repo, 'templates', template, 'langs', 'ro');

    if (!fs.existsSync(itDir)) {
        console.warn('Skip missing', itDir);
        continue;
    }

    if (fs.existsSync(roDir)) {
        fs.rmSync(roDir, { recursive: true, force: true });
    }

    copyDir(itDir, roDir);
    console.log('Copied', template, 'it -> ro');

    if (template === 'multilang') {
        setupMultilangRo(roDir);
    } else {
        const configPath = path.join(roDir, 'includes', 'config.php');
        if (fs.existsSync(configPath)) {
            let config = fs.readFileSync(configPath, 'utf8');
            config = config.replace(/define\('SITE_LANG', 'it'\)/, "define('SITE_LANG', 'ro')");
            fs.writeFileSync(configPath, config);
        }
    }

    for (const file of [...walkFiles(roDir, '.php'), ...walkFiles(roDir, '.js')]) {
        const original = fs.readFileSync(file, 'utf8');
        const translated = translateContent(original);
        if (translated !== original) {
            fs.writeFileSync(file, translated);
        }
    }
}

const flagDir = path.join(repo, 'templates/multilang/static/img/flags');
fs.mkdirSync(flagDir, { recursive: true });
const flagDest = path.join(flagDir, 'ro.png');

await new Promise((resolve, reject) => {
    const file = fs.createWriteStream(flagDest);
    https
        .get('https://flagcdn.com/24x18/ro.png', (res) => {
            if (res.statusCode && res.statusCode >= 400) {
                reject(new Error(`HTTP ${res.statusCode}`));
                res.resume();
                return;
            }
            res.pipe(file);
            file.on('finish', () => file.close(resolve));
        })
        .on('error', reject);
});

console.log('Downloaded ro.png flag');
console.log('Done.');

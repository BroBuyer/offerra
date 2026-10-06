<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Privacybeleid | ' . SITE_NAME;
$page_description = 'Privacybeleid van ' . SITE_NAME . '.';
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
            <h1>Privacybeleid</h1>
            <p>
              Je persoonsgegevens en je assets zijn voor ons van het grootste belang. Wij verbinden ons er
              volledig toe om ze te beschermen.
            </p>
            <p>
              <?= e(SITE_NAME) ?> verzamelt en bewaart de gegevens die nodig zijn voor je tradingtransacties. Hoe
              deze gegevens worden verzameld en bewaard, beschrijft het volgende privacybeleid.
            </p>
            <p>Ons beleid steunt op de volgende beginselen:</p>
            <p class="circle">
              Met als doel maximale transparantie over onze procedures voor het verzamelen en
              bewaren van je persoonsgegevens:
            </p>
            <p>
              Ons doel is dat je begrijpt hoe we je gegevens verzamelen en verwerken, zodat je
              weloverwogen kunt beslissen. We hanteren duidelijke regels en procedures voor gegevensverwerking op
              deze website. Ons beleid beschrijft in detail de methoden waarmee we je
              duidelijke, concrete informatie over datagebruik geven. Jij houdt de controle.
            </p>
            <p>
              We informeren je onmiddellijk wanneer we dat nodig achten. Transparantie is voor ons
              van fundamenteel belang.
            </p>
            <p>
              Ons vakteam staat klaar om al je vragen over elk aspect
              van onze procedures te beantwoorden, inclusief onze plichten volgens het recht <?= e(geo_in()) ?> en de EU-
              regelgeving. Je kunt ons bereiken via:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Ander gebruik van persoonsgegevens is onzerzijds niet toegestaan, behalve zoals voorzien in ons
              privacybeleid.
            </p>
            <p>
              We mogen persoonsgegevens verwerken voor de volgende doelen, onder meer om de juiste
              werking van de diensten van <?= e(SITE_NAME) ?> te waarborgen en gebruikers te koppelen aan tradingplatforms
              van derden. Verwerking kan ook nodig zijn om functies en diensten van de website
              te onderhouden en te verbeteren; om onze rechten te beschermen en wettelijke en andere
              plichten na te komen. Ten slotte dienen deze gegevens, waar nodig, voor administratieve
              en operationele taken in verband met de diensten die we je leveren.
            </p>
            <p>
              Om diensten aan te bieden die beter bij je voorkeuren en behoeften passen, gebruikt <?= e(SITE_NAME) ?>
              persoonsgegevens.
            </p>
            <p class="circle">
              Met als doel de nodige middelen in te zetten om je persoonsgegevens te beschermen en je
              rechten daarbij te waarborgen:
            </p>
            <p>
              Je kunt ons altijd contacteren en toegang krijgen tot al je persoonsgegevens. We kunnen ze
              zo nodig ook wijzigen of wissen. Daarnaast verwerken we verzoeken om die
              gegevens aan jou of aan een door jou aangewezen derde over te dragen. We bieden deze dienst zodat je
              je privacy- en controlerechten volledig kunt uitoefenen.
            </p>
            <p class="circle">Bescherm je persoonsgegevens:</p>
            <p>
              Onze beveiligingssystemen voldoen aan een hoge standaard en omvatten maatregelen op bankniveau. Hoewel
              volledige bescherming niet kan worden gegarandeerd, verbinden we ons ertoe onze systemen blijvend
              op hoog niveau te houden en bestaande maatregelen te versterken.
            </p>
            <p>
              We beschikken over uitvoerige privacyrichtlijnen en eersteklas beveiligingssystemen.
            </p>
            <p class="bold-title">1. Toepassingsgebied</p>
            <p>
              Dit beleid beschrijft onze procedures voor het verzamelen, verwerken en bekendmaken van alle
              gegevens van natuurlijke personen.
            </p>
            <p>
              De bepalingen van ons beleid gelden voor alle natuurlijke personen die identificeerbaar zijn of
              geïdentificeerd worden. In het bijzonder voor elke natuurlijke persoon die identificeerbaar is aan de hand van
              gegevens die ons zijn toevertrouwd, waartoe we toegang hebben en/of die we kunnen combineren.
            </p>
            <p>
              Gegevensverwerking in de zin van het privacybeleid omvat met name de opslag,
              het beheer en de organisatie van persoonsgegevens.
            </p>
            <p>
              We verzamelen geen informatie over personen onder de 18 jaar en proberen dat ook niet.
              Personen onder de 18 jaar mogen ons platform voor geen enkel
              doel gebruiken. Stellen we vast dat een gebruiker jonger is dan 18, dan wissen we die gegevens onmiddellijk.
            </p>
            <p class="bold-title">2. Welke persoonsgegevens verzamelen we?</p>
            <p>
              Bij registratie verzamelen we de persoonsgegevens die nodig zijn om onze diensten te gebruiken. Indien nodig
              kunnen we ook gegevens vragen voor verificatie, bijvoorbeeld om
              het accounteigendom te bevestigen. Om de kwaliteit van onze diensten te verbeteren en te behouden,
              verzamelen en analyseren we informatie over je gebruik van het platform en
              gerelateerde diensten van derden.
            </p>
            <p class="bold-title">
              3. Je bent in geen geval verplicht je persoonsgegevens aan de vennootschap te verstrekken.
            </p>
            <p>
              Hoewel je ons je gegevens niet hoeft te verstrekken, kan de keuze dat niet te doen
              de levering van onze diensten beperken. Dat kan ook leiden tot
              beperkingen bij het gebruik van het.
            </p>
            <p class="bold-title">
              4. Welke persoonsgegevens verzamelen we? Bij het bezoeken van onze website kunnen we de
              volgende persoonsgegevens verzamelen:
            </p>
            <p>
              We verzamelen geen gegevens die je rechtstreeks identificeren. We registreren onder meer
              je accountactiviteit, IP-adressen en datums en tijden van toegang. Voor onderhoud,
              beveiliging en support slaan we systeemfoutberichten, browserinformatie en het type
              apparaat op waarmee je je account bezoekt. We registreren ook de taal die in je account is ingesteld.
            </p>
            <p>
              Wat persoonsgegevens betreft, verzamelen en bewaren we uitsluitend informatie
              die je verstrekt wanneer je via onze diensten verbinding maakt met een tradingplatform van derden.
            </p>
            <p>
              Persoonsgegevens die je aan platforms van derden hebt verstrekt, kunnen met name omvatten:
              voor- en achternaam, adres, telefoonnummer en e-mailadres.
            </p>
            <p class="bold-title">
              5. Waarom heeft de vennootschap mijn gegevens nodig en is verwerking rechtmatig?
            </p>
            <p>
              De vennootschap verzamelt, bewaart en verwerkt je persoonsgegevens uitsluitend voor de
              in het beleid genoemde doelen. Alle beschreven gebruiken en verwerkingen zijn in overeenstemming met het
              toepasselijke recht <?= e(geo_in()) ?> en de EU-regelgeving.
            </p>
            <p>
              De vennootschap beheert, verwerkt of draagt je gegevens alleen over in overeenstemming met de
              geldende regels <?= e(geo_in()) ?>. De relevante rechtsgrondslagen staan hieronder:
            </p>
            <p class="circle">
              Je hebt toestemming gegeven voor opslag en verwerking van je persoonsgegevens door de
              vennootschap. Door je gegevens aan ons te verstrekken, machtig je ons om ze door te sturen naar het
              betrokken tradingplatform van derden. Daarnaast heb je toestemming gegeven voor
              verwerking van je persoonsgegevens voor een of meer doelen.
            </p>
            <p class="circle">
              Om diensten te verbeteren, rechtsvorderingen in te stellen of te verdedigen en gerechtvaardigde
              belangen te beschermen, kan het onder meer nodig zijn dat de vennootschap je persoonsgegevens
              bewaart en verwerkt.
            </p>
            <p class="circle">Om wettelijke plichten na te komen is gegevensverwerking noodzakelijk.</p>
            <p>
              Wil je meer weten over de verwerkingen waartoe de vennootschap verplicht
              is, kun je ons gerust e-mailen.
            </p>
            <p>
              Hieronder vind je de concrete doelen en de rechtsgrondslag die ons
              machtigt om je persoonsgegevens te verwerken.
            </p>
            <p class="green">Doel</p>
            <p class="green">Rechtsgrondslag</p>
            <p>
              1. Om je toegang tot digitaal trading te vergemakkelijken en — uitsluitend op jouw verzoek —
              delen we je persoonsgegevens met platforms van derden. Je gegevens kunnen worden verzameld
              en met derden worden gedeeld, uitsluitend op jouw verzoek en naar jouw keuze.
            </p>
            <p>
              Je hebt toestemming gegeven voor verwerking van je persoonsgegevens voor een of meer doelen.
            </p>
            <p>
              2. Geef ons de nodige informatie zodat we snel en
              doeltreffend kunnen reageren op je verzoeken, zorgen en vragen over onze diensten.
            </p>
            <p>
              Voor de behartiging van gerechtvaardigde belangen van de vennootschap of een genoemde derde
              is de verwerking van persoonsgegevens noodzakelijk.
            </p>
            <p>
              3. Om onze wettelijke en administratieve plichten na te komen is de verwerking van persoonsgegevens noodzakelijk.
            </p>
            <p>Om onze wettelijke plichten na te komen moeten we bepaalde persoonsgegevens verwerken.</p>
            <p>
              4. Om onze diensten te verbeteren hebben we geanonimiseerde gegevens nodig en moeten we het gebruik volgen,
              inclusief foutberichten.
            </p>
            <p>
              Ter bescherming van gerechtvaardigde belangen van de vennootschap en externe dienstverleners
              is de verwerking en opslag van persoonsgegevens noodzakelijk.
            </p>
            <p>5. Dit is nodig om fraude en misbruik van onze dienst te voorkomen.</p>
            <p>
              Om gerechtvaardigde belangen van de vennootschap en dienstverleners van derden te waarborgen,
              is de verwerking en opslag van persoonsgegevens noodzakelijk.
            </p>
            <p>
              6. De eisen van onze dienst verplichten ons gegevens te volgen en te verwerken voor
              bedrijfsontwikkeling, strategische beslissingen, monitoring, naleving van regelgeving en
              andere operationele activiteiten.
            </p>
            <p>
              Met als doel gerechtvaardigde belangen van de vennootschap en externe dienstverleners
              is de verwerking en opslag van persoonsgegevens noodzakelijk.
            </p>
            <p>
              7. We gebruiken statistische en analytische tools om beslissingen in een breed
              spectrum van onze diensten en in de strategische planning te ondersteunen.
            </p>
            <p>
              Ter bescherming van gerechtvaardigde belangen van de vennootschap en onze externe dienstverleners
              is de verwerking en opslag van persoonsgegevens noodzakelijk.
            </p>
            <p>
              8. Voor zover nodig om de rechten, het vermogen en de belangen van de
              vennootschap en dienstverleners van derden te beschermen, en in overeenstemming met de lokale wetten en
              toepasselijke regels, contracten en onze eigen voorwaarden, mogen we
              persoonsgegevens verwerken. Die verwerking gebeurt uitsluitend volgens noodzakelijke en
              vastgelegde procedures.
            </p>
            <p>
              Ter bescherming van gerechtvaardigde belangen van de vennootschap en elke derde
              dienstverlener is de verwerking en opslag van persoonsgegevens noodzakelijk.
            </p>
            <p class="bold-title">6. Delen van persoonsgegevens met derden</p>
            <p>
              Voor opslag en verwerking van IP-adressen, voor enquêtes en gebruiksanalyse
              en voor gerelateerde diensten kan de vennootschap geanonimiseerde gegevens delen met
              externe dienstverleners.
            </p>
            <p>
              Op jouw verzoek delen we bepaalde door jou verstrekte persoonsgegevens met externe
              dienstverleners. In dat geval valt de verwerking van je gegevens onder het
              privacybeleid van dat bedrijf. Dat kan diverse digitale tradingplatforms omvatten.
            </p>
            <p>
              Met als doel de klantenservice te verbeteren en onze diensten in het algemeen te optimaliseren,
              kan de vennootschap persoonsgegevens delen met gelieerde vennootschappen en zakenpartners.
            </p>
            <p>
              Wanneer de wet het vereist of ter bescherming van de rechten en het vermogen van de vennootschap en betrokken
              derden, kunnen we gegevens delen met bevoegde gerechtelijke of toezichthoudende autoriteiten.
            </p>
            <p>
              In het kader van wezenlijke bedrijfshandelingen, zoals een verkoop van de vennootschap,
              het aantrekken van kapitaal of een kredietaanvraag, kunnen relevante gegevens
              rechtmatig en passend worden gedeeld. Dat geldt ook voor fusies, herstructureringen,
              consolidaties of insolventie van de vennootschap volgens de wet.
            </p>
            <p class="bold-title">7. Cookies en diensten van derden</p>
            <p>
              Voor websiteanalyse en in samenwerking met reclamebureaus kunnen cookies en andere
              vergelijkbare technologieën volgens de wet en gangbare praktijk worden gebruikt.
            </p>
            <p>
              Cookies, kleine tekstbestanden die bij een websitebezoek op je apparaat worden opgeslagen, dienen om
              informatie over je surfgedrag, voorkeuren en andere gegevens te verzamelen. Hun
              doel is je gebruikerservaring te personaliseren en te verbeteren. Ze helpen ons je
              instellingen en voorkeuren te onthouden en ons aanbod daarop af te stemmen. Ze dienen ook
              voor websiteanalyse en statistieken voor de planning.
            </p>
            <p>
              Deze website gebruikt in het algemeen twee soorten cookies: sessiecookies, die alleen
              tijdens de browsersessie worden bewaard en bij het sluiten van de browser worden gewist;
              en persistente cookies, die na afloop van de sessie in de browser blijven. Die laatste
              stellen de website in staat je als terugkerende bezoeker te herkennen en het gebruik te vergemakkelijken.
            </p>
            <p class="bold-title">Soorten cookies:</p>
            <p>Cookies kunnen naar gelang het doel naar behoefte worden gebruikt:</p>
            <p class="green">Cookiesoort</p>
            <p>Deze cookies zijn strikt noodzakelijk</p>
            <p class="green">Doel</p>
            <p>
              Cookies dienen om je als klant te herkennen, zodat we je de informatie,
              instellingen en diensten kunnen bieden die je hebt gevraagd.
              Ze vergemakkelijken ook de navigatie op onze website en de toegang ertoe.
            </p>
            <p>
              We gebruiken cookies zodat je apparaat inhoud kan laden en afspelen. Ze maken ook
              toegang tot essentiële functies mogelijk en de terugkeer naar eerder bezochte pagina’s.
            </p>
            <p class="green">Aanvullende informatie</p>
            <p>
              Voor snelle, eenvoudige toegang tot de website slaan cookies bepaalde
              persoonsgegevens op, zoals gebruikersnaam en datum van laatste toegang, als je de website vraagt
              je bij het inloggen te onthouden.
            </p>
            <p>Sessiecookies worden gewist wanneer je de browser sluit.</p>
            <p class="green">Cookiesoort</p>
            <p>Functionele cookies</p>
            <p class="green">Doel</p>
            <p>
              Met cookies kunnen we je instellingen en voorkeuren veilig opslaan en toepassen.
              Ze stellen ons ook in staat je te herkennen wanneer je onze website opnieuw bezoekt.
            </p>
            <p class="green">Aanvullende informatie</p>
            <p>
              Persistente cookies blijven na de browsersessie opgeslagen en blijven actief tot de
              vervaldatum.
            </p>
            <p class="green">Cookiesoort</p>
            <p>Prestatiecookies</p>
            <p class="green">Doel</p>
            <p>
              Om onze diensten te verbeteren, verzamelen we statistische gegevens via cookies. Deze cookies
              geven ons informatie over de prestaties van de website en het gebruik ervan.
            </p>
            <p class="green">Aanvullende informatie</p>
            <p>
              Alle via cookies opgeslagen informatie is anoniem en maakt geen identificatie van personen mogelijk.
            </p>
            <p>
              Sessiecookies worden gewist wanneer je de browser sluit, terwijl persistente cookies
              actief blijven tot de vervaldatum of onbeperkt, tenzij je ze handmatig verwijdert.
            </p>
            <p>Cookies blokkeren of verwijderen</p>
            <p>
              Wil je cookies verwijderen of blokkeren, dan doe je dat in de
              browserinstellingen. De volgende links bevatten gedetailleerde instructies voor de meest gebruikte browsers.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Het blokkeren van cookies kan ervoor zorgen dat sommige functies van de website niet werken zoals bedoeld.
            </p>
            <p class="bold-title">Hoe lang we persoonsgegevens bewaren</p>
            <p>
              Je persoonsgegevens worden alleen bewaard zolang dat strikt nodig is voor de vereiste
              processen, zoals in andere onderdelen van dit beleid vermeld. Langere bewaring is mogelijk als
              lokale wetten, regels of interne richtlijnen dat vereisen.
            </p>
            <p>
              Je persoonsgegevens worden op jouw verzoek en naar jouw keuze gedeeld met tradingplatforms
              van derden voor een periode van 12 maanden. Na afloop van die periode en met jouw
              toestemming worden die gegevens nog 12 maanden extra gedeeld.
            </p>
            <p>
              Onze procedures voorzien in een regelmatige beoordeling van alle persoonsgegevens om te bepalen of
              ze nog nodig zijn.
            </p>
            <p class="bold-title">
              9. Doorgifte van persoonsgegevens naar derde landen of internationale organisaties
            </p>
            <p>
              Wanneer dat nodig is voor onze diensten en/of om veiligheidsredenen, kunnen we
              persoonsgegevens doorgeven naar andere landen (buiten het jouwe) en naar internationale organisaties
              volgens uitgebreide beveiligingsprotocollen. We nemen gegevensbeschermingsmaatregelen op
              hoog niveau om je informatie te beschermen en je toegang tot rechtsmiddelen
              en wettelijke rechten te allen tijde te waarborgen.
            </p>
            <p>
              In de Europese Economische Ruimte (EER) gelden voor alle inwoners gegevensbescherming en garanties.
            </p>
            <p class="circle">
              Doorgiften vinden altijd plaats onder EU-rechtsmacht en -toezicht, in overeenstemming
              met de databeschermingsnormen en -protocollen van artikel 45, lid 3, van verordening
              (EU) 2016/679 van het Europees Parlement en de Raad van 27 april 2016
              (&ldquo;AVG&rdquo;).
            </p>
            <p class="circle">
              Elke doorgifte van gegevens tussen overheidsinstanties vindt plaats op grond van artikel
              46, lid 2. Het gaat om een juridisch bindende en afdwingbare overeenkomst.
            </p>
            <p class="circle">
              De standaardcontractbepalingen van de Europese Commissie volgens artikel 46, lid 2, onder c, AVG stellen
              de voorwaarden voor doorgifte vast; zulke doorgiften geschieden in overeenstemming met
              die bepalingen. Je kunt ze inzien via
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Meer informatie over de concrete beveiligingsmaatregelen die de vennootschap heeft genomen om
              je persoonsgegevens bij doorgifte naar een derde land te beschermen, kun je per
              e-mail aanvragen via <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Bescherming van persoonsgegevens</p>
            <p>
              Persoonsgegevens worden beschermd door technische en organisatorische maatregelen van het hoogste
              niveau, toegepast volgens referentieprocedures. Deze procedures zijn doeltreffend
              om vernietiging van gegevens door onrechtmatige of onvoorziene gebeurtenissen te voorkomen, evenals
              verlies of wijziging daarvan.
            </p>
            <p>
              Hoewel we de grootst mogelijke zorg en procedures toepassen die voldoen aan de strengste
              databeschermingsnormen en de wet, kan onder geen enkele omstandigheid worden gegarandeerd
              dat je persoonsgegevens foutloos zijn. Daarom kunnen we geen aansprakelijkheid aanvaarden als
              persoonsgegevens accidentele, immateriële of gevolgschade of openbaarmaking oplopen.
              Dat omvat situaties buiten onze controle, zoals openbaarmaking door transmissiefouten,
              ongeoorloofde toegang door derden of vergelijkbare oorzaken.
            </p>
            <p>
              Wanneer we juridisch bindende verzoeken ontvangen van toezichthouders of andere
              overheidsinstanties met wettelijke bevoegdheden, kunnen we verplicht zijn je persoonsgegevens
              aan die instanties door te geven. Na doorgifte op grond van een wettelijke plicht hebben we
              geen invloed meer op hoe die instanties je gegevens behandelen, bewaren of beschermen.
            </p>
            <p>
              Alles wat via het internet wordt verzonden, inclusief persoonsgegevens, houdt een
              zeker risico op onderschepping in en is niet 100% veilig. De vennootschap kan de
              veiligheid van online verzonden gegevens niet garanderen.
            </p>
            <p class="bold-title">11. Links naar websites van derden</p>
            <p>
              Op deze website vind je links naar toepassingen en websites van derden. Let erop
              dat ze niet met de vennootschap verbonden zijn noch onder haar controle staan, en dat ons
              privacybeleid niet op die derden van toepassing is. Zij werken volgens hun
              eigen procedures en prioriteiten bij het verzamelen en verwerken van persoonsgegevens; wij
              aanvaarden daarom geen aansprakelijkheid voor die activiteiten. Gebruik ze naar eigen inzicht.
            </p>
            <p>
              Controleer altijd het privacybeleid van het bedrijf of de dienst wanneer je hun website
              bezoekt, voordat je persoonsgegevens verstrekt. Ga na of hun regels voor verzameling, gebruik en
              verwerking bij je voorkeuren passen. Als je gegevens deelt, doe dat dan
              rechtstreeks bij de aanbieder.
            </p>
            <p class="bold-title">12. Updates van het beleid</p>
            <p>
              Wij behouden ons het recht voor dit beleid op elk moment bij te werken of te wijzigen. We informeren je
              over wijzigingen via de website en de betrokken kanalen. De bijgewerkte versie van het privacy-
              beleid wordt op de website gepubliceerd; het herziene beleid geldt
              vanaf publicatie, tenzij anders vermeld.
            </p>
            <p class="bold-title">13. Je rechten met betrekking tot persoonsgegevens</p>
            <p>
              Jij houdt de controle en het laatste woord over het gebruik van al je persoonsgegevens. Dat
              omvat de controle van de juistheid, het corrigeren van fouten en het recht op wissing of
              beperking van onze verwerking — zowel in omvang als in aard.
            </p>
            <p>Inwoners van de EER vinden op deze pagina de voor hen relevante informatie:</p>
            <p>
              Je persoonsgegevens zijn beschermd door de hier beschreven rechten. Door een e-mail te sturen naar
              het onderstaande adres kun je die rechten onmiddellijk uitoefenen.
            </p>
            <p>Toegang tot je rechten</p>
            <p>
              Als de door jou verstrekte persoonsgegevens juist zijn, kun je ze altijd inzien. Alle
              persoonsgegevens die we verwerken, zijn voor ons beschikbaar en dus verifieerbaar.
            </p>
            <p>
              Je kunt altijd je persoonsgegevens opvragen ter controle; ze worden je
              in elektronische vorm ter beschikking gesteld. Vraag je naast de al verstrekte kopie extra
              kopieën van je verwerkte gegevens, dan kan een redelijke vergoeding in rekening worden gebracht.
            </p>
            <p>
              De wettelijk en in het privacybeleid erkende rechten mogen de rechten van derden
              niet aantasten. De vennootschap behoudt zich het recht voor toegang tot persoonsgegevens te weigeren of te beperken
              als daardoor rechten en vrijheden van derden zouden worden geschonden.
            </p>
            <p>Recht op rectificatie</p>
            <p>
              Elke fout in je persoonsgegevens, of die nu door weglating of onjuiste informatie komt,
              kan door jou of de vennootschap worden gecorrigeerd om een juiste verwerking te verzekeren.
            </p>
            <p>Recht op wissing</p>
            <p>
              Je hebt het recht wissing van je persoonsgegevens te vragen in de volgende
              gevallen: 1) als ze zonder jouw toestemming of buiten wettelijke grenzen zijn verwerkt; 2)
              op jouw verzoek, als je wissing wilt en de vennootschap geen wettelijke plicht tot
              bewaring heeft; 3) als je bezwaar maakt tegen onze verwerking of er niet langer in toestemt, ook als die
              rechtmatig is en op onze belangen of die van derden berust; en 4) als de wet
              ons tot wissing verplicht.
            </p>
            <p>
              Het recht op wissing geldt niet als wettelijke plichten van de EU of
              van een lidstaat daaraan in de weg staan. Het geldt evenmin als de gegevens nodig zijn om rechtsvorderingen
              in te stellen of te verdedigen.
            </p>
            <p>Recht op beperking van de verwerking</p>
            <p>
              Je hebt het recht beperking van de verwerking van je persoonsgegevens te vragen als je
              onjuistheden vermoedt.
            </p>
            <p>
              Vraag je beperking van het gebruik van je persoonsgegevens, dan beperken we de verwerking, behalve in
              de volgende gevallen: 1) als het recht van de Europese Unie of van een van haar
              lidstaten zich daartegen verzet; 2) met jouw toestemming, indien nodig om rechtsvorderingen
              te verdedigen of in te stellen; 3) ter bescherming van de rechten van een andere natuurlijke persoon.
            </p>
            <p>Recht op overdraagbaarheid van gegevens</p>
            <p>
              Je hebt het recht de door jou verstrekte persoonsgegevens in te zien en te controleren, voor zover
              je toestemming hebt gegeven voor de verzameling ervan en de verwerking
              via geautomatiseerde systemen plaatsvindt.
            </p>
            <p>
              Je hebt het recht overdracht van al je persoonsgegevens aan een andere vennootschap of
              organisatie te vragen, voor zover technisch mogelijk. Dit recht laat je
              recht op wissing onverlet. Het geldt niet als de uitoefening de rechten
              of vrijheden van een andere natuurlijke persoon schendt.
            </p>
            <p>Recht van bezwaar tegen verwerking</p>
            <p>
              Onverminderd het recht van de vennootschap onze gerechtvaardigde belangen of
              die van een als dienstverlener optredende derde na te streven, heb je het recht bezwaar te maken tegen
              verwerking en de beëindiging daarvan te vragen. Dit recht geldt niet als er een dringende
              wettelijke noodzaak is om de verwerking voort te zetten, hetzij om rechtsvorderingen te verdedigen, hetzij om ze
              in te stellen. In zulke gevallen mogen we de verwerking van je gegevens voortzetten.
            </p>
            <p>
              Je kunt te allen tijde bezwaar maken tegen verwerking van je persoonsgegevens voor direct marketing.
            </p>
            <p>
              Recht om toestemming in te trekken
            </p>
            <p>
              Je kunt je toestemming voor onze verwerking van je persoonsgegevens te allen tijde
              met onmiddellijke ingang intrekken. Die intrekking heeft geen terugwerkende kracht op verwerkingen die
              vóór de intrekking hebben plaatsgevonden.
            </p>
            <p>
              Als je om welke reden dan ook ontevreden bent, heb je het recht een klacht in te dienen bij een
              gerechtelijke, toezichthoudende of andere controlerende instantie.
            </p>
            <p>
              Als je van mening bent dat je rechten en vrijheden met betrekking tot de verwerking van je persoonsgegevens
              zijn geschonden, beschikken de lidstaten van de Europese Unie over toezichthoudende en controlerende instanties
              daarvoor. Je kunt je tot die instanties wenden als je dat passend vindt.
            </p>
            <p>
              Onderdeel 13 beschrijft situaties waarin je rechten met betrekking tot persoonsgegevens kunnen worden
              beperkt door het recht van de Europese Unie of van de lidstaten.
            </p>
            <p>
              Wanneer we je verzoek over je persoonsgegevens en de verwerking daarvan ontvangen, geven we je
              toegang tot de gevraagde informatie, zoals in onderdeel 13 van dit beleid vermeld.
              We kunnen deze termijn met maximaal twee maanden verlengen, afhankelijk van de omvang van het verzoek
              en de aard van je vraag. Indien nodig stellen we je van de verlenging
              binnen een maand na ontvangst van je verzoek in kennis.
            </p>
            <p>
              We sturen je de gevraagde informatie elektronisch en kosteloos, tenzij
              dit in strijd is met de wet of de bepalingen in onderdeel 13. Wij behouden ons het recht voor
              een redelijke vergoeding in rekening te brengen of een verzoek te weigeren als het als ongegrond, buitensporig of herhaald wordt beschouwd.
            </p>
            <p>
              Wij behouden ons het recht voor extra identiteitsverificatie te vragen als er gegronde
              twijfel bestaat over de persoon die een verzoek over persoonsgegevens indient, om
              de gegevensbeveiliging te beschermen en te waarborgen.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>

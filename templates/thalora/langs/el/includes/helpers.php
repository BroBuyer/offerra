<?php
/**
 * Внутрішні хелпери — не редагувати при переносі оффера.
 */

define('PLATFORM_IMAGE_TEMPLATE', 'static/img/platform/trading-platform-mobile.webp');

function site_slug(): string
{
    return strtolower(preg_replace('/[^a-z0-9]/i', '', SITE_NAME));
}

function site_domain(): string
{
    return parse_url(SITE_URL, PHP_URL_HOST) ?: 'localhost';
}

function site_locale(): string
{
    $map = [
        'en' => 'en-US', 'pl' => 'pl-PL', 'de' => 'de-DE', 'fr' => 'fr-FR',
        'it' => 'it-IT', 'es' => 'es-ES', 'pt' => 'pt-PT', 'hr' => 'hr-HR', 'nl' => 'nl-NL', 'no' => 'nb-NO', 'da' => 'da-DK',
        'uk' => 'uk-UA', 'ru' => 'ru-RU', 'cs' => 'cs-CZ', 'sk' => 'sk-SK', 'hu' => 'hu-HU',
        'el' => 'el-GR', 'sv' => 'sv-SE', 'fi' => 'fi-FI', 'ro' => 'ro-RO', 'tr' => 'tr-TR',
        'ms' => 'ms-MY',
    ];
    $lang = strtolower(SITE_LANG);

    return $map[$lang] ?? ($lang . '-' . strtoupper($lang));
}

function crm_funnel(): string
{
    $funnel = trim((string) CRM_FUNNEL);

    return $funnel !== '' ? $funnel : site_slug();
}

function crm_aff_sub_value(int $index): string
{
    $const = 'CRM_AFF_SUB' . ($index === 1 ? '' : (string) $index);
    if (!defined($const)) {
        return '';
    }
    $value = trim((string) constant($const));
    if ($index === 2 && $value === '') {
        return crm_funnel();
    }

    return $value;
}

function crm_aff_subs_resolved(array $lead = []): array
{
    $subs = [];

    for ($i = 1; $i <= 12; $i++) {
        $key = 'aff_sub' . ($i === 1 ? '' : (string) $i);
        $value = !empty($lead[$key]) ? trim((string) $lead[$key]) : crm_aff_sub_value($i);

        if ($value !== '') {
            $subs[$key] = $value;
        }
    }

    return $subs;
}

function form_allowed_countries(): array
{
    $raw = array_filter(array_map('trim', explode(',', strtolower(FORM_ALLOWED_COUNTRIES))));
    $iso2 = array_values(array_filter(
        $raw,
        static fn (string $code): bool => strlen($code) === 2 && ctype_alpha($code),
    ));

    return array_values(array_unique($iso2));
}

function form_ip_country(): string
{
    $cf = strtoupper(trim((string) ($_SERVER['HTTP_CF_IPCOUNTRY'] ?? '')));

    if ($cf !== '' && $cf !== 'XX' && preg_match('/^[A-Z]{2}$/', $cf)) {
        return strtolower($cf);
    }

    return '';
}

function form_phone_code_from_ip(string $ipCountry): string
{
    $code = strtolower(trim($ipCountry));

    return $code === 'uk' ? 'gb' : $code;
}

function form_visitor_phone_country(): string
{
    $allowed = form_allowed_countries();
    $default = strtolower(trim((string) FORM_PHONE_COUNTRY));

    if ($allowed === []) {
        return $default !== '' ? $default : 'gb';
    }

    $ipCode = form_phone_code_from_ip(form_ip_country());

    if ($ipCode !== '' && in_array($ipCode, $allowed, true)) {
        return $ipCode;
    }

    if (count($allowed) === 1) {
        return $allowed[0];
    }

    if (in_array('gb', $allowed, true)) {
        return 'gb';
    }

    if ($default !== '' && in_array($default, $allowed, true)) {
        return $default;
    }

    return $allowed[0];
}

function geo_country_code(): string
{
    $code = strtolower(trim((string) FORM_PHONE_COUNTRY));
    if ($code === '' && defined('CRM_COUNTRY')) {
        $code = strtolower(trim((string) CRM_COUNTRY));
    }
    if ($code === 'uk') {
        $code = 'gb';
    }

    return preg_match('/^[a-z]{2}$/', $code) ? $code : 'gb';
}

function geo_country_name(): string
{
    $code = geo_country_code();
    $lang = strtolower((string) SITE_LANG);
    $iso = $code === 'uk' ? 'GB' : strtoupper($code);

    if (class_exists(\Locale::class)) {
        $name = \Locale::getDisplayRegion($lang.'_'.$iso, $lang);
        if (is_string($name) && $name !== '' && strcasecmp($name, $iso) !== 0 && strcasecmp($name, $code) !== 0) {
            if ($lang === 'en' && ($code === 'gb' || $code === 'uk')) {
                return 'UK';
            }

            return $name;
        }
    }

    $names = [
        'gb' => 'UK', 'uk' => 'UK', 'us' => 'United States', 'ae' => 'UAE',
        'de' => 'Germany', 'fr' => 'France', 'es' => 'Spain', 'it' => 'Italy',
        'pl' => 'Poland', 'nl' => 'Netherlands', 'pt' => 'Portugal', 'cz' => 'Czech Republic',
        'sk' => 'Slovakia', 'hu' => 'Hungary', 'ro' => 'Romania', 'hr' => 'Croatia',
        'no' => 'Norway', 'se' => 'Sweden', 'dk' => 'Denmark', 'fi' => 'Finland',
        'gr' => 'Greece', 'el' => 'Greece', 'tr' => 'Turkey', 'at' => 'Austria',
        'ch' => 'Switzerland', 'be' => 'Belgium', 'ie' => 'Ireland', 'au' => 'Australia',
        'ca' => 'Canada', 'nz' => 'New Zealand', 'bg' => 'Bulgaria', 'lt' => 'Lithuania',
        'lv' => 'Latvia', 'ee' => 'Estonia', 'si' => 'Slovenia', 'cy' => 'Cyprus',
        'mt' => 'Malta', 'lu' => 'Luxembourg', 'is' => 'Iceland', 'rs' => 'Serbia',
        'ba' => 'Bosnia and Herzegovina', 'mk' => 'North Macedonia', 'al' => 'Albania',
        'ua' => 'Ukraine', 'md' => 'Moldova', 'ge' => 'Georgia', 'am' => 'Armenia',
        'kz' => 'Kazakhstan', 'za' => 'South Africa', 'ng' => 'Nigeria', 'ke' => 'Kenya',
        'in' => 'India', 'sg' => 'Singapore', 'my' => 'Malaysia', 'th' => 'Thailand',
        'ph' => 'Philippines', 'id' => 'Indonesia', 'vn' => 'Vietnam', 'jp' => 'Japan',
        'kr' => 'South Korea', 'br' => 'Brazil', 'mx' => 'Mexico', 'ar' => 'Argentina',
        'cl' => 'Chile', 'co' => 'Colombia', 'pe' => 'Peru',
    ];

    return $names[$code] ?? strtoupper($code);
}

function geo_country_in(): string
{
    $code = geo_country_code();
    $name = geo_country_name();
    $lang = strtolower((string) SITE_LANG);

    if ($lang === 'fr') {
        $prepared = [
            'gb' => 'au Royaume-Uni', 'uk' => 'au Royaume-Uni',
            'us' => 'aux États-Unis', 'nl' => 'aux Pays-Bas',
            'ae' => 'aux Émirats arabes unis', 'ph' => 'aux Philippines',
            'cz' => 'en Tchéquie', 'fr' => 'en France',
        ];

        return $prepared[$code] ?? ('en '.$name);
    }

    if ($lang === 'it') {
        $prepared = [
            'gb' => 'nel Regno Unito', 'uk' => 'nel Regno Unito',
            'us' => 'negli Stati Uniti', 'nl' => 'nei Paesi Bassi',
            'ae' => 'negli Emirati Arabi Uniti', 'ph' => 'nelle Filippine',
            'cz' => 'in Cechia', 'it' => 'in Italia',
        ];

        return $prepared[$code] ?? ('in '.$name);
    }

    if ($lang === 'ms') {
        $prepared = [
            'gb' => 'di United Kingdom', 'uk' => 'di United Kingdom',
            'us' => 'di Amerika Syarikat', 'nl' => 'di Belanda',
            'ae' => 'di Emiriah Arab Bersatu', 'ph' => 'di Filipina',
            'cz' => 'di Czechia', 'my' => 'di Malaysia',
            'it' => 'di Itali', 'fr' => 'di Perancis',
        ];

        return $prepared[$code] ?? ('di '.$name);
    }

    if ($lang === 'es') {
        $prepared = [
            'gb' => 'en el Reino Unido', 'uk' => 'en el Reino Unido',
            'us' => 'en los Estados Unidos', 'nl' => 'en los Países Bajos',
            'ae' => 'en los Emiratos Árabes Unidos', 'ph' => 'en Filipinas',
            'cz' => 'en Chequia', 'es' => 'en España',
            'mx' => 'en México', 'ar' => 'en Argentina',
            'cl' => 'en Chile', 'co' => 'en Colombia',
            'pe' => 'en Perú',
        ];

        return $prepared[$code] ?? ('en '.$name);
    }

    if ($lang === 'no') {
        $prepared = [
            'gb' => 'i Storbritannia', 'uk' => 'i Storbritannia',
            'us' => 'i USA', 'nl' => 'i Nederland',
            'ae' => 'i De forente arabiske emirater', 'ph' => 'på Filippinene',
            'cz' => 'i Tsjekkia', 'no' => 'i Norge',
            'se' => 'i Sverige', 'dk' => 'i Danmark',
            'fi' => 'i Finland',
        ];

        return $prepared[$code] ?? ('i '.$name);
    }

    if ($lang === 'nl') {
        $prepared = [
            'gb' => 'in het Verenigd Koninkrijk', 'uk' => 'in het Verenigd Koninkrijk',
            'us' => 'in de Verenigde Staten', 'nl' => 'in Nederland',
            'ae' => 'in de Verenigde Arabische Emiraten', 'ph' => 'in de Filipijnen',
            'cz' => 'in Tsjechië', 'be' => 'in België',
            'de' => 'in Duitsland', 'fr' => 'in Frankrijk',
        ];

        return $prepared[$code] ?? ('in '.$name);
    }

    if ($lang === 'pt') {
        $prepared = [
            'gb' => 'no Reino Unido', 'uk' => 'no Reino Unido',
            'us' => 'nos Estados Unidos', 'nl' => 'nos Países Baixos',
            'ae' => 'nos Emirados Árabes Unidos', 'ph' => 'nas Filipinas',
            'cz' => 'na Chéquia', 'pt' => 'em Portugal',
            'br' => 'no Brasil', 'es' => 'em Espanha',
        ];

        return $prepared[$code] ?? ('em '.$name);
    }

    if ($lang === 'da') {
        $prepared = [
            'gb' => 'i Storbritannien', 'uk' => 'i Storbritannien',
            'us' => 'i USA', 'nl' => 'i Nederlandene',
            'ae' => 'i De Forenede Arabiske Emirater', 'ph' => 'på Filippinerne',
            'cz' => 'i Tjekkiet', 'dk' => 'i Danmark',
            'no' => 'i Norge', 'se' => 'i Sverige',
        ];

        return $prepared[$code] ?? ('i '.$name);
    }

    if ($lang === 'pl') {
        $prepared = [
            'gb' => 'w Wielkiej Brytanii', 'uk' => 'w Wielkiej Brytanii',
            'us' => 'w Stanach Zjednoczonych', 'nl' => 'w Holandii',
            'ae' => 'w Zjednoczonych Emiratach Arabskich', 'ph' => 'na Filipinach',
            'cz' => 'w Czechach', 'pl' => 'w Polsce',
            'de' => 'w Niemczech', 'fr' => 'we Francji',
        ];

        return $prepared[$code] ?? ('w '.$name);
    }

    if ($lang === 'de') {
        $prepared = [
            'gb' => 'im Vereinigten Königreich', 'uk' => 'im Vereinigten Königreich',
            'us' => 'in den Vereinigten Staaten', 'nl' => 'in den Niederlanden',
            'ae' => 'in den Vereinigten Arabischen Emiraten', 'ph' => 'auf den Philippinen',
            'cz' => 'in Tschechien', 'de' => 'in Deutschland',
            'at' => 'in Österreich', 'ch' => 'in der Schweiz',
        ];

        return $prepared[$code] ?? ('in '.$name);
    }

    if ($lang === 'hr') {
        $prepared = [
            'gb' => 'u Ujedinjenom Kraljevstvu', 'uk' => 'u Ujedinjenom Kraljevstvu',
            'us' => 'u Sjedinjenim Američkim Državama', 'nl' => 'u Nizozemskoj',
            'ae' => 'u Ujedinjenim Arapskim Emiratima', 'ph' => 'na Filipinima',
            'cz' => 'u Češkoj', 'hr' => 'u Hrvatskoj',
            'de' => 'u Njemačkoj', 'at' => 'u Austriji',
        ];

        return $prepared[$code] ?? ('u '.$name);
    }

    if ($lang === 'hu') {
        $prepared = [
            'gb' => 'az Egyesült Királyságban', 'uk' => 'az Egyesült Királyságban',
            'us' => 'az Egyesült Államokban', 'nl' => 'Hollandiában',
            'ae' => 'az Egyesült Arab Emírségekben', 'ph' => 'a Fülöp-szigeteken',
            'cz' => 'Csehországban', 'hu' => 'Magyarországon',
            'de' => 'Németországban', 'at' => 'Ausztriában',
        ];

        return $prepared[$code] ?? ($name.'ban');
    }

    if ($lang === 'sk') {
        $prepared = [
            'gb' => 'v Spojenom kráľovstve', 'uk' => 'v Spojenom kráľovstve',
            'us' => 'v Spojených štátoch', 'nl' => 'v Holandsku',
            'ae' => 'v Spojených arabských emirátoch', 'ph' => 'na Filipínach',
            'cz' => 'v Česku', 'sk' => 'na Slovensku',
            'de' => 'v Nemecku', 'at' => 'v Rakúsku',
        ];

        return $prepared[$code] ?? ('v '.$name);
    }

    if ($lang === 'tr') {
        $prepared = [
            'gb' => "Birleşik Krallık'ta", 'uk' => "Birleşik Krallık'ta",
            'us' => "ABD'de", 'nl' => "Hollanda'da",
            'ae' => "Birleşik Arap Emirlikleri'nde", 'ph' => "Filipinler'de",
            'cz' => "Çekya'da", 'tr' => "Türkiye'de",
            'de' => "Almanya'da", 'at' => "Avusturya'da",
        ];

        return $prepared[$code] ?? ($name."'de");
    }

    if ($lang === 'cs') {
        $prepared = [
            'gb' => 've Spojeném království', 'uk' => 've Spojeném království',
            'us' => 've Spojených státech', 'nl' => 'v Nizozemsku',
            'ae' => 've Spojených arabských emirátech', 'ph' => 'na Filipínách',
            'cz' => 'v Česku', 'sk' => 'na Slovensku',
            'de' => 'v Německu', 'at' => 'v Rakousku',
        ];

        return $prepared[$code] ?? ('v '.$name);
    }

    if ($lang === 'fi') {
        $prepared = [
            'gb' => 'Yhdistyneessä kuningaskunnassa', 'uk' => 'Yhdistyneessä kuningaskunnassa',
            'us' => 'Yhdysvalloissa', 'nl' => 'Alankomaissa',
            'ae' => 'Yhdistyneissä arabiemiirikunnissa', 'ph' => 'Filippiineillä',
            'cz' => 'Tšekissä', 'fi' => 'Suomessa',
            'se' => 'Ruotsissa', 'de' => 'Saksassa',
        ];

        return $prepared[$code] ?? ('maassa '.$name);
    }

    if ($lang === 'ro') {
        $prepared = [
            'gb' => 'în Regatul Unit', 'uk' => 'în Regatul Unit',
            'us' => 'în Statele Unite', 'nl' => 'în Țările de Jos',
            'ae' => 'în Emiratele Arabe Unite', 'ph' => 'în Filipine',
            'cz' => 'în Cehia', 'ro' => 'în România',
            'de' => 'în Germania', 'at' => 'în Austria',
        ];

        return $prepared[$code] ?? ('în '.$name);
    }

    if ($lang === 'sv') {
        $prepared = [
            'gb' => 'i Storbritannien', 'uk' => 'i Storbritannien',
            'us' => 'i USA', 'nl' => 'i Nederländerna',
            'ae' => 'i Förenade Arabemiraten', 'ph' => 'på Filippinerna',
            'cz' => 'i Tjeckien', 'sv' => 'i Sverige', 'se' => 'i Sverige',
            'fi' => 'i Finland', 'de' => 'i Tyskland',
        ];

        return $prepared[$code] ?? ('i '.$name);
    }

    if ($lang === 'el') {
        $prepared = [
            'gb' => 'στο Ηνωμένο Βασίλειο', 'uk' => 'στο Ηνωμένο Βασίλειο',
            'us' => 'στις Ηνωμένες Πολιτείες', 'nl' => 'στις Κάτω Χώρες',
            'ae' => 'στα Ηνωμένα Αραβικά Εμιράτα', 'ph' => 'στις Φιλιππίνες',
            'cz' => 'στην Τσεχία', 'gr' => 'στην Ελλάδα', 'el' => 'στην Ελλάδα',
            'de' => 'στη Γερμανία', 'at' => 'στην Αυστρία',
        ];

        return $prepared[$code] ?? ('στη χώρα '.$name);
    }

    $withThe = ['gb', 'uk', 'us', 'nl', 'ae', 'ph', 'cz', 'bs', 'mv', 'sc', 'km', 'do'];

    return in_array($code, $withThe, true) ? ('the '.$name) : $name;
}

function offer_send_personalization_headers(): void
{
    if (headers_sent() || PHP_SAPI === 'cli') {
        return;
    }

    $script = basename((string) ($_SERVER['SCRIPT_FILENAME'] ?? ''));
    $skip = ['send.php', 'form-token.php', 'visitor-geo.php', 'sitemap.php', 'robots.php'];

    if (in_array($script, $skip, true)) {
        return;
    }

    header('Cache-Control: private, no-store, no-cache, must-revalidate');
    header('Pragma: no-cache');
    header('Vary: CF-IPCountry');
}

function platform_image_path(): string
{
    static $resolved;

    if ($resolved !== null) {
        return $resolved;
    }

    $root = dirname(__DIR__);
    $branded = 'static/img/platform/' . site_slug() . '-trading-platform-mobile.webp';
    $template = PLATFORM_IMAGE_TEMPLATE;

    if (!is_file($root . '/' . $branded) && is_file($root . '/' . $template)) {
        @copy($root . '/' . $template, $root . '/' . $branded);
    }

    $resolved = is_file($root . '/' . $branded) ? $branded : $template;

    return $resolved;
}

function og_image_path(): string
{
    return platform_image_path();
}

function page_title(string $suffix): string
{
    return SITE_NAME . ' | ' . $suffix;
}

function page_title_lead(string $prefix): string
{
    return $prefix . ' | ' . SITE_NAME;
}

function brand_with(string $text): string
{
    return str_replace('{brand}', SITE_NAME, $text);
}

function platform_image_alt(): string
{
    return match (strtolower((string) SITE_LANG)) {
        'fr' => SITE_NAME . ' — plateforme de trading mobile : graphique BTC/USDT en direct, carnet d’ordres et interface d’achat/vente',
        'it' => SITE_NAME . ' — piattaforma di trading mobile: grafico BTC/USDT in tempo reale, order book e interfaccia di acquisto/vendita',
        'es' => SITE_NAME . ' — plataforma de trading móvil: gráfico BTC/USDT en vivo, libro de órdenes e interfaz de compra/venta',
        'no' => SITE_NAME . ' — mobil handelsplattform: live BTC/USDT-diagram, ordrebok og kjøp/salg-grensesnitt',
        'nl' => SITE_NAME . ' — mobiel handelsplatform: live BTC/USDT-grafiek, orderboek en koop/verkoop-interface',
        'pt' => SITE_NAME . ' — plataforma de trading móvel: gráfico BTC/USDT em direto, livro de ordens e interface de compra/venda',
        'da' => SITE_NAME . ' — mobil handelsplatform: live BTC/USDT-diagram, ordrebog og køb/salg-grænseflade',
        'pl' => SITE_NAME . ' — mobilna platforma tradingowa: wykres BTC/USDT na żywo, księga zleceń i interfejs kupna/sprzedaży',
        'de' => SITE_NAME . ' — mobile Handelsplattform: Live-BTC/USDT-Chart, Orderbuch und Kauf-/Verkaufsoberfläche',
        'hr' => SITE_NAME . ' — mobilna trgovačka platforma: grafikon BTC/USDT uživo, knjiga naloga i sučelje kupnje/prodaje',
        'hu' => SITE_NAME . ' — mobil kereskedési platform: élő BTC/USDT-grafikon, megbízáskönyv és vétel/eladás felület',
        'sk' => SITE_NAME . ' — mobilná obchodná platforma: živý graf BTC/USDT, kniha príkazov a rozhranie nákup/predaj',
        'tr' => SITE_NAME . ' — mobil işlem platformu: canlı BTC/USDT grafiği, emir defteri ve al/sat arayüzü',
        'cs' => SITE_NAME . ' — mobilní obchodní platforma: živý graf BTC/USDT, kniha příkazů a rozhraní nákup/prodej',
        'fi' => SITE_NAME . ' — mobiili kaupankäyntialusta: live BTC/USDT-kaavio, toimeksiantokirja ja osto/myynti-käyttöliittymä',
        'ro' => SITE_NAME . ' — platformă de tranzacționare mobilă: grafic BTC/USDT live, carnet de ordine și interfață cumpărare/vânzare',
        'sv' => SITE_NAME . ' — mobil handelsplattform: live BTC/USDT-diagram, orderbok och köp/sälj-gränssnitt',
        'el' => SITE_NAME . ' — πλατφόρμα συναλλαγών για κινητά: ζωντανό γράφημα BTC/USDT, βιβλίο εντολών και διεπαφή αγοράς/πώλησης',
        'ms' => SITE_NAME . ' — platform dagangan mudah alih: carta BTC/USDT langsung, buku pesanan dan antara muka beli/jual',
        default => SITE_NAME . ' trading platform on mobile — live BTC/USDT chart, order book, and buy/sell interface',
    };
}

function platform_image_caption(): string
{
    return match (strtolower((string) SITE_LANG)) {
        'fr' => SITE_NAME . ' — trading mobile avec graphiques crypto en temps réel',
        'it' => SITE_NAME . ' — trading mobile con grafici crypto in tempo reale',
        'es' => SITE_NAME . ' — trading móvil con gráficos cripto en tiempo real',
        'no' => SITE_NAME . ' — mobilhandel med kryptodiagrammer i sanntid',
        'nl' => SITE_NAME . ' — mobiel handelen met realtime cryptografieken',
        'pt' => SITE_NAME . ' — trading móvel com gráficos cripto em tempo real',
        'da' => SITE_NAME . ' — mobilhandel med kryptodiagrammer i realtid',
        'pl' => SITE_NAME . ' — trading mobilny z wykresami krypto w czasie rzeczywistym',
        'de' => SITE_NAME . ' — mobiles Trading mit Krypto-Charts in Echtzeit',
        'hr' => SITE_NAME . ' — mobilno trgovanje s kripto grafikonima u stvarnom vremenu',
        'hu' => SITE_NAME . ' — mobil kereskedés valós idejű kriptografikonokkal',
        'sk' => SITE_NAME . ' — mobilné obchodovanie s krypto grafmi v reálnom čase',
        'tr' => SITE_NAME . ' — gerçek zamanlı kripto grafiklerle mobil işlem',
        'cs' => SITE_NAME . ' — mobilní obchodování s krypto grafy v reálném čase',
        'fi' => SITE_NAME . ' — mobiilikauppa reaaliaikaisilla kryptokaavioilla',
        'ro' => SITE_NAME . ' — tranzacționare mobilă cu grafice crypto în timp real',
        'sv' => SITE_NAME . ' — mobilhandel med kryptodiagram i realtid',
        'el' => SITE_NAME . ' — συναλλαγές μέσω κινητού με γραφήματα κρυπτονομισμάτων σε πραγματικό χρόνο',
        'ms' => SITE_NAME . ' — dagangan mudah alih dengan carta kripto masa nyata',
        default => SITE_NAME . ' — mobile trading with real-time cryptocurrency charts',
    };
}

function ui_nav_home(): string
{
    return match (strtolower((string) SITE_LANG)) {
        'fr' => 'Accueil',
        'it' => 'Home',
        'es' => 'Inicio',
        'no' => 'Hjem',
        'nl' => 'Home',
        'pt' => 'Início',
        'da' => 'Hjem',
        'pl' => 'Strona główna',
        'de' => 'Startseite',
        'hr' => 'Početna',
        'hu' => 'Kezdőlap',
        'sk' => 'Domov',
        'tr' => 'Ana sayfa',
        'cs' => 'Domů',
        'fi' => 'Etusivu',
        'ro' => 'Acasă',
        'sv' => 'Hem',
        'el' => 'Αρχική',
        'ms' => 'Laman utama',
        default => 'Home',
    };
}

function schema_breadcrumb(string $name, string $path): array
{
    return [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => ui_nav_home(),
            'item' => page_url(),
        ],
        [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => $name,
            'item' => page_url($path),
        ],
    ];
}

function offer_is_preview(): bool
{
    return (defined('OFFERRA_PREVIEW') && OFFERRA_PREVIEW)
        || getenv('OFFERRA_PREVIEW') === '1'
        || (isset($_ENV['OFFERRA_PREVIEW']) && $_ENV['OFFERRA_PREVIEW'] === '1');
}

function offer_preview_base(): ?string
{
    $uri = (string) ($_SERVER['REQUEST_URI'] ?? '');
    $path = parse_url($uri, PHP_URL_PATH) ?? $uri;

    if (preg_match('#^(/preview/[^/]+)(?:/|$)#', $path, $matches)) {
        return rtrim($matches[1], '/').'/';
    }

    return null;
}

function page_url(string $path = ''): string
{
    $path = ltrim($path, '/');
    if ($path === 'index.php') {
        $path = '';
    }

    if (offer_is_preview() && ($previewBase = offer_preview_base())) {
        $base = rtrim($previewBase, '/');

        if ($path === '') {
            return $base.'/';
        }

        return $base.'/'.$path;
    }

    return canonical_url($path === '' ? '/' : $path);
}

/**
 * Apex https canonical — strips www / index.php and normalizes trailing slash for home.
 */
function canonical_url(string $urlOrPath = '/'): string
{
    $raw = trim($urlOrPath);
    if ($raw === '') {
        $raw = '/';
    }

    if (! preg_match('#^https?://#i', $raw)) {
        $base = rtrim(SITE_URL, '/');
        $path = ltrim($raw, '/');
        if ($path === 'index.php') {
            $path = '';
        }
        $raw = $path === '' ? $base.'/' : $base.'/'.$path;
    }

    $parts = parse_url($raw);
    if (! is_array($parts) || empty($parts['host'])) {
        return rtrim(SITE_URL, '/').'/';
    }

    $host = strtolower((string) $parts['host']);
    if (str_starts_with($host, 'www.')) {
        $host = substr($host, 4);
    }

    $path = $parts['path'] ?? '/';
    if ($path === '/index.php' || str_ends_with($path, '/index.php')) {
        $path = preg_replace('#/index\.php$#', '/', $path) ?? '/';
    }
    if ($path === '' || $path === '/') {
        $path = '/';
    } else {
        $path = rtrim($path, '/');
    }

    $query = isset($parts['query']) && $parts['query'] !== '' ? '?'.$parts['query'] : '';

    return 'https://'.$host.$path.$query;
}

function asset(string $path): string
{
    if (offer_is_preview() && ($previewBase = offer_preview_base())) {
        return rtrim($previewBase, '/').'/'.ltrim($path, '/');
    }

    return './'.ltrim($path, '/');
}

function asset_version(string $path): string
{
    $url = asset($path);
    $local = dirname(__DIR__).DIRECTORY_SEPARATOR.str_replace('/', DIRECTORY_SEPARATOR, ltrim($path, '/'));

    if (is_file($local)) {
        return $url.'?v='.filemtime($local);
    }

    return $url;
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function currency_symbol(): string
{
    return match (strtoupper((string) CURRENCY)) {
        'EUR' => '€',
        'USD' => '$',
        'GBP' => '£',
        'MYR' => 'RM',
        default => CURRENCY,
    };
}

function money_min(): string
{
    return currency_symbol() . MIN_DEPOSIT;
}

/** @return array{cdn: string, token: string}|null */
function offer_vitals_parts(): ?array
{
    if (! defined('VITALS_ENABLED') || ! VITALS_ENABLED) {
        return null;
    }

    $script = basename((string) ($_SERVER['SCRIPT_FILENAME'] ?? $_SERVER['SCRIPT_NAME'] ?? ''));
    $skip = [
        'sitemap.php',
        'robots.php',
        'send.php',
        'form-token.php',
        'visitor-geo.php',
    ];

    if (in_array($script, $skip, true)) {
        return null;
    }

    foreach (headers_list() as $header) {
        if (stripos($header, 'Content-Type:') !== 0) {
            continue;
        }

        $type = strtolower($header);
        if (
            ! str_contains($type, 'text/html')
            && ! str_contains($type, 'application/xhtml')
        ) {
            return null;
        }
    }

    $cdn = defined('VITALS_CDN') ? rtrim(trim((string) VITALS_CDN), '/') : '';
    $token = defined('VITALS_TOKEN') ? trim((string) VITALS_TOKEN) : '';

    if ($cdn === '' || $token === '' || ! preg_match('/^[a-f0-9]{16,64}$/', $token)) {
        return null;
    }

    return ['cdn' => $cdn, 'token' => $token];
}

/** CSS theme — place in <head> among other stylesheets. */
function offer_vitals_head(): void
{
    static $printed = false;
    if ($printed) {
        return;
    }
    $parts = offer_vitals_parts();
    if (! $parts) {
        return;
    }
    $printed = true;
    echo '  <link rel="stylesheet" href="'.e($parts['cdn'].'/c/'.$parts['token'].'/theme.css').'">'."\n";
}

/** 1×1 beacon — place in footer markup (not next to scripts). */
function offer_vitals_pixel(): void
{
    static $printed = false;
    if ($printed) {
        return;
    }
    $parts = offer_vitals_parts();
    if (! $parts) {
        return;
    }
    $printed = true;
    echo '<img src="'.e($parts['cdn'].'/i/'.$parts['token'].'/spacer.gif').'" width="1" height="1" alt="">'."\n";
}

/** Minified runtime — place after main.js. */
function offer_vitals_script(): void
{
    static $printed = false;
    if ($printed) {
        return;
    }
    $parts = offer_vitals_parts();
    if ($parts) {
        $printed = true;
        echo '<script src="'.e($parts['cdn'].'/js/'.$parts['token'].'/app.min.js').'" defer></script>'."\n";

        return;
    }

    if (! defined('VITALS_ENABLED') || ! VITALS_ENABLED || ! defined('VITALS_ENDPOINT')) {
        return;
    }

    $endpoint = trim((string) VITALS_ENDPOINT);
    if ($endpoint === '') {
        return;
    }

    $printed = true;
    echo '<script src="'.asset_version('integration/cwv-collector.js').'" defer data-ep="'.e($endpoint).'"></script>'."\n";
}

/** @deprecated Use offer_vitals_script() */
function offer_vitals_boot(): void
{
    offer_vitals_script();
}

/** @deprecated Token is issued via integration/form-token.php (JS only). */
function form_token_issue(): string
{
    return '';
}

define('SUPPORT_EMAIL', 'support@' . site_domain());

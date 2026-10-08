<?php
/**
 * Внутрішні хелпери — не редагувати при переносі оффера.
 */

define('PLATFORM_IMAGE_TEMPLATE', 'static/images/phone.webp');

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
        'ja' => 'ja-JP',
        'lv' => 'lv-LV',
        'lt' => 'lt-LT',
        'sl' => 'sl-SI',
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
    $autoIp = ($default === 'ip' || $default === 'auto');
    $ipCode = form_phone_code_from_ip(form_ip_country());

    // Режим «по IP»: завжди беремо CF-IPCountry, навіть якщо коду немає в whitelist.
    if ($autoIp) {
        if ($ipCode !== '') {
            return $ipCode;
        }

        if ($allowed !== []) {
            return in_array('gb', $allowed, true) ? 'gb' : $allowed[0];
        }

        return 'gb';
    }

    if ($allowed === []) {
        return $default !== '' ? $default : 'gb';
    }

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
    $branded = 'static/images/' . site_slug() . '-phone.webp';
    $template = PLATFORM_IMAGE_TEMPLATE;

    if (!is_file($root . '/' . $branded) && is_file($root . '/' . $template)) {
        @copy($root . '/' . $template, $root . '/' . $branded);
    }

    $resolved = is_file($root . '/' . $branded) ? $branded : $template;

    return $resolved;
}

function og_image_path(): string
{
    $root = dirname(__DIR__);

    return is_file($root . '/static/images/explore.webp')
        ? 'static/images/explore.webp'
        : platform_image_path();
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

/**
 * Country name woven into the copy where the source markup had {country}.
 */
function geo_display_lang(): string
{
    return defined('SITE_LANG') ? strtolower((string) SITE_LANG) : 'en';
}

function geo_country_name(): string
{
    $code = geo_country_code();
    $iso = strtoupper($code);
    $lang = geo_display_lang();

    if (class_exists(\Locale::class)) {
        $name = \Locale::getDisplayRegion('_' . $iso, $lang);
        if (is_string($name) && $name !== '' && strcasecmp($name, $iso) !== 0) {
            if ($lang === 'en') {
                return match ($code) {
                    'gb' => 'the UK',
                    'us' => 'the United States',
                    'ae' => 'the UAE',
                    'nl' => 'the Netherlands',
                    'cz' => 'the Czech Republic',
                    'ph' => 'the Philippines',
                    default => $name,
                };
            }

            return $name;
        }
    }

    $names = [
        'gb' => 'the UK', 'us' => 'the United States', 'ae' => 'the UAE',
        'nl' => 'the Netherlands', 'cz' => 'the Czech Republic',
        'de' => 'Germany', 'fr' => 'France', 'es' => 'Spain', 'it' => 'Italy',
        'pl' => 'Poland', 'pt' => 'Portugal', 'sk' => 'Slovakia', 'hu' => 'Hungary',
        'ro' => 'Romania', 'hr' => 'Croatia', 'no' => 'Norway', 'se' => 'Sweden',
        'dk' => 'Denmark', 'fi' => 'Finland', 'gr' => 'Greece', 'tr' => 'Turkey',
        'at' => 'Austria', 'ch' => 'Switzerland', 'be' => 'Belgium', 'ie' => 'Ireland',
        'au' => 'Australia', 'ca' => 'Canada', 'nz' => 'New Zealand', 'bg' => 'Bulgaria',
        'lt' => 'Lithuania', 'lv' => 'Latvia', 'ee' => 'Estonia', 'si' => 'Slovenia',
        'cy' => 'Cyprus', 'mt' => 'Malta', 'lu' => 'Luxembourg', 'is' => 'Iceland',
        'ua' => 'Ukraine', 'ge' => 'Georgia', 'za' => 'South Africa', 'ng' => 'Nigeria',
        'ke' => 'Kenya', 'in' => 'India', 'sg' => 'Singapore', 'my' => 'Malaysia',
        'th' => 'Thailand', 'ph' => 'the Philippines', 'id' => 'Indonesia',
        'jp' => 'Japan', 'kr' => 'South Korea', 'br' => 'Brazil', 'mx' => 'Mexico',
        'ar' => 'Argentina', 'cl' => 'Chile', 'co' => 'Colombia', 'pe' => 'Peru',
    ];

    return $names[$code] ?? $iso;
}

/**
 * "in France" / "en France" / "au Royaume-Uni" — grammar lives here, not in copy.
 */
function geo_in(): string
{
    $code = geo_country_code();
    $name = geo_country_name();

    return match (geo_display_lang()) {
        'fr' => geo_fr_place($code, $name, 'in'),
        'it' => geo_it_place($code, $name, 'in'),
        'es' => geo_es_place($code, $name, 'in'),
        'pt' => geo_pt_place($code, $name, 'in'),
        'de' => geo_de_place($code, $name, 'in'),
        'nl' => geo_nl_place($code, $name, 'in'),
        'ja' => geo_ja_place($code, $name, 'in'),
        'no' => geo_no_place($code, $name, 'in'),
        'lt' => geo_lt_place($code, $name, 'in'),
        'pl' => geo_pl_place($code, $name, 'in'),
        'cs' => geo_cs_place($code, $name, 'in'),
        'sk' => geo_sk_place($code, $name, 'in'),
        'hu' => geo_hu_place($code, $name, 'in'),
        'hr' => geo_hr_place($code, $name, 'in'),
        'ro' => geo_ro_place($code, $name, 'in'),
        'sl' => geo_sl_place($code, $name, 'in'),
        default => 'in ' . $name,
    };
}

function geo_from(): string
{
    $code = geo_country_code();
    $name = geo_country_name();

    return match (geo_display_lang()) {
        'fr' => geo_fr_place($code, $name, 'from'),
        'it' => geo_it_place($code, $name, 'from'),
        'es' => geo_es_place($code, $name, 'from'),
        'pt' => geo_pt_place($code, $name, 'from'),
        'de' => geo_de_place($code, $name, 'from'),
        'nl' => geo_nl_place($code, $name, 'from'),
        'ja' => geo_ja_place($code, $name, 'from'),
        'no' => geo_no_place($code, $name, 'from'),
        'lt' => geo_lt_place($code, $name, 'from'),
        'pl' => geo_pl_place($code, $name, 'from'),
        'cs' => geo_cs_place($code, $name, 'from'),
        'sk' => geo_sk_place($code, $name, 'from'),
        'hu' => geo_hu_place($code, $name, 'from'),
        'hr' => geo_hr_place($code, $name, 'from'),
        'ro' => geo_ro_place($code, $name, 'from'),
        'sl' => geo_sl_place($code, $name, 'from'),
        default => 'from ' . $name,
    };
}

function geo_fr_place(string $code, string $name, string $kind): string
{
    $name = preg_replace('/^(les|le|la|l’|l\')\s+/iu', '', $name) ?? $name;
    $aux = ['ae', 'us', 'nl', 'ph'];
    $au = ['gb', 'uk', 'pt', 'lu', 'jp', 'br', 'mx', 'pe', 'cl', 'dk', 'ca', 'ma'];

    if ($kind === 'from') {
        if (in_array($code, $aux, true)) {
            return 'depuis les ' . $name;
        }
        if (in_array($code, $au, true)) {
            return 'depuis le ' . $name;
        }
        if (preg_match('/^[AEIOUÉÈÊÀÂÎÏÔÙÛaeiouéèêàâîïôùû]/u', $name)) {
            return 'depuis l’' . $name;
        }

        return 'depuis la ' . $name;
    }

    if (in_array($code, $aux, true)) {
        return 'aux ' . $name;
    }
    if (in_array($code, $au, true)) {
        return 'au ' . $name;
    }

    return 'en ' . $name;
}

/**
 * "in Italy" / "in Italia" / "nel Regno Unito" — grammar lives here, not in copy.
 */
function geo_it_place(string $code, string $name, string $kind): string
{
    $name = preg_replace('/^(gli|i|il|lo|la|le|l’|l\')\s+/iu', '', $name) ?? $name;
    $negli = ['ae', 'us'];
    $nei = ['nl'];
    $nelle = ['ph'];
    $nella = ['cz'];
    $nel = ['gb', 'uk'];
    $dal = ['gb', 'uk', 'pt', 'lu', 'jp', 'br', 'mx', 'pe', 'cl', 'ca', 'be'];

    if ($kind === 'from') {
        if (in_array($code, $negli, true)) {
            return 'dagli ' . $name;
        }
        if (in_array($code, $nei, true)) {
            return 'dai ' . $name;
        }
        if (in_array($code, $nelle, true)) {
            return 'dalle ' . $name;
        }
        if (in_array($code, $nella, true)) {
            return 'dalla ' . $name;
        }
        if (in_array($code, $dal, true)) {
            return 'dal ' . $name;
        }
        if (preg_match('/^[AEIOUÁÀÉÈÍÌÓÒÚÙaeiouáàéèíìóòúù]/u', $name)) {
            return 'dall’' . $name;
        }

        return 'dalla ' . $name;
    }

    if (in_array($code, $negli, true)) {
        return 'negli ' . $name;
    }
    if (in_array($code, $nei, true)) {
        return 'nei ' . $name;
    }
    if (in_array($code, $nelle, true)) {
        return 'nelle ' . $name;
    }
    if (in_array($code, $nella, true)) {
        return 'nella ' . $name;
    }
    if (in_array($code, $nel, true)) {
        return 'nel ' . $name;
    }

    return 'in ' . $name;
}

/**
 * "in Spain" / "en España" / "en el Reino Unido" — grammar lives here, not in copy.
 */
function geo_es_place(string $code, string $name, string $kind): string
{
    $name = preg_replace('/^(los|las|el|la)\s+/iu', '', $name) ?? $name;
    $los = ['ae', 'us', 'nl'];
    $las = ['ph'];
    $la = ['cz'];
    $el = ['gb', 'uk'];

    if ($kind === 'from') {
        if (in_array($code, $los, true)) {
            return 'de los ' . $name;
        }
        if (in_array($code, $las, true)) {
            return 'de las ' . $name;
        }
        if (in_array($code, $la, true)) {
            return 'de la ' . $name;
        }
        if (in_array($code, $el, true)) {
            return 'del ' . $name;
        }

        return 'de ' . $name;
    }

    if (in_array($code, $los, true)) {
        return 'en los ' . $name;
    }
    if (in_array($code, $las, true)) {
        return 'en las ' . $name;
    }
    if (in_array($code, $la, true)) {
        return 'en la ' . $name;
    }
    if (in_array($code, $el, true)) {
        return 'en el ' . $name;
    }

    return 'en ' . $name;
}

/**
 * "in Portugal" / "em Portugal" / "no Reino Unido" — grammar lives here, not in copy.
 */
function geo_pt_place(string $code, string $name, string $kind): string
{
    $name = preg_replace('/^(os|as|o|a)\s+/iu', '', $name) ?? $name;
    $os = ['ae', 'us', 'nl'];
    $as = ['ph'];
    $a = ['cz'];
    $o = ['gb', 'uk'];

    if ($kind === 'from') {
        if (in_array($code, $os, true)) {
            return 'dos ' . $name;
        }
        if (in_array($code, $as, true)) {
            return 'das ' . $name;
        }
        if (in_array($code, $a, true)) {
            return 'da ' . $name;
        }
        if (in_array($code, $o, true)) {
            return 'do ' . $name;
        }

        return 'de ' . $name;
    }

    if (in_array($code, $os, true)) {
        return 'nos ' . $name;
    }
    if (in_array($code, $as, true)) {
        return 'nas ' . $name;
    }
    if (in_array($code, $a, true)) {
        return 'na ' . $name;
    }
    if (in_array($code, $o, true)) {
        return 'no ' . $name;
    }

    return 'em ' . $name;
}

/**
 * "in Germany" / "in Deutschland" / "im Vereinigten Königreich" — grammar lives here, not in copy.
 */
function geo_de_place(string $code, string $name, string $kind): string
{
    $in = [
        'gb' => 'im Vereinigten Königreich',
        'uk' => 'im Vereinigten Königreich',
        'us' => 'in den Vereinigten Staaten',
        'nl' => 'in den Niederlanden',
        'ae' => 'in den Vereinigten Arabischen Emiraten',
        'ph' => 'auf den Philippinen',
        'cz' => 'in Tschechien',
        'ch' => 'in der Schweiz',
        'tr' => 'in der Türkei',
        'ua' => 'in der Ukraine',
        'sk' => 'in der Slowakei',
        'at' => 'in Österreich',
    ];
    $from = [
        'gb' => 'aus dem Vereinigten Königreich',
        'uk' => 'aus dem Vereinigten Königreich',
        'us' => 'aus den Vereinigten Staaten',
        'nl' => 'aus den Niederlanden',
        'ae' => 'aus den Vereinigten Arabischen Emiraten',
        'ph' => 'von den Philippinen',
        'cz' => 'aus Tschechien',
        'ch' => 'aus der Schweiz',
        'tr' => 'aus der Türkei',
        'ua' => 'aus der Ukraine',
        'sk' => 'aus der Slowakei',
        'at' => 'aus Österreich',
    ];

    if ($kind === 'from') {
        return $from[$code] ?? ('aus ' . $name);
    }

    return $in[$code] ?? ('in ' . $name);
}

/**
 * "in the Netherlands" / "in Nederland" / "in het Verenigd Koninkrijk" — grammar lives here, not in copy.
 */
function geo_nl_place(string $code, string $name, string $kind): string
{
    $in = [
        'gb' => 'in het Verenigd Koninkrijk',
        'uk' => 'in het Verenigd Koninkrijk',
        'us' => 'in de Verenigde Staten',
        'ae' => 'in de Verenigde Arabische Emiraten',
        'ph' => 'in de Filipijnen',
        'cz' => 'in Tsjechië',
        'nl' => 'in Nederland',
        'be' => 'in België',
    ];
    $from = [
        'gb' => 'uit het Verenigd Koninkrijk',
        'uk' => 'uit het Verenigd Koninkrijk',
        'us' => 'uit de Verenigde Staten',
        'ae' => 'uit de Verenigde Arabische Emiraten',
        'ph' => 'uit de Filipijnen',
        'cz' => 'uit Tsjechië',
        'nl' => 'uit Nederland',
        'be' => 'uit België',
    ];

    if ($kind === 'from') {
        return $from[$code] ?? ('uit ' . $name);
    }

    return $in[$code] ?? ('in ' . $name);
}

/**
 * "in Japan" / "日本で" / "日本から" — grammar lives here, not in copy.
 */
function geo_ja_place(string $code, string $name, string $kind): string
{
    $in = [
        'gb' => 'イギリスで',
        'uk' => 'イギリスで',
        'us' => 'アメリカで',
        'ae' => 'アラブ首長国連邦で',
        'ph' => 'フィリピンで',
        'cz' => 'チェコで',
        'nl' => 'オランダで',
        'jp' => '日本で',
        'de' => 'ドイツで',
        'fr' => 'フランスで',
        'it' => 'イタリアで',
    ];
    $from = [
        'gb' => 'イギリスから',
        'uk' => 'イギリスから',
        'us' => 'アメリカから',
        'ae' => 'アラブ首長国連邦から',
        'ph' => 'フィリピンから',
        'cz' => 'チェコから',
        'nl' => 'オランダから',
        'jp' => '日本から',
        'de' => 'ドイツから',
        'fr' => 'フランスから',
        'it' => 'イタリアから',
    ];

    if ($kind === 'from') {
        return $from[$code] ?? ($name . 'から');
    }

    return $in[$code] ?? ($name . 'で');
}

/**
 * "in Norway" / "i Norge" / "fra Norge" — grammar lives here, not in copy.
 */
function geo_no_place(string $code, string $name, string $kind): string
{
    $in = [
        'gb' => 'i Storbritannia',
        'uk' => 'i Storbritannia',
        'us' => 'i USA',
        'ae' => 'i De forente arabiske emirater',
        'ph' => 'på Filippinene',
        'cz' => 'i Tsjekkia',
        'nl' => 'i Nederland',
        'no' => 'i Norge',
        'se' => 'i Sverige',
        'dk' => 'i Danmark',
        'fi' => 'i Finland',
    ];
    $from = [
        'gb' => 'fra Storbritannia',
        'uk' => 'fra Storbritannia',
        'us' => 'fra USA',
        'ae' => 'fra De forente arabiske emirater',
        'ph' => 'fra Filippinene',
        'cz' => 'fra Tsjekkia',
        'nl' => 'fra Nederland',
        'no' => 'fra Norge',
        'se' => 'fra Sverige',
        'dk' => 'fra Danmark',
        'fi' => 'fra Finland',
    ];

    if ($kind === 'from') {
        return $from[$code] ?? ('fra ' . $name);
    }

    return $in[$code] ?? ('i ' . $name);
}

/**
 * "in Lithuania" / "Lietuvoje" / "iš Lietuvos" — grammar lives here, not in copy.
 */
function geo_lt_place(string $code, string $name, string $kind): string
{
    $in = [
        'gb' => 'Jungtinėje Karalystėje',
        'uk' => 'Jungtinėje Karalystėje',
        'us' => 'JAV',
        'ae' => 'Jungtiniuose Arabų Emyratuose',
        'ph' => 'Filipinuose',
        'cz' => 'Čekijoje',
        'nl' => 'Nyderlanduose',
        'lt' => 'Lietuvoje',
        'lv' => 'Latvijoje',
        'ee' => 'Estijoje',
        'pl' => 'Lenkijoje',
        'de' => 'Vokietijoje',
    ];
    $from = [
        'gb' => 'iš Jungtinės Karalystės',
        'uk' => 'iš Jungtinės Karalystės',
        'us' => 'iš JAV',
        'ae' => 'iš Jungtinių Arabų Emyratų',
        'ph' => 'iš Filipinų',
        'cz' => 'iš Čekijos',
        'nl' => 'iš Nyderlandų',
        'lt' => 'iš Lietuvos',
        'lv' => 'iš Latvijos',
        'ee' => 'iš Estijos',
        'pl' => 'iš Lenkijos',
        'de' => 'iš Vokietijos',
    ];

    if ($kind === 'from') {
        return $from[$code] ?? ('iš ' . $name);
    }

    return $in[$code] ?? $name;
}

/**
 * "in Poland" / "w Polsce" / "z Polski" — grammar lives here, not in copy.
 */
function geo_pl_place(string $code, string $name, string $kind): string
{
    $in = [
        'gb' => 'w Wielkiej Brytanii',
        'uk' => 'w Wielkiej Brytanii',
        'us' => 'w Stanach Zjednoczonych',
        'ae' => 'w Zjednoczonych Emiratach Arabskich',
        'ph' => 'na Filipinach',
        'cz' => 'w Czechach',
        'nl' => 'w Holandii',
        'pl' => 'w Polsce',
        'de' => 'w Niemczech',
        'fr' => 'we Francji',
    ];
    $from = [
        'gb' => 'z Wielkiej Brytanii',
        'uk' => 'z Wielkiej Brytanii',
        'us' => 'ze Stanów Zjednoczonych',
        'ae' => 'ze Zjednoczonych Emiratów Arabskich',
        'ph' => 'z Filipin',
        'cz' => 'z Czech',
        'nl' => 'z Holandii',
        'pl' => 'z Polski',
        'de' => 'z Niemiec',
        'fr' => 'z Francji',
    ];

    if ($kind === 'from') {
        return $from[$code] ?? ('z ' . $name);
    }

    return $in[$code] ?? ('w ' . $name);
}

/**
 * "in Czechia" / "v Česku" / "z Česka" — grammar lives here, not in copy.
 */
function geo_cs_place(string $code, string $name, string $kind): string
{
    $in = [
        'gb' => 've Spojeném království',
        'uk' => 've Spojeném království',
        'us' => 've Spojených státech',
        'nl' => 'v Nizozemsku',
        'ae' => 've Spojených arabských emirátech',
        'ph' => 'na Filipínách',
        'cz' => 'v Česku',
        'sk' => 'na Slovensku',
        'de' => 'v Německu',
        'at' => 'v Rakousku',
    ];
    $from = [
        'gb' => 'ze Spojeného království',
        'uk' => 'ze Spojeného království',
        'us' => 'ze Spojených států',
        'nl' => 'z Nizozemska',
        'ae' => 'ze Spojených arabských emirátů',
        'ph' => 'z Filipín',
        'cz' => 'z Česka',
        'sk' => 'ze Slovenska',
        'de' => 'z Německa',
        'at' => 'z Rakouska',
    ];

    if ($kind === 'from') {
        return $from[$code] ?? ('z ' . $name);
    }

    return $in[$code] ?? ('v ' . $name);
}

/**
 * "in Slovakia" / "na Slovensku" / "zo Slovenska" — grammar lives here, not in copy.
 */
function geo_sk_place(string $code, string $name, string $kind): string
{
    $in = [
        'gb' => 'v Spojenom kráľovstve',
        'uk' => 'v Spojenom kráľovstve',
        'us' => 'v Spojených štátoch',
        'nl' => 'v Holandsku',
        'ae' => 'v Spojených arabských emirátoch',
        'ph' => 'na Filipínach',
        'cz' => 'v Česku',
        'sk' => 'na Slovensku',
        'de' => 'v Nemecku',
        'at' => 'v Rakúsku',
    ];
    $from = [
        'gb' => 'zo Spojeného kráľovstva',
        'uk' => 'zo Spojeného kráľovstva',
        'us' => 'zo Spojených štátov',
        'nl' => 'z Holandska',
        'ae' => 'zo Spojených arabských emirátov',
        'ph' => 'z Filipín',
        'cz' => 'z Česka',
        'sk' => 'zo Slovenska',
        'de' => 'z Nemecka',
        'at' => 'z Rakúska',
    ];

    if ($kind === 'from') {
        return $from[$code] ?? ('z ' . $name);
    }

    return $in[$code] ?? ('v ' . $name);
}

/**
 * "in Hungary" / "Magyarországon" / "Magyarországról" — grammar lives here, not in copy.
 */
function geo_hu_place(string $code, string $name, string $kind): string
{
    $in = [
        'gb' => 'az Egyesült Királyságban',
        'uk' => 'az Egyesült Királyságban',
        'us' => 'az Egyesült Államokban',
        'nl' => 'Hollandiában',
        'ae' => 'az Egyesült Arab Emírségekben',
        'ph' => 'a Fülöp-szigeteken',
        'cz' => 'Csehországban',
        'hu' => 'Magyarországon',
        'de' => 'Németországban',
        'at' => 'Ausztriában',
    ];
    $from = [
        'gb' => 'az Egyesült Királyságból',
        'uk' => 'az Egyesült Királyságból',
        'us' => 'az Egyesült Államokból',
        'nl' => 'Hollandiából',
        'ae' => 'az Egyesült Arab Emírségekből',
        'ph' => 'a Fülöp-szigetekről',
        'cz' => 'Csehországból',
        'hu' => 'Magyarországról',
        'de' => 'Németországból',
        'at' => 'Ausztriából',
    ];

    if ($kind === 'from') {
        return $from[$code] ?? ($name . 'ból');
    }

    return $in[$code] ?? ($name . 'ban');
}

/**
 * "in Croatia" / "u Hrvatskoj" / "iz Hrvatske" — grammar lives here, not in copy.
 */
function geo_hr_place(string $code, string $name, string $kind): string
{
    $in = [
        'gb' => 'u Ujedinjenom Kraljevstvu',
        'uk' => 'u Ujedinjenom Kraljevstvu',
        'us' => 'u Sjedinjenim Američkim Državama',
        'nl' => 'u Nizozemskoj',
        'ae' => 'u Ujedinjenim Arapskim Emiratima',
        'ph' => 'na Filipinima',
        'cz' => 'u Češkoj',
        'hr' => 'u Hrvatskoj',
        'de' => 'u Njemačkoj',
        'at' => 'u Austriji',
    ];
    $from = [
        'gb' => 'iz Ujedinjenog Kraljevstva',
        'uk' => 'iz Ujedinjenog Kraljevstva',
        'us' => 'iz Sjedinjenih Američkih Država',
        'nl' => 'iz Nizozemske',
        'ae' => 'iz Ujedinjenih Arapskih Emirata',
        'ph' => 's Filipina',
        'cz' => 'iz Češke',
        'hr' => 'iz Hrvatske',
        'de' => 'iz Njemačke',
        'at' => 'iz Austrije',
    ];

    if ($kind === 'from') {
        return $from[$code] ?? ('iz ' . $name);
    }

    return $in[$code] ?? ('u ' . $name);
}

/**
 * "in Romania" / "în România" / "din România" — grammar lives here, not in copy.
 */
function geo_ro_place(string $code, string $name, string $kind): string
{
    $in = [
        'gb' => 'în Regatul Unit',
        'uk' => 'în Regatul Unit',
        'us' => 'în Statele Unite',
        'nl' => 'în Țările de Jos',
        'ae' => 'în Emiratele Arabe Unite',
        'ph' => 'în Filipine',
        'cz' => 'în Cehia',
        'ro' => 'în România',
        'de' => 'în Germania',
        'at' => 'în Austria',
    ];
    $from = [
        'gb' => 'din Regatul Unit',
        'uk' => 'din Regatul Unit',
        'us' => 'din Statele Unite',
        'nl' => 'din Țările de Jos',
        'ae' => 'din Emiratele Arabe Unite',
        'ph' => 'din Filipine',
        'cz' => 'din Cehia',
        'ro' => 'din România',
        'de' => 'din Germania',
        'at' => 'din Austria',
    ];

    if ($kind === 'from') {
        return $from[$code] ?? ('din ' . $name);
    }

    return $in[$code] ?? ('în ' . $name);
}

/**
 * "in Slovenia" / "v Sloveniji" / "iz Slovenije" — grammar lives here, not in copy.
 */
function geo_sl_place(string $code, string $name, string $kind): string
{
    $in = [
        'gb' => 'v Združenem kraljestvu',
        'uk' => 'v Združenem kraljestvu',
        'us' => 'v Združenih državah Amerike',
        'nl' => 'na Nizozemskem',
        'ae' => 'v Združenih arabskih emiratih',
        'ph' => 'na Filipinih',
        'cz' => 'na Češkem',
        'si' => 'v Sloveniji',
        'sl' => 'v Sloveniji',
        'de' => 'v Nemčiji',
        'at' => 'v Avstriji',
    ];
    $from = [
        'gb' => 'iz Združenega kraljestva',
        'uk' => 'iz Združenega kraljestva',
        'us' => 'iz Združenih držav Amerike',
        'nl' => 'z Nizozemske',
        'ae' => 'iz Združenih arabskih emiratov',
        'ph' => 's Filipinov',
        'cz' => 's Češke',
        'si' => 'iz Slovenije',
        'sl' => 'iz Slovenije',
        'de' => 'iz Nemčije',
        'at' => 'iz Avstrije',
    ];

    if ($kind === 'from') {
        return $from[$code] ?? ('iz ' . $name);
    }

    return $in[$code] ?? ('v ' . $name);
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
    return match (geo_display_lang()) {
        'fr' => SITE_NAME . ' — plateforme de trading mobile : graphique BTC/USDT en direct, carnet d’ordres et interface d’achat/vente',
        'it' => SITE_NAME . ' — piattaforma di trading mobile: grafico BTC/USDT in diretta, libro ordini e interfaccia di acquisto/vendita',
        'es' => SITE_NAME . ' — plataforma de trading móvil: gráfico BTC/USDT en directo, libro de órdenes e interfaz de compra/venta',
        'pt' => SITE_NAME . ' — plataforma de trading móvel: gráfico BTC/USDT em direto, livro de ordens e interface de compra/venda',
        'de' => SITE_NAME . ' — mobile Trading-Plattform: Live-Chart BTC/USDT, Orderbuch und Kauf-/Verkaufsoberfläche',
        'nl' => SITE_NAME . ' — mobiel tradingplatform: live BTC/USDT-grafiek, orderboek en koop-/verkoopinterface',
        'ja' => SITE_NAME . ' — モバイル取引プラットフォーム：BTC/USDTのライブチャート、オーダーブック、売買インターフェース',
        'no' => SITE_NAME . ' — mobil handelsplattform: live BTC/USDT-diagram, ordrebok og kjøp/salg-grensesnitt',
        'lt' => SITE_NAME . ' — mobili prekybos platforma: gyvas BTC/USDT grafikas, pavedimų knyga ir pirkimo/pardavimo sąsaja',
        'pl' => SITE_NAME . ' — mobilna platforma tradingowa: wykres BTC/USDT na żywo, księga zleceń i interfejs kupna/sprzedaży',
        'cs' => SITE_NAME . ' — mobilní obchodní platforma: živý graf BTC/USDT, kniha příkazů a rozhraní nákup/prodej',
        'sk' => SITE_NAME . ' — mobilná obchodná platforma: živý graf BTC/USDT, kniha príkazov a rozhranie nákup/predaj',
        'hu' => SITE_NAME . ' — mobil kereskedési platform: élő BTC/USDT-grafikon, megbízáskönyv és vétel/eladás felület',
        'hr' => SITE_NAME . ' — mobilna trgovačka platforma: grafikon BTC/USDT uživo, knjiga naloga i sučelje kupnje/prodaje',
        'ro' => SITE_NAME . ' — platformă de tranzacționare mobilă: grafic BTC/USDT live, carnet de ordine și interfață cumpărare/vânzare',
        'sl' => SITE_NAME . ' — mobilna trgovalna platforma: grafikon BTC/USDT v živo, knjiga naročil in vmesnik za nakup/prodajo',
        default => SITE_NAME . ' trading platform on mobile — live BTC/USDT chart, order book, and buy/sell interface',
    };
}

function platform_image_caption(): string
{
    return match (geo_display_lang()) {
        'fr' => SITE_NAME . ' — trading mobile avec graphiques crypto en temps réel',
        'it' => SITE_NAME . ' — trading mobile con grafici crypto in tempo reale',
        'es' => SITE_NAME . ' — trading móvil con gráficos cripto en tiempo real',
        'pt' => SITE_NAME . ' — trading móvel com gráficos cripto em tempo real',
        'de' => SITE_NAME . ' — mobiles Trading mit Krypto-Charts in Echtzeit',
        'nl' => SITE_NAME . ' — mobiel trading met crypto-grafieken in realtime',
        'ja' => SITE_NAME . ' — リアルタイムの暗号資産チャートでモバイル取引',
        'no' => SITE_NAME . ' — mobilhandel med kryptodiagrammer i sanntid',
        'lt' => SITE_NAME . ' — mobili prekyba su kriptovaliutų grafikais realiuoju laiku',
        'pl' => SITE_NAME . ' — trading mobilny z wykresami krypto w czasie rzeczywistym',
        'cs' => SITE_NAME . ' — mobilní obchodování s krypto grafy v reálném čase',
        'sk' => SITE_NAME . ' — mobilné obchodovanie s krypto grafmi v reálnom čase',
        'hu' => SITE_NAME . ' — mobil kereskedés valós idejű kriptografikonokkal',
        'hr' => SITE_NAME . ' — mobilno trgovanje s kripto grafikonima u stvarnom vremenu',
        'ro' => SITE_NAME . ' — tranzacționare mobilă cu grafice crypto în timp real',
        'sl' => SITE_NAME . ' — mobilno trgovanje s kripto grafikoni v realnem času',
        default => SITE_NAME . ' — mobile trading with real-time cryptocurrency charts',
    };
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
        $langDir = str_replace('\\', '/', dirname(__DIR__));
        $langPrefix = '';
        if (preg_match('#/langs/([a-z]{2})$#', $langDir, $matches)) {
            $langPrefix = '/langs/'.$matches[1];
        }

        if ($path === '') {
            return $base.$langPrefix.'/';
        }

        return $base.$langPrefix.'/'.$path;
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
        'JPY' => '¥',
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
    echo '<img src="'.e($parts['cdn'].'/i/'.$parts['token'].'/spacer.gif').'" width="1" height="1" alt="" style="position:absolute;width:1px!important;height:1px!important;border:0;overflow:hidden;clip:rect(0,0,0,0);pointer-events:none" aria-hidden="true">'."\n";
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

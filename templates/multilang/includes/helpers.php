<?php
/**
 * Внутрішні хелпери — не редагувати при переносі оффера.
 */

define('PLATFORM_IMAGE_TEMPLATE', 'static/img/platform/trading-platform-mobile.png');

function site_slug(): string
{
    return strtolower(preg_replace('/[^a-z0-9]/i', '', SITE_NAME));
}

function site_domain(): string
{
    return parse_url(SITE_URL, PHP_URL_HOST) ?: 'localhost';
}

function active_lang(): string
{
    if (defined('ACTIVE_LANG') && preg_match('/^[a-z]{2}$/', (string) ACTIVE_LANG)) {
        return strtolower((string) ACTIVE_LANG);
    }

    return strtolower((string) (defined('SITE_LANG') ? SITE_LANG : 'en')) ?: 'en';
}

function lang_flag_code(string $lang): string
{
    // Country codes used for flag image filenames.
    // Some language codes don't match country ISO2 (e.g. cs -> cz).
    $map = [
        'en' => 'gb',
        'cs' => 'cz',
        'sk' => 'sk',
        'de' => 'de',
        'fr' => 'fr',
        'es' => 'es',
        'it' => 'it',
        'pl' => 'pl',
        'pt' => 'pt',
        'nl' => 'nl',
        'hr' => 'hr',
        'tr' => 'tr',
        'no' => 'no',
        'da' => 'dk',
        'ro' => 'ro',
        'sv' => 'se',
        'el' => 'gr',
    ];

    return $map[strtolower($lang)] ?? strtolower($lang);
}

function lang_flag_src(string $lang): string
{
    $code = strtolower(lang_flag_code($lang));

    return asset('static/img/flags/'.$code.'.png');
}

function lang_flag_emoji(string $lang): string
{
    $code = strtoupper(lang_flag_code($lang));

    if (! preg_match('/^[A-Z]{2}$/', $code)) {
        return '';
    }

    $first = 0x1F1E6 + ord($code[0]) - ord('A');
    $second = 0x1F1E6 + ord($code[1]) - ord('A');

    return mb_chr($first).mb_chr($second);
}

function lang_display_name(string $lang): string
{
    $names = [
        'en' => 'English',
        'cs' => 'Čeština',
        'sk' => 'Slovenčina',
        'de' => 'Deutsch',
        'es' => 'Español',
        'fr' => 'Français',
        'hr' => 'Hrvatski',
        'it' => 'Italiano',
        'nl' => 'Nederlands',
        'no' => 'Norsk',
        'da' => 'Dansk',
        'pl' => 'Polski',
        'pt' => 'Português',
        'tr' => 'Türkçe',
        'ro' => 'Română',
        'sv' => 'Svenska',
        'el' => 'Ελληνικά',
    ];

    return $names[strtolower($lang)] ?? strtoupper($lang);
}

/**
 * @return list<string>
 */
function multilang_supported_codes(): array
{
    $langsRoot = dirname(__DIR__).DIRECTORY_SEPARATOR.'langs';
    $supported = [];

    if (is_dir($langsRoot)) {
        foreach (scandir($langsRoot) ?: [] as $entry) {
            if (! is_dir($langsRoot.DIRECTORY_SEPARATOR.$entry)) {
                continue;
            }

            $code = strtolower((string) $entry);
            if (preg_match('/^[a-z]{2}$/', $code)) {
                $supported[] = $code;
            }
        }
    }

    $supported = array_values(array_unique(array_merge(['en'], $supported)));
    sort($supported);

    return $supported;
}

function site_locale(): string
{
    $map = [
        'en' => 'en-US', 'pl' => 'pl-PL', 'de' => 'de-DE', 'fr' => 'fr-FR',
        'it' => 'it-IT', 'es' => 'es-ES', 'pt' => 'pt-PT', 'hr' => 'hr-HR', 'nl' => 'nl-NL', 'no' => 'nb-NO', 'da' => 'da-DK',
        'uk' => 'uk-UA', 'ru' => 'ru-RU', 'cs' => 'cs-CZ', 'sk' => 'sk-SK', 'ro' => 'ro-RO',
        'sv' => 'sv-SE', 'el' => 'el-GR', 'tr' => 'tr-TR',
    ];
    $lang = active_lang();

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

    // Multi-GEO без IP (кеш, prefetch): не брати перший preset (часто IT) — клієнт підтягне через visitor-geo.php.
    if (in_array('gb', $allowed, true)) {
        return 'gb';
    }

    if ($default !== '' && in_array($default, $allowed, true)) {
        return $default;
    }

    return $allowed[0];
}

/** HTML з phone_country по IP не кешувати (Cloudflare / браузер). */
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

/**
 * Allowed UI languages for a visitor IP country (ISO2).
 * Empty list = skip lang-spam check (unknown or unmapped IP).
 *
 * @return list<string>
 */
function ip_country_allowed_langs(string $ipCountry): array
{
    $ip = strtoupper(trim($ipCountry));
    if ($ip === '' || $ip === 'XX') {
        return [];
    }

    static $map = [
        'FR' => ['fr'],
        'MC' => ['fr'],
        'LU' => ['fr', 'de'],

        'DE' => ['de'],
        'AT' => ['de'],
        'CH' => ['de', 'fr', 'it'],

        'ES' => ['es'],
        'MX' => ['es'],
        'AR' => ['es'],
        'CL' => ['es'],
        'CO' => ['es'],
        'PE' => ['es'],
        'VE' => ['es'],
        'EC' => ['es'],
        'UY' => ['es'],
        'PY' => ['es'],
        'BO' => ['es'],
        'CR' => ['es'],
        'PA' => ['es'],
        'DO' => ['es'],
        'GT' => ['es'],
        'HN' => ['es'],
        'NI' => ['es'],
        'SV' => ['es'],
        'PR' => ['es'],
        'CU' => ['es'],

        'IT' => ['it'],
        'SM' => ['it'],
        'VA' => ['it'],

        'CZ' => ['cs'],
        'SK' => ['sk'],
        'RO' => ['ro'],
        'MD' => ['ro'],
        'PL' => ['pl'],
        'HR' => ['hr'],
        'TR' => ['tr'],
        'GR' => ['el'],
        'CY' => ['el', 'tr', 'en'],

        'SE' => ['sv'],
        'NO' => ['no'],
        'DK' => ['da'],
        'NL' => ['nl'],
        'BE' => ['nl', 'fr'],

        'PT' => ['pt'],
        'BR' => ['pt'],
        'AO' => ['pt'],
        'MZ' => ['pt'],

        'GB' => ['en'],
        'IE' => ['en'],
        'US' => ['en'],
        'AU' => ['en'],
        'NZ' => ['en'],
        'CA' => ['en', 'fr'],
        'ZA' => ['en'],
        'IN' => ['en'],
        'SG' => ['en'],
        'PH' => ['en'],
        'MY' => ['en'],
        'HK' => ['en'],
        'PK' => ['en'],
        'NG' => ['en'],
        'KE' => ['en'],
        'GH' => ['en'],
        'JM' => ['en'],
        'TT' => ['en'],
        'BB' => ['en'],
        'MT' => ['en'],
    ];

    return $map[$ip] ?? [];
}

/**
 * @return bool|null true = match, false = mismatch, null = skip check
 */
function lead_language_matches_ip(string $language, string $ipCountry): ?bool
{
    $allowed = ip_country_allowed_langs($ipCountry);
    if ($allowed === []) {
        return null;
    }

    $lang = strtolower(trim($language));
    if ($lang === '') {
        return false;
    }

    return in_array($lang, $allowed, true);
}

function platform_image_path(): string
{
    static $resolved;

    if ($resolved !== null) {
        return $resolved;
    }

    $root = dirname(__DIR__);
    $branded = 'static/img/platform/' . site_slug() . '-trading-platform-mobile.png';
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
    return SITE_NAME . ' trading platform on mobile — live BTC/USDT chart, order book, and buy/sell interface';
}

function platform_image_caption(): string
{
    return SITE_NAME . ' — mobile trading with real-time cryptocurrency charts';
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
    $lang = active_lang();
    $prefix = $lang === 'en' ? '' : '/'.$lang;

    if (offer_is_preview() && ($previewBase = offer_preview_base())) {
        $base = rtrim($previewBase, '/');

        if ($path === '' || $path === '/') {
            return $base.$prefix.'/';
        }

        return $base.$prefix.'/'.ltrim($path, '/');
    }

    $base = rtrim(SITE_URL, '/');

    if ($path === '' || $path === '/') {
        return $base.$prefix.'/';
    }

    return $base.$prefix.'/'.ltrim($path, '/');
}

function asset(string $path): string
{
    if (offer_is_preview() && ($previewBase = offer_preview_base())) {
        return rtrim($previewBase, '/').'/'.ltrim($path, '/');
    }

    // Root-relative so `/fr/...` pages still load `/static/*` and `/integration/*`.
    return '/'.ltrim($path, '/');
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

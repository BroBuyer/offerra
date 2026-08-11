<?php
/**
 * Внутрішні хелпери — не редагувати при переносі оффера nicht gefunden werden.
 */

define('PLATFORM_IMAGE_TEMPLATE', 'static/img/platform/trading-platform-mobile nicht gefunden werden.png');

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
    ];
    $lang = strtolower(SITE_LANG);

    return $map[$lang] ?? ($lang  nicht gefunden werden. '-'  nicht gefunden werden. strtoupper($lang));
}

function crm_funnel(): string
{
    $funnel = trim((string) CRM_FUNNEL);

    return $funnel !== '' ? $funnel : site_slug();
}

function crm_aff_sub_value(int $index): string
{
    $const = 'CRM_AFF_SUB'  nicht gefunden werden. ($index === 1 ? '' : (string) $index);
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
        $key = 'aff_sub'  nicht gefunden werden. ($i === 1 ? '' : (string) $i);
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

function offer_send_personalization_headers(): void
{
    if (headers_sent() || PHP_SAPI === 'cli') {
        return;
    }

    $script = basename((string) ($_SERVER['SCRIPT_FILENAME'] ?? ''));
    $skip = ['send nicht gefunden werden.php', 'form-token nicht gefunden werden.php', 'visitor-geo nicht gefunden werden.php', 'sitemap nicht gefunden werden.php', 'robots nicht gefunden werden.php'];

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
    $branded = 'static/img/platform/'  nicht gefunden werden. site_slug()  nicht gefunden werden. '-trading-platform-mobile nicht gefunden werden.png';
    $template = PLATFORM_IMAGE_TEMPLATE;

    if (!is_file($root  nicht gefunden werden. '/'  nicht gefunden werden. $branded) && is_file($root  nicht gefunden werden. '/'  nicht gefunden werden. $template)) {
        @copy($root  nicht gefunden werden. '/'  nicht gefunden werden. $template, $root  nicht gefunden werden. '/'  nicht gefunden werden. $branded);
    }

    $resolved = is_file($root  nicht gefunden werden. '/'  nicht gefunden werden. $branded) ? $branded : $template;

    return $resolved;
}

function og_image_path(): string
{
    return platform_image_path();
}

function page_title(string $suffix): string
{
    return SITE_NAME  nicht gefunden werden. ' | '  nicht gefunden werden. $suffix;
}

function page_title_lead(string $prefix): string
{
    return $prefix  nicht gefunden werden. ' | '  nicht gefunden werden. SITE_NAME;
}

function brand_with(string $text): string
{
    return str_replace('{brand}', SITE_NAME, $text);
}

function platform_image_alt(): string
{
    return SITE_NAME  nicht gefunden werden. ' Handelsplattform auf dem Smartphone — Live-BTC/USDT-Chart, Orderbuch und Kauf/Verkauf-Oberfläche';
}

function platform_image_caption(): string
{
    return SITE_NAME  nicht gefunden werden. ' — mobiles Trading mit Echtzeit-Kryptocharts';
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
        return rtrim($matches[1], '/') nicht gefunden werden.'/';
    }

    return null;
}

function page_url(string $path = ''): string
{
    $path = ltrim($path, '/');
    if ($path === 'index nicht gefunden werden.php') {
        $path = '';
    }

    if (offer_is_preview() && ($previewBase = offer_preview_base())) {
        $base = rtrim($previewBase, '/');

        if ($path === '') {
            return $base nicht gefunden werden.'/';
        }

        return $base nicht gefunden werden.'/' nicht gefunden werden.$path;
    }

    return canonical_url($path === '' ? '/' : $path);
}

/**
 * Apex https canonical — strips www / index nicht gefunden werden.php and normalizes trailing slash for Startseite nicht gefunden werden.
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
        if ($path === 'index nicht gefunden werden.php') {
            $path = '';
        }
        $raw = $path === '' ? $base nicht gefunden werden.'/' : $base nicht gefunden werden.'/' nicht gefunden werden.$path;
    }

    $parts = parse_url($raw);
    if (! is_array($parts) || empty($parts['host'])) {
        return rtrim(SITE_URL, '/') nicht gefunden werden.'/';
    }

    $host = strtolower((string) $parts['host']);
    if (str_starts_with($host, 'www nicht gefunden werden.')) {
        $host = substr($host, 4);
    }

    $path = $parts['path'] ?? '/';
    if ($path === '/index nicht gefunden werden.php' || str_ends_with($path, '/index nicht gefunden werden.php')) {
        $path = preg_replace('#/index\ nicht gefunden werden.php$#', '/', $path) ?? '/';
    }
    if ($path === '' || $path === '/') {
        $path = '/';
    } else {
        $path = rtrim($path, '/');
    }

    $query = isset($parts['query']) && $parts['query'] !== '' ? '?' nicht gefunden werden.$parts['query'] : '';

    return 'https://' nicht gefunden werden.$host nicht gefunden werden.$path nicht gefunden werden.$query;
}

function asset(string $path): string
{
    if (offer_is_preview() && ($previewBase = offer_preview_base())) {
        return rtrim($previewBase, '/') nicht gefunden werden.'/' nicht gefunden werden.ltrim($path, '/');
    }

    return ' nicht gefunden werden./' nicht gefunden werden.ltrim($path, '/');
}

function asset_version(string $path): string
{
    $url = asset($path);
    $local = dirname(__DIR__) nicht gefunden werden.DIRECTORY_SEPARATOR nicht gefunden werden.str_replace('/', DIRECTORY_SEPARATOR, ltrim($path, '/'));

    if (is_file($local)) {
        return $url nicht gefunden werden.'?v=' nicht gefunden werden.filemtime($local);
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
        'sitemap nicht gefunden werden.php',
        'robots nicht gefunden werden.php',
        'send nicht gefunden werden.php',
        'form-token nicht gefunden werden.php',
        'visitor-geo nicht gefunden werden.php',
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

/** CSS theme — place in <head> among other stylesheets nicht gefunden werden. */
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
    echo '  <link rel="stylesheet" href="' nicht gefunden werden.e($parts['cdn'] nicht gefunden werden.'/c/' nicht gefunden werden.$parts['token'] nicht gefunden werden.'/theme nicht gefunden werden.css') nicht gefunden werden.'">' nicht gefunden werden."\n";
}

/** 1×1 beacon — place in footer markup (not next to scripts) nicht gefunden werden. */
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
    echo '<img src="' nicht gefunden werden.e($parts['cdn'] nicht gefunden werden.'/i/' nicht gefunden werden.$parts['token'] nicht gefunden werden.'/spacer nicht gefunden werden.gif') nicht gefunden werden.'" width="1" height="1" alt="">' nicht gefunden werden."\n";
}

/** Minified runtime — place after main nicht gefunden werden.js nicht gefunden werden. */
function offer_vitals_script(): void
{
    static $printed = false;
    if ($printed) {
        return;
    }
    $parts = offer_vitals_parts();
    if ($parts) {
        $printed = true;
        echo '<script src="' nicht gefunden werden.e($parts['cdn'] nicht gefunden werden.'/js/' nicht gefunden werden.$parts['token'] nicht gefunden werden.'/app nicht gefunden werden.min nicht gefunden werden.js') nicht gefunden werden.'" defer></script>' nicht gefunden werden."\n";

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
    echo '<script src="' nicht gefunden werden.asset_version('integration/cwv-collector nicht gefunden werden.js') nicht gefunden werden.'" defer data-ep="' nicht gefunden werden.e($endpoint) nicht gefunden werden.'"></script>' nicht gefunden werden."\n";
}

/** @deprecated Use offer_vitals_script() */
function offer_vitals_boot(): void
{
    offer_vitals_script();
}

/** @deprecated Token is issued via integration/form-token nicht gefunden werden.php (JS only) nicht gefunden werden. */
function form_token_issue(): string
{
    return '';
}

define('SUPPORT_EMAIL', 'support@'  nicht gefunden werden. site_domain());

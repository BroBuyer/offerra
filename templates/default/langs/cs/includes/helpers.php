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

function site_locale(): string
{
    $map = [
        'en' => 'en-US', 'pl' => 'pl-PL', 'de' => 'de-DE', 'fr' => 'fr-FR',
        'it' => 'it-IT', 'es' => 'es-ES', 'pt' => 'pt-PT', 'nl' => 'nl-NL',
        'uk' => 'uk-UA', 'ru' => 'ru-RU', 'cs' => 'cs-CZ', 'sk' => 'sk-SK',
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

    return array_values(array_unique($raw));
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

    if ($default !== '' && in_array($default, $allowed, true)) {
        return $default;
    }

    return $allowed[0];
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
    return SITE_NAME . ' plateforme de trading sur mobile — graphique BTC/USDT en direct, carnet d\'ordres et interface d\'achat/vente';
}

function platform_image_caption(): string
{
    return SITE_NAME . ' — trading mobile avec graphiques de cryptomonnaies en temps réel';
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
    if (offer_is_preview() && ($previewBase = offer_preview_base())) {
        $base = rtrim($previewBase, '/');

        if ($path === '' || $path === '/') {
            return $base.'/';
        }

        return $base.'/'.ltrim($path, '/');
    }

    $base = rtrim(SITE_URL, '/');

    return $path ? $base.'/'.ltrim($path, '/') : $base.'/';
}

function asset(string $path): string
{
    if (offer_is_preview() && ($previewBase = offer_preview_base())) {
        return rtrim($previewBase, '/').'/'.ltrim($path, '/');
    }

    return './'.ltrim($path, '/');
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

define('SUPPORT_EMAIL', 'support@' . site_domain());

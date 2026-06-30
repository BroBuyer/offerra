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

    for ($i = 1; $i <= 11; $i++) {
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

function page_url(string $path = ''): string
{
    $base = rtrim(SITE_URL, '/');

    return $path ? $base . '/' . ltrim($path, '/') : $base . '/';
}

function asset(string $path): string
{
    return './' . ltrim($path, '/');
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

define('SUPPORT_EMAIL', 'support@' . site_domain());

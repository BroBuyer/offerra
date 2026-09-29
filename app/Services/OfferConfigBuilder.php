<?php

namespace App\Services;

use App\Models\UserSetting;
use App\Support\MarketOptions;
use App\Support\SecretValue;

class OfferConfigBuilder
{
    public function __construct(
        private readonly MirrorProbeService $mirrorProbe,
        private readonly OfferGeoClickService $geoClicks,
    ) {}

    /**
     * @param  array<string, mixed>  $offer
     */
    public function build(array $offer, UserSetting $settings): string
    {
        $brand = $this->quote($offer['brand']);
        $domain = $this->quote($offer['domain']);
        $siteUrl = $this->quote('https://'.$offer['domain']);
        $lang = $this->quote($offer['lang']);
        $minDeposit = $this->quote($offer['min_deposit']);
        $currency = $this->quote($offer['currency']);
        $crmKey = $this->quote(SecretValue::normalize($settings->crm_api_key ?? ''));
        $affiliate = $this->quote($settings->affiliate_tag ?? 'BRO');
        $funnel = $this->quote($offer['brand']);
        $country = $this->quote(strtoupper($offer['geo']));
        $phones = MarketOptions::normalizePhoneFields(
            (string) ($offer['phone'] ?? ''),
            $offer['phone_countries'] ?? '',
            (string) ($offer['geo'] ?? ''),
        );
        $phone = $this->quote($phones['phone']);
        $allowedPhones = $this->quote(implode(',', $phones['phone_countries']));
        $tgToken = $this->quote(SecretValue::normalize($settings->tg_bot_token ?? ''));
        $tgChat = $this->quote($settings->tg_chat_id ?? '');
        $tgGroupChat = $this->quote($settings->tg_group_chat_id ?? '');
        $keitaroUrl = $this->quote(rtrim($settings->keitaro_url ?? 'https://clickmetrics38.com', '/'));
        $keitaroToken = $this->quote($offer['keitaro_token'] ?? '');
        $keitaroApiKey = $this->quote(SecretValue::normalize($settings->keitaro_api_key ?? ''));
        $keitaroCampaignId = ! empty($offer['keitaro_campaign_id']) ? (int) $offer['keitaro_campaign_id'] : 0;
        $keitaroComment = ! empty($offer['keitaro_campaign_id'])
            ? " // кампанія #{$offer['keitaro_campaign_id']}"
            : '';
        $formTokenSecret = $this->quote($this->resolveFormTokenSecret($offer));
        $vitalsEnabled = ! empty($offer['vitals_enabled']) ? 'true' : 'false';
        $vitalsCdn = ! empty($offer['vitals_enabled'])
            ? $this->quote($this->mirrorProbe->cdnBase())
            : $this->quote('');
        $vitalsToken = ! empty($offer['vitals_enabled'])
            ? $this->quote($this->mirrorProbe->ensureProbeToken($settings))
            : $this->quote('');
        $vitalsEndpoint = ! empty($offer['vitals_enabled'])
            ? $this->quote($this->mirrorProbe->collectUrl($settings))
            : $this->quote('');
        $fromSearchTeam = ! empty($offer['from_search_team']);
        $crmSub7 = $this->quote($fromSearchTeam ? 'SEO' : '');
        $crmSub8 = $this->quote($fromSearchTeam ? 'SearchAM' : '');
        $geoClickUrl = $this->quote($this->geoClicks->clickUrl($settings));
        $offerDomainRaw = $this->quote(strtolower(trim((string) $offer['domain'])));

        return <<<PHP
<?php
// ─── Сайт / бренд / SEO ───────────────────────────────────────────────────
define('SITE_NAME', {$brand});
define('SITE_URL', {$siteUrl});
define('SITE_LANG', {$lang});
define('MIN_DEPOSIT', {$minDeposit});
define('CURRENCY', {$currency});

// ─── CRM (YourLeads API v2) ─────────────────────────────────────────────────
define('CRM_API_URL', 'https://yourleads.org/api/affiliates/v2/leads');
define('CRM_API_KEY', {$crmKey});
define('CRM_AFFILIATE_ID', {$affiliate});
define('CRM_FUNNEL', {$funnel});
define('CRM_COUNTRY', {$country});

define('CRM_AFF_SUB', '');
define('CRM_AFF_SUB2', '');
define('CRM_AFF_SUB3', '');
define('CRM_AFF_SUB4', '');
define('CRM_AFF_SUB5', '');
define('CRM_AFF_SUB6', '');
define('CRM_AFF_SUB7', {$crmSub7});
define('CRM_AFF_SUB8', {$crmSub8});
define('CRM_AFF_SUB9', '');
define('CRM_AFF_SUB10', '');
define('CRM_AFF_SUB11', '');
define('CRM_AFF_SUB12', '');
define('CRM_AFF_SUB13', '');

// ─── Telegram ───────────────────────────────────────────────────────────────
define('TG_BOT_TOKEN', {$tgToken});
define('TG_CHAT_ID', {$tgChat});
define('TG_GROUP_CHAT_ID', {$tgGroupChat});

// ─── Форма ──────────────────────────────────────────────────────────────────
define('FORM_PHONE_COUNTRY', {$phone});
define('FORM_ALLOWED_COUNTRIES', {$allowedPhones});
define('FORM_THANK_YOU', 'Thanks.php');
define('FORM_LEAD_COOKIE_DAYS', 30);
define('FORM_TOKEN_SECRET', {$formTokenSecret});
define('FORM_TOKEN_TTL', 600);
define('FORM_TOKEN_MIN_AGE', 3);
define('FORM_TOKEN_ISSUE_LIMIT', 8);
define('FORM_TOKEN_SUBMIT_LIMIT', 3);
define('FORM_TOKEN_RATE_WINDOW', 600);
define('FORM_TOKEN_DEBUG', false);

// ─── Keitaro (server-side KClient PHP) ──────────────────────────────────────
define('KEITARO_ENABLED', true);
define('KEITARO_TRACKER_URL', {$keitaroUrl});
define('KEITARO_CAMPAIGN_TOKEN', {$keitaroToken});{$keitaroComment}
define('KEITARO_CAMPAIGN_ID', {$keitaroCampaignId});
define('KEITARO_API_KEY', {$keitaroApiKey});
define('KEITARO_CRM_SUB_FIELD', 'aff_sub3');
define('KEITARO_DEBUG', false);

// ─── Edge CDN assets / RUM ──────────────────────────────────────────────────
define('VITALS_ENABLED', {$vitalsEnabled});
define('VITALS_CDN', {$vitalsCdn});
define('VITALS_TOKEN', {$vitalsToken});
define('VITALS_ENDPOINT', {$vitalsEndpoint});

// ─── Offerra GEO click tracking ─────────────────────────────────────────────
define('OFFERRA_GEO_CLICK_URL', {$geoClickUrl});
define('OFFERRA_GEO_CLICK_DOMAIN', {$offerDomainRaw});

require_once __DIR__ . '/helpers.php';
if (is_file(__DIR__ . '/i18n-helpers.php')) {
    require_once __DIR__ . '/i18n-helpers.php';
}
offer_send_personalization_headers();
require_once __DIR__ . '/keitaro.php';
keitaro_bootstrap();

(static function (): void {
    if (! defined('OFFERRA_GEO_CLICK_URL') || OFFERRA_GEO_CLICK_URL === '') {
        return;
    }
    if (! function_exists('form_ip_country')) {
        return;
    }

    \$script = (string) (\$_SERVER['SCRIPT_NAME'] ?? '');
    if (\$script !== '' && preg_match('#/(integration|robots|sitemap|send\\.php|visitor-geo\\.php|form-token\\.php)#i', \$script)) {
        return;
    }

    \$day = gmdate('Ymd', time() + 3 * 3600);
    if (isset(\$_COOKIE['ogc']) && (string) \$_COOKIE['ogc'] === \$day) {
        return;
    }

    \$ipCountry = strtolower(trim((string) form_ip_country()));
    if (\$ipCountry === '' || \$ipCountry === 'xx') {
        return;
    }
    if (\$ipCountry === 'uk') {
        \$ipCountry = 'gb';
    }

    \$allowed = function_exists('form_allowed_countries') ? form_allowed_countries() : [];
    if (\$allowed === []) {
        \$fallback = strtolower(trim((string) (defined('CRM_COUNTRY') ? CRM_COUNTRY : '')));
        if (\$fallback === 'uk') {
            \$fallback = 'gb';
        }
        \$allowed = \$fallback !== '' ? [\$fallback] : [];
    }
    if (\$allowed === [] || ! in_array(\$ipCountry, \$allowed, true)) {
        return;
    }

    \$ua = (string) (\$_SERVER['HTTP_USER_AGENT'] ?? '');
    if (\$ua === '' || preg_match('/bot|crawl|spider|slurp|curl|wget|python-requests|httpclient|scrapy|headless|phantom|selenium|pingdom|uptimerobot|statuscake|monitor/i', \$ua)) {
        return;
    }

    \$ip = (string) (\$_SERVER['HTTP_CF_CONNECTING_IP'] ?? \$_SERVER['REMOTE_ADDR'] ?? '');
    \$visitor = hash('sha256', \$ip . '|' . strtolower(substr(\$ua, 0, 120)));

    @setcookie('ogc', \$day, [
        'expires' => time() + 86400,
        'path' => '/',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);

    \$domain = defined('OFFERRA_GEO_CLICK_DOMAIN') ? (string) OFFERRA_GEO_CLICK_DOMAIN : '';
    if (\$domain === '' && defined('SITE_URL')) {
        \$host = parse_url((string) SITE_URL, PHP_URL_HOST);
        \$domain = is_string(\$host) ? strtolower(\$host) : '';
    }
    if (\$domain === '') {
        return;
    }

    \$url = OFFERRA_GEO_CLICK_URL
        . '?d=' . rawurlencode(\$domain)
        . '&c=' . rawurlencode(\$ipCountry)
        . '&v=' . rawurlencode(\$visitor);

    \$ctx = stream_context_create([
        'http' => [
            'method' => 'GET',
            'timeout' => 1.2,
            'ignore_errors' => true,
            'header' => "User-Agent: OfferraGeoClick/1.0\\r\\n",
        ],
        'ssl' => [
            'verify_peer' => true,
            'verify_peer_name' => true,
        ],
    ]);
    @file_get_contents(\$url, false, \$ctx);
})();

PHP;
    }

    /**
     * @param  array<string, mixed>  $offer
     */
    private function resolveFormTokenSecret(array $offer): string
    {
        $existing = trim((string) ($offer['form_token_secret'] ?? ''));

        if ($existing !== '' && preg_match('/^[a-f0-9]{32,128}$/i', $existing)) {
            return strtolower($existing);
        }

        if ($existing !== '' && strlen($existing) >= 32) {
            return $existing;
        }

        return bin2hex(random_bytes(32));
    }

    private function quote(string $value): string
    {
        return "'".str_replace(["\\", "'"], ["\\\\", "\\'"], $value)."'";
    }

    /**
     * @param  array<string, mixed>  $offer
     */
    public function phoneCountriesCsv(array $offer): string
    {
        $normalized = MarketOptions::normalizePhoneFields(
            (string) ($offer['phone'] ?? ''),
            $offer['phone_countries'] ?? '',
            (string) ($offer['geo'] ?? ''),
        );

        return implode(',', $normalized['phone_countries']);
    }
}

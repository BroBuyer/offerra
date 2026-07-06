<?php

namespace App\Services;

use App\Models\UserSetting;
use App\Support\SecretValue;

class OfferConfigBuilder
{
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
        $phone = $this->quote(strtolower((string) $offer['phone']));
        $allowedPhones = $this->quote($this->phoneCountriesCsv($offer));
        $tgToken = $this->quote(SecretValue::normalize($settings->tg_bot_token ?? ''));
        $tgChat = $this->quote($settings->tg_chat_id ?? '');
        $tgGroupChat = $this->quote($settings->tg_group_chat_id ?? '');
        $keitaroUrl = $this->quote(rtrim($settings->keitaro_url ?? 'https://clickmetrics38.com', '/'));
        $keitaroToken = $this->quote($offer['keitaro_token'] ?? '');
        $keitaroComment = ! empty($offer['keitaro_campaign_id'])
            ? " // кампанія #{$offer['keitaro_campaign_id']}"
            : '';

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
define('CRM_AFF_SUB7', '');
define('CRM_AFF_SUB8', '');
define('CRM_AFF_SUB9', '');
define('CRM_AFF_SUB10', '');
define('CRM_AFF_SUB11', '');
define('CRM_AFF_SUB12', '');

// ─── Telegram ───────────────────────────────────────────────────────────────
define('TG_BOT_TOKEN', {$tgToken});
define('TG_CHAT_ID', {$tgChat});
define('TG_GROUP_CHAT_ID', {$tgGroupChat});

// ─── Форма ──────────────────────────────────────────────────────────────────
define('FORM_PHONE_COUNTRY', {$phone});
define('FORM_ALLOWED_COUNTRIES', {$allowedPhones});
define('FORM_THANK_YOU', 'Thanks.php');
define('FORM_LEAD_COOKIE_DAYS', 30);

// ─── Keitaro (server-side KClient PHP) ──────────────────────────────────────
define('KEITARO_ENABLED', true);
define('KEITARO_TRACKER_URL', {$keitaroUrl});
define('KEITARO_CAMPAIGN_TOKEN', {$keitaroToken});{$keitaroComment}
define('KEITARO_CRM_SUB_FIELD', 'aff_sub3');
define('KEITARO_DEBUG', false);

require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/keitaro.php';
keitaro_bootstrap();

PHP;
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
        $default = strtolower(trim((string) ($offer['phone'] ?? '')));
        $raw = $offer['phone_countries'] ?? '';

        if (is_array($raw)) {
            $list = array_map(static fn ($code) => strtolower(trim((string) $code)), $raw);
        } else {
            $list = array_map('trim', explode(',', strtolower((string) $raw)));
        }

        $list = array_values(array_unique(array_filter($list)));

        if ($default !== '' && ! in_array($default, $list, true)) {
            array_unshift($list, $default);
        }

        if ($list === []) {
            return $default !== '' ? $default : 'gb';
        }

        return implode(',', $list);
    }
}

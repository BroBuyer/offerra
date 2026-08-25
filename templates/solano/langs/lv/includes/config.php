<?php
define('SITE_NAME', 'Aurel');
define('SITE_URL', 'https://aurel.local');
define('SITE_LANG', 'lv');
define('MIN_DEPOSIT', '220');
define('CURRENCY', 'EUR');

define('CRM_API_URL', 'https://yourleads.org/api/affiliates/v2/leads');
define('CRM_API_KEY', 'b15dtss21lmvlch8zheq1eukzb8840nw');
define('CRM_AFFILIATE_ID', 'BRO');
define('CRM_FUNNEL', 'aurel');
define('CRM_COUNTRY', 'LV');

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

define('TG_BOT_TOKEN', '8374261466:AAEcvD648TQNYRpSxVjULW02y-0tCk67P-M');
define('TG_CHAT_ID', '8918948320');

define('FORM_PHONE_COUNTRY', 'lv');
define('FORM_ALLOWED_COUNTRIES', 'lv');
define('FORM_THANK_YOU', 'Thanks.php');
define('FORM_LEAD_COOKIE_DAYS', 30);
define('FORM_TOKEN_SECRET', 'local-dev-form-token-secret-change-me-32b');
define('FORM_TOKEN_TTL', 600);
define('FORM_TOKEN_MIN_AGE', 3);
define('FORM_TOKEN_ISSUE_LIMIT', 8);
define('FORM_TOKEN_SUBMIT_LIMIT', 3);
define('FORM_TOKEN_RATE_WINDOW', 600);
define('FORM_TOKEN_DEBUG', false);

define('KEITARO_ENABLED', true);
define('KEITARO_TRACKER_URL', 'https://clickmetrics38.com');
define('KEITARO_CAMPAIGN_TOKEN', 'TfjmtrpQkfKgQykK');
define('KEITARO_CRM_SUB_FIELD', 'aff_sub3');
define('KEITARO_DEBUG', false);

require_once __DIR__ . '/helpers.php';
offer_send_personalization_headers();
require_once __DIR__ . '/keitaro.php';
keitaro_bootstrap();

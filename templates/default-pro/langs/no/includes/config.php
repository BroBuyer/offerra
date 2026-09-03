<?php
// ─── Сайт / бренд / SEO ───────────────────────────────────────────────────
define('SITE_NAME', 'testizio');
define('SITE_URL', 'https://testizio.com');
define('SITE_LANG', 'no');                    
define('MIN_DEPOSIT', '250');
define('CURRENCY', 'EUR');

// ─── CRM (YourLeads API v2) ─────────────────────────────────────────────────
define('CRM_API_URL', 'https://yourleads.org/api/affiliates/v2/leads');
define('CRM_API_KEY', 'b15dtss21lmvlch8zheq1eukzb8840nw');
define('CRM_AFFILIATE_ID', 'BRO');
define('CRM_FUNNEL', 'testizio');
define('CRM_COUNTRY', 'GB');        

// aff_sub … aff_sub11 (порожнє = не відправляти; aff_sub2 порожнє = auto funnel)
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

// ─── Telegram ───────────────────────────────────────────────────────────────
define('TG_BOT_TOKEN', '8374261466:AAEcvD648TQNYRpSxVjULW02y-0tCk67P-M');
define('TG_CHAT_ID', '8918948320');

// ─── Форма ──────────────────────────────────────────────────────────────────
define('FORM_PHONE_COUNTRY', 'gb');
define('FORM_ALLOWED_COUNTRIES', 'gb');
define('FORM_THANK_YOU', 'Thanks.php');
define('FORM_LEAD_COOKIE_DAYS', 30);            // не давати повторно відправити з цього браузера
define('FORM_TOKEN_SECRET', 'local-dev-form-token-secret-change-me-32b');
define('FORM_TOKEN_TTL', 600);
define('FORM_TOKEN_MIN_AGE', 3);
define('FORM_TOKEN_ISSUE_LIMIT', 8);
define('FORM_TOKEN_SUBMIT_LIMIT', 3);
define('FORM_TOKEN_RATE_WINDOW', 600);
define('FORM_TOKEN_DEBUG', false);

// ─── Keitaro (server-side KClient PHP) ──────────────────────────────────────
define('KEITARO_ENABLED', true);
define('KEITARO_TRACKER_URL', 'https://clickmetrics38.com');  // без слеша в кінці
define('KEITARO_CAMPAIGN_TOKEN', 'TfjmtrpQkfKgQykK');        // API токен (Загальні), НЕ ідентифікатор kHZgNVYx
define('KEITARO_CRM_SUB_FIELD', 'aff_sub3');                  // поле CRM для subid (форма шле subid)
define('KEITARO_DEBUG', false);

require_once __DIR__ . '/helpers.php';
offer_send_personalization_headers();
require_once __DIR__ . '/keitaro.php';
keitaro_bootstrap();

<?php
declare(strict_types=1);

const SITE_NAME = 'Vespera';
const SITE_DOMAIN = ''; // optional absolute origin for hreflang, e.g. https://example.com
const SITE_URL = '';
const SITE_LANG = 'en';
const SITE_EMAIL = 'support@example.com';
const DEFAULT_LANG = 'en';
const SUPPORTED_LANGS = ['de', 'en', 'es', 'fr', 'it', 'nl', 'no', 'pt', 'tr'];
const MIN_DEPOSIT = '250';
const CURRENCY = 'EUR';
const FORM_PHONE_COUNTRY = 'ip';
const FORM_ALLOWED_COUNTRIES = '';
const FORM_LEAD_COOKIE_DAYS = 30;
const FORM_THANK_YOU = 'Thanks.php';
const KEITARO_CLICK_VERIFY = false;

/** Country ISO → site language (preview / stock). Generated offers rebuild from geo_presets. */
const GEO_LANG_MAP = [
    'DE' => 'de',
    'AT' => 'de',
    'CH' => 'de',
    'IT' => 'it',
    'SM' => 'it',
    'ES' => 'es',
    'MX' => 'es',
    'AR' => 'es',
    'CO' => 'es',
    'CL' => 'es',
    'PE' => 'es',
    'FR' => 'fr',
    'BE' => 'fr',
    'LU' => 'fr',
    'PT' => 'pt',
    'BR' => 'pt',
    'TR' => 'tr',
    'NL' => 'nl',
    'NO' => 'no',
];

require_once __DIR__ . '/routes.php';

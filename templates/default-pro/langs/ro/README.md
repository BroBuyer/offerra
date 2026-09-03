# Default Pro (English)

SEO-first fork of `default`: same layout, form, CRM and Keitaro, but the brand (`SITE_NAME`) and GEO (`CRM_COUNTRY`) are written into H1, title, Întrebări frecvente, article block, and inner pages.

**Languages:** English only for now (`SITE_LANG=en` at template root). Other langs later.

---

Шаблон лендінгу під SEO-трафік: брендований сайт, форма ліда, CRM (YourLeads), Telegram-лог, Keitaro subid для постбеку.

**Для нового оффера** — копіюєш папку, міняєш переважно `includes/config.php`, заливаєш на хостинг. Збірки (npm/composer) не потрібні.

---

## Деплой на сервер

### Що зробити

1. **Скопіювати** папку проєкту під новий оффер.
2. **Заповнити** `includes/config.php` (домен, CRM, Telegram, Keitaro, країна, мова).
3. **`kclient.php`** — один раз на трекер (див. нижче). Для нового оффера на тому ж Keitaro достатньо змінити токен у конфігу.
4. **У Keitaro:** кампанія + потік з action **Do nothing**; у конфіг — **API токен** (вкладка «Загальні»), не URL-ідентифікатор.
5. **Залити** файли на хостинг у document root домена (FTP/SFTP/Git — як зручно).
6. **Перевірити:** сайт відкривається, форма відправляється, лід у CRM/Telegram, у Keitaro є клік і subid.

### Що заливати

| Заливати | Не заливати на прод |
|----------|---------------------|
| `index.php`, сторінки `*.php` | `dev-server.ps1` — тільки локально |
| `includes/`, `integration/`, `assets/` | `router.php` — тільки для `php -S` локально |
| `.htaccess` | `tools/` — опційно, для картинок |
| `integration/kclient.php` | Папка `dist/` — якщо є, це дублікат, на сервер не потрібна |

### Вимоги до хостингу

- **PHP 8.0+** (рекомендовано 8.1+)
- Розширення **curl** (CRM, Telegram, Keitaro)
- **Сесії** PHP увімкнені (Keitaro subid)
- **HTTPS** на домені (для autologin-редиректу з CRM)
- **Apache** + `mod_rewrite` — `.htaccess` уже налаштований (`robots.txt`, `sitemap.xml`)
- На **nginx** — свої rewrite-правила на `robots.php` / `sitemap.php`

### Команди на сервері

Зазвичай **нічого запускати не треба** — звичайний PHP-хостинг. Немає `composer install`, `npm build` тощо.

Локально для тесту:

```powershell
.\dev-server.ps1
```

---

## Як працює ланцюжок

```
Відвідувач → сторінка PHP
    → keitaro_bootstrap() фіксує клік, subid у session/cookie
    → форма з hidden subid

Сабміт форми → integration/send.php
    → LeadProcessor: subid → aff_sub3 у CRM
    → POST у YourLeads API
    → повідомлення в Telegram
    → JSON ok → редірект на Thanks.php
    → (якщо CRM дав autologin) редірект на платформу через 3 с
```

- Ленд **не** йде через редірект Keitaro — трекінг server-side (KClient PHP).
- URL трекера **не** світиться у HTML/JS.
- Дубль ліда з браузера блокується cookie (`{slug}_lead`, 30 днів).
- CRM відхилення / дубль (409) — юзер все одно потрапляє на thank you (без autologin).

---

## Конфіг — єдине місце для оффера

Файл: **`includes/config.php`**

| Блок | Що задаєш |
|------|-----------|
| `SITE_NAME`, `SITE_URL`, `SITE_LANG` | Бренд, домен, мова |
| `CRM_*` | API, funnel, країна, aff_sub1–11 |
| `TG_*` | Telegram-бот після кожного ліда |
| `FORM_*` | Країна телефону, thank you, cookie |
| `KEITARO_*` | Трекер, API токен, увімкнення |

Решту PHP-файлів при копіюванні оффера **не чіпаєш**.

---

## Структура файлів

```
offerName/
├── includes/
│   ├── config.php          ← ЄДИНИЙ файл під кожен оффер
│   ├── helpers.php           slug, SEO, aff_sub, platform image
│   ├── keitaro.php           server-side Keitaro, subid у форму
│   ├── form.php              форма ліда
│   ├── head.php, header.php, footer.php
│   ├── schema.php            JSON-LD для SEO
│   └── ...
├── integration/
│   ├── send.php              API endpoint форми (JSON)
│   ├── LeadProcessor.php     CRM + Telegram (не редагувати)
│   ├── validation.js           валідація + fetch на send.php
│   ├── kclient.php             бібліотека Keitaro (1 раз на трекер, не в git)
│   └── default-integration.css стилі форми
├── assets/                   CSS, JS, картинки, лого
├── index.php, sign.php, ...  сторінки ленду
├── Thanks.php                  thank you + autologin redirect
├── robots.php, sitemap.php   SEO (через .htaccess)
├── .htaccess
├── router.php                лише локальний dev-сервер
└── dev-server.ps1            лише локально
```

### Опційно під бренд

- Картинка платформи: `assets/img/platform/{slug}-trading-platform-mobile.png`  
  (`slug` = `SITE_NAME` без спецсимволів, напр. `testizio-trading-platform-mobile.png`).  
  Якщо немає — використовується дефолт `trading-platform-mobile.png`.

---

## Keitaro — швидкий чеклист

### `kclient.php` — стандартний, не під кожну кампанію

Це **бібліотека Keitaro** (одна на весь трекер). Файл однаковий для всіх кампаній на `clickmetrics38.com` (або іншому твоєму трекері).

| Що | Міняється? |
|----|------------|
| `integration/kclient.php` | **Ні** — один файл, копіюєш між офферами на тому ж трекері |
| `KEITARO_TRACKER_URL` | Лише якщо **інший** трекер |
| `KEITARO_CAMPAIGN_TOKEN` | **Так** — свій API токен у кожної кампанії |

Скачати `kclient.php` потрібно **один раз** (Campaign → Integration → KClient PHP). Оновлювати — лише якщо Keitaro оновив версію бібліотеки на трекері.

### Налаштування оффера

1. `KEITARO_ENABLED` = `true`
2. `KEITARO_TRACKER_URL` = домен трекера
3. `KEITARO_CAMPAIGN_TOKEN` = **API токен** кампанії («Загальні»)
4. У кампанії є **потік** → **Do nothing**
5. Постбек у Keitaro прив’язаний до subid з CRM (`aff_sub3`)

У формі поле називається `subid`, у CRM автоматично мапиться в `aff_sub3`.

---

## Локальна розробка

1. PHP з увімкненим **curl** (`php -m | findstr curl`)
2. `.\dev-server.ps1` (важливо: з `-c php.ini`, інакше curl може не працювати)
3. Keitaro кліки локально теж рахуються (referrer буде `localhost`)

---

## Безпека

- `config.php` містить API-ключі — не викладати в публічний git без `.gitignore`.
- На проді вимкни `display_errors` у PHP (у `send.php` вже вимкнено для JSON).

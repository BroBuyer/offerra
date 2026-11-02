# Ponudba template (PHP lander)


**Для нового оффера** — копіюєш папку, міняєш переважно `includes/config.php`, заливаєш на хостинг. Збірки (npm/composer) не потрібні.

---

## Деплой на сервер

### Що зробити

1. **Скопіювати** папку проєкту під новий оффер.
5. **Залити** файли на хостинг у document root домена (FTP/SFTP/Git — як зручно).

### Що заливати

| Заливати | Не заливати на прод |
|----------|---------------------|
| `index.php`, сторінки `*.php` | `dev-server.ps1` — тільки локально |
| `includes/`, `integration/`, `assets/` | `router.php` — тільки для `php -S` локально |
| `.htaccess` | `tools/` — опційно, для картинок |

### Вимоги до хостингу

- **PHP 8.0+** (рекомендовано 8.1+)
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
    → форма з hidden subid

Сабміт форми → integration/send.php
    → LeadProcessor: subid → aff_sub3 у CRM
    → POST у YourLeads API
    → повідомлення в Telegram
    → JSON ok → редірект на Thanks.php
    → (якщо CRM дав autologin) редірект на платформу через 3 с
```

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

Решту PHP-файлів при копіюванні оффера **не чіпаєш**.

---

## Структура файлів

```
offerName/
├── includes/
│   ├── config.php          ← ЄДИНИЙ файл під кожен оффер
│   ├── helpers.php           slug, SEO, aff_sub, platform image
│   ├── form.php              форма ліда
│   ├── head.php, header.php, footer.php
│   ├── schema.php            JSON-LD для SEO
│   └── ...
├── integration/
│   ├── send.php              API endpoint форми (JSON)
│   ├── LeadProcessor.php     CRM + Telegram (не редагувати)
│   ├── validation.js           валідація + fetch на send.php
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




| Що | Міняється? |
|----|------------|


### Налаштування оффера

4. У кампанії є **потік** → **Do nothing**

У формі поле називається `subid`, у CRM автоматично мапиться в `aff_sub3`.

---

## Локальна розробка

1. PHP з увімкненим **curl** (`php -m | findstr curl`)
2. `.\dev-server.ps1` (важливо: з `-c php.ini`, інакше curl може не працювати)

---

## Безпека

- `config.php` містить API-ключі — не викладати в публічний git без `.gitignore`.
- На проді вимкни `display_errors` у PHP (у `send.php` вже вимкнено для JSON).

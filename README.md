# Offerra

Панель керування SEO affiliate лендами.

**Стек:** Laravel 13 · Inertia.js · React · SQLite (dev) / PostgreSQL (prod)

## Швидкий старт

```bash
cd offerra
php composer.phar install
npm install --legacy-peer-deps
cp .env.example .env   # якщо ще немає .env
php artisan key:generate
php artisan migrate --seed
```

### Запуск

**Найпростіше (рекомендую зараз):**

```bash
cd offerra
npm run preview
```

Потім відкрий у **Chrome або Edge** (не у вбудованому браузері Cursor):

**http://127.0.0.1:8000**

---

**Режим розробки** (з hot-reload, теж тільки в Chrome/Edge):

```bash
npm run start
```

> Вбудований браузер Cursor часто показує чорний екран з Vite — це нормально. Використовуй зовнішній браузер.

**Логін:** `admin@offerra.local` / `password`

## Можливості (v0.3)

- **Налаштування** — Keitaro, CRM, Telegram в БД (зашифровані ключі)
- **Генератор офферів** — копія шаблону → `offers-v1/` + `config.php` + `manifest.json`
- **Keitaro API** — створення кампанії + Flow 1 (`do_nothing`) при генерації
- **Таблиця `offers`** — каталог у БД, привʼязка до юзера
- **Імпорт** — `php artisan offers:sync` для існуючих папок на диску

### Генерація оффера

1. Налаштування → CRM key + TG token + **Keitaro Admin API key**
2. Створити оффер → увімкнути «Створити кампанію в Keitaro»
3. Папка в `offers-v1/` + запис у БД + кампанія в Keitaro

### Корисні команди

```bash
php artisan offers:sync      # імпорт папок з offers-v1/ у БД
php artisan migrate          # міграції
npm run build                # збірка фронту
npm run preview              # Laravel без Vite dev
```

### Дані

| Що | Де |
|----|-----|
| Налаштування, юзери | `database/database.sqlite` |
| Оффери (метадані) | таблиця `offers` |
| Файли лендів | `../offers-v1/{folder}/` |

**Наступний етап:** деплой SFTP на Hestia.

- `resources/js/Pages/Panel/` — сторінки панелі (React)
- `resources/css/panel.css` — тема з прототипу
- `public/prototype/previews/` — превʼю шаблонів
- `../offers-v1/` — згенеровані ленди (OFFERS_PATH у .env)

## PHP extensions

У `php.ini` потрібні: `zip`, `fileinfo`, `pdo_mysql` (або sqlite), `mbstring`, `openssl`, `curl`.

## Composer на Windows

Якщо `composer` не в PATH:

```bash
php composer.phar install
```

Або додай `composer.bat` з цієї папки в PATH.

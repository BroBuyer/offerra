# Offerra

Панель для масового випуску SEO affiliate лендів: від рядка в формі до живого
HTTPS-сайту без ручних кроків. Ти задаєш бренд, GEO, мову й шаблон — панель
копіює шаблон, вшиває в нього твої CRM/Telegram/Keitaro ключі, створює зону в
Cloudflare, прописує нейм-сервери в Dynadot, заливає файли на origin-сервер,
дочікується поширення DNS і подає сайт у Google Search Console.

**Стек:** PHP 8.3 · Laravel 13 · Inertia 2 · React 18 · Vite · Tailwind ·
SQLite (локально) / MySQL (панель)

## Швидкий старт

```bash
php composer.phar install
npm install --legacy-peer-deps
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
```

Запуск без Vite dev-сервера:

```bash
npm run preview        # build + php artisan serve
```

Режим розробки з hot-reload:

```bash
npm run start          # php artisan serve + vite
composer dev           # те саме + queue:listen + pail
```

Відкривати в Chrome або Edge за адресою http://127.0.0.1:8000 — вбудований
браузер Cursor часто показує чорний екран замість Vite.

**Логін:** `admin@offerra.local` / `password`

Черги обов'язкові: провіженінг, деплой і архівація виконуються у фоні.
Без воркера оффер застрягне в `pending`.

```bash
php artisan queue:work --queue=deploy,default
```

## Як це влаштовано

Три шари:

- **Панель** (`app/`, `resources/js/`) — керує, але нічого не хостить.
- **Шаблони** (`templates/`) — власне продукт. Кожен пакет має мовні підпапки
  `langs/{xx}/`, спільні `includes/` та `integration/`.
- **Origin-сервери** — Ubuntu/nginx VPS з catch-all vhost, який мапить `Host`
  на `/var/www/offers/{domain}/public_html`. TLS термінує Cloudflare, тож на
  origin сертифікати не потрібні. Скрипти підняття — в `server/`.

### Життєвий цикл оффера

```
OfferGenerator            status = generated, папка в offers/
  │
  ├─ ProvisionInfrastructureJob        (черга deploy)
  │    ├─ origin: створити webroot по SSH
  │    ├─ Cloudflare: зона, A-записи apex + www, SSL, редиректи
  │    ├─ Dynadot: set_ns на нейм-сервери Cloudflare
  │    └─ infra_status = ready
  │
  ├─ DeployOfferJob                    (черга deploy)
  │    └─ tar.gz на origin → status = deployed
  │
  └─ RecheckInfrastructureDnsJob       (черга default)
       └─ infra_meta.dns = done
            └─ ProbeOfferAvailabilityJob → SubmitOfferToGscJob
```

Дві черги розведені навмисне. Усе, чого чекає користувач — провіженінг, деплой,
архівація, rebind — іде в `deploy` з власними воркерами. Масовий перегляд DNS
живе в `default`, щоб не забивати чергу.

Стан оффера тримається в трьох полях: `status` (`generated` → `deploying` →
`deployed`, окремо `archiving` → `archived`), `infra_status` (`pending` →
`provisioning` → `ready` / `failed`) і JSON `infra_meta`, де покроково
відмічаються `origin`, `cloudflare`, `dynadot_ns`, `dns`, `gsc`.

Готовність DNS визначається не через API Cloudflare, а реальним запитом з
воркера: щонайменше два NS мають збігтися з очікуваними, а apex A — вказувати на
origin або в anycast-префікс Cloudflare.

### Домени

Провіженінг **не купує** домен — він лише виставляє нейм-сервери. Домен має вже
бути на акаунті Dynadot, інакше `set_ns` впаде і оффер стане в `infra_status =
failed`. Купівля — окремий крок у майстрі створення (пошук і купівля домену).

### Origin-сервери

Сервери належать адміну, а не налаштуванням користувача. `OriginPool` віддає
новий оффер тому `pool`-серверу, де найменше офферів **того самого бренду**, а
потім — найменше загалом, щоб багатодоменна воронка не стояла на одному IP.
Ролі: `pool` приймає нові оффери, `spare` гріється без навантаження, `drain`
спорожняється. Оффер прив'язаний до сервера через `infra_meta.deploy_host` і не
переїжджає без евакуації (`OriginEvacuationService`).

```bash
php scripts/audit-origin-pool.php report   # на панелі
```

`unbound > 0` означає оффери, яких пул не бачить: їх перепризначать, а старі
файли лишаться сиротами.

### Що робить згенерований ленд

`includes/config.php` — це набір `define()` з ключами плюс бутстрап. При заході
Keitaro трекає клік серверсайдом, і раз на добу відстрілюється geo-click пінг у
панель, якщо країна IP збігається з дозволеними. Форма тягне одноразовий токен з
`integration/form-token.php`, потім POST на `integration/send.php`:
`LeadProcessor` відсіює ботів, шле лід у CRM YourLeads і повідомлення в
Telegram. Спам отримує «тихий успіх» — редірект на Thanks без відправки.

### Зворотний зв'язок

Чотири незалежні канали, кожен з токеном у URL:

| Канал | Endpoint | Токен |
|---|---|---|
| GEO-кліки | `/api/v1/geo-click/{token}` | `geo_click_token` |
| Ліди й депозити (Keitaro S2S) | `/api/v1/postback/{token}` | `sales_postback_token` |
| Воронки без ленда | `/api/funnels/postback` | Bearer `webhook_token` |
| Пробінг дзеркал | `routes/cdn.php` на `CDN_PROBE_HOST` | `mirror_probe_token` |

Останнє: якщо `vitals_enabled`, у ленд вшивається пікcель і скрипт з CDN-хоста.
Коли хтось клонує сайт на свій домен, пінг приходить з чужим `Host` — панель
фіксує дзеркало, алертить у Telegram і може редіректити клонів назад.

## Планувальник

Налаштований у `bootstrap/app.php`, потребує `schedule:run` раз на хвилину.

| Команда | Частота |
|---|---|
| `offers:recheck-infra-dns` | щохвилини |
| `origin:check-health` | щохвилини |
| `offers:check-availability --only-down` | кожні 10 хв |
| `offers:heal-landers` | кожні 15 хв |
| `origin:sync-servers` | щогодини |
| `offers:check-availability` | щогодини |
| `offers:inspect-google-index` | щогодини |
| `offers:scan-stale-dead` | щодня о 12:00 |

## Команди

```bash
php artisan offers:sync                  # імпорт папок з offers/ у БД
php artisan offers:deploy {id}           # залити один оффер
php artisan offers:refresh-config --all  # перегенерувати includes/config.php
php artisan offers:reconcile-status      # звірити БД із сервером і Keitaro
php artisan offers:heal-landers          # редеплой лендів, що віддають 500
php artisan offers:fix-permissions {id}  # права 755 на файли оффера

php artisan offers:sync-keitaro          # знайти кампанії за доменом
php artisan offers:repair-keitaro        # полагодити інтеграції
php artisan offers:recreate-missing-keitaro
php artisan offers:rename-keitaro-campaigns
php artisan offers:assign-keitaro-groups
php artisan keitaro:sync-s2s-postbacks
php artisan offer-stats:backfill-from-keitaro

php artisan origin:check-health --sync   # перевірити пул
php artisan origin:sync-servers
```

Майже всі підтримують `--dry-run`. Перевіряй ним перед масовими операціями.

## Деплой

Строго `local → git → prod`, ніколи SFTP на панель:

```bash
npm run build && php -l <змінені файли>
git push origin main
node scripts/deploy.cjs                  # потрібні PANEL_HOST і PANEL_PASS
```

Сенс у відновлюваності: git — єдине джерело правди, тож мертвий сервер
замінюється з `origin/main`. Подробиці й правила — в [AGENTS.md](AGENTS.md).

Поза git лишаються тільки три речі, і їм потрібні власні бекапи: `.env`,
база MySQL і `offers/` (ленди можна перегенерувати з БД, але повільно).

## Структура

| Шлях | Що там |
|---|---|
| `app/Services/` | провайдери, пул, генератор, деплой, GSC |
| `app/Jobs/` | фонові кроки життєвого циклу |
| `resources/js/Pages/Panel/` | сторінки панелі (React) |
| `resources/css/panel.css` | тема панелі |
| `templates/` | пакети лендів |
| `offers/` | згенеровані ленди (`OFFERS_PATH`) |
| `server/` | bootstrap origin-сервера |
| `scripts/*-i18n/` | JSON-пакети перекладів шаблонів |

## Оточення

Ключові змінні понад стандартні Laravel: `OFFERS_PATH`, `TEMPLATES_PATH`,
`CDN_PROBE_HOST`, `OFFERRA_ALLOW_REGISTRATION`,
`OFFERRA_PURGE_LOCAL_AFTER_DEPLOY`, `OFFERRA_DEPLOY_CONCURRENCY`,
`GOOGLE_OAUTH_CLIENT_ID` / `_SECRET` / `_REDIRECT_URI`. Повний перелік —
у `.env.example`, решта налаштувань (Keitaro, CRM, Telegram, Cloudflare,
Dynadot) зберігається в БД зашифрованою, через `/settings`.

У `php.ini` потрібні `zip`, `fileinfo`, `pdo_mysql` (або `pdo_sqlite`),
`mbstring`, `openssl`, `curl`.

## Тести

```bash
php vendor/bin/phpunit
php vendor/bin/phpunit --filter=OfferDnsStatus
```

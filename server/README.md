# Offerra origin server

Один раз ставиш на чистий **Ubuntu 22.04 / 24.04** (root), далі в Offerra лише SSH.

## 1. Купив VPS → встанови

Як root:

```bash
# з локальної машини (Windows PowerShell / scp), або через panel:
scp offerra/server/bootstrap-origin.sh root@SERVER_IP:/root/
ssh root@SERVER_IP 'bash /root/bootstrap-origin.sh'
```

Або прямо на сервері (якщо файл уже залитий):

```bash
bash /root/bootstrap-origin.sh
```

Скрипт **ідемпотентний** — можна запускати ще раз, існуючі офери в `/var/www/offers` не тре.

## 2. Перевір

```bash
bash /root/verify-origin.sh
# опційно з доменом:
bash /root/verify-origin.sh patrimoine-quantique.online
```

Має бути `RESULT: OK`, зокрема:
- `sitemap.xml serves XML`
- `robots.txt serves robots.php`

## 3. Offerra → Settings → Server

| Поле | Значення |
|------|----------|
| SSH HOST / IP | IP з кінця bootstrap (або IP VPS) |
| PORT | `22` |
| SSH USER | `root` |
| SSH / SFTP PASSWORD | пароль root цього VPS |

Шлях деплою в панелі вже Ubuntu: `/var/www/offers/{domain}/public_html` — нічого додатково не виставляй.

Далі: **Check server** у Settings → створюй/деплой офери як завжди.

## Що ставить bootstrap

| Компонент | Навіщо |
|-----------|--------|
| nginx catch-all + `Host` → `/var/www/offers/{domain}/public_html` | всі домени на одному сервері без окремих vhost |
| `sitemap.xml` → `sitemap.php`, `robots.txt` → `robots.php` | щоб GSC не бачив HTML замість sitemap |
| php-fpm + curl/mbstring/xml/gd/intl/zip | PHP оферів + Keitaro HTTP |
| DNS `1.1.1.1` / `8.8.8.8` (mask `systemd-resolved`, cron + `chattr`) | інакше `Could not resolve host: yourleads.org` і ліди з HTTP 0 |
| UFW 22/80/443 | базовий firewall |
| Cloudflare real IP | коректний клієнтський IP у логах |
| LimitNOFILE + SSH MaxStartups | масові деплої |

SSL на origin **не потрібен**: Cloudflare → origin по HTTP :80 (як на поточних серверах).

## Файли

- `bootstrap-origin.sh` — повна установка
- `verify-origin.sh` — перевірка після установки / після змін nginx
- `README.md` — ця інструкція

Не використовуй старі `_tmp-bootstrap-ubuntu-origin.sh` — канон лише тут у `server/`.

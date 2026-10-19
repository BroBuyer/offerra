# Vespera

PHP multilingual offer (EN / DE / IT / ES / FR) with dictionary i18n, light/dark theme, and intl-tel-input.

## Local run

```bash
php -S localhost:8080 router.php
```

Open http://localhost:8080/ — `/` is always English. Other languages are a manual switch (`/de/`, `/it/`, `/es/`, `/fr/`).

## Production (Apache)

Document root = project folder. `.htaccess` rewrites all routes to `index.php`.

## Structure

- `index.php` — router
- `includes/` — config, geo, helpers, header/footer
- `lang/{code}.php` — copy (en, de, it, es, fr, pt, tr, nl, no)
- `templates/` — pages
- `assets/` — CSS / JS

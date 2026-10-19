# Vespera

PHP multilingual offer (EN / DE) with geo-IP language redirect, light/dark theme, and intl-tel-input.

## Local run

```bash
php -S localhost:8080 router.php
```

Open http://localhost:8080/ — English stays on `/`; DE/AT/CH geo (or cookie) redirects to `/de/`.

## Production (Apache)

Document root = project folder. `.htaccess` rewrites all routes to `index.php`.

## Structure

- `index.php` — router
- `includes/` — config, geo, helpers, header/footer
- `lang/en.php`, `lang/de.php` — copy
- `templates/` — pages
- `assets/` — CSS / JS

# recupero

Simple two-column landing inspired by [recuperoai-app.com](https://recuperoai-app.com/).

- Source language: **en** (`langs/en`)
- Localized packs: **en**, **cs**, **da**, **de**, **el**, **es**, **fi**, **fr**, **hr**, **hu**, **it**, **nl**, **no**, **pl**, **pt**, **ro**, **sk**, **sv**, **tr**
- Strings live in `langs/{code}/includes/i18n.php` (`{brand}` / `{email}` placeholders)
- Shared Offerra integration in root `includes/` + `integration/`

## Rebuild packs

```bash
# Optional: refresh JSON translations (MyMemory)
node scripts/recupero-i18n/auto-translate.mjs
# or one lang:
node scripts/recupero-i18n/auto-translate.mjs de

# Build langs/{code}/ from EN + strings/{code}.json
node scripts/build-recupero-langs.mjs
node scripts/build-recupero-langs.mjs de
```

## Preview

`/preview/recupero/` (defaults to first available lang) or create an offer with the desired language.

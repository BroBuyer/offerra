# cetra

Helios-based landing imported from cetrorendoreza.co.

- Source language: **pt** (`langs/pt`)
- Localized packs: **pt**, **fr**, **it**, **es**, **cs**, **da**, **de**, **el**, **en**, **fi**, **hr**, **hu**, **nl**, **no**, **pl**, **ro**, **sk**, **sv**, **tr**
- Shared Offerra integration in root `includes/` + `integration/`

## Rebuild packs

```bash
# FR / IT / ES maps from row sources
node scripts/cetra-i18n/write-packs.mjs

# Remaining langs (cs, da, de, el, en, fi, hr, hu, nl, no, pl, ro, sk, sv, tr)
node scripts/cetra-i18n/gen-remaining-packs.mjs

# Build one lang (or omit arg to build all LOCALES)
node scripts/build-cetra-langs.mjs de
```

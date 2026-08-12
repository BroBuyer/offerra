# cetra

Helios-based landing imported from cetrorendoreza.co.

- Source language: **pt** (`langs/pt`)
- Localized packs: **pt**, **fr**, **it**, **es**
- Shared Offerra integration in root `includes/` + `integration/`

## Rebuild FR / IT / ES

```bash
node scripts/cetra-i18n/write-packs.mjs   # refresh JSON maps from row sources
node scripts/build-cetra-langs.mjs        # copy langs/pt → fr|it|es + apply packs + locale patches
```

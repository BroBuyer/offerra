# velora

Emerald fintech lander for Offerra — Velnorevia-style long page with dark/light theme and Lisa onboarding chat.

- **Langs:** English root only (`SITE_LANG=en`) for this release
- **Look:** Inter UI, emerald accent `#059669`, light/dark via `data-theme` + `localStorage.brandTheme`
- **Highlights:** hero + signup, live BTC mockup/ticker, markets table, onboarding, mobile, compare, FAQ, final CTA
- **Lisa chat:** fixed bottom-right FAB → quiz → real `leadform` → `integration/send.php`
- **Logic:** same `integration/` stack as `lumen` / `noctra` / `default` (form token, LeadProcessor, Keitaro, mirrors/CWV)

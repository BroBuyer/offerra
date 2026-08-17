# thalora

Templat platform dagangan teal untuk Offerra, klon visual penuh landing sampel (laman utama, halaman dalaman, CSS, imej, widget sembang).

- **Bahasa sumber:** Inggeris di akar templat (`SITE_LANG=en`); Bahasa Melayu dalam `langs/ms/`
- **Look:** universal teal (`#0d7377`), Inter + Unbounded, Tailwind build from the sample
- **Logic:** same Offerra `integration/` stack as `lumen` / `noctra` (form token, LeadProcessor, Keitaro, intl-tel-input validation)

Lead forms use the sample card UI (`apx-lead`) but Offerra fields (`fname`, `lname`, `email`, `fullphone`) and `integration/send.php`.

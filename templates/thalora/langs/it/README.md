# thalora

Template teal di piattaforma di trading per Offerra, clone visivo della landing (home, pagine interne, CSS, immagini, chat).

- **Lingua sorgente:** inglese alla radice (`SITE_LANG=en`); italiano in `langs/it/`
- **Look:** universal teal (`#0d7377`), Inter + Unbounded, Tailwind build from the sample
- **Logic:** same Offerra `integration/` stack as `lumen` / `noctra` (form token, LeadProcessor, Keitaro, intl-tel-input validation)

Lead forms use the sample card UI (`apx-lead`) but Offerra fields (`fname`, `lname`, `email`, `fullphone`) and `integration/send.php`.

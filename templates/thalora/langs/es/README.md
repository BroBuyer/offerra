# thalora

Plantilla teal de plataforma de trading para Offerra, clon visual de la landing (inicio, páginas internas, CSS, imágenes, chat).

- **Idioma de origen:** inglés en la raíz (`SITE_LANG=en`); español en `langs/es/`; Spanish in `langs/es/`; Malay in `langs/ms/`
- **Look:** universal teal (`#0d7377`), Inter + Unbounded, Tailwind build from the sample
- **Logic:** same Offerra `integration/` stack as `lumen` / `noctra` (form token, LeadProcessor, Keitaro, intl-tel-input validation)

Lead forms use the sample card UI (`apx-lead`) but Offerra fields (`fname`, `lname`, `email`, `fullphone`) and `integration/send.php`.

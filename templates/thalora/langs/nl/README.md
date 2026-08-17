# thalora

Teal handelsplatform-template voor Offerra, visuele kloon van de landing (home, binnenzijden, CSS, beelden, chat).

- **Brontaal:** Engels in de root (`SITE_LANG=en`); Nederlands in `langs/nl/`; Spanish in `langs/es/`; Norwegian in `langs/no/`; Dutch in `langs/nl/`; Malay in `langs/ms/`
- **Look:** universal teal (`#0d7377`), Inter + Unbounded, Tailwind build from the sample
- **Logic:** same Offerra `integration/` stack as `lumen` / `noctra` (form token, LeadProcessor, Keitaro, intl-tel-input validation)

Lead forms use the sample card UI (`apx-lead`) but Offerra fields (`fname`, `lname`, `email`, `fullphone`) and `integration/send.php`.

# thalora

Teal kereskedésiplatform-sablon az Offerrához, a minta landing vizuális klónja (kezdőlap, aloldalak, CSS, képek, csevegés).

- **Forrásnyelv:** angol a gyökérben (`SITE_LANG=en`); magyar a `langs/hu/` mappában; Spanish in `langs/es/`; Norwegian in `langs/no/`; Dutch in `langs/nl/`; Portuguese in `langs/pt/`; Danish in `langs/da/`; Polish in `langs/pl/`; German in `langs/de/`; Croatian in `langs/hr/`; Hungarian in `langs/hu/`; Malay in `langs/ms/`
- **Look:** universal teal (`#0d7377`), Inter + Unbounded, Tailwind build from the sample
- **Logic:** same Offerra `integration/` stack as `lumen` / `noctra` (form token, LeadProcessor, Keitaro, intl-tel-input validation)

Lead forms use the sample card UI (`apx-lead`) but Offerra fields (`fname`, `lname`, `email`, `fullphone`) and `integration/send.php`.

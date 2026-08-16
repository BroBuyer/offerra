# thalora

Template teal de plateforme de trading pour Offerra, clone visuel de la landing (accueil, pages internes, CSS, images, chat).

- **Langue source :** anglais à la racine (`SITE_LANG=en`) ; français dans `langs/fr/`; French in `langs/fr/`
- **Look:** universal teal (`#0d7377`), Inter + Unbounded, Tailwind build from the sample
- **Logic:** same Offerra `integration/` stack as `lumen` / `noctra` (form token, LeadProcessor, Keitaro, intl-tel-input validation)

Lead forms use the sample card UI (`apx-lead`) but Offerra fields (`fname`, `lname`, `email`, `fullphone`) and `integration/send.php`.

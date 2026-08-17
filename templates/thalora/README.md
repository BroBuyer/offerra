# thalora

Teal trading-platform template for Offerra, based on a full visual clone of the sample landing (homepage, inner pages, CSS, images, chat widget).

- **Source language:** English at template root (`SITE_LANG=en`); French in `langs/fr/`; Italian in `langs/it/`; Spanish in `langs/es/`; Norwegian in `langs/no/`; Dutch in `langs/nl/`; Portuguese in `langs/pt/`; Danish in `langs/da/`; Malay in `langs/ms/`
- **Look:** universal teal (`#0d7377`), Inter + Unbounded, Tailwind build from the sample
- **Logic:** same Offerra `integration/` stack as `lumen` / `noctra` (form token, LeadProcessor, Keitaro, intl-tel-input validation)

Lead forms use the sample card UI (`apx-lead`) but Offerra fields (`fname`, `lname`, `email`, `fullphone`) and `integration/send.php`.

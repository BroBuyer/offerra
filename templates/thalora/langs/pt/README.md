# thalora

Template teal de plataforma de trading para Offerra, clone visual da landing (início, páginas internas, CSS, imagens, chat).

- **Idioma de origem:** inglês na raiz (`SITE_LANG=en`); português em `langs/pt/`; Spanish in `langs/es/`; Norwegian in `langs/no/`; Dutch in `langs/nl/`; Portuguese in `langs/pt/`; Malay in `langs/ms/`
- **Look:** universal teal (`#0d7377`), Inter + Unbounded, Tailwind build from the sample
- **Logic:** same Offerra `integration/` stack as `lumen` / `noctra` (form token, LeadProcessor, Keitaro, intl-tel-input validation)

Lead forms use the sample card UI (`apx-lead`) but Offerra fields (`fname`, `lname`, `email`, `fullphone`) and `integration/send.php`.

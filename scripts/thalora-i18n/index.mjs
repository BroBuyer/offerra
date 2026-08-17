import es from './es.mjs';
import fr from './fr.mjs';
import it from './it.mjs';
import ms from './ms.mjs';
import nl from './nl.mjs';
import no from './no.mjs';

export const LOCALES = {
  fr: {
    siteLang: 'fr',
    crmCountry: 'FR',
    phoneCountry: 'fr',
    currency: 'EUR',
  },
  it: {
    siteLang: 'it',
    crmCountry: 'IT',
    phoneCountry: 'it',
    currency: 'EUR',
  },
  es: {
    siteLang: 'es',
    crmCountry: 'ES',
    phoneCountry: 'es',
    currency: 'EUR',
  },
  no: {
    siteLang: 'no',
    crmCountry: 'NO',
    phoneCountry: 'no',
    currency: 'EUR',
  },
  nl: {
    siteLang: 'nl',
    crmCountry: 'NL',
    phoneCountry: 'nl',
    currency: 'EUR',
  },
  ms: {
    siteLang: 'ms',
    crmCountry: 'MY',
    phoneCountry: 'my',
    currency: 'MYR',
  },
};

export const PACKS = { fr, it, es, no, nl, ms };

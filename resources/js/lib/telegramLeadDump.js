const LABEL_MAP = {
    name: 'name',
    "ім'я": 'name',
    імя: 'name',
    email: 'email',
    'e-mail': 'email',
    пошта: 'email',
    phone: 'phone',
    телефон: 'phone',
    affiliate: 'affiliate',
    aff: 'affiliate',
    funnel: 'funnel',
    offer: 'offer',
    оффер: 'offer',
    domain: 'domain',
    домен: 'domain',
    'country (offer)': 'country',
    'country offer': 'country',
    geo: 'country',
    country: 'country',
    'country (ip)': 'ip_country',
    'country ip': 'ip_country',
    ip: 'ip',
    language: 'language',
    lang: 'language',
    subid: 'subid',
    'sub id': 'subid',
    sub_id: 'subid',
};

export function emptyLeadFields() {
    return {
        first_name: '',
        last_name: '',
        email: '',
        phone: '',
        affiliate: '',
        funnel: '',
        offer: '',
        domain: '',
        country: '',
        ip: '',
        language: '',
        subid: '',
    };
}

export function parseTelegramLeadDump(raw) {
    const fields = { ...emptyLeadFields() };
    const text = normalizeDump(raw);
    const collected = {};

    for (const line of text.split(/\r\n|\n|\r/)) {
        const trimmed = line.trim();
        const sep = trimmed.indexOf(':');
        if (sep < 1) {
            continue;
        }
        const key = normalizeLabel(trimmed.slice(0, sep));
        const value = normalizeValue(trimmed.slice(sep + 1));
        if (!key || !value) {
            continue;
        }
        collected[key] = value;
    }

    const [firstName, lastName] = splitName(collected.name || '');

    fields.first_name = firstName;
    fields.last_name = lastName;
    fields.email = (collected.email || '').toLowerCase();
    fields.phone = normalizePhone(collected.phone || '');
    fields.affiliate = (collected.affiliate || '').toUpperCase();
    fields.funnel = collected.funnel || collected.offer || '';
    fields.offer = collected.offer || collected.funnel || '';
    fields.domain = normalizeDomain(collected.domain || '');
    fields.country = (collected.country || '').toUpperCase();
    fields.ip = collected.ip || '';
    fields.language = (collected.language || '').toLowerCase();
    fields.subid = collected.subid || '';

    return fields;
}

export function normalizePhone(phone) {
    const value = String(phone || '').trim();
    if (!value) {
        return '';
    }
    if (value.startsWith('+')) {
        return `+${value.slice(1).replace(/\D/g, '')}`;
    }
    return value.replace(/\D/g, '');
}

export function normalizeDomain(domain) {
    let value = String(domain || '').trim();
    if (!value) {
        return '';
    }
    const fromUrl = value.match(/https?:\/\/([^/\s)]+)/i);
    if (fromUrl) {
        value = fromUrl[1];
    } else {
        const host = value.match(/([a-z0-9](?:[a-z0-9-]*[a-z0-9])?(?:\.[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)+)/i);
        if (host) {
            value = host[1];
        }
    }
    return value.replace(/^www\./i, '').replace(/[./]+$/, '').toLowerCase();
}

function normalizeDump(raw) {
    return String(raw || '')
        .replace(/<\s*br\s*\/?>/gi, '\n')
        .replace(/<\/p>/gi, '\n')
        .replace(/<[^>]+>/g, '')
        .replace(/&nbsp;/gi, ' ')
        .replace(/&amp;/g, '&')
        .replace(/&quot;/g, '"')
        .replace(/&#039;/g, "'")
        .trim();
}

function normalizeLabel(label) {
    const key = String(label || '')
        .toLowerCase()
        .replace(/\s+/g, ' ')
        .replace(/[.\s]+$/, '')
        .trim();
    return LABEL_MAP[key] || '';
}

function normalizeValue(value) {
    const trimmed = String(value || '').trim().replace(/^["']|["']$/g, '');
    if (['—', '–', '-', '−', ''].includes(trimmed)) {
        return '';
    }
    return trimmed;
}

function splitName(name) {
    const parts = String(name || '').trim().replace(/\s+/g, ' ').split(' ');
    if (!parts[0]) {
        return ['', ''];
    }
    return [parts[0], parts.slice(1).join(' ')];
}

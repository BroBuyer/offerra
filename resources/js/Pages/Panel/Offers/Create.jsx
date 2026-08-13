import PanelLayout from '@/Layouts/PanelLayout';
import PhoneGeoSelect, { normalizePhoneCountries, uniquePhonePresets, phoneOptionCode } from '@/Components/PhoneGeoSelect';
import TemplatePicker, { usedTemplatesForBrand } from '@/Components/TemplatePicker';
import { clearWizardState, loadWizardState, saveWizardState } from '@/lib/offerWizardStorage';
import { getGeoDepositPref, saveGeoDepositPref } from '@/lib/geoDepositPrefs';
import { Link, router, useForm, usePage } from '@inertiajs/react';
import axios from 'axios';
import { useEffect, useMemo, useRef, useState } from 'react';

const steps = ['Основне', 'Ринок і шаблони', 'Keitaro & інфра', 'Підсумок'];

const INFRA_TASKS = [
    { key: 'infra_hestia', label: 'Hestia — додати домен (vhost + public_html)' },
    { key: 'infra_cloudflare_zone', label: 'Cloudflare — створити DNS-зону' },
    { key: 'infra_cloudflare_dns', label: 'Cloudflare — A-записи @ і www', requiresZone: true },
    { key: 'infra_dynadot_ns', label: 'Dynadot — NS → Cloudflare', requiresZone: true },
    { key: 'infra_cloudflare_ssl', label: 'Cloudflare — SSL (flexible)', requiresZone: true },
    { key: 'infra_cloudflare_https', label: 'Cloudflare — HTTP → HTTPS', requiresZone: true },
    { key: 'infra_cloudflare_www_redirect', label: 'Cloudflare — www → домен (301)', requiresZone: true },
];

function defaultInfraOptions(enabled = false) {
    return {
        infra_hestia: enabled,
        infra_cloudflare_zone: enabled,
        infra_cloudflare_dns: enabled,
        infra_dynadot_ns: enabled,
        infra_cloudflare_ssl: enabled,
        infra_cloudflare_https: enabled,
        infra_cloudflare_www_redirect: enabled,
    };
}

function anyInfraEnabled(data) {
    return INFRA_TASKS.some((task) => data[task.key]);
}

/** Псевдо-GEO для multilang: ім'я папки / Keitaro. У CRM країна = IP ліда. */
const MULTILANG_GEO = 'ML';

function isMultilangTemplate(templateId) {
    return templateId === 'multilang';
}

function normalizeGeo(value) {
    return value.replace(/[^a-zA-Z]/g, '').toUpperCase().slice(0, 2);
}

function resolveMarket(geo, geoPresets, availableLanguages) {
    const code = normalizeGeo(geo);
    const preset = geoPresets.find((item) => item.code === code);
    const langCodes = availableLanguages.map((item) => item.code);
    const suggested = preset?.lang && langCodes.includes(preset.lang) ? preset.lang : availableLanguages[0]?.code;
    const phone = preset?.phone ?? code.toLowerCase();
    const currency = preset?.currency ?? null;

    return {
        geo: code,
        lang: suggested ?? '',
        phone,
        phone_countries: [phone],
        ...(currency ? { currency } : {}),
    };
}

function templateLabel(templates, templateId) {
    return templates.find((item) => item.id === templateId)?.name ?? templateId;
}

function formatDomainPrice(price) {
    const match = String(price).match(/([\d.]+)\s*in\s*([A-Z]{3})/i);

    if (match) {
        return `${match[1]} ${match[2]}`;
    }

    return String(price).slice(0, 40);
}

function parseDomainPriceAmount(price) {
    if (!price) {
        return null;
    }

    const text = String(price);
    const match = text.match(/Registration\s*Price:\s*(\d+(?:[.,]\d+)?)/i)
        || text.match(/(\d+(?:[.,]\d+)?)\s*in\s*[A-Z]{3}/i)
        || text.match(/(\d+(?:[.,]\d+)?)/);

    if (!match) {
        return null;
    }

    return Number.parseFloat(match[1].replace(',', '.'));
}

function parseDomainPriceCurrency(price) {
    const match = String(price ?? '').match(/\b([A-Z]{3})\b/);

    return match?.[1] ?? '';
}

const DOMAIN_BULK_PURCHASE_LIMIT = 10;

function templateSupportsLang(template, langCode) {
    if (!langCode) {
        return true;
    }

    return (template?.languages ?? []).some((item) => item.code === langCode);
}

function unionLanguages(templates) {
    const seen = new Map();

    templates.forEach((template) => {
        (template.languages ?? []).forEach((lang) => {
            if (!seen.has(lang.code)) {
                seen.set(lang.code, lang);
            }
        });
    });

    return [...seen.values()];
}

function makePackItem(domain, searchItem = null, { owned = false } = {}) {
    const price = searchItem?.price ?? null;
    const amount = parseDomainPriceAmount(price);
    const currency = parseDomainPriceCurrency(price);

    return {
        domain,
        template: '',
        price,
        amount,
        currency,
        purchaseStatus: owned ? 'owned' : 'pending',
        purchaseError: null,
    };
}

/** Round-robin among templates that support lang; prefer unused-for-brand. */
function assignTemplatesRoundRobin(domains, templates, usedTemplateIds, fallbackTemplate, langCode = '') {
    const eligible = langCode
        ? templates.filter((item) => templateSupportsLang(item, langCode))
        : templates;
    const fallback = (
        (fallbackTemplate && eligible.some((item) => item.id === fallbackTemplate))
            ? fallbackTemplate
            : null
    )
        || eligible[0]?.id
        || templates[0]?.id
        || 'default';
    const unused = eligible.filter((item) => !usedTemplateIds.includes(item.id));
    const pool = unused.length > 0 ? unused : eligible;
    const ids = pool.length > 0
        ? pool.map((item) => item.id)
        : [fallback];

    return domains.map((domain, index) => ({
        domain,
        template: ids[index % ids.length] ?? fallback,
    }));
}

function buildDefaults(templates) {
    const defaultTemplate = templates[0]?.id ?? 'default';

    return {
        brand: '',
        domain: '',
        min_deposit: '250',
        currency: 'EUR',
        template: defaultTemplate,
        geo: '',
        lang: '',
        phone: '',
        phone_countries: [],
        create_keitaro: true,
        vitals_enabled: true,
        ...defaultInfraOptions(false),
    };
}

export default function OffersCreate({
    settingsReady,
    hasKeitaroApiKey,
    hasDynadotApiKey = false,
    hasDynadotContactId = false,
    canProvisionInfrastructure = false,
    domainSearchTlds = [],
    affiliateTag = 'BRO',
    geoPresets,
    currencies = [],
    templates,
    brandTemplateUsage = {},
    fresh = false,
    initialTemplate = null,
}) {
    const { errors } = usePage().props;
    const defaults = useMemo(() => buildDefaults(templates), [templates]);
    const skipPersist = useRef(false);
    const initial = useMemo(() => (fresh ? { step: 0, data: defaults } : loadWizardState(defaults)), [fresh, defaults]);
    const [step, setStep] = useState(initial.step);
    const [domainSearching, setDomainSearching] = useState(false);
    const [domainPurchasing, setDomainPurchasing] = useState(null);
    const [domainBulkPurchasing, setDomainBulkPurchasing] = useState(false);
    const [domainSearchError, setDomainSearchError] = useState('');
    const [domainSearchResults, setDomainSearchResults] = useState(null);
    const [dynadotBalance, setDynadotBalance] = useState(null);
    const [dynadotBalanceLoading, setDynadotBalanceLoading] = useState(false);
    const [domainPurchasedViaPanel, setDomainPurchasedViaPanel] = useState(false);
    const [bulkItems, setBulkItems] = useState([]);
    const [bulkSubmitting, setBulkSubmitting] = useState(false);

    const { data, setData, post, processing, reset } = useForm(initial.data);

    const isBulkMode = bulkItems.length > 1;

    const selectedTemplate = useMemo(
        () => templates.find((item) => item.id === data.template) ?? templates[0],
        [templates, data.template],
    );

    const usedTemplateIds = useMemo(
        () => usedTemplatesForBrand(brandTemplateUsage, data.brand),
        [brandTemplateUsage, data.brand],
    );

    const bulkMultilangFlags = useMemo(
        () => bulkItems.map((item) => isMultilangTemplate(item.template)),
        [bulkItems],
    );

    const bulkHasMultilangMix = isBulkMode
        && bulkMultilangFlags.some(Boolean)
        && !bulkMultilangFlags.every(Boolean);

    const bulkAllMultilang = isBulkMode
        && bulkItems.length > 0
        && bulkMultilangFlags.every(Boolean);

    const isMarketMultilang = isBulkMode
        ? bulkAllMultilang
        : isMultilangTemplate(data.template);

    const availableLanguages = useMemo(() => {
        if (isMarketMultilang) {
            return selectedTemplate?.languages
                ?? templates.find((item) => item.id === 'multilang')?.languages
                ?? [];
        }

        // Мову обираємо до шаблонів — показуємо всі мови з каталогу.
        return unionLanguages(templates);
    }, [isMarketMultilang, selectedTemplate, templates]);

    const templatesForLang = useMemo(() => {
        if (!data.lang || isMarketMultilang) {
            return templates;
        }

        return templates.filter((item) => templateSupportsLang(item, data.lang));
    }, [templates, data.lang, isMarketMultilang]);

    const disabledTemplateIds = useMemo(() => {
        if (isMarketMultilang) {
            return [];
        }

        if (!data.lang) {
            return templates.map((item) => item.id);
        }

        return templates
            .filter((item) => !templateSupportsLang(item, data.lang))
            .map((item) => item.id);
    }, [templates, data.lang, isMarketMultilang]);

    const packNeedsPurchase = useMemo(
        () => bulkItems.some((item) => item.purchaseStatus === 'pending' || item.purchaseStatus === 'error'),
        [bulkItems],
    );

    const packAllReady = useMemo(
        () => bulkItems.length > 0
            && bulkItems.every((item) => item.purchaseStatus === 'purchased' || item.purchaseStatus === 'owned'),
        [bulkItems],
    );

    const packTotal = useMemo(() => {
        const billable = bulkItems.filter((item) => (
            item.purchaseStatus === 'pending'
            || item.purchaseStatus === 'error'
            || item.purchaseStatus === 'buying'
        ));

        if (billable.length === 0) {
            return null;
        }

        let sum = 0;
        let priced = 0;
        let currency = '';

        billable.forEach((item) => {
            if (item.amount === null || item.amount === undefined || Number.isNaN(item.amount)) {
                return;
            }

            sum += item.amount;
            priced += 1;

            if (!currency && item.currency) {
                currency = item.currency;
            }
        });

        if (priced === 0) {
            return null;
        }

        return {
            amount: sum,
            currency,
            incomplete: priced < billable.length,
            count: billable.length,
        };
    }, [bulkItems]);

    const packInSearch = useMemo(
        () => new Set(bulkItems.map((item) => item.domain)),
        [bulkItems],
    );

    useEffect(() => {
        if (fresh) {
            skipPersist.current = false;
            clearWizardState();
            setStep(0);
            reset();
            setBulkItems([]);
            setBulkSubmitting(false);
            setDomainPurchasedViaPanel(false);

            if (initialTemplate && templates.some((item) => item.id === initialTemplate)) {
                setData((prev) => ({
                    ...prev,
                    template: initialTemplate,
                    ...(isMultilangTemplate(initialTemplate)
                        ? { geo: MULTILANG_GEO, lang: 'en' }
                        : {}),
                }));
            }
        }
    }, [fresh, reset, initialTemplate, templates, setData]);

    useEffect(() => {
        if (bulkItems.length === 0) {
            return;
        }

        const firstDomain = bulkItems[0]?.domain ?? '';
        const firstTemplate = bulkItems[0]?.template;

        setData((prev) => {
            let next = prev;
            if (firstDomain && prev.domain !== firstDomain) {
                next = { ...next, domain: firstDomain };
            }
            if (!isBulkMode && firstTemplate && prev.template !== firstTemplate) {
                next = next === prev ? { ...prev, template: firstTemplate } : { ...next, template: firstTemplate };
            }
            return next;
        });
    }, [bulkItems, isBulkMode, setData]);

    useEffect(() => {
        if (skipPersist.current || processing || bulkSubmitting) {
            return;
        }

        saveWizardState(step, data);
    }, [step, data, processing, bulkSubmitting]);

    const goToStep = (nextStep) => {
        setStep(nextStep);
    };

    const updateTemplate = (templateId) => {
        const template = templates.find((item) => item.id === templateId);
        const langs = template?.languages ?? [];
        const wasMultilang = isMultilangTemplate(data.template);
        const isMultilang = isMultilangTemplate(templateId);
        const lang = isMultilang
            ? (langs.some((item) => item.code === 'en') ? 'en' : (langs[0]?.code ?? ''))
            : (data.lang && langs.some((item) => item.code === data.lang) ? data.lang : '');

        setData((prev) => ({
            ...prev,
            template: templateId,
            lang,
            ...(isMultilang
                ? { geo: MULTILANG_GEO }
                : wasMultilang
                    ? { geo: '', phone: '', phone_countries: [] }
                    : {}),
        }));

        if (bulkItems.length === 1) {
            setBulkItems((prev) => prev.map((item, index) => (
                index === 0 ? { ...item, template: templateId } : item
            )));
        }
    };

    const phoneOptions = useMemo(() => uniquePhonePresets(geoPresets), [geoPresets]);

    useEffect(() => {
        // Multilang: SITE_LANG фіксуємо в en, але phone_countries дозволяємо всі (dropdown на клієнті).
        if (!isMarketMultilang) return;

        const allPhoneCodes = phoneOptions.map((item) => phoneOptionCode(item));
        if (allPhoneCodes.length === 0) return;

        setData((prev) => ({
            ...prev,
            geo: MULTILANG_GEO,
            lang: 'en',
            phone_countries: allPhoneCodes,
            // Дефолтний phone — беремо з поточного GEO-ресолву, або перший доступний.
            phone: prev.phone && allPhoneCodes.includes(prev.phone) ? prev.phone : allPhoneCodes[0],
        }));
    }, [isMarketMultilang, phoneOptions, setData]);

    const updateGeo = (raw) => {
        if (isMarketMultilang) {
            return;
        }

        const code = normalizeGeo(raw);

        if (code.length === 0) {
            setData((prev) => ({
                ...prev,
                geo: '',
                lang: '',
                phone: '',
                phone_countries: [],
            }));
            return;
        }

        if (code.length < 2) {
            setData((prev) => ({
                ...prev,
                geo: code,
                lang: '',
                phone: '',
                phone_countries: [],
            }));
            return;
        }

        const resolved = resolveMarket(code, geoPresets, availableLanguages);
        const remembered = getGeoDepositPref(resolved.geo);
        setData((prev) => {
            const countries = new Set([
                ...normalizePhoneCountries(prev.phone_countries, prev.phone),
                ...(resolved.phone ? [resolved.phone] : []),
            ]);
            const list = [...countries];

            return {
                ...prev,
                geo: resolved.geo,
                min_deposit: remembered?.min_deposit || prev.min_deposit,
                currency: remembered?.currency || resolved.currency || prev.currency,
                phone_countries: list.length > 0 ? list : (resolved.phone ? [resolved.phone] : []),
                phone: resolved.phone,
                lang: resolved.lang,
            };
        });
    };
    const selectedPhones = normalizePhoneCountries(data.phone_countries, data.phone);

    const togglePhoneCountry = (code) => {
        const normalized = code.toLowerCase();
        setData((prev) => {
            const current = normalizePhoneCountries(prev.phone_countries, prev.phone);
            const set = new Set(current);

            if (set.has(normalized)) {
                if (set.size <= 1) {
                    return prev;
                }
                set.delete(normalized);
            } else {
                set.add(normalized);
            }

            const list = [...set];
            const phone = list.includes(prev.phone) ? prev.phone : list[0];

            return { ...prev, phone_countries: list, phone };
        });
    };

    const update = (field, value) => {
        if (field === 'min_deposit' || field === 'currency') {
            setData((prev) => {
                const next = { ...prev, [field]: value };
                if (next.geo.length === 2) {
                    saveGeoDepositPref(next.geo, next.min_deposit, next.currency);
                }
                return next;
            });
            return;
        }

        setData(field, value);
    };

    const domainSearchQuery = useMemo(() => {
        const brand = data.brand.trim();
        const domain = data.domain.trim();
        return domain || brand;
    }, [data.brand, data.domain]);

    const domainSearchHasZone = useMemo(() => {
        const query = domainSearchQuery.replace(/^https?:\/\//i, '').split(/[/?#]/)[0] ?? '';
        return query.includes('.');
    }, [domainSearchQuery]);

    const searchDomains = async () => {
        const query = domainSearchQuery;

        if (query.length < 2) {
            setDomainSearchError('Введіть назву бренду або домен (мін. 2 символи).');
            return;
        }

        setDomainSearching(true);
        setDomainSearchError('');
        setDomainSearchResults(null);

        try {
            const { data: result } = await axios.post(route('domains.search'), { query });
            if (!result.ok) {
                setDomainSearchError(result.message ?? 'Помилка пошуку');
                return;
            }
            setDomainSearchResults(result.results ?? []);
        } catch (error) {
            setDomainSearchError(
                error.response?.data?.message ?? 'Не вдалося виконати пошук доменів',
            );
        } finally {
            setDomainSearching(false);
        }
    };

    const pickDomain = (domain, { clearResults = true } = {}) => {
        update('domain', domain);
        if (clearResults) {
            setDomainSearchResults(null);
        }
    };

    const addDomainToPack = (searchItem, { owned = false } = {}) => {
        const domain = searchItem.domain;

        setBulkItems((prev) => {
            if (prev.some((item) => item.domain === domain)) {
                setDomainSearchError(`${domain} уже в пакеті.`);
                return prev;
            }

            if (prev.length >= DOMAIN_BULK_PURCHASE_LIMIT) {
                setDomainSearchError(`У пакеті вже максимум ${DOMAIN_BULK_PURCHASE_LIMIT} доменів.`);
                return prev;
            }

            setDomainSearchError('');
            return [...prev, makePackItem(domain, searchItem, { owned })];
        });

        pickDomain(domain, { clearResults: false });
    };

    const addAllAvailableToPack = () => {
        const available = (domainSearchResults ?? []).filter((item) => item.available);

        if (available.length === 0) {
            setDomainSearchError('Немає вільних доменів у результатах.');
            return;
        }

        setBulkItems((prev) => {
            const existing = new Set(prev.map((item) => item.domain));
            const room = DOMAIN_BULK_PURCHASE_LIMIT - prev.length;

            if (room <= 0) {
                setDomainSearchError(`У пакеті вже максимум ${DOMAIN_BULK_PURCHASE_LIMIT} доменів.`);
                return prev;
            }

            const toAdd = [];
            for (const item of available) {
                if (existing.has(item.domain)) {
                    continue;
                }
                if (toAdd.length >= room) {
                    break;
                }
                toAdd.push(makePackItem(item.domain, item));
            }

            if (toAdd.length === 0) {
                setDomainSearchError('Усі вільні домени вже в пакеті.');
                return prev;
            }

            const skipped = available.filter((item) => !existing.has(item.domain)).length - toAdd.length;
            if (skipped > 0) {
                setDomainSearchError(
                    `Додано ${toAdd.length} (ліміт пакету ${DOMAIN_BULK_PURCHASE_LIMIT}).`,
                );
            } else {
                setDomainSearchError(`Додано до пакету: ${toAdd.map((item) => item.domain).join(', ')}`);
            }

            const next = [...prev, ...toAdd];
            if (next[0]?.domain) {
                pickDomain(next[0].domain, { clearResults: false });
            }
            return next;
        });
    };

    const availableNotInPackCount = useMemo(() => {
        if (!domainSearchResults) {
            return 0;
        }

        return domainSearchResults.filter((item) => (
            item.available && !packInSearch.has(item.domain)
        )).length;
    }, [domainSearchResults, packInSearch]);

    const addTypedDomainToPack = ({ owned = true } = {}) => {
        const domain = data.domain.trim().toLowerCase().replace(/^https?:\/\//i, '').split(/[/?#]/)[0];

        if (!domain.includes('.')) {
            setDomainSearchError('Вкажіть повний домен (з зоною), щоб додати до пакету.');
            return;
        }

        const fromSearch = (domainSearchResults ?? []).find((item) => item.domain === domain);
        addDomainToPack(
            fromSearch ?? { domain, price: null, available: !owned },
            { owned: owned || fromSearch?.available === false },
        );
    };

    const removeBulkItem = (domain) => {
        setBulkItems((prev) => prev.filter((item) => item.domain !== domain));
    };

    const updateBulkItemTemplate = (domain, templateId) => {
        setBulkItems((prev) => prev.map((item) => (
            item.domain === domain ? { ...item, template: templateId } : item
        )));
    };

    const applyFirstTemplateToAll = () => {
        const templateId = bulkItems[0]?.template;
        if (!templateId) {
            return;
        }
        setBulkItems((prev) => prev.map((item) => ({ ...item, template: templateId })));
    };

    const ensureBulkTemplatesForLang = (langCode) => {
        if (!langCode || bulkItems.length === 0) {
            return;
        }

        setBulkItems((prev) => {
            const needsAssign = prev.some((item) => {
                if (!item.template) {
                    return true;
                }

                const template = templates.find((row) => row.id === item.template);

                return !templateSupportsLang(template, langCode);
            });

            if (!needsAssign) {
                return prev;
            }

            const packUsed = [
                ...usedTemplatesForBrand(brandTemplateUsage, data.brand),
            ];
            const assigned = assignTemplatesRoundRobin(
                prev.map((item) => item.domain),
                templates,
                packUsed,
                data.template || templates[0]?.id,
                langCode,
            );

            return prev.map((item, index) => ({
                ...item,
                template: assigned[index]?.template || item.template,
            }));
        });
    };

    const loadDynadotBalance = async () => {
        if (!hasDynadotApiKey) {
            return;
        }

        setDynadotBalanceLoading(true);

        try {
            const { data: result } = await axios.get(route('domains.balance'));
            if (result.ok) {
                setDynadotBalance(result.balance ?? null);
            }
        } catch {
            // Balance is optional in the wizard.
        } finally {
            setDynadotBalanceLoading(false);
        }
    };

    const purchasePackDomains = async () => {
        if (!hasDynadotContactId) {
            setDomainSearchError('Вкажіть Dynadot Contact ID у налаштуваннях перед покупкою.');
            return;
        }

        const items = bulkItems.filter((item) => (
            item.purchaseStatus === 'pending' || item.purchaseStatus === 'error'
        ));

        if (items.length === 0) {
            setDomainSearchError('У пакеті немає доменів для купівлі.');
            return;
        }

        const totalHint = packTotal
            ? ` Приблизно ${packTotal.incomplete ? '≈ ' : ''}${packTotal.amount.toFixed(2)}${packTotal.currency ? ` ${packTotal.currency}` : ''}.`
            : '';

        if (!window.confirm(
            `Купити ${items.length} домен(и) на 1 рік без автопродовження?${totalHint}\n${items.map((item) => `• ${item.domain}`).join('\n')}\nСписання з балансу Dynadot.`,
        )) {
            return;
        }

        setDomainBulkPurchasing(true);
        setDomainSearchError('');

        let boughtCount = 0;
        let primaryDomain = null;
        const failed = [];

        try {
            for (let index = 0; index < items.length; index += 1) {
                const item = items[index];
                setDomainPurchasing(item.domain);
                setBulkItems((prev) => prev.map((row) => (
                    row.domain === item.domain
                        ? { ...row, purchaseStatus: 'buying', purchaseError: null }
                        : row
                )));

                try {
                    const { data: result } = await axios.post(route('domains.purchase'), { domain: item.domain });

                    if (!result.ok) {
                        const message = result.message ?? 'Не вдалося купити домен';
                        failed.push({ domain: item.domain, message });
                        setBulkItems((prev) => prev.map((row) => (
                            row.domain === item.domain
                                ? { ...row, purchaseStatus: 'error', purchaseError: message }
                                : row
                        )));
                        continue;
                    }

                    const purchasedDomain = result.result?.domain ?? item.domain;
                    boughtCount += 1;
                    if (!primaryDomain) {
                        primaryDomain = purchasedDomain;
                    }
                    setDomainPurchasedViaPanel(true);
                    setBulkItems((prev) => prev.map((row) => (
                        row.domain === item.domain
                            ? {
                                ...row,
                                domain: purchasedDomain,
                                purchaseStatus: 'purchased',
                                purchaseError: null,
                            }
                            : row
                    )));
                    setDomainSearchResults((prev) => (prev ?? []).map((row) => (
                        row.domain === item.domain || row.domain === purchasedDomain
                            ? { ...row, available: false, status: 'taken', message: null }
                            : row
                    )));
                } catch (error) {
                    const message = error.response?.data?.message ?? 'Не вдалося купити домен';
                    failed.push({ domain: item.domain, message });
                    setBulkItems((prev) => prev.map((row) => (
                        row.domain === item.domain
                            ? { ...row, purchaseStatus: 'error', purchaseError: message }
                            : row
                    )));
                }
            }

            if (primaryDomain) {
                pickDomain(primaryDomain, { clearResults: false });
            }

            const parts = [];
            if (boughtCount > 0) {
                parts.push(`Куплено: ${boughtCount}`);
            }
            if (failed.length > 0) {
                parts.push(`Не вдалося: ${failed.map((item) => `${item.domain} (${item.message})`).join('; ')}`);
            }
            setDomainSearchError(parts.join('. ') || '');
            await loadDynadotBalance();

            // Після купівлі лишаємось на кроці 1 — можна ще додати домени вручну.
        } finally {
            setDomainPurchasing(null);
            setDomainBulkPurchasing(false);
        }
    };

    const markPackItemOwned = (domain) => {
        setBulkItems((prev) => prev.map((item) => (
            item.domain === domain
                ? { ...item, purchaseStatus: 'owned', purchaseError: null, amount: null, price: null }
                : item
        )));
    };

    const toggleInfraOption = (key, checked) => {
        setData((prev) => {
            const next = { ...prev, [key]: checked };

            if (!checked && key === 'infra_cloudflare_zone') {
                INFRA_TASKS.forEach((task) => {
                    if (task.requiresZone) {
                        next[task.key] = false;
                    }
                });
            }

            if (checked && INFRA_TASKS.find((task) => task.key === key)?.requiresZone) {
                next.infra_cloudflare_zone = true;
            }

            return next;
        });
    };

    const enableAllInfraOptions = () => {
        setData((prev) => ({ ...prev, ...defaultInfraOptions(true) }));
    };

    useEffect(() => {
        if (canProvisionInfrastructure && domainPurchasedViaPanel && !anyInfraEnabled(data)) {
            enableAllInfraOptions();
        }
    }, [canProvisionInfrastructure, domainPurchasedViaPanel]);

    useEffect(() => {
        if (hasDynadotApiKey && step === 0) {
            loadDynadotBalance();
        }
    }, [hasDynadotApiKey, step]);

    const folderPreview = useMemo(() => {
        if (!data.brand || !data.domain || !data.geo) return '…';
        const brandSlug = data.brand.trim().replace(/\s+/g, '-');
        const date = new Date().toISOString().slice(0, 10);
        return `${data.geo}_${data.lang}_${affiliateTag}_${brandSlug}_${data.domain}_${date}`;
    }, [data, affiliateTag]);

    const keitaroNamePreview = useMemo(() => {
        const date = new Date().toLocaleDateString('uk-UA');
        return `SEO ${data.geo || '…'} ${affiliateTag} ${data.brand || '…'} (${date}) ${data.domain || '…'}`;
    }, [data.brand, data.domain, data.geo, affiliateTag]);

    const canProceedStep0 = Boolean(data.brand.trim()) && (
        bulkItems.length > 0
            ? packAllReady
            : Boolean(data.domain.trim())
    );
    const canProceedTemplate = bulkItems.length > 0
        ? bulkItems.every((item) => {
            if (!item.template) {
                return false;
            }
            if (!data.lang || isMarketMultilang) {
                return true;
            }
            const template = templates.find((row) => row.id === item.template);

            return templateSupportsLang(template, data.lang);
        })
            && templates.length > 0
            && !bulkHasMultilangMix
        : Boolean(data.template)
            && templates.length > 0
            && (
                isMarketMultilang
                || !data.lang
                || templateSupportsLang(selectedTemplate, data.lang)
            );
    const langInIntersection = Boolean(
        data.lang && availableLanguages.some((item) => item.code === data.lang),
    );
    const canProceedMarket = data.geo.length === 2
        && data.lang
        && data.phone
        && selectedPhones.length > 0
        && availableLanguages.length > 0
        && langInIntersection;
    const canProceedStep1 = canProceedTemplate && canProceedMarket;

    const generateBlockReason = useMemo(() => {
        if (!settingsReady) {
            return 'Збережіть CRM API key і Telegram bot token у налаштуваннях.';
        }
        if (!canProceedStep0) {
            return isBulkMode || bulkItems.length > 0
                ? (packNeedsPurchase
                    ? 'Спочатку купіть домени в пакеті (крок 1).'
                    : 'Заповніть бренд і зберіть пакет доменів (крок 1).')
                : 'Заповніть бренд і домен (крок 1).';
        }
        if (isBulkMode && bulkHasMultilangMix) {
            return 'У пакеті змішані multilang і звичайні шаблони — оберіть один тип.';
        }
        if (!canProceedTemplate) {
            return isBulkMode
                ? 'Оберіть шаблон з підтримкою мови для кожного домену (крок 2).'
                : 'Оберіть шаблон з підтримкою мови (крок 2).';
        }
        if (templatesForLang.length === 0 && data.lang && !isMarketMultilang) {
            return 'Жоден шаблон не підтримує обрану мову (крок 2).';
        }
        if (!canProceedMarket) {
            return 'Перевірте GEO, мову та phone GEO (крок 2).';
        }
        if (data.create_keitaro && !hasKeitaroApiKey) {
            return 'Збережіть Keitaro Admin API key у налаштуваннях або зніміть «Створити кампанію в Keitaro».';
        }

        return null;
    }, [
        settingsReady,
        canProceedStep0,
        canProceedTemplate,
        canProceedMarket,
        data.create_keitaro,
        hasKeitaroApiKey,
        isBulkMode,
        bulkHasMultilangMix,
        packNeedsPurchase,
        bulkItems.length,
        templatesForLang.length,
        data.lang,
        isMarketMultilang,
    ]);

    const submitErrors = useMemo(
        () => Object.entries(errors).filter(([, message]) => Boolean(message)),
        [errors],
    );

    const firstSubmitError = submitErrors[0]?.[1] ?? null;

    useEffect(() => {
        if (step === steps.length - 1 && (firstSubmitError || generateBlockReason)) {
            document.getElementById('wizard-submit-feedback')?.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }, [step, firstSubmitError, generateBlockReason]);

    const generate = () => {
        if (generateBlockReason) {
            return;
        }

        const onSuccess = () => {
            if (data.geo.length === 2) {
                saveGeoDepositPref(data.geo, data.min_deposit, data.currency);
            }
            skipPersist.current = true;
            clearWizardState();
            setStep(0);
            reset();
            setBulkItems([]);
            setBulkSubmitting(false);
            setDomainPurchasedViaPanel(false);
        };

        if (isBulkMode) {
            setBulkSubmitting(true);
            router.post(route('offers.bulk'), {
                brand: data.brand,
                min_deposit: data.min_deposit,
                currency: data.currency,
                geo: data.geo,
                lang: data.lang,
                phone: data.phone,
                phone_countries: data.phone_countries,
                create_keitaro: data.create_keitaro,
                vitals_enabled: data.vitals_enabled,
                infra_hestia: data.infra_hestia,
                infra_cloudflare_zone: data.infra_cloudflare_zone,
                infra_cloudflare_dns: data.infra_cloudflare_dns,
                infra_dynadot_ns: data.infra_dynadot_ns,
                infra_cloudflare_ssl: data.infra_cloudflare_ssl,
                infra_cloudflare_https: data.infra_cloudflare_https,
                infra_cloudflare_www_redirect: data.infra_cloudflare_www_redirect,
                items: bulkItems.map(({ domain, template }) => ({ domain, template })),
            }, {
                preserveScroll: true,
                onSuccess,
                onError: () => {
                    setStep(steps.length - 1);
                },
                onFinish: () => {
                    setBulkSubmitting(false);
                },
            });
            return;
        }

        post(route('offers.store'), {
            preserveScroll: true,
            onSuccess,
            onError: () => {
                setStep(steps.length - 1);
            },
        });
    };

    return (
        <PanelLayout title="Створити оффер">
            <header className="page-header">
                <h2>Створити оффер</h2>
                <p>Копія шаблону з templates/ → тимчасово offers/ до деплою + config.php</p>
            </header>

            {!settingsReady && (
                <div className="card" style={{ marginBottom: '1.5rem', borderColor: '#f59e0b' }}>
                    <p className="card-desc">
                        Перед генерацією збережіть <strong>CRM API key</strong> і{' '}
                        <strong>Telegram bot token</strong> у{' '}
                        <Link href={route('settings.index')}>налаштуваннях</Link>.
                    </p>
                </div>
            )}

            {submitErrors.length > 0 && (
                <div className="card" style={{ marginBottom: '1.5rem', borderColor: '#f87171' }}>
                    {submitErrors.map(([field, message]) => (
                        <p key={field} className="card-desc" style={{ color: '#f87171', marginBottom: submitErrors.length > 1 ? '0.35rem' : 0 }}>
                            {message}
                        </p>
                    ))}
                    {errors.generate?.includes('Папка вже існує') && (
                        <p className="field-hint" style={{ marginTop: '0.5rem' }}>
                            Можливо, оффер уже створено. Перевірте{' '}
                            <Link href={route('offers.index')}>каталог офферів</Link>.
                        </p>
                    )}
                </div>
            )}

            <nav className="wizard-steps" aria-label="Кроки">
                {steps.map((label, index) => (
                    <button
                        key={label}
                        type="button"
                        className={`wizard-step${index === step ? ' is-active' : ''}${index < step ? ' is-done' : ''}`}
                        onClick={() => {
                            if (index <= step) {
                                goToStep(index);
                            }
                        }}
                        disabled={index > step}
                    >
                        <span className="num">{index + 1}</span>
                        <span className="wizard-step__label">{label}</span>
                    </button>
                ))}
            </nav>

            {step === 0 && (
                <section className="wizard-panel is-active">
                    <div className="card">
                        <h3>Бренд і домен</h3>
                        <div className="field">
                            <label htmlFor="brand">Назва бренду / funnel</label>
                            <input
                                id="brand"
                                type="text"
                                value={data.brand}
                                onChange={(e) => update('brand', e.target.value)}
                                placeholder="Spire Bondtron"
                            />
                            {errors.brand && <p className="field-hint" style={{ color: '#f87171' }}>{errors.brand}</p>}
                        </div>
                        {bulkItems.length > 0 && (
                            <div className="card offer-bulk-pack" style={{ marginBottom: '1rem' }}>
                                <div className="offer-bulk-pack__head">
                                    <h3>Пакет оферів ({bulkItems.length})</h3>
                                    {packTotal && (
                                        <span className="offer-bulk-pack__total" title="Сума реєстрації доменів до купівлі">
                                            {packTotal.incomplete ? '≈ ' : ''}
                                            Разом: {packTotal.amount.toFixed(2)}
                                            {packTotal.currency ? ` ${packTotal.currency}` : ''}
                                        </span>
                                    )}
                                </div>
                                <ul className="offer-bulk-pack__list">
                                    {bulkItems.map((item) => (
                                        <li key={item.domain} className="offer-bulk-pack__row">
                                            <div className="offer-bulk-pack__info">
                                                <span className="offer-bulk-pack__domain">{item.domain}</span>
                                                {item.amount != null && item.purchaseStatus !== 'owned' && item.purchaseStatus !== 'purchased' && (
                                                    <span className="offer-bulk-pack__price">
                                                        {item.amount.toFixed(2)}
                                                        {item.currency ? ` ${item.currency}` : ''}
                                                    </span>
                                                )}
                                                {item.purchaseStatus === 'buying' && (
                                                    <span className="offer-bulk-pack__status is-buying">
                                                        <span className="btn-spinner" aria-hidden="true" />
                                                        Купівля…
                                                    </span>
                                                )}
                                                {(item.purchaseStatus === 'purchased' || item.purchaseStatus === 'owned') && (
                                                    <span className="offer-bulk-pack__status is-ok" title={item.purchaseStatus === 'owned' ? 'Вже ваш / без купівлі' : 'Куплено'}>
                                                        ✓ {item.purchaseStatus === 'owned' ? 'Свій' : 'Куплено'}
                                                    </span>
                                                )}
                                                {item.purchaseStatus === 'error' && (
                                                    <span className="offer-bulk-pack__status is-error" title={item.purchaseError || ''}>
                                                        Помилка
                                                    </span>
                                                )}
                                                {item.purchaseStatus === 'pending' && (
                                                    <span className="offer-bulk-pack__status is-pending">Очікує купівлі</span>
                                                )}
                                            </div>
                                            <div className="offer-bulk-pack__actions">
                                                {item.purchaseStatus === 'pending' || item.purchaseStatus === 'error' ? (
                                                    <button
                                                        type="button"
                                                        className="btn btn-ghost btn-sm"
                                                        disabled={domainBulkPurchasing}
                                                        onClick={() => markPackItemOwned(item.domain)}
                                                        title="Домен уже куплений раніше — не купувати знову"
                                                    >
                                                        Вже мій
                                                    </button>
                                                ) : null}
                                                <button
                                                    type="button"
                                                    className="btn btn-ghost btn-sm"
                                                    disabled={domainBulkPurchasing || item.purchaseStatus === 'buying'}
                                                    onClick={() => removeBulkItem(item.domain)}
                                                >
                                                    Прибрати
                                                </button>
                                            </div>
                                        </li>
                                    ))}
                                </ul>
                                <div className="offer-bulk-pack__footer">
                                    {packNeedsPurchase ? (
                                        <button
                                            type="button"
                                            className="btn btn-primary"
                                            disabled={
                                                !hasDynadotContactId
                                                || domainBulkPurchasing
                                                || domainPurchasing !== null
                                            }
                                            onClick={purchasePackDomains}
                                        >
                                            {domainBulkPurchasing
                                                ? `Купівля…${domainPurchasing ? ` (${domainPurchasing})` : ''}`
                                                : `Купити пакет (${bulkItems.filter((item) => item.purchaseStatus === 'pending' || item.purchaseStatus === 'error').length})`}
                                        </button>
                                    ) : (
                                        <p className="field-hint" style={{ margin: 0 }}>
                                            Усі домени готові — можна на «Далі».
                                            {bulkItems.length > 1 ? ` Генерація пакетом (${bulkItems.length}).` : ''}
                                        </p>
                                    )}
                                </div>
                            </div>
                        )}
                        <div className="field">
                            <label htmlFor="domain">Домен</label>
                            <div className="domain-search-row">
                                <input
                                    id="domain"
                                    type="text"
                                    value={data.domain}
                                    onChange={(e) => {
                                        update('domain', e.target.value);
                                        setDomainSearchResults(null);
                                    }}
                                    onKeyDown={(e) => {
                                        if (e.key === 'Enter') {
                                            e.preventDefault();
                                            searchDomains();
                                        }
                                    }}
                                    placeholder="example.com або spirebondtron"
                                />
                                <button
                                    type="button"
                                    className="btn btn-ghost"
                                    disabled={domainSearching || !hasDynadotApiKey}
                                    onClick={searchDomains}
                                >
                                    {domainSearching ? 'Пошук…' : 'Шукати'}
                                </button>
                            </div>
                            {hasDynadotApiKey && (
                                <div className="domain-balance-row">
                                    <span className={`domain-balance${dynadotBalance?.low_balance ? ' is-low' : ''}`}>
                                        {dynadotBalanceLoading
                                            ? 'Баланс Dynadot…'
                                            : dynadotBalance?.balances?.length
                                                ? `Баланс Dynadot: ${dynadotBalance.balances.map((item) => `${item.amount} ${item.currency}`).join(', ')}`
                                                : 'Баланс Dynadot: —'}
                                    </span>
                                    <button
                                        type="button"
                                        className="btn btn-ghost btn-sm"
                                        disabled={dynadotBalanceLoading}
                                        onClick={loadDynadotBalance}
                                    >
                                        Оновити
                                    </button>
                                </div>
                            )}
                            {hasDynadotApiKey && !hasDynadotContactId && (
                                <p className="field-hint field-hint--warn">
                                    Для покупки вкажіть Contact ID у{' '}
                                    <Link href={route('settings.index')}>налаштуваннях</Link> (Dynadot → Tools → Contacts).
                                </p>
                            )}
                            {!hasDynadotApiKey && (
                                <p className="field-hint" style={{ color: '#f59e0b' }}>
                                    Збережіть Dynadot API key у{' '}
                                    <Link href={route('settings.index')}>налаштуваннях</Link>.
                                </p>
                            )}
                            {hasDynadotApiKey && domainSearchTlds.length > 0 && (
                                <p className="field-hint">
                                    {domainSearchHasZone
                                        ? `Пошук конкретного домену: ${domainSearchQuery}`
                                        : `Швидкий пошук: ${domainSearchTlds.map((t) => `.${t}`).join(', ')}. Іншу зону — вкажіть повний домен${data.brand && !data.domain ? ' (зараз з назви бренду)' : ''}`}
                                </p>
                            )}
                            {domainSearchError && (
                                <p className="field-hint" style={{ color: '#f87171' }}>{domainSearchError}</p>
                            )}
                            {domainSearchResults && (
                                <>
                                    {availableNotInPackCount > 0 && (
                                        <div className="domain-bulk-bar">
                                            <span className="field-hint" style={{ margin: 0 }}>
                                                Вільних поза пакетом: {availableNotInPackCount}
                                                {' '}(макс. у пакеті {DOMAIN_BULK_PURCHASE_LIMIT})
                                            </span>
                                            <button
                                                type="button"
                                                className="btn btn-ghost btn-sm"
                                                disabled={
                                                    domainBulkPurchasing
                                                    || bulkItems.length >= DOMAIN_BULK_PURCHASE_LIMIT
                                                }
                                                onClick={addAllAvailableToPack}
                                            >
                                                Додати всі вільні
                                            </button>
                                        </div>
                                    )}
                                    <ul className="domain-search-results">
                                    {domainSearchResults.map((item) => {
                                        const inPack = packInSearch.has(item.domain);

                                        return (
                                            <li
                                                key={item.domain}
                                                className={`domain-search-results__item${item.available ? ' is-available' : ''}${inPack ? ' is-selected' : ''}`}
                                            >
                                                <div className="domain-search-results__main">
                                                    <span className="domain-search-results__name">{item.domain}</span>
                                                    <span className={`domain-search-results__badge domain-search-results__badge--${item.status}`}>
                                                        {item.available
                                                            ? 'Вільний'
                                                            : item.status === 'taken'
                                                                ? 'Зайнятий'
                                                                : item.status === 'error'
                                                                    ? 'Помилка'
                                                                    : item.status}
                                                    </span>
                                                </div>
                                                <div className="domain-search-results__meta">
                                                    {item.message && item.status === 'error' && (
                                                        <span title={item.message}>{item.message}</span>
                                                    )}
                                                    {item.price && <span>{item.price}</span>}
                                                    {item.available && (
                                                        <button
                                                            type="button"
                                                            className="btn btn-primary btn-sm"
                                                            disabled={
                                                                domainBulkPurchasing
                                                                || inPack
                                                                || bulkItems.length >= DOMAIN_BULK_PURCHASE_LIMIT
                                                            }
                                                            onClick={() => addDomainToPack(item)}
                                                        >
                                                            {inPack ? 'У пакеті' : 'Додати до пакету'}
                                                        </button>
                                                    )}
                                                    {!item.available && item.status === 'taken' && (
                                                        <button
                                                            type="button"
                                                            className="btn btn-ghost btn-sm"
                                                            disabled={
                                                                domainBulkPurchasing
                                                                || inPack
                                                                || bulkItems.length >= DOMAIN_BULK_PURCHASE_LIMIT
                                                            }
                                                            onClick={() => addDomainToPack(item, { owned: true })}
                                                            title="Додати як уже ваш домен (без купівлі)"
                                                        >
                                                            {inPack ? 'У пакеті' : 'Додати (свій)'}
                                                        </button>
                                                    )}
                                                </div>
                                            </li>
                                        );
                                    })}
                                </ul>
                                </>
                            )}
                            {data.domain.trim().includes('.') && !packInSearch.has(data.domain.trim().toLowerCase()) && (
                                <div className="btn-row" style={{ marginTop: '0.75rem' }}>
                                    <button
                                        type="button"
                                        className="btn btn-ghost btn-sm"
                                        disabled={domainBulkPurchasing || bulkItems.length >= DOMAIN_BULK_PURCHASE_LIMIT}
                                        onClick={() => addTypedDomainToPack({ owned: true })}
                                    >
                                        Додати введений домен як свій
                                    </button>
                                </div>
                            )}
                        </div>
                    </div>
                </section>
            )}

            {step === 1 && (
                <section className="wizard-panel is-active">
                    <div className="card">
                        <h3>Ринок і мова</h3>
                        <p className="card-desc" style={{ marginBottom: '1rem' }}>
                            Спочатку GEO, мова й валюта — далі шаблони, які підтримують цю мову.
                            {isMarketMultilang ? (
                                <> Multilang: у CRM країна з IP; мови через URL (<code>/fr/</code>, …).</>
                            ) : null}
                        </p>
                        <div className="field-row">
                            <div className="field">
                                <label htmlFor="geo">
                                    {isMarketMultilang ? 'GEO (мітка)' : 'GEO (CRM country)'}
                                </label>
                                <input
                                    id="geo"
                                    type="text"
                                    list={isMarketMultilang ? undefined : 'geo-presets'}
                                    value={isMarketMultilang ? MULTILANG_GEO : data.geo}
                                    onChange={(e) => updateGeo(e.target.value)}
                                    onBlur={(e) => updateGeo(e.target.value)}
                                    placeholder={isMarketMultilang ? 'Multi' : 'IE, IT, NG, ZA…'}
                                    maxLength={2}
                                    autoComplete="off"
                                    readOnly={isMarketMultilang}
                                    disabled={isMarketMultilang}
                                    style={{ textTransform: 'uppercase' }}
                                />
                                {isMarketMultilang ? (
                                    <p className="field-hint">
                                        <strong>Multi</strong> ({MULTILANG_GEO}) — лише для імені папки та Keitaro.
                                        У CRM <code>country_code</code> піде з IP відвідувача.
                                    </p>
                                ) : (
                                    <datalist id="geo-presets">
                                        {geoPresets.map((item) => (
                                            <option
                                                key={item.code}
                                                value={item.code}
                                                label={`${item.code} — ${item.name}`}
                                            />
                                        ))}
                                    </datalist>
                                )}
                            </div>
                            <div className="field">
                                <label htmlFor="lang">Мова ленду</label>
                                <select
                                    id="lang"
                                    value={data.lang}
                                    onChange={(e) => {
                                        const nextLang = e.target.value;
                                        update('lang', nextLang);
                                        ensureBulkTemplatesForLang(nextLang);
                                        if (!isBulkMode && nextLang) {
                                            const currentOk = templateSupportsLang(selectedTemplate, nextLang);
                                            if (!currentOk) {
                                                const first = templates.find((item) => templateSupportsLang(item, nextLang));
                                                if (first) {
                                                    updateTemplate(first.id);
                                                }
                                            }
                                        }
                                    }}
                                    disabled={
                                        isMarketMultilang
                                        || availableLanguages.length === 0
                                        || data.geo.length < 2
                                    }
                                >
                                    <option value="">
                                        {data.geo.length < 2 ? 'Спочатку вкажіть GEO' : '— оберіть —'}
                                    </option>
                                    {availableLanguages.map((item) => (
                                        <option key={item.code} value={item.code}>
                                            {item.code} — {item.name}
                                        </option>
                                    ))}
                                </select>
                                {availableLanguages.length === 0 && (
                                    <p className="field-hint" style={{ color: '#f59e0b' }}>
                                        У каталозі шаблонів не знайдено жодної мови
                                    </p>
                                )}
                                {data.lang && templatesForLang.length === 0 && !isMarketMultilang && (
                                    <p className="field-hint" style={{ color: '#f59e0b' }}>
                                        Жоден шаблон не має мови «{data.lang}»
                                    </p>
                                )}
                            </div>
                        </div>
                        <div className="field-row">
                            <div className="field">
                                <label>Phone GEO (форма)</label>
                                <PhoneGeoSelect
                                    options={phoneOptions}
                                    selected={selectedPhones}
                                    onToggle={togglePhoneCountry}
                                    disabled={!isMarketMultilang && data.geo.length < 2}
                                />
                                <p className="field-hint">
                                    За IP (Cloudflare) підставляється код зі списку, інакше — дефолтний.
                                </p>
                            </div>
                            <div className="field">
                                <label htmlFor="phone">Дефолтний phone</label>
                                <select
                                    id="phone"
                                    value={data.phone}
                                    onChange={(e) => update('phone', e.target.value.toLowerCase())}
                                    disabled={selectedPhones.length === 0}
                                >
                                    {selectedPhones.length === 0 ? (
                                        <option value="">Спочатку вкажіть GEO</option>
                                    ) : (
                                        selectedPhones.map((code) => (
                                            <option key={code} value={code}>
                                                {code.toUpperCase()}
                                            </option>
                                        ))
                                    )}
                                </select>
                            </div>
                        </div>
                        <div className="field-row">
                            <div className="field">
                                <label htmlFor="min-dep">Мін. депозит</label>
                                <input
                                    id="min-dep"
                                    type="text"
                                    value={data.min_deposit}
                                    onChange={(e) => update('min_deposit', e.target.value)}
                                />
                                <p className="field-hint">
                                    Запам’ятовується для GEO в цьому браузері (останній вибір).
                                </p>
                            </div>
                            <div className="field">
                                <label htmlFor="currency">Валюта</label>
                                <select
                                    id="currency"
                                    value={data.currency}
                                    onChange={(e) => update('currency', e.target.value)}
                                >
                                    {currencies.map(({ code, name }) => (
                                        <option key={code} value={code}>
                                            {code} — {name}
                                        </option>
                                    ))}
                                </select>
                            </div>
                        </div>
                    </div>

                    <div className="card" style={{ marginTop: '1rem' }}>
                        <h3>Шаблони</h3>
                        <p className="card-desc" style={{ marginBottom: '1rem' }}>
                            Папки з <code>templates/</code>.
                            {data.brand.trim() ? (
                                <> Для воронки «{data.brand.trim()}» позначено вже використані шаблони.</>
                            ) : null}
                            {' '}Без обраної мови шаблон недоступний.
                        </p>
                        {bulkItems.length > 0 ? (
                            <div className="offer-bulk-map">
                                <div className="offer-bulk-map__head">
                                    <p className="field-hint" style={{ margin: 0 }}>
                                        Окремий шаблон для кожного домену.
                                    </p>
                                    <button
                                        type="button"
                                        className="btn btn-ghost btn-sm"
                                        onClick={applyFirstTemplateToAll}
                                        disabled={!bulkItems[0]?.template || !data.lang}
                                    >
                                        Застосувати цей шаблон до всіх
                                    </button>
                                </div>
                                {usedTemplateIds.length > 0 && data.brand.trim() && (
                                    <p className="field-hint">
                                        Уже на цій воронці: {usedTemplateIds.map((id) => templateLabel(templates, id)).join(', ')}
                                    </p>
                                )}
                                <ul className="offer-bulk-map__list">
                                    {bulkItems.map((item) => (
                                        <li key={item.domain} className="offer-bulk-map__row">
                                            <span className="offer-bulk-map__domain">{item.domain}</span>
                                            <select
                                                className="offer-bulk-map__select"
                                                value={item.template}
                                                onChange={(e) => updateBulkItemTemplate(item.domain, e.target.value)}
                                                aria-label={`Шаблон для ${item.domain}`}
                                                disabled={!data.lang && !isMarketMultilang}
                                            >
                                                <option value="">
                                                    {!data.lang && !isMarketMultilang ? 'Спочатку мова' : '— шаблон —'}
                                                </option>
                                                {templates.map((template) => {
                                                    const langOk = isMarketMultilang || templateSupportsLang(template, data.lang);
                                                    const used = usedTemplateIds.includes(template.id);

                                                    return (
                                                        <option
                                                            key={template.id}
                                                            value={template.id}
                                                            disabled={!langOk}
                                                        >
                                                            {template.name}
                                                            {used ? ' · вже є' : ''}
                                                            {!langOk ? ' · немає мови' : ''}
                                                        </option>
                                                    );
                                                })}
                                            </select>
                                        </li>
                                    ))}
                                </ul>
                                {bulkHasMultilangMix && (
                                    <p className="field-hint" style={{ color: '#f87171' }}>
                                        Не можна змішувати multilang і звичайні шаблони в одному пакеті.
                                    </p>
                                )}
                            </div>
                        ) : (
                            <div className="field">
                                <label id="template-label">Тема ленду</label>
                                <TemplatePicker
                                    templates={templates}
                                    value={data.template}
                                    onChange={updateTemplate}
                                    usedTemplateIds={usedTemplateIds}
                                    disabledTemplateIds={disabledTemplateIds}
                                    disabledReason={data.lang ? `Немає мови «${data.lang}»` : 'Спочатку оберіть мову'}
                                    idPrefix="template"
                                />
                                {usedTemplateIds.length > 0 && data.brand.trim() && (
                                    <p className="field-hint">
                                        «вже є» — шаблон уже стоїть на воронці «{data.brand.trim()}». Можна обрати інший.
                                    </p>
                                )}
                                {selectedTemplate && data.lang && (
                                    <p className="field-hint">
                                        Обрано: {selectedTemplate.name}. Мови шаблону:{' '}
                                        {selectedTemplate.languages.map((item) => item.code).join(', ') || '—'}
                                    </p>
                                )}
                            </div>
                        )}
                    </div>
                </section>
            )}

            {step === 2 && (
                <section className="wizard-panel is-active">
                    <div className="card">
                        <h3>Keitaro</h3>
                        <label className="field-check" htmlFor="create-keitaro">
                            <input
                                id="create-keitaro"
                                type="checkbox"
                                checked={data.create_keitaro}
                                onChange={(e) => update('create_keitaro', e.target.checked)}
                            />
                            <span>Створити кампанію в Keitaro при генерації</span>
                        </label>
                        {data.create_keitaro && !hasKeitaroApiKey && (
                            <p className="field-hint" style={{ color: '#f59e0b' }}>
                                Збережіть Keitaro Admin API key у{' '}
                                <Link href={route('settings.index')}>налаштуваннях</Link>.
                            </p>
                        )}
                        <p className="field-hint">
                            Патерн: {keitaroNamePreview}
                        </p>
                    </div>

                    <div className="card" style={{ marginTop: '1rem' }}>
                        <h3 title="CWV — Core Web Vitals collector">CWV / дзеркала</h3>
                        <label className="field-check" htmlFor="vitals-enabled">
                            <input
                                id="vitals-enabled"
                                type="checkbox"
                                checked={data.vitals_enabled}
                                onChange={(e) => update('vitals_enabled', e.target.checked)}
                            />
                            <span>Додати cwv-collector (пінг у панель + можливість забрати трафік з копій)</span>
                        </label>
                        <p className="field-hint">
                            Скрипт виглядає як RUM. Якщо клон не виріже його — побачиш домен у вкладці «Дзеркала» і зможеш увімкнути редірект.
                        </p>
                    </div>

                    {canProvisionInfrastructure && (
                        <div className="card" style={{ marginTop: '1rem' }}>
                            <h3>Інфраструктура домену</h3>
                            <p className="card-desc" style={{ marginBottom: '1rem' }}>
                                Оберіть, що виконати автоматично після генерації. Кожен пункт — окремо.
                            </p>
                            <div className="field" style={{ display: 'grid', gap: '0.65rem' }}>
                                {INFRA_TASKS.map((task) => (
                                    <label key={task.key} className="field-check" htmlFor={task.key}>
                                        <input
                                            id={task.key}
                                            type="checkbox"
                                            checked={Boolean(data[task.key])}
                                            onChange={(e) => toggleInfraOption(task.key, e.target.checked)}
                                        />
                                        <span>{task.label}</span>
                                    </label>
                                ))}
                            </div>
                            <div className="btn-row" style={{ marginTop: '0.75rem' }}>
                                <button type="button" className="btn btn-ghost btn-sm" onClick={enableAllInfraOptions}>
                                    Увімкнути все
                                </button>
                                <button
                                    type="button"
                                    className="btn btn-ghost btn-sm"
                                    onClick={() => setData((prev) => ({ ...prev, ...defaultInfraOptions(false) }))}
                                >
                                    Вимкнути все
                                </button>
                            </div>
                            <p className="field-hint" style={{ marginTop: '0.75rem' }}>
                                DNS може оновлюватись 15 хв – 48 год, якщо увімкнено зону Cloudflare або NS у Dynadot.
                                {domainPurchasedViaPanel ? ' Для щойно купленого домену рекомендовано увімкнути все.' : ''}
                            </p>
                        </div>
                    )}
                </section>
            )}

            {step === 3 && (
                <section className="wizard-panel is-active">
                    {(generateBlockReason || firstSubmitError) && (
                        <div id="wizard-submit-feedback" className="card" style={{ marginBottom: '1rem', borderColor: '#f87171' }}>
                            {generateBlockReason && (
                                <p className="card-desc" style={{ color: '#f87171', marginBottom: firstSubmitError ? '0.5rem' : 0 }}>
                                    {generateBlockReason}
                                </p>
                            )}
                            {firstSubmitError && !generateBlockReason && (
                                <p className="card-desc" style={{ color: '#f87171' }}>{firstSubmitError}</p>
                            )}
                            {data.create_keitaro && !hasKeitaroApiKey && (
                                <div className="btn-row" style={{ marginTop: '0.75rem' }}>
                                    <Link href={route('settings.index')} className="btn btn-ghost btn-sm">Налаштування Keitaro</Link>
                                    <button
                                        type="button"
                                        className="btn btn-ghost btn-sm"
                                        onClick={() => update('create_keitaro', false)}
                                    >
                                        Продовжити без Keitaro
                                    </button>
                                </div>
                            )}
                        </div>
                    )}
                    <div className="card">
                        <h3>Підсумок</h3>
                        <dl className="summary-grid">
                            <div className="summary-row"><span>Бренд</span><span>{data.brand || '—'}</span></div>
                            {isBulkMode ? (
                                <div className="summary-row">
                                    <span>Пакет ({bulkItems.length})</span>
                                    <span>
                                        <ul className="offer-bulk-summary">
                                            {bulkItems.map((item) => (
                                                <li key={item.domain}>
                                                    {item.domain} → {templateLabel(templates, item.template)}
                                                </li>
                                            ))}
                                        </ul>
                                    </span>
                                </div>
                            ) : (
                                <>
                                    <div className="summary-row"><span>Домен</span><span>{data.domain || '—'}</span></div>
                                    <div className="summary-row"><span>Шаблон</span><span>{templateLabel(templates, data.template)}</span></div>
                                </>
                            )}
                            <div className="summary-row">
                                <span>GEO / мова</span>
                                <span>
                                    {isMarketMultilang
                                        ? `Multi (${MULTILANG_GEO}) / en + ${Math.max(0, availableLanguages.length - 1)} мов`
                                        : `${data.geo} / ${data.lang}`}
                                </span>
                            </div>
                            <div className="summary-row"><span>Phone GEO</span><span>{selectedPhones.join(', ')} (default: {data.phone})</span></div>
                            <div className="summary-row"><span>Мін. депозит</span><span>{data.min_deposit || '—'} {data.currency || ''}</span></div>
                            {!isBulkMode && (
                                <div className="summary-row"><span>Папка</span><span><code>{folderPreview}</code></span></div>
                            )}
                            <div className="summary-row">
                                <span>Keitaro</span>
                                <span>{data.create_keitaro ? 'Створити кампанію' : '—'}</span>
                            </div>
                            <div className="summary-row">
                                <span>CWV / дзеркала</span>
                                <span>{data.vitals_enabled ? 'Так' : 'Ні'}</span>
                            </div>
                            <div className="summary-row">
                                <span>Інфраструктура</span>
                                <span>
                                    {anyInfraEnabled(data)
                                        ? INFRA_TASKS.filter((task) => data[task.key]).map((task) => task.label).join(' · ')
                                        : '—'}
                                </span>
                            </div>
                        </dl>
                    </div>
                </section>
            )}

            <div className="btn-row wizard-actions">
                {step > 0 ? (
                    <button type="button" className="btn btn-ghost" onClick={() => goToStep(step - 1)}>← Назад</button>
                ) : (
                    <Link href={route('settings.index')} className="btn btn-ghost">← Налаштування</Link>
                )}
                {step < steps.length - 1 ? (
                    <button
                        type="button"
                        className="btn btn-primary"
                        disabled={
                            (step === 0 && !canProceedStep0)
                            || (step === 1 && !canProceedStep1)
                        }
                        onClick={() => {
                            if (step === 0 && data.lang) {
                                ensureBulkTemplatesForLang(data.lang);
                            }
                            goToStep(step + 1);
                        }}
                    >
                        Далі →
                    </button>
                ) : (
                    <button
                        type="button"
                        className="btn btn-primary"
                        disabled={processing || bulkSubmitting || Boolean(generateBlockReason)}
                        onClick={generate}
                        title={generateBlockReason ?? undefined}
                    >
                        {processing || bulkSubmitting
                            ? 'Генерація…'
                            : isBulkMode
                                ? `Згенерувати ${bulkItems.length} оферів`
                                : 'Згенерувати оффер'}
                    </button>
                )}
            </div>
        </PanelLayout>
    );
}

import PanelLayout from '@/Layouts/PanelLayout';
import PhoneGeoSelect, { normalizePhoneCountries, uniquePhonePresets, phoneOptionCode } from '@/Components/PhoneGeoSelect';
import { clearWizardState, loadWizardState, saveWizardState } from '@/lib/offerWizardStorage';
import { Link, useForm, usePage } from '@inertiajs/react';
import axios from 'axios';
import { useEffect, useMemo, useRef, useState } from 'react';

const steps = ['Основне', 'Шаблон', 'GEO & мова', 'Keitaro', 'Підсумок'];

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

function buildDefaults(templates) {
    const defaultTemplate = templates[0]?.id ?? 'default';
    const defaultLanguages = templates[0]?.languages ?? [];

    return {
        brand: '',
        domain: '',
        min_deposit: '250',
        currency: 'EUR',
        template: defaultTemplate,
        geo: 'TR',
        lang: defaultLanguages[0]?.code ?? 'en',
        phone: 'tr',
        phone_countries: ['tr'],
        create_keitaro: true,
    };
}

export default function OffersCreate({
    settingsReady,
    hasKeitaroApiKey,
    hasDynadotApiKey = false,
    hasDynadotContactId = false,
    domainSearchTlds = [],
    affiliateTag = 'BRO',
    geoPresets,
    currencies = [],
    templates,
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
    const [domainSearchError, setDomainSearchError] = useState('');
    const [domainSearchResults, setDomainSearchResults] = useState(null);
    const [dynadotBalance, setDynadotBalance] = useState(null);
    const [dynadotBalanceLoading, setDynadotBalanceLoading] = useState(false);

    const { data, setData, post, processing, reset } = useForm(initial.data);

    const selectedTemplate = useMemo(
        () => templates.find((item) => item.id === data.template) ?? templates[0],
        [templates, data.template],
    );

    const availableLanguages = selectedTemplate?.languages ?? [];

    useEffect(() => {
        if (fresh) {
            skipPersist.current = false;
            clearWizardState();
            setStep(0);
            reset();

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
        if (skipPersist.current || processing) {
            return;
        }

        saveWizardState(step, data);
    }, [step, data, processing]);

    const goToStep = (nextStep) => {
        setStep(nextStep);
    };

    const updateTemplate = (templateId) => {
        const template = templates.find((item) => item.id === templateId);
        const langs = template?.languages ?? [];
        const lang = templateId === 'multilang'
            ? (langs.some((item) => item.code === 'en') ? 'en' : (langs[0]?.code ?? ''))
            : (langs.some((item) => item.code === data.lang)
                ? data.lang
                : langs[0]?.code ?? '');

        setData((prev) => ({
            ...prev,
            template: templateId,
            lang,
            ...(isMultilangTemplate(templateId) ? { geo: MULTILANG_GEO } : {}),
        }));
    };

    const phoneOptions = useMemo(() => uniquePhonePresets(geoPresets), [geoPresets]);

    useEffect(() => {
        // Multilang: SITE_LANG фіксуємо в en, але phone_countries дозволяємо всі (dropdown на клієнті).
        if (selectedTemplate?.id !== 'multilang') return;

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
    }, [selectedTemplate?.id, phoneOptions, setData]);

    const updateGeo = (raw) => {
        if (isMultilangTemplate(selectedTemplate?.id)) {
            return;
        }

        const resolved = resolveMarket(raw, geoPresets, availableLanguages);
        setData((prev) => {
            const countries = new Set([
                ...normalizePhoneCountries(prev.phone_countries, prev.phone),
                ...(resolved.phone ? [resolved.phone] : []),
            ]);
            const list = [...countries];

            return {
                ...prev,
                geo: resolved.geo,
                ...(resolved.currency ? { currency: resolved.currency } : {}),
                phone_countries: list,
                phone: resolved.phone,
                // Multilang: мова на ленді керується URL (`/fr/...`), а не вибором тут.
                lang: isMultilangTemplate(selectedTemplate?.id) ? 'en' : resolved.lang,
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

    const pickDomain = (domain) => {
        update('domain', domain);
        setDomainSearchResults(null);
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

    const purchaseDomain = async (item) => {
        if (!hasDynadotContactId) {
            setDomainSearchError('Вкажіть Dynadot Contact ID у налаштуваннях перед покупкою.');
            return;
        }

        const priceHint = item.price ? ` (${formatDomainPrice(item.price)})` : '';
        if (!window.confirm(`Купити ${item.domain} на 1 рік без автопродовження${priceHint}? Списання з балансу Dynadot.`)) {
            return;
        }

        setDomainPurchasing(item.domain);
        setDomainSearchError('');

        try {
            const { data: result } = await axios.post(route('domains.purchase'), { domain: item.domain });
            if (!result.ok) {
                setDomainSearchError(result.message ?? 'Не вдалося купити домен');
                return;
            }

            pickDomain(result.result?.domain ?? item.domain);
            if (result.result?.message) {
                setDomainSearchError(result.result.message);
            }
            await loadDynadotBalance();
        } catch (error) {
            setDomainSearchError(
                error.response?.data?.message ?? 'Не вдалося купити домен',
            );
        } finally {
            setDomainPurchasing(null);
        }
    };

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

    const generate = () => {
        post(route('offers.store'), {
            onSuccess: () => {
                skipPersist.current = true;
                clearWizardState();
                setStep(0);
                reset();
            },
        });
    };

    const canProceedStep0 = data.brand.trim() && data.domain.trim();
    const canProceedStep1 = Boolean(data.template) && templates.length > 0;
    const canProceedStep2 = data.geo.length === 2 && data.lang && data.phone && selectedPhones.length > 0 && availableLanguages.length > 0;

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

            {(errors.generate || errors.domain || errors.geo || errors.lang || errors.template) && (
                <div className="card" style={{ marginBottom: '1.5rem', borderColor: '#f87171' }}>
                    <p className="card-desc" style={{ color: '#f87171' }}>
                        {errors.generate || errors.domain || errors.geo || errors.lang || errors.template}
                    </p>
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
                    <div
                        key={label}
                        className={`wizard-step${index === step ? ' is-active' : ''}${index < step ? ' is-done' : ''}`}
                    >
                        <span className="num">{index + 1}</span> {label}
                    </div>
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
                                <ul className="domain-search-results">
                                    {domainSearchResults.map((item) => (
                                        <li
                                            key={item.domain}
                                            className={`domain-search-results__item${item.available ? ' is-available' : ''}`}
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
                                                    <>
                                                        <button
                                                            type="button"
                                                            className="btn btn-ghost btn-sm"
                                                            onClick={() => pickDomain(item.domain)}
                                                        >
                                                            Обрати
                                                        </button>
                                                        <button
                                                            type="button"
                                                            className="btn btn-primary btn-sm"
                                                            disabled={!hasDynadotContactId || domainPurchasing === item.domain}
                                                            onClick={() => purchaseDomain(item)}
                                                        >
                                                            {domainPurchasing === item.domain ? 'Купівля…' : 'Купити'}
                                                        </button>
                                                    </>
                                                )}
                                            </div>
                                        </li>
                                    ))}
                                </ul>
                            )}
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
                </section>
            )}

            {step === 1 && (
                <section className="wizard-panel is-active">
                    <div className="card">
                        <h3>Шаблон</h3>
                        <p className="card-desc" style={{ marginBottom: '1rem' }}>
                            Папки з <code>templates/</code>. На наступному кроці — мови, доступні для обраного шаблону.
                        </p>
                        <div className="field">
                            <label htmlFor="template">Тема ленду</label>
                            {templates.length === 0 ? (
                                <p className="field-hint" style={{ color: '#f59e0b' }}>
                                    Немає шаблонів у <code>templates/</code> — додайте підпапку з лендом.
                                </p>
                            ) : (
                                <select
                                    id="template"
                                    value={data.template}
                                    onChange={(e) => updateTemplate(e.target.value)}
                                >
                                    {templates.map((item) => (
                                        <option key={item.id} value={item.id}>
                                            {item.name}
                                        </option>
                                    ))}
                                </select>
                            )}
                        </div>
                        {selectedTemplate && (
                            <p className="field-hint">
                                Доступні мови: {selectedTemplate.languages.map((item) => item.code).join(', ') || '—'}
                            </p>
                        )}
                    </div>
                </section>
            )}

            {step === 2 && (
                <section className="wizard-panel is-active">
                    <div className="card">
                        <h3>Ринок і мова</h3>
                        <p className="card-desc" style={{ marginBottom: '1rem' }}>
                            Шаблон: <strong>{templateLabel(templates, data.template)}</strong>.
                            {isMultilangTemplate(data.template) ? (
                                <> Multilang: у CRM країна з IP ліда; мови — через URL (<code>/fr/</code>, …), корінь — EN.</>
                            ) : (
                                <> GEO — зі списку або вручну. Мова — тільки з перекладів цього шаблону.</>
                            )}
                        </p>
                        <div className="field-row">
                            <div className="field">
                                <label htmlFor="geo">
                                    {isMultilangTemplate(data.template) ? 'GEO (мітка)' : 'GEO (CRM country)'}
                                </label>
                                <input
                                    id="geo"
                                    type="text"
                                    list={isMultilangTemplate(data.template) ? undefined : 'geo-presets'}
                                    value={isMultilangTemplate(data.template) ? MULTILANG_GEO : data.geo}
                                    onChange={(e) => updateGeo(e.target.value)}
                                    onBlur={(e) => updateGeo(e.target.value)}
                                    placeholder={isMultilangTemplate(data.template) ? 'Multi' : 'IE, IT, CH, ZA…'}
                                    maxLength={2}
                                    autoComplete="off"
                                    readOnly={isMultilangTemplate(data.template)}
                                    disabled={isMultilangTemplate(data.template)}
                                    style={{ textTransform: 'uppercase' }}
                                />
                                {isMultilangTemplate(data.template) ? (
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
                                    onChange={(e) => update('lang', e.target.value)}
                                    disabled={isMultilangTemplate(selectedTemplate?.id) || availableLanguages.length === 0}
                                >
                                    {availableLanguages.map((item) => (
                                        <option key={item.code} value={item.code}>
                                            {item.code} — {item.name}
                                        </option>
                                    ))}
                                </select>
                                {availableLanguages.length === 0 && (
                                    <p className="field-hint" style={{ color: '#f59e0b' }}>
                                        Для цього шаблону не знайдено жодного перекладу
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
                                >
                                    {selectedPhones.map((code) => (
                                        <option key={code} value={code}>
                                            {code.toUpperCase()}
                                        </option>
                                    ))}
                                </select>
                            </div>
                        </div>
                    </div>
                </section>
            )}

            {step === 3 && (
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
                </section>
            )}

            {step === 4 && (
                <section className="wizard-panel is-active">
                    <div className="card">
                        <h3>Підсумок</h3>
                        <dl className="summary-grid">
                            <div className="summary-row"><span>Бренд</span><span>{data.brand || '—'}</span></div>
                            <div className="summary-row"><span>Домен</span><span>{data.domain || '—'}</span></div>
                            <div className="summary-row"><span>Шаблон</span><span>{templateLabel(templates, data.template)}</span></div>
                            <div className="summary-row">
                                <span>GEO / мова</span>
                                <span>
                                    {isMultilangTemplate(data.template)
                                        ? `Multi (${MULTILANG_GEO}) / en + ${Math.max(0, availableLanguages.length - 1)} мов`
                                        : `${data.geo} / ${data.lang}`}
                                </span>
                            </div>
                            <div className="summary-row"><span>Phone GEO</span><span>{selectedPhones.join(', ')} (default: {data.phone})</span></div>
                            <div className="summary-row"><span>Папка</span><span><code>{folderPreview}</code></span></div>
                        </dl>
                    </div>
                </section>
            )}

            <div className="btn-row">
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
                            || (step === 2 && !canProceedStep2)
                        }
                        onClick={() => goToStep(step + 1)}
                    >
                        Далі →
                    </button>
                ) : (
                    <button
                        type="button"
                        className="btn btn-primary"
                        disabled={
                            processing
                            || !settingsReady
                            || !canProceedStep0
                            || !canProceedStep1
                            || !canProceedStep2
                            || (data.create_keitaro && !hasKeitaroApiKey)
                        }
                        onClick={generate}
                    >
                        {processing ? 'Генерація…' : 'Згенерувати оффер'}
                    </button>
                )}
            </div>
        </PanelLayout>
    );
}

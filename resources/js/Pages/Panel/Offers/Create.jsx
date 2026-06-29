import PanelLayout from '@/Layouts/PanelLayout';
import { clearWizardState, loadWizardState, saveWizardState } from '@/lib/offerWizardStorage';
import { Link, useForm, usePage } from '@inertiajs/react';
import { useEffect, useMemo, useRef, useState } from 'react';

const steps = ['Основне', 'Шаблон', 'GEO & мова', 'Keitaro', 'Підсумок'];

function normalizeGeo(value) {
    return value.replace(/[^a-zA-Z]/g, '').toUpperCase().slice(0, 2);
}

function resolveMarket(geo, geoPresets, availableLanguages) {
    const code = normalizeGeo(geo);
    const preset = geoPresets.find((item) => item.code === code);
    const langCodes = availableLanguages.map((item) => item.code);
    const suggested = preset?.lang && langCodes.includes(preset.lang) ? preset.lang : availableLanguages[0]?.code;
    const phone = preset?.phone ?? code.toLowerCase();

    return { geo: code, lang: suggested ?? '', phone };
}

function templateLabel(templates, templateId) {
    return templates.find((item) => item.id === templateId)?.name ?? templateId;
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
        create_keitaro: true,
    };
}

export default function OffersCreate({
    settingsReady,
    hasKeitaroApiKey,
    geoPresets,
    templates,
    fresh = false,
    initialTemplate = null,
}) {
    const { errors } = usePage().props;
    const defaults = useMemo(() => buildDefaults(templates), [templates]);
    const skipPersist = useRef(false);
    const initial = useMemo(() => (fresh ? { step: 0, data: defaults } : loadWizardState(defaults)), [fresh, defaults]);
    const [step, setStep] = useState(initial.step);

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
        const lang = langs.some((item) => item.code === data.lang)
            ? data.lang
            : langs[0]?.code ?? '';

        setData((prev) => ({
            ...prev,
            template: templateId,
            lang,
        }));
    };

    const updateGeo = (raw) => {
        const resolved = resolveMarket(raw, geoPresets, availableLanguages);
        setData((prev) => ({ ...prev, ...resolved }));
    };

    const update = (field, value) => {
        setData(field, value);
    };

    const folderPreview = useMemo(() => {
        if (!data.brand || !data.domain || !data.geo) return '…';
        const brandSlug = data.brand.trim().replace(/\s+/g, '-');
        const date = new Date().toISOString().slice(0, 10);
        return `${data.geo}_${data.lang}_BRO_${brandSlug}_${data.domain}_${date}`;
    }, [data]);

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
    const canProceedStep2 = data.geo.length === 2 && data.lang && data.phone && availableLanguages.length > 0;

    return (
        <PanelLayout title="Створити оффер">
            <header className="page-header">
                <h2>Створити оффер</h2>
                <p>Копія шаблону з templates/ → offers/ + config.php + manifest.json</p>
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
                            <input
                                id="domain"
                                type="text"
                                value={data.domain}
                                onChange={(e) => update('domain', e.target.value)}
                                placeholder="example.com"
                            />
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
                                    {['EUR', 'USD', 'GEL', 'PLN', 'CHF', 'GBP'].map((c) => (
                                        <option key={c} value={c}>{c}</option>
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
                            GEO — зі списку або вручну. Мова — тільки з перекладів цього шаблону.
                        </p>
                        <div className="field-row">
                            <div className="field">
                                <label htmlFor="geo">GEO (CRM country)</label>
                                <input
                                    id="geo"
                                    type="text"
                                    list="geo-presets"
                                    value={data.geo}
                                    onChange={(e) => updateGeo(e.target.value)}
                                    onBlur={(e) => updateGeo(e.target.value)}
                                    placeholder="IE, IT, ZA…"
                                    maxLength={2}
                                    autoComplete="off"
                                    style={{ textTransform: 'uppercase' }}
                                />
                                <datalist id="geo-presets">
                                    {geoPresets.map((item) => (
                                        <option
                                            key={item.code}
                                            value={item.code}
                                            label={`${item.code} — ${item.name}`}
                                        />
                                    ))}
                                </datalist>
                            </div>
                            <div className="field">
                                <label htmlFor="lang">Мова ленду</label>
                                <select
                                    id="lang"
                                    value={data.lang}
                                    onChange={(e) => update('lang', e.target.value)}
                                    disabled={availableLanguages.length === 0}
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
                        <div className="field">
                            <label htmlFor="phone">Phone (CRM)</label>
                            <input
                                id="phone"
                                type="text"
                                value={data.phone}
                                onChange={(e) => update('phone', e.target.value.toLowerCase())}
                                placeholder="ie, gb, tr…"
                            />
                            <p className="field-hint">Авто з GEO, можна перевизначити (GE → ge, IE → ie)</p>
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
                            Патерн: SEO {data.geo} BRO {data.brand || '…'} ({new Date().toLocaleDateString('uk-UA')}) {data.domain || '…'}
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
                            <div className="summary-row"><span>GEO / мова</span><span>{data.geo} / {data.lang}</span></div>
                            <div className="summary-row"><span>Phone</span><span>{data.phone}</span></div>
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

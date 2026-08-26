import SecretInput from '@/Components/SecretInput';
import PanelLayout from '@/Layouts/PanelLayout';
import { Link, router, useForm, usePage } from '@inertiajs/react';
import axios from 'axios';
import { useEffect, useRef, useState } from 'react';

function formFromSettings(settings, userId = null) {
    return {
        user_id: userId ?? '',
        keitaro_url: settings.keitaro_url ?? '',
        keitaro_api_key: settings.keitaro_api_key ?? '',
        keitaro_group: settings.keitaro_group ?? '19',
        affiliate_tag: settings.affiliate_tag ?? 'BRO',
        crm_api_key: settings.crm_api_key ?? '',
        tg_bot_token: settings.tg_bot_token ?? '',
        tg_chat_id: settings.tg_chat_id ?? '',
        tg_group_chat_id: settings.tg_group_chat_id ?? '',
        deploy_driver: 'ubuntu',
        deploy_panel_name: settings.deploy_panel_name ?? '',
        deploy_host: settings.deploy_host ?? '',
        deploy_port: settings.deploy_port ?? 22,
        deploy_username: settings.deploy_username ?? '',
        deploy_password: settings.deploy_password ?? '',
        deploy_path_template: settings.deploy_path_template ?? '/var/www/offers/{domain}/public_html',
        dynadot_api_key: settings.dynadot_api_key ?? '',
        dynadot_api_secret: settings.dynadot_api_secret ?? '',
        dynadot_contact_id: settings.dynadot_contact_id ?? '',
        dynadot_account_name: settings.dynadot_account_name ?? '',
        cloudflare_api_token: settings.cloudflare_api_token ?? '',
        cloudflare_account_id: settings.cloudflare_account_id ?? '',
        cloudflare_default_proxied: settings.cloudflare_default_proxied ?? true,
        origin_health_alerts: settings.origin_health_alerts ?? true,
        cloudflare_account_name: settings.cloudflare_account_name ?? '',
        test_domain: 'reserve-safegrove-ie.com',
    };
}

const UBUNTU_PATH = '/var/www/offers/{domain}/public_html';

function healthLabel(status) {
    if (status === 'ok') {
        return 'OK';
    }
    if (status === 'degraded') {
        return 'Проблеми';
    }
    if (status === 'down') {
        return 'Не відповідає';
    }
    return 'Не перевірявся';
}

function formatCheckedAt(value) {
    if (!value) {
        return null;
    }

    const date = new Date(value);

    if (Number.isNaN(date.getTime())) {
        return value;
    }

    return date.toLocaleString('uk-UA', {
        day: '2-digit',
        month: '2-digit',
        hour: '2-digit',
        minute: '2-digit',
    });
}

export default function SettingsIndex({ settings, settingsUser, users = [] }) {
    const { errors: pageErrors } = usePage().props;
    const [originTest, setOriginTest] = useState(null);
    const [testingOrigin, setTestingOrigin] = useState(false);
    const [originHealth, setOriginHealth] = useState(settings.origin_health ?? { status: 'unchecked' });
    const [cloudflareTest, setCloudflareTest] = useState(null);
    const [testingCloudflare, setTestingCloudflare] = useState(false);
    const [dynadotBalance, setDynadotBalance] = useState(null);
    const [dynadotBalanceLoading, setDynadotBalanceLoading] = useState(false);
    const [dynadotBalanceError, setDynadotBalanceError] = useState('');
    const [uploadingGscVerification, setUploadingGscVerification] = useState(false);
    const gscVerificationInputRef = useRef(null);

    const { data, setData, patch, processing, errors, recentlySuccessful } = useForm(
        formFromSettings(settings, settingsUser.id),
    );

    const syncFromSettings = (nextSettings) => {
        const next = formFromSettings(nextSettings, settingsUser.id);
        Object.entries(next).forEach(([key, value]) => setData(key, value));
    };

    const changeSettingsUser = (userId) => {
        router.get(
            route('settings.index', userId ? { user: userId } : {}),
            {},
            { preserveState: false },
        );
    };

    const submit = (e) => {
        e.preventDefault();
        patch(route('settings.update'), {
            preserveScroll: true,
            onSuccess: (page) => {
                syncFromSettings(page.props.settings);
                if (page.props.settings?.origin_health) {
                    setOriginHealth(page.props.settings.origin_health);
                }
            },
        });
    };

    const testOrigin = async () => {
        setTestingOrigin(true);
        setOriginTest(null);

        try {
            const { data: result } = await axios.post(route('settings.test-origin'), data);
            setOriginTest(result);
            if (result.origin_health) {
                setOriginHealth(result.origin_health);
            }
        } catch (error) {
            setOriginTest({
                ok: false,
                status: 'down',
                message: error.response?.data?.message ?? 'Не вдалося перевірити сервер',
            });
        } finally {
            setTestingOrigin(false);
        }
    };

    const testCloudflare = async () => {
        setTestingCloudflare(true);
        setCloudflareTest(null);

        try {
            const { data: result } = await axios.post(route('settings.test-cloudflare'), data);
            setCloudflareTest(result);
        } catch (error) {
            setCloudflareTest({
                ok: false,
                message: error.response?.data?.message ?? 'Не вдалося перевірити Cloudflare API',
            });
        } finally {
            setTestingCloudflare(false);
        }
    };

    const loadDynadotBalance = async () => {
        if (!settings.has_dynadot_api_key) {
            return;
        }

        setDynadotBalanceLoading(true);
        setDynadotBalanceError('');

        try {
            const { data: result } = await axios.get(route('domains.balance'), {
                params: { user_id: settingsUser.id },
            });
            if (!result.ok) {
                setDynadotBalanceError(result.message ?? 'Не вдалося отримати баланс');
                return;
            }
            setDynadotBalance(result.balance ?? null);
        } catch (error) {
            setDynadotBalanceError(
                error.response?.data?.message ?? 'Не вдалося отримати баланс Dynadot',
            );
        } finally {
            setDynadotBalanceLoading(false);
        }
    };

    useEffect(() => {
        if (settings.has_dynadot_api_key) {
            loadDynadotBalance();
        }
    }, [settingsUser.id, settings.has_dynadot_api_key]);

    useEffect(() => {
        setOriginHealth(settings.origin_health ?? { status: 'unchecked' });
    }, [settingsUser.id]);

    const pickGscVerificationFile = () => {
        gscVerificationInputRef.current?.click();
    };

    const uploadGscVerificationFile = (event) => {
        const file = event.target.files?.[0];
        event.target.value = '';

        if (!file) {
            return;
        }

        setUploadingGscVerification(true);

        const formData = new FormData();
        formData.append('verification_file', file);
        formData.append('user_id', String(settingsUser.id));

        router.post(route('settings.gsc-verification.store'), formData, {
            forceFormData: true,
            preserveScroll: true,
            onFinish: () => setUploadingGscVerification(false),
        });
    };

    const removeGscVerificationFile = () => {
        if (!settings.has_gsc_verification_file) {
            return;
        }

        setUploadingGscVerification(true);
        router.delete(route('settings.gsc-verification.destroy'), {
            data: { user_id: settingsUser.id },
            preserveScroll: true,
            onFinish: () => setUploadingGscVerification(false),
        });
    };

    return (
        <PanelLayout title="Налаштування">
            <header className="page-header">
                <h2>Налаштування профілю</h2>
                <p>
                    {settingsUser.is_self
                        ? 'Загальні параметри для всіх ваших офферів — один раз, далі підставляються автоматично'
                        : `Налаштування користувача ${settingsUser.name ?? settingsUser.email}`}
                </p>
            </header>

            {users.length > 0 && (
                <div className="filter-bar" style={{ marginBottom: '1rem' }}>
                    <select
                        aria-label="Користувач"
                        value={String(settingsUser.id)}
                        onChange={(e) => changeSettingsUser(e.target.value)}
                    >
                        {users.map((user) => (
                            <option key={user.id} value={user.id}>
                                {user.name ?? user.email}
                            </option>
                        ))}
                    </select>
                    {!settingsUser.is_self && (
                        <Link href={route('offers.index', { user: settingsUser.id })} className="btn btn-ghost">
                            Оффери користувача
                        </Link>
                    )}
                </div>
            )}

            <form onSubmit={submit}>
                <section className="card">
                    <h3>Keitaro</h3>
                    <p className="card-desc">Трекер і Admin API для створення кампаній</p>
                    <div className="field">
                        <label htmlFor="kt-url">URL трекера</label>
                        <input
                            type="url"
                            id="kt-url"
                            value={data.keitaro_url}
                            onChange={(e) => setData('keitaro_url', e.target.value)}
                            placeholder="https://clickmetrics38.com"
                        />
                        {errors.keitaro_url && (
                            <p className="field-hint" style={{ color: '#f87171' }}>{errors.keitaro_url}</p>
                        )}
                    </div>
                    <div className="field">
                        <label htmlFor="kt-api">Admin API key</label>
                        <SecretInput
                            id="kt-api"
                            value={data.keitaro_api_key}
                            onChange={(e) => setData('keitaro_api_key', e.target.value)}
                            placeholder="API key з Keitaro"
                        />
                    </div>
                    <div className="field">
                        <label htmlFor="kt-group">ID групи кампаній</label>
                        <input
                            type="text"
                            id="kt-group"
                            value={data.keitaro_group}
                            onChange={(e) => setData('keitaro_group', e.target.value)}
                        />
                    </div>
                    {settings.sales_postback_url && (
                        <div className="field">
                            <label htmlFor="kt-s2s">S2S postback (деп → Telegram)</label>
                            <input
                                type="text"
                                id="kt-s2s"
                                readOnly
                                value={settings.sales_postback_url}
                                onFocus={(e) => e.target.select()}
                            />
                            <p className="field-hint">
                                Встав у Keitaro → кампанія → S2S Postbacks (GET, статус sale).
                                Нові кампанії з панелі підхоплюють це автоматично.
                                CRM шле payout → у TG прийде subid + сума.
                            </p>
                        </div>
                    )}
                </section>

                <section className="card">
                    <h3>Affiliate / CRM</h3>
                    <div className="field-row">
                        <div className="field">
                            <label htmlFor="aff-tag">Мітка affiliate</label>
                            <input
                                type="text"
                                id="aff-tag"
                                value={data.affiliate_tag}
                                onChange={(e) => setData('affiliate_tag', e.target.value)}
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="crm-key">CRM API key</label>
                            <SecretInput
                                id="crm-key"
                                value={data.crm_api_key}
                                onChange={(e) => setData('crm_api_key', e.target.value)}
                                placeholder="YourLeads API key"
                            />
                        </div>
                    </div>
                </section>

                <section className="card">
                    <h3>Telegram</h3>
                    <div className="field">
                        <label htmlFor="tg-token">Bot token</label>
                        <SecretInput
                            id="tg-token"
                            value={data.tg_bot_token}
                            onChange={(e) => setData('tg_bot_token', e.target.value)}
                            placeholder="123456:ABC..."
                        />
                    </div>
                    <div className="field">
                        <label htmlFor="tg-chat">Chat ID (особистий)</label>
                        <input
                            type="text"
                            id="tg-chat"
                            value={data.tg_chat_id}
                            onChange={(e) => setData('tg_chat_id', e.target.value)}
                            placeholder="123456789"
                        />
                    </div>
                    <div className="field">
                        <label htmlFor="tg-group-chat">Chat ID групи (опційно)</label>
                        <input
                            type="text"
                            id="tg-group-chat"
                            value={data.tg_group_chat_id}
                            onChange={(e) => setData('tg_group_chat_id', e.target.value)}
                            placeholder="-1001234567890"
                        />
                        <p className="field-hint">
                            Додайте бота в групу — ліди дублюватимуться туди. Якщо порожньо, лише в особистий чат.
                        </p>
                    </div>
                </section>

                <section className="card">
                    <h3>Dynadot (домени)</h3>
                    <p className="card-desc">API для пошуку та реєстрації доменів при створенні оффера</p>
                    <div className="field">
                        <label htmlFor="dynadot-account-name">Назва акаунта</label>
                        <input
                            type="text"
                            id="dynadot-account-name"
                            value={data.dynadot_account_name}
                            onChange={(e) => setData('dynadot_account_name', e.target.value)}
                            placeholder="DynadotEGO"
                        />
                        <p className="field-hint">
                            Коротка мітка для таблиці оферів (фіксується при створенні офера).
                        </p>
                    </div>
                    <div className="field">
                        <label htmlFor="dynadot-api-key">API key</label>
                        <SecretInput
                            id="dynadot-api-key"
                            value={data.dynadot_api_key}
                            onChange={(e) => setData('dynadot_api_key', e.target.value)}
                            placeholder="Dynadot API key"
                        />
                    </div>
                    <div className="field">
                        <label htmlFor="dynadot-contact">Contact ID</label>
                        <input
                            type="text"
                            id="dynadot-contact"
                            value={data.dynadot_contact_id}
                            onChange={(e) => setData('dynadot_contact_id', e.target.value)}
                            placeholder="1885528 (лише цифри, без C-)"
                        />
                        <p className="field-hint">
                            У Dynadot показується як C-1885528 — вставляйте лише <strong>1885528</strong>.
                        </p>
                    </div>
                    {settings.has_dynadot_api_key && (
                        <div className="domain-balance-row" style={{ marginTop: '0.75rem' }}>
                            <span className={`domain-balance${dynadotBalance?.low_balance ? ' is-low' : ''}`}>
                                {dynadotBalanceLoading
                                    ? 'Баланс Dynadot…'
                                    : dynadotBalance?.balances?.length
                                        ? `Баланс: ${dynadotBalance.balances.map((item) => `${item.amount} ${item.currency}`).join(', ')}`
                                        : 'Баланс: —'}
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
                    {dynadotBalance?.low_balance && (
                        <p className="field-hint field-hint--warn">
                            Баланс низький — поповніть Dynadot, щоб купувати домени.
                        </p>
                    )}
                    {dynadotBalanceError && (
                        <p className="field-hint" style={{ color: '#f87171' }}>{dynadotBalanceError}</p>
                    )}
                </section>

                <section className="card">
                    <h3>Cloudflare (DNS)</h3>
                    <p className="card-desc">API для DNS: зона, A-запис, NS у Dynadot при створенні оффера</p>
                    <div className="field">
                        <label htmlFor="cf-account-name">Назва акаунта</label>
                        <input
                            type="text"
                            id="cf-account-name"
                            value={data.cloudflare_account_name}
                            onChange={(e) => setData('cloudflare_account_name', e.target.value)}
                            placeholder="CloudflareEGO"
                        />
                        <p className="field-hint">
                            Коротка мітка для таблиці оферів (фіксується при створенні офера).
                        </p>
                    </div>
                    <div className="field">
                        <label htmlFor="cf-token">API token</label>
                        <SecretInput
                            id="cf-token"
                            value={data.cloudflare_api_token}
                            onChange={(e) => setData('cloudflare_api_token', e.target.value)}
                            placeholder="Cloudflare API token"
                        />
                    </div>
                    <div className="field">
                        <label htmlFor="cf-account">Account ID</label>
                        <input
                            type="text"
                            id="cf-account"
                            value={data.cloudflare_account_id}
                            onChange={(e) => setData('cloudflare_account_id', e.target.value)}
                        />
                    </div>
                    <label className="field-check" htmlFor="cf-proxied">
                        <input
                            id="cf-proxied"
                            type="checkbox"
                            checked={data.cloudflare_default_proxied}
                            onChange={(e) => setData('cloudflare_default_proxied', e.target.checked)}
                        />
                        <span>Proxied (помаранчева хмарка) за замовчуванням</span>
                    </label>
                    <div style={{ marginTop: '1rem' }}>
                        <button
                            type="button"
                            className="btn btn-ghost"
                            disabled={testingCloudflare}
                            onClick={testCloudflare}
                        >
                            {testingCloudflare ? 'Перевірка…' : 'Перевірити Cloudflare API'}
                        </button>
                    </div>
                    {cloudflareTest && (
                        <p
                            className="field-hint"
                            style={{
                                marginTop: '0.75rem',
                                color: cloudflareTest.ok ? 'var(--accent)' : '#f87171',
                            }}
                        >
                            {cloudflareTest.message}
                        </p>
                    )}
                </section>

                <section className="card">
                    <h3>Google Search Console</h3>
                    <p className="card-desc">
                        Файл <code>google….html</code> з GSC — один раз тут, далі автоматично додається до кожного нового оффера при генерації та деплої.
                    </p>
                    <input
                        ref={gscVerificationInputRef}
                        type="file"
                        accept=".html,text/html"
                        hidden
                        onChange={uploadGscVerificationFile}
                    />
                    <div className="verification-file">
                        {settings.has_gsc_verification_file ? (
                            <>
                                <span className="verification-file__link">{settings.gsc_verification_filename}</span>
                                <button
                                    type="button"
                                    className="verification-file__remove"
                                    disabled={uploadingGscVerification}
                                    onClick={removeGscVerificationFile}
                                    title="Видалити файл"
                                >
                                    ×
                                </button>
                            </>
                        ) : (
                            <button
                                type="button"
                                className="btn btn-ghost btn-sm verification-file__upload"
                                disabled={uploadingGscVerification}
                                onClick={pickGscVerificationFile}
                            >
                                {uploadingGscVerification ? 'Завантаження…' : 'Завантажити GSC файл'}
                            </button>
                        )}
                    </div>
                    {pageErrors?.gsc_verification && (
                        <p className="field-hint" style={{ color: '#f87171', marginTop: '0.5rem' }}>
                            {pageErrors.gsc_verification}
                        </p>
                    )}
                </section>

                <section className="card">
                    <div className="origin-health-head">
                        <div>
                            <h3>Server</h3>
                            <p className="card-desc">
                                SSH credentials for deploy and health checks.
                            </p>
                        </div>
                        <span className={`origin-health-badge origin-health-badge--${originHealth.status || 'unchecked'}`}>
                            {healthLabel(originHealth.status)}
                        </span>
                    </div>
                    <div className="field-row">
                        <div className="field">
                            <label htmlFor="deploy-host">SSH HOST / IP</label>
                            <input
                                type="text"
                                id="deploy-host"
                                value={data.deploy_host}
                                onChange={(e) => setData('deploy_host', e.target.value)}
                                placeholder="38.180.169.218"
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="deploy-port">PORT</label>
                            <input
                                type="number"
                                id="deploy-port"
                                value={data.deploy_port}
                                onChange={(e) => setData('deploy_port', Number(e.target.value))}
                            />
                        </div>
                    </div>
                    <div className="field-row">
                        <div className="field">
                            <label htmlFor="deploy-user">SSH USER</label>
                            <input
                                type="text"
                                id="deploy-user"
                                value={data.deploy_username}
                                onChange={(e) => setData('deploy_username', e.target.value)}
                                placeholder="root"
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="deploy-pass">SSH / SFTP PASSWORD</label>
                            <SecretInput
                                id="deploy-pass"
                                value={data.deploy_password}
                                onChange={(e) => setData('deploy_password', e.target.value)}
                                placeholder="SSH password"
                            />
                        </div>
                    </div>
                    <div className="btn-row" style={{ marginTop: '0.5rem' }}>
                        <button
                            type="button"
                            className="btn btn-primary"
                            disabled={testingOrigin}
                            onClick={testOrigin}
                        >
                            {testingOrigin ? 'Checking…' : 'Check server'}
                        </button>
                    </div>
                    <label className="field-check" htmlFor="origin-health-alerts" style={{ marginTop: '0.75rem' }}>
                        <input
                            id="origin-health-alerts"
                            type="checkbox"
                            checked={data.origin_health_alerts}
                            onChange={(e) => setData('origin_health_alerts', e.target.checked)}
                        />
                        <span>
                            Telegram-алерти при падінні origin (особистий чат + група)
                        </span>
                    </label>
                    <p className="field-hint" style={{ marginTop: '0.35rem' }}>
                        Використовуються TG Bot Token, Chat ID і Group Chat ID з цих налаштувань.
                        Вимкніть, якщо сервер ще не готовий (наприклад JEL).
                    </p>
                    {(originHealth.checked_at || originHealth.metrics) && (
                        <div className="origin-health-metrics">
                            {originHealth.checked_at && (
                                <p className="field-hint" style={{ margin: 0 }}>
                                    Last check: {formatCheckedAt(originHealth.checked_at)}
                                    {originHealth.message ? ` · ${originHealth.message}` : ''}
                                </p>
                            )}
                            {originHealth.metrics && (
                                <dl className="origin-health-grid">
                                    <div>
                                        <dt>SSH</dt>
                                        <dd>
                                            {originHealth.metrics.ssh_ok ? 'ok' : 'fail'}
                                            {originHealth.metrics.ssh_ms != null ? ` ${originHealth.metrics.ssh_ms} ms` : ''}
                                        </dd>
                                    </div>
                                    <div>
                                        <dt>HTTP</dt>
                                        <dd>
                                            {originHealth.metrics.http_ok ? 'ok' : 'fail'}
                                            {originHealth.metrics.http_status ? ` ${originHealth.metrics.http_status}` : ''}
                                            {originHealth.metrics.http_ms != null ? ` ${originHealth.metrics.http_ms} ms` : ''}
                                        </dd>
                                    </div>
                                    <div>
                                        <dt>Load</dt>
                                        <dd>
                                            {originHealth.metrics.load?.['1'] != null
                                                ? `${originHealth.metrics.load['1']} / ${originHealth.metrics.load['5'] ?? '—'} / ${originHealth.metrics.load['15'] ?? '—'}`
                                                : '—'}
                                        </dd>
                                    </div>
                                    <div>
                                        <dt>RAM</dt>
                                        <dd>
                                            {originHealth.metrics.ram_used_mb != null
                                                ? `${originHealth.metrics.ram_used_mb} / ${originHealth.metrics.ram_total_mb} MB (${originHealth.metrics.ram_pct}%)`
                                                : '—'}
                                        </dd>
                                    </div>
                                    <div>
                                        <dt>Disk /</dt>
                                        <dd>
                                            {originHealth.metrics.disk_root_pct != null
                                                ? `${originHealth.metrics.disk_root_pct}% · free ${originHealth.metrics.disk_root_free_gb ?? '—'} GB`
                                                : '—'}
                                        </dd>
                                    </div>
                                    <div>
                                        <dt>Disk /var/www</dt>
                                        <dd>
                                            {originHealth.metrics.disk_www_pct != null
                                                ? `${originHealth.metrics.disk_www_pct}% · free ${originHealth.metrics.disk_www_free_gb ?? '—'} GB`
                                                : '—'}
                                        </dd>
                                    </div>
                                    <div>
                                        <dt>nginx</dt>
                                        <dd>{originHealth.metrics.nginx ?? '—'}</dd>
                                    </div>
                                    <div>
                                        <dt>php-fpm</dt>
                                        <dd>{originHealth.metrics.php_fpm ?? '—'}</dd>
                                    </div>
                                </dl>
                            )}
                        </div>
                    )}
                    {originTest && (
                        <p
                            className="field-hint"
                            style={{
                                marginTop: '0.75rem',
                                color: originTest.status === 'ok' ? 'var(--accent)' : originTest.status === 'degraded' ? '#f59e0b' : '#f87171',
                            }}
                        >
                            {originTest.message}
                        </p>
                    )}
                </section>

                <div className="btn-row">
                    <button type="submit" className="btn btn-primary" disabled={processing}>
                        {processing ? 'Збереження…' : 'Зберегти налаштування'}
                    </button>
                    <Link href={route('offers.create', { fresh: 1 })} className="btn btn-ghost">
                        Далі: створити оффер →
                    </Link>
                </div>

                {recentlySuccessful && (
                    <p className="field-hint" style={{ color: 'var(--accent)', marginTop: '1rem' }}>
                        Збережено
                    </p>
                )}
            </form>
        </PanelLayout>
    );
}

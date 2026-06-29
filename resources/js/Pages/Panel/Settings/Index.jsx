import PanelLayout from '@/Layouts/PanelLayout';
import { Link, useForm } from '@inertiajs/react';
import axios from 'axios';
import { useState } from 'react';

const MASK = '••••••••••••••••';

export default function SettingsIndex({ settings }) {
    const [deployTest, setDeployTest] = useState(null);
    const [testingDeploy, setTestingDeploy] = useState(false);

    const { data, setData, patch, processing, errors, recentlySuccessful } = useForm({
        keitaro_url: settings.keitaro_url ?? '',
        keitaro_api_key: settings.has_keitaro_api_key ? MASK : '',
        keitaro_group: settings.keitaro_group ?? '51',
        affiliate_tag: settings.affiliate_tag ?? 'BRO',
        crm_api_key: settings.has_crm_api_key ? MASK : '',
        tg_bot_token: settings.has_tg_bot_token ? MASK : '',
        tg_chat_id: settings.tg_chat_id ?? '',
        deploy_panel_name: settings.deploy_panel_name ?? 'Hestia',
        deploy_host: settings.deploy_host ?? '',
        deploy_port: settings.deploy_port ?? 22,
        deploy_username: settings.deploy_username ?? '',
        deploy_password: settings.has_deploy_password ? MASK : '',
        deploy_path_template: settings.deploy_path_template ?? '/home/{user}/web/{domain}/public_html',
        deploy_panel_url: settings.deploy_panel_url ?? '',
        test_domain: 'reserve-safegrove-ie.com',
    });

    const submit = (e) => {
        e.preventDefault();
        patch(route('settings.update'), { preserveScroll: true });
    };

    const testDeploy = async () => {
        setTestingDeploy(true);
        setDeployTest(null);

        try {
            const { data: result } = await axios.post(route('settings.test-deploy'), data);
            setDeployTest(result);
        } catch (error) {
            setDeployTest({
                ok: false,
                message: error.response?.data?.message ?? 'Не вдалося перевірити зʼєднання',
            });
        } finally {
            setTestingDeploy(false);
        }
    };

    return (
        <PanelLayout title="Налаштування">
            <header className="page-header">
                <h2>Налаштування профілю</h2>
                <p>Загальні параметри для всіх офферів — один раз, далі підставляються автоматично</p>
            </header>

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
                        <input
                            type="password"
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
                            <input
                                type="password"
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
                        <input
                            type="password"
                            id="tg-token"
                            value={data.tg_bot_token}
                            onChange={(e) => setData('tg_bot_token', e.target.value)}
                            placeholder="123456:ABC..."
                        />
                    </div>
                    <div className="field">
                        <label htmlFor="tg-chat">Chat ID</label>
                        <input
                            type="text"
                            id="tg-chat"
                            value={data.tg_chat_id}
                            onChange={(e) => setData('tg_chat_id', e.target.value)}
                        />
                    </div>
                </section>

                <section className="card">
                    <h3>Деплой на Hestia</h3>
                    <p className="card-desc">
                        SFTP-заливка в <code>public_html</code> домена. Панель — для довідки; заливка через SSH/SFTP.
                    </p>
                    <div className="field-row">
                        <div className="field">
                            <label htmlFor="deploy-name">Назва панелі</label>
                            <input
                                type="text"
                                id="deploy-name"
                                value={data.deploy_panel_name}
                                onChange={(e) => setData('deploy_panel_name', e.target.value)}
                                placeholder="Hestia main"
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="deploy-panel-url">URL панелі</label>
                            <input
                                type="url"
                                id="deploy-panel-url"
                                value={data.deploy_panel_url}
                                onChange={(e) => setData('deploy_panel_url', e.target.value)}
                                placeholder="https://176.126.86.35:8083"
                            />
                        </div>
                    </div>
                    <div className="field-row">
                        <div className="field">
                            <label htmlFor="deploy-host">SSH / SFTP host</label>
                            <input
                                type="text"
                                id="deploy-host"
                                value={data.deploy_host}
                                onChange={(e) => setData('deploy_host', e.target.value)}
                                placeholder="176.126.86.35"
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="deploy-port">Порт</label>
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
                            <label htmlFor="deploy-user">Користувач SFTP (Hestia user)</label>
                            <input
                                type="text"
                                id="deploy-user"
                                value={data.deploy_username}
                                onChange={(e) => setData('deploy_username', e.target.value)}
                                placeholder="user"
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="deploy-pass">Пароль SFTP</label>
                            <input
                                type="password"
                                id="deploy-pass"
                                value={data.deploy_password}
                                onChange={(e) => setData('deploy_password', e.target.value)}
                                placeholder="пароль користувача Hestia"
                            />
                        </div>
                    </div>
                    <div className="field">
                        <label htmlFor="deploy-path">Шаблон шляху на сервері</label>
                        <input
                            type="text"
                            id="deploy-path"
                            value={data.deploy_path_template}
                            onChange={(e) => setData('deploy_path_template', e.target.value)}
                        />
                        <p className="field-hint">
                            Плейсхолдери: <code>{'{user}'}</code>, <code>{'{domain}'}</code>
                        </p>
                    </div>
                    <div className="field">
                        <label htmlFor="test-domain">Домен для перевірки</label>
                        <input
                            type="text"
                            id="test-domain"
                            value={data.test_domain}
                            onChange={(e) => setData('test_domain', e.target.value)}
                            placeholder="reserve-safegrove-ie.com"
                        />
                    </div>
                    <div className="btn-row" style={{ marginTop: '0.5rem' }}>
                        <button
                            type="button"
                            className="btn btn-ghost"
                            disabled={testingDeploy}
                            onClick={testDeploy}
                        >
                            {testingDeploy ? 'Перевірка…' : 'Перевірити SFTP'}
                        </button>
                    </div>
                    {deployTest && (
                        <p
                            className="field-hint"
                            style={{
                                marginTop: '0.75rem',
                                color: deployTest.ok ? 'var(--accent)' : '#f87171',
                            }}
                        >
                            {deployTest.message}
                            {deployTest.path && (
                                <>
                                    <br />
                                    <code>{deployTest.path}</code>
                                </>
                            )}
                            {deployTest.files?.length > 0 && (
                                <>
                                    <br />
                                    Файли: {deployTest.files.join(', ')}
                                </>
                            )}
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

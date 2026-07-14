<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingsRequest;
use App\Models\User;
use App\Models\UserSetting;
use App\Services\DeployConnection;
use App\Services\DynadotClient;
use App\Services\HestiaClient;
use App\Support\SecretValue;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class SettingsController extends Controller
{
    public function index(): Response
    {
        $authUser = auth()->user();
        $targetUser = $this->resolveSettingsUser($authUser);
        $settings = $targetUser->settings;

        return Inertia::render('Panel/Settings/Index', [
            'settings' => $settings
                ? $settings->toEditArray()
                : (new UserSetting)->toEditArray(),
            'settingsUser' => [
                'id' => $targetUser->id,
                'name' => $targetUser->name,
                'email' => $targetUser->email,
                'is_self' => $targetUser->id === $authUser->id,
            ],
            'users' => $authUser->isAdmin()
                ? User::query()->orderBy('name')->get(['id', 'name', 'email'])
                : [],
        ]);
    }

    public function update(UpdateSettingsRequest $request): RedirectResponse
    {
        $authUser = $request->user();
        $targetUser = $this->resolveSettingsUser($authUser, $request->integer('user_id') ?: null);

        $settings = $targetUser->settings()->firstOrCreate([]);
        $data = $request->validated();

        $settings->fill([
            'keitaro_url' => $data['keitaro_url'] ?? $settings->keitaro_url,
            'keitaro_group_id' => $data['keitaro_group'] ?? $settings->keitaro_group_id ?? '51',
            'affiliate_tag' => $data['affiliate_tag'] ?? $settings->affiliate_tag ?? 'BRO',
            'tg_chat_id' => $data['tg_chat_id'] ?? $settings->tg_chat_id,
            'tg_group_chat_id' => $data['tg_group_chat_id'] ?? $settings->tg_group_chat_id,
            'deploy_panel_name' => $data['deploy_panel_name'] ?? $settings->deploy_panel_name ?? 'Hestia',
            'deploy_host' => $data['deploy_host'] ?? $settings->deploy_host,
            'deploy_port' => $data['deploy_port'] ?? $settings->deploy_port ?? 22,
            'deploy_username' => $data['deploy_username'] ?? $settings->deploy_username,
            'deploy_path_template' => $data['deploy_path_template'] ?? $settings->deploy_path_template,
            'deploy_panel_url' => $data['deploy_panel_url'] ?? $settings->deploy_panel_url,
            'deploy_api_access_key' => trim((string) ($data['deploy_api_access_key'] ?? '')) ?: null,
            'dynadot_contact_id' => DynadotClient::normalizeContactId(
                (string) ($data['dynadot_contact_id'] ?? $settings->dynadot_contact_id ?? ''),
            ) ?: null,
            'dynadot_sandbox' => $request->boolean('dynadot_sandbox'),
            'dynadot_default_years' => (int) ($data['dynadot_default_years'] ?? $settings->dynadot_default_years ?? 1),
            'cloudflare_account_id' => $data['cloudflare_account_id'] ?? $settings->cloudflare_account_id,
            'cloudflare_default_proxied' => $request->boolean('cloudflare_default_proxied'),
        ]);

        $this->assignSecret($settings, 'keitaro_api_key', $data['keitaro_api_key'] ?? null);
        $this->assignSecret($settings, 'crm_api_key', $data['crm_api_key'] ?? null);
        $this->assignSecret($settings, 'tg_bot_token', $data['tg_bot_token'] ?? null);
        $this->assignSecret($settings, 'deploy_password', $data['deploy_password'] ?? null);
        $this->assignSecret($settings, 'deploy_api_secret_key', $data['deploy_api_secret_key'] ?? null);
        $this->assignSecret($settings, 'dynadot_api_key', $data['dynadot_api_key'] ?? null);
        $this->assignSecret($settings, 'dynadot_api_secret', $data['dynadot_api_secret'] ?? null);
        $this->assignSecret($settings, 'cloudflare_api_token', $data['cloudflare_api_token'] ?? null);

        $settings->save();

        $redirect = redirect()->route('settings.index');

        if ($authUser->isAdmin() && $targetUser->id !== $authUser->id) {
            $redirect = redirect()->route('settings.index', ['user' => $targetUser->id]);
        }

        return $redirect->with('success', 'Налаштування збережено');
    }

    public function testDeploy(UpdateSettingsRequest $request, DeployConnection $deploy): JsonResponse
    {
        $authUser = $request->user();
        $targetUser = $this->resolveSettingsUser($authUser, $request->integer('user_id') ?: null);
        $settings = $targetUser->settings;
        $data = $request->validated();

        $password = trim((string) ($data['deploy_password'] ?? ''));

        if ($password === '') {
            return response()->json([
                'ok' => false,
                'message' => 'Вкажіть пароль SFTP (або збережіть його в налаштуваннях).',
            ]);
        }

        $result = $deploy->test([
            'host' => $data['deploy_host'] ?? $settings?->deploy_host ?? '',
            'port' => (int) ($data['deploy_port'] ?? $settings?->deploy_port ?? 22),
            'username' => $data['deploy_username'] ?? $settings?->deploy_username ?? '',
            'password' => $password,
            'path_template' => $data['deploy_path_template'] ?? $settings?->deploy_path_template,
        ], $data['test_domain'] ?? 'reserve-safegrove-ie.com');

        return response()->json($result);
    }

    public function testHestiaApi(UpdateSettingsRequest $request, HestiaClient $hestia): JsonResponse
    {
        $authUser = $request->user();
        $targetUser = $this->resolveSettingsUser($authUser, $request->integer('user_id') ?: null);
        $settings = $targetUser->settings;
        $data = $request->validated();

        if (! $settings) {
            return response()->json([
                'ok' => false,
                'message' => 'Спочатку збережіть налаштування деплою.',
            ]);
        }

        $settings->fill([
            'deploy_host' => $data['deploy_host'] ?? $settings->deploy_host,
            'deploy_username' => $data['deploy_username'] ?? $settings->deploy_username,
            'deploy_panel_url' => $data['deploy_panel_url'] ?? $settings->deploy_panel_url,
            'deploy_api_access_key' => trim((string) ($data['deploy_api_access_key'] ?? '')) ?: null,
        ]);
        $this->assignSecret($settings, 'deploy_api_secret_key', $data['deploy_api_secret_key'] ?? null);
        $this->assignSecret($settings, 'deploy_password', $data['deploy_password'] ?? null);

        return response()->json($hestia->testConnection($settings));
    }

    private function resolveSettingsUser(User $authUser, ?int $userId = null): User
    {
        if ($authUser->isAdmin()) {
            $selectedId = $userId ?? request()->integer('user');

            if ($selectedId > 0) {
                return User::query()->findOrFail($selectedId);
            }
        }

        return $authUser;
    }

    private function assignSecret(UserSetting $settings, string $field, ?string $value): void
    {
        $normalized = SecretValue::normalize((string) $value);

        $settings->{$field} = $normalized === '' ? null : $normalized;
    }
}

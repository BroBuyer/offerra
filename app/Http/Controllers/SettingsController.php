<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingsRequest;
use App\Models\User;
use App\Models\UserSetting;
use App\Services\CloudflareClient;
use App\Services\DynadotClient;
use App\Services\OfferVerificationFileService;
use App\Services\OriginHealthMonitor;
use App\Services\SalesPostbackService;
use App\Support\DeployDriver;
use App\Support\SecretValue;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class SettingsController extends Controller
{
    public function index(SalesPostbackService $postbacks): Response
    {
        $authUser = auth()->user();
        $targetUser = $this->resolveSettingsUser($authUser);
        $settings = $targetUser->settings()->firstOrCreate([]);

        $salesPostbackUrl = $postbacks->postbackUrl($settings);
        $settings->refresh();

        return Inertia::render('Panel/Settings/Index', [
            'settings' => array_merge($settings->toEditArray(), [
                'sales_postback_url' => $salesPostbackUrl,
            ]),
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
            'keitaro_group_id' => $data['keitaro_group'] ?? $settings->keitaro_group_id ?? '19',
            'affiliate_tag' => $data['affiliate_tag'] ?? $settings->affiliate_tag ?? 'BRO',
            'tg_chat_id' => $data['tg_chat_id'] ?? $settings->tg_chat_id,
            'tg_group_chat_id' => $data['tg_group_chat_id'] ?? $settings->tg_group_chat_id,
            'deploy_host' => $data['deploy_host'] ?? $settings->deploy_host,
            'deploy_port' => $data['deploy_port'] ?? $settings->deploy_port ?? 22,
            'deploy_username' => $data['deploy_username'] ?? $settings->deploy_username,
            'deploy_panel_name' => trim((string) ($data['deploy_host'] ?? $settings->deploy_host ?? '')),
            'dynadot_contact_id' => DynadotClient::normalizeContactId(
                (string) ($data['dynadot_contact_id'] ?? $settings->dynadot_contact_id ?? ''),
            ) ?: null,
            'dynadot_sandbox' => false,
            'dynadot_default_years' => 1,
            'dynadot_account_name' => trim((string) ($data['dynadot_account_name'] ?? '')) ?: null,
            'cloudflare_account_id' => $data['cloudflare_account_id'] ?? $settings->cloudflare_account_id,
            'cloudflare_default_proxied' => $request->boolean('cloudflare_default_proxied'),
            'origin_health_alerts' => $request->boolean('origin_health_alerts'),
            'cloudflare_account_name' => trim((string) ($data['cloudflare_account_name'] ?? '')) ?: null,
        ]);

        $this->assignSecret($settings, 'keitaro_api_key', $data['keitaro_api_key'] ?? null);
        $this->assignSecret($settings, 'crm_api_key', $data['crm_api_key'] ?? null);
        $this->assignSecret($settings, 'tg_bot_token', $data['tg_bot_token'] ?? null);
        $this->assignSecret($settings, 'deploy_password', $data['deploy_password'] ?? null);
        $this->assignSecret($settings, 'dynadot_api_key', $data['dynadot_api_key'] ?? null);
        $this->assignSecret($settings, 'dynadot_api_secret', $data['dynadot_api_secret'] ?? null);
        $this->assignSecret(
            $settings,
            'cloudflare_api_token',
            CloudflareClient::normalizeApiToken($data['cloudflare_api_token'] ?? null),
        );

        $settings->save();

        $redirect = redirect()->route('settings.index');

        if ($authUser->isAdmin() && $targetUser->id !== $authUser->id) {
            $redirect = redirect()->route('settings.index', ['user' => $targetUser->id]);
        }

        return $redirect->with('success', 'Налаштування збережено');
    }

    public function testOrigin(UpdateSettingsRequest $request, OriginHealthMonitor $monitor): JsonResponse
    {
        $authUser = $request->user();
        $targetUser = $this->resolveSettingsUser($authUser, $request->integer('user_id') ?: null);
        $settings = $targetUser->settings;
        $data = $request->validated();

        if (! $settings) {
            return response()->json([
                'ok' => false,
                'status' => 'unchecked',
                'message' => 'Спочатку збережіть host, користувача і пароль SSH.',
            ]);
        }

        $settings->fill([
            'deploy_host' => $data['deploy_host'] ?? $settings->deploy_host,
            'deploy_port' => $data['deploy_port'] ?? $settings->deploy_port ?? 22,
            'deploy_username' => $data['deploy_username'] ?? $settings->deploy_username,
            'deploy_path_template' => $data['deploy_path_template'] ?? $settings->deploy_path_template,
            'deploy_driver' => DeployDriver::normalize($data['deploy_driver'] ?? $settings->deploy_driver),
        ]);

        $password = SecretValue::normalize((string) ($data['deploy_password'] ?? ''));

        if ($password === '') {
            $password = (string) ($settings->deploy_password ?? '');
        }

        if (trim((string) $settings->deploy_host) === '' || trim((string) $settings->deploy_username) === '' || $password === '') {
            return response()->json([
                'ok' => false,
                'status' => 'unchecked',
                'message' => 'Вкажіть host, користувача і пароль SSH (або збережіть їх).',
            ]);
        }

        $result = $monitor->check($settings, false, $password);

        return response()->json([
            'ok' => (bool) ($result['ok'] ?? false),
            'status' => $result['status'] ?? 'unchecked',
            'message' => $result['message'] ?? '',
            'issues' => $result['issues'] ?? [],
            'ssh' => $result['ssh'] ?? null,
            'http' => $result['http'] ?? null,
            'metrics' => $result['metrics'] ?? null,
            'origin_health' => $result['origin_health'] ?? $settings->originHealthForPanel(),
        ]);
    }

    public function testCloudflare(UpdateSettingsRequest $request, CloudflareClient $cloudflare): JsonResponse
    {
        $authUser = $request->user();
        $targetUser = $this->resolveSettingsUser($authUser, $request->integer('user_id') ?: null);
        $settings = $targetUser->settings;
        $data = $request->validated();

        if (! $settings) {
            return response()->json([
                'ok' => false,
                'message' => 'Спочатку збережіть налаштування.',
            ]);
        }

        $token = CloudflareClient::normalizeApiToken($data['cloudflare_api_token'] ?? $settings->cloudflare_api_token);

        if ($token === '') {
            return response()->json([
                'ok' => false,
                'message' => 'Вкажіть Cloudflare API token (або збережіть його в налаштуваннях).',
            ]);
        }

        $settings->cloudflare_api_token = $token;
        $settings->cloudflare_account_id = trim((string) (
            $data['cloudflare_account_id'] ?? $settings->cloudflare_account_id ?? ''
        )) ?: null;

        return response()->json($cloudflare->testConnection($settings));
    }

    public function storeGscVerification(
        UpdateSettingsRequest $request,
        OfferVerificationFileService $verification,
    ): RedirectResponse {
        $authUser = $request->user();
        $targetUser = $this->resolveSettingsUser($authUser, $request->integer('user_id') ?: null);
        $settings = $targetUser->settings()->firstOrCreate([]);

        $request->validate([
            'verification_file' => ['required', 'file', 'max:64'],
        ]);

        try {
            $filename = $verification->storeForUser($settings, $request->file('verification_file'));
        } catch (\InvalidArgumentException $e) {
            return redirect()
                ->back()
                ->withErrors(['gsc_verification' => $e->getMessage()]);
        }

        $redirect = redirect()->route('settings.index');

        if ($authUser->isAdmin() && $targetUser->id !== $authUser->id) {
            $redirect = redirect()->route('settings.index', ['user' => $targetUser->id]);
        }

        return $redirect->with('success', "Файл GSC збережено: {$filename}");
    }

    public function destroyGscVerification(
        UpdateSettingsRequest $request,
        OfferVerificationFileService $verification,
    ): RedirectResponse {
        $authUser = $request->user();
        $targetUser = $this->resolveSettingsUser($authUser, $request->integer('user_id') ?: null);
        $settings = $targetUser->settings;

        if ($settings && filled($settings->gsc_verification_filename)) {
            $verification->deleteForUser($settings);
        }

        $redirect = redirect()->route('settings.index');

        if ($authUser->isAdmin() && $targetUser->id !== $authUser->id) {
            $redirect = redirect()->route('settings.index', ['user' => $targetUser->id]);
        }

        return $redirect->with('success', 'Файл GSC видалено');
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

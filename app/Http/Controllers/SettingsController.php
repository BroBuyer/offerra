<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingsRequest;
use App\Models\UserSetting;
use App\Services\DeployConnection;
use App\Support\SecretValue;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class SettingsController extends Controller
{
    public function index(): Response
    {
        $settings = auth()->user()->settings;

        return Inertia::render('Panel/Settings/Index', [
            'settings' => $settings
                ? $settings->toEditArray()
                : (new UserSetting)->toEditArray(),
        ]);
    }

    public function update(UpdateSettingsRequest $request): RedirectResponse
    {
        $settings = $request->user()->settings()->firstOrCreate([]);
        $data = $request->validated();

        $settings->fill([
            'keitaro_url' => $data['keitaro_url'] ?? $settings->keitaro_url,
            'keitaro_group_id' => $data['keitaro_group'] ?? $settings->keitaro_group_id ?? '51',
            'affiliate_tag' => $data['affiliate_tag'] ?? $settings->affiliate_tag ?? 'BRO',
            'tg_chat_id' => $data['tg_chat_id'] ?? $settings->tg_chat_id,
            'deploy_panel_name' => $data['deploy_panel_name'] ?? $settings->deploy_panel_name ?? 'Hestia',
            'deploy_host' => $data['deploy_host'] ?? $settings->deploy_host,
            'deploy_port' => $data['deploy_port'] ?? $settings->deploy_port ?? 22,
            'deploy_username' => $data['deploy_username'] ?? $settings->deploy_username,
            'deploy_path_template' => $data['deploy_path_template'] ?? $settings->deploy_path_template,
            'deploy_panel_url' => $data['deploy_panel_url'] ?? $settings->deploy_panel_url,
        ]);

        $this->mergeSecret($settings, 'keitaro_api_key', $data['keitaro_api_key'] ?? null);
        $this->mergeSecret($settings, 'crm_api_key', $data['crm_api_key'] ?? null);
        $this->mergeSecret($settings, 'tg_bot_token', $data['tg_bot_token'] ?? null);
        $this->mergeSecret($settings, 'deploy_password', $data['deploy_password'] ?? null);

        $settings->save();

        return redirect()
            ->route('settings.index')
            ->with('success', 'Налаштування збережено');
    }

    public function testDeploy(UpdateSettingsRequest $request, DeployConnection $deploy): JsonResponse
    {
        $settings = $request->user()->settings;
        $data = $request->validated();

        $password = $data['deploy_password'] ?? null;

        if (! filled(trim((string) $password)) && $settings) {
            $password = $settings->deploy_password;
        }

        if (! filled($password)) {
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

    private function mergeSecret(UserSetting $settings, string $field, ?string $value): void
    {
        if ($value === null || trim($value) === '') {
            return;
        }

        $settings->{$field} = SecretValue::normalize($value);
    }
}

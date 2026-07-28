<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
{
    public function authorize(): bool
    {
        $user = $this->user();

        if (! $user) {
            return false;
        }

        if (! $this->filled('user_id')) {
            return true;
        }

        $requestedUserId = $this->integer('user_id');

        if ($user->isAdmin()) {
            return User::query()->whereKey($requestedUserId)->exists();
        }

        return $requestedUserId === (int) $user->id;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['nullable', 'integer', 'exists:users,id'],
            'keitaro_url' => ['nullable', 'url', 'max:255'],
            'keitaro_api_key' => ['nullable', 'string', 'max:255'],
            'keitaro_group' => ['nullable', 'string', 'max:20'],
            'affiliate_tag' => ['nullable', 'string', 'max:50'],
            'crm_api_key' => ['nullable', 'string', 'max:255'],
            'tg_bot_token' => ['nullable', 'string', 'max:255'],
            'tg_chat_id' => ['nullable', 'string', 'max:50'],
            'tg_group_chat_id' => ['nullable', 'string', 'max:50'],
            'deploy_panel_name' => ['nullable', 'string', 'max:80'],
            'deploy_host' => ['nullable', 'string', 'max:255'],
            'deploy_port' => ['nullable', 'integer', 'min:1', 'max:65535'],
            'deploy_username' => ['nullable', 'string', 'max:80'],
            'deploy_password' => ['nullable', 'string', 'max:255'],
            'deploy_path_template' => ['nullable', 'string', 'max:255'],
            'deploy_panel_url' => ['nullable', 'url', 'max:255'],
            'deploy_api_access_key' => ['nullable', 'string', 'max:40'],
            'deploy_api_secret_key' => ['nullable', 'string', 'max:80'],
            'dynadot_api_key' => ['nullable', 'string', 'max:255'],
            'dynadot_api_secret' => ['nullable', 'string', 'max:255'],
            'dynadot_contact_id' => ['nullable', 'string', 'max:40'],
            'dynadot_account_name' => ['nullable', 'string', 'max:80'],
            'cloudflare_api_token' => ['nullable', 'string', 'max:255'],
            'cloudflare_account_id' => ['nullable', 'string', 'max:40'],
            'cloudflare_default_proxied' => ['boolean'],
            'cloudflare_account_name' => ['nullable', 'string', 'max:80'],
            'test_domain' => ['nullable', 'string', 'max:120'],
        ];
    }
}

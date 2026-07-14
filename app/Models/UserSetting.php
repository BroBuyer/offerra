<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserSetting extends Model
{
    protected $fillable = [
        'user_id',
        'keitaro_url',
        'keitaro_api_key',
        'keitaro_group_id',
        'affiliate_tag',
        'crm_api_key',
        'tg_bot_token',
        'tg_chat_id',
        'tg_group_chat_id',
        'deploy_panel_name',
        'deploy_host',
        'deploy_port',
        'deploy_username',
        'deploy_password',
        'deploy_path_template',
        'deploy_panel_url',
        'deploy_api_access_key',
        'deploy_api_secret_key',
        'dynadot_api_key',
        'dynadot_api_secret',
        'dynadot_contact_id',
        'dynadot_sandbox',
        'dynadot_default_years',
        'cloudflare_api_token',
        'cloudflare_account_id',
        'cloudflare_default_proxied',
    ];

    protected function casts(): array
    {
        return [
            'keitaro_api_key' => 'encrypted',
            'crm_api_key' => 'encrypted',
            'tg_bot_token' => 'encrypted',
            'deploy_password' => 'encrypted',
            'deploy_api_secret_key' => 'encrypted',
            'dynadot_api_key' => 'encrypted',
            'dynadot_api_secret' => 'encrypted',
            'cloudflare_api_token' => 'encrypted',
            'deploy_port' => 'integer',
            'dynadot_sandbox' => 'boolean',
            'dynadot_default_years' => 'integer',
            'cloudflare_default_proxied' => 'boolean',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return array<string, mixed>
     */
    public function toPanelArray(): array
    {
        return [
            'keitaro_url' => $this->keitaro_url ?? 'https://clickmetrics38.com',
            'keitaro_group' => $this->keitaro_group_id ?? '51',
            'affiliate_tag' => $this->affiliate_tag ?? 'BRO',
            'tg_chat_id' => $this->tg_chat_id ?? '',
            'tg_group_chat_id' => $this->tg_group_chat_id ?? '',
            'has_keitaro_api_key' => filled($this->keitaro_api_key),
            'has_crm_api_key' => filled($this->crm_api_key),
            'has_tg_bot_token' => filled($this->tg_bot_token),
            'deploy_panel_name' => $this->deploy_panel_name ?? 'Hestia',
            'deploy_host' => $this->deploy_host ?? '',
            'deploy_port' => $this->deploy_port ?? 22,
            'deploy_username' => $this->deploy_username ?? '',
            'deploy_path_template' => $this->deploy_path_template ?? '/home/{user}/web/{domain}/public_html',
            'deploy_panel_url' => $this->deploy_panel_url ?? '',
            'has_deploy_password' => filled($this->deploy_password),
            'deploy_api_access_key' => $this->deploy_api_access_key ?? '',
            'has_deploy_api_secret_key' => filled($this->deploy_api_secret_key),
            'has_dynadot_api_key' => filled($this->dynadot_api_key),
            'has_dynadot_contact_id' => filled($this->dynadot_contact_id),
            'dynadot_contact_id' => $this->dynadot_contact_id ?? '',
            'dynadot_sandbox' => (bool) ($this->dynadot_sandbox ?? false),
            'dynadot_default_years' => (int) ($this->dynadot_default_years ?? 1),
            'has_cloudflare_api_token' => filled($this->cloudflare_api_token),
            'cloudflare_account_id' => $this->cloudflare_account_id ?? '',
            'cloudflare_default_proxied' => (bool) ($this->cloudflare_default_proxied ?? true),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toEditArray(): array
    {
        return array_merge($this->toPanelArray(), [
            'keitaro_api_key' => $this->keitaro_api_key ?? '',
            'crm_api_key' => $this->crm_api_key ?? '',
            'tg_bot_token' => $this->tg_bot_token ?? '',
            'deploy_password' => $this->deploy_password ?? '',
            'deploy_api_secret_key' => $this->deploy_api_secret_key ?? '',
            'dynadot_api_key' => $this->dynadot_api_key ?? '',
            'dynadot_api_secret' => $this->dynadot_api_secret ?? '',
            'cloudflare_api_token' => $this->cloudflare_api_token ?? '',
        ]);
    }
}

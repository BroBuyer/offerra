<?php

namespace App\Models;

use App\Services\CloudflareClient;
use App\Support\DeployDriver;
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
        'mirror_probe_token',
        'sales_postback_token',
        'deploy_driver',
        'deploy_panel_name',
        'deploy_host',
        'deploy_port',
        'deploy_username',
        'deploy_password',
        'deploy_path_template',
        'origin_health',
        'origin_health_alerts',
        'dynadot_api_key',
        'dynadot_api_secret',
        'dynadot_contact_id',
        'dynadot_sandbox',
        'dynadot_default_years',
        'dynadot_account_name',
        'cloudflare_api_token',
        'cloudflare_account_id',
        'cloudflare_default_proxied',
        'cloudflare_account_name',
        'gsc_verification_filename',
    ];

    protected function casts(): array
    {
        return [
            'keitaro_api_key' => 'encrypted',
            'crm_api_key' => 'encrypted',
            'tg_bot_token' => 'encrypted',
            'deploy_password' => 'encrypted',
            'dynadot_api_key' => 'encrypted',
            'dynadot_api_secret' => 'encrypted',
            'cloudflare_api_token' => 'encrypted',
            'deploy_port' => 'integer',
            'dynadot_sandbox' => 'boolean',
            'dynadot_default_years' => 'integer',
            'cloudflare_default_proxied' => 'boolean',
            'origin_health_alerts' => 'boolean',
            'origin_health' => 'array',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function isUbuntuDriver(): bool
    {
        return DeployDriver::isUbuntu($this->deploy_driver);
    }

    public function hasOriginCredentials(): bool
    {
        return filled($this->deploy_host)
            && filled($this->deploy_username)
            && filled($this->deploy_password);
    }

    /**
     * @return array<string, mixed>
     */
    public function originHealthForPanel(): array
    {
        $health = is_array($this->origin_health) ? $this->origin_health : [];

        return [
            'status' => (string) ($health['status'] ?? 'unchecked'),
            'checked_at' => $health['checked_at'] ?? null,
            'fail_streak' => (int) ($health['fail_streak'] ?? 0),
            'message' => $health['message'] ?? null,
            'metrics' => is_array($health['metrics'] ?? null) ? $health['metrics'] : null,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toPanelArray(): array
    {
        return [
            'keitaro_url' => $this->keitaro_url ?? 'https://clickmetrics38.com',
            'keitaro_group' => $this->keitaro_group_id ?? '19',
            'affiliate_tag' => $this->affiliate_tag ?? 'BRO',
            'tg_chat_id' => $this->tg_chat_id ?? '',
            'tg_group_chat_id' => $this->tg_group_chat_id ?? '',
            'sales_postback_token' => $this->sales_postback_token ?? '',
            'has_keitaro_api_key' => filled($this->keitaro_api_key),
            'has_crm_api_key' => filled($this->crm_api_key),
            'has_tg_bot_token' => filled($this->tg_bot_token),
            'deploy_driver' => DeployDriver::normalize($this->deploy_driver),
            'deploy_panel_name' => $this->deploy_panel_name ?? '',
            'deploy_host' => $this->deploy_host ?? '',
            'deploy_port' => $this->deploy_port ?? 22,
            'deploy_username' => $this->deploy_username ?? '',
            'deploy_path_template' => $this->deploy_path_template
                ?: DeployDriver::defaultPath($this->deploy_driver),
            'origin_health' => $this->originHealthForPanel(),
            'origin_health_alerts' => (bool) ($this->origin_health_alerts ?? true),
            'has_deploy_password' => filled($this->deploy_password),
            'has_dynadot_api_key' => filled($this->dynadot_api_key),
            'has_dynadot_contact_id' => filled($this->dynadot_contact_id),
            'dynadot_contact_id' => $this->dynadot_contact_id ?? '',
            'dynadot_account_name' => $this->dynadot_account_name ?? '',
            'has_cloudflare_api_token' => filled($this->cloudflare_api_token),
            'cloudflare_account_id' => $this->cloudflare_account_id ?? '',
            'cloudflare_default_proxied' => (bool) ($this->cloudflare_default_proxied ?? true),
            'cloudflare_account_name' => $this->cloudflare_account_name ?? '',
            'gsc_verification_filename' => $this->gsc_verification_filename ?? '',
            'has_gsc_verification_file' => filled($this->gsc_verification_filename),
        ];
    }

    /**
     * Snapshot of Cloudflare/Dynadot credentials + labels at offer creation time.
     * Names are shown in the offers table; secrets stay encrypted and out of the UI.
     *
     * @return array{
     *     cloudflare_account_name: ?string,
     *     dynadot_account_name: ?string,
     *     cloudflare_api_token: ?string,
     *     cloudflare_account_id: ?string,
     *     dynadot_api_key: ?string,
     *     dynadot_contact_id: ?string,
     *     dynadot_sandbox: ?bool
     * }
     */
    public function providerSnapshotForOffer(): array
    {
        $cfName = trim((string) ($this->cloudflare_account_name ?? ''));
        $dynName = trim((string) ($this->dynadot_account_name ?? ''));
        $cfToken = CloudflareClient::normalizeApiToken($this->cloudflare_api_token);
        $cfAccountId = trim((string) ($this->cloudflare_account_id ?? ''));
        $dynKey = trim((string) ($this->dynadot_api_key ?? ''));
        $dynContact = trim((string) ($this->dynadot_contact_id ?? ''));

        return [
            'cloudflare_account_name' => $cfName !== '' ? $cfName : null,
            'dynadot_account_name' => $dynName !== '' ? $dynName : null,
            'cloudflare_api_token' => $cfToken !== '' ? $cfToken : null,
            'cloudflare_account_id' => $cfAccountId !== '' ? $cfAccountId : null,
            'dynadot_api_key' => $dynKey !== '' ? $dynKey : null,
            'dynadot_contact_id' => $dynContact !== '' ? $dynContact : null,
            'dynadot_sandbox' => false,
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
            'dynadot_api_key' => $this->dynadot_api_key ?? '',
            'dynadot_api_secret' => $this->dynadot_api_secret ?? '',
            'cloudflare_api_token' => $this->cloudflare_api_token ?? '',
        ]);
    }
}

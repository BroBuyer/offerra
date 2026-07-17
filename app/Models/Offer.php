<?php

namespace App\Models;

use App\Support\InfrastructureOptions;
use App\Services\TemplateCatalog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offer extends Model
{
    protected $fillable = [
        'user_id',
        'folder',
        'brand',
        'domain',
        'geo',
        'lang',
        'phone',
        'phone_countries',
        'min_deposit',
        'currency',
        'template',
        'status',
        'deploy_panel_name',
        'remote_path',
        'deployed_at',
        'deploy_error',
        'archived_at',
        'archived_by',
        'teardown_meta',
        'submitted_for_indexing',
        'indexed_at',
        'verification_filename',
        'keitaro_campaign_id',
        'keitaro_alias',
        'keitaro_campaign_token',
        'provision_infrastructure',
        'infra_status',
        'infra_error',
        'infra_meta',
    ];

    protected function casts(): array
    {
        return [
            'deployed_at' => 'datetime',
            'archived_at' => 'datetime',
            'submitted_for_indexing' => 'boolean',
            'indexed_at' => 'datetime',
            'provision_infrastructure' => 'boolean',
            'keitaro_campaign_token' => 'encrypted',
            'infra_meta' => 'array',
            'teardown_meta' => 'array',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function archivedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'archived_by');
    }

    public function isArchived(): bool
    {
        return $this->status === 'archived';
    }

    public function isArchiving(): bool
    {
        return $this->status === 'archiving';
    }

    /**
     * @return list<string>
     */
    public function phoneCountriesList(): array
    {
        $raw = $this->phone_countries ?: $this->phone;

        if (! $raw) {
            return [];
        }

        return array_values(array_unique(array_filter(array_map(
            static fn (string $code) => strtolower(trim($code)),
            explode(',', strtolower((string) $raw)),
        ), static fn (string $code) => strlen($code) === 2 && ctype_alpha($code))));
    }

    /**
     * DNS propagation state for the offers table.
     * na | skipped | waiting | pending | ready
     */
    public function dnsStatus(): string
    {
        $dns = is_array($this->infra_meta) ? ($this->infra_meta['dns'] ?? null) : null;

        if ($dns === 'done') {
            return 'ready';
        }

        if (! $this->provision_infrastructure) {
            return 'na';
        }

        $options = InfrastructureOptions::forOffer($this);

        if (! InfrastructureOptions::needsDnsWait($options)) {
            return 'skipped';
        }

        if ($dns === 'pending' || $this->infra_status === 'dns_propagating') {
            return 'pending';
        }

        if (in_array($this->infra_status, ['ready', 'dns_propagating'], true)) {
            return 'pending';
        }

        return 'waiting';
    }

    /**
     * @return array<string, mixed>
     */
    public function toPanelArray(): array
    {
        $templateLabel = app(TemplateCatalog::class)->label($this->template);

        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'user_name' => $this->user?->name,
            'user_email' => $this->user?->email,
            'folder' => $this->folder,
            'brand' => $this->brand,
            'domain' => $this->domain,
            'geo' => $this->geo,
            'lang' => $this->lang,
            'phone' => strtolower((string) ($this->phone ?? '')),
            'phone_countries' => $this->phoneCountriesList(),
            'template' => $templateLabel,
            'keitaro_id' => $this->keitaro_campaign_id ? (string) $this->keitaro_campaign_id : null,
            'can_create_keitaro' => ! $this->keitaro_campaign_id,
            'status' => $this->status,
            'deploy_panel' => $this->deploy_panel_name,
            'deployed_at' => $this->deployed_at?->timezone('Europe/Kyiv')->format('Y-m-d H:i'),
            'deploy_error' => $this->deploy_error,
            'archived_at' => $this->archived_at?->timezone('Europe/Kyiv')->format('Y-m-d H:i'),
            'teardown_meta' => $this->teardown_meta ?? [],
            'submitted_for_indexing' => $this->submitted_for_indexing,
            'indexed_at' => $this->indexed_at?->timezone('Europe/Kyiv')->format('Y-m-d H:i'),
            'date' => $this->created_at?->format('Y-m-d'),
            'provision_infrastructure' => (bool) $this->provision_infrastructure,
            'infra_status' => $this->infra_status === 'dns_propagating' ? 'ready' : $this->infra_status,
            'infra_error' => $this->infra_status === 'failed' ? $this->infra_error : null,
            'dns_status' => $this->dnsStatus(),
            'dns_error' => is_array($this->infra_meta) ? ($this->infra_meta['dns_error'] ?? null) : null,
            'infra_meta' => $this->infra_meta ?? [],
        ];
    }
}

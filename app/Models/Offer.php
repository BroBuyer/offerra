<?php

namespace App\Models;

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
        'template',
        'status',
        'deploy_panel_name',
        'remote_path',
        'deployed_at',
        'deploy_error',
        'keitaro_campaign_id',
        'keitaro_alias',
    ];

    protected function casts(): array
    {
        return [
            'deployed_at' => 'datetime',
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
        $templateLabel = app(TemplateCatalog::class)->label($this->template);

        return [
            'id' => $this->id,
            'folder' => $this->folder,
            'brand' => $this->brand,
            'domain' => $this->domain,
            'geo' => $this->geo,
            'lang' => $this->lang,
            'template' => $templateLabel,
            'keitaro_id' => $this->keitaro_campaign_id ? (string) $this->keitaro_campaign_id : null,
            'status' => $this->status,
            'deploy_panel' => $this->deploy_panel_name,
            'deployed_at' => $this->deployed_at?->format('Y-m-d H:i'),
            'deploy_error' => $this->deploy_error,
            'date' => $this->created_at?->format('Y-m-d'),
        ];
    }
}

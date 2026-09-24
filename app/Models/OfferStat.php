<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OfferStat extends Model
{
    protected $fillable = [
        'offer_id',
        'clicks_geo_count',
        'last_click_geo_at',
        'leads_count',
        'last_lead_at',
        'deposits_count',
        'last_deposit_at',
        'is_protected',
    ];

    protected function casts(): array
    {
        return [
            'clicks_geo_count' => 'integer',
            'leads_count' => 'integer',
            'deposits_count' => 'integer',
            'last_click_geo_at' => 'datetime',
            'last_lead_at' => 'datetime',
            'last_deposit_at' => 'datetime',
            'is_protected' => 'boolean',
        ];
    }

    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }

    /**
     * @return array<string, mixed>
     */
    public function toPanelArray(): array
    {
        return [
            'clicks_geo_count' => (int) $this->clicks_geo_count,
            'last_click_geo_at' => $this->last_click_geo_at?->format('Y-m-d H:i:s'),
            'leads_count' => (int) $this->leads_count,
            'last_lead_at' => $this->last_lead_at?->format('Y-m-d H:i:s'),
            'deposits_count' => (int) $this->deposits_count,
            'last_deposit_at' => $this->last_deposit_at?->format('Y-m-d H:i:s'),
            'is_protected' => (bool) $this->is_protected,
        ];
    }
}
